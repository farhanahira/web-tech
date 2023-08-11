<?php

require './connection.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    }

   
}


if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $duplicate = mysqli_query($conn, "select * from tb_user where username = '$username' or email = '$email'");

    if(mysqli_num_rows($duplicate) > 0){
        echo "<script> alert('Username or Email has already taken')</script>";
    }else{
        $query = "insert into tb_user values('', '$username', '$name', '$email', '$password')";
        mysqli_query($conn, $query);
        header("Location: './login_1.php'");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="name">name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" name="submit" value="Registration">
    </form>
</body>
</html>
