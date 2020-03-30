<?php
class tablicaAsocjacyjnaNaNULLorazCiagWartosci{
	public function tablicaDoBazy($tablica=array()){
	$ciag="(NULL, '".implode("','", $tablica)."')";
	return $ciag;
	}
}

/*
$tab["x"]="v1";
$tab["y"]="v2";
$tab["z"]="v3";
$tablicaAsocjacyjnaNaNULLorazCiagWartosci=new tablicaAsocjacyjnaNaNULLorazCiagWartosci();
$t=$tablicaAsocjacyjnaNaNULLorazCiagWartosci->tablicaDoBazy($tab);
echo $t;
*/
?>
