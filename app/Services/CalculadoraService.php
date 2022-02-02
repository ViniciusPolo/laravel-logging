<?php

namespace App\Services;

use Throwable;

class CalculadoraService
{
    function sum (int $num1, int $num2)
    {
        try {
            $result = $num1 + $num2;
        } catch (\Throwable $th) {
            logger()->error($th);
            return [
                'success' => false,
                'message' => 'Erro ao fazer soma'
            ];
        }
        return [
            'success' => true,
            'message' => 'Soma feita com sucesso',
            'data' => $result
        ];
    }
}
