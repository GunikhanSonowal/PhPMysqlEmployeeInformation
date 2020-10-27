
<?php

    $con = mysql_connect("127.0.0.1","root","Giti@123");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }


        mysql_select_db("family_details", $con);

            

			$sql = "insert into family(family_member, age) value ('$_POST[name]','$_POST[age]')";
            if (!mysql_query($sql,$con))
            {
                die('Error: ' . mysql_error());
            }
            else
            {
                echo " 1 record added";
            }


            echo '---------------------------------------';

            if(mysql_affected_rows()==1)
            {
                print '<p>family information has bee recorded.</p><a href="occupations.html"</a> click here for occupations form';
            }
            else 
                {error_log(mysql_error());
                    print '<p>Something went wrong.</p>';
                }
    mysql_close($con);

?>


