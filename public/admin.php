<?php 
    session_start();
    if (isset ($_SESSION['nom'])) {}
    else {header('location: login.php');}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Icomoon-->
    <link rel="stylesheet" type="text/css" href="lib/style.css">

    <title>La Magia del Cotillon</title>

    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">           <!-- Font Awesome, http://fontawesome.io/ -->
    <link rel="stylesheet" href="/lib/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/lib/css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="/lib/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/lib/css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="/lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="/lib/css/bootstrap.min.css.map">

    <script src="/lib/js/jquery-3.3.1.min.js"></script>
    <script src="/lib/js/jquery-3.3.1.min.map" type="application/json"></script>
    <script src="/lib/js/popper.min.js"></script>
    <script src="/lib/js/popper.min.js.map" type="application/json"></script>
    <script src="/lib/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/js/bootstrap.bundle.min.js.map"  type="application/json"></script>
    <script src="/lib/js/bootstrap.min.js"></script>
    <script src="/lib/js/bootstrap.min.js.map"  type="application/json"></script>
    <!-- Bootstrap style, http://v4-alpha.getbootstrap.com/ -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                <!-- Magnific pop up style, http://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">                              
    <link rel="stylesheet" href="css/estilos.css">


    <style>
        .link:hover{text-decoration: underline !important;cursor: pointer;}
    </style>    
</head>

      <body>
        <div class="container-fluid">
            <a href="" id="cerrar" class="text-primary link">Cerrar Sesión</a>
            <div class="float-right">
                Bienvenida 
                <a href="perfil.php" class="text-primary link">
                    <?php echo $_SESSION['nom']; ?>
                </a>
            </div>
        </div>
        <div class="container-fluid">
            <section id="welcome" class="tm-content-box tm-banner margin-b-10">
                <div class="tm-banner-inner tit p-xs-1">
                    <h2 class="tm-banner-title tit">Bienvenidos a la Magia del Cotillon</h2>                        
                </div>                    
            </section>

            <div class="tm-body">
                <div class="tm-sidebar">
                    <nav class="tm-main-nav">
                        <ul class="tm-main-nav-ul">
                            <li class="tm-nav-item"><a href="#welcome" class="tm-nav-item-link tm-button">
                                <i class="fa fa-smile-o tm-nav-fa"></i>Bienvenidos</a>
                            </li>
                            <li class="tm-nav-item"><a href="#gallery" class="tm-nav-item-link tm-button">
                                <i class="fa fa-image tm-nav-fa"></i>Categorías</a>
                            </li>
                            <li class="tm-nav-item"><a href="#services" class="tm-nav-item-link tm-button">
                                <i class="fa fa-tasks tm-nav-fa"></i>Servicios Adicionales</a>
                            </li>
                            <li class="tm-nav-item"><a href="#about" class="tm-nav-item-link tm-button">
                                <i class="fa fa-sitemap tm-nav-fa"></i>Acerca de Nosotros</a>
                            </li>
                            <li class="tm-nav-item"><a href="#contact" class="tm-nav-item-link tm-button">
                                <i class="fa fa-envelope-o tm-nav-fa"></i>Contáctanos</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                <div class="tm-main-content">
                    
                    <div class="tm-content-box tm-content-box-home mb-0">                        
                        <img src="img/portada.jpg" alt="magia del cotillon" class="img-fluid tm-welcome-img" style="margin-bottom: -50px" /> 
                        <div class="menu1">
                            <span class="icon-menu2"></span>
                        </div> 
                            <div class="row ml-md-0 bg-light mt-5 mt-lg-0">
                                <div id="enc" class="tm-welcome-text col-12 mb-lg-5 bg-light mt-lg-0" style="height: auto;">
                                    <button id="btn-edit0" class="btn btn-info btn-sm my-2 float-right" style="position: relative; z-index: 9">Editar</button>
                                    <form action="" id="form0" class="col-md-10 my-1">
                                        <textarea id="txt-p10" maxlength="500" rows="8" class="form-control w-100 my-1"></textarea>
                                        <textarea id="txt-p20" maxlength="500" rows="1" class="form-control w-100 my-1"></textarea>
                                        <input type="submit" class="float-right btn btn-sm btn-primary" id="btn-send0" value="Actualizar" />
                                    </form>
                                    <p id="p10" class="text-justify px-3 mb-0">
                                    </p><p id="p20" class="p-3"><i></i></p> 
                                </div>                            
                                <a href="#" class="tm-welcome-link tm-button w-100">La magia en vivo</a>
                            </div>
                    </div>
                        
                    <div id="gallery" class="tm-content-box">                        
                        <div class="grid tm-gallery bg-light py-5 justify-content-center ">
                            <figure class="effect-bubba m-1">
                                <img src="img/fiestas_1.jpg" alt="Image 8" class="img-fluid">
                                <figcaption>
                                    <h2>Fiestas <span>Oficina</span></h2>
                                    <p>Amigo secreto, gorros personalizados, etc.</p>
                                    <a href="img/fiestas.jpg">view more</a>
                                </figcaption>
                            </figure>

                            <figure class="effect-bubba m-1">
                                <img src="img/1cumple.jpg" alt="Image 7" class="img-fluid">
                                <figcaption>
                                    <h2 style="margin-left: -8px;">cumple<span>años</span></h2>
                                    <p>Gorros y dulceros personalizados</p>
                                    <a href="img/cumple_1.jpg">View more</a>
                                </figcaption>
                            </figure>

                            <figure class="effect-bubba m-1">
                                <img src="img/1torta.jpg" alt="Image 5" class="img-fluid">
                                <figcaption>
                                    <h2 style="margin-left: -15px;">Baby<span>Showers</span></h2>
                                    <p>Torta de pañales, marcos selfies, adornos varios, etc.</p>
                                    <a href="img/torta_1.jpg">View more</a>
                                </figcaption>
                            </figure>

                            <figure class="effect-bubba m-1">
                                <img src="img/marco.jpg" alt="Image 3" class="img-fluid">
                                <figcaption>
                                    <h2>Bo<span>das</span></h2>
                                    <p>Gorros personalizados y marcos selfies</p>
                                    <a href="img/marco_1.jpg">View more</a>
                                </figcaption>
                            </figure>

                            <figure class="effect-bubba m-1">
                                <img src="img/birrete.jpg" alt="Image 2" class="img-fluid">
                                <figcaption>
                                    <h2 style="margin-left: -22px;">Gradua<span>ciones</span></h2>
                                    <p>Birretes y recuerdos</p>
                                    <a href="img/birrete_1.jpg">View more</a>
                                </figcaption>
                            </figure>

                            <figure class="effect-bubba m-1">
                                <img src="img/x.jpg" alt="Image 4" class="img-fluid">
                                <figcaption>
                                    <h2>Despedidas de <span>Soltera</span></h2>
                                    <p class="pt-0">Categoría sólo para mayores de edad.</p>
                                    <a href="img/x.jpg">View more</a>
                                </figcaption>
                            </figure>                                
                        </div>
                    </div>

                    <div id="services" class="tm-content-box tm-gray-bg tm-services">   
                        <div class="container">
                            <h2 class="tm-section-title text-center bold py-5">Servicios Adicionales</h2> </div> 
                    </div>
                    <div id="gallery" class="tm-content-box">                        
                        <div class="grid tm-gallery bg-light justify-content-center">
                            <figure class="effect-bubba m-1">
                                <img src="img/img-11-08.jpg" alt="Image 8" class="img-fluid">
                                <figcaption>
                                    <h2>Efem<span>érides</span></h2>
                                    <p>Gorros de carabinero y otros.</p>
                                    <a href="img/img-11-08.jpg">View more</a>
                                </figcaption>
                            </figure>

                            <figure class="effect-bubba m-1">
                                <img src="img/conejitos.jpg" alt="Image 7" class="img-fluid">
                                <figcaption>
                                    <h2>Pas<span>cua</span></h2>
                                    <p>Conejitos de pascua</p>
                                    <a href="img/conejitos_2.jpg">View more</a>
                                </figcaption>
                            </figure>

                            <figure class="effect-bubba m-1">
                                <img src="img/gold.jpg" alt="Image 5" class="img-fluid">
                                <figcaption>
                                    <h2>Día de la <span>madre</span></h2>
                                    <p>Espejos y otros.</p>
                                    <a href="img/gold_2.jpg">View more</a>
                                </figcaption>
                            </figure>

                            <figure class="effect-bubba m-1">
                                <img src="img/hallo.jpg" alt="Image 3" class="img-fluid">
                                <figcaption>
                                    <h2>Hall<span>oween</span></h2>
                                    <p>Gorros, máscaras y otros.</p>
                                    <a href="img/hallo.jpg">View more</a>
                                </figcaption>
                            </figure>

                            <figure class="effect-bubba m-1">
                                <img src="img/sheyk.jpg" alt="Image 2" class="img-fluid">
                                <figcaption>
                                    <h2>Nav<span>idad</span></h2>
                                    <p>Reyes magos, adornos y más.</p>
                                    <a href="img/sheyk_1.jpg">View more</a>
                                </figcaption>
                            </figure>

                            <figure class="effect-bubba m-1">
                                <img src="img/disfrases.jpg" alt="Image 4" class="img-fluid">
                                <figcaption>
                                    <h2>Disfr<span>ases</span></h2>
                                    <p class="pt-0">Niño y adulto.</p>
                                    <a href="img/disfrases_1.jpg">View more</a>
                                </figcaption>
                            </figure>                                
                        </div>
                    </div>
                    

            <!-- slider -->
                    <div id="about" class="tm-content-box">
                        <div class="tm-box-pad tm-bordered-box">
                            <button id="btn-edit1" class="btn btn-info btn-sm my-2 float-right">Editar</button>
                            <form action="" id="form1" class="mb-5">
                                <textarea id="txt-tit1" maxlength="30" rows="1" class="form-control w-50 my-1"></textarea>
                                <textarea id="txt-p11" maxlength="500" rows="6" class="form-control w-100 my-1"></textarea>
                                <textarea id="txt-p21" maxlength="500" rows="6" class="form-control w-100 my-1"></textarea>
                                <input type="submit" class="float-right btn btn-sm btn-primary" id="btn-send1" value="Actualizar" />
                            </form>
                            <h2 class="tm-section-title" id="tit1" >Titulo</h2>
                            <p id="p11"></p>
                        </div>
                        <div class="tm-flex">
                            <div class="tm-purple-bg tm-box-pad tm-bordered-box tm-no-border-top">
                                <p id="p21"></p>
                            </div>  
                        </div>                        
                    </div>

                    <section id="contact" class="tm-content-box">

                        <div class="tm-flex">
                            <div class="tm-contact-left-half tm-gray-bg">
                                <div class="tm-contact-inner-pad">
                                    <h2 class="tm-section-title">Contáctanos</h2>
                                    <form action="#contact" method="post" class="contact-form">

                                        <div class="form-group">
                                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Nombre"  required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="contact_message" name="contact_message" maxlength="500" class="form-control" rows="9" placeholder="Mensaje" required></textarea>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary pull-xs-right tm-button tm-button-normal">Enviar</button>

                                    </form>
                                </div>                                
                            </div>

                            <div class="tm-contact-right-half tm-purple-bg pb-5">
                                <div class="tm-address-box pb-5">
                                    <h2 class="tm-section-title"></h2>
                                    <address>
                                        <div>
                                            <span class="icon-whatsapp"></span><a href="tel:+56956734009" id="tm-link" class="tel"></a>
                                        </div>
                                        <div>
                                            <span class="icon-facebook2"></span><a id="fac" href="https://www.facebook.com/La-Magia-del-Cotillón-409337636181101/"></a>
                                        </div>
                                        <div>
                                            <span class="icon-instagram"></span><a id="ins" href="https://www.instagram.com/lamagiadelcotillon/"></a>
                                        </div>
                                    </address>    
                                </div>                                
                                <div id="google-map"></div>
                            </div>
                        </div>
                        
                    </section>  

                    <footer class="tm-footer">
                        <p class="text-xs-center">Copyright &copy; 2018 La Magia Del Cotillón | Todos los derechos reservados
                    </footer>

                </div>
            </div>             
        </div>
        
        <!-- load JS files -->
        
        <script src="js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="js/jquery.sticky.js"></script> 
        <script src="js/funciones.js"></script> 
        <script src="js/ajax.js"></script> 
    </body>
    </html>