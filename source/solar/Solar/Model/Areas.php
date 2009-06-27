<?php
/**
 * 
 * Areas of content.
 * 
 * @category Solar
 * 
 * @package Solar_Model
 * 
 * @author Paul M. Jones <pmjones@solarphp.com>
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 * @version $Id: Areas.php 3833 2009-06-12 02:18:00Z pmjones $
 * 
 */
class Solar_Model_Areas extends Solar_Model {
    
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
        
        /**
         * Indexes.
         */
        $this->_index = array(
            'created',
            'updated',
            'name' => 'unique',
            'owner_handle',
        );
        
        /**
         * Behaviors (serialize, sequence, filter).
         */
        $this->_serialize_cols[] = 'prefs';
        
        /**
         * Relationships.
         */
        $this->_hasMany('nodes', array(
            // use a non-standard foreign key
            'foreign_key'   => 'parent_id',
        ));
    }
}
