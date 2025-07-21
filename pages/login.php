<?php
    require_once('../php/Server.php');
    if ($USER){
        redir('./index.php');
    }

    
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dyelog - Japanese food restaurant</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section class="sec__log">
        <h1>Login</h1>
        <form action="../php/login.php" class="form__log">
            <input name="phone" type="text" placeholder="Number phone" class="form__input" required>
            <input name="password" type="password" placeholder="Password" class="form__input" required>
            <p class="form__forgot-password">Forgot password?</p>
            <a href="../pages/sign_up.php">
                <p class="form__not-registered">Not registered?</p>
            </a>
        </form>
        <button id="sum">Log In</button>
    </section>

    <script>
        document.querySelector('#sum').onclick = (event) =>{
          document.querySelector('form').submit()
        }
        
    </script>
</body>

</html>