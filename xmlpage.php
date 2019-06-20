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
	<style>
	  table tr:nth-child(even) {
      background-color: #eee;
      }
      table tr:nth-child(odd) {
      background-color: #fff;
      }
      table th {
      color: white;
      background-color: black;
      }
	</style>
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
	<h1>Hello Mobius Strip!</h1>
	<h2>This is the XML testing page!<small> A very big page indeed!</small></h2>
</div>

<hr>

<div class="xmltest" id="xmltest">
  <input type="button" class="btn btn-warning" id="xmlButton" value="Print text using xml">
</div>

<input type="button" class="btn btn-warning" id="parserButton" value="Convert xml">

<p id="parsertest"></p>

<input type="button" class="btn btn-warning" id="loadAndParseButton" value="Print text using xml">

<p id="loadparsertest"></p><br>

<a href="test.xml">Styled XML page</a>

<hr>

<div class="container justify-content-center" style="width:50%">
	<form id="sendDataForm"  class="was-validated" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="form-group">
			First name:<br>
			<input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstname"><br>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="form-group">
			Last name:<br>
			<input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname" required><br>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="form-group">
			Email:<br>
			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required><br>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="form-group">
			Password:<br>
			<div class="input-group">
				<input type="password" class="form-control" placeholder="Enter password" name="password" id="pass" required>
				<div class="input-group-append">
					<button class="btn btn-primary" onclick="revealPassword()" type="button">Reveal<br>
				</div>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Please fill out this field.</div>
			</div>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input type="checkbox" class="form-check-input" value="">Rememeber me?
			</label>
		</div>
		<input type="button" class="btn btn-primary" onclick="sendData()" value="submit" style="margin-top:5%">
	</div>
	</form> 
	<p id="response"></p> 
</div>

<hr>

<div class="container justify-content-center" style="width:50%">
	<form id="nameToRetrieveForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="form-group">
			First name:<br>
			<input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstname"><br>
		</div>
		<input type="button" class="btn btn-primary" onclick="retrieveData(firstname.value)" value="submit">
	</div>
	</form> 
	<p id="retrieval" style="text-align: center"></p> 
</div>

<hr>

<ul class="pagination">
  <li class="page-item"><a class="page-link" href="messages.php">Previous</a></li>
  <li class="page-item"><a class="page-link" href="homepage.php">1</a></li>
  <li class="page-item"><a class="page-link" href="anotherpage.php">2</a></li>
  <li class="page-item"><a class="page-link" href="yetanotherpage.php">3</a></li>
  <li class="page-item"><a class="page-link" href="messages.php">4</a></li>
  <li class="page-item"><a class="page-link" href="jspage.php">5</a></li>
  <li class="page-item active"><a class="page-link" href="xmlpage.php">6</a></li>
  <li class="page-item"><a class="page-link" href="phppage.php">7</a></li>
  <li class="page-item"><a class="page-link" href="phppage.php">Next</a></li>
</ul> 

<a href="messages.php" class="btn btn-warning" role="button">Messages</a>

</body>
</html> 