<?php

include '/Applications/MAMP/htdocs/getflix/connexion_getflix_db.php';

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"delete from getflix_movies where id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:getflix_backoffice.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

?>