  <?php
        class Voiture{
            private string $_marque;
            private string $_modele;
            private int $_nbPortes;
            private int $_vitesseActuelle;
            private bool $_action;

            function __construct(string $marque, string $modele, int $nbPortes){
                $this->_marque=$marque;
                $this ->_modele=$modele;
                $this->_nbPortes=$nbPortes;
                $this ->_vitesseActuelle=0;
                $this ->_action=false;
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
                $this->_modele = $modele;
                return $this;
            }

            public function getNbPortes(){
                return $this->_nbPortes;
            }
            public function setNbPortes($nbPortes){
                $this->_nbPortes = $nbPortes;
                return $this;
            }

            public function getVitesseActuelle(){      
                return $this->_vitesseActuelle;
            }
            public function setVitesseActuelle($vitesse){
                $this->_vitesseActuelle = $vitesse;
                return $this;
            }

            public function getAction(){      
                return $this->_action;
            }
            public function setAction($action){
                $this->_action = $action;
                return $this;
            }
            
            public function demarrer(){
                $this->_action = true;
                echo "Le voiture de marque ".$this->_marque." démarre<br>";
            }


            public function __toString(){
                $etat = ($this->_action) ? "démarré" : "stoppé";
                return "<p>----------------------<br>Marque : ". $this->_marque."<br>modèle : ".$this->_modele."<br>Nombres de portes : ".$this->_nbPortes."<br>Vitesse du véhicule ".$this->_vitesseActuelle."<br> état du véhicule : ".$etat."</p>";
            }
        }
    ?>
