<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Own Css -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="main__page">
<?php
session_start();

// Set Language variable


if(isset($_GET['lang']) && !empty($_GET['lang'])){

    if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']) {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $_SESSION['lang'] = $_GET['lang'];
} else {
    $_SESSION['lang'] = "ru";
}
//echo $_SESSION['lang'];
session_commit();
// Include Language file
if(isset($_SESSION['lang'])){
    include "lang_".$_SESSION['lang'].".php";
}else{
    include "lang_ru.php";
}
?>
	<div class="header">
		<div class="nav">
			<div class="main_logo">
				<a href="/">
					<img src="img/logo.png" alt="">
					<p class="main_logo_text"><?= _MAIN_TITLE ?></p>
				</a>
			</div>
			<div class="language">
				<img src="img/qazaqstan.png" alt="">
                <a href="/?lang=ru">
                    <img src="img/russian.png" alt="">
                </a>
                <a href="/?lang=en">
                    <img src="img/english.jpg" alt="">
                </a>
			</div>
			<div class="phone_number">
				<div class="real_number">
					+7 702 362 41 63
				</div>
				<div class="text">
					Тутынушыларды колдау телефоны
				</div>
			</div>
			<div class="global_data">
				<div class="day">
					16 Апрель
				</div>
				<div class="year">
					2019 г.
				</div>
			</div>
			<div class="real_data">
				<div class="real_time_data">
					18:23
				</div>
				<div class="day_of_week">
					Понедельник
				</div>
			</div>
		</div>
	</div>

	<div class="main_page">
		<div class="flex_container">
			<div class="mob">
				<a href="services/mobile_internet/mobile_internet_index.php">
					<img src="img/mob.png" alt="" class="mob_phones">
					<p><?= _mob_service ?></p>
				</a>
			</div>
			<div class="tickets">
				<img src="img/1ph.png" alt="">
				<p><?= _tickets ?></p>
			</div>
			<div class="tv_internet">
				<img src="img/2ph.png" alt="">
				<p><?= _internet_tv ?></p>
			</div>
			<div class="help_centers">
				<img src="img/2ph.png" alt="">
				<p><?= _help_center ?></p>
			</div>
			<div class="other_type_service">
				<a href="services/other_type_service/other_type_service_index.php">
					<img src="img/4ph.png" alt="">
					<p><?= _other_service ?></p>
				</a>
			</div>
			<div class="learning">
				<img src="img/5ph.png" alt="">
				<p><?= _learning ?></p>
			</div>
			<div class="auto_services">
				<img src="img/6ph.png" alt="">
				<p><?= _auto_service ?></p>
			</div>
			<div class="internet_shop">
				<img src="img/7ph.png" alt="">
				<p><?= _internet_shop ?></p>
			</div>
			<div class="emoney">
				<a href="services/emoney/emoney_index.php">
					<img src="img/8ph.png" alt="">
					<p><?= _emoney ?></p>
				</a>
			</div>
			<div class="com_service">
				<img src="img/9ph.png" alt="">
				<p><?= _com_service ?></p>
			</div>
			<div class="tax">
				<img src="img/10ph.png" alt="">
				<p><?= _tax ?></p>
			</div>
			<div class="indigo24">
				<img src="img/11ph.png" alt="">
				<p><?= _indigo24 ?></p>
			</div>
			<div class="games">
				<img src="img/12ph.png" alt="">
				<p><?= _games ?></p>
			</div>	

		</div>
	</div>
    <div class="warning_block">
        <p>
            Lorem ipsueLorem ipsueLorem ipsueLorem ipsueLorem ipsueLorem ipsueLorem ipsueLorem ipsueLorem ipsueLorem ipsue
            Lorem ipsueLorem ipsueLorem ipsueLorem ipsueLorem ipsueLorem ipsueLorem ipsueLorem ipsueLorem ipsueLorem ipsue
        </p>
    </div>
	<!-- Jquery -->
	<script src="js/jquery-3.4.1.js"></script>
	<!-- Own JavaScript -->
	<script src="js/script.js"></script>
</body>
</html>

