<?php
    function deleteFile($tujuan,$namagambar){
		unlink(FCPATH.$tujuan.$namagambar);
	}
    function uploadFile($data,$name){
        $upload_file = $_FILES[$name]['name'];
        $ci = get_instance();
		if($upload_file){
            $config['upload_path'] = $data['tujuan'];
			$config['allowed_types'] = $data['tipe'];
			$config['max_size']     = $data['size']; // 1 Mb
            $config['file_name']     = sha1($_FILES[$name]['name']);
            $ci->load->library('upload', $config);
            $ci->upload->initialize($config);
			if ($ci->upload->do_upload($name)){
        		return $ci->upload->data('file_name');
			}
			else{
				echo $ci->upload->display_errors();
			}
        }
    }
?>