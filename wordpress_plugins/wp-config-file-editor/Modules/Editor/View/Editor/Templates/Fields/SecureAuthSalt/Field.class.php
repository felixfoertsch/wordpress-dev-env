<?php
/**
* 
*/

# Define namespace
namespace WCFE\Modules\Editor\View\Editor\Templates\Fields\SecureAuthSalt;

# Input field base
use WCFE\Modules\Editor\View\Editor\Fields\SecureKeyField;

/**
* 
*/
class Field extends SecureKeyField {

	/**
	* put your comment there...
	* 
	*/
	public function getText() {
		return $this->__( 'Secure Authentication Salt' );
	}
	
	/**
	* put your comment there...
	* 
	*/
	public function getTipText() {
		return $this->__( 'Wordpress Hash key for SECURE_AUTH_SALT constant' );
	}

}
