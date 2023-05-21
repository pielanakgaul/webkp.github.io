<?php


error_reporting(0);
// Load the PHPExcel library
require_once 'PHPExcel/Classes/PHPExcel.php';
// include 'koneksi.php';


// Load the Excel file
if (isset($_POST['submit'])) {
  if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {

    // $inputFileName = 'DataODPSultra.xlsx';
    $inputFileName = $_FILES['file']['tmp_name'];
    // $file_name = $_FILES['file']['name'];


    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $reader = PHPExcel_IOFactory::createReader($inputFileType);
    // $reader->setReadDataOnly(true);
    // $worksheetData = $reader->listWorksheetInfo($inputFileName);
    $excel = $reader->load($inputFileName);

    // Get the data from the first worksheet
    $worksheet = $excel->getSheet(0);
    $rows = $worksheet->toArray();

    //header
    $header = $_POST['header'];
    $headers = $rows[0];
    // strtolower($headers);


    //index kolom yang akan di proses
    $nama_col = array_search('NOSS_ID', $headers);
    $deskrip_col = array_search('ODP_NAME', $headers);
    $longitude_col = array_search('LONGITUDE', $headers);
    $latitude_col = array_search('LATITUDE', $headers);
    // $STO_col = array_search('STO', $headers);
    $folder_col = array_search($header, $headers);
    $warna_col = array_search('OCC_2', $headers);


    // Create a new KML document
    $kml = new SimpleXMLElement('<kml xmlns="http://www.opengis.net/kml/2.2"/>');
    $document = $kml->addChild('Document');

    //style titik
    $i = 0;
    while ($i < 4) {
      $style = $document->addChild("Style");
      $style->addAttribute("id", "icon-style$i");
      $iconStyle = $style->addChild("IconStyle");
      if ($i == 0) {
        $iconStyle->addChild("color", "ff000000"); //hitam 
      } elseif ($i == 1) {
        $iconStyle->addChild("color", "ff0000ff"); //merah
      } elseif ($i == 2) {
        $iconStyle->addChild("color", "ff00ffff"); //kuning
      } elseif ($i == 3) {
        $iconStyle->addChild("color", "ff00ff00"); //hijau
      }
      $iconStyle->addChild("scale", "1.2");
      $icon = $iconStyle->addChild("Icon");
      $icon->addChild("href", "http://maps.google.com/mapfiles/kml/shapes/arrow.png");
      $i++;
    }

    //folder
    $folder = $document->addChild("Folder");
    $name = $folder->addChild('name', 'kml');

    if ($header == '' || !in_array($header, $headers)) {
      foreach ($rows as $row) {
        if ($rowIndex != 0) {
          if (!empty($row[$nama_col]) && !empty($row[$longitude_col]) && !empty($row[$latitude_col])) {
            $placemark = $folder->addChild('Placemark');
            $placemark->addChild('name', $row[$nama_col]);
            $placemark->addChild('description', $row[$deskrip_col]);
            if ($row[$warna_col] == "BLACK") {
              $placemark->addChild("styleUrl", "#icon-style0");
            } elseif ($row[$warna_col] == "RED") {
              $placemark->addChild("styleUrl", "#icon-style1");
            } elseif ($row[$warna_col] == "ORANGE") {
              $placemark->addChild("styleUrl", "#icon-style1");
            } elseif ($row[$warna_col] == "YELLOW") {
              $placemark->addChild("styleUrl", "#icon-style2");
            } elseif ($row[$warna_col] == "GREEN") {
              $placemark->addChild("styleUrl", "#icon-style3");
            }
            $point = $placemark->addChild('Point');
            $point->addChild('coordinates', $row[$longitude_col] . ',' . $row[$latitude_col] . ',0');
          }
        }
        $rowIndex++;
      }
    } else {
      $STOs = array();
      $rowIndex = 0;
      foreach ($rows as $row) {
        if ($rowIndex != 0) {
          if (!empty($row[$nama_col]) && !empty($row[$longitude_col]) && !empty($row[$latitude_col])) {
            if (!in_array($row[$folder_col], $STOs)) {
              array_push($STOs, $row[$folder_col]);
            }
          }
        }
        $rowIndex++;
      }
      foreach ($STOs as $STO) {
        $j = $STO;
        $j = $folder->addChild("Folder");
        $name = $j->addChild("name", $STO);
        $rowIndex = 0;
        foreach ($rows as $row) {
          if ($rowIndex != 0) {
            if (!empty($row[$nama_col]) && !empty($row[$longitude_col]) && !empty($row[$latitude_col])) {
              if ($row[$folder_col] == $STO) {
                $placemark = $j->addChild('Placemark');
                $placemark->addChild('name', $row[$nama_col]);
                $placemark->addChild('description', $row[$deskrip_col]);
                if ($row[$warna_col] == "BLACK") {
                  $placemark->addChild("styleUrl", "#icon-style0");
                } elseif ($row[$warna_col] == "RED") {
                  $placemark->addChild("styleUrl", "#icon-style1");
                } elseif ($row[$warna_col] == "ORANGE") {
                  $placemark->addChild("styleUrl", "#icon-style1");
                } elseif ($row[$warna_col] == "YELLOW") {
                  $placemark->addChild("styleUrl", "#icon-style2");
                } elseif ($row[$warna_col] == "GREEN") {
                  $placemark->addChild("styleUrl", "#icon-style3");
                }
                $point = $placemark->addChild('Point');
                $point->addChild('coordinates', $row[$longitude_col] . ',' . $row[$latitude_col] . ',0');
              }
            }
          }
          $rowIndex++;
        }
      }
    }
  } else {
    // File belum dipilih, arahkan kembali ke halaman HTML 
    header("Location: konvert.php");
    exit;
  }

  // simpan KML ke disk
  $kmlOutput = $kml->asXML();

  //header
  //versi 1
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename=konvert.kml');
  header('Content-Transfer-Encoding: binary');
  header('Expires: 0');
  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
  header('pragma: public');
  header('Content-Length: ' . strlen($kmlOutput));

  ob_clean();
  flush();
  echo $kmlOutput;

  exit;
}
