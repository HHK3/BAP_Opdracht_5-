<?php
$from     = 'From: ' . $_POST["from"];
$to       = $_POST["to"];
$content  = $_POST["content"];
$subject  = $_POST["subject"];
mail($to , $subject, $content, $from);
echo 'Je bericht is verzonden!'
?>