<?php
$to = "shinoy@cerebtech.com";
$from = $_POST["userName"];
$mailHeaders = $_POST["userEmail"];
$content = $_POST["subject"]."|".$_POST["content"];
if(mail($to, $from, $mailHeaders, $content)) {
print "<p class='success'>Mail Sent.</p>";
} else {
print "<p class='Error'>Problem in Sending Mail.</p>";
}
?>
