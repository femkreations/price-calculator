<!doctype html> 
<html lang="en">
<head>
	<?php include("../inc/meta.php") ?>
    
    <link rel="stylesheet" href="style.css" type="text/css">
  	<title>Price Estimator</title>
  
    <?php include("../inc/header.php") ?>
    
    <h1><span>Price Estimator</span></h1>

   
</div>

<div id="canvas" class="container group">
    
    <div id="primaryContent" class="group">

    <form class="cart" id="cart_custom">
        <fieldset id="product-summary">
            <h2>Select the Items</h2>
            <div class="row">
                <div class="item">
                    <h3>Basketball sneakers</h3>
                    <p>Run faster, jump higher</p>
                    <p class="info">
                        Price: $90/pair
                    </p>
                    <div class="order">
                        <label for="bb_sneakers">Quantity Desired: </label>
                        <input type="number" name="bb_sneakers" id="bb_sneakers" min="0" placeholder="0" size="3" >
                    </div>
                </div>

                <div class="item">
                    <h3>ACTIVE Jersey</h3>
                    <p>Sweat harder, wick better</p>
                    <p class="info">
                         Price: $25/each
                    </p>
                    <div class="order">
                        <label for="a_jersey">Quantity Desired: </label>
                        <input type="number" name="a_jersey" id="a_jersey" min="0" placeholder="0" size="3" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="item">     
                    <h3>Power Supplements</h3>
                    <p>Get healthier, get smarter</p>
                    <p class="info">
                        Price: $30/bottle
                    </p>
                    <div class="order">
                        <label for="p_supple">Quantity Desired: </label>
                        <input type="number" name="p_supple" id="p_supple" min="0" placeholder="0" size="3" >
                    </div>
                </div>
                <div class="item">     
                    <h3>Mineral Water</h3>
                    <p>It's fizzy</p>
                    <p class="info">
                        Price: $4/bottle
                    </p>
                    <div class="order">
                        <label for="m_water">Quantity Desired: </label>
                        <input type="number" name="m_water" id="m_water" min="0" placeholder="0" size="3" >
                    </div>
                </div>

            </div>
        </fieldset>

        <div id="summary">
        
            <h2>Provide the Shipping Details</h2>
            
            <div class="row">
                <div class="group col3 state">
                    <label for="state">State(required):</label>
                    <select id="id_state" name="state" required>
                            <option value="">select one</option>
                            <option value="CA">California (7.5% tax)</option>
                            <option value="IL">Illinois</option>
                            <option value="NH">New Hampshire</option>
                            <option value="PA">Pennslyvania</option>
                            <option value="WA">Washington (6.5% tax)</option>
                    </select>
                </div>

                <div class="group col3 method">

                    <label>Shipping and Handling:</label><br>
                    <input type="radio" name="ship" value="pickup" id="method-free" checked> <label for="method-free">Pickup(Free)</label><br>
                    <input type="radio" name="ship" value="us" id="method-us"> <label for="method-us">US mail ($2/item)</label><br>
                    <input type="radio" name="ship" value="ups" id="method-ups"> <label for="method-ups"> UPS($3/item)</label>

                </div>

                <div class="group col3 special">
                    <label>Special:</label><br>
                    <input type="checkbox" name="special-gift" id="gift" value="gift">
                        <label for="gift">This is a gift(include a card)</label><br>
                    <input type="checkbox" name="special-mailing" id="mailing" value="mailing">
                        <label for="mailing">Sign up for the mailing list</label><br>
                    <input type="checkbox" name="special-recipes" id="recipes" value="recipes">
                        <label for="recipes">Include free recipes</label>
                </div>

            </div>

            <div class="group col2 notes">
                <label for="message">Other Notes:</label><br>
                <textarea id="message" name="message" rows="10" cols="2" placeholder="Any other special requests(does not affect the estimate)"></textarea>
            </div>

        </div>

        <div class="group col2 calc">
                <p> <label for="btn_estimate">Click To Estimate:</label><br>
                   
                    <input type="submit" value="Estimate Total" id="btn_estimate">
                    <input id="total_estimate" disabled="true" type="text" name="total" >
                </p>
                <div id="results">
                    
                </div>
            </div>
            

    </form>



        
    </div> <!-- main content -->
    <!--
    <div id="secondaryContent">
    
    
    </div><!-- right col content --> 
    
</div>
   
   
<?php include("../inc/footer.php") ?> 
    
    
    
    
<script src="script.js"></script>
</body>
</html>