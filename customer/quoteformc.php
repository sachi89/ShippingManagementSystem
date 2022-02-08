<?php
//looks for a sessions and starts session if non existant
session_start();
include("../connection.php");
//header contains navigation bar and bootstrap css link
include("customerheader.php");

// quoteform.php is a form page for user to input information about the shipment's details, to be used for freight quote calculation.

?>

    <div class="container-space"><style>.container-space{padding-top:25px;}</style>
        <center><h1>Freight Quote Calculator</h1></center>
    </div>
    <div class="container1"><style>.container1 {margin: auto;
      width: 60%; padding-left:170px; padding-top:25px;}</style>
        <form method="post" action="quoteresultc.php">
            <h5>Freight Class</h5>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="weight">Weight</label>
                    <input type="number" step="0.1" class="form-control" id="weight" name="weight" placeholder="lb" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="length">Length</label>
                    <input type="number" step="0.1" class="form-control" id="length" name="length" placeholder="in" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="width">Width</label>
                    <input type="number" step="0.1" class="form-control" id="width" name="width" placeholder="in" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="height">Height</label>
                    <input type="number" step="0.1" class="form-control" id="height" name="height" placeholder="in" required>
                </div>
            </div>
            <h5>Freight Type</h5>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="item">Item Name</label>
                    <input type="text" class="form-control" id="item" name="item" placeholder="Item" required>
                </div>
                <div class="form-group col-md-3">
                  <label for="inlineFormCustomSelect">Freight</label>
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="freight" required>
                    <option selected>Select</option>
                    <option value="pallet">Pallet</option>
                    <option value="crate">Crate</option>
                    <option value="container">Container</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="qty">Quantity</label>
                    <input type="number" step="1" class="form-control" id="qty" name="qty" placeholder="0" required>
                </div>
            </div>
            <h5>Origin</h5>
            <h6>Client Information</h6>
                <div class="form-group col-md-4">
                    <label for="name">Name or Organization</label>
                    <input type="text" class="form-control" id="name" name="client" placeholder="Name" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="phone">Phone Number</label><!-- phone number pattern excludes '-', which is rejected when inserting into database. -->
                    <input type="tel" id="phone" class="form-control" name="phone" pattern="[0-9]{10}" placeholder="0000000000" required>
                </div>
                <h6>Pickup Address</h6>
                <div class="form-group col-lg-6">
                    <label for="street address">Street Address</label>
                    <input type="text" class="form-control" id="address" name="pickup_street_address" placeholder="123 Street Name" required>
                </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" name="pickup_city" placeholder="City" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="state">State</label>
                    <select id="state" class="form-control" name="pickup_state">
                    	<option selected>Select</option>
                    	<option value="AL">Alabama</option>
                    	<option value="AK">Alaska</option>
                    	<option value="AZ">Arizona</option>
                    	<option value="AR">Arkansas</option>
                    	<option value="CA">California</option>
                    	<option value="CO">Colorado</option>
                    	<option value="CT">Connecticut</option>
                    	<option value="DE">Delaware</option>
                    	<option value="DC">District Of Columbia</option>
                    	<option value="FL">Florida</option>
                    	<option value="GA">Georgia</option>
                    	<option value="HI">Hawaii</option>
                    	<option value="ID">Idaho</option>
                    	<option value="IL">Illinois</option>
                    	<option value="IN">Indiana</option>
                    	<option value="IA">Iowa</option>
                    	<option value="KS">Kansas</option>
                    	<option value="KY">Kentucky</option>
                    	<option value="LA">Louisiana</option>
                    	<option value="ME">Maine</option>
                    	<option value="MD">Maryland</option>
                    	<option value="MA">Massachusetts</option>
                    	<option value="MI">Michigan</option>
                    	<option value="MN">Minnesota</option>
                    	<option value="MS">Mississippi</option>
                    	<option value="MO">Missouri</option>
                    	<option value="MT">Montana</option>
                    	<option value="NE">Nebraska</option>
                    	<option value="NV">Nevada</option>
                    	<option value="NH">New Hampshire</option>
                    	<option value="NJ">New Jersey</option>
                    	<option value="NM">New Mexico</option>
                    	<option value="NY">New York</option>
                    	<option value="NC">North Carolina</option>
                    	<option value="ND">North Dakota</option>
                    	<option value="OH">Ohio</option>
                    	<option value="OK">Oklahoma</option>
                    	<option value="OR">Oregon</option>
                    	<option value="PA">Pennsylvania</option>
                    	<option value="RI">Rhode Island</option>
                    	<option value="SC">South Carolina</option>
                    	<option value="SD">South Dakota</option>
                    	<option value="TN">Tennessee</option>
                    	<option value="TX">Texas</option>
                    	<option value="UT">Utah</option>
                    	<option value="VT">Vermont</option>
                    	<option value="VA">Virginia</option>
                    	<option value="WA">Washington</option>
                    	<option value="WV">West Virginia</option>
                    	<option value="WI">Wisconsin</option>
                    	<option value="WY">Wyoming</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                      <label for="zipcode">Zipcode</label>
                      <input type="text" class="form-control" id="zipcode" name="pickup_zip_code" placeholder="Zipcode">
                </div>
            </div>
            <h5>Destination</h5>
            <div>
                <!-- javascript function with DOM getElementById to enable 
                and disable city/state and country through domestic 
                and international radio buttons-->
                <script>
                    function disable() {
                       if(document.getElementById('domestic').checked) {
                            document.getElementById('istate').disabled = true;
                            document.getElementById('dstate').disabled = false;
                    
                        }
                        if(document.getElementById('international').checked) {
                            document.getElementById('dstate').disabled = true;
                            document.getElementById('istate').disabled = false;
                        }
                    }
                </script>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="destination" id="domestic" value="DOMESTIC" onclick="disable()"  required>
                  <label class="form-check-label" for="domestic">Domestic</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="destination" id="international" value="INTERNATIONAL" onclick="disable()">
                  <label class="form-check-label" for="international">International</label>
                </div>
                <div class="form-group col-md-4">
                    <label for="rname">Recipient Name</label>
                    <input type="text" class="form-control" id="rname" name="recipient_name" placeholder="Name" required>
                </div>
                <div class="form-group col-lg-6">
                    <label for="r street address">Street Address</label>
                    <input type="text" class="form-control" id="raddress" name="delivery_street_address" placeholder="123 Street Name" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="rcity">City</label>
                      <input type="text" class="form-control" id="rcity" name="delivery_city" placeholder="City" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="state or province">State/Province</label>
                      <input type="text" class="form-control" id="istate" name="delivery_state_province" placeholder="State/Province" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="dstate">State</label>
                        <select id="dstate" class="form-control" name="dstate">
                        	<option selected>Select</option>
                        	<option value="AL">Alabama</option>
                        	<option value="AK">Alaska</option>
                        	<option value="AZ">Arizona</option>
                        	<option value="AR">Arkansas</option>
                        	<option value="CA">California</option>
                        	<option value="CO">Colorado</option>
                        	<option value="CT">Connecticut</option>
                        	<option value="DE">Delaware</option>
                        	<option value="DC">District Of Columbia</option>
                        	<option value="FL">Florida</option>
                        	<option value="GA">Georgia</option>
                        	<option value="HI">Hawaii</option>
                        	<option value="ID">Idaho</option>
                        	<option value="IL">Illinois</option>
                        	<option value="IN">Indiana</option>
                        	<option value="IA">Iowa</option>
                        	<option value="KS">Kansas</option>
                        	<option value="KY">Kentucky</option>
                        	<option value="LA">Louisiana</option>
                        	<option value="ME">Maine</option>
                        	<option value="MD">Maryland</option>
                        	<option value="MA">Massachusetts</option>
                        	<option value="MI">Michigan</option>
                        	<option value="MN">Minnesota</option>
                        	<option value="MS">Mississippi</option>
                        	<option value="MO">Missouri</option>
                        	<option value="MT">Montana</option>
                        	<option value="NE">Nebraska</option>
                        	<option value="NV">Nevada</option>
                        	<option value="NH">New Hampshire</option>
                        	<option value="NJ">New Jersey</option>
                        	<option value="NM">New Mexico</option>
                        	<option value="NY">New York</option>
                        	<option value="NC">North Carolina</option>
                        	<option value="ND">North Dakota</option>
                        	<option value="OH">Ohio</option>
                        	<option value="OK">Oklahoma</option>
                        	<option value="OR">Oregon</option>
                        	<option value="PA">Pennsylvania</option>
                        	<option value="RI">Rhode Island</option>
                        	<option value="SC">South Carolina</option>
                        	<option value="SD">South Dakota</option>
                        	<option value="TN">Tennessee</option>
                        	<option value="TX">Texas</option>
                        	<option value="UT">Utah</option>
                        	<option value="VT">Vermont</option>
                        	<option value="VA">Virginia</option>
                        	<option value="WA">Washington</option>
                        	<option value="WV">West Virginia</option>
                        	<option value="WI">Wisconsin</option>
                        	<option value="WY">Wyoming</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="rzipcode">Zipcode (if applicable)</label>
                      <input type="text" class="form-control" id="rzipcode" name="delivery_zip_code" placeholder="Zipcode">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="country">Country</label>
                        <select id="country" class="form-control" name="country">
                        	<option selected>Select</option>
                        	<option value="Argentina">Argentina</option>
                        	<option value="Canada">Canada</option>
                        	<option value="China">China</option>
                            <option value="France">France</option>
                            <option value="Germany">Germany</option>
                        	<option value="India">India</option>
                        	<option value="Jamaica">Jamaica</option>
                        	<option value="Korea">Korea</option>
                        	<option value="Mexico">Mexico</option>
                        	<option value="Nigeria">Nigeria</option>
                        	<option value="Russia">Russia</option>
                        	<option value="UK">UK</option>
                        	<option value="USA">USA</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Get Freight Quote</button>
        </form>
        <br>
    </div>

    
<?php
//footer file also contains bootstrap javascript links
include("../footer.php");
?>