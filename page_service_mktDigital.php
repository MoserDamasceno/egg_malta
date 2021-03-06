<?php
    $lHeaderInner = array(
        'extraClass' => '',
        'h1' => 'Marketing Digital',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elras eu diam eget felis mattis posuere sit amet a mectr.');
    include('parts/layout/l-headerInner.php');
?>

<main class="l-page --inner --service" data-aos="fade-up">
    <?php include('parts/layout/l-navSubInner.php');?>
    <section class="s-defaultSection s-service --intro" id="o-que-e">
        <div class="s-defaultSection__head">
            <div class="u-container">
                <h2 class="u-ta-c">O que é</h2>
            </div>
        </div>
        <div class="s-defaultSection__content">
            <div class="u-container">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed sagittis tortor. Ut tempor viverra purus, vel sodales enim feugiat quis. Vivamus vitae bibendum diam. Quisque varius et urna non ornare.</p>
                <p>Vestibulum sem sapien, tempus ut placerat a, ornare quis ligula. Sed condimentum mi ac vulputate cursus. Sed metus dui, aliquet ac viverra eget, posue.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed sagittis tortor. Ut tempor viverra purus, vel sodales enim feugiat quis. Vivamus vitae bibendum diam. Quisque varius et urna non ornare.</p>
            </div>
        </div>
    </section>
    <section class="s-defaultSection s-service --list" id="o-que-oferecemos">
        <div class="s-defaultSection__head">
            <div class="u-container">
                <h2 class="u-ta-c">O que Oferecemos</h2>
            </div>
        </div>
        <div class="s-defaultSection__content">
            <div class="u-container">
                <ul class="c-responsiveGrid --center"
                    data-maxw-breaks="1140, 810"
                    data-maxw-cols="2, 1"
                    data-cols-init="3">
                    <li>
                        <?php
                        $cCardServiceDetails = array(
                            'icon' => 'media/img/icons/contentPackage/003-advertising.png',
                            'title' => 'Atrair Mais clientes',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
                        include('parts/components/c-cardServiceDetails.php');
                        ?>
                    </li>

                    <li>
                        <?php
                        $cCardServiceDetails = array(
                            'icon' => 'media/img/icons/contentPackage/020-laptop.png',
                            'title' => 'Atrair Mais clientes',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
                        include('parts/components/c-cardServiceDetails.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardServiceDetails = array(
                            'icon' => 'media/img/icons/contentPackage/019-language-1.png',
                            'title' => 'Atrair Mais clientes',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
                        include('parts/components/c-cardServiceDetails.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardServiceDetails = array(
                            'icon' => 'media/img/icons/contentPackage/016-eye-contact.png',
                            'title' => 'Atrair Mais clientes',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
                        include('parts/components/c-cardServiceDetails.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardServiceDetails = array(
                            'icon' => 'media/img/icons/contentPackage/010-connectivity.png',
                            'title' => 'Atrair Mais clientes',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
                        include('parts/components/c-cardServiceDetails.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardServiceDetails = array(
                            'icon' => 'media/img/icons/contentPackage/014-call.png',
                            'title' => 'Atrair Mais clientes',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eum excepturi necessitatibus nesciunt nobis pariatur quisquam ratione, reiciendis sapiente tempore!');
                        include('parts/components/c-cardServiceDetails.php');
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="s-defaultSection s-plans" id="planos">
        <div class="s-defaultSection__head">
            <div class="u-container">
                <h2 class="u-ta-c">Planos</h2>
                <p>Lorem ipsum dolor sit cteturat dipiscing elit. Quisqued sagittis ortor viverra rus, vel sodalesim feugiatis lorme ipsum ectur.</p>
            </div>
        </div>
        <div class="s-defaultSection__content">
            <div class="u-container">
                <div class="s-plans__grid">
                    <div class="c-tabPlans">
                        <ul class="c-tabPlans__tab">
                            <li><a href="#6meses" class="is-active">6 meses</a></li>
                            <li><a href="#9meses">9 meses</a></li>
                            <li><a href="#mensal">Mensal</a></li>
                        </ul>
                        <div class="c-tabPlans__swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <ul class="c-tabPlans__list">
                                        <li>
                                            <?php
                                            $cCardPlan = array(
                                                'price' => '860',
                                                'cents' => '59',
                                                'title' => 'Plano Silver',
                                                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing eltiam tempus felis a egestas posed eu libero.');
                                            include('parts/components/c-cardPlan.php');
                                            ?>
                                        </li>
                                        <li>
                                            <?php
                                            $cCardPlan = array(
                                                'price' => '1069',
                                                'cents' => '00',
                                                'title' => 'Plano Gold',
                                                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing eltiam tempus felis a egestas posed eu libero.');
                                            include('parts/components/c-cardPlan.php');
                                            ?>
                                        </li>
                                        <li>
                                            <?php
                                            $cCardPlan = array(
                                                'price' => '1359',
                                                'cents' => '99',
                                                'title' => 'Plano Diamond',
                                                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing eltiam tempus felis a egestas posed eu libero.');
                                            include('parts/components/c-cardPlan.php');
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="swiper-slide">
                                    <ul class="c-tabPlans__list">
                                        <li>
                                            <?php
                                            $cCardPlan = array(
                                                'price' => '860',
                                                'cents' => '59',
                                                'title' => 'Plano Silver',
                                                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing eltiam tempus felis a egestas posed eu libero.');
                                            include('parts/components/c-cardPlan.php');
                                            ?>
                                        </li>
                                        <li>
                                            <?php
                                            $cCardPlan = array(
                                                'price' => '1069',
                                                'cents' => '00',
                                                'title' => 'Plano Gold',
                                                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing eltiam tempus felis a egestas posed eu libero.');
                                            include('parts/components/c-cardPlan.php');
                                            ?>
                                        </li>
                                        <li>
                                            <?php
                                            $cCardPlan = array(
                                                'price' => '1359',
                                                'cents' => '99',
                                                'title' => 'Plano Diamond',
                                                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing eltiam tempus felis a egestas posed eu libero.');
                                            include('parts/components/c-cardPlan.php');
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="swiper-slide">
                                    <ul class="c-tabPlans__list">
                                        <li>
                                            <?php
                                            $cCardPlan = array(
                                                'price' => '860',
                                                'cents' => '59',
                                                'title' => 'Plano Silver',
                                                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing eltiam tempus felis a egestas posed eu libero.');
                                            include('parts/components/c-cardPlan.php');
                                            ?>
                                        </li>
                                        <li>
                                            <?php
                                            $cCardPlan = array(
                                                'price' => '1069',
                                                'cents' => '00',
                                                'title' => 'Plano Gold',
                                                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing eltiam tempus felis a egestas posed eu libero.');
                                            include('parts/components/c-cardPlan.php');
                                            ?>
                                        </li>
                                        <li>
                                            <?php
                                            $cCardPlan = array(
                                                'price' => '1359',
                                                'cents' => '99',
                                                'title' => 'Plano Diamond',
                                                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing eltiam tempus felis a egestas posed eu libero.');
                                            include('parts/components/c-cardPlan.php');
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-plans__support">
                    <a href="#" class="c-whatsappCall">
                        <h4>Precisa de Ajuda?</h4>
                        <div>
                            <i><img src="media/img/icons/social/social_whatsapp.svg" alt="Whatsapp"></i>
                            <span class="caption">48 99999.9999</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="s-defaultSection s-service --faq" id="perguntas-frequentes">
        <div class="s-defaultSection__head">
            <div class="u-container">
                <h2 class="u-ta-c">Perguntas frequentes</h2>
            </div>
        </div>
        <div class="s-defaultSection__content">
            <div class="u-container">
                <ul class="c-responsiveGrid --center"
                    data-maxw-breaks="980"
                    data-maxw-cols="1"
                    data-cols-init="2">
                    <li>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Quanto devo investir inicialmente no Ads?</span>
                            </div>
                            <div class="c-toggleList__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores eum facilis impedit laudantium non, quasi ullam ut voluptatem.</p>
                            </div>
                        </div>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Quanto devo investir inicialmente no Ads?</span>
                            </div>
                            <div class="c-toggleList__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores eum facilis impedit laudantium non, quasi ullam ut voluptatem.</p>
                            </div>
                        </div>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Quanto devo investir inicialmente no Ads?</span>
                            </div>
                            <div class="c-toggleList__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores eum facilis impedit laudantium non, quasi ullam ut voluptatem.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Quanto devo investir inicialmente no Ads?</span>
                            </div>
                            <div class="c-toggleList__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores eum facilis impedit laudantium non, quasi ullam ut voluptatem.</p>
                            </div>
                        </div>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Quanto devo investir inicialmente no Ads?</span>
                            </div>
                            <div class="c-toggleList__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores eum facilis impedit laudantium non, quasi ullam ut voluptatem.</p>
                            </div>
                        </div>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Quanto devo investir inicialmente no Ads?</span>
                            </div>
                            <div class="c-toggleList__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dolores eum facilis impedit laudantium non, quasi ullam ut voluptatem.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
