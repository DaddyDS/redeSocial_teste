
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Social</title>
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<h1>Rede Social De Postagens</h1>

<button><a href="criarPostagem.php" style="color: black; text-decoration: none;">Criar uma postagem</a></button>

<div class="Postagem">


<?php
// recuperar dados do arquivo de texto
$file = file_get_contents('posts.txt');
$posts = explode("\n\n", $file);

// exibir as postagens
foreach ($posts as $post) {
  $lines = explode("\n", $post);
  echo "<br><h2>$lines[0]</h2>"; // título
  echo "<span>$lines[1]</span>"; // autor
  echo "<p>$lines[2]</p>"; // corpo do texto
}
?>
  
</div>


</body>
</html>
