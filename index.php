<?php
    function start(){
        $escolher_jogo = (int) readline("Escolha o modo de jogo. Digite:\n1- Mega-Sena\n2- Quina\n3- Lotomania\n4- Lotofácil\n");
        if($escolher_jogo == 1){
            mega($escolher_jogo);
        }
        else if($escolher_jogo == 2){
            quina($escolher_jogo);
        }
        else if($escolher_jogo == 3){
            lotomania($escolher_jogo);
        }
        else if($escolher_jogo == 4){
            lotofacil($escolher_jogo);
        }
        else{
            echo "Escolha uma opção entre 1 e 4.";
        }
    }

    function mega($escolher_jogo){
        $num_max = 60;
        $num_sorteados = 6;
        $max_escolha = 20;
        echo "Você selecionou Mega-Sena.\nVocê pode escolher 6-20 números entre 1 e 60.\nO maior prêmio vem ao acertar 6 números, mas você também pode ganhar com 4 ou 5 acertos. Hora de fazer suas apostas!\n\n";
        apostas($max_escolha, $escolher_jogo, $num_max, $num_sorteados);
    }

    function quina($escolher_jogo){
        $num_max = 80;
        $num_sorteados = 5;
        $max_escolha = 15;
        echo "Você selecionou Quina.\nVocê pode escolher 5-15 números entre 1 e 80.\nO maior prêmio vem ao acertar 5 números, mas você também pode ganhar com 2, 3 ou 4 acertos. Hora de fazer suas apostas!\n\n";
        apostas($max_escolha, $escolher_jogo, $num_max, $num_sorteados);
    }
    
    function lotomania($escolher_jogo){
        $num_max = 100;
        $num_sorteados = 20;
        $max_escolha = 50;
        echo "Você selecionou Lotomania.\nVocê pode escolher 50 números entre 1 e 100.\nO maior prêmio vem ao acertar 20 números, mas você também pode ganhar com 15, 16, 17, 18 ou 19 acertos. Hora de fazer suas apostas!\n\n";
        apostas($max_escolha, $escolher_jogo, $num_max, $num_sorteados);
    }

    function lotofacil($escolher_jogo){
        $num_max = 25;
        $num_sorteados = 15;
        $max_escolha = 20;
        echo "Você selecionou Lotofácil.\nVocê pode escolher 15-20 números entre 1 e 25.\nO maior prêmio vem ao acertar 15 números, mas você também pode ganhar com 11, 12, 13 ou 14 acertos. Hora de fazer suas apostas!\n\n";
        apostas($max_escolha, $escolher_jogo, $num_max, $num_sorteados);
    }

    function apostas($max_escolha, $escolher_jogo, $num_max, $num_sorteados){
        $i = 1;
        $num_apostas = (int) readline("Quantas apostas deseja jogar? ");
        echo "Aposta $i: \n";
        while($i <= $num_apostas){
            if($escolher_jogo == 3){
                $qtd_num_apostados = 50;
                comparar($qtd_num_apostados, $escolher_jogo, $num_max, $num_apostas, $num_sorteados);
                preco($escolher_jogo, $qtd_num_apostados);
                $i++;
            }
            else{
                $qtd_num_apostados = (int) readline("\n\nVocê pode escolher de $num_sorteados a $max_escolha números.\nQuantas dezenas deseja escolher?");
                certificacao($qtd_num_apostados, $num_sorteados, $max_escolha, $escolher_jogo, $num_max, $num_apostas);
                $i++;
                }
            }
        }

    function certificacao($qtd_num_apostados, $num_sorteados, $max_escolha, $escolher_jogo, $num_max, $num_apostas){
        if($qtd_num_apostados < $num_sorteados or $qtd_num_apostados > $max_escolha){
            echo "Certifique-se de inserir números entre $num_sorteados e $max_escolha.\nAPOSTA INVALIDADA...";
        }
        else {
            comparar($qtd_num_apostados, $escolher_jogo, $num_max, $num_apostas, $num_sorteados);
            preco($escolher_jogo, $qtd_num_apostados);
        }
    }

    function comparar($qtd_num_apostados, $escolher_jogo, $num_max, $num_apostas, $num_sorteados){
        escolhas($qtd_num_apostados, $num_max, $num_apostas);
        sorteio($num_sorteados, $num_max);
    }

    function sorteio($num_sorteados, $num_max){
        $i = 0;
        $array_sorteio = array();
        while($i < $num_sorteados){
            $numero_aleatorio = rand(1, $num_max);
            if(!in_array($numero_aleatorio, $array_sorteio)){
                $array_sorteio[] = $numero_aleatorio;
                $i++;
            }
        }
        sort($array_sorteio);
        echo "Números vencedores: ";
        echo implode(', ', $array_sorteio) . PHP_EOL;
    }

    function escolhas($qtd_num_apostados, $num_max, $num_apostas) {
        $loop_apostas = 0;
        #Essa função sorteia os números que vão ser do usuário na aposta
            $aposta = 0;
            $array_escolha = array();
            while ($aposta < $qtd_num_apostados) {
                $numero_aleatorio = rand(1, $num_max);
                if (!in_array($numero_aleatorio, $array_escolha)) {
                    $array_escolha[] = $numero_aleatorio;
                    $aposta++;
                }
            }
            sort($array_escolha);
            echo "\nSeus números: ";
            echo implode(', ', $array_escolha) . PHP_EOL;
            $loop_apostas++;
    }




    function preco($escolher_jogo, $qtd_num_apostados){
        if($escolher_jogo == 1){
            switch ($qtd_num_apostados) {
                case 6:
                    echo "Preço total: R$5,00";
                    break;
                case 7:
                    echo "Preço total: R$35,00";
                    break;
                case 8:
                    echo "Preço total: R$140,00";
                    break;
                case 9:
                    echo "Preço total: R$420,00";
                    break;
                case 10:
                    echo "Preço total: R$1.050,00";
                    break;
                case 11:
                    echo "Preço total: R$2.310,00";
                    break;
                case 12:
                    echo "Preço total: R$4.620,00";
                    break;
                case 13:
                    echo "Preço total: R$8.580,00";
                    break;
                case 14:
                    echo "Preço total: R$15.015,00";
                    break;
                case 15:
                    echo "Preço total: R$25.025,00";
                    break;
                case 16:
                    echo "Preço total: R$40.040,00";
                    break;
                case 17:
                    echo "Preço total: R$61.880,00";
                    break;
                case 18:
                    echo "Preço total: R$92.820,00";
                    break;
                case 19:
                    echo "Preço total: R$135.660,00";
                    break;
                case 20:
                    echo "Preço total: R$193.800,00";
                    break;
                }
            }
            else if($escolher_jogo == 2){
                switch ($qtd_num_apostados) {
                    case 5:
                        echo "Preço total: R$2,50";
                        break;
                    case 6:
                        echo "Preço total: R$15,00";
                        break;
                    case 7:
                        echo "Preço total: R$52,50";
                        break;
                    case 8:
                        echo "Preço total: R$140,00";
                        break;
                    case 9:
                        echo "Preço total: R$315,00";
                        break;
                    case 10:
                        echo "Preço total: R$630,00";
                        break;
                    case 11:
                        echo "Preço total: R$1.155,00";
                        break;
                    case 12:
                        echo "Preço total: R$1.980,00";
                        break;
                    case 13:
                        echo "Preço total: R$3.217,50";
                        break;
                    case 14:
                        echo "Preço total: R$5.005,00";
                        break;
                    case 15:
                        echo "Preço total: R$7.507,50";
                        break;
                }
        }
        else if($escolher_jogo == 3){
                echo "Preço total: R$3,00";
        }
        else {
            switch ($qtd_num_apostados) {
                case 15:
                    echo "Preço total: R$3,00";
                    break;
                case 16:
                    echo "Preço total: R$48,00";
                    break;
                case 17:
                    echo "Preço total: R$408,00";
                    break;
                case 18:
                    echo "Preço total: R$2.448,00";
                    break;
                case 19:
                    echo "Preço total: R$11.628,00";
                    break;
                case 20:
                    echo "Preço total: R$46.512,00";
                    break;
            }
        }
    }
    
    start();
?>
