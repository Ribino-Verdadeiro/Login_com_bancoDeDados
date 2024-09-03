<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LOGIN </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
     
    <div id="quadrado" class='luz'>

        <div class="login">
            LOGIN
        </div>

        <div class="formulario">

            <form action="login.php" class='form' method='post'>

                <input class='input' type='text' id='nome' name='nome' placeholder='Nome' required>
                <input class='input' type="email" id='email' name='email' placeholder='Email' required>
                <input class='input' type="password" id='password' name='password' placeholder='Senha'  required>
                <input type="submit" class='input' id='submit' name='submit'>

                <a href='criandoconta.php' style='color:black'> Cadastre uma conta aqui! </a>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro' ){ ?>
                    <div class='text-danger'>
                       <p> Informações incorretas! </p>
                    </div>
                <?php } ?>

            </form>

        </div>    
    
    </div>

    

</body>

</html>