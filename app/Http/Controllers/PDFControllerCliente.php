<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crabbly\Fpdf\Fpdf;
use App\Cliente;

class PDFControllerCliente extends Controller
{
    public function pdf()
    {

        ///////////////////
        $cliente = Cliente::all();
        ///////////////////

        $tamañoceldas = 39;

        $pdf = app('Fpdf');

        //1. añadir paginas al documento
        $pdf->AddPage('P' , 'Legal');

        //2. Caracteristicas de estilo
        $pdf->SetFont('Times','', 25 );

        //3. Imprimir contenido en el pdf
        $pdf->Cell(1,10,'');
        $pdf->SetTextcolor(0, 0, 0);
        $pdf->Cell(80,9,'Reporte de Clientes');
        $pdf->Image('../public/imagen/1.png',150,3,-450);
        $pdf->SetXY(10, 20);


        $pdf->SetFont('Times','B', 16 );
        $pdf->SetTextcolor(0, 0, 0);
        $pdf->Cell($tamañoceldas , 9 , "Id" , 'RTB' , 0, 'C');
        $pdf->SetFont('Times','', 16 );
        $pdf->Cell($tamañoceldas , 9 , "Nombre" , 'RTB' , 0, 'C');
        $pdf->Cell($tamañoceldas , 9 , "Apellido" , 'LTB' , 0, 'C');
        $pdf->Cell($tamañoceldas , 9 , "Direccion" , 'LTB' , 0, 'C');
        $pdf->Cell($tamañoceldas , 9 , "Estado" , 'LTB' , 1, 'C');


        foreach($cliente as $clientes){
            $pdf->SetFont('Times','B', 14 );
            $pdf->SetTextcolor(0, 0, 0);
            $pdf->Cell($tamañoceldas,10,$clientes->idCliente,'LRTB',0 ,'C');
            $pdf->SetFont('Times','', 14 );
            $pdf->Cell($tamañoceldas,10,$clientes->nombreCliente,'LRTB',0 ,'C');
            $pdf->Cell($tamañoceldas,10,$clientes->apellidoCliente,'LRTB',0 ,'C');
            $pdf->SetFont('Times','', 12 );
            $pdf->Cell($tamañoceldas,10,$clientes->direccionCliente,'LRTB',0 ,'C');
            $pdf->SetFont('Courier','B', 14 );
            if($clientes->estadoCliente===1){
                $pdf->SetTextcolor(11, 158, 24);
                $pdf->Cell($tamañoceldas,10,$clientes->estadoCliente,'LRTB',1 ,'C');}
            else if ($clientes->estadoCliente===2){
                $pdf->SetTextcolor(174, 14, 14);
                $pdf->Cell($tamañoceldas,10,$clientes->estadoCliente,'LRTB',1 ,'C');
            }
        }


        //4. Mostrar el pdf
        return response($pdf->output() , 200 , [ 'Content-Type' => 'application/pdf' ]);

    }
}
