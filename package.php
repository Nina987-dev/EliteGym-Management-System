<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
    <title>EliteGym - Forfaits</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <style type="text/css">
        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', sans-serif;
        }

        .jumbotron {
            background: linear-gradient(rgba(26, 26, 46, 0.7), rgba(26, 26, 46, 0.7)), 
                        url('Images/pckg.jpg') no-repeat;
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
            overflow: hidden;
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

        .btn-outline-light {
            border: 1px solid #9d50bb;
            color: #9d50bb;
            transition: 0.3s;
        }

        .btn-outline-light:hover {
            background-color: #9d50bb;
            color: white;
        }
    </style>
</head>
<body>

<div class="jumbotron">
    <div class="container text-center" style="padding-top: 100px;">
        <h1 style="color: white; font-weight: 800; text-transform: uppercase;">Nos Forfaits</h1>
        <p style="color: #9d50bb; font-size: 1.2rem;">Consultez les différentes offres d'abonnement</p>
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
                     <h3 class="m-0">Détails des Abonnements</h3>
                 </div>
             </div>
         </div>

         <div class="card-body p-0">
            <table class="table table-hover m-0">
                <thead>
                    <tr>
                        <th>ID Forfait</th>
                        <th>Nom du Forfait</th>
                        <th>Tarif (EUR)</th>
                    </tr>   
                </thead>
                <tbody>
                  <?php get_package(); ?>
                </tbody>
            </table>
         </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>
</html>