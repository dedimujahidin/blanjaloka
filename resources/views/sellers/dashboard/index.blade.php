@extends('sellers/master-sellers')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

        </div>
    </section>
</div>
@if ($status = Session::get('success'))
    <script>
        alert('Pendaftaran Anda Sebagai Sellers Berhasil, Selamat Berjualan :)');
    </script>
@endif
@endsection