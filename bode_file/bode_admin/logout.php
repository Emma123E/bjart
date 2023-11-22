<?php
session_start();
session_unset();
session_destroy();
echo"<script>
window.alert('Are you sure u want to logout'); window.location='admininclude_login.php';</script>";
?>