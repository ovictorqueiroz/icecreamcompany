<?php
    $pageName = "Login";
    include $_SERVER['DOCUMENT_ROOT'] . '/icecreamcompany/components/header.php';

    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPass'];

    if($userEmail == "admin@gmail.com" && $userPass == 123){

        echo "Bem-Vindo, $userEmail!";
    }
    else{
        echo "Usuário ou Senha inválidos!";
    }

    include $_SERVER['DOCUMENT_ROOT'] . '/icecreamcompany/components/footer.php';

?>