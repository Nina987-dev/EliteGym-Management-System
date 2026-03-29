<?php


// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "loginsystem");

// Vérification de la connexion
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if(isset($_GET['delete_id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['delete_id']);
    $query = "DELETE FROM member WHERE contact = '$id'";
    $result = mysqli_query($conn, $query);
    if($result) {
        echo "<script>alert('Membre supprimé !'); window.open('trainer_details.php','_self');</script>";
    }
}

if(isset($_GET['delete_trainer'])) {
    $id = mysqli_real_escape_string($conn, $_GET['delete_trainer']);
    $query = "DELETE FROM Trainer WHERE Trainer_id = '$id'";
    $result = mysqli_query($conn, $query);
    if($result) {
        echo "<script>alert('Entraîneur supprimé !'); window.open('trainer.php','_self');</script>";
    }
}

if (isset($_POST['login_submit'])) {
    $username = trim(mysqli_real_escape_string($conn, $_POST['username']));
    $password = trim(mysqli_real_escape_string($conn, $_POST['password']));
    
    $query = "SELECT * FROM logintb WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        header("Location: admin-panel.php");
        exit();
    } else {
        echo "<script>alert('Identifiants invalides ! Vérifiez votre saisie.')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}

if (isset($_POST['pat_submit'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $trainer = mysqli_real_escape_string($conn, $_POST['trainer']);
    $query = "INSERT INTO member(fname, lname, email, contact, trainer) VALUES ('$fname', '$lname', '$email', '$contact', '$trainer')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Adhérent ajouté !'); window.open('admin-panel.php','_self');</script>";
    }
}

if (isset($_POST['tra_submit'])) {
    $Trainer_id = mysqli_real_escape_string($conn, $_POST['Trainer_id']);
    $Name = mysqli_real_escape_string($conn, $_POST['Name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $query = "INSERT INTO Trainer(Trainer_id, Name, phone) VALUES ('$Trainer_id', '$Name', '$phone')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Entraîneur enregistré !'); window.open('trainer.php','_self');</script>";
    }
}

if (isset($_POST['pay_submit'])) {
    $Payment_id = mysqli_real_escape_string($conn, $_POST['Payment_id']);
    $Amount = mysqli_real_escape_string($conn, $_POST['Amount']);
    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);
    $payment_type = mysqli_real_escape_string($conn, $_POST['payment_type']);
    $customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
    $query = "INSERT INTO Payment(Payment_id, Amount, customer_id, payment_type, customer_name) VALUES ('$Payment_id', '$Amount', '$customer_id', '$payment_type', '$customer_name')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Paiement validé !'); window.open('admin-panel.php','_self');</script>";
    }
}

function get_member_details() {
    global $conn;
    $query = "SELECT * FROM member";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>{$row['fname']}</td>
                <td>{$row['lname']}</td>
                <td>{$row['email']}</td>
                <td>{$row['contact']}</td>
                <td>{$row['trainer']}</td>
                <td><a href='func.php?delete_id={$row['contact']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Supprimer ce membre ?\")'>Supprimer</a></td>
              </tr>";
    }
}

function get_trainer() {
    global $conn;
    $query = "SELECT * FROM Trainer";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>{$row['Trainer_id']}</td>
                <td>{$row['Name']}</td>
                <td>{$row['phone']}</td>
                <td><a href='func.php?delete_trainer={$row['Trainer_id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Supprimer ce coach ?\")'>Supprimer</a></td>
              </tr>";
    }
}

function get_package() {
    global $conn;
    $query = "SELECT * FROM Package";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>{$row['Package_id']}</td>
                <td>{$row['Package_name']}</td>
                <td>{$row['Amount']} €</td>
              </tr>";
    }
}

function get_payment() {
    global $conn;
    $query = "SELECT * FROM Payment";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>{$row['Payment_id']}</td>
                <td>{$row['Amount']} €</td>
                <td>{$row['payment_type']}</td>
                <td>{$row['customer_id']}</td>
                <td>{$row['customer_name']}</td>
              </tr>";
    }
}
?>