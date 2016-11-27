<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 19:25
 *
 * DOM:
 *
 * DOM EXTENSION PERMITS MANIPULATING OF XML DOCUMENTS WITH ITS API AND PHP 5+
 * REQUIRES THE LIBXML EXTENSION (ENABLED BY DEFAULT IN PHP)
 * FUNCTIONS PART OF EXPAT LIBRARY ALSO ENABLED BY DEFAULT
 *
 * ENCODING:
 * USES UTF-8 ENCODING
 *
 * SIMPLEXML AND DOM:
 * simplexml_import_dom() CONVERTS A DOM NODE INTO A SIMPLE XML OBJECT
 * dom_import_simplexml() CONVERTS A SIMPLEXML OBJECT INTO A DOM (DOCUMENT OBJECT MODEL)
 *
 * SET OF PREDEFINED CONSTANTS AVAILABLE:
 * AVAILABLE WHEN EXTENSION DYNAMICALLY LOADED AT RUNTIME OR WHEN COMPILED INTO PHP
 * PARTIAL LIST (SEE PHP MANUAL FOR FULL LIST)
 * XML_ELEMENT_NODE: DEFINES NODE AS A DOM ELEMENT
 * XML_TEXT_NODE: DEFINES NODE AS A DOM TEXT
 *
 */

$file_path = __DIR__ . '/files/library.xml';
$xmlstr = file_get_contents($file_path);

$dom = new DOMDocument();

// From file
$loaded = $dom->load($file_path);
var_dump($loaded); // true

// From string
$loaded = $dom->loadXML($xmlstr);
var_dump($loaded); // true

// Adding an element
$library = $dom->getElementsByTagName('library')[0];
$book = $dom->createElement("book");
$book->setAttribute("isbn", "4567890213");
$title = $dom->createElement("title", "My title");
$author = $dom->createElement("author", "My author");
$book->appendChild($title);
$book->appendChild($author);
$library->appendChild($book);
$dom->save(__DIR__ . '/files/library_after.xml');
