<?php
/*
*/
namespace App\Helper;

use Illuminate\Support\Facades\DB;

class Helper
{

	public static function toArray( $obj ) {
		$array = json_decode(json_encode($obj),true);
        return $array;
	}

	public static function toArraySingle( $obj, $abort = 0 ) {
		$array = json_decode(json_encode($obj),true);
		if ( !empty($array)) {
			$array = $array[0];
			return $array;
		} else {
			if ( $abort === 1 ) {
				return abort(404);
			} else {
				return null;
			}
		}
	}

}