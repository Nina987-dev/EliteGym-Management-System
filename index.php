<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>EliteGym - Administration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    
    <style type="text/css">
      body { 
        /* Image HD qui remplit tout l'écran */
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                    url('Images/accueil.jpg'); 
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        height: 100vh;
        display: flex;
        align-items: center;
      }

      .card { 
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        background: rgba(255, 255, 255, 0.95);
      }

      .card-body h5 {
        color: #2c3e50;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 25px;
      }

      .btn-primary {
        background-color: #2c3e50 !important; /* Bleu nuit pro */
        border: none;
        padding: 10px 30px;
        font-weight: bold;
        transition: 0.3s;
      }

      .btn-primary:hover {
        background-color: #1a252f !important;
        transform: translateY(-2px);
      }

      .form-control {
        border-radius: 5px;
        border: 1px solid #ddd;
      }

      label {
        font-weight: 500;
        color: #555;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-5 mx-auto">
          <div class="card">
            <div class="card-body">
              <h5 class="text-center">Portail Administration</h5>
              <hr>
              <form method="POST" action="func.php">
                <div class="form-group">
                  <label for="username">Identifiant :</label>
                  <input type="text" id="username" name="username" class="form-control" placeholder="Entrez votre nom d'utilisateur" required>
                </div>
                <div class="form-group">
                  <label for="password">Mot de passe :</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" required>
                </div>
                <div class="form-group text-center mt-4">
                  <input type="submit" name="login_submit" value="SE CONNECTER" class="btn btn-primary w-100">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>