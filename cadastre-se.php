<?php require 'pages/header.php'; ?>
<div class="container" >
<h1>Cadastre-se</h1>
<?php
    require 'classes/usuarios.class.php';
    $u = new Usuarios;
    //Se existir $_POST['nome'] e não for vazio cai nesse if
    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = $_POST['senha'];
        $telefone = addslashes($_POST['telefone']);

        //Se a variavel $nome,$email e $senha não estiver vazio
        if (!empty($nome) && !empty($email) && !empty($senha)) {
            if ($u->cadastrar($nome, $email, $senha, $telefone)) {
               /* ?>
                <div class="alert alert-success" >
                    <strong>Parabéns!</strong>Cadastrado com sucesso. <a href="login.php" class="alert-link">Faça login agora</a>
                </div>
                <?php*/
                echo "<div class='alert alert-success'><strong>Parabéns!</strong> Cadastrado com sucesso.<a href='login.php' class='alert-link'>Faça Login Agora.</a><a/></a></div>";
            }else {
                /*?>
                <div class="alert alert-warning" >
                    Este usuario já existe. <a href="login.php" class="alert-link">Faça login agora</a>
                </div>
                <?*/
                echo "<div class='alert alert-warning'>Este Usúario já existe <a href='login.php' class='alert-link'>Faça Login Agora.</a></div>";
            }
        }else {
            //echo "<script>alert('Preecha todos os campos')</script>";
            echo "<div class='alert alert-warning'>Preecha todos os campos</div>";
        }
    }
?>
    <form method="post">
        <div class="form-group" >
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" >
        </div>
        <div class="form-group" >
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" >
        </div>
        <div class="form-group" >
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" >
        </div>
        <div class="form-group" >
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" >
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-default"/>
    </form>
</div>

<?php require 'pages/footer.php'; ?>