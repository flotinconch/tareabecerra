<?php
    //require_once "../model/conexion.php";
    //require_once "../model/dto/user.dto.php";

    class AprendizModel{
        private $codeAprendiz;
        private $Nombre;
        private $FechaNacimiento;
        private $Sexo;
        private $Ciudad;

        public function __construct($objDtoAprendiz){
            $this ->CodeAprendiz      =  $objDtoAprendiz -> getCodeAprendiz() ;
            $this ->Nombre      =  $objDtoAprendiz -> getNombre() ;
            $this ->FechaNacimiento  =  $objDtoAprendiz -> getFechaNacimiento() ;
            $this ->Sexo      =  $objDtoAprendiz -> getSexo() ;
            $this ->Ciudad  =  $objDtoAprendiz -> getCiudad() ;
        }
        public function getQueryLogin(){

            $sql  = "SELECT * FROM APRENDIZ 
                    WHERE APRENDIZ = ? AND PASSWORD = ?";
            try {
                $objCon = new Conexion();

                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> user,  PDO::PARAM_STR);
                $stmt ->  bindParam(2,  $this -> password,  PDO::PARAM_STR);
                $stmt -> execute();
                $result = $stmt;
            } catch (Exception $e) {
                echo "Error al consultar usuarios " . $e ->getMessage();
            }
            return $result;
        }//END METHOD
        public function mldInsertAprendiz(){
            $sql  = "CALL spInsertAprendiz (?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> Nombre,      PDO::PARAM_STR);
                $stmt ->  bindParam(2,  $this -> FechaNacimiento,  PDO::PARAM_STR);
                $stmt ->  bindParam(3,  $this -> Sexo,      PDO::PARAM_STR);
                $stmt ->  bindParam(4,  $this -> Ciudad,  PDO::PARAM_STR);
                $estado = $stmt -> execute();
            } catch (PDOException $e) {
                echo "Error al insertar usuarios " . $e ->getMessage();
            }
            return $estado;
        }
        public function mldSearchAllAprendiz(){
            $respon=false;
            $sql  = "call SpSearchAprendiz()";
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt -> execute();
                $respon = $stmt;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al 
                mostrar los datos en el dao " . $e -> getMessage() ;
            }//end try-catch
            return $respon;
        }//END SEARCHALLUSER
        public function mldEraseAprendiz(){
            $respon = false;
            $sql  = "call spDeleteAprendiz( ? )";
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> code,      PDO::PARAM_INT);
                $stmt -> execute();
                $respon = true;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al 
                mostrar los datos en el dao " . $e -> getMessage() ;
            }//end try-catch
            return $respon;
        }


    public function mldUpdateAprendiz(){
        $sql  = "CALL spUpdateAprendiz (?, ?, ?, ?, ?);";
        $estado = false;
        try {
            $objCon = new Conexion();
            $stmt = $objCon->getConect() -> prepare($sql);
            $stmt ->  bindParam(1,  $this -> CodeAprendiz,      PDO::PARAM_INT);
            $stmt ->  bindParam(2,  $this -> Nombre,      PDO::PARAM_STR);
            $stmt ->  bindParam(3,  $this -> FechaNacimiento,  PDO::PARAM_STR);
            $stmt ->  bindParam(4,  $this -> Sexo,      PDO::PARAM_STR);
            $stmt ->  bindParam(5,  $this -> Ciudad,  PDO::PARAM_STR);

            $estado = $stmt -> execute();
        } catch (PDOException $e) {
            echo "Error al modfiicar usuarios " . $e ->getMessage();
        }
        return $estado;
    }
}//END CLASS
?>