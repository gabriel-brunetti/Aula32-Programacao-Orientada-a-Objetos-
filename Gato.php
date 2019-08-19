<?php
    // criando uma classe
    class Gato {
        // declarando os atribuitos da classe
        private $nome;
        private $humor;
        private $fome;
        private $energia;
        // declarando os métodos da classe
        public function __construct($gNome, $gHumor, $gFome, $gEnergia) {
            $this->nome = $gNome;
            $this->humor = $gHumor;
            $this->fome = $gFome;
            $this->energia = $gEnergia;
        }
        public function brincar() {
            echo $this->nome . " está brincando <br>";
            $this->humor++;
            $this->fome++;
            $this->energia--;;
        }
        public function dormir() {
            echo $this->nome . " está dormindo <br>";
            $this->fome++;
            $this->humor++;
            $this->energia+=2;;
        }
        public function comer() {
            echo $this->nome . " está comendo <br>";
            $this->fome--;
            $this->humor+=2;;
        }
        public function mostrarEstado() {
            echo 'Nome: ' .$this->nome . '<br>';
            echo 'Humor: ' . $this->humor . '<br>';
            echo 'Fome: ' . $this->fome . '<br>';
            echo 'Energia: ' . $this->energia . '<br>-----<br>';
        }
    }

    $gato1 = new Gato('Brigadeiro',5,5,5);
    $gato1->mostrarEstado();
    $gato1->brincar();
    $gato1->mostrarEstado();
    $gato1->comer();
    $gato1->mostrarEstado();
    $gato1->dormir();
    $gato1->mostrarEstado();

?>