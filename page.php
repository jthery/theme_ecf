<?php
get_header();
?>

    <!--test-->
    <div class="container-institut">
        <div class="container-img">
            <img src="<?= get_stylesheet_directory_uri(); ?>/img/test-intro-img.jpg" alt="#">
        </div>
        <div class="container-title-1">
            <p>Institut de beauté</p>
            <div class="container-txt">
                <p>Prendre soin de soi !

                    Dans un monde où nous ne trouvons plus le temps de prendre soin de nous, l'institut
                    BeautyByMarine vient nous rappeler qu'il est important de s'accorder une pause. Une
                    pause bien
                    méritée dans nos journées remplies de nos tâches quotidiennes, professionnelles ou
                    encore
                    imprévues. Offrez-vous cette pause, poussez les portes de l'institut pour un instant de
                    relaxation et de bien-être ! L'équipe vous apporte les meilleurs conseils personnalisés
                </p>
            </div>
        </div>
    </div>
    <!--end test-->
    <!--prestations-->
    <div class="place-prestations" id="container-prestations">
        <div class="prestations">
            <div>
                <a href="epilation.html">Epilations</a>
            </div>
        </div>
        <div class="prestations">
            <div>
                <a href="soins-visages.html">Soins visages</a>
            </div>
        </div>
        <div class="prestations">
            <div>
                <a href="soins-corps.html">Soins corps</a>
            </div>
        </div>
    </div>
    <div class="place-prestations-1">
        <div class="prestations">
            <div>
                <a href="onglerie.html">Onglerie</a>
            </div>
        </div>
        <div class="prestations" id="prestations-media">
            <div>
                <a href="maquillage.html">Maquillage</a>
            </div>
        </div>
    </div>
    <!--end prestations-->
    <!--carte cadeau-->
    <!--carte cadeau-->
    <div class="container-cadeau">
        <div class="cadeau">
            <div>
                <img src="http://www.millesimevoyages.be/Pics/cadeaux.png" alt="#" style="height: 350px; width: 100%;">
            </div>
            <div class="p-cadeau">
                <p>Un anniversaire, une fête ou juste l'envie de faire plaisir ?</p>
                <p>Offrez du Bien-être à ceux que vous aimez !</p>
                <div class="lien-cadeau">
                    <a href="#">voir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!--end carte cadeau-->

<?php
get_footer();

