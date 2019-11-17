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
<?php
    session_start();
    echo $_SESSION['lang'];

    if(isset($_SESSION['lang'])){
        include "../../lang_".$_SESSION['lang'].".php";
        echo "h1";
    }else{
        include "lang_ru.php";
        echo "h2";
    }
    echo _mob_service;
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
	
	<div class="main_mob">
        <p class="main_p"><?= _mob_service ?></p>
		<div class="mob_phones_page">
			<div class="card_mob">
				<a href="mob1.php">
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
	<script src="js/jquery-3.4.1.js"></script>
	<!-- Own JavaScript -->
	<script src="../../js/script.js"></script>
</body>
</html>

