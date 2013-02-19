<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/india/error.template.php begin -->
<script type="text/javascript" src="<?php echo $net2ftp_globals["application_rootdir_url"]; ?>/modules/edit/edit.js"></script>
<br />
<table border="0" cellpadding="0" cellspacing="0" class="error_border1" style="width: 80%; margin-left: auto; margin-right: auto;">
  <tbody>
    <tr> 
      <td class="txtfieldmidhead" style="padding-<?php echo __("left"); ?>: 20px; background-image:url(<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/error_mid_bg.gif); height: 29px; vertical-align: middle;">
        <?php echo __("An error has occured"); ?>:
      </td>
    </tr>
    <tr> 
      <td>
        <table class="error_border2" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
          <tbody>
            <tr> 
              <td colspan="5" style="padding: 10px; height: 55px;">
                <p><?php echo $net2ftp_result["errormessage"]; ?></p><br />
              </td>
            </tr>
            <tr> 
              <td style="width: 5%;">&nbsp;</td>
              <td style="width: 10%;">
                <table border="0" cellpadding="0" cellspacing="0" style="background-image:url(<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/error_button_back_<?php echo __("left"); ?>.gif); height: 25px; width: 110px; text-align: center; margin-left: auto; margin-right: auto;"><tbody><tr> 
                  <td style="padding-<?php echo __("right"); ?>: 15px; padding-top: 4px; cursor: pointer; cursor: hand; vertical-align: top;" onclick="top.history.back();"><a href="javascript:top.history.back();" class="txtfieldmatter"><?php echo __("Go back"); ?></a></td>
                </tr></tbody></table>
              </td>
              <td style="width: 5%;">&nbsp;</td>
              <td style="width: 10%;">
                <table border="0" cellpadding="0" cellspacing="0" style="background-image:url(<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/error_button_login_<?php echo __("left"); ?>.gif); height: 25px; width: 160px; text-align: center; margin-left: auto; margin-right: auto;"><tbody><tr>
                  <td style="padding-<?php echo __("right"); ?>: 15px; padding-top: 4px; cursor: pointer; cursor: hand; vertical-align: top;" onclick="document.location.href='index.php?state=clearcookies';"><a href="index.php?state=clearcookies" class="txtfieldmatter"><?php echo __("Go to the login page"); ?></a></td>
                </tr></tbody></table>
              </td>
              <td style="width: 70%;">&nbsp;</td>
            </tr>
            <tr> 
              <td colspan="5" style="padding: 10px;">
                <div id="error_hidden">
                  <a href="javascript:toggleTextarea('error');">View technical details</a>
                </div>
                <div id="error_shown" style="display: none;">
                  <a href="javascript:toggleTextarea('error');">Hide technical details</a><br /><br />
			The error occured in file <b><?php echo $net2ftp_result["file"]; ?></b> on line <b><?php echo $net2ftp_result["line"]; ?></b>.<br />
			<ul>
<?php				for ($i=0; $i<sizeof($net2ftp_result["debug_backtrace"]); $i++) { ?>
					<li> function <?php echo $net2ftp_result["debug_backtrace"][$i]["function"]; ?> <span style="font-size: 75%">(<?php echo $net2ftp_result["debug_backtrace"][$i]["file"]; ?> on line <?php echo $net2ftp_result["debug_backtrace"][$i]["line"]; ?>)</span>
<?php					if (isset($net2ftp_result["debug_backtrace"][$i]["args"]) == true && sizeof($net2ftp_result["debug_backtrace"][$i]["args"]) > 0) { ?>
					<ul>
<?php						for ($j=0; $j<sizeof($net2ftp_result["debug_backtrace"][$i]["args"]); $j++) { ?>
						<li> argument <?php echo htmlEncode2($j); ?>: <?php echo htmlEncode2($net2ftp_result["debug_backtrace"][$i]["args"][$j]); ?></li>
<?php						} // end for ?>
					</ul>
<?php					} // end if ?>
					</li>
<?php				} // end for ?>
			</ul>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/footer.template.php"); ?>
<!-- Template /skins/india/error.template.php end -->
