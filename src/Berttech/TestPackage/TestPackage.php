<? namespace Berttech\TestPackage;
// use Berttech\Helper\Helper;
class TestPackage implements TestPackageInterface {

    protected $helper;

    function __construct(){
	// $helper = new Helper();
	// $this->helper = $helper;
   }

    function testFunction(){

        // return $this->helper->testFunction() .  " Test function 1.";
        return "Test function 1.";
    }

    function testFunction2(){

	return "Test function 2.";
    }
}
