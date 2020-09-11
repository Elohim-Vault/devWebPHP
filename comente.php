<?php
        include_once 'header.php';
        session_start();
        if(isset($_SESSION['msg'])){
            echo '<p class="erro">'. $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

    <form method="POST" action="action_php/processa.php" enctype="multipart/form-data">
    <header>
        <h1>Nos avalie</h1>
    </header>
    <div class="estrelas">
            <input type="radio" id="vazio" name="estrela" value="" checked>

            <label for="estrela_um"><i class="fa"></i></label>
            <input type="radio" id="estrela_um" name="estrela" value="1">

            <label for="estrela_dois"><i class="fa"></i></label>
            <input type="radio" id="estrela_dois" name="estrela" value="2">

            <label for="estrela_tres"><i class="fa"></i></label>
            <input type="radio" id="estrela_tres" name="estrela" value="3">

            <label for="estrela_quatro"><i class="fa"></i></label>
            <input type="radio" id="estrela_quatro" name="estrela" value="4">

            <label for="estrela_cinco"><i class="fa"></i></label>
            <input type="radio" id="estrela_cinco" name="estrela" value="5" >
        </div>

        <div id="campos">

            <label for="email">E-mail<br>
            <input type="email" id="email" name="email" max_lenght=200 required>

            <label for="nome">Nome<br>
            <input type="text" id="nome" name="nome" max_lenght=50 required><br>

            <label for="sobrenome">Sobrenome<br>
            <input type="text" id="sobrenome" name="sobrenome" max_lenght=100 required><br>

            <label for="comentario">Comentario<br>
            <textarea id="comentario" name="comentario" max_length=200>
            </textarea>

           
        </div>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>