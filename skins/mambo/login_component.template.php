<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/mambo/login_component.template.php begin -->
<div class="moduletable">
<h3>net2ftp - a web based FTP client</h3>
</div>
<div id="ctr" style="margin-left: auto; margin-right: auto;">
	<div class="login">
		<div class="login-form">
			<form id="LoginForm" action="<?php echo $net2ftp_globals["action_url"]; ?>" method="post" onsubmit="return CheckInput(this);">
			<div class="form-block">

<?php /* ----- FTP server ----- */ ?>
				<div class="inputlabel">FTP server and port</div>
<?php 			if ($ftpserver["inputType"] == "text") { ?>
					<input type="text" class="inputbox" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" />
<?php 			} elseif ($ftpserver["inputType"] == "select") { ?>
					<select name="ftpserver">
<?php 				for ($i=1; $i<=sizeof($ftpserver["list"]); $i=$i+1) { ?>
							<option value="<?php echo $ftpserver["list"][$i]; ?>" <?php echo $ftpserver["list"][$i]["selected"]; ?>><?php echo $ftpserver["list"][$i]; ?></option>
<?php					} // end for ?>
					</select>
<?php				} elseif ($ftpserver["inputType"] == "hidden") { ?>
					<input type="hidden" name="ftpserver" value="<?php $ftpserver["list"][1]; ?>">
					<b><?php echo $ftpserver["list"][1]; ?></b>
<?php 			} ?>

<?php /* ----- FTP server port ----- */ ?>
<?php				if ($ftpserverport["inputType"] == "text") { ?>
	 				<input type="text" class="inputbox_small" size="3" maxlength="5" name="ftpserverport" value="<?php echo $ftpserverport["value"]; ?>" />
<?php 			} else { ?>
					<input type="hidden" name="ftpserverport" value="<?php echo $ftpserverport["value"]; ?>">
<?php 			} ?>

<?php /* ----- Username ----- */ ?>
		        	<div class="inputlabel"><?php echo __("Username"); ?></div>
			    	<input name="username" type="text" class="inputbox" value="<?php echo $username; ?>" />

<?php /* ----- Anonymous ----- */ ?>
				<input type="checkbox" name="anonymous" value="1" onclick="do_anonymous(form);" /> <?php echo __("Anonymous"); ?>

<?php /* ----- Password ----- */ ?>
		        	<div class="inputlabel"><?php echo __("Password"); ?></div>
			    	<input name="password" type="password" class="inputbox" value="<?php echo $password; ?>" />

<?php /* ----- Passive mode ----- */ ?>
				<input type="checkbox" name="passivemode" value="yes" <?php echo $passivemode["checked"]; ?>/> <?php echo __("Passive mode"); ?>

<?php /* ----- Initial directory ----- */ ?>
				<div class="inputlabel"><?php echo __("Initial directory"); ?></div>
				<input type="text" class="inputbox" name="directory" value="<?php echo $directory; ?>" />

<?php /* ----- Language ----- */ ?>
				<div class="inputlabel"><?php echo __("Language"); ?></div>
<?php				printLanguageSelect("language", $language_onchange, "margin: 0 0 1em 0; border: 1px solid #cccccc;", ""); ?>

<?php /* ----- Skin ----- */ ?>
<input type="hidden" name="skin" value="mambo">

<?php /* ----- FTP mode ----- */ ?>
				<br />
				<?php echo __("FTP mode"); ?>:
				<input type="radio" name="ftpmode" value="automatic" <?php echo $ftpmode["automatic"]; ?> /> <?php echo __("Automatic"); ?> &nbsp; <input type="radio" name="ftpmode" value="binary" <?php echo $ftpmode["binary"]; ?> /> Binary

<?php /* ----- Login button ----- */ ?>
				<input type="hidden" name="state"     value="browse">
				<input type="hidden" name="state2"    value="main">
				<br /><br />
		        	<input type="submit" name="submit" class="button" value="<?php echo __("Login"); ?>" title="<?php echo __("Login"); ?> (accesskey l)" accesskey="l" />
      	  	</div>
			</form>
    		</div>
		<div class="login-text">
			<div class="ctr"><?php printTitleIcon(); ?></div>
			<p>Please enter your FTP server, username and password.</p>
    		</div>
		<div class="clr"></div>
	</div>
</div>

<script type="text/javascript"><!--
document.forms['LoginForm'].<?php echo $focus; ?>.focus();
//--></script>
<!-- Template /skins/mambo/login_component.template.php end -->
