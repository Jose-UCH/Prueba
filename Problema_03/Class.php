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
		$cadena = array();

		$count = strlen($variable);

		if ($count > 0) {

			for ($i=0; $i < $count; $i++) {

				array_push($arreglo, mb_substr($variable, $i, 1));
			}

			$i = 0;
			while ( $i < count($arreglo)) {

				if (!empty($arreglo[$i+1])) {

					array_push($cadena, $arreglo[$i].$arreglo[$i+1]);

				} else {

				 	array_push($cadena, $arreglo[$i]);
				}

				$i++;
			}

			foreach ($cadena as $key => $value) {

				if ($value != "()") {

					unset($cadena[$key]);
				}
			}

			$resultado = implode("", $cadena);
		}

		return $resultado;
	}
}


?>