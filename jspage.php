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

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Bootstrap Sidebar</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Dummy Heading</p>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

<div class="content">

<div class="container-fluid no-padding" style="background-color:rgb(255, 99, 71); text-align:center; width=100%">
	<h1>Hello Milky Way!</h1>
	<h2>This is the Javascript testing page!<small> A very big page!</small></h2>
</div>

<hr>

<input type="button" class="btn btn-danger" id="sidebarCollapse" value="sidebar collapse">

<p id="changingText">Hello</p> 
<input class="btn btn-success" style="margin-bottom:1%" onclick="changeText()" type="button" value="changeText">

<p id="colorChange">change colour</p>
<input class="btn btn-primary" style="margin-bottom:1%" onclick="changeColor('Blue')" type="button" value="Blue">
<input class="btn btn-danger" style="margin-bottom:1%" onclick="changeColor('Red')" type="button" value="Red"><br>

<input type="button" class="btn btn-warning" onclick="getDate()" value="The time is?">

<p id="date"></p>

<input type="button" class="btn btn-warning" id="printArray" value="Print fruits">

<ul class="list-group" id="arrayElements">
</ul>

<p id="joinedElements"></p>

<input type="button" class="btn btn-primary" style="margin-bottom:1%" id="hideButton" value="hide"><br>

<input type="button" class="btn btn-danger" style="margin-bottom:1%" id="removeButton" value="Remove images"><br>

<input type="button" class="btn btn-warning" id="JSONRetrieveButton" value="Retrieve from JSON file"><br>

<p id="json_demo"></p>

<input type="button" class="btn btn-warning" id="JSONStringify" value="Stringified JSON"><br>

<p id="json_stringify"></p>
<p id="json_stringify_array"></p>

<hr>

<img id="fortnite" src="fortnite.jpg" class="rounded mx-auto d-block" alt="Fortnite" style="width:50%; border:0;"> 
<br><input type="button" class="btn btn-warning" id="insertAfter" value="Insert after">
<input type="button" class="btn btn-warning" id="insertBefore" value="Insert before">

<hr>

<p id="mooseEnter" style="width:25%">Hover over this!</p>
<p id="hoover" style="width:25%">You havent hovered over me!</p>
<p id="doouble">Double click this!</p>

<hr>

<div id="flip">Click to slide up panel</div>
<div class="jumbotron jumbotron-fluid" style="padding:50px, text-align=center" id="panel">
  <div class="container">
    <h1>Power to the peacocks!</h1>
  </div>
</div>

<hr>
<input class="btn btn-primary" type="button" value="start animation" id="animateButton" style="margin-bottom:1%">
<div style="background:#98bf21;height:100px;width:100px;" id="toAnimate"></div>

<hr>

<div class="container justify-content-center" style="width:50%">
	<form id="numbersForm">
		<div class="form-group">
			First Number:<br>
			<input type="number" class="form-control" id="firstNumber" placeholder="Enter first number" name="firstNumber"><br>
		</div>
		<div class="form-group">
			Second Number:<br>
			<input type="number" class="form-control" id="secondNumber" placeholder="Enter second number" name="secondNumber" required><br>
		</div>
		<div class="row">
			<div class="col-sm-1" style="">
				<input type="button" class="btn btn-primary" value="Addition" style="" id="addButton">
			</div>
			<div class="col-sm-1" style="margin-left:5%">
				<input type="button" class="btn btn-primary" value="Subtraction" style="" id="subtractButton">
			</div>
		</div>
		<div class="row" style="margin-top:1%">
			<div class="col-sm-1" style="">
				<p>Answer: </p>
			</div>
			<div class="col-sm-1" style="margin-left:1%">
			<p id="answer"></p>
			</div>
		</div>
	</div>
	</form> 
</div>

<hr>

</div>

<ul class="pagination">
  <li class="page-item"><a class="page-link" href="messages.php">Previous</a></li>
  <li class="page-item"><a class="page-link" href="homepage.php">1</a></li>
  <li class="page-item"><a class="page-link" href="anotherpage.php">2</a></li>
  <li class="page-item"><a class="page-link" href="yetanotherpage.php">3</a></li>
  <li class="page-item"><a class="page-link" href="messages.php">4</a></li>
  <li class="page-item active"><a class="page-link" href="jspage.php">5</a></li>
  <li class="page-item"><a class="page-link" href="xmlpage.php">6</a></li>
  <li class="page-item"><a class="page-link" href="phppage.php">7</a></li>
  <li class="page-item"><a class="page-link" href="xmlpage.php">Next</a></li>
</ul> 

<a href="messages.php" class="btn btn-warning" role="button">Messages</a>

</div>

</body>
</html> 