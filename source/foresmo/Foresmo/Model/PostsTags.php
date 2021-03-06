<?php
/**
 *
 * Model class.
 *
 */
class Foresmo_Model_PostsTags extends Solar_Sql_Model {

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

        $this->_table_name = $this->_config['prefix'] . Solar_File::load($dir . 'table_name.php');
        $this->_table_cols = Solar_File::load($dir . 'table_cols.php');
        $this->_hasMany('tags', array('foreign_key' => 'id'));
        $this->_hasMany('posts', array('foreign_key' => 'id'));
    }

    /**
     * insertPostTags
     *
     * @param $post_id
     * @param $post_data
     */
    public function insertPostTags($post_id, $tags)
    {
        $post_id = (int) $post_id;
        $tag_map = array();
        $tags_table = Solar::factory('Foresmo_Model_Tags');
        $existing_tags = $tags_table->fetchAllAsArray();
        foreach ($existing_tags as $existing_tag) {
            foreach ($tags as $tag) {
                if (strtolower($tag) == strtolower($existing_tag['tag'])) {
                    $tag_map[$tag] = $existing_tag['id'];
                }
            }
        }
        foreach ($tags as $tag) {
            if (array_key_exists($tag, $tag_map)) {
                $data = array(
                    'post_id' => $post_id,
                    'tag_id' => $tag_map[$tag],
                );
                $this->insert($data);
            } else {
                $data = array(
                    'tag' => $tag,
                    'tag_slug' => Foresmo::makeSlug($tag),
                );
                $last_insert_id = $tags_table->insert($data);
                $data = array(
                    'post_id' => $post_id,
                    'tag_id' => $last_insert_id,
                );
                $this->insert($data);
            }
        }
    }
}
