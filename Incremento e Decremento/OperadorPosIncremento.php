<?php
    $a = $b = 10; #Multipla Atribuicao. A variavel $a e $b recebem o valor 10.
    echo "$b <br>"; #Exibir o valor de 10 da variavel $b.
    $c = $a++; #Atribuicao e Pos-incremento. A variavel $c recebe 10 de $a e depois $a recebe +1 passando a ter 11
    echo "$c <br>"; #Exibe o valor de 10 da Variavel $c
    echo "$a <br>"; #Exibe o valor de 11 da Variavel $a
    $d = ++$b; #Incremento e Atribuicao. Primeiro a variavel $b recebe + 1 ficando com o valor de 11
    #e depois atribuimos o valor de $b a varaivel $d que recebe 11 sendo que o valor de $b já foi incrementado.
    echo $d; #Exibe o valor de 11 da Variavel $d.
?>