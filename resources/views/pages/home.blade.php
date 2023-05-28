@extends('layouts.public')
@section('content')

    <!-- HERO -->

    <section class="fondo">
        <div class="container-fluid p-0 pb-5">
            <img src="{{asset('images/FONDO_HOME_4.jpg')}}" width="100%" class="img-fluid" alt="img-fluid" />
        </div>
    </section>

    <!-- CONTENIDO HOME -->

    <!-- SOBRE NOSOTROS -->
    <section class="home">
        <section class="contenido-home pe-5 ps-5">
            <div class="row pt-5 pb-5" id="row-1">
                <div class="col-lg" id="col-1">
                    <div class="texto-col-1">
                        <h1 class="sobre-nosotros">Sobre nosotros</h1>
                    </div>
                </div>
                <div class="col-lg p-4" id="col-2">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                        consequuntur placeat obcaecati explicabo voluptatem voluptates at
                        rem, molestiae quos ex magni culpa. Rem ut doloribus vel vero
                        excepturi iure quam. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Itaque eligendi perspiciatis quos, quae ipsam modi
                        similique qui ducimus sint. Architecto perspiciatis minima
                        blanditiis nostrum odit optio, enim ipsam quod illum? Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Voluptate sed laborum
                        impedit officia unde id laudantium ipsam minus, quod repudiandae
                        nihil corrupti, natus excepturi? At officiis fuga inventore
                        cupiditate perferendis? Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Eveniet, natus, et porro voluptates maxime beatae
                        similique tempore nostrum in suscipit eum debitis veritatis
                        molestiae ratione nisi ducimus architecto illum soluta!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste aliquam voluptas tenetur laboriosam delectus necessitatibus placeat voluptate repellendus id, tempora iure dolores accusantium animi enim vitae. Aut mollitia quisquam in!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui reiciendis adipisci quos officia, fuga quia eius nam quo eveniet, illo quam at quas! At incidunt similique, veritatis facere magnam exercitationem?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, nobis saepe sed rem, quisquam dicta fugiat libero eveniet ad explicabo harum quibusdam, repellat ipsa expedita tempora soluta. Distinctio, beatae earum.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident labore voluptatem consequatur ea vitae fugit quo qui, consectetur velit, placeat minus nihil similique esse ducimus aliquam delectus laboriosam. Rem, quaerat.
                    </p>
                </div>
                <div class="col-lg" id="col-3"></div>
            </div>

            <!-- ÚLTIMAS NOTICIAS -->

            <div class="ultimas-noticias pt-5 pb-5">
                <h1>Últimas</h1>
                <h1>noticias</h1>
                <hr class="linea2" />
                <div class="row pt-5 justify-content-center" id="carrusel">
                    <!-- <div class="col-2"></div> -->
                    <div class="col-8">
                        <div
                            id="carrusel"
                            class="carousel slide"
                            data-bs-ride="carousel"
                        >
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        src="{{asset('images/CARRUSEL_1.jpg')}}"
                                        class="d-block w-100"
                                        alt="..."
                                    />
                                </div>
                                <div class="carousel-item">
                                    <img
                                        src="{{asset('images/CARRUSEL_2.jpg')}}"
                                        class="d-block w-100"
                                        alt="..."
                                    />
                                </div>
                                <div class="carousel-item">
                                    <img
                                        src="{{asset('images/CARRUSEL_6.jpg')}}"
                                        class="d-block w-100"
                                        alt="..."
                                    />
                                </div>
                            </div>
                            <button
                                class="carousel-control-prev"
                                type="button"
                                data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev"
                            >
                <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                ></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button
                                class="carousel-control-next"
                                type="button"
                                data-bs-target="#carouselExampleControls"
                                data-bs-slide="next"
                            >
                <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                ></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <!-- <div class="col-2"></div> -->
                </div>
            </div>
        </section>
    </section>


@endsection
