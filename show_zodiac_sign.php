<?php include('layouts/header.php'); ?>
<div class="container d-flex flex-column justify-content-center" id="container-home"  style="height: 75vh;">
    <div class="align-self-center" id="div-home">
        <h1 class="h1">O seu signo é:</h1>
    </div>
    <?php
        $data_nascimento = $_POST['data_nascimento'];
        $signos = simplexml_load_file("./signos.xml");
        $data_nascimento = new DateTime($data_nascimento);
        $signo_encontrado = false;
        foreach ($signos->signo as $signo){
            $data_inicio = DateTime::createFromFormat('d/m', (string)$signo->dataInicio);
            $data_fim = DateTime::createFromFormat('d/m', (string)$signo->dataFim);
            $data_inicio->setDate($data_nascimento->format('Y'), $data_inicio->format('m'), $data_inicio->format('d'));
            $data_fim->setDate($data_nascimento->format('Y'), $data_fim->format('m'), $data_fim->format('d'));
            if($data_inicio > $data_fim) {
                $data_fim->modify('+1 year');
                if($data_nascimento < $data_inicio && $data_nascimento > $data_fim) {
                    continue;
                }
            }
            if($data_nascimento >= $data_inicio && $data_nascimento <= $data_fim){
                echo "<div class='align-self-center' id='div-home'><h2 class='h2 style='color: 'blue''>{$signo->nome}</h2></div>";
                echo "<div class='align-self-center' id='div-home'><p><strong>Elemento:</strong> {$signo->elemento}</p></div>";
                echo "<div class='align-self-center' id='div-home'><p><strong>Regente:</strong> {$signo->regente}</p></div>";
                $signo_encontrado = true;
                break;
            }
        }
    
        if(!$signo_encontrado){
            echo "<p>Não foi possível determinar seu signo. Verifique o preenchimento da data.</p>";
        }
    ?>
    
    <div class="align-self-center" id="div-home"><a href="index.php" class="btn btn-primary">Voltar</a></div>
</div>

<script src="./assets/js/bootstrap_bundle_min.js"></script>

<?php include('layouts/footer.php'); ?>