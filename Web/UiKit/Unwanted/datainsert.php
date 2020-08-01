<?php

include "headers/connection.php";

include "headers/err.php";

global $con;


if( isset( $_POST['submit'] ) ){

    echo $_POST['24115'][4] ;

} else {

    // $testResults[][];

    // $fid = $_GET['193835b3b781365a5b024ad8900cf781'];

    $query = "SELECT ID, NAME FROM familymembers ";
    $query .= "WHERE FID = " . $_GET['193835b3b781365a5b024ad8900cf781'] . "; " ;

    // echo $query;

    $res = mysqli_query($con,$query);

    if(!$res){
        die("<h1> Connection Could Not Established To The Database Call <strong> Manoj </strong> Immediately </h1> <br> <h3>If he is sleeping you can call him later </h3>");
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
    <style>
        #con{
            background-color: rgb(25, 160, 175);
            background-image: linear-gradient(141deg, rgb(64, 87, 79) 0%, rgb(25, 160, 175) 51%, rgb(19, 131, 173) 75%);
            background-repeat: repeat;
        } 
    </style>

    <body>

    <div class=" uk-height-max-large uk-background-cover " id="con"  uk-height-viewport> <!--data-src="images\3.jpg" -->

        <div class="uk-container uk-container-expand uk-cover-container uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle" style="border-radius: 10% 25%; opacity:0.9;">

            <div class="uk-section-muted uk-padding">

                <form action="datainsert.php" method="post">

                    <table class="uk-table uk-table-large uk-table-hover uk-table-responsive uk-table-divider " >

                        

                            <thead>
                                <tr>
                                    <th class="uk-width-small">             </th>
                                    <th class="uk-width-small uk-text-center">Oxygen Level</th>
                                    <th class="uk-width-small uk-text-center">Pulse Rate</th>
                                    <th class="uk-width-small uk-text-center">Temparature</th>
                                    <th class="uk-width-small uk-text-center">Sugar</th>
                                    <th class="uk-width-small uk-text-center">Blood Presure</th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php    while ($row =  mysqli_fetch_assoc($res) )
                                    {        
                            ?>

                                        <tr>
                                            <td class="uk-text-center"><?php echo $row['NAME'] ?></td> 
                                            <td> <input type="text" class="uk-input uk-text-primary" name="<?php echo $row['ID']."[]" ?>" placeholder="Oxygen Level" style="border-radius: 25% 10%;"> </td>
                                            <td> <input type="text" class="uk-input uk-text-primary" name="<?php echo $row['ID']."[]" ?>" placeholder="Pulse Rate" style="border-radius: 25% 10%;"> </td>
                                            <td> <input type="text" class="uk-input uk-text-primary" name="<?php echo $row['ID']."[]" ?>" placeholder="Temparature" style="border-radius: 25% 10%;"> </td>
                                            <td> <input type="text" class="uk-input uk-text-primary" name="<?php echo $row['ID']."[]" ?>" placeholder="Sugar" style="border-radius: 25% 10%;"> </td>
                                            <td> <input type="text" class="uk-input uk-text-primary" name="<?php echo $row['ID']."[]" ?>" placeholder="Blood Presure" style="border-radius: 25% 10%;"> </td>
                                        </tr>

                            <?php
                                    }
                            ?>
                                
                            </tbody>
                        
                    </table>

                    <button class="uk-button uk-button-primary uk-align-center" name="submit" style="border-radius: 10% 25%;">Submit</button>   

                </form> 
            
            </div>
         
        </div>

    </div>

    </body>
</html>