enviado para caixa de arquivos
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usu"];
    $senha = $_POST["sen"];

    // Verifica se o arquivo de texto existe
    $arquivo = "usuarios_senhas.txt";
    
    if (!file_exists($arquivo)) {
        // Se não existir, cria o arquivo
        file_put_contents($arquivo, "");
    }

    // Adiciona o novo usuário e senha ao arquivo
    $dados = "$usuario:$senha\n";
    file_put_contents($arquivo, $dados, FILE_APPEND);

    echo "Usuário e senha salvos com sucesso!";
} else {
    // Se os dados não foram enviados via POST, redireciona para o formulário
    header("Location: index.html");
    exit();
}
?>