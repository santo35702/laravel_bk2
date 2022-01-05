<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width">Your cart</h1></div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="container">
        <div class="row">
            @if (Cart::instance('cart')->count() > 0)
                @if (session('status'))
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                    <div class="alert alert-success text-uppercase" role="alert">
                        <i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Congratulations!</strong> {{ session('status') }}
                    </div>
                </div>
                @endif
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                    <form action="#" method="post" class="cart style2">
                        <table class="table table-bordered table-hover table-striped">
                            <thead class="cart__row cart__header thead-dark">
                                <tr>
                                    <th colspan="2" class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Total</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Cart::instance('cart')->content() as $key)
                                    <tr class="cart__row border-bottom line1 cart-flex border-top">
                                        <td class="cart__image-wrapper cart-flex-item">
                                            <a href="{{ route('products.details', $key->model->slug) }}">
                                                <img class="cart__image" src="{{ asset('assets/images/product-images/'. $key->model->image) }}" alt="{{ $key->model->title }}">
                                            </a>
                                        </td>
                                        <td class="cart__meta small--text-left cart-flex-item">
                                            <div class="list-view-item__title text-capitalize">
                                                <a href="{{ route('products.details', $key->model->slug) }}">{{ $key->model->title }}</a>
                                            </div>

                                            <div class="cart__meta-text">
                                                Color: Navy<br>Size: Small<br>
                                            </div>
                                        </td>
                                        <td class="cart__price-wrapper cart-flex-item">
                                            <span class="money">${{ $key->model->regular_price }}</span>
                                        </td>
                                        <td class="cart__update-wrapper cart-flex-item text-right">
                                            <div class="cart__qty text-center">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                                                    <input class="cart__qty-input qty" type="text" name="updates[]" id="qty" value="1" pattern="[0-9]*">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right small--hide cart-price">
                                            <div><span class="money">${{ $key->subtotal }}</span></div>
                                        </td>
                                        <td class="text-center small--hide"><a href="#" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="{{ route('products.index') }}" class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continue shopping</a></td>
                                    <td colspan="1" class="text-right"><button type="button" name="update" class="btn--link cart-update"><i class="fa fa-refresh"></i> Update</button></td>
                                    <td colspan="2" class="text-right"><button type="submit" name="update" class="btn--link cart-update"><i class="fa fa-trash"></i> Delete All</button></td>
                                </tr>
                            </tfoot>
                        </table>

                        <div class="currencymsg">We processes all orders in USD. While the content of your cart is currently displayed in USD, the checkout will use USD at the most current exchange rate.</div>
                        <hr>
                        <div id="shipping-calculator" class="mb-4">
                            <h5 class="small--text-center">Get shipping estimates</h5>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="address_country">Country</label>
                                        <select id="address_country" name="address[country]" data-default="United States"><option value="Belgium" data-provinces="[]">Belgium</option>
                                            <option value="---" data-provinces="[]">---</option>
                                            <option value="Afghanistan" data-provinces="[]">Afghanistan</option>
                                            <option value="Aland Islands" data-provinces="[]">Åland Islands</option>
                                            <option value="Albania" data-provinces="[]">Albania</option>
                                            <option value="Algeria" data-provinces="[]">Algeria</option>
                                            <option value="Andorra" data-provinces="[]">Andorra</option>
                                            <option value="Angola" data-provinces="[]">Angola</option>
                                            <option value="Anguilla" data-provinces="[]">Anguilla</option>
                                            <option value="Antigua And Barbuda" data-provinces="[]">Antigua &amp; Barbuda</option>
                                            <option value="Armenia" data-provinces="[]">Armenia</option>
                                            <option value="Aruba" data-provinces="[]">Aruba</option>
                                            <option value="Austria" data-provinces="[]">Austria</option>
                                            <option value="Azerbaijan" data-provinces="[]">Azerbaijan</option>
                                            <option value="Bahamas" data-provinces="[]">Bahamas</option>
                                            <option value="Bahrain" data-provinces="[]">Bahrain</option>
                                            <option value="Bangladesh" data-provinces="[]">Bangladesh</option>
                                            <option value="Barbados" data-provinces="[]">Barbados</option>
                                            <option value="Belarus" data-provinces="[]">Belarus</option>
                                            <option value="Belgium" data-provinces="[]">Belgium</option>
                                            <option value="Belize" data-provinces="[]">Belize</option>
                                            <option value="Benin" data-provinces="[]">Benin</option>
                                            <option value="Bermuda" data-provinces="[]">Bermuda</option>
                                            <option value="Bhutan" data-provinces="[]">Bhutan</option>
                                            <option value="Bolivia" data-provinces="[]">Bolivia</option>
                                            <option value="Bosnia And Herzegovina" data-provinces="[]">Bosnia &amp; Herzegovina</option>
                                            <option value="Botswana" data-provinces="[]">Botswana</option>
                                            <option value="Bouvet Island" data-provinces="[]">Bouvet Island</option>
                                            <option value="British Indian Ocean Territory" data-provinces="[]">British Indian Ocean Territory</option>
                                            <option value="Virgin Islands, British" data-provinces="[]">British Virgin Islands</option>
                                            <option value="Brunei" data-provinces="[]">Brunei</option>
                                            <option value="Bulgaria" data-provinces="[]">Bulgaria</option>
                                            <option value="Burkina Faso" data-provinces="[]">Burkina Faso</option>
                                            <option value="Burundi" data-provinces="[]">Burundi</option>
                                            <option value="Cambodia" data-provinces="[]">Cambodia</option>
                                            <option value="Republic of Cameroon" data-provinces="[]">Cameroon</option>
                                            <option value="Cape Verde" data-provinces="[]">Cape Verde</option>
                                            <option value="Bonaire, Sint Eustatius and Saba" data-provinces="[]">Caribbean Netherlands</option>
                                            <option value="Cayman Islands" data-provinces="[]">Cayman Islands</option>
                                            <option value="Central African Republic" data-provinces="[]">Central African Republic</option>
                                            <option value="Chad" data-provinces="[]">Chad</option>
                                            <option value="Chile" data-provinces="[]">Chile</option>
                                            <option value="Comoros" data-provinces="[]">Comoros</option>
                                            <option value="Congo" data-provinces="[]">Congo - Brazzaville</option>
                                            <option value="Congo, The Democratic Republic Of The" data-provinces="[]">Congo - Kinshasa</option>
                                            <option value="Cook Islands" data-provinces="[]">Cook Islands</option>
                                            <option value="Costa Rica" data-provinces="[]">Costa Rica</option>
                                            <option value="Croatia" data-provinces="[]">Croatia</option>
                                            <option value="Cuba" data-provinces="[]">Cuba</option>
                                            <option value="Curaçao" data-provinces="[]">Curaçao</option>
                                            <option value="Cyprus" data-provinces="[]">Cyprus</option>
                                            <option value="Czech Republic" data-provinces="[]">Czech Republic</option>
                                            <option value="Côte d'Ivoire" data-provinces="[]">Côte d'Ivoire</option>
                                            <option value="Denmark" data-provinces="[]">Denmark</option>
                                            <option value="Djibouti" data-provinces="[]">Djibouti</option>
                                            <option value="Dominica" data-provinces="[]">Dominica</option>
                                            <option value="Dominican Republic" data-provinces="[]">Dominican Republic</option>
                                            <option value="Finland" data-provinces="[]">Finland</option>
                                            <option value="France" data-provinces="[]">France</option>
                                            <option value="French Guiana" data-provinces="[]">French Guiana</option>
                                            <option value="French Polynesia" data-provinces="[]">French Polynesia</option>
                                            <option value="French Southern Territories" data-provinces="[]">French Southern Territories</option>
                                            <option value="Gabon" data-provinces="[]">Gabon</option>
                                            <option value="Gambia" data-provinces="[]">Gambia</option>
                                            <option value="Georgia" data-provinces="[]">Georgia</option>
                                            <option value="Germany" data-provinces="[]">Germany</option>
                                            <option value="Ghana" data-provinces="[]">Ghana</option>
                                            <option value="Gibraltar" data-provinces="[]">Gibraltar</option>
                                            <option value="Greece" data-provinces="[]">Greece</option>
                                            <option value="Greenland" data-provinces="[]">Greenland</option>
                                            <option value="Jersey" data-provinces="[]">Jersey</option>
                                            <option value="Jordan" data-provinces="[]">Jordan</option>
                                            <option value="Kazakhstan" data-provinces="[]">Kazakhstan</option>
                                            <option value="Kenya" data-provinces="[]">Kenya</option>
                                            <option value="Kiribati" data-provinces="[]">Kiribati</option>
                                            <option value="Kosovo" data-provinces="[]">Kosovo</option>
                                            <option value="Kuwait" data-provinces="[]">Kuwait</option>
                                            <option value="Kyrgyzstan" data-provinces="[]">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic" data-provinces="[]">Laos</option>
                                            <option value="Latvia" data-provinces="[]">Latvia</option>
                                            <option value="Lebanon" data-provinces="[]">Lebanon</option>
                                            <option value="Lesotho" data-provinces="[]">Lesotho</option>
                                            <option value="Liberia" data-provinces="[]">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya" data-provinces="[]">Libya</option>
                                            <option value="Liechtenstein" data-provinces="[]">Liechtenstein</option>
                                            <option value="Lithuania" data-provinces="[]">Lithuania</option>
                                            <option value="Luxembourg" data-provinces="[]">Luxembourg</option>
                                            <option value="Macao" data-provinces="[]">Macau SAR China</option>
                                            <option value="Macedonia, Republic Of" data-provinces="[]">Macedonia</option>
                                            <option value="Madagascar" data-provinces="[]">Madagascar</option>
                                            <option value="Malawi" data-provinces="[]">Malawi</option>
                                            <option value="Monaco" data-provinces="[]">Monaco</option>
                                            <option value="Mongolia" data-provinces="[]">Mongolia</option>
                                            <option value="Montenegro" data-provinces="[]">Montenegro</option>
                                            <option value="Montserrat" data-provinces="[]">Montserrat</option>
                                            <option value="Morocco" data-provinces="[]">Morocco</option>
                                            <option value="Mozambique" data-provinces="[]">Mozambique</option>
                                            <option value="Myanmar" data-provinces="[]">Myanmar (Burma)</option>
                                            <option value="Namibia" data-provinces="[]">Namibia</option>
                                            <option value="Nauru" data-provinces="[]">Nauru</option>
                                            <option value="Nepal" data-provinces="[]">Nepal</option>
                                            <option value="Netherlands" data-provinces="[]">Netherlands</option>
                                            <option value="Samoa" data-provinces="[]">Samoa</option>
                                            <option value="San Marino" data-provinces="[]">San Marino</option>
                                            <option value="Sao Tome And Principe" data-provinces="[]">São Tomé &amp; Príncipe</option>
                                            <option value="Saudi Arabia" data-provinces="[]">Saudi Arabia</option>
                                            <option value="Senegal" data-provinces="[]">Senegal</option>
                                            <option value="Serbia" data-provinces="[]">Serbia</option>
                                            <option value="Seychelles" data-provinces="[]">Seychelles</option>
                                            <option value="Sierra Leone" data-provinces="[]">Sierra Leone</option>
                                            <option value="Singapore" data-provinces="[]">Singapore</option>
                                            <option value="Sint Maarten" data-provinces="[]">Sint Marteen</option>
                                            <option value="Slovakia" data-provinces="[]">Slovakia</option>
                                            <option value="Slovenia" data-provinces="[]">Slovenia</option>
                                            <option value="Solomon Islands" data-provinces="[]">Solomon Islands</option>
                                            <option value="Sri Lanka" data-provinces="[]">Sri Lanka</option>
                                            <option value="Saint Barthélemy" data-provinces="[]">St. Barthélemy</option>
                                            <option value="Saint Helena" data-provinces="[]">St. Helena</option>
                                            <option value="Saint Kitts And Nevis" data-provinces="[]">St. Kitts &amp; Nevis</option>
                                            <option value="Saint Lucia" data-provinces="[]">St. Lucia</option>
                                            <option value="Saint Martin" data-provinces="[]">St. Martin</option>
                                            <option value="Saint Pierre And Miquelon" data-provinces="[]">St. Pierre &amp; Miquelon</option>
                                            <option value="St. Vincent" data-provinces="[]">St. Vincent &amp; Grenadines</option>
                                            <option value="Sudan" data-provinces="[]">Sudan</option>
                                            <option value="Suriname" data-provinces="[]">Suriname</option>
                                            <option value="Svalbard And Jan Mayen" data-provinces="[]">Svalbard &amp; Jan Mayen</option>
                                            <option value="Swaziland" data-provinces="[]">Swaziland</option>
                                            <option value="Sweden" data-provinces="[]">Sweden</option>
                                            <option value="Switzerland" data-provinces="[]">Switzerland</option>
                                            <option value="Syria" data-provinces="[]">Syria</option>
                                            <option value="Taiwan" data-provinces="[]">Taiwan</option>
                                            <option value="Tajikistan" data-provinces="[]">Tajikistan</option>
                                            <option value="Timor Leste" data-provinces="[]">Timor-Leste</option>
                                            <option value="Togo" data-provinces="[]">Togo</option>
                                            <option value="Tokelau" data-provinces="[]">Tokelau</option>
                                            <option value="Tonga" data-provinces="[]">Tonga</option>
                                            <option value="Trinidad and Tobago" data-provinces="[]">Trinidad &amp; Tobago</option>
                                            <option value="Tunisia" data-provinces="[]">Tunisia</option>
                                            <option value="Turkey" data-provinces="[]">Turkey</option>
                                            <option value="Turkmenistan" data-provinces="[]">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands" data-provinces="[]">Turks &amp; Caicos Islands</option>
                                            <option value="Tuvalu" data-provinces="[]">Tuvalu</option>
                                            <option value="United States Minor Outlying Islands" data-provinces="[]">U.S. Outlying Islands</option>
                                            <option value="Uganda" data-provinces="[]">Uganda</option>
                                            <option value="Ukraine" data-provinces="[]">Ukraine</option>
                                            <option value="United Arab Emirates" >United Arab Emirates</option>
                                            <option value="United Kingdom" data-provinces="[]">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="Uruguay" data-provinces="[]">Uruguay</option>
                                            <option value="Uzbekistan" data-provinces="[]">Uzbekistan</option>
                                            <option value="Vanuatu" data-provinces="[]">Vanuatu</option>
                                            <option value="Holy See (Vatican City State)" data-provinces="[]">Vatican City</option>
                                            <option value="Venezuela" data-provinces="[]">Venezuela</option>
                                            <option value="Vietnam" data-provinces="[]">Vietnam</option>
                                            <option value="Wallis And Futuna" data-provinces="[]">Wallis &amp; Futuna</option>
                                            <option value="Western Sahara" data-provinces="[]">Western Sahara</option>
                                            <option value="Yemen" data-provinces="[]">Yemen</option>
                                            <option value="Zambia" data-provinces="[]">Zambia</option>
                                            <option value="Zimbabwe" data-provinces="[]">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select id="address_province" name="address[province]" data-default="">
                                            <option value="Alabama">Alabama</option>
                                            <option value="Alaska">Alaska</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Arizona">Arizona</option>
                                            <option value="Arkansas">Arkansas</option>
                                            <option value="California">California</option>
                                            <option value="Colorado">Colorado</option>
                                            <option value="Connecticut">Connecticut</option>
                                            <option value="Delaware">Delaware</option>
                                            <option value="District of Columbia">District of Columbia</option>
                                            <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                                            <option value="Florida">Florida</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Idaho">Idaho</option>
                                            <option value="Illinois">Illinois</option>
                                            <option value="Indiana">Indiana</option>
                                            <option value="Iowa">Iowa</option>
                                            <option value="Kansas">Kansas</option>
                                            <option value="Kentucky">Kentucky</option>
                                            <option value="Louisiana">Louisiana</option>
                                            <option value="Maine">Maine</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Maryland">Maryland</option>
                                            <option value="Massachusetts">Massachusetts</option>
                                            <option value="Michigan">Michigan</option>
                                            <option value="Minnesota">Minnesota</option>
                                            <option value="Mississippi">Mississippi</option>
                                            <option value="Missouri">Missouri</option>
                                            <option value="Montana">Montana</option>
                                            <option value="Nebraska">Nebraska</option>
                                            <option value="Nevada">Nevada</option>
                                            <option value="New Hampshire">New Hampshire</option>
                                            <option value="New Jersey">New Jersey</option>
                                            <option value="New Mexico">New Mexico</option>
                                            <option value="New York">New York</option>
                                            <option value="North Carolina">North Carolina</option>
                                            <option value="North Dakota">North Dakota</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Ohio">Ohio</option>
                                            <option value="Oklahoma">Oklahoma</option>
                                            <option value="Oregon">Oregon</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Pennsylvania">Pennsylvania</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Rhode Island">Rhode Island</option>
                                            <option value="South Carolina">South Carolina</option>
                                            <option value="South Dakota">South Dakota</option>
                                            <option value="Tennessee">Tennessee</option>
                                            <option value="Texas">Texas</option>
                                            <option value="Utah">Utah</option>
                                            <option value="Vermont">Vermont</option>
                                            <option value="Virgin Islands">Virgin Islands</option>
                                            <option value="Virginia">Virginia</option>
                                            <option value="Washington">Washington</option>
                                            <option value="West Virginia">West Virginia</option>
                                            <option value="Wisconsin">Wisconsin</option>
                                            <option value="Wyoming">Wyoming</option>
                                            <option value="Armed Forces Americas">Armed Forces Americas</option>
                                            <option value="Armed Forces Europe">Armed Forces Europe</option>
                                            <option value="Armed Forces Pacific">Armed Forces Pacific</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="address_zip">Postal/Zip Code</label>
                                        <input type="text" id="address_zip" name="address[zip]">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 actionRow text-center">
                                    <div><input type="button" class="btn btn--secondary get-rates" value="Calculate shipping"></div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                    <div class="cart-note">
                        <div class="solid-border">
                            <h5><label for="CartSpecialInstructions" class="cart-note__label small--text-center">Add a note to your order</label></h5>
                            <textarea name="note" id="CartSpecialInstructions" class="cart-note__input"></textarea>
                        </div>
                    </div>
                    <div class="solid-border">
                        <div class="row">
                            <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                            <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">$735.00</span></span>
                        </div>
                        <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                        <p class="cart_tearm">
                            <label>
                                <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm" required="">
                                I agree with the terms and conditions
                            </label>
                        </p>
                        <input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Checkout" disabled="disabled">
                        <div class="paymnet-img"><img src="{{ asset('assets/images/payment-img.jpg') }}" alt="Payment"></div>
                    </div>
                </div>
            @else
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                    <div class="jumbotron d-flex justify-content-between">
                        <div>
                            <h1 class="display-4">Sorry...!!</h1>
                            <p class="lead">You have no product added in your Cart.</p>
                            <hr class="my-4">
                            <p>You can buy our awesome Product.</p>
                            <a class="btn btn-primary btn-lg" href="{{ route('products.index') }}" role="button">Click here</a>
                        </div>
                        <img src="{{ asset('assets/images/cart.png')}}" alt="Cart logo">
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
