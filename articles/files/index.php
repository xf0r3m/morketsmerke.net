<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="resources/mm.png">
		<style>
			.code-block {
				display: block;
				background-color: silver;
				font-family: monospace;
				font-weight: bolder;
			}
			.code-inline {
				background-color: silver;
				font-family: monospace;

				font-weight: bolder;
			}
			p { text-align: justify; }
		</style>
	</head>
	<body style="font-family: monospace;" >
<pre>
  _____ _ _
 |  ___(_) | ___  ___
 | |_  | | |/ _ \/ __|
 |  _| | | |  __/\__ \
 |_|   |_|_|\___||___/
</pre>

	<p style="margin: 15px; padding: 0; outline: 0; font-size: 18pt;">
		&#9760;&nbsp;<a href="https://morketsmerke.net">morketsmerke</a>&nbsp;&#9760;
	</p>

	<div style="margin-left: auto; margin-right: auto; width: 80%;">
		<h1 style="text-align: center;">lost+found</h1>
		<?php
			$dir = scandir('../../resources');
			for($i=2; $i < count($dir); $i++) {
				if (stripos($dir[$i], '.pdf') !== FALSE) {
					echo "<p>
								<img src=\"../../resources/file_icon.png\" style=\"width: 64px;\">&nbsp;&nbsp;
								<a href=\"../../resources/" . $dir[$i] . "\">";
					$title=rtrim(ucwords(str_replace("_", " ", $dir[$i])), '.pdf');
					echo $title . "</a>
								</p>";
				}
			}
		?>
  </div>

	<p style="margin: 15px; padding: 0; outline: 0;">
		2021; COPYLEFT; ALL RIGHT REVERSED;
	</p>

</body>
</html>
