<?php
include("start.php");
?>
<div>


<table class="table-fill">
<thead>
<tr>
<th class="text-left">Placering</th>
<th class="text-left">Namn</th>
<th class="text-left">Klass</th>
<th class="text-left">Poäng</th>
</tr>
</thead>
<tbody class="table-hover">

<?php


$dbc = mysqli_connect("localhost","root","","laskuppen");

$query = "SELECT * FROM students WHERE points > 0 ORDER BY points DESC";



$result = mysqli_query($dbc,$query);


$i = 1;
while($row = mysqli_fetch_array($result)){
	?>

<tr>
<td class="text-left"><?php echo $i++; ?></td>
<td class="text-left"><?php echo $row['firstname'] . " " . $row['lastname'];?></td>
<td class="text-left"><?php echo $row['class']; ?></td>
<td class="text-left"><?php echo $row['points']; ?></td>
</tr>

<?php
}
?>

</tbody>
</table>




</div>
<?php
include("end.php");
?>