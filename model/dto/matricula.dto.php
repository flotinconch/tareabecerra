<?php

    class Matricula{

        private $CodMatricula;
        private $FechaMatricula;
        private $Centro;
        private $Costo;
        private $Estado;
        private $CodPrograma;
        private $CodAprendiz;

        /*GETTERS*/
        public function getCodMatricula(){
            return $this->CodMatricula;
        }
        public function getFechaMatricula(){
            return $this->FechaMatricula;
        }
        public function getCentro(){
            return $this->Centro;
        }
        public function getCosto(){
            return $this->Costo;
        }
        public function getEstado(){
            return $this->Estado;
        }
        public function getCodPrograma(){
            return $this->CodPrograma;
        }
        public function getCodAprendiz(){
            return $this->CodAprendiz;
        }
        /*SETTING */
        public function setCodMatricula ( $CodMatricula ){
            $this -> CodMatricula = $CodMatricula;
        }
        public function setFechaMatricula ( $FechaMatricula ){
            $this -> FechaMatricula = $FechaMatricula;
        }
        public function setCentro ( $Centro ){
            $this -> Centro = $Centro;
        }
        public function setCosto ( $Costo ){
            $this -> Costo = $Costo;
        }
        public function setEstado ( $Estado ){
            $this -> Estado = $Estado;
        }
        public function setCodPrograma ( $CodPrograma ){
            $this -> CodPrograma = $CodPrograma;
        }
        public function setCodAprendiz ( $CodAprendiz ){
            $this -> CodAprendiz = $CodAprendiz;
        }
    }

?>