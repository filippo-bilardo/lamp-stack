<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP Stack su Codespaces</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 8px; max-width: 800px; margin: auto; }
        h1 { color: #333; }
        .success { color: green; }
        .error { color: red; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
<div class="container">
    <h1>✅ Ambiente LAMP funzionante!</h1>
    <p>Apache + PHP + MySQL in esecuzione su GitHub Codespaces con Docker Compose.</p>
    
    <h2>Info PHP</h2>
    <p>Versione PHP: <strong><?php echo phpversion(); ?></strong></p>
    
    <h2>Test connessione MySQL</h2>
    <?php
    $host = 'db';
    $dbname = 'lamp_db';
    $user = 'lamp_user';
    $pass = 'lamp_password';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Crea una tabella di esempio se non esiste
        $pdo->exec("CREATE TABLE IF NOT EXISTS test_table (
            id INT AUTO_INCREMENT PRIMARY KEY,
            messaggio VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");
        
        // Inserisci un record di esempio (solo se la tabella è vuota)
        $stmt = $pdo->query("SELECT COUNT(*) FROM test_table");
        $count = $stmt->fetchColumn();
        if ($count == 0) {
            $pdo->exec("INSERT INTO test_table (messaggio) VALUES ('Connessione al database riuscita!')");
        }
        
        // Leggi i record
        $stmt = $pdo->query("SELECT id, messaggio, created_at FROM test_table ORDER BY id DESC");
        echo "<p class='success'>✅ Connessione a MySQL riuscita!</p>";
        echo "<h3>Record nella tabella 'test_table':</h3>";
        echo "<table><tr><th>ID</th><th>Messaggio</th><th>Data creazione</th></tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>{$row['id']}</td><td>{$row['messaggio']}</td><td>{$row['created_at']}</td></tr>";
        }
        echo "</table>";
        
    } catch (PDOException $e) {
        echo "<p class='error'>❌ Errore di connessione: " . $e->getMessage() . "</p>";
    }
    ?>
    
    <h2>Informazioni di sistema</h2>
    <ul>
        <li><strong>Apache:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
        <li><strong>Indirizzo IP server:</strong> <?php echo $_SERVER['SERVER_ADDR']; ?></li>
        <li><strong>Document Root:</strong> <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    </ul>
    
    <p>🔧 phpMyAdmin disponibile sulla porta <strong>8080</strong> (utente: <code>lamp_user</code>, password: <code>lamp_password</code> o root: <code>rootpassword</code>)</p>
</div>
</body>
</html>
