<?php include("start.php"); ?>

<h1 class="entry-title">Topplista</h1>
<div class="entry-content">

<div>

<table class="table-fill">
<thead>
<tr> 
<th class="text-left">Placering</th>
<th class="text-left">Klass</th>
<th class="text-left">Poäng</th>
</tr>
</thead>
<tbody class="table-hover">
<?php

$dbc = mysqli_connect("localhost","root","","laskuppen");

$query = "SELECT class ,SUM(points) as points FROM students  GROUP BY class ORDER BY points DESC";

$result = mysqli_query($dbc,$query);

$i = 1;
while($row = mysqli_fetch_array($result)){
?>

<tr>
<td class="text-left"><?php echo $i++; ?></td>
<td class="text-left"><?php echo $row['class'];?></td>
<td class="text-left"><?php echo $row['points']; ?></td>
</tr>

<?php } ?>
</tbody>
</table>
</div>
<?php include("end.php"); ?>