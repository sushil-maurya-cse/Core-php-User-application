<?php
session_start();
session_destroy();
$_SESSION['action1']="You have logged out successfully..!";
?>
<script language="javascript">

document.location="login.php";
</script>
