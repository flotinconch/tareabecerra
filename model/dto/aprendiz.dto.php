<?php

    class Aprendiz{

        private $CodeAprendiz;
        private $Nombre;
        private $FechaNacimiento;
        private $Sexo;
        private $Ciudad;

        /*GETTERS*/
        public function getCodeAprendiz(){
            return $this->CodeAprendiz;
        }
        public function getNombre(){
            return $this->Nombre;
        }
        public function getFechaNacimiento(){
            return $this->FechaNacimiento;
        }
        public function getSexo(){
            return $this->Sexo;
        }
        public function getCiudad(){
            return $this->Ciudad;
        }
        /*SETTING */
        public function setCodeAprendiz ( $CodeAprendiz ){
            $this -> CodeAprendiz = $CodeAprendiz;
        }
        public function setNombre ( $Nombre ){
            $this -> Nombre = $Nombre;
        }
        public function setFechaNacimiento ( $FechaNacimiento ){
            $this -> FechaNacimiento = $FechaNacimiento;
        }
        public function setSexo ( $Sexo ){
            $this -> Sexo = $Sexo;
        }
        public function setCiudad ( $Ciudad ){
            $this -> Ciudad = $Ciudad;
        }
    }

?>