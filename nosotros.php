<?php
    $titulo = 'Sobre nosotros';
    include 'templates/header.php';
    include 'templates/navegacion.php';
?>

    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="img/nosotros.jpg" class="img-fluid" alt="">
                <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row">
            <main class="col-lg-8 contenido-principal">
                <h2 class="d-block d-md-none text-uppercase text-center">
                    Nosotros
                </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, hic commodi numquam fugit fugiat pariatur, iusto et temporibus in minima impedit. Odit, possimus dignissimos. Et aliquid maxime illum eveniet harum amet totam sapientedicta.
                    Mollitia, labore voluptates ex culpa asperiores alias temporibus commodi voluptatem! Qui necessitatibus tenetur consequuntur odio fugit.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, hic commodi numquam fugit fugiat pariatur, iusto et temporibus in minima impedit. Odit, possimus dignissimos. Et aliquid maxime illum eveniet harum amet totam sapiente
                    dicta. Mollitia, labore voluptates ex culpa asperiores alias temporibus commodi voluptatem! Qui necessitatibus tenetur consequuntur odio fugit.</p>

                <h1 class="text-center text-uppercase mt-4 encabezado">
                    <span class="text-lowercase d-block">Conoce nuestras</span> instalaciones
                </h1>
                <div class="imagenes pt-4" id="img">
                    <a href="#" data-target="#imagen_1" data-toggle="modal">
                        <img src="img/galeria_mini_01.jpg" class="img fluid" alt="">
                    </a>

                    <a href="#" data-target="#imagen_2" data-toggle="modal">
                        <img src="img/galeria_mini_02.jpg" class="img fluid" alt="">
                    </a>

                    <a href="#" data-target="#imagen_3" data-toggle="modal">
                        <img src="img/galeria_mini_03.jpg" class="img fluid" alt="">
                    </a>

                    <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="imagen 1" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="img/galeria_grande_01.jpg" class="img-fluid" alt="">
                                </div>
                                <!--modal boddy-->
                            </div>
                            <!--modal content-->
                        </div>
                        <!--modal dialog-->
                    </div>
                    <!--modal-->

                    <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="imagen 2" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="img/galeria_grande_02.jpg" class="img-fluid" alt="">
                                </div>
                                <!--modal boddy-->
                            </div>
                            <!--modal content-->
                        </div>
                        <!--modal dialog-->
                    </div>
                    <!--modal-->

                    <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="imagen 3" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="img/galeria_grande_03.jpg" class="img-fluid" alt="">
                                </div>
                                <!--modal boddy-->
                            </div>
                            <!--modal content-->
                        </div>
                        <!--modal dialog-->
                    </div>
                    <!--modal-->
                </div>
            </main>

            <aside class="col-lg-4 pt-4 pt-lg-8 align-self-start">
                <div class="sidebar horario">
                    <h2 class="text-center text-uppercase">Horarios</h2>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum eius architecto ut aperiam, maxime ipsum ullam saepe aspernatur reprehenderit earum.</p>

                    <table class="table table-hover text-center mt-3">
                        <thead>
                            <tr>
                                <th class="text-center">Día</th>
                                <th class="text-center">De</th>
                                <th class="text-center">Hasta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lunes</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Martes</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Miércoles</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Jueves</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Viernes</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Sábado</td>
                                <td>10:00</td>
                                <td>14:00</td>
                            </tr>
                            <tr>
                                <td>Domingo</td>
                                <td>Cerrado</td>
                                <td>Cerrado</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </aside>
        </div>
    </div>

    <?php
    include 'templates/footer.php';
    ?>