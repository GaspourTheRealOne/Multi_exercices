<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="">
        <fieldset>
            <legend>Vos Coordonnées</legend>
                <div>
                    <label for="nom">Nom:</label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div>
                    <label for="prenom">Prenom:</label>
                    <input type="text" name="prenom" id="prenom">
                </div>
                <div>
                    <label for="DateDeNaissance">Date De Naissance:</label>
                    <input type="date" name="DateDeNaissance" id="DateDeNaissance">
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div>
                    <label for="pays">Pays:</label>
                    <select name="pays" id="pays">
                        <optgroup label="Europe">
                            <option value="Belgique">Belgique</option>
                        </optgroup>
                        <optgroup label="Amerique du nord">    
                            <option value="Etats-Unis">Etats-Unis</option>
                            <option value="Canada">Canada</option>
                        </optgroup>
                        <optgroup label="Asie">
                            <option value="Japon">Japon</option>
                            <option value="Chine">Chine</option>
                        </optgroup>
                    </select>
                </div>
                <div>
                    <label for="NbrCopie">Nombre de copies souhaité :</label>
                    <input type="number" name="NbrCopie" id="NbrCopies" value="1">
                </div>
        </fieldset>
        <fieldset>
            <legend>Périodicité</legend>
            <div>
                <input type="radio" id="newshebdo" name="news">
                <label for="newshebdo">Newsletter Hebdmadaire</label>
            </div>
            <div>
                <input type="radio" id="newsmens" name="news">
                <label for="newsmens">Newsletter Mensuelle</label>
            </div>
            <div>
                <input type="radio" id="newstri" name="news">
                <label for="newstri">Newsletter Trimestrielle</label>
            </div>
        </fieldset>
        <fieldset>
            <legend>Version papier - informatique</legend>
            <div>
                <input type="checkbox" name="papier" id="papier" checked>
                <label for="papier">Recevoir la version papier</label>
            </div>
            <div>
                <input type="checkbox" name="info" id="info" checked>
                <label for="info">Recevoir la version informatique</label>
            </div>
        </fieldset>
        <button>Envoyer</button>

    </form>
</body>
</html>