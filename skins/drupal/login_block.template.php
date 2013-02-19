<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/drupal/login_block.template.php begin -->
<form id="LoginForm" action="<?php echo $net2ftp_globals["action_url"]; ?>" method="post" onsubmit="return CheckInput(this);">

<?php echo __("FTP server"); ?><br />
<?php	if ($ftpserver["inputType"] == "text") { ?>
		<input type="text" class="inputbox" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" />
<?php } elseif ($ftpserver["inputType"] == "select") { ?>
		<select name="ftpserver">
<?php 	for ($i=1; $i<=sizeof($ftpserver["list"]); $i=$i+1) { ?>
				<option value="<?php echo $ftpserver["list"][$i]; ?>" <?php echo $ftpserver["list"][$i]["selected"]; ?>><?php echo $ftpserver["list"][$i]; ?></option>
<?php		} // end for ?>
		</select>
<?php	} elseif ($ftpserver["inputType"] == "hidden") { ?>
		<input type="hidden" name="ftpserver" value="<?php $ftpserver[1]; ?>">
		<b><?php echo $ftpserver["list"][1]; ?></b>
<?php } ?>

<br />

<?php echo __("Port"); ?><br />
<?php	if ($ftpserverport["inputType"] == "text") { ?>
		<input type="text" class="inputbox_small" size="3" maxlength="5" name="ftpserverport" value="<?php echo $ftpserverport["value"]; ?>" />
<?php } else { ?>
		<input type="hidden" name="ftpserverport" value="<?php echo $ftpserverport["value"]; ?>">
<?php } ?>

<br />

<?php echo __("Username"); ?><br />
<input name="username" type="text" class="inputbox" value="<?php echo $username; ?>" />

<br />

<?php echo __("Password"); ?><br />
<input name="password" type="password" class="inputbox" value="<?php echo $password; ?>" />

<br />

<?php echo __("Initial directory"); ?><br />
<input type="text" class="inputbox" name="directory" value="<?php echo $directory; ?>" />

<br />

<?php echo __("Language"); ?><br />
<?php	printLanguageSelect("language", $language_onchange, "margin: 0 0 0 0; border: 1px solid #cccccc;", ""); ?>

<br />

<?php echo __("Skin"); ?><br />
<?php	printSkinSelect("skin", $skin_onchange, "margin: 0 0 0 0; border: 1px solid #cccccc;", ""); ?>

<br />

<?php echo __("FTP mode"); ?><br />
<input type="radio" name="ftpmode" value="automatic" <?php echo $ftpmode["automatic"]; ?> /> <?php echo __("Automatic"); ?> &nbsp; <input type="radio" name="ftpmode" value="binary" <?php echo $ftpmode["binary"]; ?> /> Binary

<br />

<input type="hidden" name="state"     value="browse">
<input type="hidden" name="state2"    value="main">
<div style="padding-top: 10px; margin-left: auto; margin-right: auto;"><input type="submit" name="submit" class="button" value="<?php echo __("Login"); ?>" title="<?php echo __("Login"); ?> (accesskey l)" accesskey="l" /></div>

</form>
<!-- Template /skins/drupal/login_block.template.php end -->
