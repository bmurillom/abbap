<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables


// destroy the session
session_destroy();
include 'login.html';
?>

</body>
</html> 