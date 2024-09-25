<?php
    if (isset($_POST['Username'])) { //Checking if theres a value in the username field
        $Username = $_POST['Username'];
    }
    else {
        header("Location: ../register.php?invalidName");
        die();
    }
    if (isset($_POST['Password'])) {  //Checking if theres a value in the password field
        $HashedPassword = password_hash($CPassword = $_POST['Password'], PASSWORD_DEFAULT); //Hashing for database
    }
    else {
        header("Location: ../register.php?invalidPass");
        die();
    }
    if (isset($_POST['lvl'])) {  //Checking if theres a value in the password field
        $Admin = $_POST['lvl'];
    }
    else {
        header("Location: ../register.php?invalidAdmin");
        die();
    }

    $conn = new mysqli("localhost", "root", "", "cloud"); // setting up connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); //checking if it's connected
    }
    $sql = $conn->prepare("SELECT ID FROM login_info WHERE username = ?");
    $sql->bind_param("s", $Username);
    $sql->execute();
    $result = $sql->get_result();
    if (mysqli_num_rows($result) == 0) { //if no matching usernames continue

        $sql = $conn->prepare("INSERT INTO login_info (username, password, admin_level) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $Username, $HashedPassword, $Admin);
        try { $sql->execute(); }
        catch (mysqli_sql_exception $e){
            if ($e->getcode() == 1062){
                header("Location: ../register.php?nameTaken");
                die;
            }
        }
        
        $conn->close();
    }
    else{
        header("Location: ../register.php?nameTaken");
        die();
    }

    header('Location: ../Login.php')
    ?>