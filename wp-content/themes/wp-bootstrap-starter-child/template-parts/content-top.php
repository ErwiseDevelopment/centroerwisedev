<section class="l-top">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-3 d-flex align-items-center">

                        <a href="#">
                            <img
                            class="img-fluid"
                            src="<?php echo get_home_url( null, '/wp-content/uploads/2022/07/logo-topo.png' ); ?>">
                        </a>
                    </div>

                    <div class="col-9">

                        <ul class="d-flex pl-0 mb-0">
                            <?php for( $i = 0; $i < 5; $i++ ) { ?>
                            <li class="l-top__item u-list-style-none py-3 px-4">
                                <a 
                                class="l-top__link u-font-size-14 u-font-weight-semibold text-decoration-none u-color-folk-white"
                                href="#">
                                    Institucional
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>