<?php
class User{
    public $ncontrol,$name,$table='users';
   
    public function __construct($ncontrol=null,$name=null)
    {
        $this->ncontrol = $ncontrol;
        $this->name = $name;
    }
    /**
     * Get the value of ncontrol
     */ 
    public function getNcontrol()
    {
        return $this->ncontrol;
    }

    /**
     * Set the value of ncontrol
     *
     * @return  self
     */ 
    public function setNcontrol($ncontrol)
    {
        $this->ncontrol = $ncontrol;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    function insertUserStr(){
        return "INSERT INTO $this->table 
        VALUES('$this->ncontrol','$this->name')";
    }
    function selectUserByNcontrolStr(){
        return "SELECT * FROM $this->table 
        where ncontrol='$this->ncontrol'";
    }
    function selectAllUsersStr(){
        return "SELECT * FROM $this->table";
    }
    function updateUserStr(){
        return "UPDATE $this->table SET name='$this->name' 
        where ncontrol='$this->ncontrol'";
    }
    function deleteUserStr(){
        return "DELETE FROM $this->table 
        where ncontrol='$this->ncontrol'";
    }
}
// <!-- jhl -->
