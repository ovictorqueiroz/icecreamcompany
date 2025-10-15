<?php
$pageName = "Login";
include $_SERVER['DOCUMENT_ROOT'].'/icecreamcompany/components/header.php';?>

<main>
    <h1>Login</h1>
    
    <form action="../actions/verifylogin.php" method = "post" id = "loginForm">
        <label for="userEmail">Email </label> <input type="email" name="userEmail" placeholder = "Digite seu e-mail" class = "inputField"> <br><br>
        <label for="userPass">Senha </label> <input type="password" name="userPass" placeholder = "Digite sua senha" class = "inputField"> <br><br>
        <input type="submit" name="btnEnviar" class = "btnForm"> <br><br>
        <p>Não possui uma conta? <a href = "../pages/cadastro.php">Cadastre-se</a></p>
    </form>
</main>

<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/icecreamcompany/components/footer.php';
?>