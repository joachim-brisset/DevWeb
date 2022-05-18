<?php include "../models/products.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoesZone | Nike </title>

    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/catalogue.css">
    <script src="../js/catalog.js" defer></script>

</head>
<body>
   <?php include "component/header.php"; ?>
    <main>
        <aside>
            <nav>
                <h1> Catalogue </h1>
                <ul>
                    <li><a href="nike">Nike </a></li>
                    <li><a href="puma">Puma </a></li>
                    <li><a href="adidas">Adidas </a></li>
                </ul>
            </nav>
        </aside>
        <div id="catalog">
            <button id="showStockButton"> Afficher les stocks </button>

            <h1> Nike </h1>
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
                    $nike = Product::withBrand("nike");

                    foreach ($nike as $valeur)
                    {
                        ?>
                        <tr>
                            <td><img src="<?=$valeur["img_path"] ?>"></td> <td><?=$valeur["reference"] ?></td> <td><?=$valeur["description"] ?></td>
                            <td>
                                <span class="productStock"><?=$valeur["stock"] ?></span>
                            </td>
                            <td>
                                <input type="button" class="minusButton" value="-">
                                <input type="number" class="cartQuantity" size="8" value="0" min="0" max="6">
                                <input type="button" class="plusButton" value="+">
                                <input type="button" value="Ajoutez au panier">
                            </td>
                            <td><?= $valeur["price"] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <?php include "component/footer.php"; ?>
</body>
</html>