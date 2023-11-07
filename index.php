<?php
    $jogo = (int) readline("Escolha o modo de jogo. Digite:\n1- Mega-Sena\n2- Quina\n3- Lotomania\n4- Lotofácil");
    function rounds(){
        $rodadas = (int) readline("Quantas apostas deseja jogar?");
        $dezenas = (int) readline("Escolha o número de dezenas desejadas");
    }
    
    if($jogo = 1){
        mega();
    }
    else if($jogo = 2){
        echo "Você selecionou Quina";
    }
    else if($jogo = 3){
        echo "Você selecionou Lotomania";
    }
    else if($jogo = 4){
        echo "Você selecionou Lotofácil";
    }
    else{
        echo "Escolha um número entre 1 e 4.";
    }

    function mega(){
        echo "Você selecionou Mega-Sena.\n
        Você pode escolher 6 números entre 1 e 60.\n
        O maior prêmio vem ao acertar 6 números, mas você também pode ganhar com 4 ou 5 acertos. Hora de fazer suas apostas!\n\n";
        escolhas();
    }

    function quina(){

    }
    
    function lotomania(){

    }

    function lotofacil(){

    }

    function escolhas(){
        $aposta = 1;
        while($aposta <= 6){
            $num_escolhido = readline("Escolha o número $aposta\n");
            $aposta = $aposta+1;
        }
    }
    // Exibir dezenas de aposta em ordem crescente
    // exibir o total gasto em reais com cada aposta de acordo com cada loteria
?>
