<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/shinra/jupload1.template.php begin -->
<applet
	code="wjhk.jupload2.JUploadApplet"
	name="JUpload"
	archive="plugins/jupload/wjhk.jupload.jar"
	width="640"
	height="300"
	mayscript="true"
	alt="The java pugin must be installed.">
	<param name="lang"                        value="en" />
 	<param name="postURL"                     value="<?php echo $actionURL; ?>">
 	<param name="afterUploadURL"              value="javascript:alert('Upload done');">
	<param name="debugLevel"                  value="99" />
	<param name="showLogWindow"               value="onError" />
	<param name="showStatusBar"               value="True" />
	<param name="maxFileSize"                 value="<?php echo $maxFileSize; ?>" />
	<param name="maxChunkSize"                value="<?php echo $maxChunkSize; ?>" />
	<param name="httpUploadParameterType"     value="iteration" />
	<param name="nbFilesPerRequest"           value="<?php echo $maxFilesPerRequest; ?>" />
	<param name="stringUploadSuccess"         value="SUCCESS" />
	<param name="stringUploadWarning"         value="WARNING" />
	<param name="stringUploadError"           value="ERROR" />
<script type="text/javascript">
	document.write('<param name=browserCookie value="');
	document.write(document.cookie);
	document.writeln('">');
</script>
<?php echo __("Your browser does not support applets, or you have disabled applets in your browser settings."); ?>
<?php echo __("To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now."); ?>
<?php echo __("The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment)."); ?>
<?php echo __("Alternatively, use net2ftp's normal upload or upload-and-unzip functionality."); ?>
</applet><br /><br />
<u><?php echo __("Restrictions:"); ?></u>
<div style="font-size: 90%">
<ul>
	<li> <?php echo __("The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>", $max_filesize_net2ftp, $max_upload_filesize_php); ?></li>
	<li> <?php echo __("The maximum execution time is <b>%1\$s seconds</b>", $max_execution_time); ?></li>
	<li> <?php echo __("The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"); ?></li>
	<li> <?php echo __("If the destination file already exists, it will be overwritten"); ?></li>
</ul>
</div><br />
<!-- Template /skins/shinra/jupload1.template.php end -->
