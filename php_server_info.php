<?php
if(isset($_POST['command'])) {
    switch($_POST['command']) {
        case 'PHP_SELF':
            echo $_SERVER['PHP_SELF'];
            break;
        case 'SERVER_NAME':
            echo $_SERVER['SERVER_NAME'];
            break;
        case 'HTTP_HOST':
            echo $_SERVER['HTTP_HOST'];
            break;
        case 'HTTP_REFERER':
            echo $_SERVER['HTTP_REFERER'];
            break;
        case 'HTTP_USER_AGENT':
            echo $_SERVER['HTTP_USER_AGENT'];
            break;
        case 'SCRIPT_NAME':
            echo $_SERVER['SCRIPT_NAME'];
            break;
        // Add more cases for other commands as needed
        default:
            echo "Invalid command";
    }
}
?>
