<?php
include('config.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') { 

    $phone = $_POST['phone'];
    $otp = $_POST['verification'];
        
        $sql = "UPDATE tbl_donors SET `is_verified`='1' WHERE  `phone`='$phone'";
        $result = mysqli_query($db,$sql);
            
        if(!$result ) {
        //    die('Could not enter data: ' . mysqli_error($db));
        echo "\n";
        echo ("<script>
        window.alert('An error occurred!');
        window.location.href='../donor.php';
        </script>");
        }
        else{
            echo "\n";
            echo ("<script>
            window.alert('Successfully Verified');
            window.location.href='../index.php';
            </script>");
        }
}

else{
    echo "\n";
    echo ("<script>
     window.location.href='../index.php';
     </script>");
}

?>