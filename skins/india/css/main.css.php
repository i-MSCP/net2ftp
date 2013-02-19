<?php
header("Content-type: text/css");
if (isset($_GET["ltr"]) == false || $_GET["ltr"] != "rtl") { $left = "left"; $right = "right"; }
else                                                       { $left = "right"; $right = "left"; }
?>

body {
	background-color : #E5E5E5;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	font-weight: normal;
	line-height: normal;
 	margin: 0px;
}

h1, h2, h3, p, form { 
	margin: 0;
}

.text_white {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	color: #ffffff;
	font-weight: bold;
	text-decoration: none;

}

.txtfieldmatter {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: normal;
	color: #000000;
	text-decoration: none;
}

.txtfieldmidhead {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 15px;
	font-style: normal;
	color: #000000;
	font-weight: bold;
	text-decoration: none;

}

.txtfieldmidhead4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: normal;
	color: #1D64AD;
	font-weight: bold;
	text-decoration: none;
}

.header21 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
	font-style: normal;
	color: #1D64AD;
	font-weight: bold;
	text-decoration: none;
}

.header31 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: normal;
	color: #1D64AD;
	font-weight: bold;
	text-decoration: none;
}

.login_labels {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-style: normal;
	color: #000000;
	text-decoration: none;
}

.txtfielddomain {
	font-family: verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #ffffff;
	font-style: normal;
	text-decoration:none;
}

.input_directory {  
	font-family: Verdana, Arial, Helvetica, sans-serif; 
	font-size: 11px; 
	font-style: normal; 
	font-weight: normal; color: #000000; 
	border: #000000;
	width: 350px; 
	border: solid 1px #000000;
	background-color: #ffffff;
}

.input_directory:hover {  
	background-color: #fffcde;
}

.input_directory:focus {  
	background-color: #fff9b9;
}

.input_select {  
	font-family: Verdana, Arial, Helvetica, sans-serif; 
	font-size: 11px; 
	font-style: normal; 
	font-weight: normal; color: #000000; 
	border: #000000;
	width: 120px; 
	border: solid 1px #000000; 
	background-color: #ffffff;
}

.input_select:hover {  
	background-color: #fffcde;
}

.input_select:focus {  
	background-color: #fffcde;
}

.input_select_big {  
	font-family: Verdana, Arial, Helvetica, sans-serif; 
	font-size: 14px; 
	font-style: normal; 
	font-weight: normal; color: #000000; 
	border: #000000;
	width: 150px; 
	border: solid 1px #000000; 
	background-color: #ffffff;
}

.input_text {  
	font-family: Verdana, Arial, Helvetica, sans-serif; 
	font-size: 12px; 
	font-style: normal; 
	font-weight: normal; color: #000000; 
	border: #000000;
	width: 200px; 
	border: solid 1px #000000;
	background-color: #ffffff;
}

.input_text:hover {  
	background-color: #fffcde;
}

.input_text:focus {  
	background-color: #fff9b9;
}

.input_text_small {  
	font-family: Verdana, Arial, Helvetica, sans-serif; 
	font-size: 12px; 
	font-style: normal; 
	font-weight: normal; color: #000000; 
	border: #000000;
	width: 30px; 
	border: solid 1px #000000;
	background-color: #ffffff;
}

.input_text_small:hover {  
	background-color: #fffcde;
}

.input_text_small:focus {  
	background-color: #fff9b9 ;
}	

.input_checkbox {  
}

.input_checkbox:hover {  
	background-color: #fffcde;
}
	
.border {  
	font-family: Verdana, Arial, Helvetica, sans-serif; 
	font-size: 11px; 
	font-style: normal; 
	font-weight: normal; color: #000000; 
	border: #1E66AE;
	border: solid 1px #000000;
	background-color: #DDDDDD;
}

.error_border1 {  
	font-family: Verdana, Arial, Helvetica, sans-serif; 
	font-size: 11px; 
	font-style: normal; 
	font-weight: normal; color: #000000; 
	border: #ffffff;
	border: solid 1px #000000;
	background-color: #ffffff;
}

.error_border2 {  
	font-family: Verdana, Arial, Helvetica, sans-serif; 
	font-size: 11px; 
	font-style: normal; 
	font-weight: normal; color: #000000; 
	border: solid 1px #1E66AE;
	background-color: #ffffff;
}

.browse_cell {
	width: 120px; 
	height: 60px; 
	font-size: 80%; 
	text-align: center; 
	text-align: center; 
	overflow: hidden;
	padding: 3px;
}
	
.bgcol {
	background-color: #ffffff
}

/*------------------------------------------------------------------------
   Process bar
From the PHP Pear package HTML_Progress
http://pear.laurent-laville.org/HTML_Progress/examples/horizontal/string.php
------------------------------------------------------------------------*/

.p_561b57 .progressBar {
	background-color: #FFFFFF;
	width: 172px;
	height: 24px;
	position: relative;
	<?php echo $left; ?>: 0px;
	top: 0px;
}
.p_561b57 .progressBarBorder {
	background-color: #FFFFFF;
	width: 172px;
	height: 24px;
	position: relative;
	<?php echo $left; ?>: 0px;
	top: 0px;
	border: 0px solid #000000;
}
.p_561b57 .installationProgress {
	width: 300px;
	text-align: <?php echo $left; ?>;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
	background-color: #FFFFFF;
}
.p_561b57 .cellI {
	width: 15px;
	height: 20px;
	font-family: Courier, Verdana;
	font-size: 8px;
	float: <?php echo $left; ?>;
	background-color: #CCCCCC;
}
.p_561b57 .cellA {
	width: 15px;
	height: 20px;
	font-family: Courier, Verdana;
	font-size: 8px;
	float: <?php echo $left; ?>;
	background-color: #006600;
	visibility: hidden;
}

.warning-box {
	background-color: #FFDD00;
	color: #000000;
	border: 2px;
	border-style: solid;
	border-color: #FFCC33; 
	margin-<?php echo $left; ?>: auto;
	margin-<?php echo $right; ?>: auto;
	width: 90%; 

}

.warning-text {
	padding-bottom : 5px;
	padding-top : 5px;
	padding-<?php echo $left; ?> : 10px;
	padding-<?php echo $right; ?> : 10px;
}
