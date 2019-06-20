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
      <a class="nav-link" href="messages.php">Messages<span class="badge badge-light">4</span></a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="jspage.php">Javascript test page</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
   <form class="form-inline navbar-nav ml-auto" action="#">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav> 

<div class="container-fluid no-padding" style="background-color:rgb(255, 99, 71); text-align:center; width=100%">
	<h1>Hello World!</h1>
	<h2>This is the search results page!</h2>
</div>

<img src="fortnitebomber.jpg" class="rounded mx-auto d-block" alt="Fortnite" style="width:350px; height:200px; border:0;"> 

<!-- Green -->
<div class="progress">
  <div class="progress-bar bg-success" style="width:20%">20%</div>
</div>

<hr>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Search results will go here!</h1>
    <a style="text-align: center" href="https://peacocksden.wordpress.com/">Check out my blog!</a>
  </div>
</div>

<hr>

<a href="homepage.php" class="btn btn-warning" role="button">Home page</a>

</body>
</html> 