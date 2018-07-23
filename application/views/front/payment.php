<?php 
	$this->load->view('front/header');


    function currencyConverter() {
    
        $get = file_get_contents("http://apilayer.net/api/live?access_key=a74b8e873472c77e1f4bae8f7e448821&currencies=USD,NPR");
        $api = json_decode($get);
        if($api->success)
        {
            return $api->quotes->USDNPR;
        }
        return 105;
    }

    $converted_currency=currencyConverter();

?>
<div id="content">
<div class="container">
    <div class="row">
        <div class="col-md-9">

                        <div class="box" id="order-summary">
                            <div class="box-header">
                                <h3>Order summary</h3>
                            </div>
                            <p class="text-muted"></p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Books</td>
                                            <th><?php echo $total_items; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Total Amount</td>
                                            <th>Rs. <?php echo $total_amount; ?></th>
                                        </tr>
                                        <tr>
                                            <td>Delivery Charge</td>
                                            <th>Rs. 50 </th>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <th><?php echo $total_amount+50; ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
<!-- paypal -->
        <div class="box-footer">
 <div class="pull-left">

    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="sankitasigdel-facilator@gmail.com">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        
        <input type="hidden" name="item_name" value="<?php echo $total_items; ?>">
        <input type="hidden" name="item_number" value="qwerty">
        <input type="hidden" name="amount" value="<?php echo $total_amount+50/$converted_currency; ?>">
        <input type="hidden" name="currency_code" value="USD">
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value="<?=site_url('front/payment_controller/failure');?>">
        <input type='hidden' name='return' value="<?=site_url('front/payment_controller/success');?>">
        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    </form>
 </div>
 </div>
                        </div>

        </div>

        
    </div>
</div>
</div>
  

 
    

<?php 
	$this->load->view('front/footer');
?>