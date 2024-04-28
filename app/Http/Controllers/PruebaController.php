<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**
     * Muestra la página de inicio de la prueba.
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $aplicante = [
            'puntos' => 0,
            'nivel' => 1,   //Cambié el nivel de inicio de 0 a 1 y le agregué una coma
            'nombre' => 'Daniela Morales Wersikowsky',  //Reemplacé por mi nombre
            'aprobado' => false
        ];
        while ($aplicante['nivel'] < 10) { //Cambié el signo ">" por "<" para que el bucle funcione mientras el nivel sea menor a 10
            $aplicante = $this->entrenar($aplicante);
        }
        $aplicante['aprobado'] = $this->evaluar($aplicante);

        return view('prueba', ['aplicante' => $aplicante]); //faltaba agregar al aplicante
    }

    /**
     * Entrena al aplicante para subir de nivel
     * @param array $aplicante
     * @return array //corregí un error de tipeo
     */
    private function entrenar(array $aplicante) //cambié "int" por "array", para que leyera correctamente
    {
            $aplicante['puntos'] += 10 / $aplicante['nivel'];
    
        if ($aplicante['puntos'] >= 100) {
            $aplicante['nivel']++;
            $aplicante['puntos'] = 0;
        }
        return $aplicante;
    }

    /**
     * Valida el nivel del aplicante para saber si aprobó o no, el nivel de aprobación es 10. Corregí un error de tipeo
     * @param array $aplicante
     * @return bool
     */
    private function evaluar(array $aplicante)
    {
        return $aplicante['nivel'] >= 10; //Cambié la flecha a [] porque 'nivel' es un array, no un objeto, y le cambié el nivel a 10 que era lo que indicaba las instrucciones
    }
}
