 <?php require 'controlador.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>hash</title>
</head>

<body>
<form action= "" method="post"autocomplete="off">    
<h1>registro de usuarios</h1>


<label for="">Usuario</label>
<input type="text" name="usuario_usu" maxlenght="20"required>

<label for="">Password</label>
<input type="password" name="password_usu" maxlenght="20"required>

<button type="submit" name="registro">Resgistrar</button>
<P class="error"><?php echo @$registro_error ?></P>
        <P class="success"><?php echo @$registro_success ?></P>   

</form>
</body>
</html>

