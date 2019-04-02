<?php
//
/*

  slider_destacados (field_repeater)

*/
$slider_destacados = get_field('slider_destacados');
?>

<section id="slide" class="">

  <div class="slide-destacados">
      <?php
      if($slider_destacados):
        while(have_rows('slider_destacados')): the_row();
          $imagen = get_sub_field('imagen');
          $texto = get_sub_field('texto');
        ?>
        <div class="slide-destacados-item">
          <img src="<?php echo $imagen; ?>" alt="">
          <p><?php echo $texto; ?></p>
        </div>
        <?php
          endwhile;
        endif;
      ?>
    </div>
</section>
