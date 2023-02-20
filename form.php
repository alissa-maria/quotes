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
        <form method="post">
            <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
                Ongeldig wachtwoord.
            <?php } ?>
            <label for="password">Vul hier het wachtwoord in:</label>
            <input type="password" name="password" required="required">

            <input type="submit" name="submit" value="Verzend">
        </form>
    </main>

</body>

</html>