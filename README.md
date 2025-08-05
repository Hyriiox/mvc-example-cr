# Projet MVC

Exemple de projet basé sur une architecture MVC.

## Démarrer le projet

1. Installer les dépendances avec composer :
```bash
composer install
```

2. Mettre en place la BDD :
```bash
cd docker-db/
docker compose up
```

> [!NOTE]  
> Il est tout à fait possible de ne pas utiliser Docker pour mettre en place la base de données de ce projet.
> Il vous est alors possible d'utiliser une base de données tournant sur, par exemple, XAMPP.

3. Lancer le serveur de développement :
```bash
php -S localhost:8000 -t public/
```
Liste des paramètres :
- `-S` : adresse et port sur lequel le serveur de développement va être lancé
- `-t` : spécifie le dossier racine de l'application (là où est situé le index.php)