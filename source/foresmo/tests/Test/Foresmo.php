<?php
/**
 * 
 * Concrete class test.
 * 
 */
class Test_Foresmo extends Solar_Test {
    
    /**
     * 
     * Default configuration values.
     * 
     * @var array
     * 
     */
    protected $_Test_Foresmo = array(
    );
    
    // -----------------------------------------------------------------
    // 
    // Support methods.
    // 
    // -----------------------------------------------------------------
    
    /**
     * 
     * Constructor.
     * 
     * @param array $config Configuration value overrides, if any.
     * 
     */
    public function __construct($config = null)
    {
        parent::__construct($config);
    }
    
    /**
     * 
     * Destructor; runs after all methods are complete.
     * 
     * @param array $config Configuration value overrides, if any.
     * 
     */
    public function __destruct()
    {
        parent::__destruct();
    }
    
    /**
     * 
     * Setup; runs before each test method.
     * 
     */
    public function setup()
    {
        parent::setup();
    }
    
    /**
     * 
     * Teardown; runs after each test method.
     * 
     */
    public function teardown()
    {
        parent::teardown();
    }
    
    // -----------------------------------------------------------------
    // 
    // Test methods.
    // 
    // -----------------------------------------------------------------
    
    /**
     * 
     * Test -- Constructor.
     * 
     */
    public function test__construct()
    {
        $obj = Solar::factory('Foresmo');
        $this->assertInstance($obj, 'Foresmo');
    }
    
    /**
     * 
     * Test -- dateFilter
     * 
     */
    public function testDateFilter()
    {
        $this->todo('stub');
    }
    
    /**
     * 
     * Test -- getIP
     * 
     */
    public function testGetIP()
    {
        $this->todo('stub');
    }
    
    /**
     * 
     * Test -- getTimeInfo
     * 
     */
    public function testGetTimeInfo()
    {
        $this->todo('stub');
    }
    
    /**
     * 
     * Test -- makeSlug
     * 
     */
    public function testMakeSlug()
    {
        $this->todo('stub');
    }
    
    /**
     * 
     * Test -- sanitize
     * 
     */
    public function testSanitize()
    {
        $this->todo('stub');
    }
}
