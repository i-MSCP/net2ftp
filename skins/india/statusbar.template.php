<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/india/statusbar.template.php begin -->
<script type="text/javascript" src="<?php echo $net2ftp_globals["application_rootdir_url"]; ?>/skins/<?php echo $net2ftp_globals["skin"]; ?>/status/status.js"></script>
<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/status/status.template.php"); ?>
<table border="0" cellpadding="0" cellspacing="0" style="width: 1004px; margin-left: auto; margin-right: auto;">
  <tbody>
    <tr>
      <td style="vertical-align: top; background-color: #e5e5e5;">
        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
          <tbody>
            <tr> 
              <td style="vertical-align: top; text-align: <?php echo __("left"); ?>;">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 1000px; margin-left: auto; margin-right: auto;">
                  <tbody>
                    <tr> 
                      <td style="background-image:url(<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/headbg.gif); height: 122px; vertical-align: top;">
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                          <tbody>
                            <tr> 
                              <td style="background-image:url(<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/header.gif); height: 122px; vertical-align: top;">
                                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                  <tbody>
                                    <tr> 
                                      <td style="width: 104px; vertical-align: top;">
                                        <table style="height: 110px; width: 100%;" border="0" cellpadding="0" cellspacing="0">
                                          <tbody>
                                            <tr> 
                                              <td style="text-align: center; vertical-align: top; width: 100%;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/logo.gif" style="height: 104px; width: 145px;" alt="logo" /></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                      <td style="width: 85%; vertical-align: top;">
                                        <form id="StatusbarForm" method="post" action="<?php echo $net2ftp_globals["action_url"]; ?>">
                                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                          <tbody>
                                            <tr> 
                                              <td style="width: 30%;">&nbsp;</td>
                                              <td style="width: 25%;">&nbsp;</td>
                                              <td style="width: 20%;">&nbsp;</td>
                                            </tr>
                                            <tr> 
                                              <td colspan="2" class="txtfielddomain" style="vertical-align: middle;"><?php echo $net2ftp_globals["ftpserver"]; ?></td>
                                              <td style="padding-<?php echo __("right"); ?>: 20px; height: 45px; vertical-align: top; text-align: <?php echo __("right"); ?>;">
<?php                                           printLoginInfo(); ?>
			                              <input type="hidden" name="state"         value="browse" />
			                              <input type="hidden" name="state2"        value="main" />
			                              <input type="hidden" name="directory"     value="<?php echo $net2ftp_globals["directory_html"]; ?>" />
								<input type="hidden" name="url_withpw"    value="<?php echo printPHP_SELF("bookmark_withpw"); ?>" />
								<input type="hidden" name="url_withoutpw" value="<?php echo printPHP_SELF("bookmark_withoutpw"); ?>" />
			                              <input type="hidden" name="text"          value="net2ftp <?php echo $net2ftp_globals["ftpserver"]; ?>" />
<?php			                              if ($net2ftp_globals["state"] != "bookmark") { printActionIcon("bookmark", "document.forms['StatusbarForm'].state.value='bookmark';document.forms['StatusbarForm'].submit();"); } ?>
<?php                                           printActionIcon("refresh",  "window.location.reload();"); ?>
<?php                                           printActionIcon("help",     "void(window.open('" . $net2ftp_globals["application_rootdir_url"] . "/help.html','Help','location,menubar,resizable,scrollbars,status,toolbar'));"); ?>
<?php                                           printActionIcon("logout",   "document.forms['StatusbarForm'].state.value='logout';document.forms['StatusbarForm'].submit();"); ?>
                                              </td>
                                            </tr>
                                            <tr> 
                                              <td colspan="3" style="text-align: <?php echo __("left"); ?>;">
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        </form>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr> 
                      <td style="background-image:url(<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/bgmid.gif); padding-<?php echo __("left"); ?>: 30px; padding-<?php echo __("right"); ?>: 30px; padding-top: 10px; padding-bottom: 10px; vertical-align: top;">
<!-- Template /skins/india/statusbar.template.php end -->
