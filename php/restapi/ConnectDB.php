<?php
// include_once('../../datos.php');
include '../datos.php';
class ConnectDB{
    private $host = HOST;
    private $user = USER;
    private $pw = PASSWORD;
    private $db = DB;
    private $conn;
    public function connect()
    {
        $this->conn = new mysqli($this->host,
        $this->user,$this->pw,$this->db);
        // if($this->conn==false){
        if(!$this->conn){
            echo 'Error al conectarse ' . 
            $this->conn->connect_error;
        }
        //soporte a acentos
        $this->conn->set_charset('utf8');
    }
    function close()
    {
       if($this->conn) $this->conn->close();
    }
    public function insert($sql)
    {
        $resultado = $this->conn->query($sql);
        if(!$resultado) echo"Error".$this->conn->error;
        return $resultado;
    }
    public function update($sql)
    {
        $resultado = $this->conn->query($sql);
        if(!$resultado) echo"Error".$this->conn->error;
        return $resultado;
    }
    public function delete($sql)
    {
        $resultado = $this->conn->query($sql);
        if(!$resultado) echo"Error".$this->conn->error;
        return $resultado;
    }
    public function select($sql)
    {
        $resultado = $this->conn->query($sql);
        if($resultado){
            $salida = $resultado->fetch_all(MYSQLI_ASSOC);
            // $output = array();
            // $i=0;
            // while ($row = mysqli_fetch_row($resultado)) {
            //    $output[$i++] =  array("ncontrol"=>$row[0],"name"=>$row[1] );
            // }
            return $salida;
        }else{
            echo"Error: ".$this->conn->error;
        }
    }
}
// <!-- jhl -->
