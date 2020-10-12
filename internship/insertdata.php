<?php
include("db.php");
$name=$_POST['name'];
//echo $name;
$city=$_POST['city'];
//echo $city;
$occupation=$_POST['occupation'];
//echo $occupation;

$q="insert into formdata (name,city,occupation) values ('$name','$city','$occupation')";
$res1=mysql_query($q);
if($res1)
{
$query="select * from formdata";
$res=mysql_query($query);
if($res)
{
	?>
	<table  align="center" style="margin-top:0px;text-align:left" cellspacing="20px" cellpadding="10px" border="1" class="tab">
	<center><div class="b"><h2 style="margin-top: 10px;">Result Data</h2></div></center>
<tr >
 <th class="head">Sr No</th>
 <th class="head">Name</th>
 <th class="head">City</th>
 <th class="head">Occupation</th>
<?php $a=1; while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
<tr>
   <td><?php echo $a; ?></td>
   <td><?php echo $row['name']; ?></td>
   <td><?php echo $row['city'];?></a></td>
   <td><?php echo $row['occupation'];?></a></td>
   
</tr>
<?php $a++; } ?>
</table>

<?php
}
else
{
	echo "";
}
?><?php
}	
else
{
	echo "data not inserted";
}
?>