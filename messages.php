<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<script src="javascript.js"></script>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
      <a class="nav-link" href="#">Messages<span class="badge badge-light">4</span></a>
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
	<h1>Hello Milky Way!</h1>
	<h2>This is the messages page!<small> An even even smaller page!</small></h2>
</div>

<hr>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Messages will go here!</h1>
    <a style="text-align: center" href="https://peacocksden.wordpress.com/">Check out my blog!</a>
  </div>
</div>

<hr>

<p id="response"></p> 

<hr>

<ul class="pagination">
  <li class="page-item"><a class="page-link" href="yetanotherpage.php">Previous</a></li>
  <li class="page-item"><a class="page-link" href="homepage.php">1</a></li>
  <li class="page-item"><a class="page-link" href="anotherpage.php">2</a></li>
  <li class="page-item"><a class="page-link" href="yetanotherpage.php">3</a></li>
  <li class="page-item active"><a class="page-link" href="messages.php">4</a></li>
  <li class="page-item"><a class="page-link" href="jspage.php">5</a></li>
  <li class="page-item"><a class="page-link" href="xmlpage.php">6</a></li>
  <li class="page-item"><a class="page-link" href="phppage.php">7</a></li>
  <li class="page-item"><a class="page-link" href="jspage.php">Next</a></li>
</ul> 

<a href="yetanotherpage.php" class="btn btn-warning" role="button">Yet another page</a>

</body>
</html> 