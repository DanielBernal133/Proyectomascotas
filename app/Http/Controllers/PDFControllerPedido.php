<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crabbly\Fpdf\Fpdf;
use App\Pedido;
use Illuminate\Support\Facades\DB;

class PDFControllerPedido extends Controller
{
    public function pdf()
    {

        ///////////////////
        $pedido = DB::table('pedido')
                    ->join('cliente', 'pedido.idClienteFK', '=', 'cliente.idUsuarioFK')
                    ->select('pedido.*', 'cliente.*', 'pedido.idPedido')
                    ->whereNotNull('idEmpleadoFK')
                    ->get();
        ///////////////////

        $tamañoceldas = 33;

        $pdf = app('Fpdf');

        //1. añadir paginas al documento
        $pdf->AddPage('P' , 'Legal');

        //2. Caracteristicas de estilo
        $pdf->SetFont('Times','', 25 );

        //3. Imprimir contenido en el pdf
        $pdf->Cell(1,10,'');
        $pdf->SetTextcolor(0, 0, 0);
        $pdf->Cell(80,9,'Reporte de Pedidos');
        $pdf->Image('../public/imagen/1.png',150,3,-450);
        $pdf->SetXY(10, 20);


        $pdf->SetFont('Times','B', 13 );
        $pdf->SetTextcolor(0, 0, 0);
        $pdf->Cell($tamañoceldas , 9 , "Id" , 'RTB' , 0, 'C');
        $pdf->SetFont('Times','', 13 );
        $pdf->Cell($tamañoceldas , 9 , "Fecha Solicitud" , 'RTB' , 0, 'C');
        $pdf->Cell($tamañoceldas , 9 , "Fecha Envio" , 'LTB' , 0, 'C');
        $pdf->Cell($tamañoceldas , 9 , "Fecha Entrega" , 'LTB' , 0, 'C');
        $pdf->Cell($tamañoceldas , 9 , "Estado Pedido" , 'LTB' , 0, 'C');
        $pdf->Cell($tamañoceldas , 9 , "Cliente" , 'LTB' , 1, 'C');


        foreach($pedido as $pedidos){
            $pdf->SetFont('Times','B', 14 );
            $pdf->SetTextcolor(0, 0, 0);
            $pdf->Cell($tamañoceldas,10,$pedidos->idPedido,'LRTB',0 ,'C');
            $pdf->SetFont('Times','', 14 );
            $pdf->Cell($tamañoceldas,10,$pedidos->fechaSolicitud,'LRTB',0 ,'C');
            $pdf->Cell($tamañoceldas,10,$pedidos->fechaEnvio,'LRTB',0 ,'C');
            $pdf->Cell($tamañoceldas,10,$pedidos->fechaEntrega,'LRTB',0 ,'C');
            $pdf->SetFont('Times','B', 14 );
                $pdf->SetTextcolor(11, 158, 24);
                $pdf->Cell($tamañoceldas,10, $pedidos->estadoPedido,'LRTB',0 ,'C');
            $pdf->SetTextcolor(0, 0, 0);
            $pdf->Cell($tamañoceldas,10,$pedidos->nombreCliente,'LRTB',1 ,'C');
        }


        //4. Mostrar el pdf
        return response($pdf->output() , 200 , [ 'Content-Type' => 'application/pdf' ]);

    }
}

