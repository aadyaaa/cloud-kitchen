<?php
 $db = mysqli_connect('localhost', 'root', 'Aryanxxvii27!') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'scms' ) or die(mysqli_error($db));
        
?>