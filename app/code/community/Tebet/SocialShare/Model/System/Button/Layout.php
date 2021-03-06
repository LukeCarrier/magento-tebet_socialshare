<?php
/**
 * Layout Style
 *
 * @category    Social Share Buttons
 * @package     Tebet_SocialShare
 * @copyright   Copyright (c) 2012 Firman Efendi (firman.efendi@gmail.com)
 * @website		http://www.theyoungcandidate.com/
 */
class Tebet_SocialShare_Model_System_Button_Layout
{
	public function toOptionArray()
    {
        return array(
            array('value'=>'button_count', 'label'=>Mage::helper('socialshare')->__('Button Count')),
			array('value'=>'box_count', 'label'=>Mage::helper('socialshare')->__('Box Count and Large Button')),
        );
    }
}
