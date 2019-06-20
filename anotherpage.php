<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<script src="javascript.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

 <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
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
	<h1>Hello Universe!</h1>
	<h2>This is another page!<small> A smaller page!</small></h2>
</div>

<img src="fortnitebomber.jpg" class="rounded mx-auto d-block" alt="Fortnite" style="width:350px; height:200px; border:0;"> 

<hr>

<div class="jumbotron jumbotron-fluid" style="text-align:center">
  <div class="container">
    <h1>Power to the peacocks!</h1>
    <a style="text-align: center" href="https://peacocksden.wordpress.com/">Check out my blog!</a>
  </div>
</div>

<div class="alert alert-success alert-dismissible fade show fixed-bottom pull-right" style="width:50%">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>

<hr>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
		<form>
			<select name="fileFormats" class="custom-select">
				<option selected>File format</option>
				<option value="jpg">JPEG</option>
				<option value="png">PNG</option>
				<option value="pdf">PDF</option>
			</select>
		</form><br>
		<form>
			<div class="custom-file">
				<input type="file" class="custom-file-input" id="customFile">
				<label class="custom-file-label" for="customFile">Choose file</label>
			</div>
		</form><br>	
		<input type="submit" name="fileSubmit" class="btn btn-primary" value="submit"></input><br>
		</div>
		
		<div class="col-sm-6">
		<form>
			<label for="customRange">Custom Height</label>
			<input type="range" class="custom-range" id="customHeight" name="customHeight1">
		</form><br>

		<form>
			<label for="customRange">Custom Width</label>
			<input type="range" class="custom-range" id="customHeight" name="customWidth2">
		</form>
		</div>
		<img src="#" class="rounded mx-auto d-block" alt="" style="width:0px; height:0px; border:0;"> 
	</div>
</div>

<hr>

<ul class="pagination">
  <li class="page-item"><a class="page-link" href="homepage.php">Previous</a></li>
  <li class="page-item"><a class="page-link" href="homepage.php">1</a></li>
  <li class="page-item active"><a class="page-link" href="anotherpage.php">2</a></li>
  <li class="page-item"><a class="page-link" href="yetanotherpage.php">3</a></li>
  <li class="page-item"><a class="page-link" href="messages.php">4</a></li>
  <li class="page-item"><a class="page-link" href="jspage.php">5</a></li>
  <li class="page-item"><a class="page-link" href="xmlpage.php">6</a></li>
  <li class="page-item"><a class="page-link" href="phppage.php">7</a></li>
  <li class="page-item"><a class="page-link" href="yetanotherpage.php">Next</a></li>
</ul> 

<div class="btn-group">
	<a href="homepage.php" class="btn btn-warning" role="button">Home page</a>
	<a href="yetanotherpage.php" class="btn btn-warning" role="button">Yet another page</a>
</div>

</body>
</html> 