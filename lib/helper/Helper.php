<?php
	/*
	!===========================================
	! 				Helper Class
	!============================================
	 */
	class Helper 
	{
		private $db;

		/*
		@ class constructor
		*/
	    public function __construct()
	    {
	    	global $db;
	    	$this->db = $db;
	        
	    }


	    /*
		@ current directory path
		@ return string
		*/
		public function currentPath()
		{
			
			$path_array = $_SERVER['PHP_SELF'];
			//return $path_array;
			$explode = explode('/', $path_array);
			//echo "<pre>";
			//print_r(explode('/', $path_array));
			//echo "</pre>";
			$path = []; 

			for ($i = 1; $i <count($explode)  ; $i++) {
				//echo $explode[$i]."<br>";
				if ($explode[$i] == 'oop_crud') {
					$arr[] = "index.php";
				} else {
					$arr[] = $explode[$i];

				}
				$path =  $arr;
			}

			return $path;

		}



	}
 ?>