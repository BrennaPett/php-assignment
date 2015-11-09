<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Assignment#1</title>
</head>

<body>

<?php 

const FIRST_NAME 	= "Brenna";
const LAST_NAME 	= "Pett";
const MRS			= "Mrs.";
const MR 			= "Mr.";



$firstname					 		= "";
$lastname					 		= "";
$inputStudentNumber					= "";
$studentNumberValidationExpression	= "/^a00[0-9]{6}$/i";


if( empty($_POST['firstname']) == true && empty($_POST['lastname']) == true && empty($_POST['bcit-number']) == true ){
	
	//The Form wasn't completely Filled out
	echo "<p>Please fill the form out completely</p>";
	die("<p>Uh Oh! Please use the form <a href='./assign_1_brenna.html'/>form</a></p>");

}

	//echo "<p>Your username, password and bcit form was filled out</p>";
	
	$firstname 				= trim($_POST['firstname']);
	$lastname 				= trim($_POST['lastname']);
	$inputStudentNumber 	= trim($_POST['bcit-number']);
	$studentNumber		 	= preg_match( $studentNumberValidationExpression, $inputStudentNumber );
	
	//echo $firstname; 
	//echo $lastname;
	//echo $bcitNumber;
	
	if( ucfirst(strtolower($firstname)) != FIRST_NAME ){
		
		echo "<p>Incorrect First Name. Try Again</p>";
		die("<p>Uh Oh! Please fill out the <a href='./assign_1_brenna.html'>form</a> completely.</p>");
		
	}else if( ucfirst(strtolower($lastname)) != LAST_NAME ){
		
		echo "<p>Incorrect Last Name. Try Again</p>";
		die( "<p>Uh Oh! Please fill out the <a href='./assign_1_brenna.html'>form</a> completely.</p>");
		
	}else if( $studentNumber == 0){
		
		echo "<p>The Student Number is Not Valid. Please enter another.</p>";
		die("<p>Uh Oh! Please fill out the <a href='./assign_1_brenna.html'>form</a> completely.</p>");
		
	}else{

		if( isset($_POST['gender'])){
			
			if($_POST['gender'] == "male" ){
				echo "<p>Hello " . MR . " " . FIRST_NAME . " " . LAST_NAME . "!</p>";
			}else{
				echo "<p>Hello " . MRS . " " . FIRST_NAME . " " . LAST_NAME . "!</p>";
			}
			
		}else{
			
		  echo "<p>Please Select a Gender.</p>";
		  die("<p>Uh Oh! Please fill out the <a href='./assign_1_brenna.html'>form</a> completely.</p>");
		  
		}
	}
	
	if( isset($_POST['yourDescription'])){
		
		$arrayOfYourDescription = $_POST['yourDescription'];
		
		echo "<p>You are:</p>";
		echo "<ul>";
		  foreach( $arrayOfYourDescription as $oneDescription ){
			  echo "<li>$oneDescription</li>";
		  }
		echo "</ul>";
		
		$numberInArray = count($arrayOfYourDescription);
		
		//echo $numberInArray;
		
		if( $numberInArray == 3){
			echo "<p>WOW! That’s great!</p>";
		}else if( $numberInArray == 2){
			echo "<p>Glad to hear it! Keep it up!</p>";
		}else{
			echo "<p>Gee, that's swell</p>";
		}
		
	}else{
		
		echo "<p>Chin up! Things can only get better!</p>";
	}



?>

</body>
</html>