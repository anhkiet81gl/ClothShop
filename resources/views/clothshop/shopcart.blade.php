<x-master>
    <!-- Page Breadcrumb -->
	<!-- container -->
	<div class="container">
		<div class="page-breadcrumb">
			<ol class="breadcrumb">
				<li><a title="Home" href="#">Home</a></li>
				<li class="active">Shopping Cart</li>
			</ol>
			<div class="return-home-link pull-right">
				<a title="Return to home page" href="index.html">return to home page</a>
			</div>
		</div>
		<div class="page-header bottom-shadow">
			<h3>Giỏ hàng</h3>
			<!-- <p>5 Products Selected</p> -->
		</div><!-- Section Header /- -->
	</div><!-- container /- -->
	<!-- Page Breadcrumb /- -->
	
	<div class="page-wizard shopping-cart shopping-product-table">
		<!-- container -->
		<div class="container">
			<!-- Shopping-cart-table -->
			<div class="shopping-cart-table bottom-shadow">
				<table class="shop_table cart">
					<thead>
						<tr>
							<th class="product-name">Sản phẩm</th>
							<th class="product-description">Thông tin</th>
							<th class="product-brand">Hãng</th>
							<th class="product-color">Màu</th>							
							<th class="product-size">Kích thước</th>
							<th class="blank-space"></th>
							<th class="product-price">Giá</th>
							<th class="product-quantity">Số lượng</th>
							<th class="product-subtotal">Tổng</th>
							<th class="product-change">Sửa / Xóa</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="#"><img src="images/summary/summary-1.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Groom Style</b>
									Order No. 10101987 - 26
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><img src="images/summary/gucci-icon.png" alt="gucci" /></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color color1"></span>
							</td>							
							<td data-title="Size" class="product-size">
								<span class="choose-size">xs</span>
							</td>
							<td data-title="" class="blank-space"></td>
							<td data-title="Price" class="product-price">
								<span class="price-amount">&euro;3,200.00</span>
							</td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									<input type="button" value="+" id="qtyplus-1" class="qtyplus" data-field="quantity1" />
									<input type="text" name="quantity1" value="0" class="qty" />
									<input type="button" value="-" class="qtyminus" data-field="quantity1" />
								</div>
							</td>
							<td data-title="subtotal" class="product-subtotal">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="edit/delete" class="product-edit">
								<a title="Pencil Icon" href="#"><span class="product-edit"><i class="fa fa-pencil-square-o"></i></span></a>
								<a title="Trash Icon" href="#"><span class="product-delete"><i class="fa fa-trash-o"></i></span></a>
							</td>
						</tr>	
						
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="#"><img src="images/summary/summary-2.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Sed ligula magna facilisis.</b>
									Order No. 10101988 - 25
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><img src="images/summary/gucci-icon.png" alt="gucci" /></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color"></span>
							</td>							
							<td data-title="Size" class="product-size">
								<span class="choose-size">L</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Price" class="product-price">
								<span class="price-amount">&euro;3,200.00</span>
							</td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									<input type="button" value="+" class="qtyplus" data-field="quantity2" />
									<input type="text" name="quantity2" value="0" class="qty" />
									<input type="button" value="-" class="qtyminus" data-field="quantity2" />
								</div>
							</td>	
							<td data-title="subtotal" class="product-subtotal">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="edit/delete" class="product-edit">
								<a title="Pencil Icon" href="#"><span class="product-edit"><i class="fa fa-pencil-square-o"></i></span></a>
								<a title="Trash Icon" href="#"><span class="product-delete"><i class="fa fa-trash-o"></i></span></a>
							</td>
						</tr>
						
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="#"><img src="images/summary/summary-3.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a href="#">
									<b>Vehicula vitae magna.</b>
									Order No. 10101989 - 24
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><img src="images/summary/gucci-icon.png" alt="gucci" /></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color color1"></span>
							</td>							
							<td data-title="Size" class="product-size">
								<span class="choose-size color3">M</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Price" class="product-price">
								<span class="price-amount">&euro;3,200.00</span>
							</td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									<input type="button" value="+" class="qtyplus" data-field="quantity3" />
									<input type="text" name="quantity3" value="0" class="qty" />
									<input type="button" value="-" class="qtyminus" data-field="quantity3" />
								</div>
							</td>	
							<td data-title="subtotal" class="product-subtotal">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="edit/delete" class="product-edit">
								<a title="Pencil Icon" href="#"><span class="product-edit"><i class="fa fa-pencil-square-o"></i></span></a>
								<a title="Trash Icon" href="#"><span class="product-delete"><i class="fa fa-trash-o"></i></span></a>
							</td>
						</tr>
						
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="#"><img src="images/summary/summary-4.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Commodo a ipsum non.</b>
									Order No. 10101990 - 23
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><img src="images/summary/gucci-icon.png" alt="gucci" /></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color"></span>
							</td>							
							<td data-title="Size" class="product-size">
								<span class="choose-size">S</span>
							</td>
							<td class="blank-space"></td>
							<td data-title="Price" class="product-price">
								<span class="price-amount">&euro;3,200.00</span>
							</td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									<input type="button" value="+" class="qtyplus" data-field="quantity4" />
									<input type="text" name="quantity4" value="0" class="qty" />
									<input type="button" value="-" class="qtyminus" data-field="quantity4" />
								</div>
							</td>	
							<td data-title="subtotal" class="product-subtotal">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="edit/delete" class="product-edit">
								<a title="Pencil Icon" href="#"><span class="product-edit"><i class="fa fa-pencil-square-o"></i></span></a>
								<a title="Trash Icon" href="#"><span class="product-delete"><i class="fa fa-trash-o"></i></span></a>
							</td>
						</tr>
						
						<tr>
							<td data-title="Product" class="product-tdumbnail">
								<a title="Summary" href="#"><img src="images/summary/summary-5.png" alt="summary"/></a>
							</td>
							<td data-title="Description" class="product-description">
								<a title="Order No" href="#">
									<b>Vivamus placerat convis.</b>
									Order No. 10101991 - 22
								</a>
							</td>
							<td data-title="brand" class="product-brand">
								<span><img src="images/summary/gucci-icon.png" alt="gucci" /></span>
							</td>
							<td data-title="Color" class="product-color">
								<span class="choose-color color2"></span>
							</td>							
							<td data-title="Size" class="product-size">
								
							</td>
							<td class="blank-space"></td>
							<td data-title="Price" class="product-price">
								<span class="price-amount">&euro;3,200.00</span>
							</td>
							<td data-title="Quantity" class="product-quantity">
								<div class="quantity">
									<input type="button" value="+" class="qtyplus" data-field="quantity5" />
									<input type="text" name="quantity5" value="0" class="qty" />
									<input type="button" value="-" class="qtyminus" data-field="quantity5" />
								</div>
							</td>	
							<td data-title="subtotal" class="product-subtotal">
								<span class="amount">&dollar; 19.99</span>
							</td>
							<td data-title="edit/delete" class="product-edit">
								<a title="Pencil Icon" href="#"><span class="product-edit"><i class="fa fa-pencil-square-o"></i></span></a>
								<a title="Trash Icon" href="#"><span class="product-delete"><i class="fa fa-trash-o"></i></span></a>
							</td>
						</tr>
					</tbody>
				</table>				
				<div class="shopping-cart-footer">
					<a title="Continue Shopping" href="#" class="btn btn-default">Tiếp tục mua sắm</a>
					<a title="Update Shopping Cart" href="#" class="btn btn-default">Cập nhập giỏ hàng</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Cart estimate -->
	<div class="shopping-cart-estimate">
		<!-- container -->
		<div class="container">
			<div class="row">
				<!-- col-md-4 -->
				<div class="col-md-4 col-sm-6">
					<!-- Section Header -->
					<div class="section-header">
						<h3>Địa chỉ giao hàng</h3>
					</div><!-- Section Header /- -->
					<div class="estimate-details shopping-cart-table">
						<h4>Địa chỉ và số điện thoại</h4>
						<form>
							<div class="form-group">
								<select class="form-control minimal">
									<option selected="selected" value="">Quận....</option>
									<option value="Afghanistan">Afghanistan</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Anguilla</option>
									<option value="Antarctica">Antarctica</option>
									<option value="Antigua and Barbuda">Antigua and Barbuda</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Aruba">Aruba</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bermuda">Bermuda</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia">Bolivia</option>
									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Bouvet Island">Bouvet Island</option>
									<option value="Brazil">Brazil</option>
									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
									<option value="Brunei Darussalam">Brunei Darussalam</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Burkina Faso">Burkina Faso</option>
									<option value="Burundi">Burundi</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option>
									<option value="Cape Verde">Cape Verde</option>
									<option value="Cayman Islands">Cayman Islands</option>
									<option value="Central African Republic">Central African Republic</option>
									<option value="Chad">Chad</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Christmas Island">Christmas Island</option>
									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo">Congo</option>
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Cote D'Ivoire">Cote D'Ivoire</option>
									<option value="Croatia">Croatia</option>
									<option value="Cuba">Cuba</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option>
									<option value="Dominican Republic">Dominican Republic</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="French Guiana">French Guiana</option>
									<option value="French Polynesia">French Polynesia</option>
									<option value="French Southern Territories">French Southern Territories</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia">Gambia</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Gibraltar">Gibraltar</option>
									<option value="Greece">Greece</option>
									<option value="Greenland">Greenland</option>
									<option value="Grenada">Grenada</option>
									<option value="Guadeloupe">Guadeloupe</option>
									<option value="Guam">Guam</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guinea">Guinea</option>
									<option value="Guinea-Bissau">Guinea-Bissau</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
									<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong">Hong Kong</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="India">India</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Korea, Republic of">Korea, Republic of</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>									
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macao">Macao</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malawi">Malawi</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Marshall Islands">Marshall Islands</option>
									<option value="Martinique">Martinique</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mayotte">Mayotte</option>
									<option value="Mexico">Mexico</option>								
									<option value="Moldova, Republic of">Moldova, Republic of</option>
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar">Myanmar</option>
									<option value="Namibia">Namibia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
									<option value="Netherlands Antilles">Netherlands Antilles</option>
									<option value="New Caledonia">New Caledonia</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Nicaragua">Nicaragua</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Niue">Niue</option>
									<option value="Norfolk Island">Norfolk Island</option>
									<option value="Northern Mariana Islands">Northern Mariana Islands</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau">Palau</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Philippines">Philippines</option>
									<option value="Pitcairn">Pitcairn</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Reunion">Reunion</option>
									<option value="Romania">Romania</option>
									<option value="Russian Federation">Russian Federation</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Saint Helena">Saint Helena</option>
									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									<option value="Saint Lucia">Saint Lucia</option>									
									<option value="Samoa">Samoa</option>
									<option value="San Marino">San Marino</option>
									<option value="Sao Tome and Principe">Sao Tome and Principe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
									<option value="Serbia and Montenegro">Serbia and Montenegro</option>
									<option value="Seychelles">Seychelles</option>
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Slovakia">Slovakia</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Solomon Islands">Solomon Islands</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Syrian Arab Republic">Syrian Arab Republic</option>
									<option value="Taiwan, Province of China">Taiwan, Province of China</option>
									<option value="Tajikistan">Tajikistan</option>
									<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
									<option value="Thailand">Thailand</option>
									<option value="Timor-Leste">Timor-Leste</option>
									<option value="Togo">Togo</option>
									<option value="Tokelau">Tokelau</option>
									<option value="Tonga">Tonga</option>
									<option value="Trinidad and Tobago">Trinidad and Tobago</option>
									<option value="Tunisia">Tunisia</option>
									<option value="Turkey">Turkey</option>
									<option value="Turkmenistan">Turkmenistan</option>
									<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
									<option value="Tuvalu">Tuvalu</option>
									<option value="Uganda">Uganda</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Emirates">United Arab Emirates</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="United States">United States</option>
									<option value="Uruguay">Uruguay</option>
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Vanuatu">Vanuatu</option>
									<option value="Venezuela">Venezuela</option>
									<option value="Viet Nam">Viet Nam</option>
									<option value="Virgin Islands, British">Virgin Islands, British</option>
									<option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
									<option value="Wallis and Futuna">Wallis and Futuna</option>
									<option value="Western Sahara">Western Sahara</option>
									<option value="Yemen">Yemen</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>
								</select> 
							</div>
							<div class="form-group">
								<select class="form-control minimal">
									<option value="default">Phường...</option>
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
							<div class="form-group">
								<input type="text" name="zip" class="form-control" placeholder="Số nhà và tên đường">
							</div>
							<div class="form-group">
								<input type="text" name="phonenumber" class="form-control" placeholder="Số điện thoại">
							</div>
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Tên người nhận">
							</div>
						</form>
					</div>
				</div><!-- col-md-4 /- -->
				<!-- col-md-4 -->
				<div class="col-md-4 col-sm-6">
					<!-- section-header -->
					<div class="section-header">
						<h3>Mã giảm giá</h3>
					</div><!-- Section Header /- -->
					<div class="estimate-details shopping-cart-table coupon">
						<h4>Nhập mã giảm giá (nếu có)</h4>
						<form>
							<div class="form-group">
								<input type="text" name="" class="form-control" placeholder="">
								<input type="submit" value="Kiểm tra" class="btn">	
							</div>
						</form>
					</div>
				</div><!-- col-md-4 /- -->
				<!-- col-md-4 -->
				<div class="col-md-4 col-sm-6">
					<div class="estimate-details shopping-cart-table">
						<table>
							<tbody>
								<tr class="cart-subtotal">
									<th>Tổng sản phẩm</th>
									<td><span class="amount">&dollar;99.95</span></td>
								</tr>
								<tr class="order-total">
									<th>Tổng giá</th>
									<td><strong><span class="total-amount">99.95</span></strong> </td>
								</tr>
							</tbody>
						</table>
						<button type="submit" class="btn btn-default">Xác nhận đơn hàng</button>
					</div>
				</div><!-- col-md-4 /- -->
			</div>
		</div>
	</div><!-- Cart estimate -->

</x-master>