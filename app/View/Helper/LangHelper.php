<?php  
	App::uses('AppHelper', 'View/Helper');
	class LangHelper extends AppHelper {

		public function get($table,$id,$column) {
			
	    	App::import("Model", $table);
			$model = new $table();
			$a = $model->findById($id);
			return $a[$table][$column.'_'.Configure::read('Config.language')];
	    }
	}
?>