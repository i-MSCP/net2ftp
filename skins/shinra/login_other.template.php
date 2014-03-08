<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/shinra/login_other.template.php begin -->
	<!-- WRAPPER -->
	<div id="wrapper">
			
		<!-- HEADER -->
		<div id="header">
			<img id="logo" src="skins/shinra/img/logo.png" alt="net2ftp" />
		</div>
		<!-- ENDS HEADER -->
			
		<!-- MAIN -->
		<div id="main">

			<!-- content -->
			<div id="content">
				
				<!-- title -->
				<div id="page-title">
					<span class="title">Login</span>
					<span class="subtitle">Connect to your FTP server and start editing your website now.</span>
				</div>
				<!-- ENDS title -->
				
				<!-- Posts -->
				<div id="posts">

					<!-- post -->
					<div class="post">

<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/loginform.template.php"); ?>

					</div>
					<!-- ENDS post -->
			
				</div>
				<!-- ENDS Posts -->

				<!-- sidebar -->
				<ul id="sidebar">
					<!-- init sidebar -->
					<li>
						<h6>Features</h6>		
						<ul>
							<li class="cat-item"><a>Navigate the FTP server</a></li>
							<li class="cat-item"><a>Upload and download files</a></li>
							<li class="cat-item"><a>Edit files (WYSIWYG and syntax highlighting)</a></li>
							<li class="cat-item"><a>View code with syntax highlighting</a></li>
							<li class="cat-item"><a>Copy, move, delete (also to 2nd FTP server)</a></li>
							<li class="cat-item"><a>Rename and chmod (also recursive)</a></li>
							<li class="cat-item"><a>Zip and unzip files</a></li>
							<li class="cat-item"><a>Install software</a></li>
							<li class="cat-item"><a>Search for words or phrases</a></li>
							<li class="cat-item"><a>Calculate the size of directories and files</a></li>
						</ul>
					</li>
					<!-- ENDS init sidebar -->
				</ul>
				<!-- ENDS sidebar -->

<?php require_once($net2ftp_globals["application_skinsdir"] . "/" . $net2ftp_globals["skin"] . "/footer.template.php"); ?>

<!-- Template /skins/shinra/login_other.template.php end -->
