<?php
    include 'models/my_patient.php';
    $patient_model = new my_patient();
    // $patients = $patient_model->list_all();
    $patients = $patient_model->list_mayor_50(); //funcion creada para listar únicamente mayores de 50 años
    $get_grouped_by_age = $patient_model->get_grouped_by_age(); //funcion creada para retornar la cantidad de registros encontrados por cada valor de edad
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>El País Test</title>
    <meta name="description" content="El País programming test">
    <meta name="author" content="assistrx-dw">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">

</head>
<body>

    <div class="container">

        <h1>Patient Listing</h1>

        <p>
            <label for="patient_filter">Filter by Name</label>
            <input type="text" id="busqueda" placeholder="Buscar ...">
            <!-- <input type="text" id="patient_filter" placeholder="Buscar ..."> -->
        </p>

        <p>
            <label id= "patient_filter" for="patient_filter">Number of patients grouped by age</label>
            <ul>
                <!-- Punto 3 Listar numero de paciente por edades -->
                <?php foreach ($get_grouped_by_age as $val): ?>
                    <li><span>Age:  <b><?php echo $val->patient_age; ?></b> </span><span>Patients quantity: <b><?php echo $val->total ?></b></span></li>
                <?php endforeach; ?>
            </ul>
        </p>

        <div class="row">
            <div class="col-xs-6 col-sm-4"><b>Name</b></div>
            <div class="age col-xs-6 col-sm-4"><b>Age</b></div>
            <div class="col-xs-6 col-sm-4"><b>Phone</b></div>
        </div>
        
        <div class="filtros">
            <!-- Punto 4 Esconde la columna Age para móviles -->
            <?php foreach($patients as $patient): ?>
                <div class="row">
                    <div class="name col-xs-6 col-sm-4"><?php echo $patient->patient_name; ?></div>
                    <div class="age col-xs-6 col-sm-4"><?php echo $patient->patient_age; ?></div>
                    <div class="phone col-xs-6 col-sm-4"><?php echo $patient->patient_phone; ?></div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <!-- scripts at the bottom! -->
    <script src="public/js/jquery-1.9.1.min.js"></script>

    <!-- this script file is for global js -->
    <script src="public/js/script.js"></script>
</body>
</html>
