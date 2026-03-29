# EliteGym - Management System (Architecture 3-Tier)

## Présentation du Projet
**EliteGym** est une application **Full-Stack** de gestion pour centres de fitness. Ce projet, réalisé dans le cadre d'une **Licence 3 Informatique**, démontre la mise en œuvre d'une architecture client-serveur, la manipulation de bases de données relationnelles et la sécurisation des échanges de données.

L'interface a été entièrement refondue avec un design moderne, utilisant les normes CSS actuelles (**Flexbox** et **Variables natives**).

## Fonctionnalités Principales
* **Authentification Sécurisée** : Système de connexion multi-utilisateurs avec contrôle d'accès au panneau d'administration.
* **Gestion CRUD complète** :
    * **Membres** : Inscription, consultation et suppression dynamique des adhérents.
    * **Entraîneurs** : Gestion du personnel technique et attribution aux membres.
* **Suivi des Paiements** : Module d'enregistrement des transactions (Espèces, Carte, Chèque) lié aux forfaits disponibles (VIP, Gold, Platinum).
* **Moteur de Recherche** : Filtrage dynamique des données via des requêtes PHP/SQL optimisées.

## Stack Technique
* **Backend** : PHP 8.x (Logique métier centralisée dans le fichier `func.php`).
* **Base de données** : MySQL (Modèle relationnel, moteur de stockage InnoDB).
* **Frontend** : HTML5, CSS3 Modernisé, JavaScript pour les interactions et alertes.
* **Environnement** : Serveur Apache (XAMPP), phpMyAdmin.

## Sécurité et Architecture
Ce projet a été conçu avec une attention particulière portée sur la fiabilité et la structure du code :
1.  **Prévention des Injections SQL** : Utilisation systématique de la fonction `mysqli_real_escape_string` sur l'ensemble des entrées utilisateurs.
2.  **Architecture Modulaire** : Séparation stricte entre la logique de connexion, le traitement des données et la couche de présentation.
3.  **Intégrité des Données** : Mise en place de clés primaires uniques et respect des contraintes d'intégrité du schéma SQL.

## Structure du Dépôt
* **func.php** : Contrôleur principal gérant les requêtes et la logique métier.
* **admin-panel.php** : Interface du tableau de bord administrateur.
* **trainer.php & trainer_details.php** : Modules de gestion du personnel et des membres.
* **loginsystem.sql** : Script complet de génération de la structure et des données de la base.

---
