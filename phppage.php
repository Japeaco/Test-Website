<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="javascript.js" defer="true"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

 <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="homepage.php">Home</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="anotherpage.php">Another page</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="yetanotherpage.php">Yet another page</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="messages.php">Messages<span class="badge badge-light">4</span></a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Testing
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="jspage.php">Javascript</a>
        <a class="dropdown-item" href="xmlpage.php">XML</a>
        <a class="dropdown-item" href="phppage.php">PHP</a>
      </div>
    </li>
  </ul>
   <form class="form-inline navbar-nav ml-auto" action="searchresults.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav> 

<div class="container-fluid no-padding" style="background-color:rgb(255, 99, 71); text-align:center; width=100%">
	<h1>Hello Space!</h1>
	<h2>This is the PHP testing page!<small> A very big page!</small></h2>
</div>

<hr>

 <?php
 
 //defines class for objects
 class Car {
    function Car() {
        $this->model = "VW";
		$this->year = "1968";
    }
}

//create function
function writeMsg($msg) {
    $txt = "This is called from a function with message; $msg";
	return $txt;
}

// create an object
$herbie = new Car();

//example of an array
$cars = array("Volvo","BMW","Toyota");
$noCars = count($cars);

//example of an associative array
$carsNo = array("Volvo"=>"100","BMW"=>"300","Toyota"=>"200");

//sorting array
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

//define constant name and value ('true' makes constant case-insensitive)
define("GREETING", "Welcome to W3Schools.com!", true);
 
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";

// show object properties
echo "model: ", $herbie->model, " year: ", $herbie->year, "<br>";

// loop through array
foreach ($cars as $value){
	echo $value, "<br>";
}

//loop through associative array
foreach($carsNo as $x => $x_value) {
    echo "Key = $x, Value = $x_value";
    echo "<br>";
}

// loop through array
foreach ($numbers as $value){
	echo $value, "<br>";
}

//echo constant
echo greeting, "<br>";

//call function
echo writeMsg("hello"), "<br>";

echo "<h2>Server information</h2>";

//print server information using super globals
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

//the following code is for phptestform
$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

$nameErr = "";
$emailErr = "";
$websiteErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])){
	  $nameErr = "name is required!";
	} else {
	  $name = test_input($_POST["name"]);
	}
	
	if(empty($_POST["email"])){
	  $emailErr = "email is required!";
	} else {
	  $email = test_input($_POST["email"]);
	  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "invalid email format";
      }
	}
	
	if(empty($_POST["website"])){
	  $websiteErr = "website is required!";
	} else {
	  $website = test_input($_POST["website"]);
	}
	
	$comment = test_input($_POST["comment"]);
	$gender = test_input($_POST["optradio"]);
}

function test_input($data) {
  //strips unneccesary characters from input
  $data = trim($data);
  //removes backslashes from input
  $data = stripslashes($data);
  //converts html to special characters
  $data = htmlspecialchars($data);
  return $data;
}

?> 

<hr>

<input type="button" class="btn btn-warning" id="jsonphpbutton" value="retrieve from db using JSON">

<p id="phpjson"></p>

<h2 style="width:50%; text-align: center">PHP Form Validation Example</h2>
<div class="container justify-content-center" style="width:50%">
  <!-- $_SERVER["PHP_SELF"] sends data to the page itself, not a different page; can display error messages on same page -->
  <!-- htmlspecialchars converts html to special characters so users cannot input html/javascript -->
  <!-- htmlspecialchars also prevents exploitation of $_SERVER["PHP_SELF"] by preventing input of html/javascript after "/" in URL -->
  <form id="phptestform" class="phptestform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
      Name: 
      <input type="text" class="form-control" id="name" name="name" placeholder="name here">
	  <span class="error" style="color: #FF0000">* <?php echo $nameErr;?></span>
    </div>
	<div class="form-group">
      Email: 
      <input type="text" class="form-control" id="email" name="email" placeholder="email here">
	  <span class="error" style="color: #FF0000">* <?php echo $emailErr;?></span>
    </div>
	<div class="form-group">
      Website: 
      <input type="text" class="form-control" id="website" name="website" placeholder="website here">
	  <span class="error" style="color: #FF0000">* <?php echo $websiteErr;?></span>
    </div>
	<div class="form-group">
      Comment: 
      <textarea rows="5" cols="40" class="form-control" id="comment" name="comment" placeholder="comment here"></textarea>
    </div>
	<div class="form-group">
      Gender: 
      <label class="radio-inline">
	    <input type="radio" id="gender" name="optradio" value="Female" checked>Female
	  </label>
	  <label class="radio-inline">
	    <input type="radio" id="gender" name="optradio" value="Male">Male
	  </label>
	  <label class="radio-inline">
	    <input type="radio" id="gender" name="optradio" value="Other">Other
	  </label>
    </div>
	<input type="submit" name="submit" value="submit">
  </form>
</div>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<ul class="pagination">
  <li class="page-item"><a class="page-link" href="messages.php">Previous</a></li>
  <li class="page-item"><a class="page-link" href="homepage.php">1</a></li>
  <li class="page-item"><a class="page-link" href="anotherpage.php">2</a></li>
  <li class="page-item"><a class="page-link" href="yetanotherpage.php">3</a></li>
  <li class="page-item"><a class="page-link" href="messages.php">4</a></li>
  <li class="page-item"><a class="page-link" href="jspage.php">5</a></li>
  <li class="page-item"><a class="page-link" href="xmlpage.php">6</a></li>
  <li class="page-item active"><a class="page-link" href="phppage.php">7</a></li>
</ul> 

<a href="messages.php" class="btn btn-warning" role="button">Messages</a>

</body>
</html> 