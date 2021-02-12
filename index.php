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
    $( function() {
        $( "#accordion" ).accordion();
    } );
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

            <div id="accordion">

                            <h3>Entrees</h3>
                            <ul>
                                <li>Entree One</li>
                                <p>Food qualities braise chicken cuts bowl through slices butternut snack.<p>

                                <li>Entree Two</li>
                                <p>Tender meat juicy dinners. One-pot low heat plenty of time adobo fat raw soften fruit.<p>

                                <li>Entree Three</li>
                                <p>Sweet renders bone-in marrow richness kitchen, fricassee basted pork shoulder.<p>

                                <li>Entree Four</li>
                                <p>Flavor centerpiece plate, delicious ribs bone-in meat, excess chef end.<p>

                                <li>Entree Five</li>
                                <p>Romantic fall-off-the-bone butternut chuck rice burgers.<p>
                                    
                                    
                            </ul>

                            <h3>Sides</h3>
                            <div>
                                <ul>
                                <li>Side One</li>
                                <p>Food qualities braise chicken cuts bowl through slices butternut snack.<p>

                                <li>Side Two</li>
                                <p>Tender meat juicy dinners. One-pot low heat plenty of time adobo fat raw soften fruit.<p>

                                <li>Side Three</li>
                                <p>Sweet renders bone-in marrow richness kitchen, fricassee basted pork shoulder.<p>


                                </ul>
                            </div>

                    <h3>Beverages</h3>
                    <div>
                        <ul>
                            <li>Beverage One</li>Side
                            <p>Food qualities braise chicken cuts bowl through slices butternut snack.<p>

                            <li>Beverage Two</li>
                            <p>Tender meat juicy dinners. One-pot low heat plenty of time adobo fat raw soften fruit.<p>

                            <li>Beverage Three</li>
                            <p>Sweet renders bone-in marrow richness kitchen, fricassee basted pork shoulder.<p>

                        </ul>
                    </div>


                    <!-- <h3>Section 4</h3>
                    <div>
                        <p>
                        Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                        et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                        faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                        mauris vel est.
                        </p>
                        <p>
                        Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                        inceptos himenaeos.
                        </p>
                    </div> -->
        </div>
    </div>
<!-- 
    <div id="Details" class="column">

        <div id="MenuForm">
            <div class="detailsWindow">

                <div class="detailsText">
                <h4>Menu Item</h4>
                <p>Ipsum to be replaced with code.  Sweet soften dinners, cover mustard infused skillet, Skewers on culinary experience.</p>
                </div>

            </div>

            <br>

            <div id="controls" class="flexContainer">
                
                <div id="PlusMinus">

                    <button id="minus">−</button>
                    <input type="number" value="0" id="input" disable/>
                    <button id="plus">+</button>

                </div>

                <div id="AddToCart">
                    <input type="button" value="Add to Cart">
                </div>

            </div>
        </div> -->
        
        <br>

                <!-- <fieldset class="addons">

                <legend id="Addons">Delicious Extras</legend>

                    <label><input type="checkbox" id="addon1" name="addon1" value="addon1">Addon 1</label>
                    <br>

                    <label><input type="checkbox" id="addon2" name="addon2" value="addon2">Addon 2</label>
                    <br>

                    <label><input type="checkbox" id="addon3" name="addon3" value="addon3">Addon 3</label>
                    <br>

                    <label><input type="checkbox" id="addon4" name="addon4" value="addon4">Addon 4</label>
                    <br>

                    <label><input type="checkbox" id="addon5" name="addon5" value="addon5">Addon 5</label>
                    <br>

                    <label><input type="checkbox" id="addon6" name="addon6" value="addon6">Addon 6</label>
                    <br>

                    <input type="submit" value="Add to Cart">

                    
                </fieldset>

            </div> -->


            <div id="cart" class="column2">

                <p> Juicy smoker soy sauce burgers brisket. polenta mustard hunk greens. Wine technique snack skewers chuck excess. Oil heat slowly. slices natural delicious, set aside magic tbsp skillet, bay leaves brown centerpiece. fruit soften edges frond slices onion snack pork steem on wines excess technique cup; Cover smoker soy sauce fruit snack. Sweet one-dozen scrape delicious, non sheet raw crunch mustard. Minutes clever slotted tongs scrape, brown steem undisturbed rice.</p>

            </div>



        </div>

    </form>


</body>

<script>

    const minusButton = document.getElementById('minus');
    const plusButton = document.getElementById('plus');
    const inputField = document.getElementById('input');

    minusButton.addEventListener('click', event => {
    event.preventDefault();
    const currentValue = Number(inputField.value) || 0;
    inputField.value = currentValue - 1;
    });

    plusButton.addEventListener('click', event => {
    event.preventDefault();
    const currentValue = Number(inputField.value) || 0;
    inputField.value = currentValue + 1;
    });

</script>


</html>