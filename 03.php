<?php 
$comp = array(array());
$comp[0] = array('brand' => 'Lenovo', 'RAM' => '1000', 'processor' => 4, 'harddrive' => '500', 'price' => '600');
$comp[1] = array('brand' => 'Accer', 'RAM' => '2000', 'processor' => 3, 'harddrive' => '700', 'price' => '700');
$comp[2] = array('brand' => 'Toshiba', 'RAM' => '3000', 'processor' => 5, 'harddrive' => '800', 'price' => '900');
$comp[3] = array('brand' => 'Dell', 'RAM' => '2500', 'processor' => 6, 'harddrive' => '750', 'price' => '790');
$s = array();
$count = count($comp);
for ($i=0; $i < $count; $i++) { 
	$s[$i] = ($comp[$i]['RAM']+$comp[$i]['processor'])/$comp[$i]['harddrive'];
}
echo "<table border = '1'>";
echo "<tr>";
echo "<td>brand</td>
<td>RAM</td>
<td>processor</td>
<td>harddrive</td>
<td>price</td>
<td>s</td>";
echo "</tr>";
for ($j=0; $j < $count ; $j++) { 
	echo "<tr>";
	foreach ($comp[$j] as $value) {
		echo "<td>".$value."</td>";
	}
	echo "<td>".$s[$j]."</td>";
}
echo "</tr>";
echo "</table>";

?>