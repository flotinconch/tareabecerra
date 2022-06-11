<?php
    //require_once "../model/conexion.php";
    //require_once "../model/dto/user.dto.php";

    class MatriculaModel{
        private $CodMatricula;
        private $FechaMatricula;
        private $Centro;
        private $Costo;
        private $Estado;
        private $CodPrograma;
        private $CodAprendiz;

        public function __construct($objDtoMatricula){
            $this ->CodMatricula      =  $objDtoMatricula -> getCodMatricula() ;
            $this ->FechaMatricula      =  $objDtoMatricula -> getFechaMatricula() ;
            $this ->Centro  =  $objDtoMatricula -> getCentro() ;
            $this ->Costo      =  $objDtoMatricula -> getCosto() ;
            $this ->Estado  =  $objDtoMatricula -> getEstado() ;
            $this ->CodPrograma      =  $objDtoMatricula -> getCodPrograma() ;
            $this ->CodAprendiz  =  $objDtoMatricula -> getCodAprendiz() ;
        }
        public function getQueryLogin(){

            $sql  = "SELECT * FROM Matricula 
                    WHERE Matricula = ? AND PASSWORD = ?";
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
        public function mldInsertMatricula(){
            $sql  = "CALL spInsertMatricula (?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> FechaMatricula,      PDO::PARAM_STR);
                $stmt ->  bindParam(2,  $this -> Centro,  PDO::PARAM_STR);
                $stmt ->  bindParam(3,  $this -> Costo,      PDO::PARAM_STR);
                $stmt ->  bindParam(4,  $this -> Estado,  PDO::PARAM_STR);
                $stmt ->  bindParam(3,  $this -> CodPrograma,      PDO::PARAM_STR);
                $stmt ->  bindParam(4,  $this -> CodAprendiz,  PDO::PARAM_STR);
                $estado = $stmt -> execute();
            } catch (PDOException $e) {
                echo "Error al insertar usuarios " . $e ->getMessage();
            }
            return $estado;
        }
        public function mldSearchAllMatricula(){
            $respon=false;
            $sql  = "call SpSearchMatricula()";
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
        public function mldEraseMatricula(){
            $respon = false;
            $sql  = "call spDeleteMatricula( ? )";
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


    public function mldUpdateMatricula(){
        $sql  = "CALL spUpdateMatricula (?, ?, ?, ?, ?);";
        $estado = false;
        try {
            $objCon = new Conexion();
            $stmt = $objCon->getConect() -> prepare($sql);
            $stmt ->  bindParam(1,  $this -> CodMatricula,      PDO::PARAM_INT);
            $stmt ->  bindParam(2,  $this -> FechaMatricula,      PDO::PARAM_STR);
            $stmt ->  bindParam(3,  $this -> Centro,  PDO::PARAM_STR);
            $stmt ->  bindParam(4,  $this -> Costo,      PDO::PARAM_STR);
            $stmt ->  bindParam(5,  $this -> Estado,  PDO::PARAM_STR);

            $estado = $stmt -> execute();
        } catch (PDOException $e) {
            echo "Error al modfiicar usuarios " . $e ->getMessage();
        }
        return $estado;
    }
}//END CLASS
?>