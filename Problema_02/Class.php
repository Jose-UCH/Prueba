<?php

/**
*
*/
class CompleteRange
{


	public function build( $variable )
	{
		$resultado = null;

		$arreglo = array();

		$arreglo = explode(",", trim($variable, "[]"));

		for ($i=0; $i < count($arreglo); $i++) {

			if(!is_numeric(trim($arreglo[$i]))){

				$resultado = "Sólo números.";
				break;
			}
		}

		for ($i=0; $i < (count($arreglo)-1); $i++) {

			for ($j=($i+1); $j < count($arreglo); $j++) {

				if (trim($arreglo[$i]) > trim($arreglo[$j])) {

					$resultado = "Números ordenados ascendentemente.";
					break;
				}
			}
		}

		if ($resultado == null) {

			$array_final = array();

			for ($i=$arreglo[0]; $i <= $arreglo[count($arreglo)-1]; $i++) {

				array_push($array_final, $i);
			}

			$inicio = array(0 => "[".trim($arreglo[0]));
			$final = array( (count($array_final)-1) => $array_final[count($array_final)-1]."]" );

			$cadena = array_replace($array_final, $inicio, $final);

			$resultado = implode(",", $cadena);
		}

		return $resultado;
	}
}


?>