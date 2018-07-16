<?php 
	$this->load->view('front/header');


    function currencyConverter($from_Currency,$to_Currency,$amount) {
    $from_Currency = urlencode($from_Currency);
    $to_Currency = urlencode($to_Currency);
    $get = file_get_contents("https://finance.google.com/finance/converter?a=1&from=$from_Currency&to=$to_Currency");
    $get = explode("<span class=bld>",$get);
    //print_r($get);
    $get = explode("</span>",$get[1]);
    $converted_currency = preg_replace("/[^0-9\.]/", null, $get[0]);
    return $converted_currency;
}

// change amount according to your needs
$amount = 1;
// change From Currency according to your needs
//$from_Curr ='NPR';
$from_Curr ='USD';
// change To Currency according to your needs
$to_Curr ="NPR";
$converted_currency=currencyConverter($from_Curr, $to_Curr, $amount);
// Print outout
?>

 <div id="text page">
 <section style="text-align: center;">
 	<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="sankitasigdel-facilator@gmail.com">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        
        <input type="hidden" name="item_name" value="<?php echo $total_items; ?>">
        <input type="hidden" name="item_number" value="qwerty">
        <input type="hidden" name="amount" value="<?php echo $total_amount/$converted_currency; ?>">
        <input type="hidden" name="currency_code" value="USD">
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value="<?=site_url('front/payment_controller/failure');?>">
        <input type='hidden' name='return' value="<?=site_url('front/payment_controller/success');?>">
        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    </form>
 </section>
 </div>
    

<?php 
	$this->load->view('front/footer');
?>