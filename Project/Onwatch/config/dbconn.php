<?php 
    session_start();
    require_once 'crud.php';
    class dbconn 
    {
        public $connection;

        public function __construct()
        {
            $this->db_connect();
        }
       
        public function db_connect()
        {
            $this->connection = mysqli_connect('localhost','root','','movie');
            if(mysqli_connect_error())
            {
                die(" Connect Failed ");
            }
        }

        public function check($check)
        {
            $return = mysqli_real_escape_string($this->connection,$check);
            return $return;
        }
    }
?>