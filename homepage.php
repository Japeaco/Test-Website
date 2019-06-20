<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="javascript.js"></script>
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
	<h1>Hello Universe!</h1>
	<h2>This is the homepage</h2>
</div>

<hr>

<div class="container">
<div class="row">
  <div class="col-sm-4" style="">
  <h2>About me:</h2>
    <div class="card" style="">
		<img class="card-img-top" src="me.jpg" alt="Card image" style="width:100%">
		<div class="card-body">
		<h4 class="card-title">James Peacock</h4>
		<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec vulputate ligula. Curabitur vitae 
		ipsum vulputate, ullamcorper tortor ac, aliquam urna.</p>
		<a href="https://peacocksden.wordpress.com/" class="btn btn-primary">Check out my blog</a>
		</div>
	</div>
	</div>
  <div class="col-sm-8" style="">
  <h2>More about me:</h2>
	<img src="fortnite.jpg" class="rounded d-block" alt="Fortnite" style="width:100%; border:0;"> 
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec vulputate ligula. Curabitur vitae 
		ipsum vulputate, ullamcorper tortor ac, aliquam urna. Mauris nisl ipsum, porta rhoncus justo vel, 
		fermentum ultricies urna. Phasellus magna est, ullamcorper quis orci non, porta eleifend est. Phasellus 
		nec metus nibh. Cras condimentum luctus erat, nec bibendum lectus consequat eu. Aliquam vulputate urna quis 
		tortor imperdiet, cursus vehicula diam tincidunt.</p>
	</div>
</div> 
</div>

<hr>

<div class="mx-auto embed-responsive embed-responsive-16by9" style="width:510px ; height:300px">
  <iframe class="embed-responsive-item" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSYEdOaN-pEzphAV5EPZgVkKJ_WRFFrUFhbRwtxjy98f8b9ozOmt_fKvMoPZ3PIWqc1JnX3FmOggs05/pubhtml?gid=728064575&chrome=false&widget=false&range=LevelsDiv1&single=true&headers=false">
  </iframe>
</div>

<hr>

<h4>My favourite things</h4>
<div class="list-group">
	<li class="list-group-item"><b>Bears</b> <span class="badge badge-primary badge-pill">12</span></li>
	<li class="list-group-item"><i>Beets</i></li>
	<li class="list-group-item">Battlestar Galactica</li>
</div>

<hr>

<h4 class="lorem">Formatting examples</h4>
<p class="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec vulputate ligula. Curabitur vitae 
	<mark>ipsum vulputate, ullamcorper tortor ac</mark>, aliquam urna. Mauris nisl ipsum, porta rhoncus justo vel, 
	fermentum ultricies urna. Phasellus magna est, ullamcorper quis orci non, porta eleifend est. Phasellus 
	nec metus nibh. Cras condimentum luctus erat, nec bibendum lectus consequat eu. Aliquam vulputate urna quis 
	tortor imperdiet, <abbr title="CURSUS">cursus</abbr> vehicula diam tincidunt. Vivamus cursus nibh et ligula condimentum feugiat. Vestibulum 
	eu odio aliquet mauris eleifend luctus nec vehicula nibh. <kbd>Sed non</kbd> faucibus tortor, ut ultricies magna. Pellentesque 
	facilisis a arcu sit amet porttitor. Suspendisse non dui tempor, dignissim enim sit amet, venenatis nisl. Proin 
	cursus magna sed sem convallis, laoreet posuere libero consectetur.</p>

<hr>

<div class="loremContainer">
	<h4>Blockquote example</h4>
	<blockquote class="blockquote">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec vulputate ligula. Curabitur vitae 
		ipsum vulputate, ullamcorper tortor ac, aliquam urna. Mauris nisl ipsum, porta rhoncus justo vel, 
		fermentum ultricies urna. Phasellus magna est, ullamcorper quis orci non, porta eleifend est. Phasellus 
		nec metus nibh. Cras condimentum luctus erat, nec bibendum lectus consequat eu. Aliquam vulputate urna quis 
		tortor imperdiet, cursus vehicula diam tincidunt. Vivamus cursus nibh et ligula condimentum feugiat. Vestibulum 
		eu odio aliquet mauris eleifend luctus nec vehicula nibh. Sed non faucibus tortor, ut ultricies magna. Pellentesque 
		facilisis a arcu sit amet porttitor. Suspendisse non dui tempor, dignissim enim sit amet, venenatis nisl. Proin 
		cursus magna sed sem convallis, laoreet posuere libero consectetur.</p>
		<footer class="blockquote-footer">Stolen from the web</footer>
	</blockquote>
</div>

<hr>

<div class="container d-flex justify-content-center">
 <table class="table table-striped" style="width:50%" id="t01">
 <thead class="thead-dark">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr class="table-primary">
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  </tbody>
  <table class="table table-striped" style="width:50%" id="t02">
  <thead class="thead-light">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr class="table-danger">
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  </tbody>
</table> 
</div>

<hr>

<div class="container">
  <h3>Popover Example</h3>
  <button type="button" class="btn btn-lg" title="Popover Header" data-toggle="popover" data-content="Some content inside the popover">Toggle popover</button>
</div>


<hr>

<ul class="pagination">
  <li class="page-item active"><a class="page-link" href="homepage.php">1</a></li>
  <li class="page-item"><a class="page-link" href="anotherpage.php">2</a></li>
  <li class="page-item"><a class="page-link" href="yetanotherpage.php">3</a></li>
  <li class="page-item"><a class="page-link" href="messages.php">4</a></li>
  <li class="page-item"><a class="page-link" href="jspage.php">5</a></li>
  <li class="page-item"><a class="page-link" href="xmlpage.php">6</a></li>
  <li class="page-item"><a class="page-link" href="phppage.php">7</a></li>
  <li class="page-item"><a class="page-link" href="anotherpage.php">Next</a></li>
</ul> 

</body>
</html> 