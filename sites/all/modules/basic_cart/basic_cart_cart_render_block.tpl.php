<?php
/**
 * @file
 * Basic cart shopping cart block
 */
?>

<?php if (empty($cart)): ?>
  <p><?php print t('Your cart is empty.'); ?></p>
<?php else: ?>
  <div class="basic-cart-grid basic-cart-block">
    <?php if(is_array($cart) && count($cart) >= 1): ?>
      <?php foreach($cart as $nid => $node): ?>
        <div class="basic-cart-cart-contents row">
          <div class="basic-cart-cart-node-title cell"><?php print l($node->title, 'node/' . $node->nid); ?></div>
        
          <div class="basic-cart-cart-quantity cell"><?php //print $node->basic_cart_quantity; ?></div>
          <!--<div class="basic-cart-cart-x cell">x</div>-->
          <div class="basic-cart-cart-unit-price cell">
            <strong><?php print basic_cart_price_format($node->basic_cart_unit_price); ?></strong>
          </div>
            
        </div>
      <?php endforeach; ?>
      <div class="basic-cart-cart-total-price-contents row">
        <div class="basic-cart-total-price cell">
          <?php print t('Total price'); ?>:<strong> <?php print $price; ?></strong>
        </div>
      </div>
      <?php if (!empty ($vat)): ?>
        <div class="basic-cart-block-total-vat-contents row">
          <div class="basic-cart-total-vat cell"><?php print t('Total VAT'); ?>: <strong><?php print $vat; ?></strong></div>
        </div>
      <?php endif; ?>
      <div class="basic-cart-cart-checkout-button basic-cart-cart-checkout-button-block row">
        <?php print l(t('View cart'), 'cart', array('attributes' => array('class' => array('button')))); ?>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>
