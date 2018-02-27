<?php

/**
*
*/
class ChangeString
{


	public function build( $variable )
	{
		$array_lower = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

		$array_upper = array();

		for ($i=0; $i < count($array_lower); $i++) {

			array_push($array_upper, mb_strtoupper($array_lower[$i], 'UTF-8') );
		}

		$resultado = null;
		$count = 0;
		$item = null;

		$count = strlen(trim($variable));

		for ($i=0; $i < $count; $i++) {

			$item = mb_substr($variable, $i, 1);

			if (in_array($item, $array_lower)) {

				$var_search = array_search($item, $array_lower);

				if (($var_search+1) == count($array_lower)) {

					$resultado .= $array_lower[0];

				} else {

					$resultado .= $array_lower[($var_search+1)];
				}

			} else if (in_array($item, $array_upper)) {

				$var_search = array_search($item, $array_upper);

				if (($var_search+1) == count($array_upper)) {

					$resultado .= $array_upper[0];

				} else {

					$resultado .= $array_upper[($var_search+1)];
				}

			} else {

				$resultado .= $item;
			}
		}

		return $resultado;
	}
}


?>