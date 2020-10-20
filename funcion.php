<!DOCTYPE html>
<html lang="es">
<head>
    <title>funcion.php</title>
</head>
<body>

    <form name="paridad">
        <label>
            <?php
                $primero = $_POST["primero"];
                
                if( ($primero % 2) == 0 ) {
                   print "El numero $primero es PAR";
                }else{
                    print "El numero $primero es IMPAR";    
                }


            ?>
        </label>
    
    </form>
    
</body>
</html>