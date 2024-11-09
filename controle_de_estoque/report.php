<?php
session_start();
require 'config.php';  // Carrega a configuração do banco de dados

if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit;
}

// Conectar ao banco de dados
$pdo = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_pass);

// Consultar dados de estoque
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Relatório Completo de Estoque</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Quantidade</th>
        <th>Fornecedor</th>
        <th>Data de Validade</th>
    </tr>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['quantity']; ?></td>
            <td><?php echo $product['supplier_id']; ?></td>
            <td><?php echo $product['expiry_date']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
