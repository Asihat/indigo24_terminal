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
                <a href="/">
                    <img src="../../img/logo.png" alt="">
                    <p class="main_logo_text">Мобильные услуги</p>
                </a>
			</div>
			<div class="phone_logo">
				<img src="../../img/tele.png" alt="">
			</div>
		</div>
	</div>
	<div class="main_mob1">
		<div class="wrapper_enter_number">
			<p class="main_text" id="p_1">Enter phone number</p>
			<input id="input_1" type="text" value="+7" class="number_input" max="11">
		</div>
        <div class="button_back_and_next">
            <div class="back_button"><a href="mobile_internet_index.php">back</a></div>
            <div class="next_button" onclick="preloader()">next</div>
        </div>
    </div>
    <?php
    include "../../keyboards/testKeyboard.php";
    ?>
    <script>
        var current_id = 0;
        var inputs = ["input_1"];
        var type_of_keyboard_to_input = ["mob"];
        var tag_p = ["p_1"];
        if(inputs.length == 1){
            current_id = 0;
            callKeyboard();
            // addFocusedStyle();
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
        function preloader(){
            //alert("Server doesn't work correctly");
            document.getElementById("preloader_to_phone").style.display = "block";
            setTimeout(function() {
                window.open ('mob1.2.php','_self',false)
            }, 3000);

        }
        if (document.getElementById("input_1").innerText.length > 11) {
            console.log("Hey stop writing");
            alert(unescape("Please enter at least 50 characters."));
            work=false;
        }
    </script>

	<div class="preloader_to_phone" id="preloader_to_phone">
		<div class="logo">
            <img src="../../img/logo2.png" alt="">
        </div>
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
        <div class="text_main">
                Деректерды ондеу
        </div>
	</div>


	<!-- Jquery -->
	<script src="../../js/jquery-3.4.1.js"></script>
    <!-- Jquery masked -->
    <script src="../../js/jquery.maskedinput.js"></script>
	<!-- Own JavaScript -->
	<script src="../../js/script.js"></script>
    <script>

        $("#input_1").mask("8(999) 999-9999", {

            //completed: function(){ alert("Вы ввели номер: " + this.val()); }
        });


    </script>

</body>
</html>