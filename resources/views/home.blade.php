@extends('layouts.app')

<title>@yield('title', 'EDS TERPEL')</title>
@section('content')
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <!-- Imagen del preloader -->
    <img class="animation__shake" src="https://portalcolombia.terpel.com/static/images/terpel_logo_og.png" alt="Terpel Logo" height="120" width="120">
  </div>

  <!-- Contenido principal -->
  <div class="content-wrapper">
    <!-- Encabezado del contenido -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Panel de control v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Contenido principal -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $productCount }}</h3>
                <p>Cantidad de productos</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $clientCount }}</h3>
                <p>Cantidad de clientes</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h6>{{ $saleCountDay }} / ${{ $saleTotalDay }}</h6>
                <p>Ventas diarias</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h6>{{ $saleCountMonth }} / ${{ $saleTotalMonth }}</h6>
                <p>Ventas mensuales</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Contenedor de imágenes -->
    <section class="content">
      <div class="container-fluid">
        <div class="row mt-4">
          <div class="col-md-4">
            <div class="image-container">
              <img src="https://pbs.twimg.com/media/EqL7qENXMAsuyQQ.jpg:large" class="img-fluid rounded shadow" alt="Terpel Image 1">
              <div class="image-overlay">
                <p class="image-text">Imagen 1</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="image-container">
              <img src="https://www.tropicanafm.com/wp-content/uploads/2023/05/segunda_Terpel_Aniversario_Nota_Editorial_1080x675-copia.jpg" class="img-fluid rounded shadow" alt="Terpel Image 2">
              <div class="image-overlay">
                <p class="image-text">Imagen 2</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="image-container">
              <img src="https://pbs.twimg.com/media/EUdERZqWsAE2Q-K?format=jpg&name=4096x4096" class="img-fluid rounded shadow" alt="Terpel Image 3">
              <div class="image-overlay">
                <p class="image-text">Imagen 3</p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->

<style>
  /* Estilos para las cajas */
  .small-box {
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
  }

  /* Estilos para las imágenes */
  .img-fluid {
    max-width: 100%;
    height: 200px; /* Ajustar la altura según sea necesario */
    transition: transform 0.3s ease-in-out;
  }
  
  .rounded {
    border-radius: 10px;
  }
  
  .shadow {
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }

  .image-container {
    overflow: hidden;
    position: relative;
  }

  .image-container:hover img {
    transform: scale(1.05);
  }

  .image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
  }

  .image-container:hover .image-overlay {
    opacity: 1;
  }

  .image-text {
    color: white;
    font-size: 24px;
    font-weight: bold;
  }
</style>

@endsection
