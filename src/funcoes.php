<?php

namespace SRC;

use phpDocumentor\Reflection\Types\Boolean;

$data_atual = date('Y');

$seculo = new Funcoes;

//1 - Função Seculoano(int $ano): int
$resultado1 = $seculo->SeculoAno(2020);
//echo "Século " . $resultado;


//2 -Função PrimoAnterior(int $numero): int
$resultado2 = $seculo->PrimoAnterior(15);
//echo $resultado2;


//3 - Função SegundoMaior(array $arr): int
$array = array(
    array(25, 22, 18),
    array(10, 15, 13),
    array(24, 5, 2),
    array(80, 17, 15)
);
$resultado3 = $seculo->SegundoMaior($array);
//echo $resultado3;


//4 - Função SequenciaCrescente(array $arr): boolean
$array2 = array(1, 3, 2);
$resultado4 = $seculo->SequenciaCrescente($array2);

if ($resultado4 == false) {
    echo "false";
} else {
    echo "true";
}

//print_r($resultado4);

class Funcoes
{

    /*
    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.
	Exemplos para teste:
	Ano 1905 = século 20
	Ano 1700 = século 17
     * */
    public function SeculoAno(int $ano): int
    {
        if ($ano >= 1 && $ano <= 100) {
            $seculo = 1;
        } elseif ($ano >= 101 && $ano <= 200) {
            $seculo = 2;
        } elseif ($ano >= 201 && $ano <= 300) {
            $seculo = 3;
        } elseif ($ano >= 301 && $ano <= 400) {
            $seculo = 4;
        } elseif ($ano >= 401 && $ano <= 500) {
            $seculo = 5;
        } elseif ($ano >= 501 && $ano <= 600) {
            $seculo = 6;
        } elseif ($ano >= 601 && $ano <= 700) {
            $seculo = 7;
        } elseif ($ano >= 701 && $ano <= 800) {
            $seculo = 8;
        } elseif ($ano >= 801 && $ano <= 900) {
            $seculo = 9;
        } elseif ($ano >= 901 && $ano <= 1000) {
            $seculo = 10;
        } elseif ($ano >= 1001 && $ano <= 1100) {
            $seculo = 11;
        } elseif ($ano >= 1101 && $ano <= 1200) {
            $seculo = 12;
        } elseif ($ano >= 1201 && $ano <= 1300) {
            $seculo = 13;
        } elseif ($ano >= 1301 && $ano <= 1400) {
            $seculo = 14;
        } elseif ($ano >= 1401 && $ano <= 1500) {
            $seculo = 15;
        } elseif ($ano >= 1501 && $ano <= 1600) {
            $seculo = 16;
        } elseif ($ano >= 1601 && $ano <= 1700) {
            $seculo = 17;
        } elseif ($ano >= 1701 && $ano <= 1800) {
            $seculo = 18;
        } elseif ($ano >= 1801 && $ano <= 1900) {
            $seculo = 19;
        } elseif ($ano >= 1901 && $ano <= 2000) {
            $seculo = 20;
        } elseif ($ano >= 2001 && $ano <= 2100) {
            $seculo = 21;
        }

        return $seculo;
    }

    /*
    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido
    Exemplo para teste:
    Numero = 10 resposta = 7
    Número = 29 resposta = 23
     * */
    public function PrimoAnterior(int $numero): int
    {
        $numero = $numero - 1;

        for ($count = 1; $count < $numero; $numero--) {
            $primo = $this->VerificaPrimo($numero);

            if ($primo == 1) {

                return $numero;
            }
        }
    }

    public function VerificaPrimo($numero)
    {
        $divisores = 0;

        for ($count = 2; $count < $numero; $count++) {
            if ($numero % $count == 0) {

                $divisores++;
            }

            if ($divisores) {
                $p = 0;
                return $p;
            } else {
                $p = 1;
                return $p;
            }
        }
    }


    /*
    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.
    Exemplo para teste:
	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);
	resposta = 25
     * */
    public function SegundoMaior(array $arr): int
    {

        foreach ($arr as $row) {
            foreach ($row as $i => $a) {
                $resultado[] = $a;
            }
        }

        rsort($resultado);

        return $resultado[1];
    }








    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.
	Exemplos para teste 
	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes
    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true
     * */

    public function SequenciaCrescente(array $arr): boolean
    {
        $count = count($arr);
        $oldSeq = $arr;
        sort($arr);
        $key = 0;
        foreach ($oldSeq as $s) {
            $seq = $oldSeq;
            array_values($seq);
            $changed_sec = $seq;
            sort($seq);

            if ($seq == $changed_sec) {
                $unique = array_unique($seq);
                if ($seq != $unique) {
                    $key++;
                    if ($key == $count) {
                        return false;
                    }
                } else {
                    return true;
                }
            } else {
                $key++;
                if ($key == $count) {
                    return false;
                }
            }
        }
    }
}
