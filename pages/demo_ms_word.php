<?php

// Include classes
include_once('tbs_class.php'); // Load the TinyButStrong template engine
include_once('../tbs_plugin_opentbs.php'); // Load the OpenTBS plugin

// prevent from a PHP configuration problem when using mktime() and date()
if (version_compare(PHP_VERSION,'5.1.0')>=0) {
	if (ini_get('date.timezone')=='') {
		date_default_timezone_set('UTC');
	}
}

// Initialize the TBS instance
$TBS = new clsTinyButStrong; // new instance of TBS
$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); // load the OpenTBS plugin

// ------------------------------
// Prepare some data for the demo
// ------------------------------

// ------------------------ MOIS 1 --------------------------------------

// Retrieve the user name to display
$yourname = (isset($_POST['yourname'])) ? $_POST['yourname'] : '';
$yourname = trim(''.$yourname);
if ($yourname=='') $yourname = "(no name)";

// Retrieve the user establishement to display
$yourestab = (isset($_POST['yourestab'])) ? $_POST['yourestab'] : '';
$yourestab = trim(''.$yourestab);
if ($yourestab=='') $yourestab = "-";

// Retrieve the user establishement to display
$dateM1 = (isset($_POST['dateM1'])) ? $_POST['dateM1'] : '';
$dateM1 = trim(''.$dateM1);
if ($dateM1=='') $dateM1 = "-";

$jourM11 = (isset($_POST['jourM11'])) ? $_POST['jourM11'] : '';
$jourM11 = trim(''.$jourM11);
if ($jourM11=='') $jourM11 = "-";

$jourM12 = (isset($_POST['jourM12'])) ? $_POST['jourM12'] : '';
$jourM12 = trim(''.$jourM12);
if ($jourM12=='') $jourM12 = "-";

$jourM13 = (isset($_POST['jourM13'])) ? $_POST['jourM13'] : '';
$jourM13 = trim(''.$jourM13);
if ($jourM13=='') $jourM13 = "-";


$M111 = (isset($_POST['M111'])) ? $_POST['M111'] : '';
$M111 = trim(''.$M111);
if ($M111=='') $M111 = "-";

$M112 = (isset($_POST['M112'])) ? $_POST['M112'] : '';
$M112 = trim(''.$M112);
if ($M112=='') $M112 = "-";

$M113 = (isset($_POST['M113'])) ? $_POST['M113'] : '';
$M113 = trim(''.$M113);
if ($M113=='') $M113 = "-";

$M114 = (isset($_POST['M114'])) ? $_POST['M114'] : '';
$M114 = trim(''.$M114);
if ($M114=='') $M114 = "-";

$M115 = (isset($_POST['M115'])) ? $_POST['M115'] : '';
$M115 = trim(''.$M115);
if ($M115=='') $M115 = "-";

$M121 = (isset($_POST['M121'])) ? $_POST['M121'] : '';
$M121 = trim(''.$M121);
if ($M121=='') $M121 = "-";

$M122 = (isset($_POST['M122'])) ? $_POST['M122'] : '';
$M122 = trim(''.$M122);
if ($M122=='') $M122 = "-";

$M123 = (isset($_POST['M123'])) ? $_POST['M123'] : '';
$M123 = trim(''.$M123);
if ($M123=='') $M123 = "-";

$M124 = (isset($_POST['M124'])) ? $_POST['M124'] : '';
$M124 = trim(''.$M124);
if ($M124=='') $M124 = "-";

$M125 = (isset($_POST['M125'])) ? $_POST['M125'] : '';
$M125 = trim(''.$M125);
if ($M125=='') $M125 = "-";

$M131 = (isset($_POST['M131'])) ? $_POST['M131'] : '';
$M131 = trim(''.$M131);
if ($M131=='') $M131 = "-";

$M132 = (isset($_POST['M132'])) ? $_POST['M132'] : '';
$M132 = trim(''.$M132);
if ($M132=='') $M132 = "-";

$M133 = (isset($_POST['M133'])) ? $_POST['M133'] : '';
$M133 = trim(''.$M133);
if ($M133=='') $M133 = "-";

$M134 = (isset($_POST['M134'])) ? $_POST['M134'] : '';
$M134 = trim(''.$M134);
if ($M134=='') $M134 = "-";

$M135 = (isset($_POST['M135'])) ? $_POST['M135'] : '';
$M135 = trim(''.$M135);
if ($M135=='') $M135 = "-";

// ------------------------ MOIS 2 --------------------------------------

// Retrieve the user establishement to display
$dateM2 = (isset($_POST['dateM2'])) ? $_POST['dateM2'] : '';
$dateM2 = trim(''.$dateM2);
if ($dateM2=='') $dateM2 = "-";

$jourM21 = (isset($_POST['jourM21'])) ? $_POST['jourM21'] : '';
$jourM21 = trim(''.$jourM21);
if ($jourM21=='') $jourM21 = "-";

$jourM22 = (isset($_POST['jourM22'])) ? $_POST['jourM22'] : '';
$jourM22 = trim(''.$jourM22);
if ($jourM22=='') $jourM22 = "-";

$jourM23 = (isset($_POST['jourM23'])) ? $_POST['jourM23'] : '';
$jourM23 = trim(''.$jourM23);
if ($jourM23=='') $jourM23 = "-";


$M211 = (isset($_POST['M211'])) ? $_POST['M211'] : '';
$M211 = trim(''.$M211);
if ($M211=='') $M211 = "-";

$M212 = (isset($_POST['M212'])) ? $_POST['M212'] : '';
$M212 = trim(''.$M212);
if ($M212=='') $M212 = "-";

$M213 = (isset($_POST['M213'])) ? $_POST['M213'] : '';
$M213 = trim(''.$M213);
if ($M213=='') $M213 = "-";

$M214 = (isset($_POST['M214'])) ? $_POST['M214'] : '';
$M214 = trim(''.$M214);
if ($M214=='') $M214 = "-";

$M215 = (isset($_POST['M215'])) ? $_POST['M215'] : '';
$M215 = trim(''.$M215);
if ($M215=='') $M215 = "-";

$M221 = (isset($_POST['M221'])) ? $_POST['M221'] : '';
$M221 = trim(''.$M221);
if ($M221=='') $M221 = "-";

$M222 = (isset($_POST['M222'])) ? $_POST['M222'] : '';
$M222 = trim(''.$M222);
if ($M222=='') $M222 = "-";

$M223 = (isset($_POST['M223'])) ? $_POST['M223'] : '';
$M223 = trim(''.$M223);
if ($M223=='') $M223 = "-";

$M224 = (isset($_POST['M224'])) ? $_POST['M224'] : '';
$M224 = trim(''.$M224);
if ($M224=='') $M224 = "-";

$M225 = (isset($_POST['M225'])) ? $_POST['M225'] : '';
$M225 = trim(''.$M225);
if ($M225=='') $M225 = "-";

$M231 = (isset($_POST['M231'])) ? $_POST['M231'] : '';
$M231 = trim(''.$M231);
if ($M231=='') $M231 = "-";

$M232 = (isset($_POST['M232'])) ? $_POST['M232'] : '';
$M232 = trim(''.$M232);
if ($M232=='') $M232 = "-";

$M233 = (isset($_POST['M233'])) ? $_POST['M233'] : '';
$M233 = trim(''.$M233);
if ($M233=='') $M233 = "-";

$M234 = (isset($_POST['M234'])) ? $_POST['M234'] : '';
$M234 = trim(''.$M234);
if ($M234=='') $M234 = "-";

$M235 = (isset($_POST['M235'])) ? $_POST['M235'] : '';
$M235 = trim(''.$M235);
if ($M235=='') $M235 = "-";


// ------------------------ MOIS 3 --------------------------------------

// Retrieve the user establishement to display
$dateM3 = (isset($_POST['dateM3'])) ? $_POST['dateM3'] : '';
$dateM3 = trim(''.$dateM3);
if ($dateM3=='') $dateM2 = "-";

$jourM31 = (isset($_POST['jourM31'])) ? $_POST['jourM31'] : '';
$jourM31 = trim(''.$jourM31);
if ($jourM31=='') $jourM31 = "-";

$jourM32 = (isset($_POST['jourM32'])) ? $_POST['jourM32'] : '';
$jourM32 = trim(''.$jourM32);
if ($jourM32=='') $jourM32 = "-";

$jourM33 = (isset($_POST['jourM33'])) ? $_POST['jourM33'] : '';
$jourM33 = trim(''.$jourM33);
if ($jourM33=='') $jourM33 = "-";


$M311 = (isset($_POST['M311'])) ? $_POST['M311'] : '';
$M311 = trim(''.$M311);
if ($M311=='') $M311 = "-";

$M312 = (isset($_POST['M312'])) ? $_POST['M312'] : '';
$M312 = trim(''.$M312);
if ($M312=='') $M312 = "-";

$M313 = (isset($_POST['M313'])) ? $_POST['M313'] : '';
$M313 = trim(''.$M313);
if ($M313=='') $M313 = "-";

$M314 = (isset($_POST['M314'])) ? $_POST['M314'] : '';
$M314 = trim(''.$M314);
if ($M314=='') $M314 = "-";

$M315 = (isset($_POST['M315'])) ? $_POST['M315'] : '';
$M315 = trim(''.$M315);
if ($M315=='') $M315 = "-";

$M321 = (isset($_POST['M321'])) ? $_POST['M321'] : '';
$M321 = trim(''.$M321);
if ($M321=='') $M321 = "-";

$M322 = (isset($_POST['M322'])) ? $_POST['M322'] : '';
$M322 = trim(''.$M322);
if ($M322=='') $M322 = "-";

$M323 = (isset($_POST['M323'])) ? $_POST['M323'] : '';
$M323 = trim(''.$M323);
if ($M323=='') $M323 = "-";

$M324 = (isset($_POST['M324'])) ? $_POST['M324'] : '';
$M324 = trim(''.$M324);
if ($M324=='') $M324 = "-";

$M325 = (isset($_POST['M325'])) ? $_POST['M325'] : '';
$M325 = trim(''.$M325);
if ($M325=='') $M325 = "-";

$M331 = (isset($_POST['M331'])) ? $_POST['M331'] : '';
$M331 = trim(''.$M331);
if ($M331=='') $M331 = "-";

$M332 = (isset($_POST['M332'])) ? $_POST['M332'] : '';
$M332 = trim(''.$M332);
if ($M332=='') $M332 = "-";

$M333 = (isset($_POST['M333'])) ? $_POST['M333'] : '';
$M333 = trim(''.$M333);
if ($M333=='') $M333 = "-";

$M334 = (isset($_POST['M334'])) ? $_POST['M334'] : '';
$M334 = trim(''.$M334);
if ($M334=='') $M334 = "-";

$M335 = (isset($_POST['M335'])) ? $_POST['M335'] : '';
$M335 = trim(''.$M335);
if ($M335=='') $M335 = "-";

$yourtown = (isset($_POST['yourtown'])) ? $_POST['yourtown'] : '';
$yourtown = trim(''.$yourtown);
if ($yourtown=='') $yourtown = "............................";

date_default_timezone_set('Africa/Casablanca');
$date = date('d/m/Y', time());


// Other single data items
$x_num = 3152.456;
$x_pc = 0.2567;
$x_dt = mktime(13,0,0,2,15,2010);
$x_bt = true;
$x_bf = false;
$x_delete = 1;

// -----------------
// Load the template
// -----------------

$template = 'Planning_des_séances.docx';
$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8); // Also merge some [onload] automatic fields (depends of the type of document).

// ----------------------
// Debug mode of the demo
// ----------------------
if (isset($_POST['debug']) && ($_POST['debug']=='current')) $TBS->Plugin(OPENTBS_DEBUG_XML_CURRENT, true); // Display the intented XML of the current sub-file, and exit.
if (isset($_POST['debug']) && ($_POST['debug']=='info'))    $TBS->Plugin(OPENTBS_DEBUG_INFO, true); // Display information about the document, and exit.
if (isset($_POST['debug']) && ($_POST['debug']=='show'))    $TBS->Plugin(OPENTBS_DEBUG_XML_SHOW); // Tells TBS to display information when the document is merged. No exit.

// --------------------------------------------
// Merging and other operations on the template
// --------------------------------------------

// Merge data in the body of the document

// Merge data in colmuns
$data = array(
 array('date' => '2013-10-13', 'thin' => 156, 'heavy' => 128, 'total' => 284),
 array('date' => '2013-10-14', 'thin' => 233, 'heavy' =>  25, 'total' => 284),
 array('date' => '2013-10-15', 'thin' => 110, 'heavy' => 412, 'total' => 130),
 array('date' => '2013-10-16', 'thin' => 258, 'heavy' => 522, 'total' => 258),
);
$TBS->MergeBlock('c', $data);

// Delete comments
$TBS->PlugIn(OPENTBS_DELETE_COMMENTS);

// -----------------
// Output the result
// -----------------

// Define the name of the output file
$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
$output_file_name = str_replace('.', '_'.$yourname.date('Y-m-d').$save_as.'.', $template);
if ($save_as==='') {
	// Output the result as a downloadable file (only streaming, no data saved in the server)
	$TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); // Also merges all [onshow] automatic fields.
	// Be sure that no more output is done, otherwise the download file is corrupted with extra data.
	exit();
} else {
	// Output the result as a file on the server.
	$TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields.
	// The script can continue.
	exit("File [$output_file_name] has been created.");
}
