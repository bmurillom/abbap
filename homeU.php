<?php
// Start the session
session_start();
?>
<?php
if ($_SESSION['livello']>1 ){
        include 'dentroUser2.php';
        
    }else{
        include 'homeadmin2.php';
        
    }
    ?>
