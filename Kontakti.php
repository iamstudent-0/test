<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="style.css">
	<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<title>Контактная форма</title>
</head>
<body>

<?php require "bloks/header.php" ?> 

<div class="container mt-5">
<h3>Контактная форма</h3>
<form action="check.php" method="POST">
  <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
  <textarea name="message"placeholder="Введите message" class="form-control"></textarea><br>
  <button type="submit" name="send" class="gradient-button">Отправить</button>
</form>
</div>   



<?php require "bloks/footer.php" ?>  

</body>
</html>