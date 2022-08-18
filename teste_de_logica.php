<?php

$array = [20,65,682,1050,1558,4032,5065,5095,6063,15000];
$diferencas = [];


while($current = current($array)) {
	$next = next($array);
	
	if ($next) {
		$diferencas[] = ($next - $current);		
	}
};


$resultado = [];

foreach ($diferencas as $diferenca) {
	$resultado[] = ($diferenca % 4) > 0 ?
		"{$diferenca}: não exato"
		: "{$diferenca} : divisão exata: ";
}

foreach ($resultado as $res) {
	var_dump($res); echo '<br>';
}