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
	<link rel="stylesheet" href="assets/css/vpp-custom.css" type="text/css">
	<script src="assets/js/jquery-1.7.1.js" type="text/javascript"></script>
	<script src="assets/js/jquery.mobile-1.1.0.js" type="text/javascript"></script>
	<script src="assets/js/App.js" type="text/javascript"></script>
</head>
<body>
	<div data-role="page" class="type-home">
		<div data-role="content">
			<p id="vpp-version">0.1.3 - Alpha Revision</p>

			<div class="content-secondary">

				<div id="vpp-homeheader">
					<h1 id="vpp-logo"><img src="assets/images/monash-childrens-logo.jpg" alt="Monash Children's" /></h1>
					<p>A Touch-Optimized Clinical information portal for Smartphones &amp; Tablets</p>
				</div>


				<p class="intro"><strong>Welcome.</strong> This is the alpha version of Childview. please report any bugs or suggestions to <a href='mailto:L.Shearer@vicpaeds.com'>L.Shearer@vicpaeds.com</a></p>

				<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
					<li data-role="list-divider">Further Links</li>
					<li>View All References (Coming Soon)</li>
					<li>Clinical Information (Coming Soon)</li>	
				</ul>

			</div>	

			<div class="content-primary">
				<nav>
					<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
						<h3>
							Quicklinks
						</h3>
						<ul data-role="listview" data-theme="c" data-dividertheme="d">
							<li data-role="list-divider">Clinical Information
							</li>
							<li>
								<a href="app/views/Boilerplate.php" data-id="boilerplateLink">Boilerplate</a>
							</li>
							<li>
								<a href="app/views/RCHcpg.php" data-id="RCHcpgLink">RCH Clinical Guidelines</a>
							</li>
							<li>
								<a href="app/views/RCHpinfo.php" data-id="RCHpinfoLink">RCH Parent Information</a>
							</li>
							<li>
								<a href="app/views/RCHpharm.php" data-id="RCHpharmLink">RCH Paediatric Pharmacopoeia</a>
							</li>
							<li>
								<a href="app/views/RCHresc.php" data-id="RCHrescLink">RCH Gen Med resources</a>
							</li>
							<li>
								<a href="app/views/ListAll.php" data-id="ListAllLink">Browse All Resources</a>
							</li>
							<li><a href="app/views/Google.php" data-id="Google">Google Search</a>
							</li>
							<li><a href="app/views/UpToDate.php" data-id="UpToDate">UpToDate Search</a>
							</li>
							<li>
								<a href="app/views/Testbed.php">Content testbed</a>
							</li>
							<li data-role="list-divider">
								Patient information
							</li>

							<li style="padding: 0px">
								<div data-role="navbar" class="nav-patient-icons">
									<ul>
									<li><a href="app/views/Radiology.php" id="xray" data-icon="custom"><img href="../../assets/images/XRay.png" alt="Rad"/></a></li>
									<li><a href="app/views/Pathology.php" id="path" data-icon="custom"><img href="../../assets/images/TesTubes.png" alt="Pathology"/></a></li>
									<li><a href="app/views/Record.php"id="smr" data-icon="custom"><img href="../../assets/images/XRay.png" alt="SMR"/></a></li>
									</ul>
								</div>
							</li>
						</ul>


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
