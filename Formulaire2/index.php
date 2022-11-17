<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Un super formulaire</h1>
    <fieldset>
        <legend>Données personnelles</legend>
        <div>
            <label for="prenom">Votre prénom</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <div>
            <label for="nom">Votre nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="datedenaissance">Votre date de naissance</label>
            <input type="date" name="datedenaissance" id="datedenaissance">
        </div>
    </fieldset>
    <fieldset>
        <legend>Les nouveaux input</legend>
        <div>
            <label for="url">Votre URL</label>
            <input type="url" name="url" id="url">
        </div>
        <div>
            <label for="numero">Votre numéro de téléphone</label>
            <input type="text" name="numero" id="numero">
        </div>
        <div>
            <label for="note">Votre appréciation (entre 0-10)</label>
            <input type="range" name="note" id="note" min="0" max="">
        </div>
        <div>
            <label for="couleur">Choissé votre couleur</label>
            <input type="color" name="couleur" id="couleur">
        </div>
        <div>
            <label for="recherche">Votre recherche</label>
            <input type="search" name="recherche" id="recherche">
        </div>
        <div>
            <label for="fichier">Choisir un fichier</label>
            <input type="file" name="fichier" id="fichier">
        </div>
        <div>
            <label for="heure">Choisir une heure</label>
            <input type="time" name="heure" id="heure">
        </div>
        <div>
            <label for="mois">Choisir un mois</label>
            <input type="month" name="mois" id="mois">
        </div>
        <div>
            <label for="semaine">choisir une semaine:</label>
            <input type="week" name="semaine" id="semaine">
        </div>
        <div>
            <label for="expliquation">Vos expliquations :</label>
            <textarea name="expliquation" id="expliquation" cols="33" rows="5"></textarea>
        </div>
        <div>
            <label for="reset">Réinstaillisé</label>
            <input type="reset" name="reset" id="reset">
        </div>

    </fieldset>
    <fieldset>
        <legend>Boutton d'envoi</legend>
        <button>Envoyer</button>
    </fieldset>
</body>
</html>