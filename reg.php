<!DOCTYPE>
<html>
<head>
	<title>reg</title>
	 <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
	 <script>
            $(document).ready(function() {
                <!--#my-form grabs the form id-->
                $("#insert").submit(function(e) {
                    e.preventDefault();
                    $.ajax( {
                        <!--insert.php calls the PHP file-->
                        url: "insert.php",
                        method: "post",
                        data: $("form").serialize(),
                        dataType: "text",
                        success: function( data ) {
                        	var json = JSON.parse(data);
                        	
				  $('#table_data').append('<tr><td>'+json.name+'</td><td>'+json.gender+'</td><td>'+json.rollno+'</td></tr>'); 
				  }  

                    });
                });
            });

        </script>
       
</head>
<body>
<form method="post" id="insert" >
	<table>
		<tr>
			<td>name</td><td><input type="text" name="name"></td></tr>
			<tr><td>rollno</td><td><input type="text" name="rollno"></td></tr>
			<tr><td>gender</td><td>male<input type="radio" name="gender" value="male">
			                        female  <input type="radio" name="gender" value="femail"></td></tr>
			            <tr><td colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
		</tr>
	</table>
	<p id='message'></p>
	 <div id='data'> 
<table id="table_data">
	<tr><td>name</td><td>gender</td><td>rollno</td></tr>
	
</table>
    </div>


</form>
</body>
</html>