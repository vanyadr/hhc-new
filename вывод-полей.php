<?php the_field('ключ-поля') ?>
<?php get_field('ключ-поля') ?>


<ul>
  <?php
  if (have_rows('ключ-повторителя')) {
    while (have_rows('ключ-повторителя')) : the_row(); ?>

      <li>
        <?php the_sub_field('ключ-внутреннего-поля'); ?>
      </li>
 
  <?php
    endwhile;
  }
  ?>
</ul>

<!-- Подсказка для быстрой замены
  
-->