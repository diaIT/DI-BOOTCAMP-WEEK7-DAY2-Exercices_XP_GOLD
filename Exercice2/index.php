
<!--Create the form HTML-->
<!--Submit the form to the same page with POST method-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
	
<input type="text" name="number1"><br><br>
<input type="text" name="number2"><br><br>
<input type="submit" name="submit" value="Calculer">

</form>
<?php 
//Checks if the form has been submitted (by checking if the submit button has been clicked).
//If the form has been submitted, it retrieves the form data from the $_POST array

if (isset($_POST['submit'])) {
	if (!is_numeric($_POST['number1']) || !is_numeric($_POST['number2'])) {
		echo "Saisir un nomber";
	}else{
		//Adds the two numbers together, and calculates the result.
		$sum=$_POST['number1']+$_POST['number2'];
		
		//The result is then displayed on the page.
	echo "The sum = ".$sum;
	}
	
}
 ?>