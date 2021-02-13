<?php
// Includes!
include 'classes/MenuItem.php';

// Declare variables
$subtotal = 0;
$total = 0;
$taxrate = 0;
$count = 0;
$item_total = 0;
$current = "";
$menu_entrees = array();
$menu_sides = array();
$menu_beverages = array();
$cart = array();

// Fill up the menu arrays with data
$menu_entrees[] = new MenuItem('e1', 'Boneless Chicken Thigh Teriyaki', 6.95, 'The classic teriyaki dish, delicious dark meat cooked in a sweet sauce.');
$menu_entrees[] = new MenuItem('e2', 'Spicy Chicken Teriyaki', 7.55, 'Breast meat cooked in our special house-made hot sauce.');
$menu_entrees[] = new MenuItem('e3', 'Pork Teriyaki', 7.65, 'Pork grilled to perfection in our teriyaki sauce.');
$menu_entrees[] = new MenuItem('e4', 'Chicken Katsu', 8.55, 'A chicken cutlet breaded and deep fried with our special blend of bread crumbs.');
$menu_entrees[] = new MenuItem('e5', 'Beef Teriyaki', 7.95, 'Locally sourced grass-fed beef.');
$menu_entrees[] = new MenuItem('e6', 'Yakisoba', 8.65, 'Fried noodles with your choice of meat & vegetables.');

// Fill up the menu arrays with data
$menu_sides[] = new MenuItem('s1', 'Gyoza', 3.95, 'Six delicious gyoza, stuffed with a mix of steamed vegetables.');
$menu_sides[] = new MenuItem('s2', 'Egg Rolls', 5.55, 'Three rolls, stuffed with shrimp and vegetables, comes with spicy sauce.');
$menu_sides[] = new MenuItem('s3', 'Steamed Veggies', 2.65, 'A variety of steamed vegetables.');


// Fill up the menu arrays with data
$menu_beverages[] = new MenuItem('b1', 'Thai Iced Coffee', 2.95, 'Espresso swirled with sweet condensed milk.');
$menu_beverages[] = new MenuItem('b2', 'Iced Tea', 2.95, 'House blend of black and green teas.');
$menu_beverages[] = new MenuItem('b3', 'Cola', 2.25, 'Choice of cola, variety of flavors.');

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Only need to run this code if we have received POST data
    // This section will fill up the cart array with all the items that have been chosen
    foreach($menu_entrees as $item){
        if (isset($_POST["{$item->menu_id}"])){
            $x = 0;
            while($x < $_POST["{$item->menu_id}"]){
                $cart[] = $item; // Put the item in the cart
                $total += $item->price; // Add the cost of the item to the total
                $x++; // Increase the iterator
            } // End while
        } // End if
    } // End foreach
    foreach($menu_sides as $item){
        if (isset($_POST["{$item->menu_id}"])){
            $x = 0;
            while($x < $_POST["{$item->menu_id}"]){
                $cart[] = $item;
                $total += $item->price;
                $x++;
            } // End while
        } // End if
    } // End foreach
    foreach($menu_beverages as $item){
        if (isset($_POST["{$item->menu_id}"])){
            $x = 0;
            while($x < $_POST["{$item->menu_id}"]){
                $cart[] = $item;
                $total += $item->price;
                $x++;
            } // End while
        } // End if
    } // End foreach
} // End if

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Yoshi's Teriyaki</title>

    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="IT262 Food Truck Project">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Shojumaru&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/main.css" />

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#accordion").accordion();
        });
    </script>


</head>

<body>

    <div>
        <h1 class="logo">
            <span class="outline">Yoshi's Teriyaki</span>
        </h1>

    </div>

    <h3 id="Guide">Click on category (Entree, Sides, or Beverage). Click on an item to display details.<br> Choose how many, then Add to Cart. Choose Delicious Extras, then Add to Cart.</h3>


    <div class="columnContainer">

        <div id="menu" class="column1">

            <form action="" method="POST">
                <div id="accordion">

                    <h3>Entrees</h3>

                    <div>
                        <ul>
                            <?php
                            foreach ($menu_entrees as $item): ?>
                                <li><?=$item->name;?></li>
                                <p><?=$item->description; ?></p>
                                <input type='number' name='<?=$item->menu_id;?>' value="<?php 
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        echo $_POST["{$item->menu_id}"];
                                    } else {
                                        echo "0";
                                    }
                                ?>" />
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <h3>Sides</h3>
                    <div>
                        <ul>
                        <?php
                            foreach ($menu_sides as $item): ?>
                                <li><?=$item->name;?></li>
                                <p><?=$item->description; ?></p>
                                <input type='number' name='<?=$item->menu_id;?>' value="<?php 
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        echo $_POST["{$item->menu_id}"];
                                    } else {
                                        echo "0";
                                    }
                                ?>" />
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <h3>Beverages</h3>
                    <div>
                        <ul>
                        <?php
                            foreach ($menu_beverages as $item): ?>
                                <li><?=$item->name;?></li>
                                <p><?=$item->description; ?></p>
                                <input type='number' name='<?=$item->menu_id;?>' value="<?php 
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        echo $_POST["{$item->menu_id}"];
                                    } else {
                                        echo "0";
                                    }
                                ?>" />
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <button type="submit" value="Add to cart!">
            </form>
        </div>

        <div id="Details" class="column2">
            <br>
            <div id="cart">
            <?php
                foreach($cart as $item){
                    if ($current != $item->menu_id){
                        $current = $item->menu_id;
                        if ($count === 0){
                            $count = 1;
                            $item_total = $item->price;
                        } else {
                            $item_total = number_format($item_total, 2);
                            echo " x {$count} - \${$item_total}</p>";
                            $count = 1;
                            $item_total = $item->price;
                        }
                    } elseif($current === $item->menu_id){
                        $count++;
                        $item_total += $item->price;
                    }

                    if ($count === 1){
                        echo "<p>{$item->name}";
                    }
                }
                echo " x {$count} - \${$item_total}";
                $total = number_format($total, 2);
                echo "<h3>Your total is: \${$total}</h3>";
            ?>
            </div>
        </div>
        </form>
</body>

</html>