document.addEventListener('DOMContentLoaded', () => {

    let testKeyboard = document.querySelector('.testKeyboardAll');
    var work = true;
    var capslock = 0;
    var shift = 0;
    var langStatus = "rus";
    if (testKeyboard) {
        testKeyboard.addEventListener('click', (event) => {
            let target = event.target;
            console.log(target.getAttribute("class"));
            if (!work) {
                console.log("Stop working");
                return
            }
            if (target.getAttribute("class") == "keyboards") {
                return
            }
            if (target.getAttribute('id') == 'shift') { // fontAWESOME
                enterShift();
            } else if (target.getAttribute('id') == 'capsLock') {
                enterCapslock();
            } else if (target.innerText == "ABC") {
                console.log("Change language");
                if (type_of_keyboard_to_input[current_id] == "email") {
                    closeKeyboard();
                    callKeyboard();
                    return;
                }
                if (langStatus == "num") {
                    langStatus = "rus";
                }
                if (langStatus == "rus") {
                    document.getElementById('rus_keyboard').style.display = 'none';
                    document.getElementById('eng_keyboard').style.display = 'block';
                    document.getElementById('sym_keyboard').style.display = 'none';

                    langStatus = "eng";
                } else if (langStatus == "eng") {
                    document.getElementById('rus_keyboard').style.display = 'block';
                    document.getElementById('eng_keyboard').style.display = 'none';
                    document.getElementById('sym_keyboard').style.display = 'none';
                    langStatus = "rus";
                }

            } else if (target.innerText === "123") {
                console.log("Symbol keyboard");
                closeKeyboard();
                document.getElementById('sym_keyboard').style.display = 'block';
            } else if (target.getAttribute('id') === 'enter') {
                console.log("Next field");
                //console.log("Current id");
                //console.log(current_id);
                removeFocusedStyle();
                closeKeyboard();
                if (current_id == inputs.length - 1) {
                    current_id = 0;
                } else {
                    current_id++;
                    document.getElementById(inputs[current_id]).focus();
                    addFocusedStyle();
                    callKeyboard();
                }

            } else if (target.getAttribute('id') == 'back') {
                console.log("Back field");
                removeFocusedStyle();
                closeKeyboard();
                if (current_id == 0) {

                    current_id = 0;
                } else {
                    current_id--;
                    document.getElementById(inputs[current_id]).focus();
                    addFocusedStyle();
                    callKeyboard();
                }
            } else if (target.getAttribute('id') == 'close') {
                closeKeyboard();
                removeFocusedStyle();
            } else if (target.getAttribute('id') == 'backSpace') {
                var str = document.getElementById(inputs[current_id]).value;
                var newStr = str.substring(0, str.length - 1);
                document.getElementById(inputs[current_id]).value = newStr;
            } else {
                var string_keyboard = document.getElementById(inputs[current_id]).value + target.innerText.toString();

                //alert("Hey");
                //document.getElementById(inputs[current_id]).value = document.getElementById(inputs[current_id]).value + target.innerText.toString()
                if(type_of_keyboard_to_input[current_id] == "mob"){
                    $('#' + inputs[current_id]).mask("8(999) 999-9999").val(string_keyboard).trigger('input');
                } else {
                    document.getElementById(inputs[current_id]).value = document.getElementById(inputs[current_id]).value + target.innerText.toString();
                }

                //document.getElementById(inputs[current_id])

            }

        });
    }
    function enterCapslock() {
        console.log("CapsLock pressed");
        capslock++;
        if (capslock == 1) {
            var style = document.createElement('style');
            style.innerHTML = `
                        .letter_keyboard {
                            text-transform: uppercase;
                        }
                        `;
            document.head.appendChild(style);
        } else {
            capslock = 0;
            var style = document.createElement('style');
            style.innerHTML = `
                        .letter_keyboard {
                            text-transform: lowercase;
                        }
                        `;
            document.head.appendChild(style);
        }
    }

    function enterShift() {
        console.log("One time shift pressed");
        capslock++;
        shift++;
        if (capslock == 1) {
            //alert("hmmm..");
            var style = document.createElement('style');
            style.innerHTML = `
                         .letter_keyboard {
                            text-transform: uppercase;
                            }
                         `;
            document.head.appendChild(style);
        } else {
            capslock = 0;
            var style = document.createElement('style');
            style.innerHTML = `
                        .letter_keyboard {
                            text-transform: lowercase;
                        }
                        `;
            document.head.appendChild(style);
        }
    }

    function closeKeyboard() {
        document.getElementById('rus_keyboard').style.display = 'none';
        document.getElementById('eng_keyboard').style.display = 'none';
        document.getElementById('sym_keyboard').style.display = 'none';
        document.getElementById('mob_keyboard').style.display = 'none';
        document.getElementById('email_keyboard').style.display = 'none';
    }
});


function addFocusedStyle() {
    var focused_p = document.getElementById(tag_p[current_id]);
    focused_p.classList.add("focused_p");
    var focused_input = document.getElementById(inputs[current_id]);
    focused_input.classList.add("focused_input");
}

function removeFocusedStyle() {
    var focused_p = document.getElementById(tag_p[current_id]);
    focused_p.classList.remove("focused_p");
    var focused_input = document.getElementById(inputs[current_id]);
    focused_input.classList.remove("focused_input");
}

function callKeyboard() {

    switch (type_of_keyboard_to_input[current_id]) {
        case "rus": // Calling russian keyboard
            document.getElementById('rus_keyboard').style.display = 'block';
            break;
        case "eng": // Calling english keyboard
            document.getElementById('eng_keyboard').style.display = 'block';
            break;
        case "mob": // Calling keyboard for mobile phone
            document.getElementById('mob_keyboard').style.display = 'block';
            break;
        case "email":
            document.getElementById('email_keyboard').style.display = 'block';
            break;
        default:
            // Calling usually keyboard
            document.getElementById('eng_keyboard').style.display = 'block';
            break;
    }

}