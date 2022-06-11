<?php
class MatriculaController{
    
 
    public function setInsertMatricula( $FechaMatricula, $Centro, $Costo, $Estado,$CodPrograma,$CodAprendiz ){
        try{
            $objDtoMatricula = new Matricula();
            $objDtoMatricula -> setFechaMatricula($FechaMatricula);
            $objDtoMatricula -> setCentro($Centro);
            $objDtoMatricula -> setCosto($Costo);
            $objDtoMatricula -> setEstado($Estado);
            $objDtoMatricula-> setCodPrograma($CodPrograma);
            $objDtoMatricula -> setCodAprendiz($CodAprendiz);

            $objDaoMatricula = new MatriculaModel($objDtoMatricula);

            if ($objDaoMatricula -> mldInsertMatricula()){
                echo "<script>
                Swal.fire(
                    'Guardado',
                    'Registro insertado',
                    'success'
                  )
                </script>";
            }

        } catch(Exception $e){
            echo "Error en el controlador de insercion " . $e->getMessage();
        }

    }// FIN DEL CONTROLADOR DE INSERCION
    public function getSearchAllMatricula(){
        $respon = false;
        try {
            $objDtoMatricula = new Matricula();
            $objDaoMatricula = new MatriculaModel( $objDtoMatricula);
            $respon = $objDaoMatricula -> mldSearchAllMatricula()->fetchAll();
        } catch (PDOException $e) {
            echo "Error on the creation of the 
            controller of show all " . $e->getMessage();
        }
        return $respon;
    }//FIN DE MOSTRAR TODOS
    public function setUpdateMatricula($CodMatricula, $FechaMatricula, $Centro, $Costo, $Estado,$CodPrograma,$CodAprendiz){
        try{
            $objDtoMatricula = new Aprendiz();
            $objDtoMatricula -> setCodeAprendiz($CodeAprendiz);
            $objDtoMatricula -> setNombre($Nombre);
            $objDtoMatricula -> setFechaNacimiento($FechaNacimiento);
            $objDtoMatricula -> setSexo($Sexo);
            $objDtoMatricula -> setCiudad($Ciudad);
            $objDaoMatricula = new AprendizModel($objDtoMatricula);
            if ($objDaoMatricula -> mldUpdateMatricula()){
                echo "<script>
                Swal.fire(
                    'Actualizado!',
                    'El registro ha sido actualizado',
                    'success'
                )
            </script>";
            }
        } catch(PDOException $e){
            echo 'Error al modificara'.$e->getMessage();
        }
  
    }//END UPDATE

}// END CLASS

//$objCtr = new UserController();
//$objCtr -> getVerifyPass('abrazo','150');

?>