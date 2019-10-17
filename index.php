<?php include('head.php'); ?>
<body>
    <div class="position-header">
        <?php include('header.php'); ?>
        <?php include('menu.php'); ?>
    </div>
    <?php include('carrousel.php')?>
    <div class="space-top"></div>
    <div class=" central-container introduce flex-between" id="introduce">
        <div class="presentacion">
            <h2 class="titleH2 text-center">¡Bienvenidos!</h2>
            <p class="text-center central-container description-text">
            Vivir es una aventura y brindar a esa aventura los recursos necesarios para disfrutarla al máximo es lo que me despierta cada día. Necesitas ¿Subir peso? ¿tienes intolerancias alimentos? ¿tienes alergias alimentos?¿tienes celiaquía? permiteme acompañarte en este proceso, descubriendo la nueva forma de alimentarte y nutrirte.
            </p>
        </div>
        <div class="pic-profile">
            <img src="./assets/gabyEstrada.jpg" alt="Gabriela Estrada | Nutricionista | Dietista | Especilista en alergias">
        </div>
    </div>
    <div class="img-front img-1" id="show-pic"></div>
    <div class="services central-container" id="services">
        <div class="four--column">
        <div class="one text-center img-services">
            <h3 class="titleH3"><i class="fas fa-clipboard-list"></i>Evaluación</h3>
            <img src="./assets/evaluacion.jpg" alt="Evaluación">
        </div>
        <div class="two text-center img-services">
            <h3 class="titleH3"><i class="titleH3 fas fa-user-md"></i>Estado nutrional</h3>
            <img src="./assets/estado_nutricional.jpg" alt="Estado Nutricional">
        </div>
        <div class="three text-center img-services">
            <h3 class="titleH3"><i class="titleH3 fas fa-chart-bar"></i>Gráfica de OMS</h3>
            <img src="./assets/graficaOMS.jpg" alt="Gráfica OMS">
        </div>
        <div class="four text-center img-services">
            <h3 class="titleH3"><i class="titleH3 fas fa-user-check"></i>Plan alimenticio</h3>
            <img src="./assets/plan_alimenticio.jpg" alt="Plan alimenticio">
        </div>
        </div>
    </div>
    <div class="img-front img-2" id="show-pic"></div>
    <div class="textimonials" id="textimonials">
        <div class="display-container">
            <img class="myTestimonial testimonials-size" src="./" alt="">
            <img class="myTestimonial testimonials-size" src="./" alt="">
            <img class="myTestimonial testimonials-size" src="./" alt="">
            <img class="myTestimonial testimonials-size" src="./" alt="">
            <img class="myTestimonial testimonials-size" src="./" alt="">
        </div>
        <button></button>
        <button></button>
    </div>
    <?php include('footer.php');?>
    <?php include('links.php'); ?>
</body>
</html>