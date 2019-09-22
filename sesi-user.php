<?php

 
if(!isset($_SESSION['pengguna'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="loginForm.html";</script>';
}

?>