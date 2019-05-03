<?php
class Tes extends CI_Controller
{
    public function index()
    {
        require('./vendor/Spipu/Html2Pdf/Html2Pdf');

        $html2pdf = new Html2Pdf();
        $html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
        $html2pdf->output();
    }
}
