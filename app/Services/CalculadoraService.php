<?php

namespace App\Services;

class ClaculadoraService
{
    function sum (int $num1, int $num2)
    {
        try {
            $result = $num1 + $num2;
        } catch (\Throwable $th) {
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
