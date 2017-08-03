<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->

	
      
<?php include '../head.php'; ?>



<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->


	<body class=" cms-page-view">
		<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

				<!-- Home page quick links START --> 
				<!-- Home page quick links END --> 

				<!-- 100% width banner START --> 
				<!-- 100% width banner END -->

				<!--  
*********************************
*
* 		SISU
*
*********************************
!-->

<link rel="stylesheet" href="tele2.css">

<header>
                <div class="header-container ">
	<div id="mobile-top">
		<div class="dropdown sections">
			<button class="btn btn-default dropdown-toggle" type="button" id="sections" data-toggle="dropdown">Eraklient</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li class="active"><a href="https://tele2.ee/">Eraklient</a></li>
									<li><a href="https://tele2.ee/ettevotja/">Ettevõtja</a></li>
									<li><a href="https://tele2.ee/erilahendused">Erilahendused</a></li>
									<li><a href="https://tele2.ee/abi/avaleht">Abi</a></li>
									<li class=""><a href="https://tele2.ee/kontaktid/esindused">Kontaktid</a></li>
					<li class=""><a href="https://minu.tele2.ee">Minu Tele2 </a> </li>
			</ul>
		</div>
		 		
                <div class="dropdown sections section-flags">  
        <button data-toggle="dropdown" type="button" class="btn btn-default dropdown-toggle">EST</button>
        <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                                                                    <li role="presentation"><a href="#" onclick="changeStore('https://tele2.ee/pood', 'ee')" tabindex="-1" role="menuitem">EST</a></li>
                                                                                                                        <li role="presentation"><a href="#" onclick="changeStore('https://tele2.ee/ru/pood', 'ru')" tabindex="-1" role="menuitem">RUS</a></li>
                                                            </ul>
    </div>  

	</div>
	<div class="top-line">
	<div class="container">
		<div class="row menu-container first">
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                                                    <a href="https://tele2.ee/" title="Tele2" class="logo"><strong>Tele2</strong><img src="https://tele2.ee/skin/frontend/tele2/default/images/logo.gif" alt="Tele2"></a>
                                                <a class="bnt-nav" href="#" id="select-store-menu-hamb" data-toggle="collapse" data-target="#navbar-collapse-1"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    </div>
                    <span class="arrow"></span>
                    <ul class="nav nav-pills right">
                        <li class="hidden-xs "><a href="https://tele2.ee/kontaktai/tele2-salonai">Kontaktid</a></li>
                        <li class="login hidden-xs "><a id="login-toggle-link" href="https://minu.tele2.ee"> <i class="fa fa-user"></i><span class="link-text">Minu Tele2</span></a></li>
                                            </ul>
                </div>
            </div>

            <ul class="nav nav-pills left" id="select-store-menu">
                                    <li class="active"><a href="https://tele2.ee/">Eraklient</a></li>
                                    <li><a href="https://tele2.ee/ettevotja/">Ettevõtja</a></li>
                                    <li><a href="https://tele2.ee/erilahendused">Erilahendused</a></li>
                                    <li><a href="https://tele2.ee/abi/avaleht">Abi</a></li>
                                <li class="visible-xs "><a href="https://tele2.ee/kontaktid/esindused">Kontaktid</a></li>
                <li class="visible-xs "><a href="https://minu.tele2.ee">Minu Tele2 </a> </li>
            </ul>
            <span class="arrow"></span>
            <ul class="nav nav-pills right">
                <li class="hidden-xs "><a href="https://tele2.ee/kontaktid/esindused">Kontaktid</a></li>
                <li class="login hidden-xs "><a id="login-toggle-link" href="https://minu.tele2.ee/"> <i class="fa fa-user"></i> <span class="link-text">Minu Tele2</span></a></li>
                                





                <li class="hidden-xs flag-lg">
        <button data-toggle="dropdown" type="button" class="btn btn-default dropdown-toggle">EST</button>
        <ul role="menu" class="dropdown-menu">
                                                                                    <li role="presentation"><a href="#" onclick="changeStore('https://tele2.ee/pood', 'ee')" tabindex="-1" role="menuitem">EST</a></li>
                                                                                                                        <li role="presentation"><a href="#" onclick="changeStore('https://tele2.ee/ru/pood', 'ru')" tabindex="-1" role="menuitem">RUS</a></li>
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
        <div class="logo-container">
                            <a href="https://tele2.ee/" title="Tele2" class="logo"><strong>Tele2</strong><img src="https://tele2.ee/skin/frontend/tele2/default/images/logo.gif" alt="Tele2"></a>
                    </div>
        

    <div class="row menu-container second">
    <ul class="nav nav-pills">
		<li class="search visible-xs">
					<form id="search_header_form" action="https://tele2.ee/otsing/" method="get">
		    <div class="form-search">
		        <label for="search_header">Search for</label>
		        <div class="input_container">
                            <input id="search_header" type="text" autocomplete="off" class="search-field input-text" name="q" value="" maxlength="128" placeholder="Sisesta otsingusõna">
		        	<button type="submit" title="Otsing" class="btn btn-default"><i class="fa fa-search"></i></button>
				</div>
		        <div id="search_header_autocomplete" class="search-autocomplete" style="display: none;"></div>
		        <div class="search-terms clearfix">
	<div class="search-terms-title">
	    <h2>Popular Search Terms</h2>
	</div>
	
		    <ul class="search-tag-list clearfix">
			 
				        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=iphone">iphone</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=samsung">samsung</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=mms">mms</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=iphone+5">iphone 5</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=LG">LG</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=roaming">roaming</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=huawei">huawei</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=nokia">nokia</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=sony">sony</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=2">2</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=apple">apple</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=5">5</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=samsung+galaxy">samsung galaxy</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=mobiil+id">mobiil id</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=c">c</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=leviala">leviala</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=X">X</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=nuti">nuti</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=le">le</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=i">i</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=Iphone+6">Iphone 6</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=r">r</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=n">n</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=s">s</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=per">per</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=surf">surf</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=s+5">s 5</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=sim+kaart">sim kaart</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=info">info</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=samsung+galaxy+S">samsung galaxy S</a></li>
	        	    </ul>
	</div>



















		    </div>
	       
		</form>
		</li>
    				<li>
				<a class="submenu-toggle-link submenu-seadmed current" href="javascript:" onclick="toggleSubmenu('seadmed')">E-pood</a>
			</li>
    				<li>
				<a class="submenu-toggle-link submenu-internet" href="javascript:" onclick="toggleSubmenu('internet')">Internet</a>
			</li>
    				<li>
				<a class="submenu-toggle-link submenu-paketid" href="javascript:" onclick="toggleSubmenu('paketid')">Paketid</a>
			</li>
    				<li>
				<a class="submenu-toggle-link submenu-Teenused" href="javascript:" onclick="toggleSubmenu('Teenused')">Teenused</a>
			</li>
    				<li class="last">
				<a class="submenu-toggle-link submenu-Konekaart" href="javascript:" onclick="toggleSubmenu('Konekaart')">Kõnekaart</a>
			</li>
    	                <li class="search hidden-xs">
        	<a class="submenu-toggle-link submenu-search" href="javascript:" onclick="toggleSubmenu('search')">
        		<i class="fa fa-search"></i>
        	</a>
		</li>
    </ul>
</div></div>
    <div class="submenus-container">
        <div class="submenus container">
                	
        <div class="submenu" id="submenu-seadmed">
            <div class="row">
                <div class="col col-2-1 col-sm-3 col-xs-12">
                    <a class="menu-with-image current" href="https://tele2.ee/pood" title="Mobiiltelefonid">
<div class="menu-img"><img src="https://tele2.ee/media/wysiwyg/ee_menu/pood1.jpg" alt="Mobiiltelefonid"></div>
<div class="menu-text">Mobiiltelefonid</div>
</a>                </div>
                                                    <div class="col col-2-2 col-sm-3 col-xs-12">
                        <a class="menu-with-image" href="https://tele2.ee/pood/tahvelarvutid" title="Tahvelarvutid">
	<div class="menu-img"><img src="https://tele2.ee/media/wysiwyg/ee_menu/pood2.jpg" alt="Tahvelarvutid"></div>
	<div class="menu-text">Tahvelarvutid</div>
</a>                    </div>
                                                                <div class="col col-2-1 col-sm-3 col-xs-12">
                            <a class="menu-with-image" href="https://tele2.ee/pood/ruuterid" title="Ruuterid ja modemid">
                             <div class="menu-img"><img src="https://tele2.ee/media/wysiwyg/ee_menu/pood3.png" alt="Ruuterid ja modemid"></div>
                             <div class="menu-text"> Ruuterid ja modemid</div>
</a>                        </div>
                        <div class="col col-2-2 col-sm-3 col-xs-12">
                            &nbsp;                        </div>
                                                                                            </div>			
            			<div class="clear"></div>
			<div class="menu-close-link">
				<a href="javascript:" class="link-close" onclick="closeSubmenu()">   
						<span class="link-text">Sulge menüü <i class="fa fa-chevron-right"></i></span>
				</a>
		    </div>
        </div>
        	
        <div class="submenu" id="submenu-internet">
            <div class="row">
                <div class="col col-2-1 col-sm-3 col-xs-12">
                    <ul class="nav"><li class="header no-url"><a href="javascript:">Internet</a></li><li style="display: block;"><a href="https://tele2.ee/internet/internet-seadmes/4g">4,5G</a></li><li style="display: block;"><a href="https://tele2.ee/internet/internet-seadmes/internet-arvutis">4,5G internet arvutis</a></li><li style="display: block;"><a href="https://tele2.ee/internet/internet-seadmes/koduinternet">Koduinternet</a></li><li style="display: block;"><a href="https://tele2.ee/internet/internet-seadmes/ettemaksuga-internet">Ettemaksuga internet</a></li></ul>                </div>
                                                    <div class="col col-2-2 col-sm-3 col-xs-12">
                        <ul class="nav"><li class="header no-url"><a href="javascript:">Internet välismaal</a></li><li style="display: block;"><a href="https://tele2.ee/internet/internet-roamingus/internet-valismaal">Internet välismaal</a></li><li style="display: block;"><a href="https://tele2.ee/internet/internet-roamingus/andmesidepaketid">Internet välismaal paketid</a></li><li style="display: block;"><a href="https://tele2.ee/internet/internet-roamingus/andmesidelimiit">Andmesidelimiit välismaal</a></li></ul>                    </div>
                                                                <div class="col col-2-2 col-sm-6 col-xs-12">
                            <ul class="nav"><li class="header no-url"><a href="javascript:">Interneti lisateenused</a></li><li style="display: block;"><a href="https://tele2.ee/internet/interneti-teenused/staatiline-ip">Staatiline IP</a></li><li style="display: block;"><a href="https://tele2.ee/internet/interneti-teenused/interneti-lisamaht">Interneti lisamaht</a></li></ul>                        </div>
                                                                    </div>			
            			<div class="clear"></div>
			<div class="menu-close-link">
				<a href="javascript:" class="link-close" onclick="closeSubmenu()">   
						<span class="link-text">Sulge menüü <i class="fa fa-chevron-right"></i></span>
				</a>
		    </div>
        </div>
        	
        <div class="submenu" id="submenu-paketid">
            <div class="row">
                <div class="col col-2-1 col-sm-3 col-xs-12">
                    <ul class="nav"><li class="header no-url"><a href="javascript:">Paketid</a></li><li style="display: block;"><a href="https://tele2.ee/paketid/snapp">Snäpp</a></li><li style="display: block;"><a href="https://tele2.ee/paketid/multipaketid">Tele2 multipaketid</a></li><li style="display: block;"><a href="https://tele2.ee/paketid/interneti-boonus">Interneti boonus</a></li><li style="display: block;"><a href="https://tele2.ee/paketid/konepakett">Kõnepakett</a></li><li style="display: block;"><a href="https://tele2.ee/paketid/seenior">Seeniorpakett</a></li><li style="display: block;"><a href="https://tele2.ee/paketid/rahvusvahelised-paketid">Euroopa paketid</a></li></ul>                </div>
                                                    <div class="col col-2-2 col-sm-9 col-xs-12">
                                            </div>
                            </div>			
            			<div class="clear"></div>
			<div class="menu-close-link">
				<a href="javascript:" class="link-close" onclick="closeSubmenu()">   
						<span class="link-text">Sulge menüü <i class="fa fa-chevron-right"></i></span>
				</a>
		    </div>
        </div>
        	
        <div class="submenu" id="submenu-Teenused">
            <div class="row">
                <div class="col col-2-1 col-sm-3 col-xs-12">
                    <ul class="nav"><li class="header no-url"><a href="javascript:">Meelelahutus</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/meelelahutus/viaplay">Viaplay</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/meelelahutus/deezer">Deezer</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/meelelahutus/digilehed">Digilehed</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/meelelahutus/loto">M-loto</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/meelelahutus/perioodilised-sisuteenused">Sisuteenused</a></li></ul>                </div>
                                                    <div class="col col-2-2 col-sm-3 col-xs-12">
                        <ul class="nav"><li class="header no-url"><a href="javascript:">Mugavusteenused</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/mugavusteenused/tele2-app">Äpp "Tele2 Eesti"</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/mugavusteenused/mobiilnerahakott">Mobiilne rahakott</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/mugavusteenused/google-play">Google Play makse</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/mugavusteenused/tagasiost">Tele2 tagasiostuteenus</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/mugavusteenused/mobiil-id">Mobiil-ID</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/mugavusteenused/m-makse">Mobiilimakse</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/mugavusteenused/parkimine">M-parkimine</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/mugavusteenused/m-pilet">ID-pilet</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/mugavusteenused/m2m">M2M</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/mugavusteenused/seadmekindlustus">Seadmekindlustus</a></li></ul>                    </div>
                                                                <div class="col col-2-1 col-sm-3 col-xs-12">
                            <ul class="nav"><li class="header no-url"><a href="javascript:">Välismaa</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/roaming/randlusteenus">Rändlusteenus</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/roaming/reisikindlustus">Reisikindlustus</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/roaming/rahvusvahelised-koned">Eestist välismaale</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/roaming/piiripilet">Piiripilet</a></li></ul>                        </div>
                        <div class="col col-2-2 col-sm-3 col-xs-12">
                            <ul class="nav"><li class="header no-url"><a href="javascript:">Kõneteenused</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/koneteenused/hdkoned">Kõnekvaliteet</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/koneteenused/suunamine">Kõnede suunamine</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/koneteenused/konepost">Kõnepost</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/koneteenused/uritatud-kone-teavitus">Üritatud kõne teavitus</a></li><li style="display: block;"><a href="https://tele2.ee/teenused/koneteenused/koneteenusnumbrite-piirang">Kõneteenuse numbrite piirang</a></li></ul>                        </div>
                                                                                            </div>			
            			<div class="clear"></div>
			<div class="menu-close-link">
				<a href="javascript:" class="link-close" onclick="closeSubmenu()">   
						<span class="link-text">Sulge menüü <i class="fa fa-chevron-right"></i></span>
				</a>
		    </div>
        </div>
        	
        <div class="submenu" id="submenu-Konekaart">
            <div class="row">
                <div class="col col-2-1 col-sm-3 col-xs-12">
                    <ul class="nav"><li class="header no-url"><a href="javascript:">Kõnekaart</a></li><li style="display: block;"><a href="https://tele2.ee/konekaart/tele2konekaart">Tele2 kõnekaart</a></li><li style="display: block;"><a href="https://tele2.ee/konekaart/smart">Smart kõnekaart</a></li></ul>                </div>
                                                    <div class="col col-2-2 col-sm-9 col-xs-12">
                                            </div>
                            </div>			
            			<div class="clear"></div>
			<div class="menu-close-link">
				<a href="javascript:" class="link-close" onclick="closeSubmenu()">   
						<span class="link-text">Sulge menüü <i class="fa fa-chevron-right"></i></span>
				</a>
		    </div>
        </div>
    

	

            <div class="submenu" id="submenu-search">
                		<form id="search_header_form" action="https://tele2.ee/otsing/" method="get">
		    <div class="form-search">
		        <label for="search_header">Search for</label>
		        <div class="input_container">
                            <input id="search_header" type="text" autocomplete="off" class="search-field input-text" name="q" value="" maxlength="128" placeholder="Sisesta otsingusõna">
		        	<button type="submit" title="Otsing" class="btn btn-default"><i class="fa fa-search"></i></button>
				</div>
		        <div id="search_header_autocomplete" class="search-autocomplete"></div>
		        <div class="search-terms clearfix">
	<div class="search-terms-title">
	    <h2>Popular Search Terms</h2>
	</div>
	
		    <ul class="search-tag-list clearfix">
			 
				        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=iphone">iphone</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=samsung">samsung</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=mms">mms</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=iphone+5">iphone 5</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=LG">LG</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=roaming">roaming</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=huawei">huawei</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=nokia">nokia</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=sony">sony</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=2">2</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=apple">apple</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=5">5</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=samsung+galaxy">samsung galaxy</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=mobiil+id">mobiil id</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=c">c</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=leviala">leviala</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=X">X</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=nuti">nuti</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=le">le</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=i">i</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=Iphone+6">Iphone 6</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=r">r</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=n">n</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=s">s</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=per">per</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=surf">surf</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=s+5">s 5</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=sim+kaart">sim kaart</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=info">info</a></li>
	        	            <li><a href="https://tele2.ee/catalogsearch/result/?q=samsung+galaxy+S">samsung galaxy S</a></li>
	        	    </ul>
	</div>



















		    </div>
	       <script type="text/javascript">
	        //<![CDATA[
	            var searchForm = new Varien.searchForm('search_header_form', 'search_header', null);
	            searchForm.initAutocomplete('https://tele2.ee/catalogsearch/ajax/suggest/', 'search_header_autocomplete');

	            (function() {
			        var rtime = new Date(1, 1, 2000, 12,00,00);
			        var timeout = false;
			        var delta = 200;
			        var isWinResized = false;
			        var isSearchClicked = false;
			        var isClickedSearch = false;

			        jQuery('#search_header').on('click', function() {

			            var searchClicked = (function() {
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
			                setTimeout(resizeend(), delta);
			            }
			        });

			        function resizeend() {
			            if (new Date() - rtime < delta) {
			                setTimeout(resizeend(), delta);
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
        <form id="mytele2-login-form" method="post" action="https://tele2.ee/sharedsession/index/login/">
            <div class="row first">
                <div class="col-sm-12">
                    <h4><label for="mytele2-login-email">My Tele2</label></h4>
                </div>
                <div class="col-sm-12">
                    <label for="mytele2-login">Telefoninumber</label>
                    <div class="phone-no-container">
                        <div class="phone-no-prefix">
                            +370
                        </div>
                        <div class="phone-no-input">
                            <input type="text" name="login" id="mytele2-login" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 clearfix">
                    <label for="mytele2-login-password">Parool</label>
                    <input type="password" name="password" id="mytele2-login-password" class="form-control">
                </div>
                <div class="col col-sm-6 col-xs-6 actions">
                    <a class="pass_forgot" href="https://minu.tele2.ee/">Unustasid parooli?</a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <button type="submit" class="btn btn-primary">Sisene</button>
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

								<?php include('content.php'); ?>

								<!-- 
*********************************
*
* 		SISU LÕPP
*
*********************************
!-->
		

<footer class="footer">
<div class="container-fluid footer-menu">
<div class="container">
<div>
<div class="col-xs-6 col-md-3 group-01">
<div class="dropdown-container">
<h4 class="dropdown-toggle icon icon_arrow-down2" data-toggle="dropdown">Ettevõttest</h4>
<ul class="dropdown-menu ">
<li><a href="https://tele2.ee/ettevottest/tele2-eesti/juhtimine">Ettevõttest</a></li>
<li><a href="https://tele2.ee/ettevottest/tootamine-tele2/tooandjana">Tele2 tööandjana</a></li>
<li><a href="https://tele2.ee/internet/internet-seadmes/4g">Tele2 4,5G</a></li>
</ul>
</div>
</div>
<div class="col-xs-6 col-md-3 group-01">
<div class="dropdown-container">
<h4 class="dropdown-toggle icon icon_arrow-down2" data-toggle="dropdown">Kasulikku</h4>
<ul class="dropdown-menu ">
<li><a href="https://tele2.ee/uudised">Uudised</a></li>
<li><a href="https://tele2.ee/uudised/kliendi_eelised/">Kliendi eelised</a></li>
<li><a href="https://tele2.ee/tugiinfo/tingimused/yldtingimused/">Tingimused</a></li>
<li><a href="https://tele2.ee/tugiinfo/hinnakirjad/teenuste-hinnad-eraklient">Hinnakirjad</a></li>
</ul>
</div>
</div>
<div class="row visible-xs visible-sm">&nbsp;</div>
<div class="col-xs-6 col-md-3 group-01">
<div class="dropdown-container">
<h4 class="dropdown-toggle icon icon_arrow-down2" data-toggle="dropdown">Teenindus</h4>
<ul class="dropdown-menu ">
<li><a href="https://tele2.ee/kontaktid/eraklienditeenindus">Kontakt</a></li>
<li><a href="https://tele2.ee/kontaktid/esindused">Esindused</a></li>
<li><a href="https://minu.tele2.ee/">Iseteenindus</a></li>
</ul>
</div>
</div>
<div class="col-xs-6 col-md-3 group-01">
<div class="dropdown-container">
<h4 class="dropdown-toggle icon icon_arrow-down2" data-toggle="dropdown">Sotsiaalmeedia</h4>
<ul class="dropdown-menu social">
<li><a href="https://www.facebook.com/tele2eesti"><span class="fa fa-facebook-square">&nbsp;</span>Facebook</a></li>
<li><a href="https://www.youtube.com/user/Tele2Eesti"><span class="fa fa-youtube-square">&nbsp;</span>Youtube</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid footer-logo">
<div class="container">
<div class="row"><a class="icon icon_tele2-logo" title="Tele2" href="https://tele2.ee/"> <img alt="Tele2" height="30" src="https://tele2.ee/media/wysiwyg/ee_quickLinks/logo-white.gif" width="80"> </a><span class="copyright">Copyright © Tele2 Eesti.</span></div>
</div>
</div>
</footer>

	</body>
</html>
