<?php  
	App::uses('AppHelper', 'View/Helper');
	class DepartmentHelper extends AppHelper {

		public function dept_name($dept_id) {
	    	App::import("Model", "Department");
			$model = new Department();
			$a = $model->findById($dept_id);
			echo $a['Department']['name'];
	    }
	}
?>