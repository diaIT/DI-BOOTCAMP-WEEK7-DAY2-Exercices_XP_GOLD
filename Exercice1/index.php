
<!---Create a form with three inputs for name, email, and password.--->
<!---Submit the form to the same page.--->


<?php 
$emailErr="";
$nameErr="";
$name="";
$email="";
$password="";

//creer une fonction test_input() qui verifie chaque variable $_POST
function test_input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
//Check if the request method is POST
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

//Validate the form
    if (empty($name))
     {
      $nameErr="Name is required";
    }
    else{
      $name=test_input($name);
    }

    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      $emailErr="Email is required";
    } 
    
    if (strlen($password)<8) {
      $passErr="password must be at least 8 characters";
    }
  
}


 ?>
<!--HTML form for user input -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  
<input type="text" name="name" placeholder="Name" required>

<br><br>
<input type="email" name="email" placeholder="Email" required>

<br><br>
<input type="password" name="password" placeholder="Password">
<br><br>
<input type="submit" name="submit">

</form>

<?php
echo '<h2>RECUPERATION:</h2>';
echo $name;
echo '<br>';
echo $email;
echo '<br>';
echo$password;
?>