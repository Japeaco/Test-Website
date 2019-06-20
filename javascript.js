function revealPassword() {
  var x = document.getElementById('pass');
  if (x.type == "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 

function changeText() {
  var x = document.getElementById("changingText");
  if(x.innerHTML === "Hello"){
	  x.innerHTML = "Goodbye";
  } else {
	  x.innerHTML = "Hello";
  }
}

function changeColor(newColor) {
  var x = document.getElementById('colorChange');
  x.style.color = newColor;
}

function getDate(){
	document.getElementById('date').innerHTML=Date();
}

function printArray(){
	var text = "";
	var fruits = ["banana", "oranges", "apples"];
	
	for(var i = 0; i < fruits.length; i++){
			text += "<li class=\"list-group-item\">" + fruits[i] + "</li>";
	}
	
	document.getElementById('arrayElements').innerHTML=text;
	document.getElementById('joinedElements').innerHTML=fruits.join(" + ");
}

//toggle sidebar
$(document).ready(function(){
  $("#sidebarCollapse").click(function(){
    $("#sidebar").toggleClass("active");
  });
});

$(document).ready(function(){
  $("#printArray").click(function(){
	var list = "";
	var fruits = ["banana", "oranges", "apples"];	
	for(var i = 0; i < fruits.length; i++){
			list += "<li class=\"list-group-item\">" + fruits[i] + "</li>";
	}
    $("#arrayElements").html(list);
	$("#joinedElements").text(fruits.join(" + "));	
  });
});

$(document).ready(function(){
  $("#addButton").click(function(){
	var first = document.forms["numbersForm"]["firstNumber"].value;
	var second = document.forms["numbersForm"]["secondNumber"].value;
	var answer = parseInt(first) + parseInt(second);
    $("#answer").text(answer);	
  });
});

$(document).ready(function(){
  $("#subtractButton").click(function(){
	var first = document.forms["numbersForm"]["firstNumber"].value;
	var second = document.forms["numbersForm"]["secondNumber"].value;
	var answer = parseInt(first) - parseInt(second);
    $("#answer").text(answer);	
  });
});

$("#fortnite").hover(function(){
  $(this).attr("src", "fortnitebomber.jpg");
},
function(){
  $(this).attr("src", "fortnite.jpg");
});

$(document).ready(function(){
  $("#hideButton").click(function(){
	  //optional speed parameter
    $("p").toggle(2000);
	if(this.value == "hide"){
		  this.value = "show"}
		else{
		  this.value = "hide"};		
  });
});

$(document).ready(function(){
  $("#mooseEnter").mouseenter(function(){
    alert("You hovered over this");
  });
});

$(document).ready(function(){
  $("#doouble").dblclick(function(){
    $(this).css("background-color", "#cccccc");
  });
});

$("#hoover").hover(function(){
  $(this).css("background-color", "red");
  $(this).text("You're hovering over me!");
},
function(){
  $(this).css("background-color", "blue");
  $(this).text("You aren't hovering over me anymore!");
});

$(document).ready(function(){
  $("#firstNumber, #secondNumber").focus(function(){
    $(this).css("background-color", "#cccccc");
  });
  $("#firstNumber,#secondNumber").blur(function(){
    $(this).css("background-color", "#ffffff");
  });
});

$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideUp(2000);
  });
});

$(document).ready(function(){
  $("#insertAfter").click(function(){
    $("#fortnite").after("Inserted after");
  });
});

$(document).ready(function(){
  $("#insertBefore").click(function(){
    $("#fortnite").before("Inserted before");
  });
});

$(document).ready(function(){
  $("#removeButton").click(function(){
    $("img").remove("#fortnite"), alert("Removed image!");
  });
});

$(document).ready(function(){
  $("#animateButton").click(function(){
    var a = $("#toAnimate");
	a.animate({height: '300px', opacity: '0.4'}, "slow");
    a.animate({width: '300px', opacity: '0.8'}, "slow");
    a.animate({height: '100px', opacity: '0.4'}, "slow");
    a.animate({width: '100px', opacity: '0.8'}, "slow");
  });
});

$(document).ready(function(){
  $("#xmlButton").click(function(){
	  
    var xhttp = new XMLHttpRequest();
	
      xhttp.onreadystatechange = function(){
		  
        if (this.readyState == 4 && this.status == 200) {
          $("#xmltest").text(this.responseText);
      }
	  
    };
	
    xhttp.open("GET", "xmltext.txt", true);
    xhttp.send();
	
  });
});

$(document).ready(function(){
  $("#parserButton").click(function(){
      
    var parser, xmlDoc;
    var text = "<bookstore><book>" +
      "<title>Everyday Italian</title>" +
      "<author>Giada De Laurentiis</author>" +
      "<year>2005</year>" +
      "</book></bookstore>";

    parser = new DOMParser();
    xmlDoc = parser.parseFromString(text,"text/xml");

    $("#parsertest").text(xmlDoc.getElementsByTagName("title")[0].childNodes[0].nodeValue);
	
  });
});

$(document).ready(function(){
  $("#loadAndParseButton").click(function(){
	  
    var xhttp = new XMLHttpRequest();
	
      xhttp.onreadystatechange = function(){
		  
        if (this.readyState == 4 && this.status == 200) {
		  parserFunction(this);
      }
	  
    };
	
    xhttp.open("GET", "test.xml", true);
    xhttp.send();
	
  });
});
	
function parserFunction(xml) {
	
  var x, y, z, i, xmlDoc, table;
  xmlDoc = xml.responseXML;
  table = "<table><tr><th>Name</th><th>Price</th><th>calories</th></tr>";
  x = xmlDoc.getElementsByTagName("name");
  y = xmlDoc.getElementsByTagName("price");
  z = xmlDoc.getElementsByTagName("calories");
  
  for (i = 0; i < x.length; i++) {
    table += "<tr><td>" + 
	         x[i].childNodes[0].nodeValue + 
	         "</td><td>" +
	         y[i].childNodes[0].nodeValue + 
			 "</td><td>" + 
			 z[i].childNodes[0].nodeValue + 
			 "</td></tr>";
  }
  
  table += "</table>";
  
  document.getElementById("loadparsertest").innerHTML = table;
}

function sendData() {
	
	var first = document.forms["sendDataForm"]["firstname"].value;
	var last = document.forms["sendDataForm"]["lastname"].value;
	var email = document.forms["sendDataForm"]["email"].value;
	var password = document.forms["sendDataForm"]["password"].value;
	
	if (last == "") {
		alert("Name must be filled out");
		return false;
	}
	else if (email == "") {
		alert("Email must be filled out");
		return false;
	}
	else if (password == "") {
		alert("Password must be filled out");
		return false;
	}

	var dataString = 'first1=' + first + '&last1=' + last + '&email1=' + email + '&password1=' + password;

	var xhttp = new XMLHttpRequest();
	
	xhttp.open("POST", "connect.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
				alert(this.responseText);
		}
	};
	
	xhttp.send(dataString);
}

function retrieveData(name) {

	var txt = 'first1=' + name;

    if (name == "") {
      document.getElementById("retrieval").innerHTML = "";
      return;
    }

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			document.getElementById("retrieval").innerHTML = this.responseText;
		}
	};
	
	xhttp.open("POST", "retrieve.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send(txt);
	
}

//loadDoc("url-1", myFunction1);

//loadDoc("url-2", myFunction2);

//have one function that creates xmlhttprequest object
function loadDoc(url, cFunction) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cFunction(this);
    }
 };
  xhttp.open("GET", url, true);
  xhttp.send();
}

function myFunction1(xhttp) {
  // action goes here
}
function myFunction2(xhttp) {
  // action goes here
}

$(document).ready(function(){
	$("#JSONRetrieveButton").click(function(){
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200) {
				var myObj = JSON.parse(this.responseText);
				document.getElementById("json_demo").innerHTML = myObj.employees[0].firstName;
			}
		};
	
		xhttp.open("GET", "JSON_demo.txt", true);
		xhttp.send();
  });
});

$(document).ready(function(){
	$("#JSONStringify").click(function(){
		var x;
		var txt = "";
		var obj = { name: "John", age: 30, city: "New York" };
		var objArr = [ "John", 30, "New York" ];
		
		var myJSON = JSON.stringify(obj);
		var myJSONArr = JSON.stringify(objArr);
		
		$("#json_stringify").text(myJSON); 
		
		for(x in obj) {
			txt += "Property: " + x + ", Value: " + obj[x] + "<br>";
		}		
		
		document.getElementById('json_stringify_array').innerHTML = txt;
  });
});

$(document).ready(function(){
	$("#jsonphpbutton").click(function(){
		var obj, dbParam, xmlhttp;
		obj = { "element": "Email", "table": "first_schema.customers", "limit": "5" };
		dbParam = JSON.stringify(obj);
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("phpjson").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "json_demo.php?x=" + dbParam, true);
		xmlhttp.send(); 
  });
});	