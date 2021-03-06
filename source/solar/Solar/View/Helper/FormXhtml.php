<?php
/**
 * 
 * Helper for raw XHTML pseudo-element.
 * 
 * @category Solar
 * 
 * @package Solar_View
 * 
 * @author Clay Loveless <clay@killersoft.com>
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 * @version $Id: FormXhtml.php 3153 2008-05-05 23:14:16Z pmjones $
 * 
 */
class Solar_View_Helper_FormXhtml extends Solar_View_Helper_FormElement
{
    /**
     * 
     * A pseudo-element that inserts unmodified XHTML into the flow of a form.
     * 
     * HTML is pulled from the $info['value'] value.
     * 
     * @param array $info An array of element information.
     * 
     * @return string The element XHTML.
     * 
     */     
    public function formXhtml($info)
    {
        $this->_prepare($info);
        return $this->_value;
    }
}
