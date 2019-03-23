<?php
    
    include_once 'includes/header.php';
  
   
?>

  <!-- Main content  : start -->
      

            <div class="admin">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Create Account</h2>
                           
                            
                        </div>
                    </div>

                    <div class="profile">
                        <div class="row">
                            
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="profile__info">
                                    
       
      
      
                                 <div class="profile__info-top text-center">
                                        <div class="profile__img">
                                           
                                          
<img src="images/default-profile.png">
  



                                        </div>

                                     
                                       
                                    </div>

                                                                     
                                </div>

                               
                            </div>
                            <div class="col-12 col-md-8 col-lg-9">
                               
                                <div class="profile__edit">

                                    <form class="form" action="includes/signup.inc.php" method="post">
                                        <div class="row">
                                            
                                            
                                            
                                            
                                            
                                            
                                                                                   <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <label class="label">Username (or Tag ex: Gamer123)</label>

                                                 
                                                    <input type="text"  class="form-control" name="uid" placeholder="Letters and Numbers only" required>

                                            
                                                </div>  
                                            
                                        </div> 

                                            
                                            
                                            
                                            
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">                     <label class="label">First Name</label>                   
                                                    <input type="text"  class="form-control" name="first" required>

                                                

                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">                    <label class="label">Last Name</label>
                                                    <input type="text"   class="form-control" name="last" required>


                                                 

                                                    
                                                </div>
                                            </div>
                                        </div> 
                                        
                                                    <div class="form-row ">        
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Password</label>

                                                 
                                                    <input type="password"  class="form-control" name="pwd"  required>

                                            
                                                </div>  
                                         
                                        </div> 
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Password Repeat</label>

                                                 
                                                    <input type="password"  class="form-control" name="pwd-repeat"  required>

                                            
                                                 </div>  
                                            
                                         </div> 
                                        </div> 



                                <div class="form-row ">        
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
<label class="label">Lives In</label>
<div id="locationField">
      <input id="autocomplete" 
             onFocus="geolocate()" class="form-control" type="text" placeholder="Where do you live?"></input>
    </div> </div></div>

  <input type="hidden" name="add1" class="form-control"  disabled="true" id="street_number" placeholder="Listing Address 1">
    <input type="hidden" name="add2" class="form-control"   disabled="true" id="route" placeholder="Listing Address 2">
     
    <input type="hidden" name="city" class="form-control"   disabled="true" id="locality" placeholder="Listing City">
    <input type="hidden" name="state" class="form-control"   disabled="true" id="administrative_area_level_1" placeholder="Listing State">
    <input type="hidden" name="country" class="form-control"   id="country" disabled="true" placeholder="Listing Country">
    <input type="hidden" name="zip" class="form-control"   disabled="true" id="postal_code" placeholder="Listing Zipcode">
    
    
                                                   
                                                  <div class="col-12 col-md-6">
                                               
                                                    
                                                <div class="form-group">
                                                    <label class="label">From</label>

                                                 
      <input id="user_from" name="user_from" placeholder="Where are you originally from?"
              class="form-control" type="text"></input>
    
                                                    
   
     <input type="hidden" class="field" name="latitude"
        id="latitude" ></input>
    <input type="hidden" class="field" name="longitude"
        id="longitude"></input>



            </div>    </div>  
                                            
                       
                       
                       
    
                      
</div> 







                                        
                                                <div class="form-row "> 
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Gender</label>
                                                      <select class="form-control custom-select" name="gender">
                                                         
                                                        <option selected>Select</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                         <option value="Other">Other</option>
                                                    </select>  
                                                                                           

                                                </div>
                                            </div>
                                            <div class="col-4 col-md-1 float-left">
                                                <div class="form-row ">
                                                    
                                                        
                                                            <div class="form-group active">   
                                                            <label class="label">Birth Month</label>
                                                               <select class="form-control custom-select" name="bmonth">

 <option selected>Select</option> 

     <option>January</option>      
    <option>February</option>      
    <option>March</option>      
    <option>April</option>      
    <option>May</option>      
    <option>June</option>      
    <option>July</option>      
    <option>August</option>      
    <option>September</option>      
    <option>October</option>      
    <option>November</option>      
    <option>December</option>      
  </select>                                                         
                                                             

                                                                                                           
                                                        
                                                    </div>
                                                </div>                                               
                                            </div>



   <div class="col-4 col-md-1 float-left">
                                                <div class="form-row ">
                                                    
                                                        
                                                            <div class="form-group active">   
                                                            <label class="label">Birth Day</label>
                                                               <select class="form-control custom-select" name="bday">

 <option selected>Select</option> 

     <option>1</option>      
    <option>2</option>      
    <option>3</option>      
    <option>4</option>      
    <option>5</option>      
    <option>6</option>      
    <option>7</option>      
    <option>8</option>      
    <option>9</option>      
    <option>10</option>      
    <option>11</option>      
    <option>12</option>      
    <option>13</option>      
    <option>14</option>      
    <option>15</option>      
    <option>16</option>      
    <option>17</option>      
    <option>18</option>      
    <option>19</option>      
    <option>20</option>      
    <option>21</option>      
    <option>22</option>      
    <option>23</option>      
    <option>24</option>      
    <option>25</option>      
    <option>26</option>      
    <option>27</option>      
    <option>28</option>      
    <option>29</option>      
    <option>30</option>      
    <option>31</option>      
       
  </select>                                                         
                                                             

                                                                                                           
                                                        
                                                    </div>
                                                </div>                                               
                                            </div>
                                            
                                            
                                              <div class="col-4 col-md-1 float-left">
                                                <div class="form-row ">
                                                    
                                                        
                                                            <div class="form-group active">   
                                                            <label class="label">Birth Year *</label>
                                                               <select class="form-control custom-select" name="byear">

 <option selected>Select</option> 


    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
    <option value="1938">1938</option>
    <option value="1937">1937</option>
    <option value="1936">1936</option>
    <option value="1935">1935</option>
    <option value="1934">1934</option>
    <option value="1933">1933</option>
    <option value="1932">1932</option>
    <option value="1931">1931</option>
    <option value="1930">1930</option>
    <option value="1929">1929</option>
    <option value="1928">1928</option>
    <option value="1927">1927</option>
    <option value="1926">1926</option>
    <option value="1925">1925</option>
    <option value="1924">1924</option>
    <option value="1923">1923</option>
    <option value="1922">1922</option>
    <option value="1921">1921</option>
    <option value="1920">1920</option>
    <option value="1919">1919</option>
    <option value="1918">1918</option>
    <option value="1917">1917</option>
    <option value="1916">1916</option>
    <option value="1915">1915</option>
    <option value="1914">1914</option>
    <option value="1913">1913</option>
    <option value="1912">1912</option>
    <option value="1911">1911</option>
    <option value="1910">1910</option>
    <option value="1909">1909</option>
    <option value="1908">1908</option>
    <option value="1907">1907</option>
    <option value="1906">1906</option>
    <option value="1905">1905</option>
       
  </select>                                                         
                                                             

                                                                                                           
                                                        
                                                    </div>
                                                </div>                                               
                                            </div>
                                            
                                            
                                            
                                            
                                            
</div>






                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Email</label>
                                                    <input type="email" class="form-control" name="mailuid"  required>
                                        
                                                   
                                         
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Phone Number</label>
                                                    <input type="text" class="form-control" name="phone"  required>

                                                  
                                                </div>
                                            </div>
                                        </div>   
                                        
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Preferred Language</label>
                                                  
                                                  <select class="form-control custom-select" name="lang">
                                                  
       <option selected>Select</option>                                         <option value="English">English</option>    
  <option value="Afrikanns">Afrikanns</option>
  <option value="Albanian">Albanian</option>
  <option value="Arabic">Arabic</option>
  <option value="Armenian">Armenian</option>
  <option value="Basque">Basque</option>
  <option value="Bengali">Bengali</option>
  <option value="Bulgarian">Bulgarian</option>
  <option value="Catalan">Catalan</option>
  <option value="Cambodian">Cambodian</option>
  <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
  <option value="Croation">Croation</option>
  <option value="Czech">Czech</option>
  <option value="Danish">Danish</option>
  <option value="Dutch">Dutch</option>
  
  <option value="Estonian">Estonian</option>
  <option value="Fiji">Fiji</option>
  <option value="Finnish">Finnish</option>
  <option value="French">French</option>
  <option value="Georgian">Georgian</option>
  <option value="German">German</option>
  <option value="Greek">Greek</option>
  <option value="Gujarati">Gujarati</option>
  <option value="Hebrew">Hebrew</option>
  <option value="Hindi">Hindi</option>
  <option value="Hungarian">Hungarian</option>
  <option value="Icelandic">Icelandic</option>
  <option value="Indonesian">Indonesian</option>
  <option value="Irish">Irish</option>
  <option value="Italian">Italian</option>
  <option value="Japanese">Japanese</option>
  <option value="Javanese">Javanese</option>
  <option value="Korean">Korean</option>
  <option value="Latin">Latin</option>
  <option value="Latvian">Latvian</option>
  <option value="Lithuanian">Lithuanian</option>
  <option value="Macedonian">Macedonian</option>
  <option value="Malay">Malay</option>
  <option value="Malayalam">Malayalam</option>
  <option value="Maltese">Maltese</option>
  <option value="Maori">Maori</option>
  <option value="Marathi">Marathi</option>
  <option value="Mongolian">Mongolian</option>
  <option value="Nepali">Nepali</option>
  <option value="Norwegian">Norwegian</option>
  <option value="Persian">Persian</option>
  <option value="Polish">Polish</option>
  <option value="Portuguese">Portuguese</option>
  <option value="Punjabi">Punjabi</option>
  <option value="Quechua">Quechua</option>
  <option value="Romanian">Romanian</option>
  <option value="Russian">Russian</option>
  <option value="Samoan">Samoan</option>
  <option value="Serbian">Serbian</option>
  <option value="Slovak">Slovak</option>
  <option value="Slovenian">Slovenian</option>
  <option value="Spanish">Spanish</option>
  <option value="Swahili">Swahili</option>
  <option value="Swedish ">Swedish </option>
  <option value="Tamil">Tamil</option>
  <option value="Tatar">Tatar</option>
  <option value="Telugu">Telugu</option>
  <option value="Thai">Thai</option>
  <option value="Tibetan">Tibetan</option>
  <option value="Tonga">Tonga</option>
  <option value="Turkish">Turkish</option>
  <option value="Ukranian">Ukranian</option>
  <option value="Urdu">Urdu</option>
  <option value="Uzbek">Uzbek</option>
  <option value="Vietnamese">Vietnamese</option>
  <option value="Welsh">Welsh</option>
  <option value="Xhosa">Xhosa</option>
</select>
                                                   
                                                  
                                                  
                                                  
                                                  
                                                   
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Preferred Currency</label>

                                                 
                                                    <select class="form-control custom-select" name="currency">








<option selected>Select</option> 
<option value="USD" >United States Dollars</option>
	<option value="EUR">Euro</option>
	<option value="GBP">United Kingdom Pounds</option>
	<option value="DZD">Algeria Dinars</option>
	<option value="ARP">Argentina Pesos</option>
	<option value="AUD">Australia Dollars</option>
	<option value="ATS">Austria Schillings</option>
	<option value="BSD">Bahamas Dollars</option>
	<option value="BBD">Barbados Dollars</option>
	<option value="BEF">Belgium Francs</option>
	<option value="BMD">Bermuda Dollars</option>
	<option value="BRR">Brazil Real</option>
	<option value="BGL">Bulgaria Lev</option>
	<option value="CAD">Canada Dollars</option>
	<option value="CLP">Chile Pesos</option>
	<option value="CNY">China Yuan Renmimbi</option>
	<option value="CYP">Cyprus Pounds</option>
	<option value="CSK">Czech Republic Koruna</option>
	<option value="DKK">Denmark Kroner</option>
	<option value="NLG">Dutch Guilders</option>
	<option value="XCD">Eastern Caribbean Dollars</option>
	<option value="EGP">Egypt Pounds</option>
	<option value="FJD">Fiji Dollars</option>
	<option value="FIM">Finland Markka</option>
	<option value="FRF">France Francs</option>
	<option value="DEM">Germany Deutsche Marks</option>
	<option value="XAU">Gold Ounces</option>
	<option value="GRD">Greece Drachmas</option>
	<option value="HKD">Hong Kong Dollars</option>
	<option value="HUF">Hungary Forint</option>
	<option value="ISK">Iceland Krona</option>
	<option value="INR">India Rupees</option>
	<option value="IDR">Indonesia Rupiah</option>
	<option value="IEP">Ireland Punt</option>
	<option value="ILS">Israel New Shekels</option>
	<option value="ITL">Italy Lira</option>
	<option value="JMD">Jamaica Dollars</option>
	<option value="JPY">Japan Yen</option>
	<option value="JOD">Jordan Dinar</option>
	<option value="KRW">Korea (South) Won</option>
	<option value="LBP">Lebanon Pounds</option>
	<option value="LUF">Luxembourg Francs</option>
	<option value="MYR">Malaysia Ringgit</option>
	<option value="MXP">Mexico Pesos</option>
	<option value="NLG">Netherlands Guilders</option>
	<option value="NZD">New Zealand Dollars</option>
	<option value="NOK">Norway Kroner</option>
	<option value="PKR">Pakistan Rupees</option>
	<option value="XPD">Palladium Ounces</option>
	<option value="PHP">Philippines Pesos</option>
	<option value="XPT">Platinum Ounces</option>
	<option value="PLZ">Poland Zloty</option>
	<option value="PTE">Portugal Escudo</option>
	<option value="ROL">Romania Leu</option>
	<option value="RUR">Russia Rubles</option>
	<option value="SAR">Saudi Arabia Riyal</option>
	<option value="XAG">Silver Ounces</option>
	<option value="SGD">Singapore Dollars</option>
	<option value="SKK">Slovakia Koruna</option>
	<option value="ZAR">South Africa Rand</option>
	<option value="KRW">South Korea Won</option>
	<option value="ESP">Spain Pesetas</option>
	<option value="XDR">Special Drawing Right (IMF)</option>
	<option value="SDD">Sudan Dinar</option>
	<option value="SEK">Sweden Krona</option>
	<option value="CHF">Switzerland Francs</option>
	<option value="TWD">Taiwan Dollars</option>
	<option value="THB">Thailand Baht</option>
	<option value="TTD">Trinidad and Tobago Dollars</option>
	<option value="TRL">Turkey Lira</option>
	<option value="VEB">Venezuela Bolivar</option>
	<option value="ZMK">Zambia Kwacha</option>
	<option value="EUR">Euro</option>
	<option value="XCD">Eastern Caribbean Dollars</option>
	<option value="XDR">Special Drawing Right (IMF)</option>
	<option value="XAG">Silver Ounces</option>
	<option value="XAU">Gold Ounces</option>
	<option value="XPD">Palladium Ounces</option>
<option value="XPT">Platinum Ounces</option>
  </select>                                          
                                                </div>  
                                            </div>
                                        </div> 
                                        
                                        
                                        
                                        
                                        
                                        
                              
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                       
                                        <div class="row justify-content-md-end">
                                            <div class="col-12 col-lg-6 text-lg-right">
                                                <button type="submit" class="text-white btn btn-send" name="signup-submit">Save</button>
                                               
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                                
                            </div>
                            
                        </div>
                         <p class="text-center">*Due to <a href="https://www.ftc.gov/tips-advice/business-center/privacy-and-security/children%27s-privacy">COPPA requirements</a>, registration is currently limited to users 13 years of age or older. <br>However, you will <strong>NOT</strong> have to create an account to play games  or videos.<br>We will be working on a solution in the future to meet these requirements.</p>
                    </div>                    
                </div> 
            </div>  
  <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
         for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
        $lat = place.geometry.location.lat();
          document.getElementById('latitude').value = $lat;
          
          $lng = place.geometry.location.lng();
document.getElementById('longitude').value =  $lng;

      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFt-aPTyRNNhRmcczr344JpDllcSXffLk&libraries=places&callback=initAutocomplete"
        async defer></script>
        </main> <!-- Main content  : end -->


 <?php
       include_once 'includes/footer-auto.php';
    ?>
