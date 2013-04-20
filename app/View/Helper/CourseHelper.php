<?php  
	App::uses('AppHelper', 'View/Helper');
	class CourseHelper extends AppHelper {
		
		public function pre_req($id) {
			$table = 'Course';
			$la = Configure::read('Config.language');
	    	App::import("Model", $table);
			$model = new $table();
			$a = $model->find('all', array('conditions' => array($table.'.ref_code' => $id)));
			foreach ($a as $key => $ar) {
				echo $ar[$table]['name_'.$la].'<br />';
			}
	    }
	}
?>