<?php
// Array to store user data
$users = [];

// Function to handle form submission
function handleSignUp()
{
    global $users;
    
    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Validate form data
        if (empty($username) || empty($password)) {
            echo "Please fill in all fields.";
        } else {
            // Store user data in array
            $users[] = [
                'username' => $username,
                'password' => $password
            ];
            
            echo "Sign-up successful!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    
    <?php handleSignUp(); ?>
    
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
