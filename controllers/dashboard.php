<?
Class Controller_Dashboard Extends Controller_Base {    
    public $layouts = "dashboard_layouts";

    function index() {
	Session::init();
    $logged = Session::get('loggedIn');
    if($logged == false) {
      Session::destroy();
      header('Location: ../login');
     exit();
    }
        $model_Dashboard= new Model_Dashboard();
        $balansinfo = $model_Dashboard->Dashboard();
		$this->template->vars('balansinfo', $balansinfo);
        $this->template->view('dashboard');
        Session::write_close();
    }
   public function withdraw(){
	   $model = new Model_Dashboard();
       $model->withdraw();	   
   } 
   public function logout() {
	   $model = new Model_Dashboard();
       $model->logout();
   }        
}
?>
