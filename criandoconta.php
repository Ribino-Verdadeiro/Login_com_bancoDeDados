<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div id="quadrado2" class='luz'>

        <div class="login">
            REGISTRAR
        </div>

        <div class="formulario">

            <form action="registrar.php" class='form' method='post'>

                <input class='input' type='text' id='name' name='name' placeholder='Nome' required>
                <input class='input' type="email" id='mail' name='mail' placeholder='Email' required>
                <input class='input' type="password" id='senha' name='senha' placeholder='Senha'  required>
                <input type="submit" class='input' id='submit' id='enviar' name='enviar'> 
                <!-- o ID='submit' ali em cima é o ID do CSS -->

                <a href='index.php' style='color:black'> Ja possui uma conta? </a>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro' ){ ?>
                    <div class='text-danger'>
                        Informações incorretas!
                    </div>
                <?php } ?>

            </form>

        </div>    
    
    </div>
    
</body>

</html>