<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/iphone/login.template.php begin -->
<form id="LoginForm" action="<?php echo $net2ftp_globals["action_url"]; ?>" method="post" onsubmit="return CheckInput(this);">
	<div class="header">
		net2ftp <span style="font-size: 10px;">for the iphone</span>
		<?php printLanguageSelect("language", $language_onchange, "margin-left: 80px; width: 90px;", ""); ?>
	</div>
	<div class="page">
<?php /* ----- FTP server and FTP server port ----- */ ?>
<?php		if ($ftpserver["inputType"] == "text") { ?>
			<div class="label"><?php echo __("FTP server"); ?></div>
			<input type="text" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" autocorrect="off" autocapitalize="off" style="width: 80%;" />
	 		<input type="text" size="4" maxlength="5" name="ftpserverport" value="<?php echo $ftpserverport["value"]; ?>" autocorrect="off" autocapitalize="off" />
<?php 	} elseif ($ftpserver["inputType"] == "select") { ?>
			<div class="label"><?php echo __("FTP server"); ?></div>
			<select name="ftpserver" style="width: 80%;">
<?php 		for ($i=1; $i<=sizeof($ftpserver["list"]); $i=$i+1) { ?>
				<option value="<?php echo $ftpserver["list"][$i]; ?>" <?php echo $ftpserver["list"][$i]["selected"]; ?>><?php echo $ftpserver["list"][$i]; ?></option>
<?php			} // end for ?>
			</select>
	 		<input type="text" maxlength="5" name="ftpserverport" value="<?php echo $ftpserverport["value"]; ?>" />
<?php		} elseif ($ftpserver["inputType"] == "hidden") { ?>
			<b><?php echo $ftpserver["list"][1]; ?></b>
			<input type="hidden" name="ftpserverport" value="<?php echo $ftpserverport["value"]; ?>">
			<input type="hidden" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>">
<?php 	} ?>

<?php /* ----- Username ----- */ ?>
		<div class="label"><?php echo __("Username"); ?></div>
		<input type="text" name="username" value="<?php echo $username; ?>" autocorrect="off" autocapitalize="off" style="width: 80%;" />

<?php /* ----- Password ----- */ ?>
		<div class="label"><?php echo __("Password"); ?></div>
		<input type="password" name="password" value="<?php echo $password; ?>" autocorrect="off" autocapitalize="off" style="width: 80%;" />

<?php /* ----- Protocol ----- */ ?>
<?php		if ($protocol["inputType"] == "select") { ?>
		<div class="label"><?php echo __("Protocol"); ?></div>
		<select name="protocol">
<?php		for ($i=1; $i<=sizeof($protocol["list"]); $i=$i+1) { ?>
			<option value="<?php echo $protocol["list"][$i]; ?>" <?php echo $protocol["list"][$i]["selected"]; ?>><?php echo $protocol["list"][$i]; ?></option>
<?php		} // end for ?>
<?php		} // end if ?>

<?php /* ----- Login button ----- */ ?>
		<input type="hidden" name="state" value="browse" />
		<input type="hidden" name="state2" value="main" />
		<input type="submit" class="bigbutton" value="<?php echo __("Login"); ?>" style="margin-bottom: 30px; margin-top: 10px;" />

	</div>
</form>
<script type="text/javascript"><!--
	document.forms['LoginForm'].<?php echo $focus; ?>.focus();
//--></script>
<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/footer.template.php"); ?>
<!-- Template /skins/iphone/login.template.php end -->
