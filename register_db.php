<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
            $_SESSION['error'] = "รหัสผ่านไม่ตรงกัน!";
        }

        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) {
            if ($result['username'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($result['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);
            $sql = "INSERT INTO user (username, firstname, lastname, email, phone, password, userlevel) VALUES ('$username','$firstname','$lastname','$email','$phone','$password','Member')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            header('location: succ_register.php');
        } else {
            array_push($errors, "ชื่อหรืออีเมลมีผู้ใช้งานแล้ว");
            $_SESSION['error'] = "ชื่อหรืออีเมลมีผู้ใช้งานแล้ว";
            header("location: register.php");
        }
    }

?>