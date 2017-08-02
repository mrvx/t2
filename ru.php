<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<?php include '../head.php'; ?>


<body class=" cms-page-view cms- cms-">
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

<div class="wrapper">
  <noscript>
  <div class="global-site-notice noscript">
    <div class="notice-inner">
      <p> <strong>JavaScript seems to be disabled in your browser.</strong><br />
        You must have JavaScript enabled in your browser to utilize the functionality of this website. </p>
    </div>
  </div>
  </noscript>
  <header>
    <div class="header-container ">
      <div id="mobile-top">
        <div class="dropdown sections">
          <button class="btn btn-default dropdown-toggle" type="button" id="sections" data-toggle="dropdown">Частный</button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li  class="active"><a href="https://tele2.ee/ru/">Частный</a></li>
            <li ><a href="https://tele2.ee/ettevotja/ru/">Предприниматель</a></li>
            <li ><a href="https://tele2.ee/ru/tugiinfo/liitumine">Помощь</a></li>
            <li ><a href="https://tele2.ee/erilahendused/en">Special solutions</a></li>
            <li class="visible-xs "><a href="https://tele2.ee/ru/kontaktid/esindused">Esindused</a></li>
            <li class="visible-xs "><a href="https://minu.tele2.ee"  >Minu Tele2 </a> </li>
          </ul>
        </div>
        <div class="dropdown sections section-flags">
          <button data-toggle="dropdown" type="button" class="btn btn-default dropdown-toggle">RUS</button>
          <ul role="menu" class="dropdown-menu dropdown-menu-right">
            <li role="presentation"><a href="#" onclick="changeStore('https://tele2.ee/mobiilnerahakott', 'ee')" tabindex="-1" role="menuitem">EST</a></li>
            <li role="presentation"><a href="#" onclick="changeStore('https://tele2.ee/ru/mobiilnerahakott', 'ru')" tabindex="-1" role="menuitem">RUS</a></li>
          </ul>
        </div>
      </div>
      <div class="top-line">
        <div class="container">
          <div class="row menu-container first">
            <div class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header"> <a href="https://tele2.ee/ru/" title="Tele2" class="logo"><strong>Tele2</strong><img src="https://tele2.ee/skin/frontend/tele2/default/images/logo.gif" alt="Tele2" /></a> <a class="bnt-nav" href="#" id="select-store-menu-hamb" data-toggle="collapse" data-target="#navbar-collapse-1" ><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></a> </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1"> </div>
                <span class="arrow"></span>
                <ul class="nav nav-pills right">
                  <li class="hidden-xs "><a href="https://tele2.ee/kontaktai/tele2-salonai">Esindused</a></li>
                  <li class="login hidden-xs "><a id="login-toggle-link"  href="https://minu.tele2.ee"> <span class="glyphicon glyphicon-user"></span><span class="link-text">Minu Tele2</span></a></li>
                </ul>
              </div>
            </div>
            <ul class="nav nav-pills left" id="select-store-menu">
              <li  class="active"><a href="https://tele2.ee/ru/">Частный</a></li>
              <li ><a href="https://tele2.ee/ettevotja/ru/">Предприниматель</a></li>
              <li ><a href="https://tele2.ee/ru/tugiinfo/liitumine">Помощь</a></li>
              <li ><a href="https://tele2.ee/erilahendused/en">Special solutions</a></li>
              <li class="visible-xs "><a href="https://tele2.ee/ru/kontaktid/esindused">Esindused</a></li>
              <li class="visible-xs "><a  href="https://minu.tele2.ee"  >Minu Tele2 </a> </li>
            </ul>
            <span class="arrow"></span>
            <ul class="nav nav-pills right">
              <li class="hidden-xs "><a href="https://tele2.ee/ru/kontaktid/esindused">Esindused</a></li>
              <li class="login hidden-xs "><a id="login-toggle-link"  href="https://minu.tele2.ee/"> <span class="glyphicon glyphicon-user"></span><span class="link-text">Minu Tele2</span></a></li>
              <li class="hidden-xs flag-lg">
                <button data-toggle="dropdown" type="button" class="btn btn-default dropdown-toggle">RUS</button>
                <ul role="menu" class="dropdown-menu">
                  <li role="presentation"><a href="#" onclick="changeStore('https://tele2.ee/mobiilnerahakott', 'ee')" tabindex="-1" role="menuitem">EST</a></li>
                  <li role="presentation"><a href="#" onclick="changeStore('https://tele2.ee/ru/mobiilnerahakott', 'ru')" tabindex="-1" role="menuitem">RUS</a></li>
                </ul>
              </li>
              <script type="text/javascript">


        function changeStore(url, lang) {

            eraseCookie("storeLanguagebase");
            eraseCookie("storeLanguagebusiness");
            if (lang == 'ru') {
                createCookie("storeLanguagebase", 5, 365);
                createCookie("storeLanguagebusiness", 2, 365);
            } else if(lang == 'ee'){
                createCookie("storeLanguagebase", 1, 365);
                createCookie("storeLanguagebusiness", 4, 365);
            }
            window.location.href = url;
        }


    </script>
            </ul>
          </div>
        </div>
      </div>
      <div class="header container">
        <div class="logo-container"> <a href="https://tele2.ee/ru/" title="Tele2" class="logo"><strong>Tele2</strong><img src="https://tele2.ee/skin/frontend/tele2/default/images/logo.gif" alt="Tele2" /></a> </div>
        <div class="row menu-container second">
          <ul class="nav nav-pills">
            <li class="search visible-xs">
              <form id="search_header_form" action="https://tele2.ee/ru/otsing/" method="get">
                <div class="form-search">
                  <label for="search_header">Search for</label>
                  <div class="input_container">
                    <input id="search_header" class="search-field input-text" name="q" value="" maxlength="128" placeholder="Поиск" />
                    <button type="submit" title="Найти" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                  <div id="search_header_autocomplete" class="search-autocomplete"></div>
                  <div class="search-terms clearfix">
                    <div class="search-terms-title">
                      <h2>Popular Search Terms</h2>
                    </div>
                    <ul class="search-tag-list clearfix">
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=Nuti">Nuti</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=2">2</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=pr">pr</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=le">le</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=c">c</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=5">5</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=%D1%80%D0%BE%D1%83%D0%BC%D0%B8%D0%BD%D0%B3">роуминг</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=s+5">s 5</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=s">s</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=mms">mms</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=i">i</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=r">r</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=pl">pl</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=n">n</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=iphone">iphone</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=SIM">SIM</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=g+3">g 3</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=sms">sms</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=%D1%81%D1%87%D0%B5%D1%82">счет</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=4G">4G</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=%D0%BF%D0%BB%D0%B0%D0%BD%D1%88%D0%B5%D1%82">планшет</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=2+sim">2 sim</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=8+lt">8 lt</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=%D0%BD%D0%BE%D0%BC%D0%B5%D1%80">номер</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=sony">sony</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=c+3">c 3</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=ip">ip</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=3g">3g</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=Iphone+6">Iphone 6</a></li>
                      <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=s+3">s 3</a></li>
                    </ul>
                  </div>
                </div>
                <script type="text/javascript">
	        //<![CDATA[
	            var searchForm = new Varien.searchForm('search_header_form', 'search_header', null);
	            searchForm.initAutocomplete('https://tele2.ee/ru/catalogsearch/ajax/suggest/', 'search_header_autocomplete');

	            (function() {
			        var rtime = new Date(1, 1, 2000, 12,00,00);
			        var timeout = false;
			        var delta = 200;
			        var isWinResized = false;
			        var isSearchClicked = false;
			        var isClickedSearch = false;

			        jQuery('#search_header').on('click', function() {

			            var searchClicked = (function() {
			                var clickDuration = 800;
			                return function() {
			                    isClickedSearch = true;
		                        setTimeout(function() {
		                            isClickedSearch = false;
		                        }, clickDuration);
			                }
			            })();
			            searchClicked();
			        });

			        jQuery(window).resize(function() {
			            if (timeout === false && checkAndroidVersion()) {
			                timeout = true;
			                setTimeout(resizeend, delta);
			            }
			        });

			        function resizeend() {
			            if (new Date() - rtime < delta) {
			                setTimeout(resizeend, delta);
			            } else {
			                timeout = false;
			                isWinResized = !isWinResized;

			                if (isWinResized && isClickedSearch) {
			                    jQuery('#search_header').focus();
			                } else {
			                    isWinResized = false;
			                }
			            }
			        }
				
 				function checkAndroidVersion(ua) {
			            ua = (ua || navigator.userAgent).toLowerCase(); 
			            var match = ua.match(/android\s([0-9\.]*)/);
			            var version = match ? match[1] : false;

			            if (version) {
			                return true;
			            }

			        }

			        
			    })();

	        //]]>
	        </script>
              </form>
            </li>
            <li > <a  class="submenu-toggle-link submenu-seadmed"  href="javascript:" onclick="toggleSubmenu('seadmed')" >Магазин</a> </li>
            <li > <a  class="submenu-toggle-link submenu-internet"  href="javascript:" onclick="toggleSubmenu('internet')" >Интернет</a> </li>
            <li > <a  class="submenu-toggle-link submenu-priceplans"  href="javascript:" onclick="toggleSubmenu('priceplans')" >Пакеты услуг</a> </li>
            <li > <a  class="submenu-toggle-link submenu-Teenused"  href="javascript:" onclick="toggleSubmenu('Teenused')" >Услуги</a> </li>
            <li class="last"> <a  class="submenu-toggle-link submenu-Smart"  href="javascript:" onclick="toggleSubmenu('Smart')" >Разговорная карта</a> </li>
            <li class="search hidden-xs"> <a class="submenu-toggle-link submenu-search" href="javascript:" onclick="toggleSubmenu('search')"> <i class="fa fa-search"></i> </a> </li>
          </ul>
        </div>
      </div>
      <div class="submenus-container">
        <div class="submenus container">
          <div class="submenu" id="submenu-seadmed">
            <div class="row">
              <div class="col col-2-1 col-sm-3 col-xs-12"> <a class="menu-with-image" href="https://tele2.ee/pood" title="Tahvelarvutid">
                <div class="menu-img"><img src="https://tele2.ee/media/wysiwyg/ee_menu/pood1.jpg" alt="Mobiiltelefonid" /></div>
                <div class="menu-text">Мобильные телефоны</div>
                </a> </div>
              <div class="col col-2-2 col-sm-3 col-xs-12"> <a class="menu-with-image" href="https://tele2.ee/pood?isformbb=196 "  title="Tahvelarvutid">
                <div class="menu-img"><img src="https://tele2.ee/media/wysiwyg/ee_menu/pood2.jpg" alt="Tahvelarvutid" /></div>
                <div class="menu-text">Планшеты</div>
                </a> </div>
              <div class="col col-2-1 col-sm-3 col-xs-12"> <a class="menu-with-image" href="https://tele2.ee/pood?ismodem=205" title="Modemid ja ruuterid">
                <div class="menu-img"><img src="https://tele2.ee/media/wysiwyg/ee_menu/pood3.png" alt="Modemid ja ruuterid" /></div>
                <div class="menu-text">Модемы и роутеры</div>
                </a> </div>
              <div class="col col-2-2 col-sm-3 col-xs-12"> &nbsp; </div>
            </div>
            <div class="clear"></div>
            <div class="menu-close-link"> <a href="javascript:" class="link-close" onclick="closeSubmenu()"> <span class="link-text">Закрыть > <i class="fa fa-chevron-right"></i></span> </a> </div>
          </div>
          <div class="submenu" id="submenu-internet">
            <div class="row">
              <div class="col col-2-1 col-sm-3 col-xs-12">
                <ul class="nav">
                  <li class="header no-url"><a href="javascript:">4,5G</a></li>
                  <li><a href="https://tele2.ee/ru/internet/4g/tele2-4g">Tele2 4,5G</a></li>
                </ul>
              </div>
              <div class="col col-2-2 col-sm-3 col-xs-12">
                <ul class="nav">
                  <li class="header no-url"><a href="javascript:">Интернет</a></li>
                  <li><a href="https://tele2.ee/ru/internet/internet-seadmes/internet-arvutis">4G интернет в компьютере</a></li>
                  <li><a href="https://tele2.ee/ru/internet/internet-seadmes/internet-mobiilis">4G интернет в мобильном</a></li>
                  <li><a href="https://tele2.ee/ru/internet/internet-seadmes/koduinternet">Koduinternet</a></li>
                  <li><a href="https://tele2.ee/ru/internet/internet-seadmes/ettemaksuga-internet">Интернет с предоплатой</a></li>
                </ul>
              </div>
              <div class="col col-2-1 col-sm-3 col-xs-12">
                <ul class="nav">
                  <li class="header no-url"><a href="javascript:">Интернет за рубежом</a></li>
                  <li><a href="https://tele2.ee/ru/internet/internet-roamingus/internet-valismaal">Интернет за рубежом</a></li>
                  <li><a href="https://tele2.ee/ru/internet/internet-roamingus/surf-paketid">Пакеты «Интернет за рубежом»</a></li>
                  <li><a href="https://tele2.ee/ru/internet/internet-roamingus/andmesidelimiit">Лимит передачи данных</a></li>
                </ul>
              </div>
              <div class="col col-2-2 col-sm-3 col-xs-12">
                <ul class="nav">
                  <li class="header no-url"><a href="javascript:">Дополнительные интернет-услуги</a></li>
                  <li><a href="https://tele2.ee/ru/internet/interneti-teenused/staatiline-ip">Статический IP-адрес</a></li>
                  <li><a href="https://tele2.ee/ru/internet/interneti-teenused/paevapilet">Дневной билет в интернет</a></li>
                  <li><a href="https://tele2.ee/ru/internet/interneti-teenused/interneti-lisamaht">Дополнительный объем интернет-трафика</a></li>
                  <li><a href="https://tele2.ee/ru/internet/interneti-teenused/internetipaketid-mobiilile">Интернет-пакеты в мобильном телефоне</a></li>
                </ul>
              </div>
            </div>
            <div class="clear"></div>
            <div class="menu-close-link"> <a href="javascript:" class="link-close" onclick="closeSubmenu()"> <span class="link-text">Закрыть > <i class="fa fa-chevron-right"></i></span> </a> </div>
          </div>
          <div class="submenu" id="submenu-priceplans">
            <div class="row">
              <div class="col col-2-1 col-sm-3 col-xs-12">
                <ul class="nav">
                  <li class="header no-url"><a href="javascript:">Пакеты услуг</a></li>
                  <li><a href="https://tele2.ee/ru/paketid/multipakett">Пакет «Multi»</a></li>
                  <li><a href="https://tele2.ee/ru/paketid/konepakett">Разговорный пакет</a></li>
                  <li><a href="https://tele2.ee/ru/paketid/lastepakett">Детский пакет </a></li>
                  <li><a href="https://tele2.ee/ru/paketid/seenior">Пакет «Seenior»</a></li>
                </ul>
              </div>
              <div class="col col-2-2 col-sm-9 col-xs-12"> </div>
            </div>
            <div class="clear"></div>
            <div class="menu-close-link"> <a href="javascript:" class="link-close" onclick="closeSubmenu()"> <span class="link-text">Закрыть > <i class="fa fa-chevron-right"></i></span> </a> </div>
          </div>
          <div class="submenu" id="submenu-Teenused">
            <div class="row">
              <div class="col col-2-1 col-sm-3 col-xs-12">
                <ul class="nav">
                  <li class="header no-url"><a href="javascript:">Развлечения</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/meelelahutus/deezer">Deezer</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/meelelahutus/digilehed">Электронная газета «Digileht»</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/meelelahutus/minu-toon">Мой Тон</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/meelelahutus/loto">M-лото</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/meelelahutus/perioodilised-sisuteenused">Периодические контентные услуги</a></li>
                </ul>
              </div>
              <div class="col col-2-2 col-sm-3 col-xs-12">
                <ul class="nav">
                  <li class="header no-url"><a href="javascript:">Услуги по созданию удобств</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/mugavusteenused/tele2-app">Приложение “Tele2 Eesti”</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/mugavusteenused/mobiilnerahakott">Мобильный кошелек</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/mugavusteenused/tagasiost">Услуга выкупа</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/mugavusteenused/m-pilet">ID-билет</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/mugavusteenused/mobiil-id">Mobiil-ID</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/mugavusteenused/m-makse">Мобильный платеж</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/mugavusteenused/parkimine">М-парковка</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/mugavusteenused/virtuaalnumber">Виртуальный номер</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/mugavusteenused/kaspersky-viirusetorje">Kaspersky антивирус</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/mugavusteenused/seadmekindlustus">Страхование устройств</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/mugavusteenused/windows-phone">Платежи Windows Phone</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/mugavusteenused/m2m">M2M</a></li>
                </ul>
              </div>
              <div class="col col-2-1 col-sm-3 col-xs-12">
                <ul class="nav">
                  <li class="header no-url"><a href="javascript:">За рубежом</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/roaming/randlusteenus">Услуга роуминга</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/roaming/reisikindlustus">Туристическое страхование</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/roaming/rahvusvahelised-koned">Из Эстонии за рубеж</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/roaming/piiripilet">Пограничный билет</a></li>
                </ul>
              </div>
              <div class="col col-2-2 col-sm-3 col-xs-12">
                <ul class="nav">
                  <li class="header no-url"><a href="javascript:">Услуги связи</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/koneteenused/suunamine">Переадресация звонков</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/koneteenused/konepost">Автоответчик</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/koneteenused/uritatud-kone-teavitus">Оповещение о пропущенных звонках</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/koneteenused/koneteenusnumbrite-piirang">Ограничение для сервисных номеров разговорных услуг</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/koneteenused/sobranumber">Номер друга</a></li>
                  <li><a href="https://tele2.ee/ru/teenused/koneteenused/hdkoned">Звонки в HD-качестве</a></li>
                </ul>
              </div>
            </div>
            <div class="clear"></div>
            <div class="menu-close-link"> <a href="javascript:" class="link-close" onclick="closeSubmenu()"> <span class="link-text">Закрыть > <i class="fa fa-chevron-right"></i></span> </a> </div>
          </div>
          <div class="submenu" id="submenu-Smart">
            <div class="row">
              <div class="col col-2-1 col-sm-3 col-xs-12">
                <ul class="nav">
                  <li class="header no-url"><a href="javascript:">Разговорная карта </a></li>
                  <li><a href="https://tele2.ee/ru/konekaart/tele2konekaart">Разговорная карта Tele2</a></li>
                  <li><a href="https://tele2.ee/ru/konekaart/smart">Smart</a></li>
                </ul>
              </div>
              <div class="col col-2-2 col-sm-9 col-xs-12"> </div>
            </div>
            <div class="clear"></div>
            <div class="menu-close-link"> <a href="javascript:" class="link-close" onclick="closeSubmenu()"> <span class="link-text">Закрыть > <i class="fa fa-chevron-right"></i></span> </a> </div>
          </div>
          <div class="submenu" id="submenu-search">
            <form id="search_header_form" action="https://tele2.ee/ru/otsing/" method="get">
              <div class="form-search">
                <label for="search_header">Search for</label>
                <div class="input_container">
                  <input id="search_header" class="search-field input-text" name="q" value="" maxlength="128" placeholder="Поиск" />
                  <button type="submit" title="Найти" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
                <div id="search_header_autocomplete" class="search-autocomplete"></div>
                <div class="search-terms clearfix">
                  <div class="search-terms-title">
                    <h2>Popular Search Terms</h2>
                  </div>
                  <ul class="search-tag-list clearfix">
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=Nuti">Nuti</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=2">2</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=pr">pr</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=le">le</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=c">c</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=5">5</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=%D1%80%D0%BE%D1%83%D0%BC%D0%B8%D0%BD%D0%B3">роуминг</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=s+5">s 5</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=s">s</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=mms">mms</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=i">i</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=r">r</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=pl">pl</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=n">n</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=iphone">iphone</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=SIM">SIM</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=g+3">g 3</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=sms">sms</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=%D1%81%D1%87%D0%B5%D1%82">счет</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=4G">4G</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=%D0%BF%D0%BB%D0%B0%D0%BD%D1%88%D0%B5%D1%82">планшет</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=2+sim">2 sim</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=8+lt">8 lt</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=%D0%BD%D0%BE%D0%BC%D0%B5%D1%80">номер</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=sony">sony</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=c+3">c 3</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=ip">ip</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=3g">3g</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=Iphone+6">Iphone 6</a></li>
                    <li><a href="https://tele2.ee/ru/catalogsearch/result/?q=s+3">s 3</a></li>
                  </ul>
                </div>
              </div>
              <script type="text/javascript">
	        //<![CDATA[
	            var searchForm = new Varien.searchForm('search_header_form', 'search_header', null);
	            searchForm.initAutocomplete('https://tele2.ee/ru/catalogsearch/ajax/suggest/', 'search_header_autocomplete');

	            (function() {
			        var rtime = new Date(1, 1, 2000, 12,00,00);
			        var timeout = false;
			        var delta = 200;
			        var isWinResized = false;
			        var isSearchClicked = false;
			        var isClickedSearch = false;

			        jQuery('#search_header').on('click', function() {

			            var searchClicked = (function() {
			                var clickDuration = 800;
			                return function() {
			                    isClickedSearch = true;
		                        setTimeout(function() {
		                            isClickedSearch = false;
		                        }, clickDuration);
			                }
			            })();
			            searchClicked();
			        });

			        jQuery(window).resize(function() {
			            if (timeout === false && checkAndroidVersion()) {
			                timeout = true;
			                setTimeout(resizeend, delta);
			            }
			        });

			        function resizeend() {
			            if (new Date() - rtime < delta) {
			                setTimeout(resizeend, delta);
			            } else {
			                timeout = false;
			                isWinResized = !isWinResized;

			                if (isWinResized && isClickedSearch) {
			                    jQuery('#search_header').focus();
			                } else {
			                    isWinResized = false;
			                }
			            }
			        }
				
 				function checkAndroidVersion(ua) {
			            ua = (ua || navigator.userAgent).toLowerCase(); 
			            var match = ua.match(/android\s([0-9\.]*)/);
			            var version = match ? match[1] : false;

			            if (version) {
			                return true;
			            }

			        }

			        
			    })();

	        //]]>
	        </script>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="login_form top-form">
      <div class="login_form_cnt2">
        <div class="login_close_cnt"></div>
        <form id="mytele2-login-form" method="post" action="https://tele2.ee/ru/sharedsession/index/login/">
          <div class="row first">
            <div class="col-sm-12">
              <h4>
                <label for="mytele2-login-email">My Tele2</label>
              </h4>
            </div>
            <div class="col-sm-12">
              <label for="mytele2-login">Номер телефона</label>
              <div class="phone-no-container">
                <div class="phone-no-prefix"> +370 </div>
                <div class="phone-no-input">
                  <input type="text" name="login" id="mytele2-login" class="form-control"/>
                </div>
              </div>
            </div>
            <div class="col-sm-12 clearfix">
              <label for="mytele2-login-password">Пароль</label>
              <input type="password" name="password" id="mytele2-login-password" class="form-control"/>
            </div>
            <div class="col col-sm-6 col-xs-6 actions"> <a class="pass_forgot" href="https://minu.tele2.ee/">Забыли пароль?</a> </div>
            <div class="col-md-6 col-sm-6">
              <button type="submit" class="btn btn-primary">Войти</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script type="text/javascript">
            jQuery(window).load(function() {
                var hitEvent = 'ontouchstart' in document.documentElement
                        ? 'touchstart'
                        : 'click';
                jQuery('.login_close_cnt').on(hitEvent, function() {
                    jQuery('.login_form').fadeOut('fast');
                    jQuery('.fog').fadeOut('fast', function() {
                        jQuery(this).remove();
                    });
                    jQuery('body').off('.shadow');
                });
            });
</script> 
  </header>
  <div class="page"> 
    <!-- Home page quick links START --> 
    <!-- Home page quick links END --> 
    
    <!-- 100% width banner START --> 
    <!-- 100% width banner END -->
    
    <div class="main-container col1-layout">
      <div class="main container">
        <div class="col-main">
          <div class="std"><!-- 
*********************************
*
* 		SISU
*
*********************************

!-->
            <link rel="stylesheet" type="text/css" href="fonts/fonts.css" media="all" />
            
				<?php include('content_ru.php'); ?>
            
            <!-- 
*********************************
*
* 		SISU LÕPP
*
*********************************
!--></div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container-fluid footer-menu">
        <div class="container">
          <div>
            <div class="col-xs-6 col-md-3 group-01">
              <div class="dropdown-container">
                <h4 class="dropdown-toggle icon icon_arrow-down2" data-toggle="dropdown">О Tele2</h4>
                <ul class="dropdown-menu ">
                  <li><a href="https://tele2.ee/ru/ettevottest/tele2-eesti/juhtimine">О предприятии</a></li>
                  <li><a href="https://tele2.ee/ru/ettevottest/tootamine-tele2/tooandjana">Работа в Tele2</a></li>
                  <li><a href="https://tele2.ee/ru/kampaaniad/4G">Tele2 4,5G</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 group-01">
              <div class="dropdown-container">
                <h4 class="dropdown-toggle icon icon_arrow-down2" data-toggle="dropdown">Полезно</h4>
                <ul class="dropdown-menu ">
                  <li><a href="https://tele2.ee/ru/uudised">Новости</a></li>
                  <li><a href="https://tele2.ee/ru/uudised/kliendi_eelised/">Преимущества клиента</a></li>
                  <li><a href="https://tele2.ee/ru/tugiinfo/tingimused/yldtingimused/">Условия</a></li>
                  <li><a href="https://tele2.ee/ru/tugiinfo/hinnakirjad/roaming-hinnad">Прейскурант</a></li>
                </ul>
              </div>
            </div>
            <div class="row visible-xs visible-sm"> </div>
            <div class="col-xs-6 col-md-3 group-01">
              <div class="dropdown-container">
                <h4 class="dropdown-toggle icon icon_arrow-down2" data-toggle="dropdown">Связаться с нами</h4>
                <ul class="dropdown-menu ">
                  <li><a href="https://tele2.ee/ru/kontaktid/eraklienditeenindus">Контакты</a></li>
                  <li><a href="https://tele2.ee/ru/kontaktid/esindused">Представительства</a></li>
                  <li><a href="https://minu.tele2.ee/">Самообслуживание</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 group-01">
              <div class="dropdown-container">
                <h4 class="dropdown-toggle icon icon_arrow-down2" data-toggle="dropdown">Соцмедиа</h4>
                <ul class="dropdown-menu social">
                  <li><a href="https://www.facebook.com/tele2eesti"><span class="fa fa-facebook-square"> </span>Facebook</a></li>
                  <li><a href="https://www.youtube.com/user/Tele2Eesti"><span class="fa fa-youtube-square"> </span>Youtube</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid footer-logo">
        <div class="container">
          <div class="row"><a class="icon icon_tele2-logo" title="Tele2" href="https://tele2.ee/"> <img alt="Tele2" height="30" src="https://tele2.ee/media/wysiwyg/ee_quickLinks/logo-white.gif" width="80" /> </a><span class="copyright">Copyright © Tele2 Eesti.</span></div>
        </div>
      </div>
    </footer>
  </div>
</div>
</body>
</html>
