<!DOCTYPE html>

<html>

<?php

require "header.php"

?>
	<body>

		<div data-role="page" class="type-interior">

			<div data-role="header" data-theme="f" data-id="VicPaedsHeader" data-position="fixed">
				<a href="../../index.html" data-icon="back" data-iconpos="notext" data-direction="reverse" data-rel="back">Back</a>
						<h1>VicPaeds Portal</h1>

		</div><!-- /header -->

		<div data-role="content">
			<div class="content-primary">		
				<form  method="get" action="http://www.google.com/search" name="SearchGoogle" rel="external">
					<div data-role="fieldset">
						<label>
							<input type="search" tabindex="1" id="txtsearch" name="q" maxlength="200" autocomplete="on">
						</label>
					</div>
					<input value="Search Google" type="submit" tabindex="1">
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

	</body>
</html>
