<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/blue/login.template.php begin -->
<div class="header11">net2ftp</div>
<table border="0" style="margin: 20px; margin-left: auto; margin-right: auto;">
	<tr>
		<td style="vertical-align: top; width: 48%;">
			<div class="header21"><?php echo $login_title; ?></div>
			<form id="LoginForm" action="<?php echo $net2ftp_globals["action_url"]; ?>" method="post" onsubmit="return CheckInput(this);">
			<div style="border: 1px solid black; background-color: #DDDDDD; margin-top: 10px; padding: 10px;">

			<table border="0" cellspacing="0" cellpadding="2">

				<tr>
					<td style="vertical-align: top;"><?php echo __("FTP server"); ?></td>
					<td style="vertical-align: top;" colspan="2">
<?php /* ----- FTP server ----- */ ?>
<?php 				if ($ftpserver["inputType"] == "text") { ?>
							<input type="text" class="input" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" />
<?php 				} elseif ($ftpserver["inputType"] == "select") { ?>
						<select name="ftpserver">
<?php 				for ($i=1; $i<=sizeof($ftpserver["list"]); $i=$i+1) { ?>
							<option value="<?php echo $ftpserver["list"][$i]; ?>" <?php echo $ftpserver["list"][$i]["selected"]; ?>><?php echo $ftpserver["list"][$i]; ?></option>
<?php					} // end for ?>
						</select>
<?php					} elseif ($ftpserver["inputType"] == "hidden") { ?>
							<input type="hidden" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>">
							<b><?php echo $ftpserver["list"][1]; ?></b>
<?php 				} ?>
<?php /* ----- FTP server port ----- */ ?>
<?php					if ($ftpserverport["inputType"] == "text") { ?>
	 						port <input type="text" class="input" size="3" maxlength="5" name="ftpserverport" value="<?php echo $ftpserverport["value"]; ?>" />
<?php 				} else { ?>
							<input type="hidden" name="ftpserverport" value="<?php echo $ftpserverport["value"]; ?>">
<?php 				} ?>
<?php /* ----- Example ----- */ ?>
<?php 				if ($ftpserver["inputType"] == "text") { ?>
						<div style="font-size: 80%;"><?php echo __("Example"); ?>: ftp.server.com, 192.123.45.67</div>
<?php 				} ?>
					</td>
				</tr>
				<tr style="vertical-align: middle;">
					<td><?php echo __("Username"); ?></td>
<?php /* ----- Username ----- */ ?>
					<td><input type="text" class="input" name="username" value="<?php echo $username; ?>" /></td>
<?php /* ----- Anonymous checkbox ----- */ ?>
					<td><span style="font-size: 80%;"><input type="checkbox" name="anonymous" value="1" onclick="do_anonymous(form);" /> <?php echo __("Anonymous"); ?></span></td>
				</tr>
				<tr style="vertical-align: middle;">
					<td><?php echo __("Password"); ?></td>
<?php /* ----- Password ----- */ ?>
					<td><input type="password" class="input" name="password" value="<?php echo $password; ?>" /></td>
<?php /* ----- Passive mode checkbox ----- */ ?>
					<td><span style="font-size: 80%;"><input type="checkbox" name="passivemode" value="yes" <?php echo $passivemode["checked"]; ?> /> <?php echo __("Passive mode"); ?></span></td>
				</tr>
				<tr style="vertical-align: middle;">
					<td><?php echo __("Initial directory"); ?></td>
<?php /* ----- Initial directory ----- */ ?>
					<td><input type="text" class="input" name="directory" value="<?php echo $directory; ?>" /></td>

<?php /* ----- SSL ----- */ ?>
<?php				if ($sslconnect["inputType"] == "checkbox") { ?>
						<td><span style="font-size: 80%;"><input type="checkbox" name="sslconnect" value="yes" <?php echo $sslconnect["checked"]; ?> /> SSL</span></td>
<?php 			} else { ?>
						<td></td>
<?php 			} ?>
				</tr>
				<tr style="vertical-align: middle;">
					<td><?php echo __("Language"); ?></td>
					<td>
<?php /* ----- Language ----- */ ?>
<?php						printLanguageSelect("language", $language_onchange, "", ""); ?>
					</td>
					<td></td>
				</tr>
				<tr style="vertical-align: middle;">
					<td><?php echo __("Skin"); ?></td>
					<td>
<?php /* ----- Skin ----- */ ?>
<?php						printSkinSelect("skin", $skin_onchange, "", ""); ?>
					</td>
					<td></td>
				</tr>
					<tr style="vertical-align: middle;">
						<td><?php echo __("FTP mode"); ?></td>
<?php /* ----- FTP mode radio button ----- */ ?>
						<td colspan="2"><input type="radio" name="ftpmode" value="automatic" <?php echo $ftpmode["automatic"]; ?> /> <?php echo __("Automatic"); ?> &nbsp; <input type="radio" name="ftpmode" value="binary" <?php echo $ftpmode["binary"]; ?> /> Binary</td>
					</tr>
				<tr style="vertical-align: middle;">
					<td colspan="2" style="text-align: center;">
						<input type="hidden" name="state"     value="browse">
						<input type="hidden" name="state2"    value="main">
						<input type="submit" class="button"   value="<?php echo __("Login"); ?>" title="<?php echo __("Login"); ?> (accesskey l)" accesskey="l"/>
					</td>
					<td></td>
				</tr>
				<tr style="vertical-align: middle;">
					<td colspan="2" style="text-align: center;"><span style="font-size: 80%;"><a href="javascript:ClearCookies();"><?php echo __("Clear cookies"); ?></a></span></td>
<?php /* ----- Admin link ----- */ ?>
					<td style="text-align: <?php echo __("right"); ?>; font-size: 80%;"><a href="<?php echo $admin_url; ?>"><?php echo __("Admin"); ?></a></td>
				</tr>
			</table>
			
			</div>
			</form>
			<script type="text/javascript"><!--
			document.forms['LoginForm'].<?php echo $focus; ?>.focus();
			//--></script>
		</td>
		<td style="width: 5%;">
		</td>
		<td style="vertical-align: top; width: 47%;">
			<?php echo __("Once you are logged in, you will be able to:"); ?>
			<ul>
			<li> <?php echo __("Navigate the FTP server"); ?><br />
			<span style="font-size: 80%"><?php echo __("Once you have logged in, you can browse from directory to directory and see all the subdirectories and files."); ?></span></li>
			<li> <?php echo __("Upload files"); ?><br />
			<span style="font-size: 80%"><?php echo __("There are 3 different ways to upload files: the standard upload form, the upload-and-unzip functionality, and the Java Applet."); ?></span></li>
			<li> <?php echo __("Download files"); ?><br />
			<span style="font-size: 80%"><?php echo __("Click on a filename to quickly download one file.<br />Select multiple files and click on Download; the selected files will be downloaded in a zip archive."); ?></span></li>
			<li> <?php echo __("Zip files"); ?><br />
			<span style="font-size: 80%"><?php echo __("... and save the zip archive on the FTP server, or email it to someone."); ?></span></li>
			<li> <?php echo __("Copy, move and delete"); ?><br />
			<span style="font-size: 80%"><?php echo __("Directories are handled recursively, meaning that their content (subdirectories and files) will also be copied, moved or deleted."); ?></span></li>
			<li> <?php echo __("Copy or move to a 2nd FTP server"); ?><br />
			<span style="font-size: 80%"><?php echo __("Handy to import files to your FTP server, or to export files from your FTP server to another FTP server."); ?></span></li>
			<li> <?php echo __("Rename and chmod"); ?><br />
			<span style="font-size: 80%"><?php echo __("Chmod handles directories recursively."); ?></span></li>
			<li> <?php echo __("View code with syntax highlighting"); ?><br />
			<span style="font-size: 80%"><?php echo __("PHP functions are linked to the documentation on php.net."); ?></span></li>
			<li> <?php echo __("Plain text editor"); ?><br />
			<span style="font-size: 80%"><?php echo __("Edit text right from your browser; every time you save the changes the new file is transferred to the FTP server."); ?></span></li>
			<li> <?php echo __("HTML editors"); ?><br />
			<span style="font-size: 80%"><?php echo __("Edit HTML a What-You-See-Is-What-You-Get (WYSIWYG) form; there are 3 different editors to choose from."); ?></span></li>
			<li> <?php echo __("Code editor"); ?><br />
			<span style="font-size: 80%"><?php echo __("Edit HTML and PHP in an editor with syntax highlighting."); ?></span></li>
			<li> <?php echo __("Search for words or phrases"); ?><br />
			<span style="font-size: 80%"><?php echo __("Filter out files based on the filename, last modification time and filesize."); ?></span></li>
			<li> <?php echo __("Calculate size"); ?><br />
			<span style="font-size: 80%"><?php echo __("Calculate the size of directories and files."); ?></span></li>
			</ul>
		</td>
	</tr>
	<tr>
		<td colspan="3" style="text-align: center;"><?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/google_ad.template.php"); ?></td>
	</tr>
</table>
<br />
<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/footer.template.php"); ?>
<!-- Template /skins/blue/login.template.php end -->
