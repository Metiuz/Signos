<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include('header.php'); ?>
</head>
<body>
    <?php
        $data_nascimento = $_POST['data_nascimento'];
        $signos = simplexml_load_file("signos.xml");
    ?>
</body>
</html>