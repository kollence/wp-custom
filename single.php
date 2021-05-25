<?php
get_header();
?>
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : ?>
                        <?php
                        the_post();
                        
                        get_template_part('template-parts/content', 'article');
                        
                        ?>
                            
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
<?php
get_footer();
?>