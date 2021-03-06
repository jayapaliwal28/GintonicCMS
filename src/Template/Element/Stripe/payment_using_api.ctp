<?php
use Cake\Core\Configure;
if ($this->elementExists('cart_view')) {
    //if cart of application is exists then fill here it in below div using AJAX. 
    ?>
    <div id="cart"></div>
    <?php
}

$paymentUsingAPI = Configure::read('Stripe.PaymentUsingAPI');
if (!$paymentUsingAPI) {
    ?>
    <div class="col-md-12 text-center">
        <h3>You are going to pay amount <?php echo (!empty(Configure::read('Stripe.currency')) ? Configure::read('Stripe.currency') . ' ' : ' ') . $amount; ?></h3>
        <h3>Are you sure to make this payment ?</h3>
    </div>
    <div class="row text-center">
        <?php
        echo $this->element('GintonicCMS.Stripe/one_time_fix_payment', array('options' => array(
                'description' => 'Pay Now',
                'amount' => $amount,
                'label' => 'Pay Now',
                'panel-label' => 'Pay Now',
                'return-url' => ''
        )));
        ?>
    </div>

<?php } else {
    ?>
    <div class="col-md-12 text-center">
        <h3>You are going to pay amount <?php echo (!empty(Configure::read('Stripe.currency')) ? Configure::read('Stripe.currency') . ' ' : ' ') . $amount; ?></h3>
        <h3>Are you sure to make this payment ?</h3>
    </div>

    <?php
    echo $this->element('GintonicCMS.Stripe/one_time_dynamic_payment', [
        'description' => 'Pay Now',
        'amount' => $amount,
        'label' => 'Pay Now',
        'panel-label' => 'Pay Now',
        'return-url' => ''
    ]);
    ?>

<?php }
?>
