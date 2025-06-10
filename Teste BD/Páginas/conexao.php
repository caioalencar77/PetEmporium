
<?php
 //conectando com o server e o db
 $con = mysqli_connect('localhost',
                        'root',
                         '',
                         'amigosdozamba');
//Verificando status
if(!$con){
    die('Erro ao conectar!!');
}
?> 
