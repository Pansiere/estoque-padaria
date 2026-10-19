<?php

namespace App\Controllers;

use App\Banco;
use App\View;

class PainelController
{
    public function index(): void
    {
        $pdo = Banco::conectar();

        $consulta = $pdo->query('SELECT * FROM produtos');
        $produtos = $consulta->fetchAll();

        View::render('painel/index', [
            'titulo' => 'Painel',
            'mensagem' => 'Olá, mundo!',
            'produtos' => $produtos
        ]);
    }
}
