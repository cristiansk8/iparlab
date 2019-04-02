<?php
//
/*

  slider_home (field_repeater)

*/
$slider_home = get_field('slider_home');
?>

<section id="slider1" class="">

  <div class="slide-home">
      <?php
      if($slider_home):
        while(have_rows('slider_home')): the_row();
          $imagen = get_sub_field('imagen');

        ?>
        <div class="slide-home-item">
          <img src="<?php echo $imagen; ?>" alt="">
        </div>
        <?php
          endwhile;
        endif;
      ?>
    </div>
</section>
