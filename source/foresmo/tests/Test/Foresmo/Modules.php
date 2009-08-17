<?php
/**
 * 
 * Concrete class test.
 * 
 */
class Test_Foresmo_Modules extends Solar_Test {
    
    /**
     * 
     * Default configuration values.
     * 
     * @var array
     * 
     */
    protected $_Test_Foresmo_Modules = array(
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
        $obj = Solar::factory('Foresmo_Modules');
        $this->assertInstance($obj, 'Foresmo_Modules');
    }
    
    /**
     * 
     * Test -- 
     * 
     */
    public function testGetEnabledModules()
    {
        $this->todo('stub');
    }
    
    /**
     * 
     * Test -- 
     * 
     */
    public function testGetModuleData()
    {
        $this->todo('stub');
    }
}
