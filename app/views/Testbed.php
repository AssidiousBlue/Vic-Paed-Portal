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

				<div data-role="collapsible-set" data-collapsed="false" data-theme="b" data-content-theme="d">
					<div data-role="collapsible">
						<h3>A</h3>
						<ul data-role="listview">
							<li>
							Link A
							</li>
							<li>
								Link B
							</li>
						</ul>
					</div>
					<div data-role="collapsible">					
						<h3>B</h3>
						<ul data-role="listview">
							<li>
							Link C
							</li>
							<li>
								Link D
							</li>
						</ul>						
					</div>
				</div>

				
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
