<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crabbly\Fpdf\Fpdf;
use App\pedidoDeProducto;

class PDFControllerDetalle extends Controller
{
    public function pdf()
    {

        ///////////////////
        $detalle = pedidoDeProducto::all();
        ///////////////////

        $tamañoceldas = 49;

        $pdf = app('Fpdf');

        //1. añadir paginas al documento
        $pdf->AddPage('P' , 'Legal');

        //2. Caracteristicas de estilo
        $pdf->SetFont('Times','', 18 );

        //3. Imprimir contenido en el pdf
        $pdf->Cell(1,10,'');
        $pdf->SetTextcolor(0, 0, 0);
        $pdf->Cell(80,9,'Reporte de Pedidos');
        $pdf->Image('../public/imagen/1.png',150,3,-450);
        $pdf->SetXY(10, 20);


        $pdf->SetFont('Times','B', 16 );
        $pdf->SetTextcolor(0, 0, 0);
        $pdf->Cell($tamañoceldas , 9 , "Producto" , 'RTB' , 0, 'C');
        $pdf->SetFont('Times','', 16 );
        $pdf->Cell($tamañoceldas , 9 , "Numero de Pedido" , 'RTB' , 0, 'C');
        $pdf->Cell($tamañoceldas , 9 , "Cantidad de Producto" , 'LTB' , 0, 'C');
        $pdf->Cell($tamañoceldas , 9 , "Precio" , 'LTB' , 1, 'C');

        $pdf->SetTextcolor(66, 18, 95 );

        foreach($detalle as $detalles){
            $pdf->SetFont('Times','B', 16 );
            $pdf->SetTextcolor(0, 0, 0);
            $pdf->Cell($tamañoceldas,10,$detalles->idProductoFK,'LRTB',0 ,'C');
            $pdf->SetFont('Times','', 16 );
            $pdf->Cell($tamañoceldas,10,$detalles->idPedidoFK,'LRTB',0 ,'C');
            $pdf->SetFont('Times','', 14 );
            $pdf->Cell($tamañoceldas,10,$detalles->cantidadProducto,'LRTB',0 ,'C');
            $pdf->SetFont('Times','B', 14 );
            $pdf->Cell($tamañoceldas,10,$detalles->precioProducto,'LRTB',1 ,'C');

        }


        //4. Mostrar el pdf
        return response($pdf->output() , 200 , [ 'Content-Type' => 'application/pdf' ]);

    }
}
