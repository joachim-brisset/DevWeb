<?php include "../models/products.php" ?> </php>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoesZone | Adidas </title>

    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/catalogue.css">

    <script src="../js/catalog.js" defer></script>
</head>
<body>
    <header>

        <div id="top-bar">
            <img class="logo" src="../img/logo.svg" alt="logo de Shoes zone">
            <div id="marker">Soldes ! Jusqu'à -50 %</div>
            <img class="account" src="../img/account logo.svg" alt="account image">
        </div>

        <nav id="main-nav">
            <ul class="inline main">
                <li> <a href="index.html">Accueil</a> </li>
                <li class="dropdown">
                    <p class="dropdown-title">Catalogue</p>
                    <ul class="inline secondary">
                        <li><a href="nike.html">Nike </a></li>
                        <li><a href="puma.html">Puma </a></li>
                        <li><a href="adidas.html">Adidas </a></li>
                    </ul>
                </li>
                <li><a href="Contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <aside>
            <nav>
                <h1> Catalogue </h1>
                <ul>
                    <li><a href="nike.html">Nike </a></li>
                    <li><a href="puma.html">Puma </a></li>
                    <li><a href="adidas.html">Adidas </a></li>
                </ul>
            </nav>
        </aside>
        <div id="catalog">
            <button id="showStockButton"> Afficher les stocks </button>
            <h1> Adidas </h1>
            <table>

                <col id="productImg" />
                <col id="productRef" />
                <col id="productDesc"/>
                <col id="productStock"/>
                <col id="productCart"/>
                <col id="productPrice" />
                <thead>
                    <tr>
                        <th>Aperçu</th> <th>Reference</th> <th>Designation</th> <th> Stock</th> <th>Panier</th> <th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $listedeproduit= Product::withBrand("adidas");

                foreach ($listedeproduit as $value)
                {
                    ?>
                    <tr>
                        <td>
                        <img src="<?=$value["img_path"] ?>"></td> <td><?=$value["reference"]?></td> <td><?=$value["description"]?></td>
                            <td>
                                <span class="productStock"><?=$value["stock"]?></span>
                            </td>
                            <td>
                                <input type="button" class="minusButton" value="-">
                                <input type="number" class="cartQuantity" size="8" value="0" min="0" max="6">
                                <input type="button" class="plusButton" value="+">
                                <input type="button" value="Ajoutez au panier">
                            </td>
                            <td><?=$value["price"] ?> </td>
                    </tr>
                <?php
                }
                ?>
                    
                </tbody>
            </table>
        </div>
    </main>

    <?php include "components/footer.php" ?> </php>
</body>
</html>

