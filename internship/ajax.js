<script type="text/javascript">
$(document).ready(function()
{
	$("#insertbtn").click(function(e)
	{
		e.preventDefault();
		$.ajax
		({
	        method:"post",
	        url:"insertdata.php",
	        data:$("#vedformid").serialize(),
	        datatype:"html",
	        success:function(response)
	        {
		      $("#messagedis").html(response);
	        }
	    })
    })
});



	function validate()
	{
		var name= document.getElementById('name').value;
		if(name=="")
		{
          document.getElementById('username').innerHTML="PLEASE FILL THE USERNAME";
          return false;
		}	
	}

</script>


