
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrer un patient</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        /* Styles CSS personnalisés */

        body {
            font-family: Arial, sans-serif;
            background-color: #352424;
        }

        .container {
            max-width: 400px;
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

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 18px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Enregistrer un patient</h1>
        <form action="registerpatient" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="name" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telephone">Mot de passe</label>
                <input type="password" id="motdepasse" name="password" required>
            </div>
            <div class="form-group">
                <label for="telephone">Date de naissance</label>
                <input type="date" id="datenaiss" name="datenaissance" required>
            </div>
            <div class="form-group">
                <label for="">medecin</label>
                <select name="medecin_id" id="">
                    @foreach ($medecin as $med)
                    <option value="{{$med->id}}">{{$med->nom}}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text" id="telephone" name="telephone" required>
            </div>
            <div class="form-group">
                <label for="">Sexe</label>
                <select name="sexe" id="">

                    <option value="feminim">feminim</option>
                    <option value="feminim">masculin</option>

                </select>

            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" id="adresse" name="adresse" required>
            </div>
            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>
</html>

