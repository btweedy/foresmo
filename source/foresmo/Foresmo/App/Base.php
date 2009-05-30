<?php
/**
 * Foresmo_App_Base
 * Foresmo Arch Class
 *
 * @category  App
 * @package   Foresmo
 * @author    Anthony Gentile, Bryden Tweedy
 * @version   0.09
 * @since     0.05
 */
class Foresmo_App_Base extends Solar_App_Base {

    protected $_layout_default = 'default';
    protected $_model;

    public $session;
    public $connect = true;
    public $installed = false;
    public $blog_theme = 'default';
    public $blog_title = 'Foresmo Blog';
    public $pages_count;

    /**
     * _setup
     *
     * Set variables used throughout the app here.
     */
    protected function _setup()
    {
        $this->session = Solar::factory('Solar_Session', array('class' => 'Foresmo_App'));
        $adapter = Solar_Config::get('Solar_Sql', 'adapter');
        $adapter = Solar::factory($adapter);
        try {
            $adapter->connect();
        } catch (Exception $e) {
            $this->connect = false;
        }
        if ($this->connect) {
            $this->_model = Solar_Registry::get('model_catalog');
            $this->installed = Solar_Config::get('Foresmo', 'installed');

            $results = $this->_model->options->fetchArray(
                array(
                    'where' => array(
                        'name LIKE ?' => 'blog_%'
                    )
                )
            );

            foreach ($results as $result) {
                switch ($result['name']) {
                    case 'blog_theme':
                        $this->blog_theme = $result['value'];
                    break;
                    case 'blog_title':
                        $this->blog_title = $result['value'];
                    break;
                    case 'blog_posts_per_page':
                        $this->_model->posts->posts_per_page = (int) $result['value'];
                    break;
                }
            }

            $this->_model->posts->published_posts_count = $this->_model->posts->getPublishedPostsCount();
            $this->_setPagesCount();
            $this->_layout_default = $this->blog_theme;
        }
    }

    /**
     * _setPagesCount
     * This function sets how many pages will be available for
     * the blog's posts given the amount of posts and what the
     * posts_per_page is set to.
     *
     * @return int
     */
    private function _setPagesCount()
    {
        $posts_per_page = $this->_model->posts->posts_per_page;
        $posts_count = $this->_model->posts->published_posts_count;
        if ($posts_count <= $posts_per_page) {
            $this->pages_count = 1;
            return;
        }
        $this->pages_count = ceil(($posts_count / $posts_per_page));
    }
}
