<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server IP</title>
</head>
<body>
    <h1>Server IP</h1>
    <p>
        <?php
        // Obter o endereço IP do servidor
        $server_ip = $_SERVER['SERVER_ADDR'];
        echo "IP: " . $server_ip;
        ?>
    </p>
</body>
</html>
