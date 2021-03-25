<html>
 	<head>Headings</head>
 	<body>
 	<?php
 		for($i=1; $i <= 6; $i++){
 			if(($i % 2) ==0 ){
				echo " <font color= red><h".$i.">Heading ".$i."</h".$i.">";
			}else {
				echo "<font color=black><h".$i.">Heading ".$i."</h".$i.">";
			}
 		}
 	?>
 	</body>
</html>