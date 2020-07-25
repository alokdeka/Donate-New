<?php
include('config.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') { 


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $blood = $_POST['blood'];
    $lat = $_POST['lat'];
    $long = $_POST['long'];

    $query2 = "SELECT * FROM `tbl_patients` WHERE `phone`='$phone' AND `is_varified`='1'";
    $result2 = mysqli_query($db,$query2);
    if (mysqli_num_rows($result2) > 0) {
        echo "\n";
        echo ("<script>
         window.alert('Number Already Verified');
         window.location.href='../index.php';
         </script>");
    }
    else{
        $query1 = "SELECT * FROM `tbl_patients` WHERE `phone`='$phone'";
        $result1 = mysqli_query($db,$query1);
        if (mysqli_num_rows($result1) > 0) {
            $row = mysqli_fetch_assoc($result1);
            $id = $row['id'];            
            echo "\n";
            echo ("<script>
             window.alert('Number Already exists but not verified');
             window.location.href='../verifyPatient.php?id=$id';
             </script>");
        }
            else{
    
                $sql = "INSERT INTO `tbl_patients` (`name`, `phone`, `email`, `age`, `blood`, `pos_lat`, `pos_long`) VALUES ('$name', '$phone', '$email', '$age', '$blood', '$lat', '$long')";
                $result = mysqli_query($db,$sql);
                    
                if(!$result ) {
                //die('Could not enter data: ' . mysqli_error($db));   
                echo "\n";
                echo ("<script>
                 window.alert('An error occurred!');
                 window.location.href='../patient.php';
                 </script>");
                }
                else{
                    echo "\n";
                    echo ("<script>
                     window.alert('Successfully registered');
                     window.location.href='../verifyPatient.php';
                     </script>");
                }
    
            }
    }

}

else{
    echo "\n";
    echo ("<script>
     window.location.href='../index.php';
     </script>");
}

?>