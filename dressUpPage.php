<!--Jameson Brown-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dress Up!</title>

    <!-- jQuery + jQuery UI -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">

    <!-- My files -->
    <script src="dressUpScript.js" defer></script>
    <link rel="stylesheet" href="gameStyle.css">
</head>
<body>

<header>
    <h1>Dress Him!</h1>
    <button id="menu-btn">MENU</button>
</header>

<main id="game-area">

    <!-- CHARACTER PANEL -->
    <section id="character-panel">
        <div id="avatar">
            <img src="images/Objects/Avatarbase.png" id="avatar-body">

            <!-- Head hitbox -->
            <div id="head-hitbox"></div>
        </div>
    </section>

    <!-- ITEMS PANEL -->
    <aside id="items-panel">
        <div class="items-inner">
            <img
            src="images/Thumbs/hairThumb_1.png"
            class="hair"
            data-full="images/Objects/hair_1.png"
            >

            <img
            src="images/Thumbs/hairThumb_2.png"
            class="hair"
            data-full="images/Objects/hair_2.png"
            >

            <img
            src="images/Thumbs/hairThumb_3.png"
            class="hair"
            data-full="images/Objects/hair_3.png"
            >
        </div>
    </aside>

</main>

</body>
</html>
