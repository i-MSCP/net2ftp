<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/iphone/edit.template.php begin -->
<form id="<?php echo $formname; ?>" action="<?php echo $net2ftp_globals["action_url"]; ?>" method="post">
<?php	printLoginInfo(); ?>
	<input type="hidden" name="state"        value="edit" />
	<input type="hidden" name="state2"       value="" />
	<input type="hidden" name="directory"    value="<?php echo $net2ftp_globals["directory_html"]; ?>" />
	<input type="hidden" name="screen"       value="2" />
	<input type="hidden" name="textareaType" value="<?php echo $textareaType; ?>" />

	 <input type="button" class="normalbutton" value="<?php echo __("Back"); ?>" onclick="document.forms['<?php echo $formname; ?>'].state.value='browse';document.forms['<?php echo $formname; ?>'].state2.value='main';document.forms['<?php echo $formname; ?>'].submit();" /> &nbsp; 
	<input type="button" class="normalbutton" value="<?php echo __("Submit"); ?>"       onclick="document.forms['<?php echo $formname; ?>'].screen.value=3;document.forms['<?php echo $formname; ?>'].submit();" /> 
	<span style="margin-left: 15px;"><?php echo $savestatus_short; ?></span><br />

<?php	if ($net2ftp_globals["state2"] == "") { ?>
	<input type="hidden" name="entry" value="<?php echo $net2ftp_globals["entry_html"]; ?>" />
	<?php echo __("File: "); ?><?php echo $dirfilename; ?>
<?php } elseif ($net2ftp_globals["state2"] == "newfile") { ?>
	<?php echo __("New file name: "); ?><input class="input" type="text" name="entry" />
<?php	} ?><br />

<?php if (($net2ftp_globals["language"] == "ja" || $net2ftp_globals["language"] == "tc" || $net2ftp_messages["iso-8859-1"] == "UTF-8") && function_exists("mb_detect_encoding") == true) { echo __("Character encoding: "); } ?>
<?php	printEncodingSelect($text_encoding_selected); ?>
<?php	printLineBreakSelect($line_break_selected); ?>
<?php if (($net2ftp_globals["language"] == "ja" || $net2ftp_globals["language"] == "tc" || $net2ftp_messages["iso-8859-1"] == "UTF-8") && function_exists("mb_detect_encoding") == true) { echo "<br />"; } ?>

	<textarea name="text" class="edit" rows="12" style="margin-left: 2px; width: 95%; overflow-y: scroll" wrap="off"><?php echo $text; ?></textarea>
</form>

<!-- Template /skins/iphone/edit.template.php end -->
