<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crabbly\Fpdf\Fpdf;
use App\Producto;

class PDFControllerProducto extends Controller
{
    public function pdf()
    {

        ///////////////////
        $produc = Producto::all();
        ///////////////////

        $tamañoceldas = 65;

        $pdf = app('Fpdf');

        //1. añadir paginas al documento
        $pdf->AddPage('P' , 'Legal');

        //2. Caracteristicas de estilo
        $pdf->SetFont('Times','', 18 );

        //3. Imprimir contenido en el pdf
        $pdf->Cell(1,10,'');
        $pdf->SetTextcolor(0, 0, 0);
        $pdf->Cell(80,9,'Reporte de Productos y sus existencias');
        $pdf->Image('../public/imagen/1.png',150,3,-450);
        $pdf->SetXY(10, 20);


        $pdf->SetFont('Times','B', 16 );
        $pdf->Cell($tamañoceldas , 9 , "Id" , 'RTB' , 0, 'C');
        $pdf->SetFont('Times','', 16 );
        $pdf->Cell($tamañoceldas , 9 , "Producto" , 'RTB' , 0, 'C');
        $pdf->Cell($tamañoceldas , 9 , "Numero Productos" , 'LTB' , 1, 'C');

        foreach($produc as $producto){
            $pdf->SetFont('Times','B', 16 );
            $pdf->Cell($tamañoceldas,10,$producto->idProducto,'LRTB',0 ,'C');
            $pdf->SetFont('Times','', 16 );
            $pdf->Cell($tamañoceldas,10,$producto->nombreProducto,'LRTB',0 ,'C');
            $pdf->Cell($tamañoceldas,10,$producto->cantidadProducto,'LRTB',1 ,'C');
        }


        //4. Mostrar el pdf
        return response($pdf->output() , 200 , [ 'Content-Type' => 'application/pdf' ]);

    }
}
