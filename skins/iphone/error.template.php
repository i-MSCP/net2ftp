<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/iphone/error.template.php begin -->
<div class="header">
	net2ftp <span style="font-size: 10px;">for the iphone</span>
</div>
<div class="header_row">
	<?php echo __("An error has occured"); ?>
</div>
<div class="page">
	<?php echo $net2ftp_result["errormessage"]; ?><br />
	<input type="button" class="bigbutton" value="<?php echo __("Go back"); ?>" onclick="top.history.back();" /><br />
	<input type="button" class="bigbutton" value="<?php echo __("Go to the login page"); ?>" onclick="location.href='index.php?state=clearcookies';" />
</div>
<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/footer.template.php"); ?>
<!-- Template /skins/iphone/error.template.php end -->
