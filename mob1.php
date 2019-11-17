<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Own Css -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="header">
		<div class="nav">
			<div class="main_logo">
                <a href="/">
                    <img src="../../img/logo.png" alt="">
                    <p class="main_logo_text">Все услуги</p>
                </a>
			</div>
			<div class="phone_logo">
				<img src="img/tele.png" alt="">
			</div>
		</div>
	</div>
	<div class="main_mob1">
		<div class="wrapper_enter_number">
			<p class="main_text">Enter phone number</p>
			<input id="myText" type="text" value="+7" class="number_input" max="11">
			<div class="wrapper_enter_number_constructor">
				<div class="button_number_1 button_number" onclick="enterNum1()">1</div>
				<div class="button_number_2 button_number" onclick="enterNum2()">2</div>
				<div class="button_number_3 button_number" onclick="enterNum3()">3</div>
				<div class="button_number_4 button_number" onclick="enterNum4()">4</div>
				<div class="button_number_5 button_number" onclick="enterNum5()">5</div>
				<div class="button_number_6 button_number" onclick="enterNum6()">6</div>
				<div class="button_number_7 button_number" onclick="enterNum7()">7</div>
				<div class="button_number_8 button_number" onclick="enterNum8()">8</div>
				<div class="button_number_9 button_number" onclick="enterNum9()">9</div>
				<div class="button_number_x button_number" >x</div>
				<div class="button_number_0 button_number" onclick="enterNum0()">0</div>
				<div id="idOfInput" class="button_number_remove button_number" onclick="removeNum()">
					<img src="img/backspace.png" alt="">
				</div>
			</div>
		</div>
		<div class="back_button"><a href="mob.php">back</a></div>
		<div class="next_button" onclick="preloader()">next</div>
	</div>
	
	<div class="container" id="container">
		<div class="item-1"></div>
		<div class="item-2"></div>
		<div class="item-3"></div>
		<div class="item-4"></div>
		<div class="item-5"></div>
	</div>

	
	<!-- Jquery -->
	<script src="js/jquery-3.4.1.js"></script>
	<!-- Own JavaScript -->
	<script src="js/script.js"></script>
	<script>
		function preloader(){
			//alert("Server doesn't work correctly");
			document.getElementById("container").style.display = "flex";
			setTimeout(function() {
				window.open ('mob2.php','_self',false)
			}, 4000);
		}
		function enterNum1() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=11){
				document.getElementById("myText").value = document.getElementById("myText").value + "1";  
			}
			else if(document.getElementById("myText").value.length>11){
				alert("Click next button");
			}
		}

		function enterNum2() {
			var x = document.getElementById("myText").value;
		if(document.getElementById("myText").value.length<=11){
				document.getElementById("myText").value = document.getElementById("myText").value + "2";  
			}
			else if(document.getElementById("myText").value.length>11){
				alert("Click next button");
			}
		}

		function enterNum3() {
			var x = document.getElementById("myText").value;
		if(document.getElementById("myText").value.length<=11){
				document.getElementById("myText").value = document.getElementById("myText").value + "3";  
			}
			else if(document.getElementById("myText").value.length>11){
				alert("Click next button");
			}
		}

		function enterNum4() {
			var x = document.getElementById("myText").value;
		if(document.getElementById("myText").value.length<=11){
				document.getElementById("myText").value = document.getElementById("myText").value + "4";  
			}
			else if(document.getElementById("myText").value.length>11){
				alert("Click next button");
			}
		}

		function enterNum5() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=11){
				document.getElementById("myText").value = document.getElementById("myText").value + "5";  
			}
			else if(document.getElementById("myText").value.length>11){
				alert("Click next button");
			}
		}

		function enterNum6() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=11){
				document.getElementById("myText").value = document.getElementById("myText").value + "6";  
			}
			else if(document.getElementById("myText").value.length>11){
				alert("Click next button");
			}
		}

		function enterNum7() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=11){
				document.getElementById("myText").value = document.getElementById("myText").value + "7";  
			}
			else if(document.getElementById("myText").value.length>11){
				alert("Click next button");
			}
		}

		function enterNum8() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=11){
				document.getElementById("myText").value = document.getElementById("myText").value + "8";  
			}
			else if(document.getElementById("myText").value.length>11){
				alert("Click next button");
			}
		}

		function enterNum9() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=11){
				document.getElementById("myText").value = document.getElementById("myText").value + "9";  
			}
			else if(document.getElementById("myText").value.length>11){
				alert("Click next button");
			}
		}

		function enterNum0() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=11){
				document.getElementById("myText").value = document.getElementById("myText").value + "0";  
			}
			else if(document.getElementById("myText").value.length>11){
				alert("Click next button");
			}
		}
		function removeNum() {
			var str = document.getElementById("myText").value;
			var newstr = str.substring(0, str.length - 1);
			document.getElementById("myText").value = newstr;	
		}
	</script>

</body>
</html>

