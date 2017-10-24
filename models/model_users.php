<?
Class Model_Users Extends Model_Base{
	
	public $id;
	public $fio;
	public $login;
	public $password;	
	
    public function getbalans(){
		//bd work
        return array('id'=>1, 'name'=>'test_name');
    }     
	

	
	public function fieldsTable(){
		return array(
			
			'id' => 'id',
			'fio' => 'fio',
			'login' => 'login',
			'password' => 'password'
		);
	}
	

}
?>
