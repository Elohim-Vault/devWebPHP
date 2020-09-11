<?php
include_once 'header.php';
include_once "action_php/conexao.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="tituloComentarios" >Avaliações:</h1>
    <div id="comentarios">
    <?php 

        $querySelect = 'SELECT * FROM avaliacoes';
        $resultado = mysqli_query($conexao, $querySelect);
        while($dados = mysqli_fetch_array($resultado)):
            $sobrenome = explode(' ' , $dados['sobrenome']);
            switch ($dados['qtd_estrela']){

                case 1:
                    $dados['qtd_estrela'] = 'assets/img/estrela1.png';
                    break;

                case 2:
                    $dados['qtd_estrela'] = 'assets/img/estrela2.png';
                    break;
                        
                case 3:
                    $dados['qtd_estrela'] = 'assets/img/estrela3.png';
                    break;
                        
                case 4:
                    $dados['qtd_estrela'] = 'assets/img/estrela4.png';
                    break;
                            
                case 5:
                    $dados['qtd_estrela'] = 'assets/img/estrela5.png';
                    break;
        }
    ?>
                
                <div class="card">
                    <img src="<?php echo $dados['qtd_estrela']; ?>">
                    <h1 class="tituloCard" ><?php echo $dados['nome'] ." ".$sobrenome[0]; ?></h1>
                    <p class="textoCard"> 
                        <?php echo $dados['comentario']; ?> 
                    </p>
                </div>
                <?php endwhile; ?>
    </div>

</body>
</html>