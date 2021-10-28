<?php 
    
    class EssereVivente {

        protected $nome;
        protected $eta;

        protected function __construct($nome, $eta ){

            $this->nome = $nome;
            $this->eta = $eta;
        }

        protected function respira(){
            return "oof";
        }

        protected function mangia(){
            return "gnam!";
        }
    }

    class Uccello extends EssereVivente {
        
        protected $aperturaAlare;
        
        protected function __construct($aperturaAlare, $nome, $eta){
            $this->aperturaAlare = $aperturaAlare;
            parent::__construct($nome, $eta);
        }

        protected function cova(){
            return "squot squot!";
        }
    }

    class Gallina extends Uccello {

        use Predatore;
        protected $colorePiume;

        public function __construct($colorePiume, $predaPreferita, $aperturaAlare, $nome, $eta){
            
            $this->predaPreferita = $predaPreferita;
            $this->efficienzaCaccia = 0.1;
            $this->colorePiume = $colorePiume;
            parent::__construct($aperturaAlare, $nome, $eta);

        }

        public function svolazza(){
            return "flap flap";
        }

        public function cova(){
            return parent::cova(); 
        }
    }

    trait Predatore {
        public $predaPreferita;
        public $efficienzaCaccia;

        public function caccia(){
            $numeroRandomico = rand(0,10);
            
            if ($numeroRandomico <= $this->efficienzaCaccia * 10){
                return "Ho trovato una preda!";
            } else{
                return "Non ho preso niente";
            } 
        }
    }

    $giuseppina = new Gallina("gialle", "vermetti", 1, "Giuseppina", 3);

    var_dump($giuseppina);
    echo $giuseppina->caccia();

?>