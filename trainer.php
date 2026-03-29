<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
    <title>EliteGym - Gestion des Entraîneurs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <style type="text/css">
        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', sans-serif;
        }

        .jumbotron {
            background: linear-gradient(rgba(26, 26, 46, 0.7), rgba(26, 26, 46, 0.7)), 
                        url('Images/trn.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            height: 400px;
            border-radius: 0;
            margin-bottom: 0;
        }

        .card {
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            border-radius: 15px;
            margin-bottom: 30px;
        }

        .card-header-purple {
            background-color: #1a1a2e;
            color: #9d50bb;
            padding: 20px;
            border-bottom: 3px solid #6e48aa;
        }

        .table thead {
            background-color: #1a1a2e;
            color: #9d50bb;
            text-transform: uppercase;
        }

        .btn-purple {
            background-color: #6e48aa;
            color: white;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-purple:hover {
            background-color: #1a1a2e;
            color: #9d50bb;
            transform: translateY(-2px);
        }

        .btn-outline-dark {
            border: 1px solid #1a1a2e;
            color: #1a1a2e;
        }

        label {
            font-weight: 600;
            color: #1a1a2e;
        }
    </style>
</head>
<body>

<div class="jumbotron">
    <div class="container text-center" style="padding-top: 100px;">
        <h1 style="color: white; font-weight: 800; text-transform: uppercase;">Équipe de Coaching</h1>
        <p style="color: #9d50bb; font-size: 1.2rem;">Gestion et suivi des entraîneurs certifiés</p>
    </div>
</div>	

<div class="container" style="margin-top: -60px;">
    <div class="card">
        <div class="card-header-purple">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <a href="admin-panel.php" class="btn btn-outline-light btn-sm">Retour</a>
                </div>
                <div class="col-md-10">
                    <h3 class="m-0">Entraîneurs Actifs</h3>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover m-0">
                <thead>
                    <tr>
                        <th>ID Entraîneur</th>
                        <th>Nom Complet</th>
                        <th>Téléphone</th>
                    </tr>   
                </thead>
                <tbody>
                  <?php get_trainer(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header-purple">
            <h3 class="m-0">Enregistrer un nouveau Coach</h3>
        </div> 
        <div class="card-body p-4">
            <form class="form-group" action="func.php" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <label>ID Entraîneur :</label>
                        <input type="text" name="Trainer_id" class="form-control" placeholder="Ex: 105" required>
                    </div>
                    <div class="col-md-4">
                        <label>Nom :</label>
                        <input type="text" name="Name" class="form-control" placeholder="Nom du coach" required>
                    </div>
                    <div class="col-md-4">
                        <label>Téléphone :</label>
                        <input type="text" name="phone" class="form-control" placeholder="06XXXXXXXX" required>
                    </div>
                </div>
                <br>
                <input type="submit" class="btn btn-purple w-100" name="tra_submit" value="VALIDER L'ENREGISTREMENT">
            </form>
        </div>
    </div>
</div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>
</html>