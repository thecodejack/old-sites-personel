<?php
if ($_GET['randomId'] != "bH_0SpklWZWAX83GnkQahOkZIXPswLG5BzoHEmlI1Ux8OMjcT1vH4EE02iAVJ_Wl") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
