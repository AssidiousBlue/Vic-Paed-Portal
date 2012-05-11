<!DOCTYPE html>
<html>
	<?php

	require "header.php"

	?>
	<head>
		<title></title>
	</head>
	<body>
		<div data-role="page" class="type-interior">
			<div data-role="header" data-theme="f" data-id="VicPaedsHeader" data-position="fixed">
				<a href="../../index.html" data-icon="back" data-iconpos="notext" data-direction="reverse" data-rel="back">Back</a>
				<h1>
					VicPaeds Portal
				</h1>
			</div><!-- /header -->
			<div data-role="content">
				<div class="content-primary">
					<form method="get" action="http://www.uptodate.com/contents/search.do" name="SearchUpToDate" rel="external" id="SearchUpToDate">
						<fieldset>
							<div data-role="fieldcontain">
								<label for="txtsearch">Search UpToDate:</label><input size="30" id="txtsearch" name="search" autocomplete="on" tabindex="1" type="search">
							</div>
							<div data-role="fieldcontain">
								<label for="paedarticles" data-iconpos="right">Paediatric articles:<input type="checkbox" name="sp" id="paedarticles" value="2" checked="checked"></label>
							</div>
							<div data-role="fieldcontain">
								<input name="source" value="USER_INPUT" id="source" type="hidden"> <input name="searchControl" value="TOP_PULLDOWN" id="searchControl" type="hidden"> <input name="searchOffset" value="" type="hidden">
							</div>
						</fieldset><input value="Search" tabindex="1" type="submit">
					</form>
				</div><!--/content-primary -->
				<div class="content-secondary">
					<?php
											require '../methods/quicklinks.htm';
										?>
				</div>
			</div><!-- /content -->
			<?php
			require 'footer.php';
			?>
		</div>
	</body>
</html>
