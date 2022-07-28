<?php
    require_once "connection.php";

    
    if (isset($_POST['submit'])){
        $sname      =   mysqli_real_escape_string($conn, $_POST['name']);
        
        $address   =   mysqli_real_escape_string($conn, $_POST['address']);
        $phone      =   mysqli_real_escape_string($conn, $_POST['phone']);
    
        if (empty($sname) || empty($address) || empty($phone))
        {
            echo 'please fill all fields';
            die();
        };


        $sql    =   "INSERT INTO records(name, address, phone)
        VALUE(' $sname ', ' $address', '$phone')";

        if (mysqli_query($conn,$sql)){

            echo "Record submitted";

            echo "";
            exit;
            }else{
            echo "ERROR: not able to execute $sql. " . mysqli_error ($conn);
        };
    };
?>