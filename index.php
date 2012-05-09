<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		Vic Paed Portal
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="description" content="Portal of important links for Victorian Paediatricians">
	<meta name="author" content="Dr Lauren Shearer L.Shearer@vicpaeds.com">
	<link rel="stylesheet" href="assets/css/jquery.mobile-1.1.0.css" type="text/css">
	<link rel="stylesheet" href="assets/css/jqm-docs.css" type="text/css">
	<script src="assets/js/jquery-1.7.1.js" type="text/javascript"></script>
	<script src="assets/js/jquery.mobile-1.1.0.js" type="text/javascript"></script>
	<script src="assets/js/App.js" type="text/javascript"></script>
</head>
<body>
	<div data-role="page" class="type-home">
		<div data-role="content">
			<p id="CV-version">0.1.1 - First Alpha Revision</p>

			<div class="content-secondary">

				<div id="CV-homeheader">
					<h1 id="CV-logo"><img src="assets/images/Monash-childrens-logo.jpg" alt="Monash Children's" /></h1>
					<p>A Touch-Optimized Clinical information portal for Smartphones &amp; Tablets</p>
				</div>


				<p class="intro"><strong>Welcome.</strong> This is the alpha version of Childview. please report any bugs or suggestions to <a href='mailto:L.Shearer@vicpaeds.com'>L.Shearer@vicpaeds.com</a></p>

				<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
					<li data-role="list-divider">Further Links</li>
					<li><a href="views/reference.html">All References</a></li>
					<li><a href="views/clinical-information.html">Clinical Information</a></li>	
				</ul>

			</div><!--/content-primary-->	

			<div class="content-primary">
				<nav>
					<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
						<li data-role="list-divider">Clinical Information
						</li>
						<li>
							<a href="app/views/boilerplate.php">Boilerplate</a>
						</li>
						<li>
							<a href="app/views/RCHcpg.php">RCH Clinical Guidelines</a>
						</li>
						<li>
							<a href="app/views/RCHpinfo.php">RCH Parent Information</a>
						</li>
						<li>
							<a href="app/views/RCHpharm.php">RCH Paediatric Pharmacopoeia</a>
						</li>
						<li>
							<a href="app/views/RCHresc.php">RCH Gen Med resources</a>
						</li>
						<li>
							<a href="app/views/ListAll.php">Browse All Resources</a>
						</li>
						<li>Google Search
						</li>
						<li>UpToDate Search
						</li>
						<li data-role="list-divider">
							Patient information
						</li>
						<li>
							<div data-role="controlgroup" data-type="horizontal">
								<a href="app/views/Radiology.php" data-role="button">Radiology</a>
								<a href="app/views/Pathology.php" data-role="button">Pathology</a>
								<a href="app/views/Record.php" data-role="button">Scanned Medical Record</a>
							</div>
						</li>
					</ul>
				</nav>
			</div>



		</div>

		<div data-role="footer" class="footer-docs" data-theme="c">
				<p>&copy; 2012 Lauren Shearer</p>
		</div>	

	</div>

</body>
</html>
