<?php
class student
{
	var $id;
	var $name;
	var $batch;
	
	function __construct($a,$b,$c)
	{
		$this->id= $a;
		$this->name= $b;
		$this->batch= $c;	
		$this->result($a);
		
	}
	
	function result($id)
	{
		
		/*****************************************/
		$result="Not found";
		$content = file("result.txt");
		foreach($content as $val)
		{
			list($x,$y) = explode(" ",$val);
			if($x == $id){
			//if($x == $this->id){
				$result = $y;
				break;
			}
			
		}
		
		/******************************************/
		
		echo $this->id."<br/>";
		echo $this->name."<br/>";
		echo $this->batch."<br/>";
		echo $result;		
	}
	
}
$std = new student("cse101","Md. Kalam","24th Batch");
//$std->result($std->id);

?>