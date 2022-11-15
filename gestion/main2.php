<?php
    $sql = "CALL `can-prod`();";
$resultado=mysqli_query($con,$sql);
$pofavo = mysqli_fetch_row($resultado);
echo  
'<h2>'.$pofavo[0].'</h2>' 
?>