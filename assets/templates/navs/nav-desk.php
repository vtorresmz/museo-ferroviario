<style>
    <?php include get_template_directory() . '/assets/templates/navs/nav.css'; ?>
</style>
<nav id="site-navigation" class="navbar navbar-expand-lg navbar-light nav-mobile pt-0">
    <!---conatiner-->
    <div class="container-fluid">
        <!---row-->
        <div class="row w-100">
            <div class="container row color-nav-superior ">
                <div class="col-lg-8 p-l">hoy abierto hasta las 17:30 hrs.</div>
                <div class="col-lg-1"><a href="">Donaciones</a></div>
                <div class="col-lg-1"><a href="">Corporativo</a></div>
                <div class="col-lg-1"></div>
                <div class="col-lg-1"></div>
            </div>
            <!---navbrand-->
            <div class="navbar-brand col-6 col-md-2 border-circular p-l">

                <?php
                the_custom_logo();
                if (is_front_page() && is_home()) :
                ?>
                   
                <?php else :
                ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                <?php
                endif;
                $comercio_description = get_bloginfo('description', 'display');
                if ($comercio_description || is_customize_preview()) :
                ?>
                    <p class="site-description"><?php echo $comercio_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                ?>
                    <?php endif; ?>

            </div>
            <div class="contenedor-categorias-boton col-6 col-md-2 d-none">
                <a rel="popover" tabindex="0" class="d-flex align-items-center" data-bs-html="true" role="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content='<?php include get_template_directory() . '/assets/templates/navs/arraycat-menu.php'; ?>'>
                    <button class="boton-menu-desk" type="button">
                            <div class="boton-hamburguesa">
                            <span class="linea-hamburguesa"></span>
                            <span class="linea-hamburguesa"></span>
                            <span class="linea-hamburguesa"></span>
                            </div>
                
                        
                    </button>

                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col-12 col-md-8 nav-centrado" id="navbarSupportedContent">
                <!--searchbar-->
                <?php if (function_exists('aws_get_search_form')) {
                    aws_get_search_form(true, array('id' => '62968e5c35f00'));
                } ?>
                <!--searchbar-->
                <?php //OPCIÓN MENU 1 SIMPLE CON BOOTSTRAP
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-superior',
                        'menu_id'        => 'navbar',
                        'menu_class'     => 'navbar-nav m-auto nav-menu d-flex justify-content-between w-50 px-3 a-item-center',
                        'container_class' => 'nav col-12 col-md-12',
                    )
                );
                ?>
               

            </div>
        </div>
    </div>
</nav>
<script>
jQuery(function($){
    $( document ).ready(function() {
    //Efecto btn ticket
    $( ".btn-ticket-nav" ).mouseleave(function() {
        $('.btn-ticket-nav i').css("transform", "rotate(129deg)").css("transition-duration","500ms")
        $('.btn-ticket-nav').css("transform","translate(0%, 0%)")
    });
    $( ".btn-ticket-nav" ).mouseover(function() {
        $('.btn-ticket-nav i').css("transform", "rotate(60deg)").css("transition-duration","500ms")
        $('.btn-ticket-nav').css("transform","translate(0%, -10%)")
    });
});
})
</script>