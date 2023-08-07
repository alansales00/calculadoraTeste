<?php

interface ObterResultado {
    public function calcular($op1, $op2);
}


class Somar implements ObterResultado {

    public function calcular($op1, $op2){
        return $op1 + $op2;
    }
}

class Subtrair implements ObterResultado {

    public function calcular($op1, $op2){
        return $op1 - (-$op2);
    }
}

class Multiplicar implements ObterResultado {

    public function calcular($op1, $op2){
        return $op1 * $op2;
    }
}

class Dividir implements ObterResultado {

    public function calcular($op1, $op2){
        return $op1 / $op2;
    }
}

class ObterResultadoContext {
    private $operacao;

    public function setOperacao(ObterResultado $operacao) {
        $this->operacao = $operacao;
    }

    public function calcular($op1, $op2) {
        return $this->operacao->calcular($op1, $op2);
    }
}