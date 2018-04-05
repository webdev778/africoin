@extends('layouts.dashboard')
@section('title', 'Purchase Coin')
@section('content')
<h1 class="hidden-print">Purchase AFRICOINs</h1>
<hr class="hidden-print"/>

<div class="row">
    <div class="col-md-12">    
			
		<div class="well well-sm hidden-print">
			<h4>Please purchase AFRICOINs with your preferred payment method.</h4>
		</div>
		
		<div id="rootwizard-2" class="form-wizard">
			
			<div class="steps-progress">
				<div class="progress-indicator"></div>
			</div>
			
			<ul class="hidden-print">
				<li class="active">
					<a href="#tab2-1" data-toggle="tab"><span>1</span>Retailer</a>
				</li>
				<li>
					<a href="#tab2-2" data-toggle="tab"><span>2</span>Scan & Discount</a>
				</li>
				<li>
					<a href="#tab2-3" data-toggle="tab"><span>3</span>Contract</a>
				</li>
				{{--  <li>
					<a href="#tab2-4" data-toggle="tab"><span>4</span>Invoice</a>
				</li>				  --}}
			</ul>
			
			<div class="tab-content">
				<div class="tab-pane active" id="tab2-1">
					
					<div class="row">
											
						<div class="col-md-offset-3 col-md-6">
							<div class="form-group">
								<label class="control-label">Select a retailer to send coins.</label>

								<select id="select2_retailer" name="select2_retailer" class="select2" data-allow-clear="true" data-placeholder="Select one retailer...">
									<option></option>
									<optgroup label="South Africa">
										@foreach ($retailers as $retailer)
									<option value="{{$retailer->id}}" data-logo-attribute="{{ asset('storage/'.$retailer->logo_file) }}">{{$retailer->name}}</option>
										@endforeach
									</optgroup>
								</select>

							</div>
						</div>
					</div>

					<div class="row">															
						<div class="col-md-4">
							<div class="panel panel-gradient" data-collapsed="0"> 
								<!-- panel head --> 
								<div class="panel-heading"> 
									<div class="panel-title">Info</div> 
								</div>
								<!-- panel body --> 
								<div class="panel-body">
									<p>Would you like to make a new contract with the company below? </p>
									<span style="display:flex">
									<img id="retailer_logo" src="http://placehold.it/200x150"  alt="...">
									<div class="retailer_breif" style="margin-left:20px">
										<h3> Checkers </h2>
										<p> Last Contract : 2018.03.25 </p>
										<p> Deployed : 35,000 AFT </p>				
									</div>
									</span>
								</div>
							</div>
						</div>		
						<div class="col-md-8">
							<div class="panel panel-gradient" style="height:500px" data-collapsed="0"> 
								<!-- panel head --> 
								<div class="panel-heading"> 
									<div class="panel-title">Recent Contracts</div> 
								</div>
								<!-- panel body --> 
								<div class="panel-body">
									<p>The table below shows the contract data for the last 10 days.</p>
									
									<h4>Contracts</h4>
									<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Date</th>
												<th>AFT</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>28/03/2018</td>
												<td><a href="#">1000 AFT</a></td>
											</tr>
											<tr>
												<td>2</td>
												<td>29/03/2018</td>
												<td><a href="#">1,200 AFT</a></td>
											</tr>
											<tr>
												<td>3</td>
												<td>30/03/2018</td>
												<td><a href="#">2,500 AFT</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
										
				</div>
				
				<div class="tab-pane" id="tab2-2">
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-gradient" data-collapsed="0" style="    height: 700px;">
								<!-- panel head -->
								<div class="panel-heading">
									<div class="panel-title">Add Product</div>
									<div class="panel-options"> <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> </div>
								</div>
								<!-- panel body -->
								<div class="panel-body">
										<p> You will be able to use your qrcode & barcorde reader to read product's item connecting to your pc in the future. this will be coming soon. </p>
										<div class="row">
											<div class="col-md-12">
												<div class="barcode_container">
													<img src="{{ asset('images\qrcode.jpg') }}"  alt="...">
												</div>
											</div>
										</div>								
			
										<div class="row">						
											<div class="col-md-12">
												<div class="form-group">
													<label class="control-label" for="product_barcode" style="font-size: 24pt;height: 45px;">Manual Input</label>
													
													<input id="txt_barcode" type="text" class="form-control">											
												</div>
												<div class="form-group center" style="text-align:center" >
													<button id="btn_scan" class="btn btn-primary" type="button" style="font-size: 30pt"><i class="fa fa-qrcode" aria-hidden="true"></i>&nbsp;&nbsp;Read</button>
												</div>
											</div>
										</div>			
										
								</div>
							</div>
																				
						</div>
						<div class="col-md-4">

								<div class="row">
									<div class="col-md-12">
	
										<!-- recent product list -->
										<div class="panel panel-gradient" data-collapsed="0" style="height: 398px;">
												<!-- panel head -->
												<div class="panel-heading">
													<div class="panel-title">Item Info</div>
													<div class="panel-options"> <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> </div>
												</div>
												<!-- panel body -->
												<div class="panel-body">																										
													<div class="row">
														<div class="col-md-12">
															<div class="product_img">
																<img id="img_product" src="http://placehold.it/200x150" alt="...">									
																<p id="product_name" style="font-size:48pt">###</p>
															</div>														
														</div>
													</div>
												</div>
										</div>
									</div>
								</div>
																	
							<div class="row">
								<div class="col-md-12">

									<!-- recent product list -->
									<div class="panel panel-gradient" data-collapsed="0" style="height: 285px;">
											<!-- panel head -->
											<div class="panel-heading">
												<div class="panel-title">Find Products</div>
												<div class="panel-options"> <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> </div>
											</div>
											<!-- panel body -->
											<div class="panel-body">
													<!-- search product -->
													<div class="form-group">
														<label class="control-label">Here, you can find a item in the previous contracts</label>
						
														<select id="select2_item_history" name="select2_item_history" class="select2" data-allow-clear="true" data-placeholder="Find Items...">
															<option></option>
															<optgroup label="South Africa">
																@foreach ($retailers as $retailer)
															<option value="{{$retailer->id}}" data-logo-attribute="{{ asset('storage/'.$retailer->logo_file) }}">{{$retailer->name}}</option>
																@endforeach
															</optgroup>
														</select>
						
													</div>
													<!-- search product -->																									
													<div class="form-group" style="text-align: center">
														<button type="button" class="btn btn-primary" style=" margin-top: 20px"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Add to Cart</button>
													</div>														
													<!-- recent history end -->
											</div>
									</div>	

									<!-- recent product list end -->
								</div>									
							</div>
																		
						</div>

						<div class="col-md-4">

								<!-- cart list -->
								<div class="row">
									<div class="col-md-12">
										<div class="panel panel-gradient" style="height: 700px;" data-collapsed="0">
												<!-- panel head -->
												<div class="panel-heading">
													<div class="panel-title">Cart</div>
													<div class="panel-options"> <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a> <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a> <a href="#" data-rel="close"><i class="entypo-cancel"></i></a> </div>
												</div>
												<!-- panel body -->
												<div class="panel-body">
													<div class="form-group">
															<h3>Added Items</h3>

															<div class="form-group form-horizontal">
																<label class="control-label col-sm-3">Total</label>
																<div for="cart_total" class="col-sm-5">
																	<input type="text" id="cart_total" class="form-control" disabled value="7"></input>
																</div>
															</div>
															<br><br>
															<div class="row" style="text-align: right">
																<div class="col-xs-12">
																	<button type="button" class="btn btn-primary"> <i class="entypo-trash"></i> </button>
																</div>
															</div>
															<br>
															<table class="table table-bordered table-striped datatable" id="table-selected">
																<thead>
																	<tr>
																		<th>
																			<div class="checkbox checkbox-replace">
																				<input type="checkbox" id="chk-1">
																			</div>
																		</th>
																		<th>#</th>
																		<th>Item Name</th>
																		<th>Photo</th>
																		<th>Actions</th>
																	</tr>
																	<tr class="hide">
																		<td>
																			<div class="checkbox checkbox-replace">
																				<input type="checkbox" id="chk-1">
																			</div>
																		</td>
																		<td class="item-no">
																				1
																		</td>
																		<td class="item-name">Butter</td>
																		<td class="item-pic"><img src="{{ asset('images\qrcode.jpg') }}"  alt="..."></td>
																		<td class="item-action">
																			
																			<a class="btn btn-danger btn-sm btn-icon icon-left">
																				<i class="entypo-cancel"></i>
																				Delete
																			</a>

																		</td>
																	</tr>																		
																</thead>
																
																<tbody>
																																																																																			
																</tbody>

															</table>	
																	
													</div>
												</div>
										</div>
									</div>										
								</div>
								<!-- cart list end-->

						</div>						
					</div>
																														
				</div>
				
				<div class="tab-pane" id="tab2-3">
					<div class="row">
						<a href="javascript: fnClickAddRow();" class="btn btn-primary hide">
							<i class="entypo-plus"></i>
							Add Item
						</a>
																	
						<br />
						<br />

						<h3>Product Items</h3>
						<div class="table-cart">
								<table class="table" id="table-items">
									<thead>
										<tr>
											<th class="itemRemove"></th>
											<th class="itemImage"></th>
											<th class="itemName">Name</th>										
											<th class="itemQuantity">Quantity</th>
											<th class="itemDiscount">Discount per Unit</th>																				
											<th class="itemAFT">AFT/ZAR</th>
										</tr>
									</thead>
									<tbody>
										<tr class="hide">
											<td class="itemNo hidden">
												
											</td>
											<td class="itemRemove">
												<a>
													<i class="ion-android-close"></i>
												</a>
											</td>
											<td class="itemImage">
												<a href="#">
													<img src="{{ asset('products\10835\m_5975ad8179309.jpg') }}" alt="" width="40" class="img-rounded" />
												</a>
											</td>
											<td class="itemName">Item1</td>										
											<td class="itemQuantity">											
												<input type="number" min="1" max="999999" step="1" class="form-control size-1" value="1" data-validate="required, range[1,999999]"/>
											</td>
											<td class="itemDiscount">
												<input type="number" min="1" max="999" step="1" class="form-control size-1" value="1" />
											</td>
											<td class="itemAFT">
												<span>0</span>&nbsp;AFT
											</td>				
										</tr>										
									</tbody>									
									<tbody class="cart-list">							
										{{--  <tr>
											<td class="itemNo hidden">
												
											</td>										
											<td class="itemRemove">
												<a>
													<i class="ion-android-close"></i>
												</a>
											</td>
											<td class="itemImage">
												<a href="#">
													<img src="{{ asset('products\10835\m_5975ad8179309.jpg') }}" alt="" width="40" class="img-rounded" />
												</a>
											</td>
											<td class="itemName">Item1</td>										
											<td class="itemQuantity">											
												<input type="number" min="1" max="9999" step="1" class="form-control size-1" value="0" />
											</td>
											<td class="itemDiscount">
												<input type="number" min="1" max="9999" step="1" class="form-control size-1" value="0" />
											</td>
											<td class="itemAFT">
												<span>0</span>&nbsp;AFT
											</td>				
										</tr>																													  --}}
									</tbody>
									<tbody>
										<tr class="totalBill">
											<td class="itemRemove">										
											</td>
											<td class="itemImage">										
											</td>
											<td class="itemName"></td>
											<td class="itemQuantity"></td>
											<td class="itemDiscount"></td>
											<td class="itemAFT">
												<table>
													<tr>
														<td>Total:</td>
														<td><span id="totalAFT">0</span>&nbsp;ZAR</td>
													</tr>
													<tr>
														<td>Fee(+5%):</td>
														<td><span id="feeBill">0</span>&nbsp;ZAR</td>
													</tr>
													<tr>
														<td>Grand Total:</td>
														<td><span id="grandBill">0</span>&nbsp;ZAR</td>
													</tr>
												</table>
											</div>
											</td>
										</tr>																											
									</tbody>
								</table>	
								
								<div class="row">
									<div class="col-sm-12">
										<a href="javascript: $('#modal-4').modal('show', {backdrop: 'static'});" class="btn btn-primary">
											<i class="entypo-suitcase"></i>
											Order
										</a>
									</div>
								</div>
						</div>						
					</div>
					<div class="row hide">
						<div class="col-md-offset-3 col-md-6 form-horizontal">							
							<div class="form-group">
								<label class="col-sm-3 control-label" for="company-name">Company Name</label>
								<div class="col-sm-5">
								<input class="form-control" name="company-name" data-validate="required" value="{{$supplier->name}}"/>
								</div>
							</div>

							<div class="form-group">
								<label for="contact-details" class="col-sm-3 control-label">Email</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="contact-details" name="email" data-validate="required,email" placeholder="sasol.man@gmail.com" value="{{ $supplier->email }}">
								</div>
							</div>

							<div class="form-group">
								<label for="phone" class="col-sm-3 control-label">Mobile No</label>
								
								<div class="col-sm-5">
								<input type="text" class="form-control" id="phone" placeholder="+27 10 344 5000" name="phone" data-validate="required,number,minlength[10]"  data-message-number="Please enter a valid phone number" value="{{$supplier->phone}}">
								</div>                        
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label" for="country">Country</label>
								<div class="col-sm-5">
									<select class="form-control" name="country">
										<option value="">Please select</option>
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
										<option value="Cocos Islands">Cocos Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote d'Ivoire">Cote d'Ivoire</option>
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
										<option value="Falkland Islands">Falkland Islands</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
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
										<option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran">Iran</option>
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
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macao">Macao</option>
										<option value="Macedonia">Macedonia</option>
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
										<option value="Micronesia">Micronesia</option>
										<option value="Moldova">Moldova</option>
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
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="North Korea">North Korea</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Palestinian Territory">Palestinian Territory</option>
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
										<option value="Romania">Romania</option>
										<option value="Russian Federation">Russian Federation</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint Helena">Saint Helena</option>
										<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
										<option value="Saint Lucia">Saint Lucia</option>
										<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
										<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
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
										<option value="South Africa" selected>South Africa</option>
										<option value="South Georgia">South Georgia</option>
										<option value="South Korea">South Korea</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syrian Arab Republic">Syrian Arab Republic</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Timor-Leste">Timor-Leste</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Vatican City">Vatican City</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Virgin Islands, British">Virgin Islands, British</option>
										<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
										<option value="Wallis and Futuna">Wallis and Futuna</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label" for="province">Province</label>
								<div class="col-sm-5">
								<input class="form-control" name="province" data-validate="required" value="{{$supplier->province}}"/>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label" for="address">Address</label>
								<div class="col-sm-5">
								<input class="form-control" name="address" data-validate="required" value="{{$supplier->street_address}}"/>										
								</div>
							</div>

							<div class="form-group">
								<label for="postal-code" class="col-sm-3 control-label">Postal Code</label>
								
								<div class="col-sm-5">
								<input type="text" class="form-control" id="postal-code" placeholder="eg: 2000" name="postal-code" data-validate="required,number,minlength[4]" value="{{$supplier->postal_code}}">
								</div>                        
							</div>							
						</div>
					</div>									
				</div>
				
				<div class="tab-pane" id="tab2-4">

						<div class="invoice">
	
							<div class="row">
							
								<div class="col-sm-6 invoice-left">
								
									<a href="#">
										<img src="{{asset('images/laborator@2x.png')}}" width="185" alt="" />
									</a>
									
								</div>
								
								<div class="col-sm-6 invoice-right">
								
										<h3>INVOICE NO. #5652256</h3>
										<span>31 March 2018</span>
								</div>
								
							</div>
							
							
							<hr class="margin" />
							
						
							<div class="row">
							
								<div class="col-sm-3 invoice-left">
								
									<h4>Client</h4>
									Bjorn Guido
									<br />
									Mr Nilson Otto
									<br />
									AFRICOIN Ltd
									
								</div>
							
								<div class="col-sm-3 invoice-left">
										
									<h4>&nbsp;</h4>
									1982 OOP
									<br />
									Cape Town, South Africa
									<br />
									+27 (10) 344-5000
								</div>
								
								<div class="col-md-6 invoice-right">
								
									<h4>Payment Details:</h4>
									<strong>V.A.T Reg #:</strong> 542554(DEMO)78
									<br />
									<strong>Account Name:</strong> AFRICOIN Ltd
									<br />
									<strong>SWIFT code:</strong> 45454DEMO545DEMO
									
								</div>
								
							</div>
							
							<div class="margin"></div>
							
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="text-center">#</th>
										<th width="60%">Product</th>
										<th>Quantity</th>
										<th>Price</th>
									</tr>
								</thead>
								
								<tbody>
									<tr>
										<td class="text-center">1</td>
										<td>Product1</td>
										<td>2,500</td>
										<td class="text-right">R10</td>
									</tr>
									
									<tr>
										<td class="text-center">2</td>
										<td>Product2</td>
										<td>1,200</td>
										<td class="text-right">R25</td>
									</tr>
									
									<tr>
										<td class="text-center">3</td>
										<td>Product3</td>
										<td>3,500</td>
										<td class="text-right">R8</td>
									</tr>
									
									<tr>
										<td class="text-center">4</td>
										<td>Product4</td>
										<td>1,500</td>
										<td class="text-right">R7</td>
									</tr>
									
									<tr>
										<td class="text-center">5</td>
										<td>Product5</td>
										<td>5,500</td>
										<td class="text-right">R2</td>
									</tr>
									
									<tr>
										<td class="text-center">6</td>
										<td>Product6</td>
										<td>500</td>
										<td class="text-right">R12</td>R
									</tr>
								</tbody>
							</table>
							
							<div class="margin"></div>
						
							<div class="row">
							
								<div class="col-sm-6">
								
									<div class="invoice-left">
							
										795 Park Ave, Suite 120
										<br />
										Cape Town, CA 94107
										<br />
										P: +27 (10) 344-5000
										
										
										<br />
										Full Name
										<br />
										first.last@email.com
									</div>
								
								</div>
								
								<div class="col-sm-6">
									
									<div class="invoice-right">
										
										<ul class="list-unstyled">
											<li>
												Sub - Total amount: 
												<strong>R110,500.00</strong>
											</li>
											<li>
												VAT: 
												<strong>12.9%</strong>
											</li>
											<li>
												Discount: 
												-----
											</li>
											<li>
												Grand Total:
												<strong>R124,754.50</strong>
											</li>
										</ul>
										
										<br />
										
										<a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
											Print Invoice
											<i class="entypo-doc-text"></i>
										</a>
										
										&nbsp;
										
										<a href="#" class="btn btn-success btn-icon icon-left hidden-print">
											Send Invoice
											<i class="entypo-mail"></i>
										</a>
									</div>
									
								</div>	
							</div>	
						</div>

				</div>
								
				<ul class="pager wizard">
					<li class="previous">
						<a href="#"><i class="entypo-left-open"></i> Previous</a>
					</li>
					
					<li class="next">
						<a href="#">Next <i class="entypo-right-open"></i></a>
					</li>
				</ul>
			</div>
		
		</div>   
    </div>
</div>

<!-- Modal 4 (Confirm)-->
<div class="modal fade" id="modal-4" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title">Confirm Modal</h4>
			</div>
			
			<div class="modal-body">
			
				Are you sure to make a new contract?
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-info" data-dismiss="modal" onclick="request_contract()">OK</button>
				<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>

@endsection
@section('styles')
	<link rel="stylesheet" href="{{ asset('js/datatables/datatables.css') }}">
	<link rel="stylesheet" href="{{ asset('js/select2/select2-bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('js/select2/select2.css') }}">	
	<link rel="stylesheet" href="{{ asset('js/selectboxit/jquery.selectBoxIt.css') }}">
	<link rel="stylesheet" href="{{ asset('js/zurb-responsive-tables/responsive-tables.css') }}">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" herf="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<style>
.fade-in {
	opacity: 1;
	animation-name: fadeInOpacity;
	animation-iteration-count: 1;
	animation-timing-function: ease-in;
	animation-duration: 2s;
}

@keyframes fadeInOpacity {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}		
	</style>
@endsection
@section('scripts')
	{{--  <script src="{{ asset('js/datatables/datatables.js') }}"></script>  --}}
	<script src="{{ asset('js/select2/select2.min.js') }}"></script>
	<script src="{{ asset('js/jquery.bootstrap.wizard.min.js') }}"></script>
	<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('js/jquery.inputmask.bundle.js') }}"></script>
	<script src="{{ asset('js/selectboxit/js/jquery.selectBoxIt.js') }}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('js/bootstrap-switch.min.js') }}"></script>
	<script src="{{ asset('js/jquery.multi-select.js') }}"></script>
	<script src="{{ asset('js/neon-chat.js') }}"></script>
	<script src="{{ asset('js/fileinput.js') }}"></script>       
	<script src="{{ asset('js/zurb-responsive-tables/responsive-tables.js') }}"></script>
	<script src="{{ asset('js/toastr.js') }}"></script>
	<script src="{{ asset('js/purchase_token.js') }}"></script>		
	
	<script>
		$(function(){
			// Barcode Scan
			$('#btn_scan').click(function () {
				var barcode = $('#txt_barcode').val();

				if(!barcode || barcode.length != 3){
					toastr.warning('Please input barcode information', null, warning_opts);
					$('#txt_barcode').empty();
					$('#txt_barcode').focus();
					return;
				}

				$.get("{{route('getProductInfoByBarcode')}}",
					{'barcode' : barcode},
					function(res) {
						console.log(res);
						var product = res;
						if(!product){
							alert('Failed to read barcode!');
							return;
						}

						if(product.name)
							$("#product_name").text(product.name);

						if(product.pic_path){
							/*
							$('#img_product').removeClass('fade-in');

							setTimeout(function(){								
								$('#img_product').attr('src', "{{ asset('storage/') }}/" + product.pic_path);
								$('#img_product').addClass('fade-in');								
								
							}, 700);
							*/
							$('#img_product').attr('src', "{{ asset('storage/') }}/" + product.pic_path);
							
							// animate
						}

						setCurItem(product.id, product.name, "{{ asset('storage/') }}/" + product.pic_path);
						
						// check exist if it's in the list.
						if(isExist()) {
							toastr.info('Already added');
							return;
						}						

						add_item();
						addProduct2TempList();	
					},
					'json'
				).fail(function(res){
					console.log(res);
					toastr.warning("Failed to get product info from server!", null, warning_opts);
				});
			});	

			function addProduct2TempList(){
				// append row to the "table-selected"
				var tableSelected = $("#table-selected");

				// get item list of cart
				// var itemId = tableSelected.find('tr.hide').find('td.itemNo').text();


				// add row
				$("#table-selected tr.hide td.item-no").text(items_selected.length);
				$("#table-selected tr.hide td.item-pic").find("img").attr('src', cur_item.img_url);
				$("#table-selected tr.hide td.item-name").text(cur_item.name);

				var $clone = tableSelected.find('tr.hide').clone(true).removeClass('hide');
				tableSelected.find('tbody').append($clone);

				// update total
				updateTotal();				
			}		

		});
				
		function request_contract(){
			// validate data
			if(!g_retailer_id || !items_selected.length){
				return;
			}
			
			// for (let item of items_selected) {
			// 	if(item.quantity == 0 || item.discount == 0)
			// 	{
			// 		toastr.warning('Please input quantity or discount', null, warning_opts);
			// 		return;
			// 	}
			// }
			
			// check quantity and discount inputs
			var $inputs = $(".cart-list td input");

			for (let i=0; i < $inputs.length; i ++ ){
								
				if( parseInt($($inputs[i]).val()) < 1)
				{
					toastr.warning('Please input quantity or discount', null, warning_opts);
					$($inputs[i]).focus();
					$($inputs[i]).select();
					return;
				}
			}



			// item data
			var cart_list_data = [];
			cart_list_data = jQuery.map(items_selected, function(item){				
				return {
					item_id : item.id,
					item_quantity : parseInt(item.quantity),
					item_discount : parseInt(item.discount)
				};
			});

			// total calc
			var totalAFT=0, fee=0, grandTotal=0;
			$.each(cart_list_data, function(i, item){			
				totalAFT += item.item_quantity * item.item_discount;
			});

			fee = totalAFT * 0.05;
			grandTotal = totalAFT + fee;

			var contract_data = 
			{
				'retailer_id' : g_retailer_id,
				'cart_count' : cart_list_data.length,
				'cart_data': cart_list_data,
				'token_total': totalAFT,
				'fee':fee, 
				'bill_amount': grandTotal,
			};
			
			console.log(contract_data);
			$.post("{{route('PurchaseCoins.store')}}",
				contract_data,
				function(res){
					console.log(res);
					if(res.success){
						toastr.success("Please check email for payment instructions", "Contract Successfully", success_opts);
					}

				},
				'json'
			).fail(function(res){
				toastr.warning("Failed to order", null, warning_opts);
			})			
		}

	</script>
@endsection