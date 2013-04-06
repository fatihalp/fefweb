<?php  
	App::uses('AppHelper', 'View/Helper');
	class DepartmentHelper extends AppHelper {

		public function dept_name($dept_id) {
	    	App::import("Model", "Department");
			$model = new Department();
			$a = $model->findById($dept_id, array('Department.name_en'));
			echo $a['Department']['name_en'];
	    }
	    public function dept_name1($dept_id) {
	    	App::import("Model", "Department");
			$model = new Department();
			$a = $model->findById($dept_id, array('Department.name_en', 'Department.name_tr'));

			echo $a['Department']['name_'.Configure::read('Config.language')];
	    }

	}
?>