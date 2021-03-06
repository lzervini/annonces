# Projet Petites Annonces


## Actions possibles

- Poster une annonce
- Lister les annonces
- Modifier une annonce
- Supprimer une annonce


## Cycle pour poster une annonce

1. Sur la page listant les annonces afficher un lien permettant de publier une annonce	

2. Lorsque la personne arrive sur le formulaire permettant de poster une annonce elle devra saisir	:

- Adresse mail
- Nom
- Prénom
- Téléphone
- Catégorie de l'annonce : Immobilier, Auto-Moto, Emploi, Animaux, Services, Vacances, Affaires pro, Autres
- Image de mise en avant de l'annonce (optionnel)
- Texte de l'annonce
- Captcha

3. Lorsque la personne poste son annonce, elle reçois un mail dans lequel il y a un lien demandant de confimer la publication de l'annonce.

Dans ce même courriel, il doit y avoir un lien permettant de modifier l'annonce.

Une fois confirmé alors l'annonce est publié sur la page d'annonce et l'utilisateur recoit un courriel lui permettant supprimer l'annonce. 

Lorsque l'annonce est mise en ligne il ne doit plus être possible de la modifer avec le lien du premier courriel


## Cycle pour lister les annonces

- Au chargement de la page d'accueil : afficher les dix premières annonces.
- Lorsque l'ascenseur est en bas de la liste : afficher les dix annonces suivantes
- Pour les annonces n'ayant pas d'image : afficher une image par défaut
- Sous l'annonce : proposer de télécharger l'annonce en PDF


## Les plus

**On ne réalise les plus que si on avez le temps**

- Infinite scroll pour l'affichage des annonces
- Faire un beau courriel avec la librairie MJML
- Tâche cron qui supprime les annonces qui sont en attente de publication à n+2 jours de la date de création
- Tâche cron qui supprime les annonces qui sont publiées à n+15 jours de la date de création.
- Envoyer un mail à la personne de la suppression de son annonce 


## Technos

- Formulaires validés par JS
- Composer
- PHP POO
- TWIG (pour le frontend)
- SASS(optionnel)
- Git
- lib PHP pour les PDF
- lib PHP AltoRouteur pour le routeur

**On ne veut pas de pattern MVC**, on reste en programmation objet POO simple

**Chiffrer les accès de validation et modification**


## Delais

10 jours après le début du projet