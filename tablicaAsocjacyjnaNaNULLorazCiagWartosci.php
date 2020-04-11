<?php
class tablicaAsocjacyjnaNaNULLorazCiagWartosci{
	public function tablicaDoBazy($tab=array()){
		$tabBezId=array();
foreach($tab as $klucz=>$wartosc)
if($klucz!="id")
	$tabBezId[$klucz]=$tab[$klucz];
$ciag="(NULL, '".implode("','", $tabBezId)."')";
return $ciag;
	}
}
/*Jeśli istnieje $tab["id"] to nie będzie w ciągu.*/

/*
$tab["id"]=55;
$tab["x"]="v11";
$tab["y"]="v2";
$tab["z"]="v3";
$tablicaAsocjacyjnaNaNULLorazCiagWartosci=new tablicaAsocjacyjnaNaNULLorazCiagWartosci();
$t=$tablicaAsocjacyjnaNaNULLorazCiagWartosci->tablicaDoBazy($tab);
echo $t;*/

?>
