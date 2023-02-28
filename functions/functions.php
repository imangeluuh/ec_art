<?php
    // Start session 
    if(!session_id()){ 
        session_start(); 
    } 


    // Retrieve session data 
    $userData = !empty($_SESSION['userData'])?$_SESSION['userData']:''; 

    // Include database configuration file 
    require_once '../database/dbConfig.php'; 

    /////////////////////////////
    // Landing Page Functions //
    ////////////////////////////

    /* function to display products in landing page */
    function getLandingArtwork(){
        global $conn;

        // Fetch the data from SQL server

        $tsql = "SP_LIST_ARTWORKS";  

        /* Execute the query. */  
        $stmt = sqlsrv_query($conn, $tsql);  
        if ( $stmt )  
        {  
            // Display products
            while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
                $artwork_name = $row['ArtworkName'];
                $image = $row['Image'];
                $price = $row['Price'];
                $artist_name = $row['ArtistFirstName'] . " " . $row['ArtistLastName'];
                
                echo "<div class='product-card col-md-4 mb-3'>
                        <div class='card'>
                            <img src='../img/art-img/$image' class='card-img-top' alt='...'>
                            <div class='card-body p-0 pt-2'>
                                <h5 class='card-title text-uppercase fw-bold m-0'>$artwork_name</h5>
                                <p class='card-text mb-2'>By $artist_name</p>
                                <div class='d-flex justify-content-center'>
                                    <a href='create.php' class='btn buy-btn fw-bold'>BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>"; 
            }
        }   
        else   
        {  
            echo "Error in statement execution.\n";  
            die( print_r( sqlsrv_errors(), true));  
        }  
    }

    function userLogin($username, $password) {
        global $conn;
        // check if the username is existing
        $tsql = "SP_FIND_USERNAME ?";
        $params = array($username);
        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
        $stmt = sqlsrv_query($conn, $tsql, $params, $options);
        $row_count = sqlsrv_num_rows($stmt);
        // if number of rows is greater than 0, the username is already existing
        if(!$row_count) {
            echo "<script>alert('Username not found. Please create an account first.')</script>";
        } else {
            $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);

            if($row['Password'] == $password){
                $userData = array('username' => $row['Username']
                                    , 'password' => $row['Password']);
                $_SESSION['userData'] = $userData;
                if($row['RoleID'] == 1) {                    
                    header("Location: ../artist/artist.php");
                    exit;
                } else {
                    header("Location: ../client/client.php");
                    exit;
                }
            } else {
                echo "<script>alert('Invalid Credentials')</script>";
            }
        }
    }

    //////////////////////
    // Client Functions //
    //////////////////////

    /* function to search artworks */
    function searchArtwork($word) {
        global $conn;

        $keyword = $word;
        // Fetch the data from SQL server

        $tsql = "SP_SEARCH_ARTWORK ?";  

        $param = array($keyword);

        /* Execute the query. */  
        $stmt = sqlsrv_query($conn, $tsql, $param);  
        if ( $stmt )  
        {  
            // Display products
            while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
                $artwork_name = $row['ArtworkName'];
                $image = $row['Image'];
                $price = $row['Price'];
                $artist_id = $row['ArtistID'];
                $artist_name = $row['ArtistFirstName'] . " " . $row['ArtistLastName']; ?>
                
                <div class="card div-card mx-lg-5 my-3 p-0" style="max-width: 23rem;">
                        <img src="../img/art-img/<?php echo $image; ?>" class="card-img-top rounded-top-5" alt="$artwork_name">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $artwork_name; ?></h5>
                            <span>by <a href="client_artist.php?id=<?php echo $artist_id; ?>" class="artist-link"><?php echo $artist_name; ?></a></span>
                            <p class="d-flex justify-content-end price fw-semibold">₱<?php echo $price; ?></p>
                            <div class="card-text d-flex justify-content-end">
                                <button class="btn rounded-4 bg-secondary me-2"><i class="cart fa-solid fa-cart-shopping"></i></button>
                                <a href="client.php?checkout" class="status d-flex justify-content-center text-decoration-none">BUY NOW</a>
                            </div>
                        </div>
                    </div>
        <?php   }
        }   
        else   
        {  
            echo "Error in statement execution.\n";  
            die( print_r( sqlsrv_errors(), true));  
        } 
    }

    /* function to display products in client's home */
    function getClientArtworks(){
        global $conn;

        // Fetch the data from SQL server

        $tsql = "SP_LIST_ARTWORKS";  

        /* Execute the query. */  
        $stmt = sqlsrv_query($conn, $tsql);  
        if ( $stmt )  
        {  
            // Display products
            while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
                $artwork_name = $row['ArtworkName'];
                $image = $row['Image'];
                $price = $row['Price'];
                $artist_id = $row['ArtistID'];
                $artist_name = $row['ArtistFirstName'] . " " . $row['ArtistLastName']; ?>
                
                <div class="card div-card mx-lg-3 my-3 p-0" style="max-width: 23rem;">
                        <img src="../img/art-img/<?php echo $image; ?>" class="card-img-top rounded-top-5" alt="$artwork_name">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $artwork_name; ?></h5>
                            <span>by <a href="client_artist.php?id=<?php echo $artist_id; ?>" class="artist-link"><?php echo $artist_name; ?></a></span>
                            <p class="d-flex justify-content-end price">₱<?php echo $price; ?></p>
                            <div class="card-text d-flex justify-content-end">
                                <a href="client.php?checkout&action=add&artwork_name=<?php echo $artwork_name; ?>&artist_name=<?php echo $artist_name; ?>&image=<?php echo $image; ?>&price=<?php echo $price; ?>" class="btn rounded-4 bg-secondary me-2"><i class="cart fa-solid fa-cart-shopping"></i></a>
                                <a href="client.php?checkout" class="status d-flex justify-content-center text-decoration-none">BUY NOW</a>
                            </div>
                        </div>
                    </div>
        <?php   }
        }   
        else   
        {  
            echo "Error in statement execution.\n";  
            die( print_r( sqlsrv_errors(), true));  
        }  
    }


    /* function to display client's purchased artworks */
    function getPurchasedArtworks(){
        // global $conn;

        // // Fetch the data from SQL server

        // $tsql = "SP_LIST_ARTWORKS";  

        // /* Execute the query. */  
        // $stmt = sqlsrv_query($conn, $tsql);  
        // if ( $stmt )  
        // {  
        //     // Display products
        //     while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
        //         $artwork_name = $row['ArtworkName'];
        //         $image = base64_encode($row['Image']);
        //         $price = $row['Price'];
        //         $artist_name = $row['ArtistFirstName'] . " " . $row['ArtistLastName'];
                
        //         echo "<div class='card div-card mx-lg-3 mx-xl-4 my-3 p-0' style='max-width: 23rem;'>
        //                 <img src='data:image.jpeg;base64,$image' class='card-img-top' alt='$artwork_name'>
        //                 <div class='card-body'>
        //                     <h5 class='card-title'>$artwork_name</h5>
        //                     <p class='d-flex justify-content-end price'>₱$price</p>
        //                     <div class='card-text d-flex justify-content-between'>
        //                         <span>By $artist_name</span>
        //                         <p class='status d-flex justify-content-center '>DOWNLOAD</p>
        //                     </div>
        //                 </div>
        //             </div>"; 
        //     }
        // }   
        // else   
        // {  
        //     echo "Error in statement execution.\n";  
        //     die( print_r( sqlsrv_errors(), true));  
        // }  
    }
?>