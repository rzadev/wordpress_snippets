<!-- Buat folder namanya: template-parts -->
<!-- Buat file namanya: content-{nama file}.php -->
<!-- Contoh: content-single.php -->


<!-- Tulis kode di single.php -->
  <div class="col-md-8">
    <?php if(have_posts()):?>
    <?php while(have_posts()): the_post(); ?>
        <!-- Print template part -->
        <?php get_template_part('template-parts/content', 'single'); ?>
