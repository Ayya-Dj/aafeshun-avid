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

	public static function msg() {
		if ( session()->get( 'msg' ) !== NULL ) {
        	echo'
        	<input type="checkbox" id="my-modal-4" class="modal-toggle" checked />
			<label for="my-modal-4" class="modal cursor-pointer">
				<label class="modal-box relative alert-success" for="">
					<h3 class="text-lg font-bold">Thank you for contacting us!</h3>
					<p class="py-4">Your message has been received and one of our staff will be in contact with you shortly.</p>
					<p class="py-4">Click anywhere outside this box to close the message.</p>
				</label>
			</label>
        	';
		}
	}

}