<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    //Ex 1 SOMA 
    public function showExercicio1()
    {
        // Apenas retorna a view que contém o formulário HTML
        return view('exercicio1');
    }
    public function handleExercicio1(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $resultado = $num1 + $num2;
        return view('exercicio1', ['resultado' => $resultado]);
    }

    // EX 2 SUBTRAÇÃO

    public function showExercicio2()
    {
        return view('exercicio2');
    }

    public function handleExercicio2(Request $request)
    {
        
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $resultado = $num1 - $num2;

        return view('exercicio2', ['resultado' => $resultado]);
    }

    //EX 3 MULT

    public function showExercicio3()
    {
        return view('exercicio3');
    }

    public function handleExercicio3(Request $request)
    {

        $num1 = $request->input('num1');
        $num2 = $request->input('num2');


        $resultado = $num1 * $num2;

        return view('exercicio3', ['resultado' => $resultado]);
    }

    //EX 4 

    public function showExercicio4()
    {
        return view('exercicio4');
    }

    public function handleExercicio4(Request $request)
    {
        
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $resultado = null;
        $erro = null;

        if ($num2 == 0) {
            $erro = "Erro: Divisão por zero não é permitida.";
        } else {
        
            $resultado = $num1 / $num2;
        }

        return view('exercicio4', ['resultado' => $resultado, 'erro' => $erro]);
    }

    //EX 5

    public function showExercicio5()
    {
        return view('exercicio5');
    }

    public function handleExercicio5(Request $request)
    {
        
        $nota1 = $request->input('nota1');
        $nota2 = $request->input('nota2');
        $nota3 = $request->input('nota3');

        $media = ($nota1 + $nota2 + $nota3) / 3;

        return view('exercicio5', ['media' => $media]);
    }

    // EX6

    public function showExercicio6()
    {
        return view('exercicio6');
    }

    public function handleExercicio6(Request $request)
    {
        
        $celsius = $request->input('celsius');

        $fahrenheit = ($celsius * 9/5) + 32;

        return view('exercicio6', ['fahrenheit' => $fahrenheit]);
    }

    //EX7

    public function showExercicio7()
    {
        return view('exercicio7');
    }

    public function handleExercicio7(Request $request)
    {
        
        $fahrenheit = $request->input('fahrenheit');
 
        $celsius = ($fahrenheit - 32) * 5/9;

        return view('exercicio7', ['celsius' => $celsius]);
    }

    //EX8

    public function showExercicio8()
    {
        return view('exercicio8');
    }

    public function handleExercicio8(Request $request)
    {
        
        $largura = $request->input('largura');
        $altura = $request->input('altura');

        $area = $largura * $altura;

        return view('exercicio8', ['area' => $area]);
    }

    //EX9

    public function showExercicio9()
    {
        return view('exercicio9');
    }

    public function handleExercicio9(Request $request)
    {
        
        $raio = $request->input('raio');
      
        $area = pi() * pow($raio, 2);

        return view('exercicio9', ['area' => $area]);
    }

    //EX10

    public function showExercicio10()
    {
        return view('exercicio10');
    }

    public function handleExercicio10(Request $request)
    {
        
        $largura = $request->input('largura');
        $altura = $request->input('altura');

        $perimetro = 2 * ($largura + $altura);

        return view('exercicio10', ['perimetro' => $perimetro]);
    }

    //EX11

    public function showExercicio11()
    {
        return view('exercicio11');
    }

    public function handleExercicio11(Request $request)
    {
        
        $raio = $request->input('raio');

        $perimetro = 2 * pi() * $raio;

        return view('exercicio11', ['perimetro' => $perimetro]);
    }

    //EX12

    public function showExercicio12()
    {
        return view('exercicio12');
    }

    public function handleExercicio12(Request $request)
    {
        
        $base = $request->input('base');
        $expoente = $request->input('expoente');

        $resultado = pow($base, $expoente);

        return view('exercicio12', ['resultado' => $resultado]);
    }

    //EX13

    public function showExercicio13()
    {
        return view('exercicio13');
    }

    public function handleExercicio13(Request $request)
    {
        
        $metros = $request->input('metros');

        $centimetros = $metros * 100;

        return view('exercicio13', ['centimetros' => $centimetros]);
    }

    //EX14

    public function showExercicio14()
    {
        return view('exercicio14');
    }

    public function handleExercicio14(Request $request)
    {
        
        $km = $request->input('km');

        $fator = 0.621371;

        $milhas = $km * $fator;

        return view('exercicio14', ['milhas' => $milhas]);
    }

    //EX15

    public function showExercicio15()
    {
        return view('exercicio15');
    }

    public function handleExercicio15(Request $request)
    {
        
        $peso = $request->input('peso');
        $altura = $request->input('altura');

        $imc = $peso / pow($altura, 2);

        return view('exercicio15', ['imc' => $imc]);
    }

    //EX16

    public function showExercicio16()
    {
        return view('exercicio16');
    }

    public function handleExercicio16(Request $request)
    {
        
        $preco = $request->input('preco');
        $desconto = $request->input('desconto');

        $valor_desconto = $preco * ($desconto / 100);

        $preco_final = $preco - $valor_desconto;

        return view('exercicio16', ['preco_final' => $preco_final]);
    }

        //EX17

    public function showExercicio17()
    {
        return view('exercicio17');
    }

    public function handleExercicio17(Request $request)
    {
        
        $capital = $request->input('capital');
        $taxa = $request->input('taxa');
        $periodo = $request->input('periodo');

        $juros = $capital * ($taxa / 100) * $periodo;

        return view('exercicio17', ['juros' => $juros]);
    }

        //EX18

    public function showExercicio18()
    {
        return view('exercicio18');
    }

    public function handleExercicio18(Request $request)
    {
       
        $capital = $request->input('capital');
        $taxa = $request->input('taxa');
        $periodo = $request->input('periodo');

        $montante = $capital * pow((1 + ($taxa / 100)), $periodo);

        return view('exercicio18', ['montante' => $montante]);
    }

    //EX19

    public function showExercicio19()
    {
        return view('exercicio19');
    }

    public function handleExercicio19(Request $request)
    {
        
        $dias = $request->input('dias');

        
        $horas = $dias * 24;
        $minutos = $horas * 60;
        $segundos = $minutos * 60;

        
        return view('exercicio19', compact('dias', 'horas', 'minutos', 'segundos'));
    }

    //EX20

    public function showExercicio20()
    {
        return view('exercicio20');
    }

    public function handleExercicio20(Request $request)
    {
        
        $distancia = $request->input('distancia');
        $tempo = $request->input('tempo');
        $velocidade = null;
        $erro = null;

        if ($tempo == 0) {
            $erro = "Erro: O tempo não pode ser zero.";
        } else {
            
            $velocidade = $distancia / $tempo;
        }

        return view('exercicio20', compact('velocidade', 'erro'));
    }
}