<?php
/**
 * 
 * Model for mapping tags to nodes.
 * 
 * @category Solar
 * 
 * @package Solar_Model
 * 
 * @author Paul M. Jones <pmjones@solarphp.com>
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 * @version $Id: Taggings.php 3988 2009-09-04 13:51:51Z pmjones $
 * 
 */
class Solar_Model_Taggings extends Solar_Sql_Model {
    
    /**
     * 
     * Model-specific setup.
     * 
     * @return void
     * 
     */
    protected function _setup()
    {
        $dir = str_replace('_', DIRECTORY_SEPARATOR, __CLASS__)
             . DIRECTORY_SEPARATOR
             . 'Setup'
             . DIRECTORY_SEPARATOR;
        
        $this->_table_name = Solar_File::load($dir . 'table_name.php');
        $this->_table_cols = Solar_File::load($dir . 'table_cols.php');
        $this->_index      = Solar_File::load($dir . 'index_info.php');
        
        /**
         * Relationships.
         */
        $this->_belongsTo('node');
        $this->_belongsTo('tag');
    }
}
