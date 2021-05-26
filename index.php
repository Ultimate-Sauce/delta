<?php 
require_once 'components/meta.php';
?>
		<title> <?php echo $sitio; ?> </title>
    </head>
    <body>
       
        <?php require_once 'components/header.php' ?>
        <!-- Page Header-->
        <?php require_once 'components/principal.php' ?>
		
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">		 
				 <h1>Un lugar para aprender</h1>
				 <p> Delta Hacking es una asociacion de personas que buscamos enseñ​ar a todo el que quiera aprender sobre hacking, ya sea que usen el conocimiento para el bien o el mal, contamos con un servidor en <a href="https://discord.gg/vQDMGJESzw">Discord</a> dedicado a la formacion de los hackers del mañ​ana.</p>
				 <p> Cada articulo contara con los links utilizados y un video de muestra para los que necesiten ver los pasos en manera grafica.</p>
				 <p> Todos los lunes y viernes se subira un nuevo articulo. </p>
				 <iframe width="800" height="400" src="https://www.youtube-nocookie.com/embed/PvVg4RYaSuU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<hr class="my-4" />
                    <div class="post-preview">
                        <a href="anonimato_en_la_red.php">
                            <h2 class="post-title">Anonimato en la red</h2>
                            <h3 class="post-subtitle">El como y por que tener seguridad en nuestra dia a dia</h3>
                        </a>
                        <p class="post-meta">
                            Subido por 
                            <a href="https://github.com/Ultimate-Sauce">Ultimate_Sauce</a>
                            el 28 de mayo del 2021
                        </p>
                    </div>
                    <hr class="my-4" />
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Entradas antiguas →</a></div>
                </div>
            </div>
        </div>
      
		<?php require_once 'components/footer.php' ?>
		
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
   
        <script src="js/scripts.js"></script>
    </body>
</html>
