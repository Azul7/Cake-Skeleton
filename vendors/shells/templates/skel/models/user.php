<?php
class User extends AppModel {

	var $name = 'User';
	var $validate = array(
		'username' => array(
		    array(
    		    'rule' => 'email',
    		    'message' => 'Please enter a valid email address.'
		    ),
		    array(
		        'rule' => 'isUnique',
		        'message' => 'This email address has already been registered.'
		    )
		),
		'password' => array('notempty')
	);

}
?>