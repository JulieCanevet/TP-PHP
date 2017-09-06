<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']. ' ' . $_POST['nom']; ?> !</p>
<p>Ton message est génial, relis-le pour voir : <?php echo $_POST['message']?></p>
<p><a href="formulaire.php">clique ici</a> pour revenir au formulaire.</p>
</body>
</html>