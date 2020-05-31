<footer class="footer-sitio pt-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
                    <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, veritatis amet eveniet dignissimos asperiores sint sunt animi aut hic ipsam nisi quis aliquam, alias eius accusamus maiores, voluptates distinctio neque?</p>
                </div>
                <div class="col-md-4 text-center">
                    <h3 class="text-uppercase pb-4">Horario</h3>
                    <p>Lun-Vie: 9 AM - 7PM</p>
                    <p>Sábado:10 AM - 2PM</p>
                    <p>Domingo: Cerrado</p>
                </div>
                <div class="col-md-4 text-center">
                    <h3 class="text-uppercase pb-4">Contacto</h3>
                    <p>Landsome, Stret L4</p>
                    <p>66Lead sunsine showcase</p>
                    <nav class="sociales text-center">
                        <ul>
                            <li>
                                <a href="https://facebook.com">
                                    <span class="sr-only">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/">
                                    <span class="sr-only">Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com">
                                    <span class="sr-only">Instagram</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://pinterest.com">
                                    <span class="sr-only">Pinterest</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://youtube.com">
                                    <span class="sr-only">Youtube</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--col-md-4-->
                <hr class="w-100">
                <p class="text-center copyright w-100">Carolina Spa & Salón 2018. Todos los derechos reservados.</p>
            </div>
            <!--row-->
        </div>
    </footer>

    <script src="js/jquery.slim.js "></script>
    <script src="js/popper.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/scripts.js "></script>
</body>
</html>

<?php
	// Guarda todo el contenido a un archivo
	$fp = fopen($archivoCache, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);
	// Enviar al navegador
	ob_end_flush();
?>
