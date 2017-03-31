<?php

/*
 * PHP XSL - How to transform XSL to XML using PHP
 */

// Load the XML source
$xml = new DOMDocument();
$xml->load('appointment.xml');

$xsl = new DOMDocument();
$xsl->load('appointment.xsl');

// Configure the transformer
$proc = new XSLTProcessor();
$proc->importStyleSheet($xsl); // attach the xsl rules

echo $proc->transformToXML($xml);

?>