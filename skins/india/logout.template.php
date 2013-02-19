<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/india/logout.php begin -->
<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/header_login.template.php"); ?>
                    <tr> 
                      <td style="background-image:url(<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/bgmid.gif); vertical-align: top;">
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-left: auto; margin-right: auto;">
                          <tbody>
                            <tr> 
                              <td colspan="5">&nbsp;</td>
                            </tr>
                            <tr> 
                              <td style="width: 3%;">&nbsp;</td>
                              <td style="vertical-align: top; width: 46%;">
<?php echo __("You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>.", $url); ?><br /><br />
<?php echo __("Note: other users of this computer could click on the browser's Back button and access the FTP server."); ?>
<?php echo __("To prevent this, you must close all browser windows."); ?><br /><br />

<div style="text-align: center;">
<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/google_logout.template.php"); ?>
<br /><br />
<input type="button" onclick="window.close();" value="<?php echo __("Close"); ?>" title="<?php echo __("Click here to close this window"); ?>" />
</div>

                              </td>
                              <td style="width: 3%;">&nbsp;</td>
                            </tr>
                            <tr> 
                              <td colspan="5">&nbsp;</td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/footer.template.php"); ?>
<!-- Template /skins/india/logout.php end -->
