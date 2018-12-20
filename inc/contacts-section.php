<section class="section-contacts">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-8">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <h2>Свяжитесь с нами</h2>
                    </div>
                    <div class="col-md">
                        <div class="contact-info">
                            <?php
                                $post = get_page_by_path( 'futer', OBJECT, 'apf-theme-options' );
                                $post_id = $post->ID;
                            ?>
                            <div class="d-flex align-items-center pb-3">
                                <svg class="icon icon-marker"><use xlink:href="#icon-marker"></use></svg>
                                <?php if (get_field('contacts-text1', $post_id)){ ?>
                                    <?php the_field('contacts-text1', $post_id); ?>
                                <?php } ?>
                            </div>
                            <div class="d-flex align-items-center pb-3">
                                <svg class="icon icon-phone-light"><use xlink:href="#icon-phone-light"></use></svg>
                                <?php if (get_field('contacts-text2', $post_id)){ ?>
                                    <?php the_field('contacts-text2', $post_id); ?>
                                <?php } ?>
                            </div>
                            <div class="d-flex align-items-center pb-3">
                                <svg class="icon icon-mail"><use xlink:href="#icon-mail"></use></svg>
                                <?php if (get_field('contacts-text3', $post_id)){ ?>
                                    <?php the_field('contacts-text3', $post_id); ?>
                                <?php } ?>
                            </div>
                            <div class="d-flex align-items-center">
                                <svg class="icon icon-fax"><use xlink:href="#icon-fax"></use></svg>
                                <?php if (get_field('contacts-text4', $post_id)){ ?>
                                    <?php the_field('contacts-text4', $post_id); ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-copy d-none d-lg-flex justify-content-lg-between pt-lg-5">
                    <div>&copy;<?php echo date(Y);?> - ООО «Компания ДЕФИ” . Все права защищены.</div>
                    <div>Разработка: <a href="https://freelancehunt.com/freelancer/Murzak.html" target="_blank">murzak</a></div>
                </div>
            </div>

            <div class="col-md">
                <?php echo do_shortcode('[contact-form-7 id="13" title="Контактная форма"]'); ?>
            </div>

            <div class="col-md-12 row-copy d-lg-none pt-2">
                <div>&copy;<?php echo date(Y);?> - ООО «Компания ДЕФИ” . Все права защищены.</div>
                <div>Разработка: <a href="https://freelancehunt.com/freelancer/Murzak.html" target="_blank">murzak</a></div>
            </div>
        </div>
    </div>
</section>
