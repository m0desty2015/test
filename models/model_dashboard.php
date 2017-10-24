<?
Class Model_Dashboard{
    public function Dashboard(){
$select = array(
    'where' => 'user_id = '.Session::get('id')
);
$model = new Model_Balans($select);
$balans_user='';
$model->fetchOne();	
$balans_user = $model->balans;

$select3 = array(
    'where' => 'user_id='.Session::get('id')
);
$model3 = new Model_Operations($select3); 
$usersInfo = $model3->getAllRows(); 
$all['balans']=$balans_user;
$all['info']=$usersInfo;
return $all;
    }      
  public function withdraw(){
$select = array(
    'where' => 'user_id = '.$_POST['userid']
);
$model = new Model_Balans($select);
$balans_user='';
$model->fetchOne();	
$balans_user = $model->balans;
if ($balans_user!=0){
$balans_user=$balans_user+0;
$_POST['summ']=$_POST['summ']+0;
$balans_user=$balans_user-$_POST['summ'];
$res=$balans_user === 0;

if (($balans_user>0) or ($res==true)){

$select1 = array(
    'where' => 'user_id = '.$_POST['userid']
);
$model1 = new Model_Balans($select1);
$model1->fetchOne(); 
$model1->update('user_id', $_POST['userid'], 'balans', $balans_user);

$model2 = new Model_Operations();
$model2->user_id = $_POST['userid'];
$model2->date = date("Y-m-d H:i:s");
$model2->summ = $_POST['summ'];
$model2->current_balans = $balans_user;
$model2->save();
header('Location: ../dashboard');
} else {	
header('Location: ../dashboard');	
}
	
} else {
header('Location: ../dashboard');
}

	  
  }  
  public function logout() {
	Session::init();  
    Session::destroy();
    header('Location: ../login');
    exit();
  }
}
?>
