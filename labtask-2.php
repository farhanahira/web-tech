<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $dateofbirth = $gender = $degree = $bloodgroup = "";

 

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $dateofbirth = test_input($_POST["dateofbirth"]);
  $gender = test_input($_POST["gender"]);
  $degree = test_input($_POST["degree"]);
  $bloodgroup = test_input($_POST["bloodgroup"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


<h2>PHP ASSESSMENT TASK</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
            <td>Date of Birth</td>
            <input type="date"id="month" name="year">
            
          <br><br>
  <tr>
 <td>Gender:</td>
  <td><input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other</td>
  <br><br>
</tr>
  <tr>
            <td>Degree:</td>
            <td><input type="checkbox" name="degree" value="SSC"> SSC</input>
               <input type="checkbox" name="degree" value="HSC"> HSC</input>
               <input type="checkbox" name="degree" value="BSC">BSC</input></td>
            
          </tr>
          <br><br>

          Blood Group:
            <select id="blood group">
               <option value="A positive">A+</option>
               <option value="A negative">A-</option>
               <option value="B positive">B+</option>
               <option value="B negative">B-</option>
               <option value="AB positive">AB+</option>
               <option value="AB negative">AB-</option>
               <option value="O positive">O+</option>
               <option value="O negative">O-</option>
             </select>
            
          </tr>  
          <br><br>      


  <input type="submit" name="submit" value="Submit"> 
  <br><br> 
</form>
<?php
 if (empty($_POST["name"])) {
    echo "Name cannot be empty<br>";
} else {
    $name = test_input($_POST["name"]);
    // Check if name contains two words and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        echo "Only start with letters and whitespace allowed in the name field.<br>";
    }
}
if (empty($_POST["email"])) {
    echo "email cannot be empty.<br>";
} else {
    $email = test_input($_POST["email"]);
    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.<br>";
    }

}
// Validate date of birth
if (empty($dob)) {
    echo "Date of Birth is required<br>";
}

// Validate gender
if (empty($gender)) {
    echo "Gender is required<br>";
}

// Validate degree
if (empty($degree)) {
    echo "Degree is required<br>";
}

// Validate blood group
if (empty($blood_group)) {
    echo "Blood Group is required<br>";
}

?>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dateofbirth;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $bloodgroup;
?>

</body>
</html>