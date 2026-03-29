#EliteGym - Management System (Architecture 3-Tier)

Presentation du Projet
EliteGym est une application Full-Stack de gestion pour centres de fitness. Ce projet, réalisé dans le cadre d'une Licence 3 Informatique, démontre la mise en oeuvre d'une architecture client-serveur, la manipulation de bases de données relationnelles et la sécurisation des échanges de données.

L'interface a été refondue avec un design moderne, utilisant les normes CSS actuelles (Flexbox et Variables natives).

Fonctionnalités Principales
Authentification Securisée : Système de connexion multi-utilisateurs avec contrôle d'accès au panneau d'administration.

Gestion CRUD complète :

Membres : Inscription, consultation et suppression dynamique des adhérents.

Entraîneurs : Gestion du personnel technique et attribution aux membres.

Suivi des Paiements : Module d'enregistrement des transactions (Espèces, Carte, Chèque) lié aux forfaits disponibles (VIP, Gold, Platinum).

Moteur de Recherche : Filtrage dynamique des données via des requêtes PHP/SQL optimisées.

Stack Technique
Backend : PHP 8.x (Logique métier centralisée dans le fichier func.php).

Base de données : MySQL (Modèle relationnel, moteur de stockage InnoDB).

Frontend : HTML5, CSS3 (Architecture Flexbox, Variables CSS), JavaScript pour les validations et alertes.

Environnement : Serveur Apache (XAMPP), phpMyAdmin pour l'administration de la base de données.

Securité et Architecture
Dans l'optique d'une spécialisation en Master Cybersécurité, les points suivants ont été priorisés :

Prévention des Injections SQL : Utilisation systématique de la fonction mysqli_real_escape_string sur l'ensemble des entrées utilisateurs.

Architecture Modulaire : Séparation stricte entre la logique de connexion, le traitement des données et la couche de présentation.

Intégrité des Données : Mise en place de clés primaires uniques et respect des contraintes d'intégrité du schéma SQL.

Structure du Depot
func.php : Contrôleur principal gérant les requêtes et la logique métier.

admin-panel.php : Interface du tableau de bord administrateur.

trainer.php & trainer_details.php : Modules de gestion du personnel et des membres.

loginsystem.sql : Script complet de génération de la structure et des données de la base.

/images : Répertoire des ressources graphiques.

Installation
Cloner le dépôt sur votre serveur local.

Importer le fichier loginsystem.sql dans votre gestionnaire de base de données (phpMyAdmin).

Vérifier les paramètres de connexion dans le fichier func.php.

Accéder à l'application via le fichier index.php.
