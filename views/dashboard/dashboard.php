<?=Session::get('fio')." баланс = ";?><?=$balansinfo['balans'];?>
<?
if ($balansinfo!=0){
?>
<form method="post" action="/dashboard/withdraw">
<input type="hidden" name="userid" value="<?=Session::get('id')?>">	
<table style="border-collapse:collapse;">
<tr>
	<td>
Укажите сумму вывода:	
   </td>
   	<td>
<input type="text" name="summ">	
   </td>
   <td>
<input type="submit" value="Вывести">	  
   </td>	   
</tr>
</table>
</form>	
<?	
}
?>
<h1>История операций</h1>
<table style="border-collapse:collapse;">
<tr>
	<td>
Дата	
   </td>
   	<td>
Сумма	
   </td>
   <td>
Баланс после операции	  
   </td>	   
</tr>

<?
foreach ($balansinfo['info'] as $val){
?>

<tr>
	<td>
	<?=$val['date']?>
   </td>
   	<td>
<?=$val['summ']?>
   </td>
   <td>
<?=$val['current_balans']?>	  
   </td>	   
</tr>
<?
}
?>
</table>
