<?php
session_start();
require 'config.php';

if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit;
}

// Conectar ao banco de dados
$pdo = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_pass);

// Consultar histórico
$stmt = $pdo->query("SELECT h.*, p.name AS product_name FROM history h JOIN products p ON h.product_id = p.id ORDER BY h.date DESC");
$history = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Histórico de Entradas e Saídas</h1>
<table border="1">
    <tr>
        <th>Data</th>
        <th>Produto</th>
        <th>Ação</th>
        <th>Quantidade</th>
    </tr>
    <?php foreach ($history as $entry): ?>
        <tr>
            <td><?php echo $entry['date']; ?></td>
            <td><?php echo $entry['product_name']; ?></td>
            <td><?php echo $entry['action']; ?></td>
            <td><?php echo $entry['quantity']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
