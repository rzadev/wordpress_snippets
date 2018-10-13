      <h1 class="page-banner__title"><?php if(is_category()) {
        single_cat_title();
      }
      if(is_author()) {
        echo 'Posts by '; the_author();
      } ?> </h1>