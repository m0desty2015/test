<?
Class Model_Login{
    public function Login(){
		//bd work
        return true;
    }  
public function run() {
	
$select = array(
    'where' => 'login = "'.$_POST['login'].'" AND password="'.md5($_POST['password']).'"'
);
$model = new Model_Users($select);
$login_user='';
$model->fetchOne();	
$login_user = $model->login;
if ($login_user!=''){
   Session::init();
   Session::set('loggedIn', true);
   Session::set('fio', $model->fio);
   Session::set('id', $model->id);
   header('Location: ../dashboard');	
} else {
	
	header('Location: ../login');
}

}     
}
?>
