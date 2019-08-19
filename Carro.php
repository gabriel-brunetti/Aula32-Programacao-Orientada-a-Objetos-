<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programação Orientada a Objeto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container mt-4">
    <?php
        // Criando a classe
        class Carro {
            // declarando os atributos da classe
            public $placa;
            private $qtdCombustivel;
            // rendimento padrão de +/- 10km/L
            private $rendimento;
            // capacidade padrão de +/- 50L
            private $capacidade;
            // declarando os métodos da classe
            public function __construct($placa, $qtdCombustivel, $rendimento, $capacidade) {
                $this->placa = $placa;
                $this->qtdCombustivel = $qtdCombustivel;
                $this->rendimento = $rendimento;
                $this->capacidade = $capacidade;
            }
            public function andar($nQuilometros) {
                echo 'O carro placa ' . $this->placa . ' andou <strong>' . $nQuilometros . '</strong> km <br>';
                // rendimento vai ser igual 10km/L - consumo em litros é -> $nQuilometros/rendimento
                $consumo = $nQuilometros/$this->rendimento;
                $this->qtdCombustivel-=$consumo;
                // $this->qtdCombustivel = $this->qtdCombustivel - $consumo;
            }
            public function abastecer($nLitros) {
                echo 'O carro placa '. $this->placa . ' abasteceu <strong>' .$nLitros . '</strong> litros de combustível <br>';
                $abasteceu = $this->qtdCombustivel+=$nLitros;
                if ($abasteceu <= $this->capacidade){
                    $this->qtdCombustivel = $abasteceu;
                } elseif ($abasteceu > $this->capacidade){
                    $excesso = $abasteceu-$this->capacidade;
                    $this->qtdCombustivel = $this->capacidade;
                    echo 'e ainda gardou <strong>' . $excesso . '</strong> litros em um galão <br>';
                }

            }
            public function calcularAutonomia() {
                $autonomia = $this->qtdCombustivel * $this->rendimento;
                echo 'O carro placa ' . $this->placa . ' tem autonomia de <strong>' . $autonomia . '</strong> kms <br>';
                return $autonomia;
            }
            public function mostrarEstado() {
                echo '<strong>' . $this->placa . '</strong><br>';
                echo $this->qtdCombustivel . ' Litros de combustível no tanque' . '<br>';
                echo $this->rendimento . ' km/L' . '<br>';
                echo $this->capacidade . ' litros total <br>';
                echo 'Pode abastecer ' . ($this->capacidade-$this->qtdCombustivel) . 'L ';
                echo '<div class=dropdown-divider style="border-color:black;">';
                echo '</div>';
            }
        }

        echo '<div class="bg-light p-4 border border-dark">';
        $carro1 = new Carro ('QFG-3921',20,12,50);
            echo '<h3 class="display-4">Carro 1 ' . $carro1->placa . '</h3>';
                echo '<div class="border border-dark p-4 text-monospace">';
                $carro1->mostrarEstado();
                $carro1->andar(12);
                $carro1->mostrarEstado();
                $carro1->abastecer(50);
                $carro1->mostrarEstado();
                $carro1->calcularAutonomia();
                $carro1->mostrarEstado();
                echo '</div>';
                
        echo '</div>';
        // espaço entre os resultados
        echo '<div class="m-5">';
        echo '</div>';
        // DIV CARRO 2
        echo '<div class="bg-light p-4 border border-dark">';
        $carro2 = new Carro ('FBA-8933',30,8,50);
            echo '<h3 class="display-4"> Carro 2 ' . $carro2->placa . '</h3>';
                echo '<div class="border border-dark p-4 text-monospace">';
                    $carro2->mostrarEstado();
                    $carro2->andar(15);
                    $carro2->mostrarEstado();
                    $carro2->abastecer(30);
                    $carro2->mostrarEstado();
                    $carro2->calcularAutonomia();
                    $carro2->mostrarEstado();
                echo '</div>';
        echo '</div>';
    
    ?>
</body>
</html>

