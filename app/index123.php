<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="images/favicon/icon.ico">
    <link rel="mask-icon" href="images/favicon/icon.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#1e0b0b">
    <title>helloween | B&amp;U</title>
    <link rel="stylesheet" href="css/style.min.css">
  </head>
  <body>
    <div class="body">
      <ul class="backgrounds">
        
        <li> 
          <picture>
            <source srcset="images/main-bg/lend1-576.webp 576w, images/main-bg/lend1.webp"><img class="backgrounds__img backgrounds__img--1" src="images/main-bg/lend1.jpg" alt="">
          </picture>
        </li>
        
        <li> 
          <picture>
            <source srcset="images/main-bg/down2-576.webp 576w, images/main-bg/down2.webp"><img class="backgrounds__img backgrounds__img--2" src="images/main-bg/down2.png" alt="">
          </picture>
        </li>
        
        <li> 
          <picture>
            <source srcset="images/main-bg/mouses-mobile-576.webp 576w, images/main-bg/mouses3.webp"><img class="backgrounds__img backgrounds__img--3" src="images/main-bg/mouses3.png" alt="">
          </picture>
        </li>
        
        <li> 
          <picture>
            <source srcset="images/main-bg/moon4.png" media="(max-width: 576px)"><img class="backgrounds__img backgrounds__img--4" src="images/main-bg/moon4.png" alt="">
          </picture>
        </li>
        
        <li> 
          <picture>
            <source srcset="images/main-bg/pumpkin5.png" media="(max-width: 576px)"><img class="backgrounds__img backgrounds__img--5 animShowPumpkin" src="images/main-bg/pumpkin5.png" alt="">
          </picture>
        </li>
        
        <li> 
          <picture>
            <source srcset="images/main-bg/wing6.png"><img class="backgrounds__img backgrounds__img--6" src="images/main-bg/wing6.png" alt="">
          </picture>
        </li>
        <li> 
          <div class="lightning flashit"></div>
        </li>
      </ul>
      <header class="header">
        <div class="container">
          <div class="header__inner">
            <div class="header__left">
              <div class="logo"> <a href="#">
                  <picture>
                    <source srcset="images/mobile-logo.svg" media="(max-width: 576px)"><img src="images/desktop-logo.svg" alt="">
                  </picture></a>
                <div class="logo__slogan"> 
                  <p class="logo__text min-font">partners</p>
                </div>
                <div class="logo__hand"> 
                  <svg class="logo__hand-icon">
                    <use xlink:href="images/sprite.svg#icon-hand"></use>
                  </svg>
                </div>
              </div>
            </div>
            <ul class="socials">
              <li class="socials__item"> <a class="socials__link" href="https://www.facebook.com/betandyouinfo" target="_blank">
                  <svg class="socials__icon"> 
                    <use xlink:href="images/sprite.svg#icon-fb"></use>
                  </svg></a></li>
              <li class="socials__item"> <a class="socials__link" href="https://www.instagram.com/_betandyou_" target="_blank">
                  <svg class="socials__icon"> 
                    <use xlink:href="images/sprite.svg#icon-instagramm"></use>
                  </svg></a></li>
              <li class="socials__item"> <a class="socials__link" href="https://t.me/betandyouofficial" target="_blank">
                  <svg class="socials__icon"> 
                    <use xlink:href="images/sprite.svg#icon-telegramm"></use>
                  </svg></a></li>
            </ul>
            <div class="header__box">
              <div class="langCheck">
                <div class="langCheck__wrapper">
                                <label class="langCheck__item langCheck__item-en selected" for="">
                                  <div class="icon icon-en"></div><span class="langContext">en</span>
                                  <input type="checkbox" id="" name=""><span class="arrow"></span>
                                </label>
                                <label class="langCheck__item langCheck__item-en active" for="en">
                                  <div class="icon icon-en"></div><span class="langContext">en</span>
                                  <input type="checkbox" id="en" name="en">
                                </label>
                                <label class="langCheck__item langCheck__item-pt " for="pt">
                                  <div class="icon icon-pt"></div><span class="langContext">pt</span>
                                  <input type="checkbox" id="pt" name="pt">
                                </label>
                                <label class="langCheck__item langCheck__item-ru " for="ru">
                                  <div class="icon icon-ru"></div><span class="langContext">ru</span>
                                  <input type="checkbox" id="ru" name="ru">
                                </label>
                                <label class="langCheck__item langCheck__item-tr " for="tr">
                                  <div class="icon icon-tr"></div><span class="langContext">tr</span>
                                  <input type="checkbox" id="tr" name="tr">
                                </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="wrapper">
        <main class="main">
          <section class="page">
            <div class="container"> 
              <div class="page__inner"> 
                <div class="page__content"> 
                  <div class="page__images">
                    <div class="page__image page__image--pumpkin"> <img class="page__img animShowPumpkin" src="images/main-bg/pumpkin5.png" alt="pumpkin"></div>
                    <div class="page__image page__image--moon"> <img class="page__img" src="images/main-bg/moon4.png" alt="moon"></div>
                  </div>
                  <div class="page__bonus">
                    <p class="page__text">
                      Entre no esp??rito de Halloween com a <span> Betandyou!</span> 
                       
                    </p>
                    <p class="page__text">e receba um  </p>
                    <h1 class="page__call">b??nus de 200%</h1>
                    <p class="page__text">quando fizer um dep??sito! </p>
                  </div>
                  <div class="btn-boxtop">
                    <?php echo 
                      '<a class="btn-boxtop__new" id="getTop" href="https://betandyou.com/registration/" target="_blank">receber bonus</a>'
                    ?>
                    <p class="btn-boxtop__rules" id="rulesTop" data-modal="popup-modal">Termos e Condi????es</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
        <footer class="footer"> 
          <div class="container"> 
            <div class="footer__inner">abc</div>
          </div>
        </footer>
      </div>
      <div class="popup modal" id="popup-modal">
        <div class="popup__wrapper">
          <div class="popup__close"> <span class="popup__close-btn"></span></div>
          <div class="popup__content"> 
            <h2 class="popup__name">Termos e Condi????es</h2>
            <p class="popup__date"> 
              <time class="pupup__time" datetime="2021-10-01T00:01"></time>
            </p>
            <div class="popup__frame"> 
              <ul class="popup__rules">
                <li class="popup__rule"> 
                  <p>1. Para celebrar o Halloween, vamos oferecer-lhe um b??nus de 200% quando fizer um dep??sito de, pelo menos, 10 EUR entre as 00:00 e as 23:59 do dia 31.10.2021. O b??nus m??ximo que pode receber ?? equivalente a 200% do valor do seu dep??sito, mas n??o poder?? exceder os 100 EUR. Cada cliente ter?? direito a receber 1 ??nico b??nus.</p>
                </li>
                <li class="popup__rule"> 
                  <p>2. O b??nus s?? pode ser atribu??do se n??o existirem outras ofertas de b??nus ativas na sua conta. </p>
                </li>
                <li class="popup__rule"> 
                  <p>3. Os clientes que receberem este b??nus n??o podem receber ou utilizar quaisquer outros b??nus para o mesmo dep??sito. </p>
                </li>
                <li class="popup__rule"> 
                  <p>4. A caixa &quot;Participar em ofertas de b??nus&quot; em A Minha Conta tem de estar assinalada. </p>
                </li>
                <li class="popup__rule"> 
                  <p>5. O b??nus ser?? automaticamente creditado logo que tenha feito um dep??sito, desde que o seu perfil pessoal em A Minha Conta se encontre preenchido na ??ntegra.</p>
                </li>
                <li class="popup__rule"> 
                  <p>6. O b??nus s?? pode ser apostado em eventos desportivos.</p>
                </li>
                <li class="popup__rule"> 
                  <p>7. Para que o b??nus seja creditado, n??o ?? permitido fazer nenhum levantamento antes de fazer um dep??sito. </p>
                </li>
                <li class="popup__rule"> 
                  <p>8. Para desbloquear o b??nus, deve apostar tr??s vezes o valor do b??nus em apostas de acumulador no prazo de 24 horas ap??s receber o b??nus, caso contr??rio o mesmo ser?? considerado nulo. Cada aposta de acumulador tem de conter, pelo menos, cinco sele????es. Tr??s das sele????es dentro da aposta de acumulador t??m de ter odds de 1.70 ou superiores.</p>
                </li>
                <li class="popup__rule"> 
                  <p>9. O b??nus pode ser apostado em eventos pr??-jogo e ao vivo (as apostas de sistema n??o s??o eleg??veis). Apostas resolvidas com odds de 1.0 n??o contribuem para o requisito de apostas do b??nus. </p>
                </li>
                <li class="popup__rule"> 
                  <p>10. O b??nus ?? considerado como tendo sido apostado apenas depois de terem sido resolvidas todas as apostas para o valor especificado. </p>
                </li>
                <li class="popup__rule"> 
                  <p>11. Uma vez desbloqueado o b??nus, ser??o creditados na sua contra principal os fundos remanescentes do b??nus, os quais n??o podem exceder o valor inicial do b??nus. Se, depois de desbloqueado, o seu saldo da conta de b??nus for inferior ao valor de aposta m??nimo, ent??o o b??nus ?? considerado perdido.</p>
                </li>
                <li class="popup__rule"> 
                  <p>12. N??o podem ser feitos levantamentos antes de todas as condi????es da oferta terem sido cumpridas.</p>
                </li>
                <li class="popup__rule"> 
                  <p>13. O requisito de b??nus tem de ser completado na ??ntegra antes de poder levantar todos os fundos da sua conta, caso contr??rio, quaisquer b??nus ou ganhos posteriores ser??o anulados.</p>
                </li>
                <li class="popup__rule"> 
                  <p>14. Esta promo????o n??o ?? v??lida em conjunto com outras promo????es.</p>
                </li>
                <li class="popup__rule"> 
                  <p>15. Se for detetada qualquer tentativa de abuso desta promo????o pela utiliza????o de v??rias contas, o b??nus ser?? removido de todas as contas suspeitas.</p>
                </li>
                <li class="popup__rule"> 
                  <p>16. Em caso de qualquer disputa, as decis??es tomadas pela Betandyou s??o finais e vinculativas.</p>
                </li>
                <li class="popup__rule"> 
                  <p>17. Os termos e condi????es da Betandyou aplicam-se a todos os b??nus.</p>
                </li>
                <li class="popup__rule"> 
                  <p>18. Apenas s??o eleg??veis para esta oferta clientes ativos que fazem transa????es di??rias atrav??s das suas contas.</p>
                </li>
                <li class="popup__rule"> 
                  <p>19. Esta oferta s?? est?? dispon??vel para clientes com os detalhes da conta totalmente preenchidos.</p>
                </li>
                <li class="popup__rule"> 
                  <p>20. Est??o desativados todos os tipos de b??nus para criptomoedas, sem exce????es.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/main.min.js"></script>


    <?php 
        
            $currentURL = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $parsedURL = parse_url( $currentURL );
            $current_query = $parsedURL['query'];
    
            if ( !empty( $current_query ) ) { ?>
    
            <script>

      $(document).ready(function () {

        var PARAM_NAME = '?no_fast_reg=0&<?php echo $current_query ?>';

        if (PARAM_NAME) {
          $("a.btn-boxtop__new").each(function () {
            $(this).attr("href", $(this).attr("href") + PARAM_NAME);
          });
        }
      });

    </script> 
    <?php } ?>
  </body>
</html>