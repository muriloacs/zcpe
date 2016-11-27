<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 19:20
 *
 * SIMPLEXML:
 *
 * "SIMPLE" ACCESS TO XML DATA FROM PHP
 *
 * CONCEPT: OOP ACCESS FOR XML DATA
 * ELEMENTS BECOME OBJECT PROPERTIES
 * ATTRIBUTES CAN BE ACCESSED VIA ASSOCIATIVE ARRAYS
 *
 * FUNCTIONS:
 * $xml = simplexml_load_string('<?xml...');
 * $xml = simplexml_load_file('file.xml');
 *
 *
 * CLASS: (EXAMPLES)
 *
 * $xml = new SimpleXMLElement('<?xml...');
 *
 * CREATES A SIMPLEXMLELEMENT OBJECT
 * SimpleXMLElement::construct()
 *
 * IDENTIFIES AN ELEMENT'S ATTRIBUTES
 * SimpleXMLElement::attributes()
 *
 * RETRIEVES AN ELEMENT'S NAME
 * SimpleXMLElement::getName()
 *
 * FINDS CHILDREN OF GIVEN NODE
 * SimpleXMLElement::children()
 *
 * COUNTS THE NUMBER OF CHILDREN OF AN ELEMENT
 * SimpleXMLElement::count()
 *
 * RETURNS A WELL-FORMED XML STRING BASED ON A SIMPLEXML ELEMENT
 * SimpleXMLElement::asXML()
 *
 * RUNS AN XPATH QUERY ON THE CURRENT NODE
 * SimpleXMLElement::xpath()
 *
 */

$file_path = __DIR__ . '/files/library.xml';
$xmlstr = file_get_contents($file_path);

// Function load an XML string
$library = simplexml_load_string($xmlstr);
var_dump($library);

// Function load an XML file
$library = simplexml_load_file($file_path);
var_dump($library);

// Class load an XML string
$library = new SimpleXMLElement($xmlstr);
var_dump($library);

// Class load an XML file
$library = new SimpleXMLElement($file_path, null, true);
var_dump($library);


// Creates a XML element
$book = $library->addChild('book');
$book->addAttribute("isbn", "3456789009");
$book->addChild("title", "My book's title");
$book->addChild("author", "My book's author");
var_dump($library->asXML());

// Identifies element attributes
var_dump($book->attributes());

// Retrieves element name
var_dump($book->getName());

// Retrieves element children
var_dump($book->children());

// Counts the number of children
var_dump($book->count());

// Xpath
$results = $library->xpath('/library/book/title');
var_dump($results);

$results = $library->book[0]->xpath('title');
var_dump($results);
