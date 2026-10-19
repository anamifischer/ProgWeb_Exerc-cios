<?php
/*Exercício 1 – Identificação do usuário
Crie uma página PHP que solicite o nome do usuário por meio de um formulário HTML. Após o
envio, o sistema deverá armazenar o nome informado em um cookie com validade de 7 dias.
Na página, apresente uma mensagem de boas-vindas utilizando o nome armazenado no cookie.
Requisitos:
- Criar um formulário para informar o nome.
- Armazenar o nome em um cookie.
- Recuperar o valor do cookie em uma página PHP.
- Exibir uma mensagem personalizada quando o cookie existir.
- Exibir uma mensagem solicitando o nome caso o cookie ainda não exista.
*/

    setcookie ("nomeCookie", $_POST["nome"], time()+ (7 * 24 * 60 * 60));  
    
    if (isset($_POST["enviar"])){
        $nome = $_POST["nome"];
        if(isset($_COOKIE["nomeCookie"])){
            echo ("Bem-Vindo(a) " . $_COOKIE["nomeCookie"]);
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method = "POST" action="">
        <legend>Informe seu nome</legend>
        Nome: <input type = "text" name = "nome"> <br>
        <input type = "submit" name = "enviar" value = "Enviar"> <br>
    </form>

    
</body>
</html>