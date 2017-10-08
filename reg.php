<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/css.css">
  <script type="text/javascript" src="scripts/validation.js"></script>
	<title>Sign up</title>
</head>
<body>
<?php
include 'index.php';
include 'connection.php';
?>
<div class="container">
   <form method="post" onsubmit="return validateForm()" action="proccess.php" name="myForm">
    <div class="form-group">
      <label for="name">Имя</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="surname">Фамилия</label>
      <input type="text" class="form-control" id="surname" placeholder="Enter surname" name="surname">
    </div>
       <div class="form-group">
      <label for="username">Имя Пользователя</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
       <div class="form-group">
      <label for="pwd">Пароль</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">

    </div>
       <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <button type="submit" name="butt" class="btn btn-default">Submit</button>
  </form>
</div>

</div>
</body>
</html>