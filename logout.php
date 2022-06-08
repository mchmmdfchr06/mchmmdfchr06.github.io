<?php 

session_start();
session_destroy();
echo "<script>alert('Anda telah keluar dari menu'); window.location = 'login.php'</script> ";

?>