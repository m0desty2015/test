<?
Class Controller_Index Extends Controller_Base {    
    public $layouts = "first_layouts";
    function index() {
        $model = new Model_Index();
        $this->template->view('index');
    }       
}
?>
