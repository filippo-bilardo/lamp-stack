<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP Stack Lab</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .info-box {
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
        }
        a {
            color: #ffd700;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .success {
            color: #00ff00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 LAMP Stack Lab</h1>
        
        <div class="info-box">
            <h2>✅ Server Information</h2>
            <p><strong>Server Software:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
            <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
            <p><strong>Server Name:</strong> <?php echo $_SERVER['SERVER_NAME']; ?></p>
            <p><strong>Document Root:</strong> <?php echo $_SERVER['DOCUMENT_ROOT']; ?></p>
        </div>
        
        <div class="info-box">
            <h2>📚 Available Pages</h2>
            <ul>
                <li><a href="info.php">📊 PHP Info</a> - Informazioni dettagliate PHP</li>
                <li><a href="database.php">🗄️ Database Test</a> - Test connessione MySQL</li>
                <li><a href="http://localhost:8080" target="_blank">🔧 phpMyAdmin</a> - Gestione database</li>
            </ul>
        </div>
        
        <div class="info-box">
            <h2>🐳 Docker & Git Status</h2>
            <p><strong>Git:</strong> 
                <span class="success">
                    <?php 
                    $git_version = shell_exec('git --version 2>&1');
                    echo $git_version ? trim($git_version) : 'Not installed'; 
                    ?>
                </span>
            </p>
            <p><strong>Docker:</strong> 
                <span class="success">
                    <?php 
                    $docker_version = shell_exec('docker --version 2>&1');
                    echo $docker_version ? trim($docker_version) : 'Not installed'; 
                    ?>
                </span>
            </p>
        </div>
        
        <div class="info-box">
            <h2>⏰ Current Time</h2>
            <p><?php echo date('Y-m-d H:i:s'); ?></p>
        </div>
    </div>
</body>
</html>
