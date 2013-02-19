<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/mambo/login.template.php begin -->
<?php 
if ($_GET["option"] == "com_net2ftp") {
	require_once($net2ftp_globals["application_skinsdir"] . "/mambo/login_component.template.php");
}
else {
	require_once($net2ftp_globals["application_skinsdir"] . "/mambo/login_module.template.php");
}
?>
<!-- Template /skins/mambo/login.template.php end -->
