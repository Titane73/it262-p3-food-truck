<?php
// index.php
// By Robin VanGilder & Ti Hall

// Includes!
include 'classes/MenuItem.php';

// Declare variables
$subtotal = 0;
$total = 0;
$tax_rate = 0.101;
$tax = 0;
$count = 0;
$item_total = 0;
$current = "";
$menu_entrees = array();
$menu_sides = array();
$menu_beverages = array();
$cart = array();

// Fill up the menu arrays with data - Entrees
$menu_entrees[] = new MenuItem('e1', 'Chicken Teriyaki', 6.95, 'The classic teriyaki dish, delicious dark meat cooked in a sweet sauce.');
$menu_entrees[] = new MenuItem('e2', 'Spicy Chicken Teriyaki', 7.55, 'Breast meat cooked in our special house-made hot sauce.');
$menu_entrees[] = new MenuItem('e3', 'Chicken Katsu', 8.55, 'A chicken cutlet breaded and deep fried with our special blend of bread crumbs.');
$menu_entrees[] = new MenuItem('e4', 'Yakisoba', 8.65, 'Fried noodles with your choice of meat & vegetables.');
$menu_entrees[] = new MenuItem('e5', 'Salmon Teriyaki', 11.75, 'Delicious local salmon in our signature sauce.');
$menu_entrees[] = new MenuItem('e6', 'Chicken & Gyoza Combo', 5.95, 'Half order of teriyaki chicken with 6 of our fresh gyoza.');
// Sides
$menu_sides[] = new MenuItem('s1', 'Gyoza', 3.95, 'Six delicious gyoza, stuffed with a mix of steamed vegetables.');
$menu_sides[] = new MenuItem('s2', 'Egg Rolls', 5.55, 'Three rolls, stuffed with shrimp and vegetables, comes with spicy sauce.');
$menu_sides[] = new MenuItem('s3', 'Steamed Veggies', 2.65, 'A variety of steamed vegetables.');
$menu_sides[] = new MenuItem('s4', 'Extra Rice', 1.65, 'An extra helping of sticky white rice.');
$menu_sides[] = new MenuItem('s5', 'Miso Soup', 1.95, 'A hearty bowl of steaming miso soup.');
// Beverages
$menu_beverages[] = new MenuItem('b1', 'Thai Iced Coffee', 3.95, 'Espresso swirled with sweet condensed milk.');
$menu_beverages[] = new MenuItem('b2', 'Iced Tea', 2.95, 'House blend of black and green teas.');
$menu_beverages[] = new MenuItem('b3', 'Coke Products', 2.25, 'Choice of Coca Cola products, in a variety of flavors.');
$menu_beverages[] = new MenuItem('b4', 'Jarritos', 2.55, 'Delicious fruit soda, with real sugar!.');
$menu_beverages[] = new MenuItem('b5', 'Bottled Water', 1.75, 'Some refreshing water in a bottle.');

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
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/style.css" />
        
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
                $("#accordion").accordion();
            });
        </script>
    </head>

    <body>

        <div class="logo_container">
            <img src="images/yoshi_logo.png" alt="imaginary logo">
        </div>

        <h3 id="Guide">Click on category (Entree, Sides, or Beverage). Enter the number of each item desired, then click Update Cart.</h3>
        <h3 id="Guide">To remove an item, adjust the desired number then click Update Cart.</h3>

        <div class="columnContainer">

            <div id="MenuDetail" class="column">

                <form action="" method="POST">

                    <div id="accordion">

                        <h3 class="category_header">Entrees</h3>

                        <div class="menu_category">
                            <ul>
                                <?php // This echoes each item in the menu_entrees array
                                foreach ($menu_entrees as $item): ?>
                                <div class="item_wrapper">
                                    <div class="image_wrapper"><img src="images/<?=$item->menu_id;?>.png" class="thumb" alt="<?=$item->description;?>"/></div>
                                    <li><strong>
                                    <input type='number' name='<?=$item->menu_id;?>' value="<?php 
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST') { // If there's POST data, echo the old value
                                                echo $_POST["{$item->menu_id}"];
                                            } else { // Or, just set it to 0!
                                                echo "0";
                                            } // End if
                                        ?>" />
                                    <?=$item->name;?></strong> - $<?=$item->price; ?>
                                    <p><?=$item->description; ?></p>
                                    </li>
                                </div>

                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <h3 class="category_header">Sides</h3>

                        <div class="menu_category">
                            <ul>
                            <?php
                                foreach ($menu_sides as $item): ?>
                                    <li><strong><?=$item->name;?></strong> - $<?=$item->price; ?>
                                    <input type='number' name='<?=$item->menu_id;?>' value="<?php 
                                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                            echo $_POST["{$item->menu_id}"];
                                        } else {
                                            echo "0";
                                        }
                                    ?>" /></li>
                                    <p><?=$item->description; ?></p>
                                    
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <h3 class="category_header">Beverages</h3>

                        <div class="menu_category">
                            <ul>
                            <?php
                                foreach ($menu_beverages as $item): ?>
                                    <li><strong><?=$item->name;?></strong> - $<?=$item->price; ?>
                                    <input type='number' name='<?=$item->menu_id;?>' value="<?php 
                                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                            echo $_POST["{$item->menu_id}"];
                                        } else {
                                            echo "0";
                                        }
                                    ?>" /></li>
                                    <p><?=$item->description; ?></p>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                    </div>

                    <div class="update_container">
                        <input id="UpdateCart" type="submit" value="Update Cart">
                    </div>

                </form>

            </div>

            <div class="column cart_container">
                <div id="CartDetail">
                    <?php if (!empty($cart)) { ?>
                    <h3>Your Cart:</h3>
                    <?php
                        foreach($cart as $item){
                            if ($current != $item->menu_id){ // This runs when we shift to counting a new item
                                $current = $item->menu_id;
                                if ($count === 0){ // This only runs at the very beginning of the process
                                    $count = 1;
                                    $item_total = $item->price;
                                } else {
                                    $item_total = number_format($item_total, 2);
                                    echo " x {$count} <span class='total'>\${$item_total}</span></p>"; // Displays the second half of each item, including total price and quantity
                                    $count = 1;
                                    $item_total = $item->price;
                                } // End count===0 if
                            } elseif($current === $item->menu_id){
                                $count++;
                                $item_total += number_format($item->price, 2);
                            } // End current if

                            if ($count === 1){ // After counting the FIRST item
                                echo "<p>{$item->name}"; // Displays the name of each item
                            }
                        }
                        $item_total = number_format($item_total, 2); // Echo the last item total and count
                        echo " x {$count} <span class='total'>\${$item_total}</total></p>";
                    } else {
                        echo "<h2>Add items to your cart using the form to the left.</h2>";
                        echo "<h3>Click the button at the bottom to update the total!</h3>";
                    }
                ?>
                </div>
                <?php if (!empty($cart)) { ?>
                <div id="Totals">

                    <?php
                        $total = number_format($total, 2); // Always format values for money!
                        echo "<h3>Subtotal: \${$total}</h3>";
                        
                        $tax = number_format(($total * $tax_rate), 2);
                        echo "<h3>Tax: \${$tax}</h3>";

                        $total += $tax;
                        echo "<h2>Total: \${$total}";
                    ?>

                    <p>Thank you for your order!<p>
                </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>
