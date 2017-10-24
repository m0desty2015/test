<?
Class Model_Balans Extends Model_Base{
	
	public $id;
	public $user_id;
	public $balans;	
	
	public function fieldsTable(){
		return array(
			
			'id' => 'id',
			'user_id' => 'user_id',
			'balans' => 'balans'
		);
	}
	

}
?>
