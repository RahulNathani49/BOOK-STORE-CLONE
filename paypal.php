<?php
include("includes/db.php");
?>
<form name="form" action="https://www.paypal.com/us/cgi-bin/webscr" method="post">

			<input type="hidden" name="add" value="2" />
			<input type="hidden" name="cmd" value="_cart" />
			<input type="hidden" name="business" value="akashkadia8@gmail.com" />
			<input type="hidden" name="item_name" value="ViperStrike Individual Member Account Fee for 1 Year"> 
			<input type="hidden" name="userid" value="<?php echo $Cus_email; ?>" />
			<input type="hidden" name="amount" value="<?php echo $MemberFees; ?>" />
			<input type="hidden" name="page_style" value="PayPal" />
			<input type="hidden" name="no_shipping" value="0" />
			<input type="hidden" name="no_note" value="1" />
			<input type="hidden" name="currency_code" value="USD" />
			<input type="hidden" name="lc" value="USA" />
			<input type="hidden" name="bn" value="PP-ShopCartBF" />
			<input type="hidden" name="return" value="<?php echo "http://viper.ditdev.net/payment.php?sts=1&IMID=$IMID&MemberFees=$MemberFees"; ?>">
			<input type="hidden" name="rm" value="2">
			
			<?php /*?><input type="hidden" name="notify_url" value="<?php echo "http://viper.ditdev.net/payment.php?sts=1&IMID=$IMID&MemberFees=$MemberFees"; ?>">
    		<input type="hidden" name="cancel_return" value="<?php echo "http://viper.ditdev.net/payment.php?sts=0&IMID=$IMID"; ?>"><?php */?>
			
            </form>