<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Victimes bas la Ville</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'inc/header.php'; ?>
        <?php
        // Définir le chemin relatif depuis ce fichier
        $xmlFile = __DIR__ . '/XML/victime_bas_la_ville.xml';
        $xslFile = __DIR__ . '/XML/victime.xsl';

        // Vérifier que les fichiers existent
        if (!file_exists($xmlFile)) {
            die('Fichier XML introuvable !');
        }
        if (!file_exists($xslFile)) {
            die('Fichier XSL introuvable !');
        }

        // Charger le XML
        $xml = new DOMDocument;
        $xml->load($xmlFile);

        // Charger le XSL
        $xsl = new DOMDocument;
        $xsl->load($xslFile);

        // Transformer
        $proc = new XSLTProcessor;
        $proc->importStyleSheet($xsl);

        // Afficher le résultat
        echo $proc->transformToXML($xml);
        ?>
        <?php include 'inc/footer.php'; ?>
    </body>
</html>