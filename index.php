<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
 function createXml(){
    $dom = new DOMDocument();

    $dom->encoding = 'utf-8';
    $dom->xmlVersion = '1.0';

    $dom->formatOutput = true;

    $xml_file_name = 'xml/' . rand(111111,999999) .'_'. time() . '.xml';

    $root = $dom->createElement('ImportDoc');

    $contact_node = $dom->createElement('CONTATTO');
    
    $child_node_date = $dom->createElement('DATA_ISCRIZIONE' , date('d-m-Y'));

    $contact_node->appendChild($child_node_date);

    $child_node_email = $dom->createElement('EMAIL', 'xxx@gmail.com');

    $contact_node->appendChild($child_node_email);


    $child_node_lastname = $dom->createElement('COGNOME', 'Zuliani');

    $contact_node->appendChild($child_node_lastname);

    $child_node_name = $dom->createElement('NOME', 'Carlo');

    $contact_node->appendChild($child_node_name);

    $child_node_company = $dom->createElement('AZIENDA', 'xxx');

    $contact_node->appendChild($child_node_company);

    $child_node_nation = $dom->createElement('NAZIONE', 'Italia');

    $contact_node->appendChild($child_node_nation);
    
    $child_node_prof = $dom->createElement('PROFESSIONE', 'developer');

    $contact_node->appendChild($child_node_prof);

    $child_node_contact_from = $dom->createElement('CONTATTO_DA' , 'sito web');

    $contact_node->appendChild($child_node_contact_from);

    $root->appendChild($contact_node);

    $dom->appendChild($root);

    $dom->save($xml_file_name);

    echo "$xml_file_name has been successfully created";
};
    echo createXml();
?>
</body>
</html>