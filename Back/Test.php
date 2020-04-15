<?php
$langues = array(
	'fr'	=>	'francais',
	'en'	=>	'english',
	'es'	=>	'espagnol',
	'it'	=>	'italiano',
);
$lang = !empty($_GET['lang']) && array_key_exists($_GET['lang'], $langues) ? $_GET['lang'] : 'fr';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test</title>
</head>
<body>
<ul>
	<li><a href="?lang=fr">Français</a></li>
	<li><a href="?lang=en">English</a></li>
	<li><a href="?lang=es">Español</a></li>
	<li><a href="?lang=it">Italiano</a></li>
</ul>
<?php 
if($lang == "en")
{
	echo "oui";
}
 ?>

</body>
</html>