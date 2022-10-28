<?php
//database details. 
$host = "sql11.freemysqlhosting.net";
$username = "sql11529951";
$password = "PtzVJxFtV4";
$dbname = "sql11529951";

$name = $_POST['fullname'];
$user = $_POST['username'];
$email = $_POST['email'];
$passwordPost = $_POST['password'];
$confirmP = $_POST['confirm_password'];
$ntn = $_POST['nationality'];   

// if(isset($_POST['sumbit'])) {
//     echo "GEEKS";
    
//  }

//     }

        //create connection
        $conn = mysqli_connect($host, $username, $password, $dbname);
        //check if connection is working or not
        if ($conn) {
            # code...
            echo "connection successful <br>";
        }
        if (!$conn){
            die("connection failed!" .mysqli_connect_error());
        }
        //This below line is a code to send form entries to database
        $sql = "INSERT INTO signupform_entries (fullname_fld, username_fld, email_fld, password_fld, confirmpassword_fld, nationality_fld) 
        VALUES ('$name', '$user','$email', '$passwordPost', '$confirmP','$ntn')";

        // fire query to save entries and check it with if statement
        $rs = mysqli_query($conn, $sql);
        if($rs){
            echo "Message has been sent successsfully!";
            echo  $name, $user, $email, $passwordPost, $confirmP, $ntn;
        } else{
            echo "Error ,Message didn't send! Something's wrong.";
            mysqli_error($conn);
        }

        //connection closed.
        mysqli_close($conn);

?>