<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - ATLAS</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Background Wave -->
    <img src="images/wave.png" class="wave">

    <!-- ALL ELEMENTS CENTERED -->
    <div class="wrapper">

        <!-- CHARACTER STACKED -->
        <div class="character-wrapper">
            <img src="images/character.png" class="character">
            <img src="images/star.png" class="star">
        </div>

        <!-- LOGIN BOX -->
        <div class="login-box">
            <h1>Welcome!</h1>
            <h2>A T L A S</h2>
            <h3>“Kuis pengetahuan umum untuk anak hebat!”</h3>

            <form action="login.php" method="POST">
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required>
                </div>

                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <button type="submit">Login</button>
            </form>
        </div>

    </div>

</body>

</html>
