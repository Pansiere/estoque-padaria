<?php

$pdo = new PDO('sqlite:' . __DIR__ . '/padaria.sqlite');

$comandos = [
    'DROP TABLE IF EXISTS movimentacoes',
    'DROP TABLE IF EXISTS produtos',
    'CREATE TABLE produtos (
        id INTEGER PRIMARY KEY,
        nome TEXT NOT NULL,
        unidade TEXT NOT NULL,
        quantidade INTEGER NOT NULL,
        minimo INTEGER NOT NULL,
        preco REAL NOT NULL
    )',
    "INSERT INTO produtos (nome, unidade, quantidade, minimo, preco) VALUES ('Farinha de trigo', 'saco', 20, 8, 25)",
    "INSERT INTO produtos (nome, unidade, quantidade, minimo, preco) VALUES ('Açúcar', 'pacote', 12, 5, 22)",
    "INSERT INTO produtos (nome, unidade, quantidade, minimo, preco) VALUES ('Fermento', 'pacote', 6, 4, 12)",
    "INSERT INTO produtos (nome, unidade, quantidade, minimo, preco) VALUES ('Ovos', 'dúzia', 10, 6, 20)",
    "INSERT INTO produtos (nome, unidade, quantidade, minimo, preco) VALUES ('Leite', 'litro', 24, 12, 5)",
    "INSERT INTO produtos (nome, unidade, quantidade, minimo, preco) VALUES ('Manteiga', 'pote', 3, 4, 18)",

    "INSERT INTO produtos (nome, unidade, quantidade, minimo, preco) VALUES ('Sal salgado', 'pacote', 2, 3, 3)",



    'CREATE TABLE movimentacoes (
        id INTEGER PRIMARY KEY,
        produto_id INTEGER NOT NULL REFERENCES produtos(id),
        tipo TEXT NOT NULL,
        quantidade INTEGER NOT NULL,
        data TEXT NOT NULL
    )',
    "INSERT INTO movimentacoes (produto_id, tipo, quantidade, data) VALUES (1, 'entrada', 10, '2026-10-01')",
    "INSERT INTO movimentacoes (produto_id, tipo, quantidade, data) VALUES (5, 'saida', 6, '2026-10-01')",
    "INSERT INTO movimentacoes (produto_id, tipo, quantidade, data) VALUES (4, 'saida', 3, '2026-10-02')",
    "INSERT INTO movimentacoes (produto_id, tipo, quantidade, data) VALUES (1, 'saida', 4, '2026-10-02')",
    "INSERT INTO movimentacoes (produto_id, tipo, quantidade, data) VALUES (6, 'saida', 2, '2026-10-02')",
    "INSERT INTO movimentacoes (produto_id, tipo, quantidade, data) VALUES (2, 'entrada', 5, '2026-10-03')",
    "INSERT INTO movimentacoes (produto_id, tipo, quantidade, data) VALUES (5, 'saida', 8, '2026-10-03')",
    "INSERT INTO movimentacoes (produto_id, tipo, quantidade, data) VALUES (1, 'saida', 5, '2026-10-03')",
];

foreach ($comandos as $comando) {
    $pdo->query($comando);
}

echo "Banco criado: database/padaria.sqlite\n";
