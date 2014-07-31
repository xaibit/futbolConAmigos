<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$usuario=strtolower($this->username);
        //$user = Usuario::model()->find('LOWER(correo)=?',array($usuario));
		$user = User::model()->findByAttributes(array('email'=>$usuario));
		 if ($user !== null) {
			//if (($user->clave == $this->password) && ($user->activo == 1)){
			if (($user->password == $this->password) && ($user->score != NULL)){
				$this->id=$user->idUser;            
				$this->username=$user->nickname;      
				$this->errorCode=self::ERROR_NONE;					
				return TRUE;				
			}
		 }
		/*if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else {
			$this->errorCode=self::ERROR_NONE;
			$this->id = 1;
		}
		return !$this->errorCode;*/
	}
	
	public function getId()
	{
		return $this->id;
	}
}
