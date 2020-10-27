
<?php

    $con = mysql_connect("127.0.0.1","root","Giti@123");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }


        mysql_select_db("family_details", $con);

            

			$sql = "insert into occupations(occupation, work_place) value ('$_POST[occupation]','$_POST[workplace]')";
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
                print '<p>Your information has bee recorded.</p> <a href="Display.php"</a> click here for details of employees';
            }
            else
                {error_log(mysql_error());
                    print '<p>Something went wrong.</p>';
                }
    mysql_close($con);

?>


