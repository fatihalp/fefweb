<?php  
	App::uses('AppHelper', 'View/Helper');
	class ProgramHelper extends AppHelper {
		
		public function createList($id) {
			$table = 'Program';
			$la = Configure::read('Config.language');
	    	App::import("Model", $table);
			$model = new $table();
			$a = $model->find('all', array('conditions' => array($table.'.department_id' => $id)));
			foreach ($a as $key => $ar) {
				echo "<dl><dt></dt><dd>";
				echo '<a href="'.$this->webroot.$table.'/guestview/'.$id.'/lang:'.$la.'" >'.$ar[$table]['name_'.$la].'</a>';

				echo '</dd></dl>';
			}
	    }
	}
?>