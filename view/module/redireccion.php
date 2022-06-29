<?php

$_SESSION["Var"] = true;
// header_remove();
// header("location:index.php");
echo "<script>
window.location.href = 'index.php';
</script>";

?>
