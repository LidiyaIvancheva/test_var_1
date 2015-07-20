<?php 
function open_site($name, $ext) {
//echo $name.$ext;
	echo "<a href='http://www.$name$ext'>".$name.$ext."</a>";
}
open_site('dir', '.bg');
echo "<br />";
open_site('abv', '.bg');
echo "<br />";
open_site('olx', '.bg');

?>