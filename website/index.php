<?
define("BASE_DIR", dirname(__FILE__));
define("PARTIALS_DIR", BASE_DIR."/partials/");
define("BIN_DIR", BASE_DIR."/bin/");

define("CONTENT_DIR", "./content/");
define("CSS_DIR", "./css/");
define("IMAGES_DIR", "./img/");
define("JS_DIR", "./js/");

define("NUMBER_OF_TOP_PODCSTS", 20);

$siteContent = 'de';
$langSwitch = 'en';

if (array_key_exists('QUERY_STRING', $_SERVER)) {
	parse_str($_SERVER['QUERY_STRING']);

	if (isset($lang)) {
		switch ($lang) {
			case "en": {
				$langSwitch = 'de';
				$siteContent = $lang;
				break;
			}
			case "de": {
				$langSwitch = 'en';
				$siteContent = $lang;
				break;
			}
		}
	}
}
?><!DOCTYPE html>
<html lang="<?echo $siteContent; ?>">
	<? include_once(PARTIALS_DIR."/html_head.php") ?>

    <body>
<?
        include_once(PARTIALS_DIR."header.php");
        include_once(CONTENT_DIR.$siteContent.'.php');
        include_once(PARTIALS_DIR."/".$siteContent."/footer.php");
        include_once(PARTIALS_DIR."ga.php");
?>
    </body>
</html>
