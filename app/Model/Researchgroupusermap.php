<?php
class Researchgroupusermap extends AppModel {
	public $actsAs = array('Containable');
    public $belongsTo = array('User','Researchgroup');
}