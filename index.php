<?php 

    require_once __DIR__. '/hotels.php'

    // Descrizione
    // Partiamo da questo array di hotel: https://www.codepile.net/pile/OEWY7Q1G 
    // Milestone 1
    // Stampare tutti i nostri hotel con tutti i dati disponibili. Iniziate in modo graduale.
    // Prima stampate in pagina i dati, senza preoccuparvi dello stile.
    // Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
    //Milestone 2
    // Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
    // Milestone 3 
    // Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
    // NOTA:
    // deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e
    // che hanno un voto di tre stelle o superiore) Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php hotels</title>
</head>
<body>
    <main>
        <?php foreach($hotels as $hotel) { ?>
            <h1> <?php echo $hotel['name']; ?> </h1>
            <h2> <?php echo $hotel['description']; ?> </h2>
            <p>Il parcheggio <?php if ($hotel['parking'] == false) { echo 'non';}; ?> &egrave; disponibile </p>
            <p>Il suo voto e' <?php echo $hotel['vote']; ?></p>
            <p>&Egrave; distante <?php echo $hotel['distance_to_center'] ?> km dal centro</p>
        <?php } ?>
    </main>
</body>
</html>