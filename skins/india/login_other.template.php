<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/india/login_other.template.php begin -->
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
                                <form id="LoginForm" action="<?php echo $net2ftp_globals["action_url"]; ?>" method="post" onsubmit="return CheckInput(this);">
                                <table class="border" bgcolor="#dddddd" border="0" cellpadding="2" cellspacing="0" style="width: 100%;">
                                  <tbody>
                                    <tr> 
                                      <td colspan="3" class="txtfieldmatter" style="padding-<?php echo __("left"); ?>: 10px; vertical-align: top;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="login_labels" style="padding-<?php echo __("left"); ?>: 10px; vertical-align: top; width: 27%;"><?php echo __("FTP server"); ?></td>
                                      <td colspan="2" style="vertical-align: top;">
<?php /* ----- FTP server ----- */ ?>
<?php                                   if ($ftpserver["inputType"] == "text") { ?>
                                          <input type="text" class="input_text" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" />
<?php                                   } elseif ($ftpserver["inputType"] == "select") { ?>
                                          <select name="ftpserver">
<?php                                     for ($i=1; $i<=sizeof($ftpserver["list"]); $i=$i+1) { ?>
                                            <option value="<?php echo $ftpserver["list"][$i]; ?>" <?php echo $ftpserver["list"][$i]["selected"]; ?>><?php echo $ftpserver["list"][$i]; ?></option>
<?php                                     } // end for ?>
                                          </select>
<?php                                   } elseif ($ftpserver["inputType"] == "hidden") { ?>
                                          <input type="hidden" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" />
                                          <b><?php echo $ftpserver["list"][1]; ?></b>
<?php                                   } ?>
<?php /* ----- FTP server port ----- */ ?>  
<?php                                    if ($ftpserverport["inputType"] == "text") { ?>
                                           &nbsp; <span class="login_labels">port</span> <input class="input_text_small" size="3" maxlength="5" name="ftpserverport" value="<?php echo $ftpserverport["value"]; ?>" type="text" /> 
<?php                                    } else { ?>
                                           <input type="hidden" name="ftpserverport" value="<?php echo $ftpserverport["value"]; ?>" />
<?php                                    } ?>
<?php /* ----- Example ----- */ ?>  
<?php                                    if ($ftpserver["inputType"] == "text") { ?>
                                           <div class="txtfieldmatter"><?php echo __("Example"); ?>: ftp.server.com, 192.123.45.67</div>
<?php                                    } ?>
                                      </td>
                                    </tr>
                                    <tr style="vertical-align: middle;"> 
<?php /* ----- Username ----- */ ?>
                                      <td class="login_labels" style="padding-<?php echo __("left"); ?>: 10px;"><?php echo __("Username"); ?></td>
                                      <td style="width: 46%;"><input class="input_text" name="username" value="<?php echo $username; ?>" type="text" /></td>
<?php /* ----- Anonymous checkbox ----- */ ?>
                                      <td class="login_labels" style="width: 27%;"><input class="input_checkbox" name="anonymous" value="1" onclick="do_anonymous(form);" type="checkbox" /><?php echo __("Anonymous"); ?></td>
                                    </tr>
                                    <tr style="vertical-align: middle;"> 
<?php /* ----- Password ----- */ ?>
                                      <td class="login_labels" style="padding-<?php echo __("left"); ?>: 10px;"><?php echo __("Password"); ?></td>
                                      <td><input class="input_text" name="password" value="<?php echo $password; ?>" type="password" /></td>
<?php /* ----- Passive mode ----- */ ?>
                                      <td class="login_labels"><span><input class="input_checkbox" name="passivemode" value="yes" type="checkbox" <?php echo $passivemode["checked"]; ?> /><?php echo __("Passive mode"); ?></span></td>
                                    </tr>
                                    <tr style="vertical-align: middle;"> 
<?php /* ----- Initial directory ----- */ ?>
                                      <td class="login_labels" style="padding-<?php echo __("left"); ?>: 10px;"><?php echo __("Initial directory"); ?></td>
                                      <td><input class="input_text" name="directory" value="<?php echo $directory; ?>" type="text" /></td>
<?php /* ----- SSL ----- */ ?>
<?php                                 if ($sslconnect["inputType"] == "checkbox") { ?>
                                        <td class="login_labels"><span><input class="input_checkbox" name="sslconnect" value="yes" type="checkbox" <?php echo $sslconnect["checked"]; ?> />SSL</span></td>
<?php                                 } else { ?>
                                        <td></td>
<?php                                 } ?>
                                    </tr>
                                    <tr style="vertical-align: middle;"> 
<?php /* ----- Language ----- */ ?>
                                      <td class="login_labels" style="padding-<?php echo __("left"); ?>: 10px;"><?php echo __("Language"); ?></td>
                                      <td>
<?php                                        printLanguageSelect("language", $language_onchange, "", "input_select"); ?>
                                      </td>
                                      <td></td>
                                    </tr>
                                    <tr style="vertical-align: middle;"> 
<?php /* ----- Skin ----- */ ?>
                                      <td class="login_labels" style="padding-<?php echo __("left"); ?>: 10px;"><?php echo __("Skin"); ?></td>
                                      <td>
<?php                                      printSkinSelect("skin", $skin_onchange, "", "input_select"); ?>
                                      </td>
                                      <td></td>
                                    </tr>
                                    <tr style="vertical-align: middle;"> 
<?php /* ----- FTP mode radio button ----- */ ?>
                                      <td class="login_labels" style="padding-<?php echo __("left"); ?>: 10px;"><?php echo __("FTP mode"); ?></td>
                                      <td colspan="2" class="login_labels"> 
                                        <input name="ftpmode" value="binary"    <?php echo $ftpmode["binary"]; ?> type="radio" />Binary &nbsp;&nbsp; 
                                        <input name="ftpmode" value="automatic" <?php echo $ftpmode["automatic"]; ?>    type="radio" /><?php echo __("Automatic"); ?> &nbsp;
                                      </td>
                                    </tr>
                                    <tr style="vertical-align: middle;"> 
                                      <td style="text-align: center; height: 25px;" colspan="3"> 
<?php /* ----- Login button ----- */ ?>
                                        <input type="submit" style="background: transparent url(<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/login_button_grey_<?php echo __("left"); ?>.gif) no-repeat; width: 110px; height: 25px; padding-bottom: 3px; border: 0px;" name="<?php echo __("Login"); ?>" value="<?php echo __("Login"); ?>" alt="<?php echo __("Login"); ?>" />
                                      </td>
                                    </tr>
                                    <tr style="vertical-align: middle; text-align: <?php echo __("left"); ?>;"> 
                                      <td colspan="3" style="text-align: <?php echo __("right"); ?>; padding-<?php echo __("right"); ?>: 20px;">
<?php /* ----- Clear cookies and Admin link ----- */ ?>
                                        <a href="javascript:ClearCookies();" class="link"><?php echo __("Clear cookies"); ?></a> &nbsp;
                                        <a href="<?php echo $admin_url; ?>" class="link"><?php echo __("Admin"); ?></a>
                                      </td>
                                    </tr>
                                    <tr style="vertical-align: middle;"> 
                                      <td colspan="3" style="text-align: center;">&nbsp;</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <input type="hidden" name="state"     value="browse" />
                                <input type="hidden" name="state2"    value="main" />
                                </form>
<script type="text/javascript"><!--
  document.forms['LoginForm'].<?php echo $focus; ?>.focus();
//--></script>
                              </td>
                              <td style="vertical-align: top; width: 3%;">&nbsp;</td>
                              <td style="vertical-align: top; width: 45%;">
                                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                  <tbody>
                                    <tr> 
                                      <td class="text_white" style="padding-<?php echo __("left"); ?>: 10px; background-color: #1d64ad; height: 24;"><?php echo __("Once you are logged in, you will be able to:"); ?></td>
                                    </tr>
                                    <tr> 
                                      <td style="line-height: 1px;">&nbsp;</td>
                                    </tr>
                                    <tr> 
                                      <td style="vertical-align: top;">
                                        <table class="border2" style="height: 300px; width: 100%;" border="0" cellpadding="0" cellspacing="0">
                                          <tbody>
                                            <tr> 
                                              <td style="text-align: center; width: 6%;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4" style="width: 94%;"><?php echo __("Navigate the FTP server"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td style="vertical-align: top;"><?php echo __("Once you have logged in, you can browse from directory to directory and see all the subdirectories and files."); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4"><?php echo __("Upload files"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td><?php echo __("There are 3 different ways to upload files: the standard upload form, the upload-and-unzip functionality, and the Java Applet."); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4"><?php echo __("Download files"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td><?php echo __("Click on a filename to quickly download one file.<br />Select multiple files and click on Download; the selected files will be downloaded in a zip archive."); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4"><?php echo __("Zip files"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td><?php echo __("... and save the zip archive on the FTP server, or email it to someone."); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4"><?php echo __("Unzip files"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td><?php echo __("Different formats are supported: .zip, .tar, .tgz and .gz."); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4"><?php echo __("Install software"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td><?php echo __("Choose from a list of popular applications (PHP required)."); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4"><?php echo __("Copy, move and delete"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td><?php echo __("Directories are handled recursively, meaning that their content (subdirectories and files) will also be copied, moved or deleted."); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4"><?php echo __("Copy or move to a 2nd FTP server"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td><?php echo __("Handy to import files to your FTP server, or to export files from your FTP server to another FTP server."); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4"><?php echo __("Rename and chmod"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td><?php echo __("Chmod handles directories recursively."); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4"><?php echo __("View code with syntax highlighting"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td><?php echo __("PHP functions are linked to the documentation on php.net."); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4"><?php echo __("Plain text editor"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td><?php echo __("Edit text right from your browser; every time you save the changes the new file is transferred to the FTP server."); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4"><?php echo __("HTML editors"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td><?php echo __("Edit HTML a What-You-See-Is-What-You-Get (WYSIWYG) form; there are 2 different editors to choose from."); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4"><?php echo __("Search for words or phrases"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td><?php echo __("Filter out files based on the filename, last modification time and filesize."); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;"><img src="<?php echo $net2ftp_globals["image_url"]; ?>/backgrounds/arrow_bullet1.gif" style="height: 12px; width: 14px;" alt="arrow_bullet1" /></td>
                                              <td class="txtfieldmidhead4"><?php echo __("Calculate size"); ?></td>
                                            </tr>
                                            <tr> 
                                              <td style="text-align: center;">&nbsp;</td>
                                              <td><?php echo __("Calculate the size of directories and files."); ?></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
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
<!-- Template /skins/india/login_other.template.php end -->
