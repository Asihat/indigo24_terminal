<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Own Css -->
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="header">
		<div class="nav">
			<div class="main_logo">
				<img src="../../img/logo.png" alt="">
				<p class="main_logo_text">Мобильные услуги</p>
			</div>
			<div class="phone_logo">
				<img src="../../img/logos/prv7882_ac28a560.gif" alt="">
			</div>
		</div>
	</div>
	<div class="main_mob1">
		<div class="wrapper_enter_number">
			<p class="main_text">Enter email or phone</p>
			<input id="myText" type="text" value="" class="number_input" max="11">
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
				<div class="button_number_q button_number" onclick="enterLetter_q()">q</div>
				<div class="button_number_w button_number" onclick="enterLetter_w()">w</div>
				<div class="button_number_e button_number" onclick="enterLetter_e()">e</div>
				<div class="button_number_r button_number" onclick="enterLetter_r()">r</div>
				<div class="button_number_t button_number" onclick="enterLetter_t()">t</div>
				<div class="button_number_y button_number" onclick="enterLetter_y()">y</div>
				<div class="button_number_u button_number" onclick="enterLetter_u()">u</div>
				<div class="button_number_i button_number" onclick="enterLetter_i()">i</div>
				<div class="button_number_o button_number" onclick="enterLetter_o()">o</div>
				<div class="button_number_p button_number" onclick="enterLetter_p()">p</div>
				<div class="button_number_a button_number" onclick="enterLetter_a()">a</div>
				<div class="button_number_s button_number" onclick="enterLetter_s()">s</div>
				<div class="button_number_d button_number" onclick="enterLetter_d()">d</div>
				<div class="button_number_f button_number" onclick="enterLetter_f()">f</div>
				<div class="button_number_g button_number" onclick="enterLetter_g()">g</div>
				<div class="button_number_h button_number" onclick="enterLetter_h()">h</div>
				<div class="button_number_j button_number" onclick="enterLetter_j()">j</div>
				<div class="button_number_k button_number" onclick="enterLetter_k()">k</div>
				<div class="button_number_l button_number" onclick="enterLetter_l()">l</div>
				<div class="button_number_z button_number" onclick="enterLetter_z()">z</div>
				<div class="button_number_x button_number" onclick="enterLetter_x()">x</div>
				<div class="button_number_c button_number" onclick="enterLetter_c()">c</div>
				<div class="button_number_v button_number" onclick="enterLetter_v()">v</div>
				<div class="button_number_b button_number" onclick="enterLetter_b()">b</div>
				<div class="button_number_n button_number" onclick="enterLetter_n()">n</div>
				<div class="button_number_m button_number" onclick="enterLetter_m()">m</div>
				<div class="button_number_@ button_number" onclick="enterLetter_email()">@</div>
				<div class="button_number_, button_number" onclick="enterLetter_comma()">,</div>
				<div class="button_number_. button_number" onclick="enterLetter_dot()">.</div>
				
				<div id="idOfInput" class="button_number_remove button_number" onclick="removeNum()">
					<img src="../../img/backspace.png" alt="">	
				</div>
			</div>
		</div>
		<div class="back_button"><a href="mobile_internet_index.php">back</a></div>
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
				window.open ('emoney1.2.php','_self',false)
			}, 2000);
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
		function enterNum0() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=11){
				document.getElementById("myText").value = document.getElementById("myText").value + "0";  
			}
			else if(document.getElementById("myText").value.length>11){
				alert("Click next button");
			}
		}
		function enterLetter_q() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "q";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_w() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "w";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_e() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "e";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_r() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "r";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_t() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "t";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_y() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "y";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_u() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "u";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_i() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "i";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_o() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "o";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_p() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "p";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_a() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "a";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_s() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "s";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_d() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "d";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_f() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "f";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_g() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "g";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_h() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "h";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_j() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "j";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_k() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "k";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_l() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "l";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_z() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "z";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_x() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "x";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_c() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "c";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_v() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "v";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_b() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "b";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_n() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "n";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_m() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "m";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_email() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + "@";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_comma() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + ",";  
			}
			else if(document.getElementById("myText").value.length>32){
				alert("Click next button");
			}
		}
		function enterLetter_dot() {
			var x = document.getElementById("myText").value;
			if(document.getElementById("myText").value.length<=32){
				document.getElementById("myText").value = document.getElementById("myText").value + ".";  
			}
			else if(document.getElementById("myText").value.length>32){
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

