<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
    <title>EliteGym - Détails des Membres</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <style type="text/css">
        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', sans-serif;
        }

        .jumbotron {
            background: linear-gradient(rgba(26, 26, 46, 0.7), rgba(26, 26, 46, 0.7)), 
                        url('Images/prsn.jpg') no-repeat;
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

        .card-header-custom {
            background-color: #1a1a2e;
            color: #9d50bb;
            padding: 20px;
            border-bottom: 3px solid #6e48aa;
        }

        .table thead {
            background-color: #1a1a2e;
            color: #9d50bb;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .btn-purple {
            background-color: #6e48aa;
            color: white;
            border: none;
            transition: 0.3s;
        }

        .btn-purple:hover {
            background-color: #1a1a2e;
            color: #9d50bb;
        }

        .btn-outline-dark {
            border: 1px solid #1a1a2e;
            color: #1a1a2e;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="jumbotron">
    <div class="container text-center" style="padding-top: 100px;">
        <h1 style="color: white; font-weight: 800; text-transform: uppercase;">Répertoire des Membres</h1>
        <p style="color: #9d50bb; font-size: 1.2rem;">Consultation et recherche avancée</p>
    </div>
</div>    

<div class="container" style="margin-top: -60px;">
    <div class="card">
         <div class="card-header-custom">
             <div class="row align-items-center">
                 <div class="col-md-1">
                     <a href="admin-panel.php" class="btn btn-outline-light btn-sm">Retour</a>
                 </div>
                 <div class="col-md-3">
                     <h3 class="m-0">Base de données</h3>
                 </div>
                 <div class="col-md-8">
                     <form class="form-group m-0" action="trainer_search.php" method="post">
                         <div class="row">
                             <div class="col-md-9">
                                 <input type="text" name="search" class="form-control" placeholder="Rechercher par ID ou Prénom...">
                             </div>
                             <div class="col-md-3">
                                 <input type="submit" name="member" class="btn btn-purple w-100" value="Rechercher"> 
                             </div>
                         </div>           
                     </form>
                 </div>
             </div>
         </div>

         <div class="card-body p-0">
            <table class="table table-hover m-0">
                <thead>
                 <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>ID / Contact</th>
                    <th>ID Entraîneur</th>
                </tr>   
                </thead>
                <tbody>
                  <?php get_member_details(); ?>
                </tbody>
            </table>
         </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>
</html>