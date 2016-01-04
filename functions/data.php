<?php
    function data_setting_value($link, $id){
        $q = "SELECT * FROM settings WHERE id = '$id'";
        $r = mysqli_query($link,$q);
        $data= mysqli_fetch_assoc($r);

        $debug['value'];
        return $data['value'];
    }

	function data_page($link, $id){
		$query = "SELECT * FROM pages WHERE id = $id";
		$result = mysqli_query($link, $query);
		$data = mysqli_fetch_assoc($result);
		$data['nohtml'] = strip_tags($data['body']);

		if($data['body'] == $data['nohtml']){

			$data['formatted_body'] = '<p>'.$data['body'].'</p>';

		}else {
			$data['formatted_body'] = $data['body'];
		}

		return $data;
	}
?> 
