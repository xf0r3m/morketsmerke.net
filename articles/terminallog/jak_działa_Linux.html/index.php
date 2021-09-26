<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8" />
			<link rel="icon" type="image/png" href="https://files.morketsmerke.net/resources/mm.png">
			<style>
				.code-block {
					display: block;
					background-color: silver;
					font-family: monospace;
					font-weight: bolder;
					text-align: left;
				}
				.code-inline {
					background-color: silver;
					font-family: monospace;
					font-weight: bolder;
				}
				ul {
					text-align: left;
				}
			</style>
		</head>
		<body style="font-family: monospace;" >
<pre>
     _       _          _     _       _         _     _                  ___ 
    | | __ _| | __   __| |___(_) __ _| | __ _  | |   (_)_ __  _   ___  _|__ \
 _  | |/ _` | |/ /  / _` |_  / |/ _` | |/ _` | | |   | | '_ \| | | \ \/ / / /
| |_| | (_| |   <  | (_| |/ /| | (_| | | (_| | | |___| | | | | |_| |>  < |_| 
 \___/ \__,_|_|\_\  \__,_/___|_|\__,_|_|\__,_| |_____|_|_| |_|\__,_/_/\_\(_)
</pre>
<p style="margin: 0; padding: 0; outline: 0; font-size: 18pt;">
	&#9760;&nbsp;<a href="https://morketsmerke.net">morketsmerke</a>&nbsp;&#9760;
</p>
			<div style="margin-left: auto; margin-right: auto; width: 80%;">
				<ol>
					<?php
						$dir = scandir('.');
						for ($i=2; $i < count($dir); $i++) {
							if (stripos($dir[$i], 'index.php') === FALSE) {
								echo "<li><a href=\"" . $dir[$i] . "\">";
								$title = ucfirst(str_replace('_', ' ', $dir[$i]));
								echo substr($title, 0, -5);
								echo "</a></li>";
							}
						}
					?>
				</ol>
        <p>
          Ten katalog zawierać będzie serię materiałów zawierających wiedzę,
          która może choć w cześci pozwoli zrozumieć jak działa Linux.
          Materiały w tym katalogu są oparte o książkę Briana Warda 
          <em>How Linux Works,2<sup>nd</sup> Edition</em>.
        </p>
			</div>
			<p style="margin: 15px; padding: 0; outline: 0;">
				2021; COPYLEFT; ALL RIGHT REVERSED;
			</p>
		</body>
	</html>
