<?php

include "headers/connection.php";

include "headers/err.php";

global $con;


if( isset( $_POST['submit'] ) ){

    // echo $_POST[24115][4] ;
    // die();
    $query = "SELECT ID, NAME FROM familymembers ";
    $query .= "WHERE FID = " . $_GET['193835b3b781365a5b024ad8900cf781'] . "; " ;

    $res = mysqli_query($con,$query);

    // $var =  $_POST[24115][2] ;
    // if ($var == null){
    //     echo "Hello";
    // }

    $date = mysqli_escape_string( $con, $_POST['dat'] );
    $time = mysqli_escape_string( $con, $_POST['tim'] );
    
    
    while( $row = mysqli_fetch_assoc($res) ){

        $ol = mysqli_escape_string( $con, $_POST[ $row['ID'] ][0] );
        $pr = mysqli_escape_string( $con, $_POST[ $row['ID'] ][1] );
        


        $temp = $_POST[ $row['ID'] ][2];
        $sugar =  $_POST[ $row['ID'] ][3];
        $bp = $_POST[ $row['ID'] ][4];

        if ($temp == null){
            $temp = 'NULL';
        } else {
            $temp = mysqli_escape_string( $con, $temp );
        }
        
        if ($sugar == null){
            $sugar = 'NULL';
        } else {
            $sugar = mysqli_escape_string( $con, $sugar );
        }

        if ($bp == null){
            $bp = 'NULL';
        } else {
            $bp = mysqli_escape_string( $con, $bp );
            $bp = "'".$bp."'";
        }



        $query = "INSERT INTO test_results VALUE ";
        $query .= "( ". $row['ID'] .", ".$ol.", ".$pr.", ".$temp.", ".$sugar.", ".$bp.", '".$date."', '".$time."' ); ";

        // echo $query."<br>";

        // echo "<br><br>";
        
        mysqli_query($con,$query);

    }
    
    die("<h1>Data Has Been Inserted Successfully!</h1> <br> <h2>To Insert More Data Press Back Button </h2>");



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
        html {
                    height: 100%;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                    background-color: rgb(25, 160, 175);
                    background-image: linear-gradient(141deg, rgb(64, 87, 79) 0%, rgb(25, 160, 175) 51%, rgb(19, 131, 173) 75%);
                    background-repeat:no-repeat;
            }

        #con{
            background-color: rgb(25, 160, 175);
            background-image: linear-gradient(141deg, rgb(64, 87, 79) 0%, rgb(25, 160, 175) 51%, rgb(19, 131, 173) 75%);
            background-repeat: repeat;
        }

        p b{
            font-size: 25px;
        }
    </style>

    <body>

        <div class="uk-section uk-section-small" id="con">
            <div class="uk-container">
                <p class="uk-text-center">

                    <b id="date"> Date : ---------- </b> 
                    <br> 
                    <br>
                    <b id="time">Time : --------- </b> 
                </p>
            </div>
        </div>

        <div class="uk-section uk-section-secondary uk-margin-left uk-margin-right" style=" opacity: 0.9;">

            <div class="uk-container" id="con" >

                <form action="datainsert.php?193835b3b781365a5b024ad8900cf781=<?php echo $_GET['193835b3b781365a5b024ad8900cf781'] ?>" method="POST">
                

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

                    <?php  while ($row =  mysqli_fetch_assoc($res) )
                            {        
                    ?>

                                <tr>
                                    <td class="uk-text-center"><?php echo $row['NAME'] ?></td> 
                                    <td> <input type="text" class="uk-input uk-text-primary" name="<?php echo $row['ID']."[]" ?>" placeholder="Oxygen Level" style="border-radius: 25% 10%;" required> </td>
                                    <td> <input type="text" class="uk-input uk-text-primary" name="<?php echo $row['ID']."[]" ?>" placeholder="Pulse Rate" style="border-radius: 25% 10%;" required> </td>
                                    <td> <input type="text" class="uk-input uk-text-primary" name="<?php echo $row['ID']."[]" ?>" placeholder="Temparature" style="border-radius: 25% 10%;"> </td>
                                    <td> <input type="text" class="uk-input uk-text-primary" name="<?php echo $row['ID']."[]" ?>" placeholder="Sugar" style="border-radius: 25% 10%;"> </td>
                                    <td> <input type="text" class="uk-input uk-text-primary" name="<?php echo $row['ID']."[]" ?>" placeholder="Blood Presure" style="border-radius: 25% 10%;"> </td>
                                </tr>

                    <?php
                            }
                    ?>
                        
                        </tbody>
                            
                    </table>
                    
                    <input type="hidden" name="dat" id="dt" value=""> 

                    <input type="hidden" name="tim" id = "t" value="">

                    <button class="uk-button uk-button-danger uk-align-center" name="submit" style="border-radius: 10% 25%;">Submit</button>  

                </form>
                <script src="js/datainsert.js"></script>
            </div>

        </div>

        <!-- <div class="uk-section ">
            <div class="uk-position-bottom">
                <h1> </h1>
                <br>
                <h1> </h1>
            </div>
        </div> -->

    </body>
</html>