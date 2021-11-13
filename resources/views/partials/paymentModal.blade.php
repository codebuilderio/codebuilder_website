<style>
	.panel-title { font-size: 13px; }
	.modal-body p { margin-bottom: 0px; }
</style>
<!-- Modal -->
<div class="modal fade" id="payment_modal" tabindex="-1" role="dialog" aria-labelledby="payment_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-money"></i> <span id="invoice_modal_id_header">Invoice Payment</span></h4>
      </div>
      <div class="modal-body">

      <div id="invoice_modal_step_1">
	        <div class="row" style="padding: 10px; position: relative; top: -10px;">
				<p style="padding-bottom: 10px; text-align: center; display: none;">
					<i class="fa fa-file-pdf-o"></i> <a href="#">Download Invoice</a> &middot; 
					<i class="fa fa-file-o"></i> <a href="#">View Timesheet</a></p>
				<table class="table table-hover" id="invoice_modal_items_table">
				<thead>
					<tr>
						<th class="quantity">Hrs</th>
						<th class="product">Item</th>
						<th class="amount">Subtotal</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
				</table>
			</div>

            <div id="payment_type">
                <label for="exampleInputEmail1">Payment Type</label>
                <div class="row form-group payment-chooser">
                    <div class="row" style="padding-left: 10px; padding-right: 14px;">
                        <div class="col-md-4" style="padding-right: 3px;">
                            <div class="payment-chooser-item" data-type="credit_card">
                              <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12" style="width: 100%;">
                          		<table style="position: relative; top: -5px;">
                          			<tbody style="background-color: transparent;">
                          			<tr>
                          				<td>
                                            <span class="title" style="margin-top: 3px;">Full Payment</span>
                                            <span class="description" style="position: relative; top:-3px; font-size: 18px;"><span id="invoice_modal_total"></span> USD</span>
                                            <input type="radio" name="product" value="mobile_desktop" checked="checked">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                              </div>
                              <div class="clear"></div>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding-left: 0px; padding-right: 3px;">
                            <div class="payment-chooser-item" data-type="paypal">
                            	<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12" style="width: 100%;">
                              		<table style="position: relative; top: -10px;">
                              			<tbody style="background-color: transparent;">
                              			<tr>
                              				<td>
                                                <span class="title" style="margin-top: 3px;">Partial Payment</span>
                                                <span class="description" style="position: relative; top:-5px;">
                                                	$<input type="text" style="width: 100px; visibility: visible !important; border-radius: 4px; border: 1px solid #bfbfbf;box-shadow: 0 1px 3px 0 #e6ebf1; font-size: 18px; " value="0.00" name="test">
                                                </span>
                                                <input type="radio" name="product" value="mobile_desktop" checked="checked">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>


            <div id="payment_method">
                <label for="exampleInputEmail1">Payment Method</label>
                <div class="row form-group payment-chooser">
                <div class="row" style="padding-left: 10px; padding-right: 14px;">
                    <div class="col-md-4" style="padding-right: 3px;">
                            <div class="payment-chooser-item2" data-type="credit_card">
                              <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12" style="width: 100%;">
                              		<table>
                              			<tbody style="background-color: transparent;">
                              			<tr>
                              				<td style="width: 35px;">
                              				<i class="fa fa-credit-card" style="font-size: 30px;position:relative;left:-5px;top:-3px;"></i>
                              				</td>
                              				<td>
                                                <span class="title" style="margin-top: 3px;">Credit-Card</span>
                                                <span class="description" style="position: relative; top:-9px;">Stripe.com</span>
                                                <input type="radio" name="payment_method" value="credit_card" checked="checked">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                              </div>
                                    <div class="clear"></div>
                            </div>
                       </div>
                        <div class="col-md-4" style="padding-left: 0px; padding-right: 3px;">
                            <div class="payment-chooser-item2" data-type="paypal">
                            	<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12" style="width: 100%;">
                              		<table>
                              			<tbody style="background-color: transparent;">
                              			<tr>
                              				<td style="width: 35px;">
                              				<i class="fa fa-paypal" style="font-size: 30px; color: #179BD7; position: relative; top: -3px; left: -5px;"></i>
                              				</td>
                              				<td>
                                                <span class="title" style="margin-top: 3px;">PayPal</span>
                                                <span class="description" style="position: relative; top:-9px;">PayPal.com</span>
                                                <input type="radio" name="payment_method" value="paypal" checked="checked">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding-left: 0px;">
                            <div class="payment-chooser-item2" data-type="bitcoin">
                               	<div class="col-xs-8 col-sm-8 col-md-12 col-lg-12" style="width: 100%;">
                              		<table>
                              			<tbody style="background-color: transparent;">
                              			<tr>
                              				<td style="width: 35px;">
                              				<i class="fa fa-bitcoin" style="font-size: 30px; color: #F7931B; position: relative; top: -3px;"></i>
                              				</td>
                              				<td>
                                                <span class="title" style="margin-top: 3px;">Bitcoin</span>
                                                <span class="description" style="position: relative; top:-9px;">Unique Address</span>
                                                <input type="radio" name="payment_method" value="bitcoin" checked="checked">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
          </div>

      	<div class="row" id="invoice_modal_stripe" style="display: none;">
	      <form id="stripe-payment-form" style="padding: 15px; padding-top: 0px; margin: 0px; padding-bottom: 0px;">
                <div class="credit-card-div" style="padding: 0px;">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                    <div class="row" style="padding: 10px; padding-top: 0px;">
                    	<h5 style="color: grey; margin-top: 0px;">Credit Card</h5>
                    	<p id="card-errors" style="margin-bottom: 4px;"></p>
                    	
					    <div id="card-element" style="margin-top: 5px;">
					      <!-- a Stripe Element will be inserted here. -->
					    </div>
					    <p style="font-size: 11px; color: grey; margin-top: 5px;">Payment processed by Stripe.com.</p>
					    <h5 style="color: grey; margin-top: 15px;">Email Receipt <small>(optional}</small></h5>
					    <input type="email" class="form-control" id="invoice_modal_email_reciept" placeholder="foobar@example.com">

					    <div class="pull-right" style="position: relative; top: 10px;"><h5 style="font-size: 13px; color: grey; margin-top: 0px;"><strong>Total:</strong> <small class="modal_totals_str" id="stripe_amount_txt">$0.00 USD</small></h5></div>
                    </div>
                    </div>
                  </div>
                </div>
	      </form>
      	</div>

          <div id="invoice_modal_paypal" style="display: none;">
            <div class="credit-card-div" style="padding: 0px;">
              <div class="panel panel-default">
                <div class="panel-heading">
                <div class="row" style="padding: 10px; padding-top: 0px;">
				    <h5 style="color: grey; margin-top: 15px;">Email Receipt <small>(optional}</small></h5>
				    <input type="email" class="form-control invoice_modal_email_reciept" placeholder="foobar@example.com">
				    <div class="pull-left" style="position: relative; top: 10px;">
				    	<h5 style="font-size: 13px; color: grey; margin-top: 0px;">
				    	<small><strong>Note:</strong> You will be redirected to PayPal.com for checkout.</small>
				    </h5>
				    </div>
				    <div class="pull-right" style="position: relative; top: 10px;"><h5 style="font-size: 13px; color: grey; margin-top: 0px;"><strong>Total:</strong> <small class="modal_totals_str" id="paypal_amount_txt">$0.00 USD</small></h5></div>
                </div>
                </div>
              </div>
            </div>
          </div>


          <div id="invoice_modal_success" style="display: none;">

          		<div style="text-align: center;">
				<h3 id="invoice_modal_success_h1"><small>Submitting Payment</small></h3>

				<div class="circle-loader">
				  <div class="checkmark draw"></div>
				</div>

				</div>
          </div>

          <div id="invoice_modal_btc" style="display: none;">
          	<div style="text-align: center; padding-bottom: 10px;">
          		<table style="width: 95%;"">
          			<tr>
          				<td style="text-align: right;">
							<div id="qrcode" style="max-width: 100px; float: right;"></div>
						</td>
						<td style="text-align: left;">
							 <table class="table table-hover" style="margin-left: 5px; margin-bottom: 0px;">
							    <thead>
							      <tr>
							        <th>Address</th>
							        <th>Amount</th>
							        <th>Received</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>18Xc9pz55bZuCVMCt7RSMziPG</td>
							        <td>0.0145 BTC</td>
							        <td>0.00 BTC</td>
							      </tr>
							    </tbody>
							 </table>
							 <p style="color: grey; font-size: 11px; padding-left: 5px;"><small><strong>Note:</strong> Bitcoin to USD conversion is calculated by <a href="https://bitcoinaverage.com">BitcoinAverage.com</a>.</small></p>
						</td>
					</tr>
				</table>
			</div>
			@push("scripts")
			<script type="text/javascript">
			new QRCode(document.getElementById("qrcode"), "http://jindo.dev.naver.com/collie");
			</script>
			@endpush
          </div>


          <div class="modal-footer">
			<div class="pull-left" id="invoice_modal_payments_accepted">
				<img src="/images/payment.png" class="payment" style="position: relative; top: -6px" alt="We accept payments via Credit Card (processed by Stripe.com), PayPal.com, Bank Transfers, and Bitcoin. Other Crypto-Currencies may also be accepted on a case by case basis."/>
			</div>
			<div class="pull-left" style="display: none;">
				<a href="javascript: void(0);" id="invoice_modal_cancel">Cancel</a>
			</div>
            <div class="pull-right"><button type="button" class="btn btn-default" id="continue_btn">Continue <i class="fa fa-chevron-right"></i></button></div>
          </div>
      </div>
    </div>
  </div>
</div>

<form action="https://www.paypal.com/cgi-bin/webscr" id="paypal_form" method="post" target="_top" style="display: none;">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="larrygoodrie@gmail.com">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="custom" value="" id="paypal_custom_val">
<input type='hidden' name='return' value=''>
<input type="hidden" name="item_name" class="paypal_item_name" value="">
<input type="hidden" name="amount" class="paypal_item_price" value="0.00">
<input type="hidden" id="invoice_usd_amount" value="0">
 <input type="hidden" name="email" class="paypal_customer_email" value="larrygoodrie@gmail.com">
</form>	



    <script type="text/javascript">

      @if(Request::input('paypal_success'))

    
        setTimeout(function() {
          $("#invoice_modal_step_1").hide();
          $("#invoice_modal_success").show();
          $("#payment_modal").modal('show');
          $("#continue_btn, #invoice_modal_payments_accepted").hide();
          $("#invoice_modal_id_header").html("PayPal Payment");



          $("#invoice_modal_success_h1").html("<small>Awaiting Confirmation</small>");
        setTimeout(function() {
          $('.circle-loader').toggleClass('load-complete');
          $('.checkmark').toggle();
          $("#invoice_modal_success_h1").html("<small>Payment Successful</small>");
        }, 2000);
      }, 1000);
      
      @endif

    </script>