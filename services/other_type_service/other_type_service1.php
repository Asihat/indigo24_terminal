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
	<div class="header" id="header">
		<div class="nav">
			<div class="main_logo">
				<a href="/">
					<img src="../../img/logo.png" alt="">
					<p class="main_logo_text">Beverlee Service</p>		
				</a>
			</div>
			<div class="phone_logo">
				<img src="../../img/logos/prv7882_ac28a560.gif" alt="">
			</div>
		</div>
	</div>

    <!-- Hey-->
    <div class="main_mob1">
		<div class="wrapper_enter_number">
			<p class="email_phone_text" id="p_1">Enter email or phone</p>
			<input id="input_1" type="text" value="" class="number_input" onclick="myFunction1()"><br>
			<p id="p_2" >Some text2</p>
			<input id="input_2" type="text" value="" class="number_input" onclick="myFunction2()"><br>
			<p id="p_3">Some text3</p>
			<input id="input_3" type="text" value="" class="number_input" onclick="myFunction3()"><br>
			<p id="p_4">Some text4</p>
			<input id="input_4" type="text" value="" class="number_input" onclick="myFunction4()"><br>

            <div class="button_back_and_next">
                <div class="back_button"><a href="mobile_internet_index.php">back</a></div>
                <div class="next_button" onclick="preloader()">next</div>
            </div>
	</div>
    </div>

    <?php
        include "../../keyboards/testKeyboard.php";
    ?>


	<div class="container" id="container">
		<div class="item-1"></div>
		<div class="item-2"></div>
		<div class="item-3"></div>
		<div class="item-4"></div>
		<div class="item-5"></div>
	</div>


	<script>
        var current_id = 0;
        var inputs = ["input_1", "input_2", "input_3", "input_4" ];
        var type_of_keyboard_to_input = ["email", "rus", "eng", "eng"];
        var tag_p = ["p_1", "p_2", "p_3", "p_4"];
        if(inputs.length == 1){
            current_id = 0;
            callKeyboard();
        }
        function myFunction1(){
            current_id = 0;
            callKeyboard();
            addFocusedStyle();
        }
        function myFunction2(){
            current_id = 1;
            callKeyboard();
            addFocusedStyle();
        }
        function myFunction3(){
            current_id = 2;
            callKeyboard();
            addFocusedStyle();
        }
        function myFunction4(){
            current_id = 3;
            callKeyboard();
            addFocusedStyle();
        }
        function preloader(){
            //alert("Server doesn't work correctly");
            document.getElementById("container").style.display = "block";
            setTimeout(function() {
                window.open ('other_type_service1.2.php','_self',false)
            }, 2000);
        }
	</script>

        <!-- Jquery -->
        <script src="../../js/jquery-3.4.1.js"></script>
        <!-- Own JavaScript -->
        <script src="js/script.js"></script>
</body>
</html>

