<?php
/**
 *
 * Model class.
 *
 */
class Foresmo_Model_GroupsPermissions extends Solar_Sql_Model {

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

        $this->_table_name = Solar_Config::get('Solar_Sql_Adapter_Mysql', 'prefix') . Solar_File::load($dir . 'table_name.php');
        $this->_table_cols = Solar_File::load($dir . 'table_cols.php');
        $this->_hasMany('permissions', array('foreign_key' => 'id'));
        $this->_hasMany('groups', array('foreign_key' => 'id'));
    }

    /**
     * getGroupPermissionsByID
     * Get the group permissions by ID as an array
     *
     * @access public
     * @param  $group_id
     * @return array
     */
    public function getGroupPermissionsByID($group_id)
    {
        return $this->fetchArray(
            array(
                'where' => array(
                    'group_id = ?' => $group_id
                ),
                'eager' => 'permissions'
            )
        );
    }
}
