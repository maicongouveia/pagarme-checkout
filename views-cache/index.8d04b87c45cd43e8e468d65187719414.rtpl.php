<?php if(!class_exists('Rain\Tpl')){exit;}?>	<div class='container'>
	    <div class='row' style='padding-top:25px; padding-bottom:25px;'>
	        <div class='col-md-12'>
	            <div id='mainContentWrapper'>
	                <div class="col-md-12">
	                	<center>
	                		<img src="views/img/logo.png" class='img-responsive col-md-4'>	
	                	</center>
	                	
	                    <h2 style="text-align: center;">
	                        Review Your Order & Complete Checkout
	                    </h2>
	                    <hr/>
	                    <div class="shopping_cart">
	                        <form class="form-horizontal" role="form" action="" method="post" id="payment-form">
	                            <div class="panel-group" id="accordion">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">	                                            
	                                            <a class='btn btn-info col-md-12' data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
	                                            	Review Your Order
	                                            </a>
	                                        </h4>
	                                    </div>
	                                    <div id="collapseOne" class="panel-collapse collapse in">
	                                        <div class="panel-body">
	                                            <div class="items">
	                                                <div class="col-md-12">
	                                                    <table class="table table-striped">
	                                                        <tr>
	                                                            <td colspan="2">
	                                                                <b>
	                                                                    Fantasia do Darth Vader</b></td>
	                                                        </tr>
	                                                        <tr>
	                                                            <td>
	                                                                <ul>
	                                                                    <li><b>Fornecedor:</b> Maria Barros</li>
	                                                                </ul>
	                                                            </td>
	                                                            <td>
	                                                                <b>R$ 125,00</b>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <td colspan="2">
	                                                                <b>Fantasia do Cafú</b>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <td>
	                                                                <ul>
	                                                                    <li><b>Fornecedor:</b> João Thiago Samuel Cavalcanti</li>
	                                                                </ul>
	                                                            </td>
	                                                            <td>
	                                                                <b>R$ 100,00</b>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <td colspan="2">
	                                                                <b>Máscara de Cavalo</b>
	                                                           	</td>
	                                                        </tr>
	                                                        <tr>
	                                                            <td>
	                                                                <ul>
	                                                                    <li><b>Fornecedor:</b> César Anthony João Martins </li>
	                                                                </ul>
	                                                            </td>
	                                                            <td>
	                                                                <b>R$ 150,00</b>
	                                                            </td>
	                                                        </tr>
	                                                        <tr style='color:green;'>
	                                                            <td>
	                                                                <b>Frete</b>
	                                                           	</td>
	                                                           	<td>
	                                                           	    <b>R$  42,00</b>
	                                                           	</td>
	                                                        </tr>
	                                                    </table>
	                                                </div>
	                                                <div class="col-md-12">
	                                                    <div style="text-align: center;">
	                                                        <h3>Order Total</h3>
	                                                        <h3><span style="color:green;">R$ 417,00</span></h3>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    
	                                </div>
	                            </div>
	                            <div class="panel panel-default">
	                                <div class="panel-heading">
	                                    <h4 class="panel-title">
	                                        <div style="text-align: center; width:100%;">
	                                        	<a style="width:100%;" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class=" btn btn-warning" onclick="$(this).fadeOut(); $('#payInfo').fadeIn();">
		                                            Billing Information
		                                        </a>
		                                    </div>
	                                    </h4>
	                                </div>
	                            </div>
	                            <div class="panel panel-default">
	                                <div class="panel-heading">
	                                </div>
	                                <div id="collapseTwo" class="panel-collapse collapse">
	                                    <div class="panel-body">
	                                        <b>Help us keep your account safe and secure, please verify your billing
	                                            information.</b>
	                                        <br/><br/>
	                                        <table class="table table-striped" style="font-weight: bold;">
	                                            <tr>
	                                                <td style="width: 175px;">
	                                                    <label for="id_email">Best Email:</label></td>
	                                                <td>
	                                                    <input class="form-control" id="id_email" name="email"
	                                                           required="required" type="text"/>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td style="width: 175px;">
	                                                    <label for="id_first_name">First name:</label></td>
	                                                <td>
	                                                    <input class="form-control" id="id_first_name" name="first_name"
	                                                           required="required" type="text"/>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td style="width: 175px;">
	                                                    <label for="id_last_name">Last name:</label></td>
	                                                <td>
	                                                    <input class="form-control" id="id_last_name" name="last_name"
	                                                           required="required" type="text"/>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td style="width: 175px;">
	                                                    <label for="id_address_line_1">Address:</label></td>
	                                                <td>
	                                                    <input class="form-control" id="id_address_line_1"
	                                                           name="address_line_1" required="required" type="text"/>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td style="width: 175px;">
	                                                    <label for="id_address_line_2">Unit / Suite #:</label></td>
	                                                <td>
	                                                    <input class="form-control" id="id_address_line_2"
	                                                           name="address_line_2" type="text"/>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td style="width: 175px;">
	                                                    <label for="id_city">City:</label></td>
	                                                <td>
	                                                    <input class="form-control" id="id_city" name="city"
	                                                           required="required" type="text"/>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td style="width: 175px;">
	                                                    <label for="id_state">State:</label></td>
	                                                <td>
	                                                    <select class="form-control" id="id_state" name="state">
	                                                        <option value="AK">Alaska</option>
	                                                        <option value="AL">Alabama</option>
	                                                        <option value="AZ">Arizona</option>
	                                                        <option value="AR">Arkansas</option>
	                                                        <option value="CA">California</option>
	                                                        <option value="CO">Colorado</option>
	                                                        <option value="CT">Connecticut</option>
	                                                        <option value="DE">Delaware</option>
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
	                                                        <option value="DC">Washington D.C.</option>
	                                                        <option value="WV">West Virginia</option>
	                                                        <option value="WI">Wisconsin</option>
	                                                        <option value="WY">Wyoming</option>
	                                                    </select>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td style="width: 175px;">
	                                                    <label for="id_postalcode">Postalcode:</label></td>
	                                                <td>
	                                                    <input class="form-control" id="id_postalcode" name="postalcode"
	                                                           required="required" type="text"/>
	                                                </td>
	                                            </tr>
	                                            <tr>
	                                                <td style="width: 175px;">
	                                                    <label for="id_phone">Phone:</label></td>
	                                                <td>
	                                                    <input class="form-control" id="id_phone" name="phone" type="text"/>
	                                                </td>
	                                            </tr>

	                                        </table>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="panel panel-default">
	                                <div class="panel-heading">
	                                    <h4 class="panel-title">
	                                        <div style="text-align: center;">
	                                        	<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class=" btn btn-success" id="payInfo" style="width:100%;display: none;" onclick="$(this).fadeOut();  document.getElementById('collapseThree').scrollIntoView()">Enter Payment Information »</a>
	                                        </div>
	                                    </h4>
	                                </div>
	                            </div>
	                            <div class="panel panel-default">
	                                <div class="panel-heading">
	                                    <h4 class="panel-title">
	                                        <a  data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class='btn btn-success col-md-12'>
	                                            <b>Payment Information</b>
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapseThree" class="panel-collapse collapse">
	                                    <div class="panel-body">
	                                        <span class='payment-errors'></span>
	                                        <fieldset>
	                                            <legend>What method would you like to pay with today?</legend>
	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label" for="card-holder-name">Name on
	                                                    Card</label>
	                                                <div class="col-md-9">
	                                                    <input type="text" class="form-control" stripe-data="name"
	                                                           id="name-on-card" placeholder="Card Holder's Name">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label" for="card-number">Card
	                                                    Number</label>
	                                                <div class="col-md-9">
	                                                    <input type="text" class="form-control" stripe-data="number"
	                                                           id="card-number" placeholder="Debit/Credit Card Number">
	                                                    <br/>
	                                                    <div><img class="pull-right"
	                                                              src="https://s3.amazonaws.com/hiresnetwork/imgs/cc.png"
	                                                              style="max-width: 250px; padding-bottom: 20px;">
	                                                    </div>
	                                                </div>
	                                                <div class="form-group">
	                                                    <label class="col-md-3 control-label" for="expiry-month">Expiration
	                                                        Date</label>
	                                                    <div class="col-md-9">
	                                                        <div class="row">
	                                                            <div class="col-md-4">
	                                                                <select class="form-control col-md-12"
	                                                                        data-stripe="exp-month" id="card-exp-month"
	                                                                        style="margin-left:5px;">
	                                                                    <option>Month</option>
	                                                                    <option value="01">Jan (01)</option>
	                                                                    <option value="02">Feb (02)</option>
	                                                                    <option value="03">Mar (03)</option>
	                                                                    <option value="04">Apr (04)</option>
	                                                                    <option value="05">May (05)</option>
	                                                                    <option value="06">Jun (06)</option>
	                                                                    <option value="07">Jul (07)</option>
	                                                                    <option value="08">Aug (08)</option>
	                                                                    <option value="09">Sep (09)</option>
	                                                                    <option value="10">Oct (10)</option>
	                                                                    <option value="11">Nov (11)</option>
	                                                                    <option value="12">Dec (12)</option>
	                                                                </select>
	                                                            </div>
	                                                            <div class="col-md-3">
	                                                                <select class="form-control" data-stripe="exp-year"
	                                                                        id="card-exp-year">
	                                                                    <option value="2017">2017</option>
	                                                                    <option value="2018">2018</option>
	                                                                    <option value="2019">2019</option>
	                                                                    <option value="2020">2020</option>
	                                                                    <option value="2021">2021</option>
	                                                                    <option value="2022">2022</option>
	                                                                    <option value="2023">2023</option>
	                                                                    <option value="2024">2024</option>
	                                                                </select>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                                <div class="form-group">
	                                                    <label class="col-md-3 control-label" for="cvv">Card CVC</label>
	                                                    <div class="col-md-3">
	                                                        <input type="text" class="form-control" stripe-data="cvc"
	                                                               id="card-cvc" placeholder="Security Code">
	                                                    </div>
	                                                </div>
	                                                <div class="form-group">
	                                                    <div class="col-md-offset-3 col-md-9">
	                                                    </div>
	                                                </div>
	                                        </fieldset>
	                                        <a href="checkout/" class="btn btn-success btn-lg" style="width:100%;">
	                                        	Pay Now
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                    </div>
	                </div>
	                
	                </form>
	            </div>

	        </div>

	    </div>
