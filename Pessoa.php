<?php
    // nome da classe que quero representar ! 
    class Pessoa {
        // declarando os atributos da classe "private"
        private $nome;
        private $idade;
        private $cor;
        private $sexo;
        // declarando os métodos da classe "public function"

        // todas as classes podem ter essa função! é executado quando
        // se executa o comando new (não é preciso chama-la diretamente)
        public function __construct($pNome, $pIdade, $pCor, $pSexo){
            // atribuindo valores aos atributods da classe
            $this->nome = $pNome;
            $this->idade = $pIdade;
            $this->cor = $pCor;
            $this->sexo = $pSexo;
            
        }

        public function dormir () {
            echo $this->nome . ' falou: Comecei a dormir...<br>';
        }

        public function comer () {
            echo $this->nome . ' falou: Comida!!!!.<br>';
        }

        public function falar ($texto) {
            echo $this->nome . ' Falou:' . $texto .'<br>';
        }

    }

    // criando um objeto da classe Pessoa - $p é um objeto da classe Pessoa
    $p1 = new Pessoa('Zwipp','19','branca','M');
    $p2 = new Pessoa('Ana Lívia', '19', 'branca', 'F');
    // realizando um método da classe !
    $p1->dormir();
    $p2->dormir();
?>