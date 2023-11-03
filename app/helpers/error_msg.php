<?php
// function flash($name = '', $message = '', $class = 'form-message form-message-red'){
//     if(!empty($name)){
//         if(!empty($message) && empty($_SESSION[$name])){
//             $_SESSION[$name] = $message;
//             $_SESSION[$name.'_class'] = $class;
//         }else if(empty($message) && !empty($_SESSION[$name])){
//             $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : $class;
//             echo '<div class="'.$class.'" >'.$_SESSION[$name].'</div>';
//             unset($_SESSION[$name]);
//             unset($_SESSION[$name.'_class']);
//         }
//     }
// }

function flash($name = '', $message = '', $class = 'form-message form-message-red'){
    if (!empty($name)) {
        if (!empty($message) && empty($_SESSION[$name])) {
            $_SESSION[$name] = $message;
            $_SESSION[$name.'_class'] = $class;
        } else if (empty($message) && !empty($_SESSION[$name])) {
            $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : $class;
            echo '<div id="' . $name . '-flash" class="'.$class.'" >'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name.'_class']);
            
            echo '<script>
                setTimeout(function(){
                    document.getElementById("' . $name . '-flash").style.display = "none";
                }, 4000); // Adjust the time (in milliseconds) as needed
            </script>';
        }
    }
}

function redirect($location){
    header("location: ".$location);
    exit();
}
?>