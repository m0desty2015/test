<?
Class Controller_Login Extends Controller_Base {    
    public $layouts = "login_layouts";
    function index() {
        $model = new Model_Login();
        $this->template->view('login');
    }   
    public function run() {
	   $model = new Model_Login();
       $model->run();
   }    
}
?>
