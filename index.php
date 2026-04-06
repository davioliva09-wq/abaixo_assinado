<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if (empty($nome) || empty($email)) {
        echo "Preencha todos os dados";
    } 
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Abaixo-Assinado</title>

<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background: #f5f5f5;
    font-family: Arial, sans-serif;
}

.container {
    background: white;
    padding: 30px;
    border-radius: 10px;
    width: 400px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    text-align: center;
}

input {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
}

button {
    margin-top: 15px;
    padding: 10px;
    width: 100%;
    background: black;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background: #333;
}

.texto {
    font-size: 14px;
    text-align: left;
    margin-bottom: 20px;
}
</style>
</head>

<body>

<div class="container">

    <h2>Abaixo-Assinado</h2>

    <div class="texto">
        Este abaixo-assinado tem como objetivo expressar a preocupação dos alunos do 3º EM D.S da escola estadual Padre Conrado Sivila Alsina em relação à ausência de um professor responsável pelas disciplinas de front-end e versionamento de código.<br><br>

        Essas áreas são fundamentais para a formação técnica dos estudantes, especialmente no desenvolvimento do TCC.<br><br>

        Diante disso, solicitamos a disponibilização de um profissional qualificado, e, se possível, a continuidade do professor anterior, considerando sua positiva contribuição para a turma.
    </div>

    <form method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <input type="email" name="email" placeholder="Digite seu email" required>
        <button type="submit">Assinar</button>
    </form>

</div>

</body>
</html>