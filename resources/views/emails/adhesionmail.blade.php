<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html, charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div style="background-color: #F77B1E; text-align: center; color: white; margin: 0 auto; padding: 25px;">
        <div style="margin: 0 10px 10px 10px; padding: 15px; background-color: white; font-size: 25px;">
            <a href="" style="color: #F77B1E; text-decoration: none;">
                Alitcha Community
            </a>
        </div>
        <h2>Demande d'adhesion à la communauté <strong>Alitcha</strong></h2>
        <p>
            Nouvel demande d'intégration de la communauté envoyée par : <br/>
            <ul style="text-align: left; ">
                <li><strong>Nom et Prénom (s) : </strong> {{ $adhesion_mail['nom_prenom'] }} </li>
                <li><strong>E-Mail : </strong> {{ $adhesion_mail['email'] }} </li>
                <li><strong>Numero de téléphone : </strong> {{ $adhesion_mail['numeroTel'] }} </li>
            </ul>
        </p>
        <p>Pour en savoir plus, cliquez <a href="">ici</a>.</p>
    </div>
</body>

</html>
