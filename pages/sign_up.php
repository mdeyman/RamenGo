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
    <section class="sec__sign-up">
        <h1>Sign Up</h1>
        <form action="../php/registration.php" class="form__sign-up">
            <input name="phone" type="text" placeholder="Number phone" class="form__input" required>
            <input name="password" type="password" id="pass" placeholder="Password" class="form__input" required>
            <input name="" type="password" id="pass-repeat" placeholder="Repeat password" class="form__input" required>
            <p class="form__forgot-password">Forgot password?</p>
            <a href="../pages/login.php">
                <p class="form__not-registered">Not login?</p>
            </a>
        </form>
        <button id="sum">Sign Up</button>
    </section>

    <script>
        document.querySelector('#sum').onclick = (event) => {
            const password = document.querySelector('#pass').value
            const passwordRepeat = document.querySelector('#pass-repeat').value

            if (password === '') {
                return
            }
            if (password !== passwordRepeat) {
                return
            }

            document.querySelector('form').submit()
        }
    </script>

</body>

</html>