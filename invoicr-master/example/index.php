<?php
/*
 * INVOICR : THE PHP INVOICE GENERATOR (HTML, DOCX, PDF)
 * Visit https://code-boxx.com/invoicr-php-invoice-generator for more
 * 
 * ! YOU CAN DELETE THE ENTIRE EXAMPLE FOLDER IF YOU DON'T NEED IT... !
 */

/* [STEP 1 - CREATE NEW INVOICR OBJECT] */
include('../../realwork//database_connection.php');

require dirname(__DIR__) . DIRECTORY_SEPARATOR . "invoicr.php";
$invoice = new Invoicr();


/* [STEP 2 - FEED ALL THE INFORMATION] */
// 2A - COMPANY INFORMATION
// OR YOU CAN PERMANENTLY CODE THIS INTO THE LIBRARY ITSELF


$id= $_GET['id'];
//$id= 4;
  $statement = $connect->prepare("
    SELECT * FROM `tbl_order` JOIN `tbl_order_item` WHERE `tbl_order`.`order_id` = $id AND `tbl_order_item`.`order_id` = $id;
  ");

  $statement->execute();

  $all_result = $statement->fetchAll();

foreach ($all_result as $res) {  

$invoice->set("company", [
	(isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) . "cb-logo.png",
	__DIR__ . DIRECTORY_SEPARATOR . "cb-logo.png", 
	"Zarzis Invoice", 
	"Route De Djerba, Zarzis, Medenine, 4170",
	"Phone: 99137982",
	"https://www.l lien mta3 l site.com",
	"zarzis.invoice@gmail.com"
]);

// 2B - INVOICE INFO
$invoice->set("invoice", [
	["Invoice #", $res['order_no']],
	["DOP", $res['order_date']]
]);

// 2C - BILL TO
$invoice->set("billto", [
	"Reciever Name", $res['order_receiver_name'],
	"Address",$res['order_receiver_address']
]);


// 2E - ITEMS
// YOU CAN JUST DUMP THE ENTIRE ARRAY IN USING SET, BUT HERE IS HOW TO ADD ONE AT A TIME... 

}
$i = 0 ;
foreach ($all_result as $rslt) {  
	$items[$i] = [ $rslt['item_name'], "", $rslt['order_item_quantity'], $rslt['order_item_price'], $rslt['order_item_final_amount']];
	$i ++ ; 
}

foreach ($items as $i) { $invoice->add("items", $i); }

// 2F - TOTALS
$invoice->set("totals", [
	["Total before Tax", $rslt['order_total_before_tax']],
	["Total Tax", $rslt['order_total_tax']],
	["TOTAL", $rslt['order_total_after_tax']]
]);



/* [STEP 3 - OUTPUT] */
// 3A - CHOOSE TEMPLATE, DEFAULTS TO SIMPLE IF NOT SPECIFIED
$invoice->template("apple");

/*****************************************************************************/
// 3B - OUTPUT IN HTML
// DEFAULT DISPLAY IN BROWSER | 1 DISPLAY IN BROWSER | 2 FORCE DOWNLOAD | 3 SAVE ON SERVER
 $invoice->outputHTML();
// $invoice->outputHTML(1);
// $invoice->outputHTML(2, "invoice.html");
// $invoice->outputHTML(3, __DIR__ . DIRECTORY_SEPARATOR . "invoice.html");
/*****************************************************************************/
// 3C - PDF OUTPUT
// DEFAULT DISPLAY IN BROWSER | 1 DISPLAY IN BROWSER | 2 FORCE DOWNLOAD | 3 SAVE ON SERVER
// $invoice->outputPDF();
// $invoice->outputPDF(1);
// $invoice->outputPDF(2, "invoice.pdf");
// $invoice->outputPDF(3, __DIR__ . DIRECTORY_SEPARATOR . "invoice.pdf");
/*****************************************************************************/
// 3D - DOCX OUTPUT
// DEFAULT FORCE DOWNLOAD| 1 FORCE DOWNLOAD | 2 SAVE ON SERVER
// $invoice->outputDOCX();
// $invoice->outputDOCX(1, "invoice.docx");
// $invoice->outputDOCX(2, __DIR__ . DIRECTORY_SEPARATOR . "invoice.docx");
/*****************************************************************************/
?>