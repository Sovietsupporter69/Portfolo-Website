
<?php
    if (isset($_POST['Username'])) { //Checking if theres a value in the username field
        $Username =($_POST['Username']);
    }
    else {
        header("Location: ../Login.php?invalidName");
        die();
    }

    if (isset($_POST['Password'])) {  //Checking if theres a value in the password field
        $CPassword = $_POST['Password'];
    }
    else {
        header("Location: ../Login.php?invalidPass");
        die();
    }

    $conn = new mysqli("localhost", "root", "", "cloud"); // setting up connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); //checking if it's connected
    }
    $sql = $conn->prepare("SELECT login_info.ID, login_info.Username, login_info.Password, login_info.Admin_level FROM login_info WHERE login_info.Username = ?");
    $sql->bind_param("s", $Username);
    $sql->execute();
    $result = $sql->get_result();
    $user = $result->fetch_assoc();

    if (mysqli_num_rows($result) == 0) { //if no matching usernames throw error
        header("Location: ../login.php?noMatch");
        die();
    }

    if (password_verify($CPassword, $user['Password'])){
        setcookie($user['Username'], $user['Admin_level'], time() + (86400*14)); //make an optional cookie that expires after 14 days. This allows you to stay loged in
        session_start(); 
        $_SESSION["username"] = $user['Username']; 
        $_SESSION["admin_level"] = $user['Admin_level']; //make a sesion that acctualy handles the current login sesion (the cookie only enables this sesion so the cookie is optional)
        if (session_status() !== PHP_SESSION_ACTIVE){
            header("Location: ../login.php?noSes"); //throw error if the session fails to be made
            die();
        }
        else{
            header('Location: ../Cloud.php');
            die();
        }
    }
    else{
        //header("Location: ../login.php?noPMatch"); //send user back to login if password is incorrect
        die();
    }

    $conn->close();
    header('Location: ../Login.php?retry')
?>