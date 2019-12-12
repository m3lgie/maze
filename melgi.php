<?php

function checknumber($x){
	
	$output="";
	
	
	if($x/3==1) {
			 
	$output="fish";			 
	
	}
	else if($x/5==1){
		
	$output="bash";
	
	}
	else if($x/15==1){
		
	$output="fish bash";
	
	}
	else{
	$output="false";			 
	
	}
	
	for ($i=1;$i<=$x;$i++){
		
		if($i%3==0) {
			 
		$output="fish";			 
		
		}
		else if($i%5==0){
			
		$output="bash";
		
		}
		else if($i%15==0){
			
		$output="fish bash";
		
		}
		else{
		$output="";			 
		
		}
	
	
	echo $i." ".$output."<br>";
	}
	
	
	
	
	

}

function sorting($x,$sort){
	
	
$value="";
echo "Nilai Input : ";
print_r($x);
echo "<br>";
	

	if($sort==0){
		
		for ($i=0;$i<count($x);$i++){
		
		
			for($b=$i;$b<count($x);$b++){
			  if($x[$b]<$x[$i]) {
			   $tmp = $x[$b];
			   $x[$b] = $x[$i];
			   $x[$i] = $tmp; 
			  }
			 }
		 
		 
		}
		
		$value="ASC";
	
	}
	else{
		
		for ($i=0;$i<count($x);$i++){
		
			
			 for($b=$i;$b<count($x);$b++){
			  if($x[$b]>$x[$i]) {
			   $tmp = $x[$b];
			   $x[$b] = $x[$i];
			   $x[$i] = $tmp;
			  }
	
			 }
		 
		}
		$value="DESC";
	}
	
	
	

	
echo "Hasil Urutan Nilai $value ";
print_r($x);



}


function checkstring($value){
	
	$string=$value;
	
	
	for($i=strlen($value)-1, $j=0; $j<$i; $i--, $j++) {
    list($value[$j], $value[$i]) = array($value[$i], $value[$j]);
	}

	if($string==$value) {
			 
	$output="true";			 
	
	}
	else{
	$output="false";			 
	
	}
	return $output;
	
	

}

//-------------------------------------------

echo "Task 1 :<br>";

echo checknumber(15);
echo "<br><br>";


echo "Task 2 :<br>";
$number=array(5,6,3,8,2,4,1);
sorting($number,1);
echo "<br><br>";

echo "Task 3 :";
echo checkstring("aaaaaaaa");







?>