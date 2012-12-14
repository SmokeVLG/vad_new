<?php
class UserIdentity extends CUserIdentity
{
    private $_id;
    private $_role;
 
    public function authenticate()
    {
           
        $username=strtolower($this->username);
        $user=Users::model()->find('LOWER(username)=?',array($username));
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!$user->validatePassword($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$user->id;
            $this->_role=$user->role;
            $this->username=$user->username;
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode==self::ERROR_NONE;
    }
 
    public function getId()
    {
        return $this->_id;
    }
    
     public function getRole()
    {
        return $this->_role;
    }
}