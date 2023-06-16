<?php
@session_start();
if (isset($_SESSION['a']))
{
    if(session_destroy())
    {   
        $URL="http://localhost/blackadam/adminlogin.php";
          echo "<script>location.href='$URL'</script>";
    }
}
?>