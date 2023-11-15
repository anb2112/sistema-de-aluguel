<?php
$msg = @$_GET['MSG'];
if ($msg != null || $msg != '') {
    echo "<script>alert('$msg')</script>";
}

echo "</div>";
?>
<html>

<head>


    <meta charset="UTF-8">
      
	<title></title>
	
</head>

</style>
<body>
  
    
    <?php

    include 'Visao/FormCadFu.php';
    ?>




</body>

</html>