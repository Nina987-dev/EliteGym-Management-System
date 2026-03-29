<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
    <title>EliteGym - Paiements</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
     <style type="text/css">
        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', sans-serif;
        }

        .jumbotron {
            background: linear-gradient(rgba(26, 26, 46, 0.7), rgba(26, 26, 46, 0.7)), 
                        url('Images/pay.jpg') no-repeat;
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
        <h1 style="color: white; font-weight: 800; text-transform: uppercase;">Gestion Financière</h1>
        <p style="color: #9d50bb; font-size: 1.2rem;">Historique des transactions et nouveaux paiements</p>
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
                    <h3 class="m-0">Détails des Paiements</h3>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover m-0">
                <thead>
                    <tr>
                        <th>ID Paiement</th>
                        <th>Montant</th>
                        <th>Type</th>
                        <th>ID Client</th>
                        <th>Nom Client</th>
                    </tr>   
                </thead>
                <tbody>
                  <?php get_payment(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header-purple">
            <h3 class="m-0">Enregistrer un nouveau règlement</h3>
        </div> 
        <div class="card-body p-4">
            <form class="form-group" action="func.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label>ID Paiement :</label>
                        <input type="text" name="Payment_id" class="form-control" placeholder="Ex: 305" required><br>
                        <label>Montant (EUR) :</label>
                        <input type="text" name="Amount" class="form-control" placeholder="Ex: 800" required><br>
                        <label>Type de paiement :</label>
                        <input type="text" name="payment_type" class="form-control" placeholder="Cash / Card / Cheque" required>
                    </div>
                    <div class="col-md-6">
                        <label>ID Client (Contact) :</label>
                        <input type="text" name="customer_id" class="form-control" placeholder="Identifiant membre" required><br>
                        <label>Nom du Client :</label>
                        <input type="text" name="customer_name" class="form-control" placeholder="Nom complet" required>
                    </div>
                </div>
                <br>
                <input type="submit" class="btn btn-purple w-100" name="pay_submit" value="VALIDER LE PAIEMENT">
            </form>
        </div>
    </div>
</div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>
</html>