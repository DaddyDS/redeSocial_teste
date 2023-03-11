<?php
// obter dados do formulário
$title = $_POST['title'];
$body = $_POST['body'];
$author = $_POST['author'];

// salvar dados em um arquivo de texto
$file = fopen('posts.txt', 'a');
fwrite($file, "Título: $title\n");
fwrite($file, "Postado Por: $author\n");
fwrite($file, "Assunto: $body\n\n");
fclose($file);

// redirecionar para uma página de confirmação
header("Location: index.php");
?>