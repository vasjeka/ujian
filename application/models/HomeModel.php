	<?php
		class HomeModel extends CI_Model{
			fucntion getData(){
				$data = array(
					"nama" => "wahyudin",
					"kelas" => "XIRPL1",
					"website" => "youtube.com"

					);
				return $data;
			}
		}
	?>