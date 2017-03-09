<div class="hikashop_bf_rbsbusinessgateway_thankyou" id="hikashop_bf_rbsbusinessgateway_thankyou">
	<span id="hikashop_bf_rbsbusinessgateway_thankyou_message" class="hikashop_bf_rbsbusinessgateway_thankyou_message">
<?php
	echo JText::_('THANK_YOU_FOR_PURCHASE');
	if(!empty($this->payment_params->return_url)) {
		echo '<br/><a href="'.$this->payment_params->return_url.'">'.JText::_('GO_BACK_TO_SHOP').'</a>';
	}
?>
	</span>
</div>
