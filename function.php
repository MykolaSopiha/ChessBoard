<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chess test</title>
	<style type="text/css">
		.container {
			margin: 0 auto;
			text-align: center;
		}
		.board { 
			display: inline-block;
			border: 5px solid blue;
		}
		.board * {
			padding: 0;
			margin: 0;
		}
		.line {
			height: 50px;
		}
		.box {
			display: inline-block;
			height: 50px;
			width:  50px;
		}
		.white { background-color: white; }
		.black { background-color: black; }
	</style>
</head>

<body>
	<div class="container">

		<?php
			if(isset($_POST["send"])) {
				$rows = $_POST["rows"];
				$cols = $_POST["cols"];

				$color = parseColor($_POST["color"]);

				echo "<div class=\"board\"> \n";
				for ($i = 0; $i < $rows; $i++) { 
					echo "\t\t<ul class=\"line\">\n";
					for ($j = 0; $j < $cols; $j++) { 
						// ($i*$vert + $j + 1) % 3 == 0
						if (($i + $j + 1) % 3 == 1) {
							echo "\t\t\t <li class=\"box\" style=\"background-color: $color;\" >\n";
						} elseif (($i + $j + 1) % 3 == 0) {
							echo "\t\t\t <li class=\"box white\">\n";
						} else {
							echo "\t\t\t <li class=\"box black\">\n";
						}
					}
					echo "\t\t</ul>\n";
				}
				echo "\t</div>\n";
			}

			
			function parseColor($color) {
				$color = mb_strtolower($color);
				$rgb = sscanf($color, "rgb(%d, %d, %d)");
				if (is_numeric($rgb[0]) && is_numeric($rgb[1]) && is_numeric($rgb[2])) {
					return rgb2hex($rgb);
				} else {
					return $color;
				}
			}

			function rgb2hex($rgb) {
				$hex = "#";
				$hex .= str_pad(dechex($rgb[0]), 2, "0", STR_PAD_LEFT);
				$hex .= str_pad(dechex($rgb[1]), 2, "0", STR_PAD_LEFT);
				$hex .= str_pad(dechex($rgb[2]), 2, "0", STR_PAD_LEFT);

				return $hex;
			}

			function str2hex($rgbColor){
				$checksum = md5($rgbColor);
				return array(
					hexdec(substr($checksum, 0, 2)),
					hexdec(substr($checksum, 2, 2)),
					hexdec(substr($checksum, 4, 2))
				);
			}
		?>

	</div>
</body>
</html>