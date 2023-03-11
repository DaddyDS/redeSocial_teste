<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Criar Postagem</title>
  <link rel="stylesheet" type="text/css" href="Cpostagem.css">
</head>
<body>
  <h1>Criar Postagem</h1>
<form action="submit-post.php" method="POST">

  <input type="text" id="title" name="title" placeholder="Titulo" required><br>


  <input type="text" id="author" name="author" placeholder="Seu Nome" required><br>

    <textarea id="body" name="body" placeholder="Postagem" required></textarea><br>

  <input class="enviarButton" type="submit" value="Enviar">
</form>
</body>
</html>