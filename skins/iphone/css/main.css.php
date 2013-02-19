<?php
header("Content-type: text/css");
if (isset($_GET["ltr"]) == false || $_GET["ltr"] != "rtl") { $left = "left"; $right = "right"; }
else                                                       { $left = "right"; $right = "left"; }
?>

body { margin: 0px; padding: 0px; }
input[type="text"], input[type="password"] { font-size: 14px; padding: 2px; }
.smallbutton { font-size: 10px; margin: 0px; }
.normalbutton { font-size: 16px; font-weight: bold; }
.bigbutton { font-size: 16px; font-weight: bold; width: 100% }
.browse_row_header { background-color: #ABABAB; color: #000000; margin-top: 10px; padding: 2px; }
.browse_row   { background-color: #FF0000; margin-bottom: 4px; margin-top: 4px; }
.browse_col1  { position: absolute; <?php echo $left; ?>: 2px; }
.browse_col2  { position: absolute; <?php echo $left; ?>: 35px; }
.browse_col3  { position: absolute; <?php echo $left; ?>: 230px; }
.footer { background-color: #333333; color: #FFFFFF; font-size: 22px; padding: 2px 0px 2px 10px; }
.header { background-color: #333333; color: #FFFFFF; font-size: 22px; padding: 2px 0px 2px 10px; }
.manage_header { background-color: #ABABAB; color: #000000; padding: 2px; }
.page { background-color: #DEDEDE; color: #000000; padding: 2px; }
.label { margin: 2px 0; color: #000000; font-size: 16px; font-weight: bold; }
.warning { background-color: #FFDD00; color: #000000; border: 2px; border-style: solid; border-color: #FFCC33; }