<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PaintResident
 */

get_header();
?>
<!-- main -->
	


    <section class="about " id="about">


        <div class="about__slider">
            <div class="about__slider__in">
                <div class="about__slide "><img class="about__img" data-lazy="img/about/car.jpg" alt="">
                    <div class="about__slide__text">
                        <p>Мы предлагаем покраску автомобилей и их элементов, детальную полировку. Полировку фар, покрытие защитой.
                        </p>
                    </div>
                </div>

                <div class="about__slide "><img class="about__img" data-lazy="img/about/1.jpg" alt="">
                    <div class="about__slide__text">
                        <p>Идеальное качество при доступной цене!</p>
                    </div>
                </div>
                <div class="about__slide "><img class="about__img" data-lazy="img/about/team.jpg" alt="">
                    <div class="about__slide__text">
                        <p>Наши профессионалы любят свою работу.</p>
                    </div>
                </div>
                <div class="about__slide "><img class="about__img" data-lazy="img/about/2.jpg" alt="">
                    <div class="about__slide__text">
                        <p>Так же проводим капремонт двигателей ВАЗ </p>
                    </div>
                </div>



            </div>
        </div>


        <h1 class="h1 first__title">О нас</h1>


        <div class="about__form contact-form m-hide " id="contact-form_2" data-tema="Хочу рассчёт">



            <input type="text" name="name" placeholder="Имя" class="form__name contact-form__input_name ">
            <input name="tel" type="tel" placeholder="Номер телефона" class="form__phone contact-form__input_tel">
            <button class="button contact-form__button" onclick="SimpleMailer(this);">Записаться</button>










    </section>
    
    <section class="gallery" id="gallery">
    <h1 class="h1 first__title">Галерея</h1>
    
    
    <?
global $type_client;
$type_client = preg_match("/(iphone|android|operamobi|blackberry)/i",$_SERVER['HTTP_USER_AGENT']);
?>

<? if ($type_client != 1) {?>

    <?php
  if (isset($_GET['width'])) {
    $width = $_GET['width'];
    if ($width <= 480) { //mobile devices
      $short_code = '[singlepic id=1 ]';
    } elseif ($width <= 720){ //tablets
      $short_code = '[nggallery id=1  images=3]';
    }elseif ($width <= 1420){ //desktops
        $short_code = '[nggallery id=1  images=4]';
      }
     else { //desktops big
      $short_code = '[nggallery id=1  images=5]';
    } ?>
    <div class="gallery__box ">  
    
    <? echo do_shortcode($short_code); ?>
    
    </div> <?
  } else { ?>
      
      <div class="gallery__box m-hide">    
    
    <?php echo do_shortcode( '[nggallery id=1  images=4]' ) ?>
    </div>
    
    <div class="gallery__box m-show">
        
    
    <?php echo do_shortcode( '[nggallery id=1  images=1]' ) ?>
    </div>
 <? }
?>


<?}else{?>
    <div class="gallery__box ">  
    
    <? echo do_shortcode('[nggallery id=1  images=1]'); ?>
    
    </div>


<?}?>
    
    
  
    
    

    </section>


    <section class="adress" id="adress">

        <div class="adress__frame">
                <div class="adress__frame__in">
                    
                    <div class="adress__frame__map m-hide">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A91ce3989db1c2984b1b8884d761fcf470f09f3879d3bb826336b2f102fc69132&amp;width=578&amp;height=400&amp;lang=ru_RU&amp;scroll=true">
                        </script>
                    </div>
                
                    <div class="adress__frame__text"> 
                        <div>Мы находимся по адресу:</div>
                        <p> <? the_field(contact_adress);?></p>
                        <div>Телефон:</div>
                        <p> <? the_field(contact_phone);?></p>
                        <? if (the_field(contact_email)):?>
                        
                        <div>Электронная почта:</div>
                        <p> <? the_field(contact_email);?></p>
                        <? endif; ?>
                    </div> 
                    
                </div>
                
          
        </div>




    </section>
		
<!-- #main -->

<?php

get_footer();
