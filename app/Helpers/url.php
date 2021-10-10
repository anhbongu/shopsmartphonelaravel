<?php 
	namespace App\Helpers;
	class URL{
		public static function getIdUrl($request, $number){
	        $url = $request->segment($number);
	        $arrUrl = explode('-', $url);
	        return $id = array_pop($arrUrl);			
		}		
	}
 ?>