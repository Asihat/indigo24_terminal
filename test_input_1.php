<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- FontAwesome -->
<!--    <link rel="stylesheet" href="fontawesome/css/all.css">-->

</head>
<body>
<div class="main_input">
    <p id="p_1">Enter phone Number</p>
    <input type="text" class="third_textfield" id="input_1"><br>
</div>

<?php
    include "keyboards/testKeyboard.php";
?>

<style>
    body {
        margin: 0;
    }
    .main_input {
        text-align: center;
    }
    .main_input p {
        font-size: 30px;
    }
    .main_input input {
        padding: 10px;
        margin: 10px;
        font-size: 30px;
    }
    .focused_p {
        font-size: 85px !important;
        position: fixed;
        top: 0;
        left: 0;
        margin-top: 35px;
        background-color: #fff;
        padding-bottom: 110px;
        width: 100%;
    }
    .focused_input {
        position: fixed;
        top: 230px;
        left: 10px;
        width: 95%;
        height: 310px;
        font-size: 100px !important;
        background-color: #fff;
    }
</style>

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

</script>
<!-- FontAwesome -->
<!--<script src="fontawesome/js/all.js"></script>-->
</body>
</html>
