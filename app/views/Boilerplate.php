<!DOCTYPE html>
<html>
	<?php

	include "header.php"

	?>
	<head>
		<title></title>
	</head>
	<body>
		<div data-role="page" class="type-interior">
			<div data-role="header" data-theme="f"  data-id="VicPaedsHeader" data-position="fixed">
				<a href="../../index.html" data-icon="back" data-iconpos="notext" data-direction="reverse" data-rel="back">Back</a>
						<h1>VicPaeds Portal</h1>

			</div><!-- /header -->
			<div data-role="content">
				<div class="content-primary">
					<p>
						This is a single page boilerplate template that you can copy to build your jQuery Mobile page. Each link or form from here will pull a new page in via Ajax to support the animated page transitions.
					</p>
					<p>
						Just view the source and copy the code to get started. Remember to include a meta viewport tag in the head to set the zoom level.
					</p>
					<p>
						This template is standard HTML document with a single "page" container inside, unlike a multi-page template that has multiple pages within it. We strongly recommend building your site or app as a series of separate pages like this because it's cleaner, more lightweight and works better without JavaScript.
					</p>
					
				</div><!--/content-primary -->
				<div class="content-secondary">
					<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
						<h3>
							More in this section
						</h3><?php
						require '../methods/quicklinks.htm';
						?>
					</div>
				</div>
			</div><!-- /content -->
				<?php
				require 'footer.php'
				?>
		</div>
	</body>
</html>
