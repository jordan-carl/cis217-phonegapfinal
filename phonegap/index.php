<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Showbiz Pizza Place</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
    <script src="js/cordova.js"></script>
    <script src="js/effects.js"></script>
</head>


<body>

<!-- Start of home page: #homePage -->
<div data-role="page" id="call">

    <!-- header -->
    <div class="header">
        <img src="images/header.gif" class="header_img"/>

        <p>We Make Dough!!!!</p>
    </div>
    <!-- /header -->

    <div data-role="navbar">
        <ul>
            <li><a href="#call" class="ui-btn-active ui-state-persist">Call Us</a></li>
            <li><a href="#location">Location</a></li>
            <li><a href="#about_us">About Us</a></li>
            <li><a href="#menu">Menu</a></li>
        </ul>
    </div>
    <!-- /navbar -->

    <div data-role="content home_content">
        <p><a href="tel:555-555-5555" data-role="button">Call Us</a></p>


        <script type="text/javascript" charset="utf-8">

            // Wait for Cordova to load
            //
            document.addEventListener("deviceready", onDeviceReady, false);

            // Cordova is ready
            //
            function onDeviceReady() {
                var myContact = navigator.contacts.create({"displayName": "Test User"});
                myContact.note = "This contact has a note.";
                console.log("The contact, " + myContact.displayName + ", note: " + myContact.note);
            }


        </script>



    </div>


    <div data-role="footer" data-position="fixed">
        <h4><i>Showbiz Pizza Place &copy; 2013</i></h4>
    </div>
    <!-- /footer -->
</div>
<!-- /page one -->


<!-- Start of second page: #Location -->
<div data-role="page" id="location">

    <!-- header -->
    <div class="header">
        <img src="images/header.gif" class="header_img"/>

        <p>We Make Dough!!!!</p>
    </div>
    <!-- /header -->

    <div data-role="navbar">
        <ul>
            <li><a href="#call">Call Us</a></li>
            <li><a href="#location" class="ui-btn-active ui-state-persist">Location</a></li>
            <li><a href="#about_us">About Us</a></li>
            <li><a href="#menu">Menu</a></li>
        </ul>
    </div>
    <!-- /navbar -->

    <div date-role="content">
        <p>Location</p>
        <script>
            navigator.geolocation.getCurrentPosition(function (position){
                var lat = position.coords.latitude;
                var lng = position.coords.longitude;
                var map = '<iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=' + lat + ',' + lng + '&amp;daddr=Pizza+Hut,+3304+North+Nevada+Street,+Spokane,+WA+99207&amp;hl=en&amp;aq=0&amp;oq=3718+&amp;sll=47.685965,-117.37593&amp;sspn=0.022217,0.055747&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=47.686424,-117.37587&amp;spn=0.069336,0.102654&amp;z=12&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=3718+E+Cleveland+Ave,+Spokane,+WA&amp;daddr=Pizza+Hut,+3304+North+Nevada+Street,+Spokane,+WA+99207&amp;hl=en&amp;aq=0&amp;oq=3718+&amp;sll=47.685965,-117.37593&amp;sspn=0.022217,0.055747&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=47.686424,-117.37587&amp;spn=0.069336,0.102654&amp;z=12" style="color:#0000FF;text-align:left">View Larger Map</a></small>';
                $('#map').append(map);
            });
        </script>
        <div id=map>

        </div>
    </div>

    <div data-role="footer" data-position="fixed">
        <h4><i>Showbiz Pizza Place &copy; 2013</i></h4>
    </div>
    <!-- /footer -->
</div>
<!-- /page two -->


<!-- Start of third page: #about_us -->
<div data-role="page" id="about_us">

    <!-- header -->
    <div class="header">
        <img src="images/header.gif" class="header_img"/>

        <p>We Make Dough!!!!</p>
    </div>
    <!-- /header -->

    <div data-role="navbar">
        <ul>
            <li><a href="#call">Call Us</a></li>
            <li><a href="#location">Location</a></li>
            <li><a href="#about_us" class="ui-btn-active ui-state-persist">About Us</a></li>
            <li><a href="#menu">Menu</a></li>
        </ul>
    </div>
    <!-- /navbar -->

    <div date-role="content">
        <p>Our Mission is to offer an inviting atmosphere in which to enjoy affordable, quality, artisan pizza,
            while fostering a sense of community by providing a gathering place for neighbors, family and friends.</p>
    </div>

    <div data-role="footer" data-position="fixed">
        <h4><i>Showbiz Pizza Place &copy; 2013</i></h4>
    </div>
    <!-- /footer -->
</div>
<!-- /page three -->

<!-- Start of menu page: #menu-->
<div data-role="page" id="menu">

    <!-- header -->
    <div class="header">
        <img src="images/header.gif" class="header_img"/>

        <p>We Make Dough!!!!</p>
    </div>
    <!-- /header -->

    <div data-role="navbar">
        <ul>
            <li><a href="#call">Call Us</a></li>
            <li><a href="#location">Location</a></li>
            <li><a href="#about_us">About Us</a></li>
            <li><a href="#menu" class="ui-btn-active ui-state-persist">Menu</a></li>
        </ul>
    </div>
    <!-- /navbar -->

    <div date-role="content">
        <p>Build Your Own Pizza</p>
        <div data-role="collapsible" class="collapsible">
            <h3>Pizza Size</h3>
            <ul data-role="listview" class="menu_items">
                <li><input type="radio" name="size" id="small" value="Small" />
                    <label for="small">Small</label>
                    <input type="radio" name="size" id="medium" value="Medium"  />
                    <label for="medium">Medium</label>
                    <input type="radio" name="size" id="large" value="Large"  />
                    <label for="large">Large</label>
                    <input type="radio" name="size" id="family" value="Family Size"  />
                    <label for="family">Family Size</label></li>
            </ul>
        </div>
        <div data-role="collapsible" class="collapsible">
            <h3>Pizza Crust</h3>
            <ul data-role="listview" class="menu_items">
                <li><input type="radio" name="crust" id="stuffed_crust" value="Stuffed Crust" />
                    <label for="stuffed_crust">Stuffed Crust</label>
                    <input type="radio" name="crust" id="pan_crust" value="Pan Crust"  />
                    <label for="pan_crust">Pan Crust</label>
                    <input type="radio" name="crust" id="hand_tossed" value="Hand Tossed"  />
                    <label for="hand_tossed">Hand Tossed</label>
                    <input type="radio" name="crust" id="thin_crust" value="Thin Crust"  />
                    <label for="thin_crust">Thin Crust</label></li>
            </ul>
        </div>
        <div data-role="collapsible" class="collapsible">
            <h3>Pizza Sauce</h3>
            <ul data-role="listview" class="menu_items">
                <li>
                    <input type="radio" name="sauce" id="no_sauce" value="No Sauce" />
                    <label for="no_sauce">No Sauce</label>
                    <input type="radio" name="sauce" id="traditional" value="Normal Sauce" />
                    <label for="traditional">Normal Sauce</label>
                    <input type="radio" name="sauce" id="lots_sauce" value="Lots O Sauce"  />
                    <label for="lots_sauce">Lots O Sauce</label>
                </li>
            </ul>
        </div>
        <div data-role="collapsible" class="collapsible">
            <h3>Pizza Toppings</h3>
            <ul data-role="listview" class="menu_items"><br/>
                <li data-role="list-divider">Cheeses</li>
                <li>
                    <input type="radio" name="cheese" id="little_cheese" value="Little Cheese" />
                    <label for="little_cheese">Little Bit O Cheese</label>
                    <input type="radio" name="cheese" id="normal_cheese" value="Normal cheese" />
                    <label for="normal_cheese">Normal Cheese</label>
                    <input type="radio" name="cheese" id="lots_cheese" value="Lots O Cheese"  />
                    <label for="lots_cheese">Lots O Cheese</label>
                </li>

                <li data-role="list-divider">Meats</li>
                <li>
                    <input type="checkbox" name="Sausage" id="sausage" class="toppings" />
                    <label for="sausage">Italian Sausage</label>
                    <input type="checkbox" name="Bacon" id="bacon" class="toppings" />
                    <label for="bacon">Bacon</label>
                    <input type="checkbox" name="Canadian Bacon" id="c_bacon" class="toppings" />
                    <label for="c_bacon">Canadian Bacon</label>
                    <input type="checkbox" name="Pepperoni" id="pepperoni" class="toppings" />
                    <label for="pepperoni">Pepperoni</label>
                    <input type="checkbox" name="Beef" id="beef" class="toppings" />
                    <label for="beef">Beef</label>
                    <input type="checkbox" name="Chicken" id="chicken" class="toppings" />
                    <label for="chicken">Grilled Chicken</label>
                </li>
                <li data-role="list-divider">Veggies</li>
                <li>
                    <input type="checkbox" name="Mushrooms" id="mushrooms" class="toppings" />
                    <label for="mushrooms">Mushrooms</label>
                    <input type="checkbox" name="Green Peppers" id="g_peppers" class="toppings" />
                    <label for="g_peppers">Green Peppers</label>
                    <input type="checkbox" name="Tomatoes" id="tomatoes" class="toppings" />
                    <label for="tomatoes">Roma Tomatoes</label>
                    <input type="checkbox" name="Olives" id="olives" class="toppings" />
                    <label for="olives">Black Olives</label>
                    <input type="checkbox" name="Banana Peppers" id="b_peppers" class="toppings" />
                    <label for="b_peppers">Banana Peppers</label>
                    <input type="checkbox" name="Onions" id="onions" class="toppings" />
                    <label for="onions">Onions</label>
                </li>
            </ul>
        </div>
        <div data-role="collapsible" class="collapsible">
            <h3>Drinks</h3>
            <ul data-role="listview" class="menu_items">
                <li>
                    <input type="checkbox" name="Mountain Dew 2 Liter" id="md_2ltr" class="drinks" />
                    <label for="md_2ltr">2 Liter Mtn. Dew</label>
                    <input type="checkbox" name="Pepsi 2 Liter" id="pepsi_2ltr" class="drinks" />
                    <label for="pepsi_2ltr">2 Liter Pepsi</label>
                    <input type="checkbox" name="Mountain Dew 20oz." id="md_20" class="drinks" />
                    <label for="md_20">20oz. Mtn. Dew</label>
                    <input type="checkbox" name="Pepsi 20oz." id="pepsi_20" class="drinks" />
                    <label for="pepsi_20">20oz. Pepsi</label>
                    <input type="checkbox" name="40oz. Beer" id="beer" class="drinks" />
                    <label for="beer"> 40oz. Beer</label>
                    <input type="checkbox" name="Water" id="water" class="drinks" />
                    <label for="water">Water</label>
                </li>
            </ul>
        </div>
        <div id="message"><p>Item has been added!!!</p></div>
        <button id="add_to_order">Add To Order</button>
        <button id="load_order">Load Favorite Order</button>
        <button id="save_order">Save Order As Favorite</button>
        <a href="#checkout" data-role="button">Order Now</a>

    </div>

    <div data-role="footer" data-position="fixed">
        <h4><i>Showbiz Pizza Place &copy; 2013</i></h4>
    </div>
    <!-- /footer -->
</div>
<!-- /page menu -->

<!-- Start of third page: #about_us -->
<div data-role="page" id="checkout">

    <!-- header -->
    <div class="header">
        <img src="images/header.gif" class="header_img"/>

        <p>We Make Dough!!!!</p>
    </div>
    <!-- /header -->

    <div data-role="navbar">
        <ul>
            <li><a href="#call">Call Us</a></li>
            <li><a href="#location">Location</a></li>
            <li><a href="#about_us">About Us</a></li>
            <li><a href="#menu">Menu</a></li>
        </ul>
    </div>
    <!-- /navbar -->

    <div date-role="content">
        <table id="order_table">
            <tr>
                <td>Qty</td>
                <td>Size</td>
                <td>Crust</td>
                <td>Sauce</td>
                <td>Toppings</td>
                <td>Drinks</td>
            </tr>
        </table>
        <div>
            <form method="POST">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" value=""  />
            <label for="address">Address: </label>
            <input type="text" name="address" id="address" value=""  />
            <input type="button" name="place_order" id="place_order" value="Place Order"/>
            </form>
        </div>


        <?php
            require "order.php";
        ?>



    </div>

    <div data-role="footer" data-position="fixed">
        <h4><i>Showbiz Pizza Place &copy; 2013</i></h4>
    </div>
    <!-- /footer -->
</div>
<!-- /page checkout -->
<script>

    $(document).ready(function(){
        var cart = [];
        var i = 0;
        $('#add_to_order').on("click", function(event){
            //show that item has been added//////////
            $('#message').fadeIn(1500).delay(2000).fadeOut(1000);

            ///////////////////////////////////// get all checkboxes selected ///////////////////
            var toppings = [];
            $('input[class="toppings"]:checked').each(function() {
                toppings.push($(this).attr('name'));
            });

            var drinks = [];
            $('input[class="drinks"]:checked').each(function() {
                drinks.push($(this).attr('name'));
            });
            ////////////////////////////////////get all radio buttons ///////////////////
            var size = $('input[name="size"]:checked').val();
            var crust =  $('input[name="crust"]:checked').val();
            var sauce =  $('input[name="sauce"]:checked').val();
            var cheese =  $('input[name="cheese"]:checked').val();
            cart.push("<p>Qty: 1, Size: " + size + ", Crust: " + crust + ", Sauce: " + cheese + ", Toppings: " + toppings + ", Drinks: " + drinks + "</p>");
            $('#order_table tr:last').after($("<tr>" +
                    "<td>1</td>" +
                    "<td>" + size + "</td>" +
                    "<td>" + crust + "</td>" +
                    "<td>" + sauce +"</td>" +
                    "<td>" + toppings + "</td>" +
                    "<td>" + drinks + "</td>" +
                    "</tr>"));
            $('#showCart').append(cart[i]);
            i += 1;

    });

        //saving and loading orders
        $('#save_order').on("click", function(event){

        });

        $('#load_order').on("click", function(event){

        });

    })
</script>
</body>
</html>