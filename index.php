<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="style.css">
	<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<title>Простой сайт(пробник)</title>
</head>
<body>

<?php require "bloks/header.php" ?> 


     <div class="container mt-5">
      	<h3 class="mb-5"> Возможные статьи</h3>

       <div class="d-flex flex-wrap">

      	<?php for($i = 0; $i<5; $i++ ):
      	?>
<div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Заголовок</font></font></h4>
          </div>
          <div class="card-body">
          	<img src="img/<?php echo ($i+1) ?>.jpg" class = "img-thumbnail">
            
            <ul class="list-unstyled mt-3 mb-4">
              <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10 пользователей включены</font></font></li>
              <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 ГБ памяти</font></font></li>
              <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Поддержка по электронной почте</font></font></li>
              <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Доступ к справочному центру</font></font></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary   ">Подробнее</button>
          </div>
        </div>


<?php endfor ?>


<?php require "bloks/footer.php" ?>   
</body>
</html>