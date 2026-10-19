<?php
/*Exercício 3 – Contador de visitas
Implemente uma página PHP que contabilize quantas vezes o usuário acessou a página utilizando
um cookie. A cada novo acesso, o contador deverá ser incrementado e o resultado deverá ser
exibido na tela.
Requisitos:
- Criar um cookie para armazenar o número de visitas.
- Incrementar o contador a cada acesso à página.
- Exibir uma mensagem como: “Você visitou esta página 5 vezes”.
- Definir uma validade de 30 dias para o cookie.
- Criar um botão que permita zerar o contador.
Considere que o contador deverá ser independente para cada navegador ou dispositivo
*/

    $validade = time() + (30 * 24 * 60 * 60);

    if (isset($_POST['zerar'])) {
        setcookie("visitas", "", time() - 3600, "/");
        $visitas = 0;
    } else {
        $visitas = isset($_COOKIE['visitas'])
            ? (int) $_COOKIE['visitas']
            : 0;

        $visitas++;

        setcookie("visitas", $visitas, $validade, "/");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Contador de Visitas</h1>

    <p>
        Você visitou esta página
        <strong><?php echo $visitas; ?></strong>
        <?php echo $visitas == 1 ? "vez" : "vezes"; ?>.
    </p>

    <form method="POST">
        <button type="submit" name="zerar" value="1">
            Zerar contador
        </button>
    </form>
</body>
</html>