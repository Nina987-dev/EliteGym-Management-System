<?php
$dbConfig = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'loginsystem'
];

$conn = mysqli_connect($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['database']);

$query = "SELECT * FROM `Trainer`";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>EliteGym - Panel Administration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
        <style type="text/css">
            body {
                background-color: #f4f7f6;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            
            .jumbotron {
                border-radius: 0;
                background: linear-gradient(rgba(26, 26, 46, 0.8), rgba(26, 26, 46, 0.8)), 
                            url('Images/pckg.jpg') no-repeat;
                background-size: cover;
                background-position: center;
                height: 400px;
            }

            .list-group-item.active {
                background-color: #1a1a2e !important;
                border-color: #6e48aa !important;
                color: #9d50bb !important;
                font-weight: bold;
            }

            .list-group-item {
                background-color: #ffffff;
                color: #1a1a2e;
                transition: 0.3s;
            }

            .list-group-item:hover {
                background-color: #f8f9fa;
                color: #6e48aa;
            }

            .card {
                border: none;
                box-shadow: 0 10px 25px rgba(0,0,0,0.1);
                border-radius: 12px;
            }

            .card-header-custom {
                background-color: #1a1a2e; 
                color: #9d50bb;           
                padding: 20px;
                border-radius: 12px 12px 0 0;
                border-bottom: 3px solid #6e48aa;
            }

            .btn-purple {
                background-color: #6e48aa;
                color: white;
                border: none;
                padding: 10px 25px;
                font-weight: bold;
                transition: 0.3s;
            }

            .btn-purple:hover {
                background-color: #1a1a2e;
                color: #9d50bb;
                transform: translateY(-2px);
            }

            .btn-logout {
                background-color: transparent;
                color: #1a1a2e;
                border: 1px solid #1a1a2e;
                margin-top: 15px;
            }

            .btn-logout:hover {
                background-color: #ff4b2b;
                color: white;
                border-color: #ff4b2b;
            }

            label {
                font-weight: 600;
                color: #1a1a2e;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron">
            <div class="container text-center" style="padding-top: 80px;">
                <h1 style="color: white; font-weight: 800; text-transform: uppercase;">Gestion des Adhérents</h1>
                <p style="color: #9d50bb; font-size: 1.2rem;">Panel de contrôle EliteGym</p>
            </div>
        </div>

        <div class="container" style="margin-top: -50px;">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="" class="list-group-item active">Options Membres</a>
                        <a href="trainer_details.php" class="list-group-item">Détails des Membres</a>
                        <a href="package.php" class="list-group-item">Voir les Forfaits</a>
                        <a href="payment.php" class="list-group-item">Gestion Paiements</a>
                    </div>
                    <hr>
                    <div class="list-group">
                        <a href="trainer.php" class="list-group-item active">Options Entraîneurs</a>
                        <a href="trainer.php" class="list-group-item">Ajouter un Entraîneur</a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header-custom">
                            <h3 class="m-0">Inscription Nouvel Adhérent</h3>
                        </div> 
                        <div class="card-body p-4">
                            <form class="form-group" action="func.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Prénom :</label>
                                        <input type="text" name="fname" class="form-control" placeholder="Ex: Jean" required><br>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nom :</label>
                                        <input type="text" name="lname" class="form-control" placeholder="Ex: Dupont" required><br>
                                    </div>
                                </div>

                                <label>ID / Contact :</label>
                                <input type="text" name="contact" class="form-control" placeholder="Identifiant unique" required><br>
                                
                                <label>Email :</label>
                                <input type="email" name="email" class="form-control" placeholder="exemple@mail.com" required><br>
                                
                                <label>Assigner un entraîneur :</label> 
                                <select class="form-control" name="trainer">
                                    <?php while($row = mysqli_fetch_array($result)): ?>
                                        <option value="<?= $row[0] ?>"><?= $row[1] ?></option>
                                    <?php endwhile; ?>
                                </select>
                                <br>
                                <input type="submit" class="btn btn-purple w-100" name="pat_submit" value="ENREGISTRER L'ADHÉRENT">
                            </form>
                            <div class="text-right">
                                <a href="index.php" class="btn btn-logout">Déconnexion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
    </body>
</html>