  <!--block footer-->
</div><!-- =========close data-animsition -->
  <div itemscope itemtype="http://schema.org/Organization" class="hidden">
    <span itemprop="name" content="ЦЕНТР ОЦЕНКИ"></span>
    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <span itemprop="streetAddress" content="ГЖЕЛЬСКИЙ ПЕР. Д.13А СТР.5">Льва Толстого, 16</span>
      <span itemprop="postalCode" content="105120">
      <span itemprop="addressLocality" content="Москва"></span>
    </div>
    <span itemprop="telephone" content="8(499)391-84-10"></span>
    <span itemprop="email" content="3918410@BK.RU"></span>
  </div>
  <div class="footer">
    <div class="footer-wraper">
      <div class="footer__nav">
        <div class="main-cont">
          <div class="footer__service">
            <a href="/">Главная</a>
            <a href="/service.php"> Услуги</a>
            <a href="/price.php"> Цены</a>
            <a href="/contact_form.php"> Контакты</a>
          </div>
        </div>
      </div>
      <div class="footer__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.png" alt="Логотип независимая оценка" />
      </div>
      <a href="" class="footer__adress"><?php echo do_shortcode('[cvem_cv name="adres"]'); ?></a>
      <a href="" class="footer__phone"> <?php echo do_shortcode('[cvem_cv name="phone"]'); ?></a>
    </div>
  </div>


  <!--block b-slider-->
  <? include('include/modal.php') ?>
  <!--block b-slider end-->
  
  <!-- fonts -->
  <script type="text/javascript">
    WebFontConfig = {
      google: { families: [ 'Open+Sans:400,700:latin,cyrillic-ext,cyrillic' ] }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })(); </script>
  <!-- fonts -end->
  <!-- Metrics -->
    <!-- google-analytics -->
     <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-43352593-1', 'damage-help.ru');
      ga('send', 'pageview');
    </script>
    <!-- google-analytics -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter22674784 = new Ya.Metrika({id:22674784,
                        webvisor:true,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/22674784" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

  <!-- Metrics end-->

  <!-- Chat -->

<!-- BEGIN JIVOSITE CODE {literal} -->
<style type="text/css">
  .wrap_mW._show_1e{
    bottom: 90px !important;
  }
</style>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'EDLKYRp1Of';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

  
  <!-- Chat end-->

 
  <script src="<?php echo get_template_directory_uri(); ?>/js/combined.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.smoothscroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

 <?php wp_footer(); ?>
   <script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>



 </body>
 
</html>

