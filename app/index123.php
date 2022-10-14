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
                      Entre no espírito de Halloween com a <span> Betandyou!</span> 
                       
                    </p>
                    <p class="page__text">e receba um  </p>
                    <h1 class="page__call">bónus de 200%</h1>
                    <p class="page__text">quando fizer um depósito! </p>
                  </div>
                  <div class="btn-boxtop">
                    <?php echo 
                      '<a class="btn-boxtop__new" id="getTop" href="https://betandyou.com/registration/" target="_blank">receber bonus</a>'
                    ?>
                    <p class="btn-boxtop__rules" id="rulesTop" data-modal="popup-modal">Termos e Condições</p>
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
            <h2 class="popup__name">Termos e Condições</h2>
            <p class="popup__date"> 
              <time class="pupup__time" datetime="2021-10-01T00:01"></time>
            </p>
            <div class="popup__frame"> 
              <ul class="popup__rules">
                <li class="popup__rule"> 
                  <p>1. Para celebrar o Halloween, vamos oferecer-lhe um bónus de 200% quando fizer um depósito de, pelo menos, 10 EUR entre as 00:00 e as 23:59 do dia 31.10.2021. O bónus máximo que pode receber é equivalente a 200% do valor do seu depósito, mas não poderá exceder os 100 EUR. Cada cliente terá direito a receber 1 único bónus.</p>
                </li>
                <li class="popup__rule"> 
                  <p>2. O bónus só pode ser atribuído se não existirem outras ofertas de bónus ativas na sua conta. </p>
                </li>
                <li class="popup__rule"> 
                  <p>3. Os clientes que receberem este bónus não podem receber ou utilizar quaisquer outros bónus para o mesmo depósito. </p>
                </li>
                <li class="popup__rule"> 
                  <p>4. A caixa &quot;Participar em ofertas de bónus&quot; em A Minha Conta tem de estar assinalada. </p>
                </li>
                <li class="popup__rule"> 
                  <p>5. O bónus será automaticamente creditado logo que tenha feito um depósito, desde que o seu perfil pessoal em A Minha Conta se encontre preenchido na íntegra.</p>
                </li>
                <li class="popup__rule"> 
                  <p>6. O bónus só pode ser apostado em eventos desportivos.</p>
                </li>
                <li class="popup__rule"> 
                  <p>7. Para que o bónus seja creditado, não é permitido fazer nenhum levantamento antes de fazer um depósito. </p>
                </li>
                <li class="popup__rule"> 
                  <p>8. Para desbloquear o bónus, deve apostar três vezes o valor do bónus em apostas de acumulador no prazo de 24 horas após receber o bónus, caso contrário o mesmo será considerado nulo. Cada aposta de acumulador tem de conter, pelo menos, cinco seleções. Três das seleções dentro da aposta de acumulador têm de ter odds de 1.70 ou superiores.</p>
                </li>
                <li class="popup__rule"> 
                  <p>9. O bónus pode ser apostado em eventos pré-jogo e ao vivo (as apostas de sistema não são elegíveis). Apostas resolvidas com odds de 1.0 não contribuem para o requisito de apostas do bónus. </p>
                </li>
                <li class="popup__rule"> 
                  <p>10. O bónus é considerado como tendo sido apostado apenas depois de terem sido resolvidas todas as apostas para o valor especificado. </p>
                </li>
                <li class="popup__rule"> 
                  <p>11. Uma vez desbloqueado o bónus, serão creditados na sua contra principal os fundos remanescentes do bónus, os quais não podem exceder o valor inicial do bónus. Se, depois de desbloqueado, o seu saldo da conta de bónus for inferior ao valor de aposta mínimo, então o bónus é considerado perdido.</p>
                </li>
                <li class="popup__rule"> 
                  <p>12. Não podem ser feitos levantamentos antes de todas as condições da oferta terem sido cumpridas.</p>
                </li>
                <li class="popup__rule"> 
                  <p>13. O requisito de bónus tem de ser completado na íntegra antes de poder levantar todos os fundos da sua conta, caso contrário, quaisquer bónus ou ganhos posteriores serão anulados.</p>
                </li>
                <li class="popup__rule"> 
                  <p>14. Esta promoção não é válida em conjunto com outras promoções.</p>
                </li>
                <li class="popup__rule"> 
                  <p>15. Se for detetada qualquer tentativa de abuso desta promoção pela utilização de várias contas, o bónus será removido de todas as contas suspeitas.</p>
                </li>
                <li class="popup__rule"> 
                  <p>16. Em caso de qualquer disputa, as decisões tomadas pela Betandyou são finais e vinculativas.</p>
                </li>
                <li class="popup__rule"> 
                  <p>17. Os termos e condições da Betandyou aplicam-se a todos os bónus.</p>
                </li>
                <li class="popup__rule"> 
                  <p>18. Apenas são elegíveis para esta oferta clientes ativos que fazem transações diárias através das suas contas.</p>
                </li>
                <li class="popup__rule"> 
                  <p>19. Esta oferta só está disponível para clientes com os detalhes da conta totalmente preenchidos.</p>
                </li>
                <li class="popup__rule"> 
                  <p>20. Estão desativados todos os tipos de bónus para criptomoedas, sem exceções.</p>
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