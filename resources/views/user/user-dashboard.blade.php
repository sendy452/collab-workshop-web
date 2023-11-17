@extends('layouts.master')

@section('title', "Dashboard $user" )

@section('content')
<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">
                            @php
                            date_default_timezone_set("Asia/Jakarta");
                            $jam = date('H:i');
                            $user_name = Auth::user()->name;
                            
                            if ($jam > '05:30' && $jam < '10:00') {
                                $salam = 'Selamat Pagi';
                            } elseif ($jam >= '10:00' && $jam < '15:00') {
                                $salam = 'Selamat Siang';
                            } elseif ($jam < '18:00') {
                                $salam = 'Selamat Sore';
                            } else {
                                $salam = 'Selamat Malam';
                            }
                            
                            echo $salam.', '.$user_name;
                            @endphp
                        </h2>
                        <h5 class="text-white op-7 mb-2">Selamat datang di layanan Tuku Buku online, platform zaman now!</h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <a href="{{ route('histori-pesanan') }}" style="text-decoration:none" >
                        <div class="card card-stats card-round">
                            <div class="card-body ">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                                            <i class="fas fa-book"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Buku Anda</p>
                                            <h3 class="card-title">{{ $bukusaya->count() }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="{{ route('histori-pesanan') }}" style="text-decoration:none" >
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-success bubble-shadow-small">
                                            <i class="fas fa-money-bill"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Transaksi Sukses</p>
                                            <h4 class="card-title">{{ $bukusaya->count() }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="{{ route('histori-pesanan') }}" style="text-decoration:none" >
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-danger bubble-shadow-small">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Transaksi Pending</p>
                                            <h4 class="card-title">{{ $data->count() }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                        <i class="fas fa-newspaper"></i>
                                        
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Total Harga Buku</p>
                                        <h4 class="card-title">RP. {{ number_format($total_beli) }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-warning bubble-shadow-small">
                                        <i class="fas fa-info"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Info</p>
                                        <b> Model :</b> # / #<br>
                                        <b> OS : #</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-danger bubble-shadow-small">
                                        <i class="fas fa-database"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Total Memory/Total Hdd</p>
                                        <h4 class="card-title"># / #</h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#" style="text-decoration:none" >
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-muted bubble-shadow-small">
                                            <i class="fas fa-user-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">PPPoE Active</p>
                                            <h4 class="card-title">#</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="" style="text-decoration:none" >
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-info bubble-shadow-small">
                                            <i class="fas fa-wifi"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Total User Hotspot</p>
                                            <h4 class="card-title">#</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>
            
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Pesanan diproses</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No Pesanan</th>
                                            <th>Nama Buku</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td><a href="{{ route('show.histori-pesanan', encrypt($item->id)) }}" style="text-decoration:none">{{ $item->tracking_no }}</a></td>
                                            <td><a href="{{ route('show.histori-pesanan', encrypt($item->id)) }}" style="text-decoration:none">{{ $item->buku->name }}</a></td>
                                            <td>
                                                <a href="{{ route('show.histori-pesanan', encrypt($item->id)) }}" style="text-decoration:none">
                                                    @if ($item->buku->selling_price == null)
                                                    Rp. {{ number_format($item->buku->original_price) }} 
                                                    @else
                                                    RP. {{ number_format($item->buku->selling_price) }} 
                                                    @endif
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('show.histori-pesanan', encrypt($item->id)) }}" style="text-decoration:none">
                                                    @if ($item->status == 1)
                                                    <span style="color: green">Berhasil</span>
                                                    @else
                                                    <span style="color: red">Proses</span>
                                                    @endif
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
                
            </div>
        </div>
        
        @include('layouts.footer')
        
    </div>
    
    @endsection