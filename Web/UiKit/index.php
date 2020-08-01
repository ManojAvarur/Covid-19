<?php include "headers/connection.php" ?>

<?php

    $spanCheck = false;

    if( isset( $_POST['submit']) ){

        $spanCheck = true;

        global $con;

        $res = 1;

        $querry = "SELECT FID  FROM login ";
        $querry .= "WHERE FID = '". $_POST['fid'] ."' AND ";
        $querry .= "PASSWORD = '" . $_POST['password'] . "' ;";

        $res = mysqli_query($con,$querry);

        $fid = 0;

            while($row = mysqli_fetch_assoc($res))
                $fid = $row['FID'];
                
        if($fid === $_POST['fid']){
            $spanCheck = false;
            unset($_POST);
            // header('Location: datainsert.php?fid='.$fid);
            // echo "<script> window.location.href = 'datainsert.php?fid=" . $fid . "; </script>";
            echo "<script> window.location.href = 'datainsert.php?ud=6841641684a6sd4a16sda8fc6a&udd=oiadswofsdsdsapp&193835b3b781365a5b024ad8900cf781=". $fid ."'; </script>";
        }
        

    }
    

    
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Family Report</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="uikit/css/uikit.min.css" />
        <script src="uikit/js/uikit.min.js"></script>
        <script src="uikit/js/uikit-icons.min.js"></script>
        <script src="js/index.js"></script>
    </head>

    <body>

        <div class=" uk-height-max-large uk-background-cover " data-src="images\2.jpg"  uk-height-viewport uk-img>
            <!-- data-src="https://source.unsplash.com/1024x1024?nature"  https://source.unsplash.com/1024x1024?virus  data-src="" -->
            <div class="uk-cover-container uk-position-center">
                <div class="uk-card uk-card-large uk-felx uk-align-center uk-card-default uk-card-large uk-card-body uk-padding-large uk-width-large uk-width-3@m uk-height-max-auto" style="border-radius: 25% 10%; opacity: 0.8;">
                    <h1 class="uk-text-center">Login</h1>
                        <br>
                        <form action="index.php" method="post">

                            <?php

                                if ($spanCheck == true){
                                    echo "<span> <h6 class=\"uk-text-meta uk-text-bold uk-text-center uk-text-danger uk-text-capitalize\">username (or) password is incorrect!</h6> </span>";
                                }
                                   

                            ?>
                            
                            <input class="uk-input uk-text-primary" placeholder="Family ID" name="fid" type="text" value="1754862" style="border-radius: 10% 25%;" required>
                            <br><br>
                            <input class="uk-input uk-text-primary" placeholder="Password" name="password" type="password" style="border-radius: 10% 25%;" required>
                            <br><br>
                            <button class="uk-button uk-button-primary uk-align-center" name="submit" style="border-radius: 10% 25%;">Submit</button>
                        </form>    
                        
                </div>
            </div>
        </div>

        <script>
            if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            }
        </script>

    </body>
</html>