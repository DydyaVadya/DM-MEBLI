<?php get_header(); ?>

    <!-- start page-content -->
    <main class="page-content">

        <?php 
            # Slider on home page
            get_template_part( 'tpl/screen', 1); 

            # Catalog page
            get_template_part( 'tpl/screen', 2); 

            # Catalog page
            get_template_part( 'tpl/screen', 3); 

            # About us
            get_template_part( 'tpl/screen', 4); 

            # About us
            get_template_part( 'tpl/screen', 5); 

            # Обсудить реализацию
            get_template_part( 'tpl/screen', 6); 

            # Отзывы
            get_template_part( 'tpl/screen', 7); 

             # Отзывы
             get_template_part( 'tpl/screen', 8); 

        ?>
        
    </main>
    <!-- end page-content -->
<?php get_footer(); ?>