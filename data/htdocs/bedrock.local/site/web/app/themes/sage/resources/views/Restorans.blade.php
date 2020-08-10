 <section class="food">
            <div class="container">
                <h1 class="food__title">Рестораны</h1>

               <div class="food__container">
         <?php
          $args=array(
         'numberposts'=>5,
         'post_type'=>'restoran',
         'suppress_filters'=>true,
         );
         $posts=get_posts($args);
         foreach($posts as $post){

         setup_postdata($post);
?>
         <?php the_title();?>
<?php
         }


         wp_reset_postdata();
         ?>

                    <div class="food__container_elem">

                        <img src="<?php echo get_template_directory_uri() ?> /assets/images/Rectangle 2.png" alt="">
                        <h2> Soul in the Bowl </h2>
                        <div class="food__text">
                            <p>Американская</p>
                            <p> &#149 Тайская</p>
                        </div>
                    </div>


                    <div class="food__container_elem">
                        <img src="<?php echo get_template_directory_uri() ?> /assets/images/Rectangle 3.png" alt="">
                        <h2>Falafel Bro</h2>
                        <div class="food__text">
                            <p>Вегатерианская</p>
                            <p> &#149 Шаверма</p>
                            <p> &#149 Сэндвич</p>
                        </div>
                    </div>

                    <div class="food__container_elem">
                        <img src="<?php echo get_template_directory_uri() ?> /assets/images/Rectangle 2.1.png" alt="">
                        <h2>Варламов Есть</h2>
                        <div class="food__text">
                            <p>Вегатерианская</p>
                            <p> &#149 Шаверма</p>
                            <p> &#149 Сэндвич</p>
                        </div>
                    </div>

                    <div class="food__container_elem">
                        <img src="<?php echo get_template_directory_uri() ?> /assets/images/Rectangle 4.png" alt="">
                        <h2>Tacodor</h2>
                        <div class="food__text">
                            <p>Американская</p>
                            <p> &#149 Тайская</p>
                        </div>
                    </div>

                    <div class="food__container_elem">
                        <img src="<?php echo get_template_directory_uri() ?> /assets/images/Rectangle5.png" alt="">
                        <h2>Prime </h2>
                        <div class="food__text">
                            <p>Вегатерианская</p>
                            <p> &#149 Шаверма</p>
                            <p> &#149 Сэндвич</p>
                        </div>
                    </div>

                    <div class="food__container_elem">
                        <img src="<?php echo get_template_directory_uri() ?> /assets/images/Rectangle 6.png" alt="">
                        <h2>Город-Сад</h2>
                        <div class="food__text">
                            <p>Вегатерианская</p>
                            <p> &#149 Шаверма</p>
                            <p> &#149 Сэндвич</p>
                        </div>
                    </div>

                    <div class="food__container_elem">
                        <img src="<?php echo get_template_directory_uri() ?> /assets/images/Rectangle 6.jpg" alt="">
                        <h2>Ostrovsky lounge&bar</h2>
                        <div class="food__text">
                            <p>Американская</p>
                            <p> &#149Тайская</p>
                        </div>
                    </div>
                </div>
            </div>
             <hr color="#f2f2f2" size='3px'>
        </section>


