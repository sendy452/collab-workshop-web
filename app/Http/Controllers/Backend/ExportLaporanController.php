<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Buku;
use App\Models\Order;
use PDF;

class ExportLaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('cekRole:Admin');
    }


    public function exportPDF()
    {
        $data = Order::latest()->get();
        $buku = Buku::all();
        $bank = Bank::all();

        $pdf = PDF::loadView('backend.pesanan.pdf', compact('data', 'buku', 'bank'));
        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->stream('laporan_penjualan.pdf');
    }


    public function exportPDFSucces()
    {
        $data = Order::where('status', 1)->latest()->get();
        $buku = Buku::all();
        $bank = Bank::all();

        $pdf = PDF::loadView('backend.pesanan.pdf', compact('data', 'buku', 'bank'));
        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->stream('laporan_penjualan.pdf');
    }


    public function exportPDFProses()
    {
        $data = Order::where('status', 0)->latest()->get();
        $buku = Buku::all();
        $bank = Bank::all();

        $pdf = PDF::loadView('backend.pesanan.pdf', compact('data', 'buku', 'bank'));
        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->stream('laporan_penjualan.pdf');
    }


    public function exportPDFReview()
    {
        $data = Order::where('status', 2)->latest()->get();
        $buku = Buku::all();
        $bank = Bank::all();

        $pdf = PDF::loadView('backend.pesanan.pdf', compact('data', 'buku', 'bank'));
        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->stream('laporan_penjualan.pdf');
    }
    

    public function exportPDFTolak()
    {
        $data = Order::where('status', 3)->latest()->get();
        $buku = Buku::all();
        $bank = Bank::all();

        $pdf = PDF::loadView('backend.pesanan.pdf', compact('data', 'buku', 'bank'));
        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->stream('laporan_penjualan.pdf');
    }
}
