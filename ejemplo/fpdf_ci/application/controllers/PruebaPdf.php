<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PruebaPdf extends CI_Controller {

	public function index()
	{
		
	}

	public function crearPdfPropuestABasica() // Esta forma es una propuesta para tener una integracion como libreria
	{ 
		$this->load->library('pdf/pdfci');
		
		$FPDF = $this->pdfci->FPDF;

		$FPDF->AddPage('P','A4',0);
		$FPDF->SetFont('Arial','B',16);
		$FPDF->Cell(0,0,'Hola mundo 1 FPDF desde Codeigniter',0,1,'C');
		$FPDF->Output('paginaEnBlanco.pdf' , 'I' );    
				
	}

	public function crearPdfPropuestaAvanzada() 
	{
		$this->load->library('pdf/pdfCI');

		$FPDF = $this->pdfci->FPDF;

		$this->pdfci->generarCabecera(); // En la cabecera estara la configuracion como colores tamaños tipos de letras como otras caracteristicas  y trabajar solamente en los datos en las funciones
		
		$FPDF->Cell(0,0,'Hola mundo 2 FPDF desde Codeigniter',0,1,'C');
		$FPDF->Output('paginaEnBlanco.pdf' , 'I' );    
				
	}

	public function crearPdfFormaDirecta()
	{

		$this->load->library('pdf/pdfCI');

		$pdf = new FPDF();
		$pdf->AddPage('P','A4',0);
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(0,0,'Hola mundo 3 FPDF desde Codeigniter',0,1,'C');
		$pdf->Output('paginaEnBlanco.pdf' , 'I' );
	}

}

/* End of file PruebaPdf.php */
/* Location: ./application/controllers/PruebaPdf.php */