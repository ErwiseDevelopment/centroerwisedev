<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mb-5">

                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-dark-blue mb-0 pb-2">
                    <span class="u-font-size-15 xxl:u-font-size-22 u-font-weight-regular u-font-family-lato u-color-dark-blue">Fique informado!</span> <br>
                    Últimas Notícias
                </h2>
            </div>

            <div class="col-12">

                <div class="row">
                        
                    <!-- loop -->
                    <?php
                        $link_pattern = get_field( 'link_padrao_portal', 'option' );
                        $post_link = $link_pattern . get_field( 'link_noticia', 'option' );
                        $request_posts = wp_remote_get( $post_link );

                        if(!is_wp_error( $request_posts )) :
                            $body = wp_remote_retrieve_body( $request_posts );
                            $data = json_decode( $body );

                            if(!is_wp_error( $data )) :
                                foreach( $data as $rest_post ) :
                    ?>
                                    <div class="col-md-4">

                                        <a 
                                        class="card border-0 text-decoration-none"
                                        href="#">

                                            <div class="card-img">
                                                <!-- <img
                                                class="l-special-content__thumbnail img-fluid w-100 u-object-fit-cover"
                                                src="https://copiosa.erwisedev-hml.com.br/wp-content/uploads/2022/07/verocohen-1636747305484-cathopic-1.jpg"
                                                alt=""> -->

                                                <img
                                                class="l-special-content__thumbnail img-fluid w-100 u-object-fit-cover"
                                                src="<?php echo $rest_post->featured_image_src; ?>"
                                                alt="<?php echo $rest_post->title->rendered; ?>">

                                                <!--
                                                    $alt_title = get_the_title();

                                                    the_post_thumbnail( 'post-thubmnail',
                                                        array(
                                                            'class' => 'l-special-content__thumbnail img-fluid w-100 u-object-fit-cover',
                                                            'alt'   => $alt_title
                                                        ));
                                                -->
                                            </div>

                                            <div class="card-body">
                                                
                                                <p class="u-font-size-14 u-font-weight-semibold u-color-folk-cyan-blue mb-0">
                                                    <!-- 31 de maio de 2021   -->
                                                    <?php 
                                                        $data = $rest_post->post_date;
                                                        list($data_day, $data_month, $data_year) = explode("/", $data);
                                                        $data_long_month = get_date_format( $data_month );

                                                        echo $data_day . ' de ' . $data_long_month . ' de ' . $data_year;  
                                                    ?>
                                                </p>

                                                <h4 class="u-font-size-18 xxl:u-font-size-20 u-font-weight-bold u-color-folk-dark-grayish-navy">
                                                    <!-- Celebração dos 9 anos do 
                                                    Centro Âncora com Dom 
                                                    José Antônio Peruzzo -->
                                                    <?php echo $rest_post->title->rendered; ?>
                                                </h4>

                                                <p class="u-font-size-13 xxl:u-font-size-16 u-font-weight-regular u-color-folk-aluminium">
                                                    <!-- No último dia 28 de Maio tivemos a alegria
                                                    de receber em nossa casa Dom José Antônio 
                                                    Peruzzo para celebrarmos os 9 anos de  [...] -->
                                                    <?php echo $rest_post->post_excerpt; ?>
                                                </p>

                                                <div class="row">

                                                    <div class="col-6 mt-3">

                                                        <p
                                                        class="w-100 u-box-shadow-pattern u-font-size-12 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-dark-blue hover:u-bg-folk-golden py-2">
                                                            Ler mais
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>  
                                    </div>
                    <?php
                                endforeach;
                            endif;
                        endif;
                    ?>
                    <!-- end loop -->
                </div>
            </div>

            <div class="col-12">

                <div class="row justify-content-center">

                    <div class="col-8 col-md-3 mt-5">

                        <a
                        class="w-100 u-box-shadow-pattern d-flex justify-content-center align-items-center u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-cyan-blue hover:u-bg-folk-golden py-3"
                        href="<?php echo get_home_url( null, 'noticias' ) ?>">
                            Ver mais
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>