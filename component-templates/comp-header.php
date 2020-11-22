<header class="entry-header">
    <div class="container">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <?php 
                if(function_exists('bcn_display')){
                    bcn_display();
                }
            ?>
        </div>
    </div>
</header><!-- .entry-header -->