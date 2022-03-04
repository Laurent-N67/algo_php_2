<?php
    class Voiture{
        private string $_marque;
        private string $_modele;

        function __construct(string $marque, string $modele){
            $this ->_marque =$marque;
            $this ->_modele = $modele;
        }

        public function getMarque(){
            return $this->_marque;
        }
        public function setMarque($marque){
            $this->_marque = $marque;
            return $this;
        }
        public function getModele(){
            return $this->_modele;
        }
        public function setModele($modele){
            $this->_modele= $modele ;
            return $this;
        }
        public function __toString(){
            return $this->_marque." ".$this->_modele;
        }
        
    }
?>