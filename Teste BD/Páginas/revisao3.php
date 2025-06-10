<?php
    //incluindo o arquivo conexao
    include 'conexao.php';
    // recebendo os dados do form
    $nominho= $_POST['nome'];
    $sobrenominho = $_POST['sobrenome'];
    $nomemae = $_POST['mae'];

    echo "<label style:'font-weigth:`bold`'>Nome: </label>$nominho<br>";
    echo "<label>Sobrenome: </label>$sobrenominho<br>";
    echo "<label>Nome completo da mãe: </label>$nomemae $sobrenominho<br>";

    //Criando a query de insert
    $query= "INSERT INTO migo (nome,sobrenome,nomemae)
                VALUES ('$nominho','$sobrenominho','$nomemae')";

    //executando a query
    $resultado = mysqli_query($con,$query);
    
    if($resultado){
        echo "amigo inserido com sucesso";
    }else{
        echo "erro ao inserir";
        echo $query;
    }
?>