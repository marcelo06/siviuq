<?php 
	/**
	* 
	*/
	class UploadComponent extends Component
	{
		public $components = array('Session');
		
		public $max_files = 6;
		public function upload($file = null){
			
			if (!empty($file)) {
				
				
					$filename = $file['name'];
					$file_tmp_name = $file['tmp_name'];
					$dir = WWW_ROOT.'img'.DS.'uploads';
					$allowed = array('png','jpg','txt','docx','pdf','tiff','mp3','xls','pptx');
					if (!in_array(substr(strrchr($filename, '.'), 1), $allowed)) {
						$this->Session->setFlash("Error al procesar los archivos");
						
					}else if(is_uploaded_file($file_tmp_name)){
						move_uploaded_file($file_tmp_name, $dir.DS.$filename);
					}
				
			}
			
		}
	}
?>