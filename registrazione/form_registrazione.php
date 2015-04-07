
<html>
<head>
        <title>Registrazione</title>
        <style>
            div {
                align: center;
            }
            .form {
                margin:auto;
                background-color: lightblue;
                border-radius: 15px;
                border: 1px solid black;
                padding: 10px 20px;
            }
            .form input {
                margin-top: 10px;
            }
        </style>
</head>
<body>

    <!--action="registration_controller.php"-->

    <div>
        <form class="form" action="/navfriend/registrazione/registration_controller.php" method="post">
            <input type="text" name="nome" placeholder="nome" />
            <br>
            <input type="text" name="cognome" placeholder="cognome"/>
            <br>
            <input type="text" name="password" placeholder="password"/>
            <br>
            <input type="text" name="email" placeholder="email"/>
            <br>
            <input type="submit" value="Registrati!">
        </form>
    </div>
</body>
</html>

