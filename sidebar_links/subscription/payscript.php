<?php

 $apiKey = "rzp_test_n4yQr3oCJwBRzh";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" 
    
    data-buttontext="Pay with Razorpay"
    data-name="MusicStream"
    data-description="Upgrade to premium"
    data-image="https://en.wikipedia.org/wiki/ITunes#/media/File:ITunes_12.2_logo.png"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<style> 
.razorpay-payment-button { display: none; }
</style>

<script type="text/javascript" >
$(document).ready(function(){
    $('.razorpay-payment-button').click();
});
</script>

data-amount="<?php echo $_POST['amount'] * 100;?>" 
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
