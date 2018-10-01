<?php
session_start();
unset($_SESSION['stuemail']);
session_destroy();
session_write_close();
header('Location: studentlogin.php');
die();
?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
    </div>
    </form>
</body>
</html>
