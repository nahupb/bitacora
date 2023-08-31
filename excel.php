<?php
require 'vendor/autoload.php';
require 'conexionExcel.php';

use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};

#### ESCALADOS N1 ####

//Query SQL
$sql_n1 = "SELECT ticket_remedy, fecha_creacion, ticket_proveedor, grupo_escalado, llamada_guardias, descripcion
FROM tratamiento WHERE grupo_escalado LIKE 'N1'";

//Resultado Query
$resultado = $mysqli->query($sql_n1);

//Nueva hoja
$excel_n1 = new Spreadsheet();

//Marcamos la hoja como activa
$hojaActiva = $excel_n1->getActiveSheet();

//Título
$hojaActiva->setTitle("Escalados N1");


#### Estilos encabezado A1:F1 ####

//Estilos predefinidos
$styleArray = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
    ],
    'borders' => [
        'top' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
        'bottom' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
        'left' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
        'right' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        'startColor' => [
            'argb' => 'A39F9F',
        ],
    ],
];

//Estilos aplicados
$hojaActiva->getStyle('A1')->applyFromArray($styleArray);
$hojaActiva->getStyle('B1')->applyFromArray($styleArray);
$hojaActiva->getStyle('C1')->applyFromArray($styleArray);
$hojaActiva->getStyle('D1')->applyFromArray($styleArray);
$hojaActiva->getStyle('E1')->applyFromArray($styleArray);
$hojaActiva->getStyle('F1')->applyFromArray($styleArray);

//Negrita encabezado A1:F1
$hojaActiva->getStyle('A1:F1')->getFont()->setBold(true);

//Fuente hoja
$excel_n1->getDefaultStyle()->getFont()->setName('Calibri');
//Tamaño fuente hoja
$excel_n1->getDefaultStyle()->getFont()->setSize(11);

//Ancho columna
$hojaActiva->getColumnDimension('A')->setAutoSize(true);
$hojaActiva->getColumnDimension('B')->setAutoSize(true);
$hojaActiva->getColumnDimension('C')->setAutoSize(true);
$hojaActiva->getColumnDimension('D')->setAutoSize(true);
$hojaActiva->getColumnDimension('E')->setAutoSize(true);
$hojaActiva->getColumnDimension('F')->setWidth(70);

//Datos celdas
$hojaActiva->setCellValue('A1', 'TICKET REMEDY');
$hojaActiva->setCellValue('B1', 'FECHA CREACION');
$hojaActiva->setCellValue('C1', 'TICKET PROVEEDOR');
$hojaActiva->setCellValue('D1', 'GRUPO ESCALADO');
$hojaActiva->setCellValue('E1', 'LLAMADA GUARDIAS');
$hojaActiva->setCellValue('F1', 'DESCRIPCION');
$hojaActiva->setCellValue('A2', 'ESCALADOS N1');


#### Encabezado N1 ####

//Combinar celdas A2:F2
$hojaActiva->mergeCells('A2:F2');

//Estilos aplicados
$hojaActiva->getStyle('A2')->applyFromArray($styleArray);
//Negrita
$hojaActiva->getStyle('A2')->getFont()->setBold(true);


//Contador fila para que los resultados se muestren a partir de la tercera fila
$fila = 3;

//Estilos predefinidos resultados BBDD
$styleArray_BBDD = [
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
    ],
    'borders' => [
        'top' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
        'bottom' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
        'left' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
        'right' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

//Volcamos en el excel los resultados obtenidos de la BBDD
while($rows = $resultado->fetch_assoc()){
//Resultado fila ticket remedy
$hojaActiva->setCellValue('A'.$fila, $rows['ticket_remedy']);
$hojaActiva->getStyle('A'.$fila, $rows['ticket_remedy'])->applyFromArray($styleArray_BBDD);
$hojaActiva->getStyle('A'.$fila, $rows['ticket_remedy'])->getAlignment()->setWrapText(true);

//Resultado fila fecha creación
$hojaActiva->setCellValue('B'.$fila, $rows['fecha_creacion']);
$hojaActiva->getStyle('B'.$fila, $rows['fecha_creacion'])->applyFromArray($styleArray_BBDD);
$hojaActiva->getStyle('B'.$fila, $rows['fecha_creacion'])->getAlignment()->setWrapText(true);

//Resultado fila ticket proveedor
$hojaActiva->setCellValue('C'.$fila, $rows['ticket_proveedor']);
$hojaActiva->getStyle('C'.$fila, $rows['ticket_proveedor'])->applyFromArray($styleArray_BBDD);
$hojaActiva->getStyle('C'.$fila, $rows['ticket_proveedor'])->getAlignment()->setWrapText(true);

//Resultado fila grupo escalado
$hojaActiva->setCellValue('D'.$fila, $rows['grupo_escalado']);
$hojaActiva->getStyle('D'.$fila, $rows['grupo_escalado'])->applyFromArray($styleArray_BBDD);
$hojaActiva->getStyle('D'.$fila, $rows['grupo_escalado'])->getAlignment()->setWrapText(true);

//Resultado fila llamada guardias
$hojaActiva->setCellValue('E'.$fila, $rows['llamada_guardias']);
$hojaActiva->getStyle('E'.$fila, $rows['llamada_guardias'])->applyFromArray($styleArray_BBDD);
$hojaActiva->getStyle('E'.$fila, $rows['llamada_guardias'])->getAlignment()->setWrapText(true);

//Resultado fila descripción
$hojaActiva->setCellValue('F'.$fila, $rows['descripcion']);
$hojaActiva->getStyle('F'.$fila, $rows['descripcion'])->applyFromArray($styleArray_BBDD);
$hojaActiva->getStyle('F'.$fila, $rows['descripcion'])->getAlignment()->setWrapText(true);

$fila++; //Aumentamos en un dígito el contador para que vayan aumentando las filas según los datos obtenidos de la BBDD
}


#### ESCALADOS N2 ####

//Nueva hoja
$excel_n1->createSheet();

//Marcamos la nueva hoja como activa
$excel_n1->setActiveSheetIndex(1);
$hojaActiva_n2 = $excel_n1->getActiveSheet();

//Query SQL
$sql_n2 = "SELECT ticket_remedy, fecha_creacion, ticket_proveedor, grupo_escalado, llamada_guardias, descripcion
FROM tratamiento WHERE grupo_escalado LIKE 'N2%'";

//Resultado Query
$resultado_n2 = $mysqli->query($sql_n2);

//Título
$hojaActiva_n2->setTitle('Escalados N2');

//Estilos aplicados
$hojaActiva_n2->getStyle('A1')->applyFromArray($styleArray);
$hojaActiva_n2->getStyle('B1')->applyFromArray($styleArray);
$hojaActiva_n2->getStyle('C1')->applyFromArray($styleArray);
$hojaActiva_n2->getStyle('D1')->applyFromArray($styleArray);
$hojaActiva_n2->getStyle('E1')->applyFromArray($styleArray);
$hojaActiva_n2->getStyle('F1')->applyFromArray($styleArray);

//Negrita encabezado A1:F1
$hojaActiva_n2->getStyle('A1:F1')->getFont()->setBold(true);

//Fuente hoja
$excel_n1->getDefaultStyle()->getFont()->setName('Calibri');

//Tamaño fuente hoja
$excel_n1->getDefaultStyle()->getFont()->setSize(11);

//Ancho columna
$hojaActiva_n2->getColumnDimension('A')->setAutoSize(true);
$hojaActiva_n2->getColumnDimension('B')->setAutoSize(true);
$hojaActiva_n2->getColumnDimension('C')->setAutoSize(true);
$hojaActiva_n2->getColumnDimension('D')->setAutoSize(true);
$hojaActiva_n2->getColumnDimension('E')->setAutoSize(true);
$hojaActiva_n2->getColumnDimension('F')->setWidth(70);

//Datos celdas
$hojaActiva_n2->setCellValue('A1', 'TICKET REMEDY');
$hojaActiva_n2->setCellValue('B1', 'FECHA CREACION');
$hojaActiva_n2->setCellValue('C1', 'TICKET PROVEEDOR');
$hojaActiva_n2->setCellValue('D1', 'GRUPO ESCALADO');
$hojaActiva_n2->setCellValue('E1', 'LLAMADA GUARDIAS');
$hojaActiva_n2->setCellValue('F1', 'DESCRIPCION');
$hojaActiva_n2->setCellValue('A2', 'ESCALADOS N1');


#### Encabezado N2 ####

//Combinar celdas A2:F2
$hojaActiva_n2->mergeCells('A2:F2');
//Estilos aplicados
$hojaActiva_n2->getStyle('A2')->applyFromArray($styleArray);
//Negrita
$hojaActiva_n2->getStyle('A2')->getFont()->setBold(true);


//Contador fila para que los resultados se muestren a partir de la tercera fila
$fila_n2 = 3;

//Volcamos en el excel los resultados obtenidos de la BBDD
while($rows = $resultado_n2->fetch_assoc()){
    //Resultado fila ticket remedy
    $hojaActiva_n2->setCellValue('A'.$fila_n2, $rows['ticket_remedy']);
    $hojaActiva_n2->getStyle('A'.$fila_n2, $rows['ticket_remedy'])->applyFromArray($styleArray_BBDD);
    $hojaActiva_n2->getStyle('A'.$fila_n2, $rows['ticket_remedy'])->getAlignment()->setWrapText(true);
    
    //Resultado fila fecha creación
    $hojaActiva_n2->setCellValue('B'.$fila_n2, $rows['fecha_creacion']);
    $hojaActiva_n2->getStyle('B'.$fila_n2, $rows['fecha_creacion'])->applyFromArray($styleArray_BBDD);
    $hojaActiva_n2->getStyle('B'.$fila_n2, $rows['fecha_creacion'])->getAlignment()->setWrapText(true);
    
    //Resultado fila ticket proveedor
    $hojaActiva_n2->setCellValue('C'.$fila_n2, $rows['ticket_proveedor']);
    $hojaActiva_n2->getStyle('C'.$fila_n2, $rows['ticket_proveedor'])->applyFromArray($styleArray_BBDD);
    $hojaActiva_n2->getStyle('C'.$fila_n2, $rows['ticket_proveedor'])->getAlignment()->setWrapText(true);
    
    //Resultado fila grupo escalado
    $hojaActiva_n2->setCellValue('D'.$fila_n2, $rows['grupo_escalado']);
    $hojaActiva_n2->getStyle('D'.$fila_n2, $rows['grupo_escalado'])->applyFromArray($styleArray_BBDD);
    $hojaActiva_n2->getStyle('D'.$fila_n2, $rows['grupo_escalado'])->getAlignment()->setWrapText(true);
    
    //Resultado fila llamada guardias
    $hojaActiva_n2->setCellValue('E'.$fila_n2, $rows['llamada_guardias']);
    $hojaActiva_n2->getStyle('E'.$fila_n2, $rows['llamada_guardias'])->applyFromArray($styleArray_BBDD);
    $hojaActiva_n2->getStyle('E'.$fila_n2, $rows['llamada_guardias'])->getAlignment()->setWrapText(true);
    
    //Resultado fila descripción
    $hojaActiva_n2->setCellValue('F'.$fila_n2, $rows['descripcion']);
    $hojaActiva_n2->getStyle('F'.$fila_n2, $rows['descripcion'])->applyFromArray($styleArray_BBDD);
    $hojaActiva_n2->getStyle('F'.$fila_n2, $rows['descripcion'])->getAlignment()->setWrapText(true);
    
    $fila_n2++; //Aumentamos en un dígito el contador para que vayan aumentando las filas según los datos obtenidos de la BBDD
    }


//Marcamos nuevamente la hoja de Escalados N1 como activa
$excel_n1->setActiveSheetIndex(0);

//Descargar excel en formato xlsx
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="bitacora.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel_n1, 'Xlsx');
$writer->save('php://output');

exit;
?>
