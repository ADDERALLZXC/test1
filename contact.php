<?php
if($_POST["message"]) {
    mail("adderallxdr@yandex.ru", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>