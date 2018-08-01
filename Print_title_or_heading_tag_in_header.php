<div class="page-title">
  <?php if(is_front_page()): ?>
  <?php $description = get_bloginfo('description', 'display'); ?>
  <h1 class="title"><span><?php echo $description; ?></span></h1>
  
  <?php else: ?>
  <!-- Print the title -->
  <h1 class="title"><span><?php the_title(); ?></span></h1>

  <?php endif; ?>
</div>