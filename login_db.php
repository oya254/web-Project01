<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['log_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);


        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                header("location: main.php");
                $row = mysqli_fetch_array($result);

                $_SESSION['userid'] = $row['id'];
                $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
                $_SESSION['userlevel'] = $row['userlevel'];
    
                if ($_SESSION['userlevel'] == 'Admin') {
                    header("location: main_admin.php");
                }
        
                if ($_SESSION['userlevel'] == 'Member') {
                    header("location: main.php");
                }
                } else {
                    array_push($errors, "ชื่อหรือรหัสผ่านไม่ถูกต้อง!");
                    $_SESSION['error'] = "ชื่อหรือรหัสผ่านไม่ถูกต้อง!";
                    header("location: login.php");
                }
                } 
    }

?>