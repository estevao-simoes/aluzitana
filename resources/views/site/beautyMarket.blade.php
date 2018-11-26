@extends('layouts.site')

@section('content')
    <section class="w-100 bg-gray">
        <div class="container">
            <div class="row">
                <div class="align-items-center bg-logo col-lg-4 d-flex flex-column justify-content-center text-center text-lg-left">
                    <p class="font-weight-light h1 m-0 hyper-header text-uppercase text-white">
                        Um pouco <br> da nossa <span class="text-gold font-weight-black d-block">História</span>
                        <img src="{{ asset('img/Objeto-Inteligente-de-Vetor.png') }}" class="img-fluid w-75" alt="">
                    </p> 
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="about-carousel">
                        <div class="item">
                            <img src="{{ asset('img/carousel_inner.png') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('img/carousel_inner.png') }}" class="w-100 h-100" alt="">
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <section class="container">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-6 order-last order-md-first">
                <span class="text-underline w-100 mb-5 mt-3 d-block d-md-none"></span>
                <p class="text-dark text-justify font-weight-normal">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero.
                    Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                </p>
                
                <p class="text-dark text-justify font-weight-normal">
                    Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus.
                </p>
                
            </div>
            <div class="col-lg-5 col-md-6 offset-lg-1">
                <div class="row mb-4">
                    <div class="col text-center text-md-left">
                        <h2 class="text-gold h3 text-underline text-uppercase">
                            Visão
                        </h2>
                        <p class="text-dark text-justify font-weight-normal">
                            Oferecer produtos e serviços de qualidade, com variedade e atendimento diferenciado, transmitindo credibilidade aos nossos clientes.                        
                        </p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col text-center text-md-left">
                        <h2 class="text-gold h3 text-underline text-uppercase">
                            Missão
                        </h2>
                        <p class="text-dark text-justify font-weight-normal">
                            Ser referência em supermercado, tornando-se a empresa mais adminirada em varejo no estado de Rondônia.
                        </p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col text-center text-md-left">
                        <h2 class="text-gold h3 text-underline text-uppercase">
                            Valores
                        </h2>
                        <p class="text-dark text-justify font-weight-normal">
                            Valorização do cliente, respeito e incentivo ao desenvolvimento de nossos colaboradores, trabalho em equipe, transparência e honestidade, foco na qualidade de produtos e serviços e responsabilidade social.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid mt-5 d-block d-lg-none">
        <div class="row">
            <div class="col px-0">
                <div class="banner-carousel">
                    <div class="item">
                        <img src="{{ asset('img/carousel_inner.png') }}" class="w-100 h-100" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/carousel_inner.png') }}" class="w-100 h-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection