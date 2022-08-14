<?php
	class BookList
	{
		var $isbn;
	    var $bookName;
		var $authorName;	
		
		
		
		function __construct(){
			
	
		
	 $result="Not found";
			
			$file=fopen("book.txt","r");
			while($user= fgets($file,4096)){
				list($x,$y,$z)= explode(":",$user);
				$this->isbn = $z;
				$this->authorName=$x;
				$this->bookName=$y; 
				
				}
		}
	 function display(){
		
			echo $this->isbn."<br>";
			echo $this->bookName."<br>";
			echo $this->authorName."<br>";
		
			}
		
		}	
	$ins= new BookList();
	$ins->display();
?>