@extends('layouts.app') 
 @section('content')

  <div class="jumbotron">
    
 
  <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h1 class="my-4">Gestion Des Ventes</h1>
                    <div class="list-group">
                    @foreach ($produits as $produit) 
                              <a class="list-group-item " href="#!">{{ $produit->nomproduit }}</a>
                        @endforeach
                     
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="carousel slide my-4" id="carouselExampleIndicators" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="First slide" /></div>
                            <div class="carousel-item"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="Second slide" /></div>
                            <div class="carousel-item"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="Third slide" /></div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="row">
                          @foreach ($produits as $produit)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="https://www.google.com/search?q=t-shirt&safe=active&hl=fr&tbm=isch&sxsrf=ALeKk00U1VcfvEzqaCL_kRxL456ddb8OGA%3A1621216568251&source=hp&biw=1366&bih=568&ei=OM2hYIf_Co_8kwWpuqbwAw&oq=t-shirt&gs_lcp=CgNpbWcQAzICCAAyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADICCAA6BwgjEOoCECc6BAgjECc6BQgAELEDOggIABCxAxCDAVCkBViKH2DcJ2gBcAB4AIAB7gOIAbsXkgEFMy0zLjSYAQCgAQGqAQtnd3Mtd2l6LWltZ7ABCg&sclient=img&ved=0ahUKEwiH-5mtzs_wAhUP_qQKHSmdCT4Q4dUDCAc&uact=5#imgrc=Xt6kvQavgi1_4M" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Item One</a></h4>
                                    <h5>$produits -> prixdevente</h5>
                                    <p class="card-text">$produit -> typeproduit</p>
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                            @endforeach
                        </div>
                       
                        <!-- <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Item Six</a></h4>
                                    <h5>$24.99</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
@endsection