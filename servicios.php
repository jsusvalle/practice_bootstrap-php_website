<?php
    $titulo = 'Servicios';
    include 'templates/header.php';
    include 'templates/navegacion.php';
?>

    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="img/servicios.jpg" class="img-fluid" alt="">
                <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2>
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row">
            <main class="col-lg-8 contenido-principal">
                <h2 class="d-block d-md-none text-uppercase text-center">
                    Servicios
                </h2>

                <div id="servicios">
                    <div class="card">
                        <div class="card-header" id="servicio1">
                            <h2 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="descripcion1">
                                    Servicio 1
                                </button>
                            </h2>
                        </div>
                        <!--card-header-->

                        <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="#servicios">

                            <div class="card-body">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem incidunt iste recusandae commodi dolore distinctio. Labore saepe voluptatum quam esse blanditiis minus commodi architecto? Veniam quia porro rem assumenda voluptatem totam omnis
                                enim pariatur. Explicabo obcaecati quam dolorum fugiat quis provident perferendis fuga commodi ad? Enim veritatis aliquid harum quasi!
                            </div>
                        </div>
                        <!--#Description-->
                    </div>
                    <!--.card-->

                    <div class="card">
                        <div class="card-header" id="servicio2">
                            <h2 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="descripcion2">
                                    Servicio 2
                                </button>
                            </h2>
                        </div>
                        <!--card-header-->

                        <div id="descripcion2" class="collapse" aria-labelledby="servicio2" data-parent="#servicios">

                            <div class="card-body">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem incidunt iste recusandae commodi dolore distinctio. Labore saepe voluptatum quam esse blanditiis minus commodi architecto? Veniam quia porro rem assumenda voluptatem totam omnis
                                enim pariatur. Explicabo obcaecati quam dolorum fugiat quis provident perferendis fuga commodi ad? Enim veritatis aliquid harum quasi!
                            </div>
                        </div>
                        <!--#Description-->
                    </div>
                    <!--.card-->

                    <div class="card">
                        <div class="card-header" id="servicio3">
                            <h2 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="descripcion3">
                                    Servicio 3
                                </button>
                            </h2>
                        </div>
                        <!--card-header-->

                        <div id="descripcion3" class="collapse" aria-labelledby="servicio3" data-parent="#servicios">

                            <div class="card-body">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem incidunt iste recusandae commodi dolore distinctio. Labore saepe voluptatum quam esse blanditiis minus commodi architecto? Veniam quia porro rem assumenda voluptatem totam omnis
                                enim pariatur. Explicabo obcaecati quam dolorum fugiat quis provident perferendis fuga commodi ad? Enim veritatis aliquid harum quasi!
                            </div>
                        </div>
                        <!--#Description-->
                    </div>
                    <!--.card-->
            </main>

            <aside class="col-lg-4 pt-4 pt-lg-8">
                <div class="sidebar p-3">
                    <h2 class="text-center text-uppercase mt-4">Nuevos clientes</h2>
                    <p class="lead text-center mt-4">
                        Recibe 20% de descuento con este cupón
                    </p>

                    <div class="cupon px-2 py-5 mt-5">
                        <p class="text-uppercase text-center mb-0">
                            <span class="display-4">20% Descuento</span><br> en todos los servicios
                        </p>
                    </div>
                </div>
            </aside>
            </div>
        </div>

        <div class="citas container-fluid py-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <h3 class="text-uppercase">Realiza una cita</h3>
                    <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quidem, quasi impedit placeat perferendis repellendus eligendi quo debitis delectus non!perferendis repellendus eligendi quo debitis delectus non!</p>
                    <a href="#" class="btn btn-primary mt-3 btn-lg text-uppercase">Leer más</a>
                </div>
            </div>
        </div>

    <?php
    include 'templates/footer.php';
    ?>