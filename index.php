<?php
require_once 'protect.php';
Protect\with('form.php', 'password');
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark">
    <title>Quotes :)</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>Quotes</h1>

        <p>Wel lief zijn. 😉</p>

        <br>

        <form method="post">
            <label for="quote">Uitspraak:</label>
            <textarea name="quote" id="quote" cols="40" rows="5" required="required" maxlength="256" placeholder="Typ hier..."></textarea>

            <br>

            <label for="from">Van:</label>
            <input type="text" name="from" required="required" maxlength="32">

            <label for="to">Naar (optioneel):</label>
            <input type="text" name="to" maxlength="32">

            <input type="submit" name="submit" value="Verzend">
        </form>
    </main>

</body>

</html>