<!DOCTYPE html>
<html lang="en">
<?php require('head.php') ?>    
<body>
<?php require('../estilo_imagenes.php') ?>  
   <?php require('menu.php') ?>  

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
            <h1>Graciosas</h1>
                <?php
    $directory="img";
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
        if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            echo '<img src="'.$directory."/".$archivo.'">'."\n";
        }
    }
    $dirint->close();
?>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <br>
<?php require('../footer.php'); ?>
</body>

</html>
