<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Own Css -->
	<link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="mobile_internet_index">
<?php
    session_start();
    //echo $_SESSION['lang'];

    if(isset($_SESSION['lang'])){
        include "../../lang_".$_SESSION['lang'].".php";
        //echo "h1";
    }else{
        include "lang_ru.php";
        //echo "h2";
    }
    //echo _mob_service;
?>
	<div class="header">
		<div class="nav">
			<div class="main_logo">
                <a href="/">
                    <img src="../../img/logo.png" alt="">
                    <p class="main_logo_text">Все услуги</p>
                </a>
			</div>
			<div class="language">
				<img src="../../img/qazaqstan.png" alt="">
				<img src="../../img/russian.png" alt="">
				<img src="../../img/english.jpg" alt="">
			</div>
			<div class="search_header_block">
                <input type="text" class="mobile_service">
                <div class="search_logo">
                    <img src="../../img/search.png" alt="">
                </div>
            </div>
		</div>
	</div>
	
	<div class="main_mob">
        <p class="main_p">Mobile service</p>
		<div class="mob_phones_page">
			<div class="card_mob">
				<a href="active/index.php">
					<img src="../../img/logos/644.gif" alt="">
					<p>Active</p>
				</a>			
			</div>
			<div class="card_mob">
				<img src="../../img/logos/644.gif" alt="">
				<p>Altel</p>
			</div>
			<div class="card_mob">
				<img src="../../img/logos/644.gif" alt="">
				<p>Tele 2</p>
			</div>
			<div class="card_mob">
				<img src="../../img/logos/644.gif" alt="">
				<p>Beeline</p>
			</div>
			<div class="card_mob">
				<img src="../../img/logos/644.gif" alt="">
				<p>Kcell</p>
			</div>
		</div>
	</div>
	
    <div class="button_to_main_page">
        <a href="/">
            <p>Main Page</p>
        </a>
    </div>
	<!-- Jquery -->
	<script src="../../js/jquery-3.4.1.js"></script>
	<!-- Own JavaScript -->
	<script src="../../js/script.js"></script>
</body>
</html>

