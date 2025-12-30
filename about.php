<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - UNOPS</title>
    <link rel="stylesheet" href="style.css">
    <style>
        main {
            max-width: 900px;
            margin: 100px auto 50px auto; /* espace par rapport au header */
            padding: 0 20px;
            font-family: Arial, sans-serif;
            line-height: 1.7;
            color: #333;
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #006400; /* vert institutionnel */
            margin-bottom: 20px;
        }

        h2 {
            font-size: 1.8rem;
            color: #004d00;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        main p {
            margin-bottom: 15px;
            text-align: justify;
        }
    </style>
</head>
<body>
    <?php include 'inc/header.php'; ?>

    <main>
        <h1>À propos de notre recensement</h1>

        <p>
            Ce portail web présente les données détaillées issues d’un recensement spécifique mené dans les zones de 
            <strong>Bas Delmas</strong>, <strong>Bas la Ville</strong>, <strong>Cité Soleil</strong> et <strong>Matissant</strong>. 
            L’objectif principal est de collecter, organiser et présenter des informations fiables sur les habitations affectées 
            et sur les populations concernées.
        </p>

        <h2>Objectifs du recensement</h2>
        <p>
            Notre mission consiste à fournir un aperçu clair et précis de l’état des maisons touchées par des incidents 
            tels que des incendies ou des destructions, et d’identifier les victimes selon leur statut : locataires, 
            propriétaires, entrepreneurs ou marchands. Ces données permettent aux organisations humanitaires, aux agences 
            de l’ONU et à leurs partenaires de planifier des interventions ciblées et efficaces.
        </p>

        <h2>Utilité du site</h2>
        <p>
            Le site est structuré pour offrir une navigation intuitive et une consultation facile des données. Les informations 
            sont présentées de manière à soutenir la prise de décision stratégique pour la réhabilitation des habitations et 
            la protection des populations affectées. Chaque section fournit des détails fiables, garantissant que les actions 
            humanitaires et de développement puissent être réalisées de manière efficiente et conforme aux standards internationaux.
        </p>

        <h2>Engagement</h2>
        <p>
            Nous nous engageons à garantir l’exactitude et la transparence des données, tout en respectant la confidentialité 
            des personnes recensées. Ce recensement contribue à renforcer la résilience des communautés et à promouvoir la sécurité, 
            la dignité et le bien-être des habitants.
        </p>
    </main>

    <?php include 'inc/footer.php'; ?>
</body>
</html>
