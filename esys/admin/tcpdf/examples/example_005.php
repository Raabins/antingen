<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2008-03-28
// 
// Description : Example 005 for TCPDF class
//               Multicell
// 
// Author: Nicola Asuni
// 
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com s.r.l.
//               Via Della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @copyright 2004-2008 Nicola Asuni - Tecnick.com S.r.l (www.tecnick.com) Via Della Pace, 11 - 09044 - Quartucciu (CA) - ITALY - www.tecnick.com - info@tecnick.com
 * @link http://tcpdf.org
 * @license http://www.gnu.org/copyleft/lesser.html LGPL
 * @since 2008-03-04
 */

require_once('../config/lang/eng.php');
require_once('../tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true); 

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor("Nicola Asuni");
$pdf->SetTitle("TCPDF Example 005");
$pdf->SetSubject("TCPDF Tutorial");
$pdf->SetKeywords("TCPDF, PDF, example, test, guide");

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); 

//set some language-dependent strings
$pdf->setLanguageArray($l); 

//initialize document
$pdf->AliasNbPages();

// add a page
$pdf->AddPage();

// ---------------------------------------------------------

// set font
$pdf->SetFont("vera", "", 10);

// Multicell test
$pdf->MultiCell(40, 5, "A test multicell line 1 test multicell line 2 test multicell line 3", 1, 'L', 0, 0, 0 ,0, true);
$pdf->MultiCell(40, 5, "B test multicell line 1 test multicell line 2 test multicell line 3", 1, 'R', 0, 1, 0 ,0, true);
$pdf->MultiCell(40, 5, "C test multicell line 1 test multicell line 2 test multicell line 3", 1, 'C', 0, 0, 0 ,0, true);
$pdf->MultiCell(40, 5, "D test multicell line 1 test multicell line 2 test multicell line 3\n", 1, 'J', 0, 2, 0 ,0, true);
$pdf->MultiCell(40, 5, "E test multicell line 1 test multicell line 2 test multicell line 3", 1, 'L', 0, 1, 0 ,0, true);
$pdf->MultiCell(40, 5, "F test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line test multicell line\n", 1, 'J', 0, 1, 0 ,0, true);

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output();

//============================================================+
// END OF FILE                                                 
//============================================================+
?>