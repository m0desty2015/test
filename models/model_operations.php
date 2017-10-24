<?
Class Model_Operations Extends Model_Base{
	
	public $id;
	public $user_id;
	public $date;
	public $summ;	
	public $current_balans;
	public function fieldsTable(){
		return array(
			
			'id' => 'id',
			'user_id' => 'user_id',
			'date' => 'date',
			'summ' => 'summ',
			'current_balans' => 'current_balans'
		);
	}
	

}
?>
