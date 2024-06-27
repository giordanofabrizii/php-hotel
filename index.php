<?php 

    require_once __DIR__. '/hotels.php';

    $parking = isset($_POST['parking']) ? $_POST['parking'] : '';
    
    echo $parking;
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
    <!-- Bootstrap v 5.3.3-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="p-2">
        <form action="./index.php" method="post" class="mb-3">
            <!-- Parking lot -->
            <section class="flex align-items-center mb-2">
                <h3>Do you need the parking lot?</h3>
                <input class="form-check-input" type="radio" name="parking" id="parking1" value="true">
                <label class="form-check-label" for="parking1">
                    Yes
                </label>
                <input class="form-check-input" type="radio" name="parking" id="parking2" value="false">
                <label class="form-check-label" for="parking2">
                    No
                </label>
                <input class="form-check-input" type="radio" name="parking" id="parking2" value="">
                <label class="form-check-label" for="parking2">
                    No preferences
                </label>
            </section>

            <button class="btn btn-danger" type="submit">Submit</button>
        </form>

        <table class="table table-dark table-striped container-fluid">
            <thead>
                <tr>
                    <th scope="col" class="w-25">Name</th>
                    <th scope="col">Description</th>
                    <th class="text-center" scope="col">Available Parking</th>
                    <th class="text-center" scope="col">Vote</th>
                    <th class="text-center" scope="col">Distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hotels as $hotel) { ?>
                    <?php if ($parking === '' || $hotel['parking'] == ($parking === 'true')) { ?>
                        <tr>
                            <td> <?php echo $hotel['name']; ?> </td>
                            <td> <?php echo $hotel['description']; ?> </td>
                            <td class="text-center"><?php if ($hotel['parking'] == false) { echo 'No';} else { echo 'Yes';}; ?></td>
                            <td class="text-center"><?php echo $hotel['vote']; ?></td>
                            <td class="text-center"><?php echo $hotel['distance_to_center'] ?> km</td>
                        </tr>
                <?php }} ?>
            </tbody>
        </table>
    </main>
</body>
</html>