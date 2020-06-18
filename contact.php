<meta charset="utf-8"> 
<?php
$message="Сообщения с-Website";
error_reporting( E_ERROR );
if (isset($_POST['name']))			{$name			= $_POST['name'];		if ($name == '')	{unset($name);}}
if (isset($_POST['email']))		    {$email		    = $_POST['email'];		if ($email == '')	{unset($email);}}
if (isset($_POST['tel']))			{$text			= $_POST['text'];		if ($text == '')	{unset($text);}}
if (isset($name) ) {
$name=stripslashes($name);
$name=htmlspecialchars($name);
}
if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}
$address="anastasia.ogienko@gmail.com";
$note_text=" $message \r\n Имя : $name \r\n Email : $email \r\n Сообщение : $text";
if (isset($name)) {
mail($address,$message,$note_text,"Content-type:text/plain; utf-8"); 
}
?>