<?php
include("db.php");
$query="select * from formdata";
$res=mysql_query($query);
/*echo "<table width=80% border=2 cellpadding=5 cellspacing=5>
<tr>
<th>name</th>
<th>city</th>
<th>occupation</th>
</tr>
";*/
if($res)
{
	//while($row=mysql_fetch_array($res,MYSQL_BOTH))
	
	$(document).ready(function(){
	$('#displaybtn').click(function(e){
		e.preventDefault();
		$.ajax
		({
	        method:"post",
	        url:"fetchdata.php",
	        data:$("#messagedis").serialize(),
	        datatype:"html",
	        success:function(response)
	        {
		      $("#messagedis").html(response);
	        }
	    });



	});



});
</script>
		//echo "<tr>
		//<td> $row[name]</td>
		//<td> $row[city]</td><td> $row[id]</td>
		//<td> $row[occupation]</td>
        //</tr>";*/
        //echo $row['name'];
    //}
    ?><table  align="center" style="margin-top:0px;text-align:left" cellspacing="20px" cellpadding="10px" border="1" class="tab">
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
?>