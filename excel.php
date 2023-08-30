<?php
require 'vendor/autoload.php';
require 'conexionExcel.php';

use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};

$sql_n1 = "SELECT ticket_remedy, fecha_creacion, ticket_proveedor, grupo_escalado, llamada_guardias, descripcion
FROM tratamiento WHERE grupo_escalado LIKE 'N1'";
$resultado = $mysqli->query($sql_n1);

$excel_n1 = new Spreadsheet();

$hojaActiva = $excel_n1->getActiveSheet();
$hojaActiva->setTitle("Escalados N1");

//Fuente
$excel_n1->getDefaultStyle()->getFont()->setName('Calibri');
//Tamaño fuente
$excel_n1->getDefaultStyle()->getFont()->setSize(11);

//Negrita
$hojaActiva->getStyle('A1:F1')->getFont()->setBold(true);
$hojaActiva->getStyle('A2')->getFont()->setBold(true);

//Ancho columna
$hojaActiva->getColumnDimension('A')->setAutoSize(true);

//Borde encabezado
$hojaActiva->getStyle('A1')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('A1')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('A1')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('A1')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
//Color celda
$hojaActiva->getStyle('A1')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');

//Dato celda
$hojaActiva->setCellValue('A1', 'TICKET REMEDY');

//Ajustar texto
$hojaActiva->getStyle('A1')->getAlignment()->setWrapText(true);

//Centrar texto horizontal
$hojaActiva->getStyle('A1')->getAlignment()->setHorizontal('center');

//Centrar texto vertical
$hojaActiva->getStyle('A1')->getAlignment()->setVertical('center');

$hojaActiva->getColumnDimension('B')->setAutoSize(true);
$hojaActiva->getStyle('B1')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('B1')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('B1')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('B1')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('B1')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');
$hojaActiva->setCellValue('B1', 'FECHA CREACION');
$hojaActiva->getStyle('B1')->getAlignment()->setWrapText(true);
$hojaActiva->getStyle('B1')->getAlignment()->setHorizontal('center');
$hojaActiva->getStyle('B1')->getAlignment()->setVertical('center');

$hojaActiva->getColumnDimension('C')->setAutoSize(true);
$hojaActiva->getStyle('C1')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('C1')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('C1')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('C1')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('C1')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');

$hojaActiva->setCellValue('C1', 'TICKET PROVEEDOR');
$hojaActiva->getStyle('C1')->getAlignment()->setWrapText(true);
$hojaActiva->getStyle('C1')->getAlignment()->setHorizontal('center');
$hojaActiva->getStyle('C1')->getAlignment()->setVertical('center');


$hojaActiva->getColumnDimension('D')->setAutoSize(true);
$hojaActiva->getStyle('D1')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('D1')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('D1')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('D1')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('D1')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');
$hojaActiva->setCellValue('D1', 'GRUPO ESCALADO');
$hojaActiva->getStyle('D1')->getAlignment()->setWrapText(true);
$hojaActiva->getStyle('D1')->getAlignment()->setHorizontal('center');
$hojaActiva->getStyle('D1')->getAlignment()->setVertical('center');

$hojaActiva->getColumnDimension('E')->setAutoSize(true);
$hojaActiva->getStyle('E1')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('E1')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('E1')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('E1')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('E1')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');
$hojaActiva->setCellValue('E1', 'LLAMADA GUARDIAS');
$hojaActiva->getStyle('E1')->getAlignment()->setWrapText(true);

$hojaActiva->getStyle('E1')->getAlignment()->setHorizontal('center');
$hojaActiva->getStyle('E1')->getAlignment()->setVertical('center');


$hojaActiva->getColumnDimension('F')->setWidth(70);
$hojaActiva->getStyle('F1')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('F1')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('F1')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('F1')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('F1')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');
$hojaActiva->setCellValue('F1', 'DESCRIPCION');

$hojaActiva->getStyle('F1')->getAlignment()->setWrapText(true);
$hojaActiva->getStyle('F1')->getAlignment()->setHorizontal('center');
$hojaActiva->getStyle('F1')->getAlignment()->setVertical('center');

//Fila N1
$hojaActiva->mergeCells('A2:F2');
$hojaActiva->setCellValue('A2', 'ESCALADOS N1');
$hojaActiva->getStyle('A2')->getAlignment()->setHorizontal('center');
$hojaActiva->getStyle('A2:F2')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('A2:F2')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('A2:F2')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('A2:F2')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('A2:F2')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');

$fila = 3;

while($rows = $resultado->fetch_assoc()){
$hojaActiva->setCellValue('A'.$fila, $rows['ticket_remedy']);
$hojaActiva->getStyle('A'.$fila, $rows['ticket_remedy'])->getAlignment()->setHorizontal('center');
$hojaActiva->getStyle('A'.$fila, $rows['ticket_remedy'])->getAlignment()->setVertical('center');
$hojaActiva->getStyle('A'.$fila, $rows['ticket_remedy'])->getAlignment()->setWrapText(true);
$hojaActiva->getStyle('A'.$fila, $rows['ticket_remedy'])
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('A'.$fila, $rows['ticket_remedy'])
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('A'.$fila, $rows['ticket_remedy'])
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('A'.$fila, $rows['ticket_remedy'])
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);

$hojaActiva->setCellValue('B'.$fila, $rows['fecha_creacion']);
$hojaActiva->getStyle('B'.$fila, $rows['fecha_creacion'])->getAlignment()->setHorizontal('center');
$hojaActiva->getStyle('B'.$fila, $rows['fecha_creacion'])->getAlignment()->setVertical('center');
$hojaActiva->getStyle('B'.$fila, $rows['fecha_creacion'])->getAlignment()->setWrapText(true);
$hojaActiva->getStyle('B'.$fila, $rows['fecha_creacion'])
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('B'.$fila, $rows['fecha_creacion'])
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('B'.$fila, $rows['fecha_creacion'])
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('B'.$fila, $rows['fecha_creacion'])
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);

$hojaActiva->setCellValue('C'.$fila, $rows['ticket_proveedor']);
$hojaActiva->getStyle('C'.$fila, $rows['ticket_proveedor'])->getAlignment()->setHorizontal('center');
$hojaActiva->getStyle('C'.$fila, $rows['ticket_proveedor'])->getAlignment()->setVertical('center');
$hojaActiva->getStyle('C'.$fila, $rows['ticket_proveedor'])->getAlignment()->setWrapText(true);
$hojaActiva->getStyle('C'.$fila, $rows['ticket_proveedor'])
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('C'.$fila, $rows['ticket_proveedor'])
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('C'.$fila, $rows['ticket_proveedor'])
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('C'.$fila, $rows['ticket_proveedor'])
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);

$hojaActiva->setCellValue('D'.$fila, $rows['grupo_escalado']);
$hojaActiva->getStyle('D'.$fila, $rows['grupo_escalado'])->getAlignment()->setHorizontal('center');
$hojaActiva->getStyle('D'.$fila, $rows['grupo_escalado'])->getAlignment()->setVertical('center');
$hojaActiva->getStyle('D'.$fila, $rows['grupo_escalado'])->getAlignment()->setWrapText(true);
$hojaActiva->getStyle('D'.$fila, $rows['grupo_escalado'])
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('D'.$fila, $rows['grupo_escalado'])
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('D'.$fila, $rows['grupo_escalado'])
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('D'.$fila, $rows['grupo_escalado'])
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);

$hojaActiva->setCellValue('E'.$fila, $rows['llamada_guardias']);
$hojaActiva->getStyle('E'.$fila, $rows['llamada_guardias'])->getAlignment()->setHorizontal('center');
$hojaActiva->getStyle('E'.$fila, $rows['llamada_guardias'])->getAlignment()->setVertical('center');
$hojaActiva->getStyle('E'.$fila, $rows['llamada_guardias'])->getAlignment()->setWrapText(true);
$hojaActiva->getStyle('E'.$fila, $rows['llamada_guardias'])
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('E'.$fila, $rows['llamada_guardias'])
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('E'.$fila, $rows['llamada_guardias'])
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('E'.$fila, $rows['llamada_guardias'])
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);

$hojaActiva->setCellValue('F'.$fila, $rows['descripcion']);
$hojaActiva->getStyle('F'.$fila, $rows['descripcion'])->getAlignment()->setVertical('center');
$hojaActiva->getStyle('F'.$fila, $rows['descripcion'])->getAlignment()->setWrapText(true);
$hojaActiva->getStyle('F'.$fila, $rows['descripcion'])
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('F'.$fila, $rows['descripcion'])
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('F'.$fila, $rows['descripcion'])
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva->getStyle('F'.$fila, $rows['descripcion'])
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);

$fila++;
}





//ESCALADOS N2
$excel_n1->createSheet();
$excel_n1->setActiveSheetIndex(1);
$hojaActiva_n2 = $excel_n1->getActiveSheet();
$hojaActiva_n2->setTitle('Escalados N2');

$sql_n2 = "SELECT ticket_remedy, fecha_creacion, ticket_proveedor, grupo_escalado, llamada_guardias, descripcion
FROM tratamiento WHERE grupo_escalado LIKE 'N2%'";
$resultado_n2 = $mysqli->query($sql_n2);

//Fuente
$excel_n1->getDefaultStyle()->getFont()->setName('Calibri');
//Tamaño fuente
$excel_n1->getDefaultStyle()->getFont()->setSize(11);

//Negrita
$hojaActiva_n2->getStyle('A1:F1')->getFont()->setBold(true);
$hojaActiva_n2->getStyle('A2')->getFont()->setBold(true);

//Ancho columna
$hojaActiva_n2->getColumnDimension('A')->setAutoSize(true);

//Borde encabezado
$hojaActiva_n2->getStyle('A1')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('A1')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('A1')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('A1')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
//Color celda
$hojaActiva_n2->getStyle('A1')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');

//Dato celda
$hojaActiva_n2->setCellValue('A1', 'TICKET REMEDY');

//Ajustar texto
$hojaActiva_n2->getStyle('A1')->getAlignment()->setWrapText(true);

//Centrar texto horizontal
$hojaActiva_n2->getStyle('A1')->getAlignment()->setHorizontal('center');

//Centrar texto vertical
$hojaActiva_n2->getStyle('A1')->getAlignment()->setVertical('center');

$hojaActiva_n2->getColumnDimension('B')->setAutoSize(true);
$hojaActiva_n2->getStyle('B1')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('B1')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('B1')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('B1')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('B1')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');
    $hojaActiva_n2->setCellValue('B1', 'FECHA CREACION');
    $hojaActiva_n2->getStyle('B1')->getAlignment()->setWrapText(true);
    $hojaActiva_n2->getStyle('B1')->getAlignment()->setHorizontal('center');
    $hojaActiva_n2->getStyle('B1')->getAlignment()->setVertical('center');

    $hojaActiva_n2->getColumnDimension('C')->setAutoSize(true);
    $hojaActiva_n2->getStyle('C1')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('C1')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('C1')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('C1')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('C1')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');

    $hojaActiva_n2->setCellValue('C1', 'TICKET PROVEEDOR');
    $hojaActiva_n2->getStyle('C1')->getAlignment()->setWrapText(true);
    $hojaActiva_n2->getStyle('C1')->getAlignment()->setHorizontal('center');
    $hojaActiva_n2->getStyle('C1')->getAlignment()->setVertical('center');


    $hojaActiva_n2->getColumnDimension('D')->setAutoSize(true);
    $hojaActiva_n2->getStyle('D1')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('D1')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('D1')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('D1')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('D1')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');
    $hojaActiva_n2->setCellValue('D1', 'GRUPO ESCALADO');
    $hojaActiva_n2->getStyle('D1')->getAlignment()->setWrapText(true);
$hojaActiva->getStyle('D1')->getAlignment()->setHorizontal('center');
$hojaActiva_n2->getStyle('D1')->getAlignment()->setVertical('center');

$hojaActiva_n2->getColumnDimension('E')->setAutoSize(true);
$hojaActiva_n2->getStyle('E1')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('E1')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('E1')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('E1')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('E1')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');
    $hojaActiva_n2->setCellValue('E1', 'LLAMADA GUARDIAS');
    $hojaActiva_n2->getStyle('E1')->getAlignment()->setWrapText(true);

    $hojaActiva_n2->getStyle('E1')->getAlignment()->setHorizontal('center');
    $hojaActiva_n2->getStyle('E1')->getAlignment()->setVertical('center');


    $hojaActiva_n2->getColumnDimension('F')->setWidth(70);
    $hojaActiva_n2->getStyle('F1')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('F1')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('F1')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('F1')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('F1')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');
    $hojaActiva_n2->setCellValue('F1', 'DESCRIPCION');

    $hojaActiva_n2->getStyle('F1')->getAlignment()->setWrapText(true);
    $hojaActiva_n2->getStyle('F1')->getAlignment()->setHorizontal('center');
    $hojaActiva_n2->getStyle('F1')->getAlignment()->setVertical('center');

//Fila N1
$hojaActiva_n2->mergeCells('A2:F2');
$hojaActiva_n2->setCellValue('A2', 'ESCALADOS N2');
$hojaActiva_n2->getStyle('A2')->getAlignment()->setHorizontal('center');
$hojaActiva_n2->getStyle('A2:F2')
->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('A2:F2')
->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('A2:F2')
->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('A2:F2')
->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
$hojaActiva_n2->getStyle('A2:F2')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setARGB('A39F9F');


$fila_n2 = 3;

while($rows = $resultado_n2->fetch_assoc()){
    $hojaActiva_n2->setCellValue('A'.$fila_n2, $rows['ticket_remedy']);
    $hojaActiva_n2->getStyle('A'.$fila_n2, $rows['ticket_remedy'])->getAlignment()->setHorizontal('center');
    $hojaActiva_n2->getStyle('A'.$fila_n2, $rows['ticket_remedy'])->getAlignment()->setVertical('center');
    $hojaActiva_n2->getStyle('A'.$fila_n2, $rows['ticket_remedy'])->getAlignment()->setWrapText(true);
    $hojaActiva_n2->getStyle('A'.$fila_n2, $rows['ticket_remedy'])
    ->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('A'.$fila_n2, $rows['ticket_remedy'])
    ->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('A'.$fila_n2, $rows['ticket_remedy'])
    ->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('A'.$fila_n2, $rows['ticket_remedy'])
    ->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    
    $hojaActiva_n2->setCellValue('B'.$fila_n2, $rows['fecha_creacion']);
    $hojaActiva_n2->getStyle('B'.$fila_n2, $rows['fecha_creacion'])->getAlignment()->setHorizontal('center');
    $hojaActiva_n2->getStyle('B'.$fila_n2, $rows['fecha_creacion'])->getAlignment()->setVertical('center');
    $hojaActiva_n2->getStyle('B'.$fila_n2, $rows['fecha_creacion'])->getAlignment()->setWrapText(true);
    $hojaActiva_n2->getStyle('B'.$fila_n2, $rows['fecha_creacion'])
    ->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('B'.$fila_n2, $rows['fecha_creacion'])
    ->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('B'.$fila_n2, $rows['fecha_creacion'])
    ->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('B'.$fila_n2, $rows['fecha_creacion'])
    ->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    
    $hojaActiva_n2->setCellValue('C'.$fila_n2, $rows['ticket_proveedor']);
    $hojaActiva_n2->getStyle('C'.$fila_n2, $rows['ticket_proveedor'])->getAlignment()->setHorizontal('center');
    $hojaActiva_n2->getStyle('C'.$fila_n2, $rows['ticket_proveedor'])->getAlignment()->setVertical('center');
    $hojaActiva_n2->getStyle('C'.$fila_n2, $rows['ticket_proveedor'])->getAlignment()->setWrapText(true);
    $hojaActiva_n2->getStyle('C'.$fila_n2, $rows['ticket_proveedor'])
    ->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('C'.$fila_n2, $rows['ticket_proveedor'])
    ->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('C'.$fila_n2, $rows['ticket_proveedor'])
    ->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('C'.$fila_n2, $rows['ticket_proveedor'])
    ->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    
    $hojaActiva_n2->setCellValue('D'.$fila_n2, $rows['grupo_escalado']);
    $hojaActiva_n2->getStyle('D'.$fila_n2, $rows['grupo_escalado'])->getAlignment()->setHorizontal('center');
    $hojaActiva_n2->getStyle('D'.$fila_n2, $rows['grupo_escalado'])->getAlignment()->setVertical('center');
    $hojaActiva_n2->getStyle('D'.$fila_n2, $rows['grupo_escalado'])->getAlignment()->setWrapText(true);
    $hojaActiva_n2->getStyle('D'.$fila_n2, $rows['grupo_escalado'])
    ->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('D'.$fila_n2, $rows['grupo_escalado'])
    ->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('D'.$fila_n2, $rows['grupo_escalado'])
    ->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('D'.$fila_n2, $rows['grupo_escalado'])
    ->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    
    $hojaActiva_n2->setCellValue('E'.$fila_n2, $rows['llamada_guardias']);
    $hojaActiva_n2->getStyle('E'.$fila_n2, $rows['llamada_guardias'])->getAlignment()->setHorizontal('center');
    $hojaActiva_n2->getStyle('E'.$fila_n2, $rows['llamada_guardias'])->getAlignment()->setVertical('center');
    $hojaActiva_n2->getStyle('E'.$fila_n2, $rows['llamada_guardias'])->getAlignment()->setWrapText(true);
    $hojaActiva_n2->getStyle('E'.$fila_n2, $rows['llamada_guardias'])
    ->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('E'.$fila_n2, $rows['llamada_guardias'])
    ->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('E'.$fila_n2, $rows['llamada_guardias'])
    ->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('E'.$fila_n2, $rows['llamada_guardias'])
    ->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    
    $hojaActiva_n2->setCellValue('F'.$fila_n2, $rows['descripcion']);
    $hojaActiva_n2->getStyle('F'.$fila_n2, $rows['descripcion'])->getAlignment()->setVertical('center');
    $hojaActiva_n2->getStyle('F'.$fila_n2, $rows['descripcion'])->getAlignment()->setWrapText(true);
    $hojaActiva_n2->getStyle('F'.$fila_n2, $rows['descripcion'])
    ->getBorders()->getTop()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('F'.$fila_n2, $rows['descripcion'])
    ->getBorders()->getBottom()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('F'.$fila_n2, $rows['descripcion'])
    ->getBorders()->getLeft()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    $hojaActiva_n2->getStyle('F'.$fila_n2, $rows['descripcion'])
    ->getBorders()->getRight()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK);
    
    $fila_n2++;
    }



header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bitacora.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel_n1, 'Xlsx');
$writer->save('php://output');

exit;
?>