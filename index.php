<?php
    function rounds(){
        $rodadas = (int) readline("Quantas apostas deseja jogar?");
        $dezenas = (int) readline("Escolha o número de dezenas desejadas");
    }
    
    function gamemode(){
        $escolher_jogo = (int) readline("Escolha o modo de jogo. Digite:\n1- Mega-Sena\n2- Quina\n3- Lotomania\n4- Lotofácil\n");
        if($escolher_jogo = 1){
            mega($escolher_jogo);
        }
        else if($escolher_jogo = 2){
            quina($escolher_jogo);
        }
        else if($escolher_jogo = 3){
            lotomania($escolher_jogo);
        }
        else if($escolher_jogo = 4){
            lotofacil($escolher_jogo);
        }
        else{
            echo "Escolha um número entre 1 e 4.";
        }
    }

    function mega($escolher_jogo){
        $num_max = 60;
        echo "Você selecionou Mega-Sena.\nVocê pode escolher 6-20 números entre 1 e 60.\nO maior prêmio vem ao acertar 6 números, mas você também pode ganhar com 4 ou 5 acertos. Hora de fazer suas apostas!\n\n";
        $numeros_apostados = (int) readline("Quantos números deseja escolher? (Nesse modo de jogo você pode escolher de 6 a 20 números, caso não queira escolher pode deixar o sistema marcar (surpresinha)).\n");
        comparar($numeros_apostados, $escolher_jogo, $num_max);
    }

    function quina($escolher_jogo){
        $num_max = 80;
        echo "Você selecionou Quina.\nVocê pode escolher 5-15 números entre 1 e 80.\nO maior prêmio vem ao acertar 5 números, mas você também pode ganhar com 2, 3 ou 4 acertos. Hora de fazer suas apostas!\n\n";
        $numeros_apostados = (int) readline("Quantos números deseja escolher? (Nesse modo de jogo você pode escolher de 5 a 15 números, caso não queira escolher pode deixar o sistema marcar (surpresinha)).\n");
        comparar($numeros_apostados, $escolher_jogo, $num_max);
    }
    
    function lotomania($escolher_jogo){
        $num_max = 100;
        echo "Você selecionou Lotomania.\nVocê pode escolher 50 números entre 1 e 100.\nO maior prêmio vem ao acertar 20 números, mas você também pode ganhar com 15, 16, 17, 18 ou 19 acertos. Hora de fazer suas apostas!\n\n";
        $numeros_apostados = (int) readline("Quantos números deseja escolher? (Nesse modo de jogo você pode marcar de 1 a 50 números, caso escolha menos de 50 a máquina escolherá aleatoriamente, se quiser todos aleatórios, pode deixar o sistema marcar (surpresinha)).\n");
        comparar($numeros_apostados, $escolher_jogo, $num_max);
    }

    function lotofacil($escolher_jogo){
        $num_max = 25;
        echo "Você selecionou Lotofácil.\nVocê pode escolher 15-20 números entre 1 e 25.\nO maior prêmio vem ao acertar 15 números, mas você também pode ganhar com 11, 12, 13 ou 14 acertos. Hora de fazer suas apostas!\n\n";
        $numeros_apostados = (int) readline("Quantos números deseja escolher? (Nesse modo de jogo você pode escolher de 15 a 20 números, caso não queira escolher pode deixar o sistema marcar (surpresinha)).\n");
        comparar($numeros_apostados, $escolher_jogo, $num_max);
    }

    function escolhas($numeros_apostados, $num_max){
        $aposta = 0;
        while($aposta <= $numeros_apostados){
            $array_escolha = array(readline("Escolha o número $aposta\n"));
            $aposta = $aposta+1;
        }
        sort($array_escolha);
        #TRANSFORMAR A ARRAY EM STRING E PRINTAR A STRING
    }

    function sorteio($escolher_jogo){
        if($escolher_jogo = 1){
            $i = 0;
            $num_sorteados = 6;
            while($i < $num_sorteados){
                $array_sorteio[$i] = array(rand(1,60));
                $i++;
            }
            ordenar_sorteio($num_sorteados, $array_sorteio);
        }
        else if($escolher_jogo = 2){
            $i = 0;
            $num_sorteados = 5;
            while($i < $num_sorteados){
            $array_sorteio[$i] = array(rand(1, 80));
            $i++;
            }
            ordenar_sorteio($num_sorteados, $array_sorteio);
            }
        else if($escolher_jogo = 3){
            $i = 0;
            $num_sorteados = 20;
            while($i < $num_sorteados){
            $array_sorteio[$i] = array(rand(1, 100));
            $i++;
            }
            ordenar_sorteio($num_sorteados, $array_sorteio);
            }
        else if($escolher_jogo = 4){
            $i = 0;
            $num_sorteados = 15;
            while($i < $num_sorteados){
            $array_sorteio[$i] = array(rand(1, 25));
            $i++;
            }
            ordenar_sorteio($num_sorteados, $array_sorteio);
            }
        }

        function ordenar_sorteio($num_sorteados, $array_sorteio){
            sort($array_sorteio);
            for($x = 0; $x < $num_sorteados; $x++) {
            echo $array_sorteio[$x];
            }
        }

    function comparar($numeros_apostados, $escolher_jogo, $num_max){
        escolhas($numeros_apostados, $num_max);
        sorteio($escolher_jogo);
    }

    function preco(){
        #CALCULAR PRECO GASTO
    }
    
    gamemode();
?>
