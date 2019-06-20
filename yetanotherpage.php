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
	<h1>Hello Cosmos!</h1>
	<h2>This is yet another page!<small> An even smaller page!</small></h2>
</div>

<hr>

<div class="jumbotron jumbotron-fluid" style="text-align:center">
  <div class="container">
    <h1>Power to the peacocks!</h1>
    <a style="text-align: center" href="https://peacocksden.wordpress.com/">Check out my blog!</a>
  </div>
</div>

<hr>

<div id="carousel1" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="cliff.jpg" alt="Cliff" style="width:100%; border:0;">
	  <div class="carousel-caption">
	  <h3>Cliff</h3>
	  <p>Some kind of Cliff</p>
	  </div>
    </div>
    <div class="carousel-item">
      <img src="beach.jpg" alt="Beach" style="width:100%; border:0;">
	  <div class="carousel-caption">
	  <h3>Beach</h3>
	  <p>Some kind of beach</p>
	  </div>
    </div>
    <div class="carousel-item">
      <img src="chip.jpg" alt="Chip" style="width:100%; border:0;">
	  <div class="carousel-caption">
	  <h3>Chip</h3>
	  <p>Some kind of Chip</p>
	  </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#carousel1" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carousel1" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<hr>

<ul class="pagination">
  <li class="page-item"><a class="page-link" href="anotherpage.php">Previous</a></li>
  <li class="page-item"><a class="page-link" href="homepage.php">1</a></li>
  <li class="page-item"><a class="page-link" href="anotherpage.php">2</a></li>
  <li class="page-item active"><a class="page-link" href="yetanotherpage.php">3</a></li>
  <li class="page-item"><a class="page-link" href="messages.php">4</a></li>
  <li class="page-item"><a class="page-link" href="jspage.php">5</a></li>
  <li class="page-item"><a class="page-link" href="xmlpage.php">6</a></li>
  <li class="page-item"><a class="page-link" href="phppage.php">7</a></li>
  <li class="page-item"><a class="page-link" href="messages.php">Next</a></li>
</ul> 

<div class="btn-group">
	<a href="anotherpage.php" class="btn btn-warning" role="button">Another page</a>
	<a href="messages.php" class="btn btn-warning" role="button">Messages</a>
</div>

</body>
</html> 