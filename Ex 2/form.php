<?php
/*Exercício 2 – Preferência de tema
Desenvolva uma página PHP que permita ao usuário escolher entre os temas claro e escuro.
A escolha deverá ser armazenada em um cookie com validade de 30 dias. Quando o usuário acessar
novamente a página, o tema selecionado deverá ser aplicado automaticamente.
Requisitos:
- Criar um formulário para selecionar o tema.
- Armazenar a preferência em um cookie.
- Aplicar cores de fundo e de texto de acordo com o tema escolhido.
- Manter a preferência após fechar e reabrir o navegador, enquanto o cookie estiver válido.
- Definir o tema claro como padrão quando não houver preferência salva.
*/
    if (isset($_POST["enviar"]) && isset($_POST["tema"])) {
        setcookie ("tema", $_POST["tema"], time()+ (30 * 24 * 60 * 60));
        $tema = $_POST["tema"];
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tema</title>
</head>
<body>

    <style>
        body {
            <?php if ($tema === "escuro") { ?>
                background-color: black;
                color: white;
            <?php } else { ?>
                background-color: white;
                color: black;
            <?php } ?>
        }
    </style>

    <h1> Escolha o tema desejado</h1>
    <form method = "POST" action="">
        Tema: <input type = "radio" name = "tema" value="claro"> Claro
        <input type = "radio" name = "tema" value="escuro"> Escuro <br>
        <input type = "submit" name = "enviar" value = "Enviar"> <br>
    </form>
    
</body>
</html>