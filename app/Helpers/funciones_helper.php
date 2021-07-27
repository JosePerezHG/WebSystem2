<?php 
function generarcombo($data)
	{
		$comb=array();		
				foreach($data as $obj){
					$comb[$obj['v1']]=$obj['v2'];
				}
		
 		return $comb;		
	}

function generarcombotemas($data)
	{
		$comb=array();		
				foreach($data as $obj){
					$comb[$obj['v5']]=$obj['v3'];
				}
		
 		return $comb;		
	}
?>