# Installation du projet JulesJobeet en local :

* Télécharger le projet sur Git

* Lancez la commande suivante à la racine du projet JulesJobeet dans un cmd.
```
'composer update'
```

* Par défaut, l'accès à la DB est ouvert à l'identifiant : **root** sans mot de passe
Vous pouvez néamoins modifier ces valeurs à l'envie dans le fichier *app\config\parameters.yml*

* A présent lancez les commandes suivantes:
```
'php app/console doctrine:database:create'
'php app/console doctrine:schema:create'
'php app/console doctrine:fixtures:load'
'php app/console ens:manon:users admin admin'
```

# Accès au projet

Lancez le serveur avec la commande
```
'php app/console server:run'
```
et accédez au projet en joignant l'url [http://127.0.0.1:8000/job](http://127.0.0.1:8000/job) définie par défaut.

A Symfony project created on May 20, 2016, 3:22 pm.
