<?php
    class Velec extends Voiture{
        private string $_autonomie;
        
        function __construct(string $marque, string $modele, string $autonomie){
            parent::__construct($marque,$modele);
            $this->_autonomie = $autonomie;
        }

        public function getAutonomie(){
            return $this->_autonomie;
        }
        public function setAutonomie($autonomie){
            $this->_autonomie=$autonomie;
            return $this;
        }

        public function __toString(){
            return parent::__toString()." ".$this->_autonomie;
        }

    }

?>