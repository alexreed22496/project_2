<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cryptid Collection</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Top Bar-->

        <section id="top_bar">
            <div class="container">
                <h1>Cryptid collection</h1>
                <p>Share your cryptid sightings</p>
            </div>
            <a class="add_cryptid" href="add_cryptid.php">
                Add cryptid
            </a>
        </section>
        <section id="content">

        <?php
        require_once('fetch_database.php');
        $db=fetch_db();
        require_once('lister.php');
        $collection=list_collection($db);
        ?>
        
        </section>
    </body>
</html>