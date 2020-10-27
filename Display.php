<?php

$con = mysql_connect("127.0.0.1","root","Giti@123");
     if(!$con){
           die("Database Connection failed".mysql_error());
}else{
$db_select = mysql_select_db("family_details", $con);
     if(!$db_select){
           die("Database selection failed".mysql_error());
}else{

   }
}

$records = mysql_query("select * from family inner join occupations on family.Sl_No = occupations.Sl_No;");

 

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Family Member information </title>
    </head>

    <body>
	<center>
		<h2>Family Member Information</h2><br>
        <table width="800" border="2" cellpadding="2" cellspacing='1'>

           <tr bgcolor="#2ECCFA">
					 <th> Sl No </th>
                     <th> family Member</th>
                     <th>Age</th>
                     <th>Occupation</th>
					<th>Work Place</th>
           </tr>

<?php

     while ($rec = mysql_fetch_assoc($records)){

           echo "<tr>";
				echo "<td>".$rec['Sl_No']."</td>";
               echo "<td>".$rec['family_member']."</td>";
               echo "<td>".$rec['age']."</td>";
               echo "<td>".$rec['occupation']."</td>";
			   echo "<td>".$rec['work_place']."</td>";
           echo "</tr>";

     }
?>
        </table> <br>
	<a href = "family.html"> Go to Home </a> 
	</center>
   </body>

</html>
