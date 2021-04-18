<?php
/**
 * Template Name: Nos Prestations
 *
 * Template for displaying our services.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

<div id="full-width-page-wrapper">

	<div id="content">

			<div class="content-area" id="primary">

				<main class="site-main" id="main" role="main">
                <div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
                    <div class="row hero-row">
			            <div class="col-12 col-md-8 col1">
                            <p class="sm-title">Nos Prestations</p><div class="sm-title-dash"></div>
                            <h1 class="hero-header">Une capacité à répondre à <span>toutes vos demandes</span></h1>  
                        </div>
                        <div class="col-12 col-md-4 col2">
                            <br/>
                            <p class="hero-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim</p>
				        </div>
		            </div>
                    <?php get_template_part( 'global-templates/hero' ); ?>
</div>
    <div>
        <h1 class="section-title centered">Nos interventions</h1>
        <p class="centered">En spectacle, au service de vos concerts, pièces de théâtre, danse et festivals…
            <br/>En événementiel pour les Conférences de presse, les Meetings, les Expositions, les lancements de Produits, les salons professionnels…
            </p>
    </div>

</div>

        <div style="margin: 130px 0px;">
            <div class="row wrapper-service">
                <div class="col-md-6 col-12 contnt"style="order: 2;">
                    <h1 class="section-title">Spectacles</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent.
        
                        elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque.</p>
        
                    <a class="btn btn-primary long-btn">Contactez-nous</a>
                </div>
                <div class="col-md-6 col-12 empty" style="background-image: url(http://doctaroo.fr/sites/ievents/wp-content/uploads/2021/04/image-5-5.jpg); order:2;">
        
                </div>
            </div>

            <div class="row wrapper-service">
                <div class="col-md-6 col-12 contnt" style="order: 2;">
                    <h1 class="section-title">Evénementiel</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent.
        
                        elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque.</p>
        
                    <a class="btn btn-primary long-btn">Contactez-nous</a>
                </div>
                <div class="col-md-6 col-12 empty" style="background-image: url(http://doctaroo.fr/sites/ievents/wp-content/uploads/2021/04/image-6.jpg); order: 1;">
        
                </div>
            </div>

            <div class="row wrapper-service">
                <div class="col-md-6 col-12 contnt"style="order: 2;">
                    <h1 class="section-title">Expositions</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent.
        
                        elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque.</p>
        
                    <a class="btn btn-primary long-btn">Contactez-nous</a>
                </div>
                <div class="col-md-6 col-12 empty" style="background-image: url(http://doctaroo.fr/sites/ievents/wp-content/uploads/2021/04/Rectangle-11-3.jpg); order:2;">
        
                </div>
            </div>
        </div>
        <div class="container section">
    <div class="row container columned">
        <div><p class="sm-title">Nos Équipes</p><div class="sm-title-dash"></div></div><div><br/>
        <h1 class="section-title">
            Notre personnel est formé en continu
        </h1></div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12 content">
            <p>Nos techniciens resteront à votre écoute et s’adapteront à vos besoins. Ils vous proposeront toutes les solutions artistiques et techniques adaptées à vos envies et à vos budgets.</p>
            <ul class="service-list">
                <li><p>Formation travail en hauteur</p></li>

                <li><p>Habilitation électrique</p></li>
                    
                <li><p>Accroche et levage</p></li>    
                    
                <li><p>CACES</p></li>
                    
                <li><p>Eco conduite</p></li>
                   
            </ul>

        </div>
        <div class="col-md-6 col-12 sm-empty" style="background-image: url(http://localhost/wordpress/wp-content/uploads/2021/04/Rectangle-17.jpg);">     
        </div>
    </div>
    <div class="section">
        <div class="row container"><h1>Location de matériel</h1></div>
        <div class="row container">
            <div class="col-md-6 no-pd">
                <p>Vous disposez de votre personnel, vous avez un besoin de matériel pour une opération temporaire ou pour une manifestation plus longue ?

                    I-EVENTS vous propose à la location de nombreuses références à partir d’une journée et plus. Vous trouverez sur notre site notre catalogue, n’hésitez pas à utiliser notre formulaire de contact pour un devis ou une référence non disponible sur le site.
                    
                    Nous étudierons votre demande avec le plus grand soin pour répondre à vos attentes.
                    </p>
            </div>
            <div class="col-md-6 custom-categories">
                <div class="row">
                    <div class="col-md-4">
                        <h1>Sonorisation</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                    </div>
                    <div class="col-md-4">
                        <h1>Éclairage</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                    </div>
                    <div class="col-md-4">
                        <h1>Énergie</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                    </div>
                    <div class="col-md-4">
                        <h1>Structure</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                    </div>
                    <div class="col-md-4">
                        <h1>Vidéo</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="centered"><a class="btn btn-primary long-btn" href="http://doctaroo.fr/sites/ievents/catalogue/catalogue/">Voir notre catalogue</a></div>
    </div>
   </div>
    <div class="container"></div>

				</main><!-- #main -->

			</div><!-- #primary -->




<?php get_template_part( 'sidebar-templates/sidebar', 'prefooter' ); ?>
<?php 
	get_footer();
?>