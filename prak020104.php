<html>
 	<head>Headings</head>
 	<body>
 	<?php
		$i=1;
 		while($i <= 6 ){
 			if(($i % 2) ==0 ){
				echo " <font color= red><h".$i.">Heading ".$i."</h".$i.">";
			}else {
				echo "<font color=black><h".$i.">Heading ".$i."</h".$i.">";
			}
			$i++;
 		}
 	?>
 	</body>
</html>