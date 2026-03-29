<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <style>
      body { background-color: #f4f7f6; font-family: 'Segoe UI', sans-serif; }
      .card-header-custom { background-color: #1a1a2e; color: #9d50bb; border-bottom: 3px solid #6e48aa; padding: 20px; }
      .table thead { background-color: #1a1a2e; color: #9d50bb; }
      .btn-purple { background-color: #6e48aa; color: white; border: none; }
    </style>
  </head>
  <body>
    <?php
      include("func.php"); // Ce fichier contient maintenant la connexion $conn

      if(isset($_POST['member'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']); // Sécurisation de la recherche
        
        // CORRECTION ICI : Utilisation de $conn au lieu de $con
        $query = "SELECT * FROM member WHERE contact='$search' OR fname='$search'";
        $result = mysqli_query($conn, $query); 
        
        echo "<div class='container' style='margin-top:50px;'>
                <div class='card' style='border:none; box-shadow:0 10px 25px rgba(0,0,0,0.1); border-radius:15px; overflow:hidden;'>
                  <div class='card-header-custom'>
                    <a href='trainer_details.php' class='btn btn-outline-light btn-sm'>Retour</a>
                    <span class='ml-3' style='font-size:1.5rem; font-weight:bold;'>Résultats de la recherche</span>
                  </div>
                  <table class='table table-hover m-0'>
                    <thead>
                      <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>ID / Contact</th>
                        <th>ID Entraîneur</th>
                      </tr>   
                    </thead>
                    <tbody>";

        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
              echo "<tr>
                      <td>{$row['fname']}</td>
                      <td>{$row['lname']}</td>
                      <td>{$row['email']}</td>
                      <td>{$row['contact']}</td>
                      <td>{$row['trainer']}</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5' class='text-center'>Aucun résultat trouvé pour '$search'</td></tr>";
        }

        echo "</tbody></table></div></div>";
      }
    ?>
  </body>
</html>