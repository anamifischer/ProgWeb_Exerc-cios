<?php
/*
Exercício 4 – Último acesso ao sistema
Desenvolva uma página PHP que registre a data e a hora do último acesso do usuário.
Ao acessar a página, o sistema deverá recuperar a data e a hora armazenadas no cookie anterior,
exibi-las e atualizar o cookie com o momento do acesso atual.
Requisitos:
- Armazenar a data e a hora do acesso em um cookie.
- Exibir a data e a hora do acesso anterior.
- Atualizar o cookie a cada novo acesso.
- Formatar a data no padrão brasileiro (dd/mm/aaaa HH:mm:ss).
- Exibir uma mensagem informando que este é o primeiro acesso quando não existir um cookie
anterior
*/

if (isset($_COOKIE['ultimo_acesso'])) {
    $ultimoAcesso = $_COOKIE['ultimo_acesso'];

    $dataFormatada = date('d/m/Y H:i:s', strtotime($ultimoAcesso));

    $mensagem = "Seu último acesso foi em: " . $dataFormatada;
} else {
    $mensagem = "Este é o seu primeiro acesso ao sistema!";
}

$dataAtual = date('Y-m-d H:i:s');
setcookie('ultimo_acesso', $dataAtual, time() + (30 * 24 * 60 * 60), '/');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Último Acesso ao Sistema</title>
</head>
<body>

    <h1>Último Acesso ao Sistema</h1>
    <p><?php echo htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8'); ?></p>

</body>
</html>
