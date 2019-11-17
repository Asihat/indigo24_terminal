<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
<link href="/css/testKeyboard.css" type="text/css" rel="stylesheet">

<?php
$list_ru = [
    'йцукенгшщзхъфывапролджэячсмитьбю',
];

echo '<div class="testKeyboardAll">
<div class="testKeyboard rus_keyboard" id="rus_keyboard">';

foreach ($list_ru as $abc) {
    preg_match_all('/./u', $abc, $matches);

    $temp = [];

    if ($matches && $matches[0]) {
        for ($i = 0; $i < count($matches[0]); $i++) {
            $temp[] = [
                'char' => $matches[0][$i],
            ];
        }

        $out = '<div class="keyboards">';

        foreach ($temp as $key => $value) {
            $char = $value['char'];

            switch ($key) {
                case 12:
                    $out .= <<<HTML
<span class="b5 backSpace" id="backSpace"><i class="fa backSpace" id="backSpace"></i></span><br>
<span class="b5 capsLock" id="capsLock"><i class="fa capslock" id="capsLock"></i></span>
HTML;

                    break;

                case 23:
                    $out .= <<<HTML
<span id="enter" class="b5 enter" "><i class="fa enter" id="enter"></i></i></span><br>
<span id="shift" class="b5 shift"><i class="fa shift" id="shift"></i></span>
HTML;
                    break;
            }
            $out .= <<<HTML
<span class="letter_keyboard">{$char}</span>
HTML;
        }

        $out .= <<<HTML
<span class="b5 shift" id="shift"><i class="fa shift" id="shift"></i></span>
<span class="b10 back" id="back"><i class="fa back" id="back"></i></span><br>

<span class="b15 shiftRight" id="ABC">ABC</span>
<span class="shiftRight">,</span>
<span class="b100 space">&nbsp;</span>
<span class="dot">.</span>
<span class="b15" id="num123">123</span>
<span class="b15 close" id="close"><i class="fa close" id="close"></i></span>
HTML;

        $out .= '</div>';

        echo $out;
    }
}

echo '</div>';



/* Eng keyboard */
$list_eng = [
    'qwertyuiopasdfghjklzxcvbnm',
];

echo '<div class="testKeyboard eng_keyboard" id="eng_keyboard">';

foreach ($list_eng as $abc) {
    preg_match_all('/./u', $abc, $matches);

    $temp = [];

    if ($matches && $matches[0]) {
        for ($i = 0; $i < count($matches[0]); $i++) {
            $temp[] = [
                'char' => $matches[0][$i],
            ];
        }

        $out = '<div class="keyboards">';

        foreach ($temp as $key => $value) {
            $char = $value['char'];

            switch ($key) {
                case 10:
                    $out .= <<<HTML
<span class="b5 backSpace" id="backSpace"><i class="fa backSpace" id="backSpace"></i></span><br>
<span class="b5 capsLock" id="capsLock"><i class="fa capslock" id="capsLock"></i></span>
HTML;

                    break;

                case 19:
                    $out .= <<<HTML
<span id="enter" class="b5 enter" "><i class="fa enter" id="enter"></i></i></span><br>
<span id="shift" class="b5 shift"><i class="fa shift" id="shift"></i></span>
HTML;

                    break;
            }

            $out .= <<<HTML
<span class="letter_keyboard">{$char}</span>
HTML;

        }

        $out .= <<<HTML
<span class="b5 shift" id="shift"><i class="fa shift" id="shift"></i></span>
<span class="b10 back" id="back"><i class="fa back" id="back"></i></span><br>

<span class="b15">ABC</span>
<span class="shiftRight">,</span>
<span class="b100 space">&nbsp;</span>
<span class="dot">.</span>
<span class="b15">123</span>
<span class="b15 close" id="close"><i class="fa close" id="close"></i></span>
HTML;

        $out .= '</div>';

        echo $out;
    }
}
echo '</div>';


$list_123 = [
    '123456789~!@#$%^&*()_+{}"?:><-=,./]',
];

echo '<div class="testKeyboard sym_keyboard" id="sym_keyboard">';

foreach ($list_123 as $abc) {
    preg_match_all('/./u', $abc, $matches);

    $temp = [];

    if ($matches && $matches[0]) {
        for ($i = 0; $i < count($matches[0]); $i++) {
            $temp[] = [
                'char' => $matches[0][$i],
            ];
        }

        $out = '<div class="keyboards">';

        foreach ($temp as $key => $value) {
            $char = $value['char'];

            switch ($key) {
                case 12:
                    $out .= <<<HTML
<span class="b5 backSpace" id="backSpace"><i class="fa backSpace" id="backSpace"></i></span><br>
HTML;

                    break;

                case 22:
                    $out .= <<<HTML
<span id="enter" class="b5 enter" "><i class="fa enter" id="enter"></i></i></span><br>
HTML;

                    break;
            }

            $out .= <<<HTML
<span class="letter_keyboard">{$char}</span>
HTML;

        }

        $out .= <<<HTML
<span class="b15 shiftRight">ABC</span>
<span class="shiftRight">,</span>
<span class="b100 space">&nbsp;</span>
<span class="dot">.</span>
<span class="b15">123</span>
<span class="b15 close" id="close"><i class="fa close" id="close"></i></span>
HTML;

        $out .= '</div>';

        echo $out;
    }
}
echo '</div>';


$list_mob = [
    '1234567890',
];

echo '<div class="testKeyboard mob_keyboard" id="mob_keyboard">';
foreach ($list_mob as $abc) {
    preg_match_all('/./u', $abc, $matches);

    $temp = [];

    if ($matches && $matches[0]) {
        for ($i = 0; $i < count($matches[0]); $i++) {
            $temp[] = [
                'char' => $matches[0][$i],
            ];
        }

        $out = '<div class="keyboards">';

        foreach ($temp as $key => $value) {
            $char = $value['char'];

            switch ($key) {
                case 6:
                case 3:
                    $out .= <<<HTML
    <br>
HTML;
                    break;
                case 9:

                    $out .= <<<HTML
    <br>
    <span class="b5 backSpace" id="backSpace"><i class="fa backSpace" id="backSpace"></i></span>
HTML;
                    break;
            }
            $out .= <<<HTML
<span class="letter_keyboard">{$char}</span>
HTML;
        }
        $out .= <<<HTML
 <span id="enter" class="b5 enter" "><i class="fa enter" id="enter"></i></i></span>
HTML;
        $out .= '</div>';
        echo $out;
    }
}
echo '</div>';
/* Email keyboard */
$list_email = [
    '1234567890qwertyuiopasdfghjklzxcvbnm',
];

echo '<div class="testKeyboard email_keyboard" id="email_keyboard">';

foreach ($list_email as $abc) {
    preg_match_all('/./u', $abc, $matches);

    $temp = [];

    if ($matches && $matches[0]) {
        for ($i = 0; $i < count($matches[0]); $i++) {
            $temp[] = [
                'char' => $matches[0][$i],
            ];
        }

        $out = '<div class="keyboards">';

        foreach ($temp as $key => $value) {
            $char = $value['char'];

            switch ($key) {
                case 10:
                    $out .= <<<HTML
<span class="b5 backSpace" id="backSpace"><i class="fa backSpace" id="backSpace"></i></span><br>
<span class="b5 capsLock" id="capsLock"><i class="fa capslock" id="capsLock"></i></span>
HTML;

                    break;

                case 20:
                    $out .= <<<HTML
<br>

HTML;

                    break;

                case 29:
                    $out .= <<<HTML
<span id="enter" class="b5 enter" "><i class="fa enter" id="enter"></i></i></span><br>
<span id="shift" class="b5 shift"><i class="fa shift" id="shift"></i></span>
HTML;

                    break;
            }
            $out .= <<<HTML
<span class="letter_keyboard">{$char}</span>
HTML;
        }
        $out .= <<<HTML
<span class="b5 shift" id="shift"><i class="fa shift" id="shift"></i></span>
<span class="b10 back" id="back"><i class="fa back" id="back"></i></span><br>
<br>
<span class="b10">@</span>
<span class="shiftRight">,</span>
<span class="b100 space">&nbsp;</span>
<span class="dot">.</span>
<span class="b15">123</span>
<span class="b15 close" id="close"><i class="fa close" id="close"></i></span>
HTML;

        $out .= '</div>';

        echo $out;
    }
}
echo '</div></div>';


?>
<script src="/js/testKeyboard.js"></script>
