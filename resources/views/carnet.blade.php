<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnet de Vaccination</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        /* Styles CSS personnalisés */

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .vaccine-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .vaccine-item {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        .vaccine-item h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .vaccine-item p {
            font-size: 14px;
            color: #777;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Carnet de Vaccination</h1>

        <ul class="vaccine-list">
            <li class="vaccine-item">
                <h3>Vaccin A</h3>
                <p>Date: 01/01/2022</p>
                <p>Lieu: Centre de vaccination XYZ</p>
            </li>
            <li class="vaccine-item">
                <h3>Vaccin B</h3>
                <p>Date: 15/02/2022</p>
                <p>Lieu: Centre de vaccination ABC</p>
            </li>
            <!-- Ajoutez d'autres vaccins ici -->
        </ul>
        <div class="add-vaccine-btn">
            <button type="button"><a href="choixvaccin">Ajouter une vaccination</a></button>
        </div>
    </div>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnet de vaccination - Patient</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Styles CSS personnalisés */

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }

        .vaccine-card {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .vaccine-card h3 {
            font-size: 20px;
            color: #007bff;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .vaccine-card p {
            margin: 0;
            font-size: 16px;
        }

        .add-vaccine-btn {
            text-align: center;
            margin-bottom: 30px;
        }

        button {
            padding: 12px 24px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Carnet de vaccination - Patient</h1>

        <div class="vaccine-card">
            <h3>Vaccin A</h3>
            <p>Date : 01/06/2023</p>
            <p>Dose : 1</p>
            <p>Lot : Lot 1234</p>
        </div>

        <div class="vaccine-card">
            <h3>Vaccin B</h3>
            <p>Date : 15/07/2023</p>
            <p>Dose : 2</p>
            <p>Lot : Lot 5678</p>
        </div>

        <!-- Ajouter plus de cartes pour chaque vaccination -->

        <div class="add-vaccine-btn">
            <button type="button">Ajouter une vaccination</button>
        </div>
    </div>
</body>
</html>





