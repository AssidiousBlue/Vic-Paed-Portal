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
				<?php
				require '../methods/RCHcpgAZ.htm';
				?>				
			</div><!--/content-primary -->		

					<div class="content-secondary">

					This is still under construction!

					</div>		

				</div><!-- /content -->

<?php
require 'footer.php';
?>

	</body>
</html>
