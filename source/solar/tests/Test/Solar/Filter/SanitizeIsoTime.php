<?php
/**
 * 
 * Concrete class test.
 * 
 */
class Test_Solar_Filter_SanitizeIsoTime extends Solar_Test {
    
    /**
     * 
     * Configuration values.
     * 
     * @var array
     * 
     */
    protected $_Test_Solar_Filter_SanitizeIsoTime = array(
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
     * @param array $config User-defined configuration parameters.
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
     * @param array $config User-defined configuration parameters.
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
     * Setup; runs after each test method.
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
        $obj = Solar::factory('Solar_Filter_SanitizeIsoTime');
        $this->assertInstance($obj, 'Solar_Filter_SanitizeIsoTime');
    }
    
    /**
     * 
     * Test -- Returns the value of the $_invalid property.
     * 
     */
    public function testGetInvalid()
    {
        $this->todo('stub');
    }
    
    /**
     * 
     * Test -- Forces the value to an ISO-8601 formatted time ("hh:ii:ss").
     * 
     */
    public function testSanitizeIsoTime()
    {
        $this->todo('stub');
    }
    
    /**
     * 
     * Test -- Forces the value to an ISO-8601 formatted timestamp using a space separator ("yyyy-mm-dd hh:ii:ss") instead of a "T" separator.
     * 
     */
    public function testSanitizeIsoTimestamp()
    {
        $this->todo('stub');
    }
}
