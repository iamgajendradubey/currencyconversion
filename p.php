



<!DOCTYPE html>
<html lang="en">
<head>
<!--[if gt IE 9]><!-->
<script>//common/scripts.isml</script>
<script defer type="text/javascript" src="/on/demandware.static/Sites-RefArch-gajendra-Site/-/en_US/v1663228258630/js/main.js"></script>


<!--<![endif]-->
<!-- dwMarker="linclude" dwTemplateTitle="/default//common/htmlHead.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//common/htmlHead.isml" -->
<meta charset=UTF-8>

<meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Sites-RefArch-gajendra-Site | Salesforce Commerce Cloud | 6.1.0</title>


<meta name="description" content="Commerce Cloud Storefront Reference Architecture"/>
<meta name="keywords" content="Commerce Cloud Storefront Reference Architecture"/>




<link rel="icon" type="image/png" href="/on/demandware.static/Sites-RefArch-gajendra-Site/-/default/dwafe6bdf5/images/favicons/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="/on/demandware.static/Sites-RefArch-gajendra-Site/-/default/dwe49ea6f3/images/favicons/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="/on/demandware.static/Sites-RefArch-gajendra-Site/-/default/dw94a7e6cc/images/favicons/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="/on/demandware.static/Sites-RefArch-gajendra-Site/-/default/dw602b83e3/images/favicons/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="/on/demandware.static/Sites-RefArch-gajendra-Site/-/default/dwb543fe9e/images/favicons/favicon-128.png" sizes="128x128" />

<link rel="stylesheet" href="/on/demandware.static/Sites-RefArch-gajendra-Site/-/en_US/v1663228258630/css/global.css" />

    <link rel="stylesheet" href="/on/demandware.static/Sites-RefArch-gajendra-Site/-/en_US/v1663228258630/css/cart.css"  />








<link rel="stylesheet" href="/on/demandware.static/Sites-RefArch-gajendra-Site/-/en_US/v1663228258630/css/skin/skin.css" />


<script type="text/javascript">//<!--
/* <![CDATA[ (head-active_data.js) */
var dw = (window.dw || {});
dw.ac = {
    _analytics: null,
    _events: [],
    _category: "",
    _searchData: "",
    _anact: "",
    _anact_nohit_tag: "",
    _analytics_enabled: "false",
    _timeZone: "Etc/UTC",
    _capture: function(configs) {
        if (Object.prototype.toString.call(configs) === "[object Array]") {
            configs.forEach(captureObject);
            return;
        }
        dw.ac._events.push(configs);
    },
	capture: function() { 
		dw.ac._capture(arguments);
		// send to CQ as well:
		if (window.CQuotient) {
			window.CQuotient.trackEventsFromAC(arguments);
		}
	},
    EV_PRD_SEARCHHIT: "searchhit",
    EV_PRD_DETAIL: "detail",
    EV_PRD_RECOMMENDATION: "recommendation",
    EV_PRD_SETPRODUCT: "setproduct",
    applyContext: function(context) {
        if (typeof context === "object" && context.hasOwnProperty("category")) {
        	dw.ac._category = context.category;
        }
        if (typeof context === "object" && context.hasOwnProperty("searchData")) {
        	dw.ac._searchData = context.searchData;
        }
    },
    setDWAnalytics: function(analytics) {
        dw.ac._analytics = analytics;
    },
    eventsIsEmpty: function() {
        return 0 == dw.ac._events.length;
    }
};
/* ]]> */
// -->
</script>
<script type="text/javascript">//<!--
/* <![CDATA[ (head-cquotient.js) */
var CQuotient = window.CQuotient = {};
CQuotient.clientId = 'bjxc-RefArch-gajendra';
CQuotient.realm = 'BJXC';
CQuotient.siteId = 'RefArch-gajendra';
CQuotient.instanceType = 'sbx';
CQuotient.locale = 'en_US';
CQuotient.fbPixelId = '__UNKNOWN__';
CQuotient.activities = [];
CQuotient.cqcid='';
CQuotient.cquid='';
CQuotient.cqeid='';
CQuotient.cqlid='';
/* Turn this on to test against Staging Einstein */
/* CQuotient.useTest= true; */
CQuotient.initFromCookies = function () {
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
	  var c = ca[i];
	  while (c.charAt(0)==' ') c = c.substring(1,c.length);
	  if (c.indexOf('cqcid=') == 0) {
		CQuotient.cqcid=c.substring('cqcid='.length,c.length);
	  } else if (c.indexOf('cquid=') == 0) {
		  var value = c.substring('cquid='.length,c.length);
		  if (value) {
		  	var split_value = value.split("|", 3);
		  	if (split_value.length > 0) {
			  CQuotient.cquid=split_value[0];
		  	}
		  	if (split_value.length > 1) {
			  CQuotient.cqeid=split_value[1];
		  	}
		  	if (split_value.length > 2) {
			  CQuotient.cqlid=split_value[2];
		  	}
		  }
	  }
	}
}
CQuotient.getCQCookieId = function () {
	if(window.CQuotient.cqcid == '')
		window.CQuotient.initFromCookies();
	return window.CQuotient.cqcid;
};
CQuotient.getCQUserId = function () {
	if(window.CQuotient.cquid == '')
		window.CQuotient.initFromCookies();
	return window.CQuotient.cquid;
};
CQuotient.getCQHashedEmail = function () {
	if(window.CQuotient.cqeid == '')
		window.CQuotient.initFromCookies();
	return window.CQuotient.cqeid;
};
CQuotient.getCQHashedLogin = function () {
	if(window.CQuotient.cqlid == '')
		window.CQuotient.initFromCookies();
	return window.CQuotient.cqlid;
};
CQuotient.trackEventsFromAC = function (/* Object or Array */ events) {
try {
	if (Object.prototype.toString.call(events) === "[object Array]") {
		events.forEach(_trackASingleCQEvent);
	} else {
		CQuotient._trackASingleCQEvent(events);
	}
} catch(err) {}
};
CQuotient._trackASingleCQEvent = function ( /* Object */ event) {
	if (event && event.id) {
		if (event.type === dw.ac.EV_PRD_DETAIL) {
			CQuotient.trackViewProduct( {id:'', alt_id: event.id, type: 'raw_sku'} );
		} // not handling the other dw.ac.* events currently
	}
};
CQuotient.trackViewProduct = function(/* Object */ cqParamData){
	var cq_params = {};
	cq_params.cookieId = CQuotient.getCQCookieId();
	cq_params.userId = CQuotient.getCQUserId();
	cq_params.emailId = CQuotient.getCQHashedEmail();
	cq_params.loginId = CQuotient.getCQHashedLogin();
	cq_params.product = cqParamData.product;
	cq_params.realm = cqParamData.realm;
	cq_params.siteId = cqParamData.siteId;
	cq_params.instanceType = cqParamData.instanceType;
	cq_params.locale = CQuotient.locale;
	
	if(CQuotient.sendActivity) {
		CQuotient.sendActivity(CQuotient.clientId, 'viewProduct', cq_params);
	} else {
		CQuotient.activities.push({activityType: 'viewProduct', parameters: cq_params});
	}
};
/* ]]> */
// -->
</script>

<!-- dwMarker="linclude" dwTemplateTitle="/default//components/schema.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/schema.isml" -->


<meta name="rqid" content="RRRRRRRRRRRRRRRR"/><link type="text/css" href="/on/demandware.static/Sites-Site/-/-/internal/css/dwux-sf-15.5.css?v=22.9.1.17" rel="stylesheet" /></head>
<body><iframe src="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/__SYSTEM__StorefrontToolkit-Start" width="0px" height="0px" id="DW-SFToolkit"></iframe>
<span id="DW-SFToolkit-config" data-data="{&quot;baseURL&quot;:&quot;/on/demandware.static/Sites-Site/-/-/internal/&quot;,&quot;editURL&quot;:&quot;https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/on/demandware.store/Sites-Site/-/&quot;,&quot;site&quot;:&quot;RefArch-gajendra&quot;,&quot;cp&quot;:{&quot;serverDateTimePattern&quot;:&quot;yyyyMMddHHmm&quot;,&quot;datePattern&quot;:&quot;MM/dd/yyyy&quot;,&quot;timePattern&quot;:&quot;h:mm a&quot;}}" ></span>
<script type="application/javascript" src="/on/demandware.static/Sites-Site/-/-/internal/jscript/dwux-init.js?v=22.9.1.17"></script>

<div class="page" data-action="Cart-Show" data-querystring="lang=en_US" >
<!-- dwMarker="linclude" dwTemplateTitle="/default//components/header/pageHeader.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/header/pageHeader.isml" -->
<header>
    <!-- dwMarker="linclude" dwTemplateTitle="/default//components/header/skipNav.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/header/skipNav.isml" -->
<a href="#maincontent" class="skip" aria-label="Skip to main content">Skip to main content</a>
<a href="#footercontent" class="skip" aria-label="Skip to footer content">Skip to footer content</a>
    <div class="header-banner slide-up d-none">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div></div>
                <div class="content">
                    <!-- dwMarker="slot" dwContentID="header-banner-m" dwContext="global"-->
	 


	<!-- dwMarker="linclude" dwTemplateTitle="/default/slots/htmlSlotContainer.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/slots/htmlSlotContainer.isml" -->
<!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/slots/content/htmlSlotContainer.isml&quot;,&quot;IsController&quot;:false,&quot;PageProcessingTime&quot;:20,&quot;TemplateTitle&quot;:&quot;/default/slots/content/htmlSlotContainer.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Internal&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="Internal" dwIsController="false" dwTemplateTitle="/default/slots/content/htmlSlotContainer.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/slots/content/htmlSlotContainer.isml" --><div class="html-slot-container">
    
        
            <div class="header-promotion"><strong>FREE 2-Day SHIPPING</strong> FOR ORDERS OVER $300</div>
        
    
</div>
 
	
                </div>
                <div class="close-button">
                    <button type="button" class="close" aria-label="Close header banner">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <nav role="navigation">
        <div class="header container">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-header brand">
                        <a class="logo-home" href="/s/RefArch-gajendra/home?lang=en_US" title="Commerce Cloud Storefront Reference Architecture Home">
                            <img class="hidden-md-down" src="/on/demandware.static/Sites-RefArch-gajendra-Site/-/default/dwa3a5756d/images/logo.svg" alt="Commerce Cloud Storefront Reference Architecture" />
                            <img class="d-lg-none" src="/on/demandware.static/Sites-RefArch-gajendra-Site/-/default/dwc9335c0a/images/logo-small.svg" alt="Commerce Cloud Storefront Reference Architecture" />
                        </a>
                    </div>
                    <div class="navbar-header">
                        <div class="pull-left">
                            <div class="hidden-md-down">
                                
    <!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/account/header.isml&quot;,&quot;IsController&quot;:true,&quot;PipelineURL&quot;:&quot;http://localhost:60606/target=/gajendra_cartridge2/cartridge/controllers/Account.js&amp;start=Header&quot;,&quot;PageProcessingTime&quot;:12,&quot;TemplateTitle&quot;:&quot;/default/account/header.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Account-Header (gajendra_cartridge2)&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="Account-Header (gajendra_cartridge2)" dwPipelineURL="http://localhost:60606/target=/gajendra_cartridge2/cartridge/controllers/Account.js&amp;start=Header" dwIsController="true" dwTemplateTitle="/default/account/header.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/account/header.isml" --><div class="user hidden-md-down">
        <a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Login-Show" role="button" aria-label="Login to your account"><!-- dwMarker="link" dwPipelineTitle="Login-Show (gajendra_cartridge2)" dwIsController="true" dwPipelineURL="http://localhost:60606/target=/gajendra_cartridge2/cartridge/controllers/Login.js&amp;start=Show" -->
            <i class="fa fa-sign-in" aria-hidden="true"></i>
            <span class="user-message">Login</span>
        </a>
    </div>


                                
    <!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/header/countrySelector.isml&quot;,&quot;IsController&quot;:true,&quot;PipelineURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Locale&quot;,&quot;PageProcessingTime&quot;:19,&quot;TemplateTitle&quot;:&quot;/default//components/header/countrySelector.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Page-Locale (app_storefront_base)&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="Page-Locale (app_storefront_base)" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Locale" dwIsController="true" dwTemplateTitle="/default//components/header/countrySelector.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/header/countrySelector.isml" --><div class="dropdown country-selector" data-url="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Page-SetLocale" tabindex="0">
        <span class="btn dropdown-toggle" id="dropdownCountrySelector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="flag-icon flag-icon-us"></i>
            English (United States)
        </span>
        <div class="dropdown-menu dropdown-country-selector" aria-labelledby="dropdownCountrySelector">
            
                <a class="dropdown-item" href="#" data-locale="fr_FR" data-currencyCode="EUR" >
                    <i class="flag-icon flag-icon-fr"></i>
                    fran&ccedil;ais (France)
                </a>
            
                <a class="dropdown-item" href="#" data-locale="it_IT" data-currencyCode="EUR" >
                    <i class="flag-icon flag-icon-it"></i>
                    italiano (Italia)
                </a>
            
        </div>
    </div>


                            </div>
                            <button class="navbar-toggler d-md-none" type="button" aria-controls="sg-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                &#9776; <span class="hidden-xs-down">Menu</span>
                            </button>
                        </div>
                        <div class="pull-right">
                            <div class="search hidden-xs-down">
                                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/header/search.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/header/search.isml" -->
<div class="site-search">
    <form role="search"
          action="/s/RefArch-gajendra/search?lang=en_US"
          method="get"
          name="simpleSearch">
        <input class="form-control search-field"
               type="text"
               name="q"
               value=""
               placeholder="Search (keywords,etc)"
               role="combobox"
               aria-describedby="search-assistive-text"
               aria-haspopup="listbox"
               aria-owns="search-results"
               aria-expanded="false"
               aria-autocomplete="list"
               aria-activedescendant=""
               aria-controls="search-results"
               aria-label="Enter Keyword or Item No."
               autocomplete="off" />
        <button type="reset" name="reset-button" class="fa fa-times reset-button d-none" aria-label="Clear search keywords"></button>
        <button type="submit" name="search-button" class="fa fa-search" aria-label="Submit search keywords"></button>
        <div class="suggestions-wrapper" data-url="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/SearchServices-GetSuggestions?q="></div>
        <input type="hidden" value="en_US" name="lang">
    </form>
</div>

                            </div>
                            <div class="minicart" data-action-url="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-MiniCartShow">
                                <!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/header/miniCart.isml&quot;,&quot;IsController&quot;:true,&quot;PipelineURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Cart.js&amp;start=MiniCart&quot;,&quot;PageProcessingTime&quot;:10,&quot;TemplateTitle&quot;:&quot;/default//components/header/miniCart.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Cart-MiniCart (app_storefront_base)&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="Cart-MiniCart (app_storefront_base)" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Cart.js&amp;start=MiniCart" dwIsController="true" dwTemplateTitle="/default//components/header/miniCart.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/header/miniCart.isml" --><div class="minicart-total hide-link-med">
    <a class="minicart-link" href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/s/RefArch-gajendra/cart?lang=en_US" title="Cart 7 Items" aria-label="Cart 7 Items" aria-haspopup="true">
        <i class="minicart-icon fa fa-shopping-bag"></i>
        <span class="minicart-quantity">
            7
        </span>
    </a>
</div>

<div class="minicart-total hide-no-link">
    <i class="minicart-icon fa fa-shopping-bag"></i>
        <span class="minicart-quantity">
            7
        </span>
</div>
<div class="popover popover-bottom"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu navbar-toggleable-sm menu-toggleable-left multilevel-dropdown d-none d-md-block" id="sg-navbar-collapse">
            <div class="container">
                <div class="row">
                    <!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/header/menu.isml&quot;,&quot;IsController&quot;:true,&quot;PipelineURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=IncludeHeaderMenu&quot;,&quot;PageProcessingTime&quot;:110,&quot;PageCacheExpires&quot;:&quot;09/20/2022 12:22 pm&quot;,&quot;TemplateTitle&quot;:&quot;/default//components/header/menu.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Page-IncludeHeaderMenu (app_storefront_base)&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="Page-IncludeHeaderMenu (app_storefront_base)" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=IncludeHeaderMenu" dwIsController="true" dwTemplateTitle="/default//components/header/menu.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/header/menu.isml" --><nav class="navbar navbar-expand-md bg-inverse col-12">
    <div class="close-menu clearfix d-lg-none">
        <div class="back pull-left">
            <button role="button" aria-label="Back to previous menu">
                <span class="caret-left"></span>
                Back
            </button>
        </div>
        <div class="close-button pull-right">
            <button role="button" aria-label="Close Menu">
                Close
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <div class="menu-group" role="navigation">
        <ul class="nav navbar-nav" role="menu">
            
                
                    
                        <li class="nav-item dropdown" role="presentation">
                            <a href="/s/RefArch-gajendra/new%20arrivals/?lang=en_US" id="newarrivals" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">New Arrivals</a>
                            
                            <!-- dwMarker="linclude" dwTemplateTitle="/default/components/header/menuItem.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/header/menuItem.isml" -->
<ul class="dropdown-menu" role="menu" aria-hidden="true" aria-label="newarrivals">
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/new%20arrivals/womens/?lang=en_US" id="newarrivals-womens" role="menuitem" class="dropdown-link" tabindex="0">Womens</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/new%20arrivals/mens/?lang=en_US" id="newarrivals-mens" role="menuitem" class="dropdown-link" tabindex="0">Mens</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/new%20arrivals/electronics/?lang=en_US" id="newarrivals-electronics" role="menuitem" class="dropdown-link" tabindex="0">Electronics</a>
            </li>
        
    
</ul>

                        </li>
                    
                
                    
                        <li class="nav-item dropdown" role="presentation">
                            <a href="/s/RefArch-gajendra/womens/?lang=en_US" id="womens" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">Womens</a>
                            
                            <!-- dwMarker="linclude" dwTemplateTitle="/default/components/header/menuItem.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/header/menuItem.isml" -->
<ul class="dropdown-menu" role="menu" aria-hidden="true" aria-label="womens">
    
        
            <li class="dropdown-item dropdown" role="presentation">
                <a href="/s/RefArch-gajendra/womens/clothing/?lang=en_US" id="womens-clothing" class="dropdown-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">Clothing</a>
                
                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/header/menuItem.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/header/menuItem.isml" -->
<ul class="dropdown-menu" role="menu" aria-hidden="true" aria-label="womens-clothing">
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/womens/clothing/outfits/?lang=en_US" id="womens-outfits" role="menuitem" class="dropdown-link" tabindex="0">Outfits</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/womens/clothing/tops/?lang=en_US" id="womens-clothing-tops" role="menuitem" class="dropdown-link" tabindex="0">Tops</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/womens/clothing/dresses/?lang=en_US" id="womens-clothing-dresses" role="menuitem" class="dropdown-link" tabindex="0">Dresses</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/womens/clothing/bottoms/?lang=en_US" id="womens-clothing-bottoms" role="menuitem" class="dropdown-link" tabindex="0">Bottoms</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/womens/clothing/jackets%20%26%20coats/?lang=en_US" id="womens-clothing-jackets" role="menuitem" class="dropdown-link" tabindex="0">Jackets &amp; Coats</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/womens/clothing/feeling%20red/?lang=en_US" id="womens-clothing-feeling-red" role="menuitem" class="dropdown-link" tabindex="0">Feeling Red</a>
            </li>
        
    
</ul>

            </li>
        
    
        
            <li class="dropdown-item dropdown" role="presentation">
                <a href="/s/RefArch-gajendra/womens/jewelry/?lang=en_US" id="womens-jewelry" class="dropdown-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">Jewelry</a>
                
                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/header/menuItem.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/header/menuItem.isml" -->
<ul class="dropdown-menu" role="menu" aria-hidden="true" aria-label="womens-jewelry">
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/womens/jewelry/earrings/?lang=en_US" id="womens-jewelry-earrings" role="menuitem" class="dropdown-link" tabindex="0">Earrings</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/womens/jewelry/bracelets/?lang=en_US" id="womens-jewelry-bracelets" role="menuitem" class="dropdown-link" tabindex="0">Bracelets</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/womens/jewelry/necklaces/?lang=en_US" id="womens-jewelry-necklaces" role="menuitem" class="dropdown-link" tabindex="0">Necklaces</a>
            </li>
        
    
</ul>

            </li>
        
    
        
            <li class="dropdown-item dropdown" role="presentation">
                <a href="/s/RefArch-gajendra/womens/accessories/?lang=en_US" id="womens-accessories" class="dropdown-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">Accessories</a>
                
                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/header/menuItem.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/header/menuItem.isml" -->
<ul class="dropdown-menu" role="menu" aria-hidden="true" aria-label="womens-accessories">
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/womens/accessories/scarves/?lang=en_US" id="womens-accessories-scarves" role="menuitem" class="dropdown-link" tabindex="0">Scarves</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/womens/accessories/shoes/?lang=en_US" id="womens-accessories-shoes" role="menuitem" class="dropdown-link" tabindex="0">Shoes</a>
            </li>
        
    
</ul>

            </li>
        
    
</ul>

                        </li>
                    
                
                    
                        <li class="nav-item dropdown" role="presentation">
                            <a href="/s/RefArch-gajendra/mens/?lang=en_US" id="mens" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">Mens</a>
                            
                            <!-- dwMarker="linclude" dwTemplateTitle="/default/components/header/menuItem.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/header/menuItem.isml" -->
<ul class="dropdown-menu" role="menu" aria-hidden="true" aria-label="mens">
    
        
            <li class="dropdown-item dropdown" role="presentation">
                <a href="/s/RefArch-gajendra/mens/cloths/?lang=en_US" id="mens-clothing" class="dropdown-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">Cloths</a>
                
                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/header/menuItem.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/header/menuItem.isml" -->
<ul class="dropdown-menu" role="menu" aria-hidden="true" aria-label="mens-clothing">
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/mens/cloths/suits/?lang=en_US" id="mens-clothing-suits" role="menuitem" class="dropdown-link" tabindex="0">Suits</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/mens/cloths/jackets%20%26%20coats/?lang=en_US" id="mens-clothing-jackets" role="menuitem" class="dropdown-link" tabindex="0">Jackets &amp; Coats</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/mens/cloths/dress%20shirts/?lang=en_US" id="mens-clothing-dress-shirts" role="menuitem" class="dropdown-link" tabindex="0">Dress Shirts</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/mens/cloths/shorts/?lang=en_US" id="mens-clothing-shorts" role="menuitem" class="dropdown-link" tabindex="0">Shorts</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/mens/cloths/pants/?lang=en_US" id="mens-clothing-pants" role="menuitem" class="dropdown-link" tabindex="0">Pants</a>
            </li>
        
    
</ul>

            </li>
        
    
        
            <li class="dropdown-item dropdown" role="presentation">
                <a href="/s/RefArch-gajendra/mens/accessories/?lang=en_US" id="mens-accessories" class="dropdown-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">Accessories</a>
                
                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/header/menuItem.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/header/menuItem.isml" -->
<ul class="dropdown-menu" role="menu" aria-hidden="true" aria-label="mens-accessories">
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/mens/accessories/ties/?lang=en_US" id="mens-accessories-ties" role="menuitem" class="dropdown-link" tabindex="0">Ties</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/mens/accessories/gloves/?lang=en_US" id="mens-accessories-gloves" role="menuitem" class="dropdown-link" tabindex="0">Gloves</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/mens/accessories/luggage/?lang=en_US" id="mens-accessories-luggage" role="menuitem" class="dropdown-link" tabindex="0">Luggage</a>
            </li>
        
    
</ul>

            </li>
        
    
</ul>

                        </li>
                    
                
                    
                        <li class="nav-item dropdown" role="presentation">
                            <a href="/s/RefArch-gajendra/electronics/?lang=en_US" id="electronics" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">Electronics</a>
                            
                            <!-- dwMarker="linclude" dwTemplateTitle="/default/components/header/menuItem.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/header/menuItem.isml" -->
<ul class="dropdown-menu" role="menu" aria-hidden="true" aria-label="electronics">
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/electronics/televisions/?lang=en_US" id="electronics-televisions" role="menuitem" class="dropdown-link" tabindex="0">Televisions</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/electronics/digital%20cameras/?lang=en_US" id="electronics-digital-cameras" role="menuitem" class="dropdown-link" tabindex="0">Digital Cameras</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/electronics/ipod%20%26%20mp3%20players/?lang=en_US" id="electronics-digital-media-players" role="menuitem" class="dropdown-link" tabindex="0">iPod &amp; MP3 Players</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/electronics/gps%20navigation/?lang=en_US" id="electronics-gps-units" role="menuitem" class="dropdown-link" tabindex="0">GPS Navigation</a>
            </li>
        
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/electronics/gaming/?lang=en_US" id="electronics-gaming" role="menuitem" class="dropdown-link" tabindex="0">Gaming</a>
            </li>
        
    
</ul>

                        </li>
                    
                
                    
                        <li class="nav-item" role="presentation">
                            <a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/s/RefArch-gajendra/search?lang=en_US&amp;cgid=root&amp;srule=top-sellers" id="top-seller" class="nav-link" role="link" tabindex="0">Top Sellers</a>
                        </li>
                    
                
                    
                        <li class="nav-item" role="presentation">
                            <a href="/s/RefArch-gajendra/beauty%20and%20jewellary/?lang=en_US" id="HairColor" class="nav-link" role="link" tabindex="0">Beauty and Jewellary</a>
                        </li>
                    
                
                    
                        <li class="nav-item dropdown" role="presentation">
                            <a href="/s/RefArch-gajendra/adult/?lang=en_US" id="newhome" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">Adult</a>
                            
                            <!-- dwMarker="linclude" dwTemplateTitle="/default/components/header/menuItem.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/header/menuItem.isml" -->
<ul class="dropdown-menu" role="menu" aria-hidden="true" aria-label="newhome">
    
        
            <li class="dropdown-item dropdown" role="presentation">
                <a href="/s/RefArch-gajendra/adult/about%20us/?lang=en_US" id="aboutus" class="dropdown-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="0">about us</a>
                
                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/header/menuItem.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/header/menuItem.isml" -->
<ul class="dropdown-menu" role="menu" aria-hidden="true" aria-label="aboutus">
    
        
            <li class="dropdown-item" role="presentation">
                <a href="/s/RefArch-gajendra/adult/about%20us/appointment/?lang=en_US" id="appointement" role="menuitem" class="dropdown-link" tabindex="0">appointment</a>
            </li>
        
    
</ul>

            </li>
        
    
</ul>

                        </li>
                    
                
            
            
    <!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/account/mobileHeader.isml&quot;,&quot;IsController&quot;:true,&quot;PipelineURL&quot;:&quot;http://localhost:60606/target=/gajendra_cartridge2/cartridge/controllers/Account.js&amp;start=Header&quot;,&quot;PageProcessingTime&quot;:9,&quot;TemplateTitle&quot;:&quot;/default/account/mobileHeader.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Account-Header (gajendra_cartridge2)&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="Account-Header (gajendra_cartridge2)" dwPipelineURL="http://localhost:60606/target=/gajendra_cartridge2/cartridge/controllers/Account.js&amp;start=Header" dwIsController="true" dwTemplateTitle="/default/account/mobileHeader.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/account/mobileHeader.isml" --><li class="nav-item d-lg-none" role="menuitem">
        <a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Login-Show" class="nav-link"><!-- dwMarker="link" dwPipelineTitle="Login-Show (gajendra_cartridge2)" dwIsController="true" dwPipelineURL="http://localhost:60606/target=/gajendra_cartridge2/cartridge/controllers/Login.js&amp;start=Show" -->
            <i class="fa fa-sign-in" aria-hidden="true"></i>
            <span class="user-message">Login</span>
        </a>
    </li>


            
    <!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/header/mobileCountrySelector.isml&quot;,&quot;IsController&quot;:true,&quot;PipelineURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Locale&quot;,&quot;PageProcessingTime&quot;:8,&quot;TemplateTitle&quot;:&quot;/default//components/header/mobileCountrySelector.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Page-Locale (app_storefront_base)&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="Page-Locale (app_storefront_base)" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Locale" dwIsController="true" dwTemplateTitle="/default//components/header/mobileCountrySelector.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/header/mobileCountrySelector.isml" --><li class="menu-item dropdown country-selector d-md-none" data-url="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Page-SetLocale">
        <span class="btn dropdown-toggle" id="dropdownCountrySelector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="flag-icon flag-icon-us"></i>
            English (United States)
        </span>
        <div class="dropdown-menu dropdown-country-selector" aria-labelledby="dropdownCountrySelector">
            
                <a class="dropdown-item" href="#" data-locale="fr_FR" data-currencyCode="EUR" >
                    <i class="flag-icon flag-icon-fr"></i>
                    fran&ccedil;ais (France)
                </a>
            
                <a class="dropdown-item" href="#" data-locale="it_IT" data-currencyCode="EUR" >
                    <i class="flag-icon flag-icon-it"></i>
                    italiano (Italia)
                </a>
            
        </div>
    </li>


        </ul>
    </div>
</nav>

                </div>
            </div>
        </div>
        <div class="search-mobile d-sm-none">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/components/header/search.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/header/search.isml" -->
<div class="site-search">
    <form role="search"
          action="/s/RefArch-gajendra/search?lang=en_US"
          method="get"
          name="simpleSearch">
        <input class="form-control search-field"
               type="text"
               name="q"
               value=""
               placeholder="Search (keywords,etc)"
               role="combobox"
               aria-describedby="search-assistive-text"
               aria-haspopup="listbox"
               aria-owns="search-results"
               aria-expanded="false"
               aria-autocomplete="list"
               aria-activedescendant=""
               aria-controls="search-results"
               aria-label="Enter Keyword or Item No."
               autocomplete="off" />
        <button type="reset" name="reset-button" class="fa fa-times reset-button d-none" aria-label="Clear search keywords"></button>
        <button type="submit" name="search-button" class="fa fa-search" aria-label="Submit search keywords"></button>
        <div class="suggestions-wrapper" data-url="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/SearchServices-GetSuggestions?q="></div>
        <input type="hidden" value="en_US" name="lang">
    </form>
</div>

        </div>
    </nav>
</header>

<div role="main" id="maincontent">
<!-- dwMarker="decorator" dwTemplateTitle="/default/common/layout/page.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/common/layout/page.isml" -->

    

    
        <!-- dwMarker="linclude" dwTemplateTitle="/default/reporting/reportingUrls.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/reporting/reportingUrls.isml" -->

    



    

    <div class="cart-error-messaging cart-error">
        
    </div>

    <div class="container">
        <h1 class="page-title">Your Cart</h1>
        <div class="row cart-header">
            <div class="col-sm-4 hidden-xs-down">
                <a class="continue-shopping-link" href="/s/RefArch-gajendra/home?lang=en_US" title="Continue Shopping">
                    Continue Shopping
                </a>
            </div>
            <div class="col-sm-3 text-center">
                <h2 class="number-of-items">7 Items</h2>
            </div>
            <div class="col-sm-5 text-right hidden-xs-down">
                <div>
                    <span>Need Help? Call</span>
                    <span><a class="help-phone-number" href="tel:1-800-555-0199">1-800-555-0199</a></span>
                </div>
            </div>
        </div>
        <hr class="no-margin-top">
    </div>

    
        <div class="container cart cart-page">
            <div class="row">
                
                <div class="col-sm-7 col-md-8">
                    
                        
                            
                                <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCard.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCard.isml" -->




<div class="card product-info  uuid-f46db7abc258aa487fef2e3dad">
    
    <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardHeader.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardHeader.isml" -->

<div class="line-item-header">
    <div class="line-item-name">
        Black Single Pleat Athletic Fit Wool Suit
    </div>
    
        <div class="remove-line-item d-lg-none">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="750518699585M"
        data-name="Black Single Pleat Athletic Fit Wool Suit"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="f46db7abc258aa487fef2e3dad"
        aria-label="Remove product Black Single Pleat Athletic Fit Wool Suit">
    <span aria-hidden="true">&times;</span>
</button>

        </div>
    
</div>


    <div class="row ">
        <div class="col-lg-5">
            <div class="row">
                <div class="col-lg-12 d-flex flex-row">
                    <div class="item-image">
                        <img class="product-image" src="/on/demandware.static/-/Sites-apparel-m-catalog/default/dw6cb71c05/images/small/PG.52001RUBN4Q.BLACKFB.PZ.jpg" alt="Black Single Pleat Athletic Fit Wool Suit, Black, small" title="Black Single Pleat Athletic Fit Wool Suit, Black">
                    </div>
                    <div class="item-attributes d-flex flex-column">
                        
                            <p class="line-item-attributes Color-f46db7abc258aa487fef2e3dad">Color: Black</p>
                        
                            <p class="line-item-attributes Size-f46db7abc258aa487fef2e3dad">Size: 39</p>
                        
                            <p class="line-item-attributes Width-f46db7abc258aa487fef2e3dad">Width: Regular</p>
                        
                        

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardAvailability.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardAvailability.isml" -->
<div class="line-item-availability availability-f46db7abc258aa487fef2e3dad">
    
        <p class="line-item-attributes">In Stock</p>
    
    
</div>

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardEdit.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardEdit.isml" -->

<div class="product-edit">
    <a href="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-GetProduct?uuid=f46db7abc258aa487fef2e3dad" class="edit"
       data-toggle="modal" data-target="#editProductModal"
       aria-label="Edit product Black Single Pleat Athletic Fit Wool Suit"
       title="Edit"><!-- dwMarker="link" dwPipelineTitle="Cart-GetProduct (app_storefront_base)" dwIsController="true" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Cart.js&amp;start=GetProduct" -->
           Edit
    </a>
</div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-lg-none"><hr class="line-item-divider"></div>

        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardProductPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardProductPrice.isml" -->
<div class="col-lg-7 product-card-footer">
    
        <div class="row">
            
            <div class="col-4 line-item-price-f46db7abc258aa487fef2e3dad">
                <p class="line-item-price-info">Each</p>
                
                <div class="unit-price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/main.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/main.isml" -->

    <div class="price">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/default.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/default.isml" -->
<span>
    

    
        
        <del>
            <span class="strike-through list">
                <span class="value" content="500.00">
                    <span class="sr-only">
                        Price reduced from
                    </span>
                    <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/formatted.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/formatted.isml" -->
$500.00


                    <span class="sr-only">
                        to
                    </span>
                </span>
            </span>
        </del>
    

    
    <span class="sales">
        
        
        
            <span class="value" content="299.99">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/formatted.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/formatted.isml" -->
$299.99


        </span>
    </span>
</span>

    </div>


                </div>
            </div>

            
            <div class="col-4 col-lg-3 line-item-quantity">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardQuantitySelector.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardQuantitySelector.isml" -->
<div class="quantity-form">
    <label class="line-item-pricing-info quantity-label" for="quantity-f46db7abc258aa487fef2e3dad">Quantity</label>
    <select class="form-control quantity custom-select"
            data-uuid="f46db7abc258aa487fef2e3dad"
            data-pid="750518699585M"
            data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-UpdateQuantity"
            data-pre-select-qty="1.0"
            id="quantity-f46db7abc258aa487fef2e3dad"
            name="quantity-f46db7abc258aa487fef2e3dad"
            aria-label="quantity: 1">
        
            
                <option selected>1</option>
            
        
            
                <option>2</option>
            
        
            
                <option>3</option>
            
        
            
                <option>4</option>
            
        
            
                <option>5</option>
            
        
            
                <option>6</option>
            
        
            
                <option>7</option>
            
        
            
                <option>8</option>
            
        
            
                <option>9</option>
            
        
            
                <option>10</option>
            
        
    </select>
</div>

            </div>

            
            <div class="col-4 line-item-total-price">
                <p class="line-item-price-info">
                    Total
                </p>
                <div class="item-total-f46db7abc258aa487fef2e3dad price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductTotalPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductTotalPrice.isml" -->
<div class="strike-through
non-adjusted-price"
>
    null
</div>
<div class="pricing line-item-total-price-amount item-total-f46db7abc258aa487fef2e3dad">$299.99</div>

                </div>
            </div>

            
            <div class="col-lg-1 hidden-md-down remove-line-item-lg"></div>
        </div>

        
        <div class="line-item-promo item-f46db7abc258aa487fef2e3dad">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductPromotions.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductPromotions.isml" -->


        </div>
    
</div>


        
            <div class="hidden-md-down">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="750518699585M"
        data-name="Black Single Pleat Athletic Fit Wool Suit"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="f46db7abc258aa487fef2e3dad"
        aria-label="Remove product Black Single Pleat Athletic Fit Wool Suit">
    <span aria-hidden="true">&times;</span>
</button>

            </div>
        
    </div>

    
</div>

                            
                        
                    
                        
                            
                                <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCard.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCard.isml" -->




<div class="card product-info  uuid-da87238dbd51c9f6758274d5b9">
    
    <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardHeader.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardHeader.isml" -->

<div class="line-item-header">
    <div class="line-item-name">
        Cluster Drop Earring
    </div>
    
        <div class="remove-line-item d-lg-none">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="013742003154M"
        data-name="Cluster Drop Earring"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="da87238dbd51c9f6758274d5b9"
        aria-label="Remove product Cluster Drop Earring">
    <span aria-hidden="true">&times;</span>
</button>

        </div>
    
</div>


    <div class="row ">
        <div class="col-lg-5">
            <div class="row">
                <div class="col-lg-12 d-flex flex-row">
                    <div class="item-image">
                        <img class="product-image" src="/on/demandware.static/-/Sites-apparel-m-catalog/default/dw24a2a08f/images/small/PG.60119273.JJG03XX.PZ.jpg" alt="Cluster Drop Earring, Silver, small" title="Cluster Drop Earring, Silver">
                    </div>
                    <div class="item-attributes d-flex flex-column">
                        
                            <p class="line-item-attributes Color-da87238dbd51c9f6758274d5b9">Color: Silver</p>
                        
                        

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardAvailability.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardAvailability.isml" -->
<div class="line-item-availability availability-da87238dbd51c9f6758274d5b9">
    
        <p class="line-item-attributes">In Stock</p>
    
    
</div>

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardEdit.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardEdit.isml" -->

<div class="product-edit">
    <a href="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-GetProduct?uuid=da87238dbd51c9f6758274d5b9" class="edit"
       data-toggle="modal" data-target="#editProductModal"
       aria-label="Edit product Cluster Drop Earring"
       title="Edit"><!-- dwMarker="link" dwPipelineTitle="Cart-GetProduct (app_storefront_base)" dwIsController="true" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Cart.js&amp;start=GetProduct" -->
           Edit
    </a>
</div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-lg-none"><hr class="line-item-divider"></div>

        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardProductPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardProductPrice.isml" -->
<div class="col-lg-7 product-card-footer">
    
        <div class="row">
            
            <div class="col-4 line-item-price-da87238dbd51c9f6758274d5b9">
                <p class="line-item-price-info">Each</p>
                
                <div class="unit-price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/main.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/main.isml" -->

    <div class="price">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/default.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/default.isml" -->
<span>
    

    

    
    <span class="sales">
        
        
        
            <span class="value" content="26.00">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/formatted.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/formatted.isml" -->
$26.00


        </span>
    </span>
</span>

    </div>


                </div>
            </div>

            
            <div class="col-4 col-lg-3 line-item-quantity">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardQuantitySelector.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardQuantitySelector.isml" -->
<div class="quantity-form">
    <label class="line-item-pricing-info quantity-label" for="quantity-da87238dbd51c9f6758274d5b9">Quantity</label>
    <select class="form-control quantity custom-select"
            data-uuid="da87238dbd51c9f6758274d5b9"
            data-pid="013742003154M"
            data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-UpdateQuantity"
            data-pre-select-qty="1.0"
            id="quantity-da87238dbd51c9f6758274d5b9"
            name="quantity-da87238dbd51c9f6758274d5b9"
            aria-label="quantity: 1">
        
            
                <option selected>1</option>
            
        
            
                <option>2</option>
            
        
            
                <option>3</option>
            
        
            
                <option>4</option>
            
        
            
                <option>5</option>
            
        
            
                <option>6</option>
            
        
            
                <option>7</option>
            
        
            
                <option>8</option>
            
        
            
                <option>9</option>
            
        
            
                <option>10</option>
            
        
    </select>
</div>

            </div>

            
            <div class="col-4 line-item-total-price">
                <p class="line-item-price-info">
                    Total
                </p>
                <div class="item-total-da87238dbd51c9f6758274d5b9 price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductTotalPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductTotalPrice.isml" -->
<div class="strike-through
non-adjusted-price"
>
    null
</div>
<div class="pricing line-item-total-price-amount item-total-da87238dbd51c9f6758274d5b9">$26.00</div>

                </div>
            </div>

            
            <div class="col-lg-1 hidden-md-down remove-line-item-lg"></div>
        </div>

        
        <div class="line-item-promo item-da87238dbd51c9f6758274d5b9">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductPromotions.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductPromotions.isml" -->


        </div>
    
</div>


        
            <div class="hidden-md-down">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="013742003154M"
        data-name="Cluster Drop Earring"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="da87238dbd51c9f6758274d5b9"
        aria-label="Remove product Cluster Drop Earring">
    <span aria-hidden="true">&times;</span>
</button>

            </div>
        
    </div>

    
</div>

                            
                        
                    
                        
                            
                                <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCard.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCard.isml" -->




<div class="card product-info  uuid-3cec461708052bf8864ad74c92">
    
    <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardHeader.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardHeader.isml" -->

<div class="line-item-header">
    <div class="line-item-name">
        Sony Bravia&reg; N-Series 26&quot; LCD High Definition Television
    </div>
    
        <div class="remove-line-item d-lg-none">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="sony-kdl-26n4000M"
        data-name="Sony Bravia&reg; N-Series 26&quot; LCD High Definition Television"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="3cec461708052bf8864ad74c92"
        aria-label="Remove product Sony Bravia&reg; N-Series 26&quot; LCD High Definition Television">
    <span aria-hidden="true">&times;</span>
</button>

        </div>
    
</div>


    <div class="row ">
        <div class="col-lg-5">
            <div class="row">
                <div class="col-lg-12 d-flex flex-row">
                    <div class="item-image">
                        <img class="product-image" src="/on/demandware.static/-/Sites-electronics-m-catalog/default/dw3a20c3d2/images/small/sony-kdl-26n4000.jpg" alt="Sony Bravia&reg; N-Series 26&quot; LCD High Definition Television, , small" title="Sony Bravia&reg; N-Series 26&quot; LCD High Definition Television, ">
                    </div>
                    <div class="item-attributes d-flex flex-column">
                        
                        

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardAvailability.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardAvailability.isml" -->
<div class="line-item-availability availability-3cec461708052bf8864ad74c92">
    
        <p class="line-item-attributes">In Stock</p>
    
    
</div>

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardEdit.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardEdit.isml" -->

<div class="product-edit">
    <a href="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-GetProduct?uuid=3cec461708052bf8864ad74c92" class="edit"
       data-toggle="modal" data-target="#editProductModal"
       aria-label="Edit product Sony Bravia&reg; N-Series 26&quot; LCD High Definition Television"
       title="Edit"><!-- dwMarker="link" dwPipelineTitle="Cart-GetProduct (app_storefront_base)" dwIsController="true" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Cart.js&amp;start=GetProduct" -->
           Edit
    </a>
</div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-lg-none"><hr class="line-item-divider"></div>

        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardProductPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardProductPrice.isml" -->
<div class="col-lg-7 product-card-footer">
    
        <div class="row">
            
            <div class="col-4 line-item-price-3cec461708052bf8864ad74c92">
                <p class="line-item-price-info">Each</p>
                
                <div class="unit-price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/main.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/main.isml" -->

    <div class="price">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/default.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/default.isml" -->
<span>
    

    

    
    <span class="sales">
        
        
        
            <span class="value" content="899.99">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/formatted.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/formatted.isml" -->
$899.99


        </span>
    </span>
</span>

    </div>


                </div>
            </div>

            
            <div class="col-4 col-lg-3 line-item-quantity">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardQuantitySelector.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardQuantitySelector.isml" -->
<div class="quantity-form">
    <label class="line-item-pricing-info quantity-label" for="quantity-3cec461708052bf8864ad74c92">Quantity</label>
    <select class="form-control quantity custom-select"
            data-uuid="3cec461708052bf8864ad74c92"
            data-pid="sony-kdl-26n4000M"
            data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-UpdateQuantity"
            data-pre-select-qty="1.0"
            id="quantity-3cec461708052bf8864ad74c92"
            name="quantity-3cec461708052bf8864ad74c92"
            aria-label="quantity: 1">
        
            
                <option selected>1</option>
            
        
            
                <option>2</option>
            
        
            
                <option>3</option>
            
        
            
                <option>4</option>
            
        
            
                <option>5</option>
            
        
            
                <option>6</option>
            
        
            
                <option>7</option>
            
        
            
                <option>8</option>
            
        
            
                <option>9</option>
            
        
            
                <option>10</option>
            
        
    </select>
</div>

            </div>

            
            <div class="col-4 line-item-total-price">
                <p class="line-item-price-info">
                    Total
                </p>
                <div class="item-total-3cec461708052bf8864ad74c92 price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductTotalPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductTotalPrice.isml" -->
<div class="strike-through
non-adjusted-price"
>
    null
</div>
<div class="pricing line-item-total-price-amount item-total-3cec461708052bf8864ad74c92">$899.99</div>

                </div>
            </div>

            
            <div class="col-lg-1 hidden-md-down remove-line-item-lg"></div>
        </div>

        
        <div class="line-item-promo item-3cec461708052bf8864ad74c92">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductPromotions.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductPromotions.isml" -->


        </div>
    
</div>


        
            <div class="hidden-md-down">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="sony-kdl-26n4000M"
        data-name="Sony Bravia&reg; N-Series 26&quot; LCD High Definition Television"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="3cec461708052bf8864ad74c92"
        aria-label="Remove product Sony Bravia&reg; N-Series 26&quot; LCD High Definition Television">
    <span aria-hidden="true">&times;</span>
</button>

            </div>
        
    </div>

    
</div>

                            
                        
                    
                        
                            
                                <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCard.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCard.isml" -->




<div class="card product-info  uuid-1e7d446974ae3aad63ca6b251f">
    
    <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardHeader.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardHeader.isml" -->

<div class="line-item-header">
    <div class="line-item-name">
        Sony Bravia&reg; XBR&reg; 55&quot; LCD High Definition Television
    </div>
    
        <div class="remove-line-item d-lg-none">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="sony-kdl-55xbr8M"
        data-name="Sony Bravia&reg; XBR&reg; 55&quot; LCD High Definition Television"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="1e7d446974ae3aad63ca6b251f"
        aria-label="Remove product Sony Bravia&reg; XBR&reg; 55&quot; LCD High Definition Television">
    <span aria-hidden="true">&times;</span>
</button>

        </div>
    
</div>


    <div class="row ">
        <div class="col-lg-5">
            <div class="row">
                <div class="col-lg-12 d-flex flex-row">
                    <div class="item-image">
                        <img class="product-image" src="/on/demandware.static/-/Sites-electronics-m-catalog/default/dwe2fe6d43/images/small/sony-kdl-55xbr8.jpg" alt="Sony Bravia&reg; XBR&reg; 55&quot; LCD High Definition Television, , small" title="Sony Bravia&reg; XBR&reg; 55&quot; LCD High Definition Television, ">
                    </div>
                    <div class="item-attributes d-flex flex-column">
                        
                        
                            
                                <div class="lineItem-options-values" data-option-id="tvWarranty" data-value-id="000">
                                    <p class="line-item-attributes">Extended Warranty: None</p>
                                </div>
                            
                        

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardAvailability.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardAvailability.isml" -->
<div class="line-item-availability availability-1e7d446974ae3aad63ca6b251f">
    
        <p class="line-item-attributes">Pre-Order</p>
    
    
        <p class="line-item-attributes line-item-instock-date">
            Mon Jun 01 2009
        </p>
    
</div>

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardEdit.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardEdit.isml" -->

<div class="product-edit">
    <a href="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-GetProduct?uuid=1e7d446974ae3aad63ca6b251f" class="edit"
       data-toggle="modal" data-target="#editProductModal"
       aria-label="Edit product Sony Bravia&reg; XBR&reg; 55&quot; LCD High Definition Television"
       title="Edit"><!-- dwMarker="link" dwPipelineTitle="Cart-GetProduct (app_storefront_base)" dwIsController="true" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Cart.js&amp;start=GetProduct" -->
           Edit
    </a>
</div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-lg-none"><hr class="line-item-divider"></div>

        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardProductPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardProductPrice.isml" -->
<div class="col-lg-7 product-card-footer">
    
        <div class="row">
            
            <div class="col-4 line-item-price-1e7d446974ae3aad63ca6b251f">
                <p class="line-item-price-info">Each</p>
                
                <div class="unit-price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/main.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/main.isml" -->

    <div class="price">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/default.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/default.isml" -->
<span>
    

    

    
    <span class="sales">
        
        
        
            <span class="value" content="5249.99">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/formatted.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/formatted.isml" -->
$5,249.99


        </span>
    </span>
</span>

    </div>


                </div>
            </div>

            
            <div class="col-4 col-lg-3 line-item-quantity">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardQuantitySelector.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardQuantitySelector.isml" -->
<div class="quantity-form">
    <label class="line-item-pricing-info quantity-label" for="quantity-1e7d446974ae3aad63ca6b251f">Quantity</label>
    <select class="form-control quantity custom-select"
            data-uuid="1e7d446974ae3aad63ca6b251f"
            data-pid="sony-kdl-55xbr8M"
            data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-UpdateQuantity"
            data-pre-select-qty="1.0"
            id="quantity-1e7d446974ae3aad63ca6b251f"
            name="quantity-1e7d446974ae3aad63ca6b251f"
            aria-label="quantity: 1">
        
            
                <option selected>1</option>
            
        
            
                <option>2</option>
            
        
            
                <option>3</option>
            
        
            
                <option>4</option>
            
        
            
                <option>5</option>
            
        
            
                <option>6</option>
            
        
            
                <option>7</option>
            
        
            
                <option>8</option>
            
        
            
                <option>9</option>
            
        
            
                <option>10</option>
            
        
    </select>
</div>

            </div>

            
            <div class="col-4 line-item-total-price">
                <p class="line-item-price-info">
                    Total
                </p>
                <div class="item-total-1e7d446974ae3aad63ca6b251f price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductTotalPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductTotalPrice.isml" -->
<div class="strike-through
non-adjusted-price"
>
    null
</div>
<div class="pricing line-item-total-price-amount item-total-1e7d446974ae3aad63ca6b251f">$5,249.99</div>

                </div>
            </div>

            
            <div class="col-lg-1 hidden-md-down remove-line-item-lg"></div>
        </div>

        
        <div class="line-item-promo item-1e7d446974ae3aad63ca6b251f">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductPromotions.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductPromotions.isml" -->


        </div>
    
</div>


        
            <div class="hidden-md-down">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="sony-kdl-55xbr8M"
        data-name="Sony Bravia&reg; XBR&reg; 55&quot; LCD High Definition Television"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="1e7d446974ae3aad63ca6b251f"
        aria-label="Remove product Sony Bravia&reg; XBR&reg; 55&quot; LCD High Definition Television">
    <span aria-hidden="true">&times;</span>
</button>

            </div>
        
    </div>

    
</div>

                            
                        
                    
                        
                            
                                <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCard.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCard.isml" -->




<div class="card product-info  uuid-dcddf01417e97af9810aa8cbf5">
    
    <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardHeader.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardHeader.isml" -->

<div class="line-item-header">
    <div class="line-item-name">
        Sony Bravia&reg; S-Series 52&quot; LCD High Definition Television
    </div>
    
        <div class="remove-line-item d-lg-none">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="sony-kdl-52s4100M"
        data-name="Sony Bravia&reg; S-Series 52&quot; LCD High Definition Television"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="dcddf01417e97af9810aa8cbf5"
        aria-label="Remove product Sony Bravia&reg; S-Series 52&quot; LCD High Definition Television">
    <span aria-hidden="true">&times;</span>
</button>

        </div>
    
</div>


    <div class="row ">
        <div class="col-lg-5">
            <div class="row">
                <div class="col-lg-12 d-flex flex-row">
                    <div class="item-image">
                        <img class="product-image" src="/on/demandware.static/-/Sites-electronics-m-catalog/default/dw29cf548a/images/small/sony-kdl-52s4100.jpg" alt="Sony Bravia&reg; S-Series 52&quot; LCD High Definition Television, , small" title="Sony Bravia&reg; S-Series 52&quot; LCD High Definition Television, ">
                    </div>
                    <div class="item-attributes d-flex flex-column">
                        
                        
                            
                                <div class="lineItem-options-values" data-option-id="tvWarranty" data-value-id="000">
                                    <p class="line-item-attributes">Extended Warranty: None</p>
                                </div>
                            
                        

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardAvailability.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardAvailability.isml" -->
<div class="line-item-availability availability-dcddf01417e97af9810aa8cbf5">
    
        <p class="line-item-attributes">Pre-Order</p>
    
    
        <p class="line-item-attributes line-item-instock-date">
            Mon Jun 01 2009
        </p>
    
</div>

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardEdit.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardEdit.isml" -->

<div class="product-edit">
    <a href="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-GetProduct?uuid=dcddf01417e97af9810aa8cbf5" class="edit"
       data-toggle="modal" data-target="#editProductModal"
       aria-label="Edit product Sony Bravia&reg; S-Series 52&quot; LCD High Definition Television"
       title="Edit"><!-- dwMarker="link" dwPipelineTitle="Cart-GetProduct (app_storefront_base)" dwIsController="true" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Cart.js&amp;start=GetProduct" -->
           Edit
    </a>
</div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-lg-none"><hr class="line-item-divider"></div>

        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardProductPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardProductPrice.isml" -->
<div class="col-lg-7 product-card-footer">
    
        <div class="row">
            
            <div class="col-4 line-item-price-dcddf01417e97af9810aa8cbf5">
                <p class="line-item-price-info">Each</p>
                
                <div class="unit-price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/main.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/main.isml" -->

    <div class="price">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/default.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/default.isml" -->
<span>
    

    

    
    <span class="sales">
        
        
        
            <span class="value" content="1499.99">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/formatted.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/formatted.isml" -->
$1,499.99


        </span>
    </span>
</span>

    </div>


                </div>
            </div>

            
            <div class="col-4 col-lg-3 line-item-quantity">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardQuantitySelector.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardQuantitySelector.isml" -->
<div class="quantity-form">
    <label class="line-item-pricing-info quantity-label" for="quantity-dcddf01417e97af9810aa8cbf5">Quantity</label>
    <select class="form-control quantity custom-select"
            data-uuid="dcddf01417e97af9810aa8cbf5"
            data-pid="sony-kdl-52s4100M"
            data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-UpdateQuantity"
            data-pre-select-qty="1.0"
            id="quantity-dcddf01417e97af9810aa8cbf5"
            name="quantity-dcddf01417e97af9810aa8cbf5"
            aria-label="quantity: 1">
        
            
                <option selected>1</option>
            
        
            
                <option>2</option>
            
        
            
                <option>3</option>
            
        
            
                <option>4</option>
            
        
            
                <option>5</option>
            
        
            
                <option>6</option>
            
        
            
                <option>7</option>
            
        
            
                <option>8</option>
            
        
            
                <option>9</option>
            
        
            
                <option>10</option>
            
        
    </select>
</div>

            </div>

            
            <div class="col-4 line-item-total-price">
                <p class="line-item-price-info">
                    Total
                </p>
                <div class="item-total-dcddf01417e97af9810aa8cbf5 price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductTotalPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductTotalPrice.isml" -->
<div class="strike-through
non-adjusted-price"
>
    null
</div>
<div class="pricing line-item-total-price-amount item-total-dcddf01417e97af9810aa8cbf5">$1,499.99</div>

                </div>
            </div>

            
            <div class="col-lg-1 hidden-md-down remove-line-item-lg"></div>
        </div>

        
        <div class="line-item-promo item-dcddf01417e97af9810aa8cbf5">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductPromotions.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductPromotions.isml" -->
        </div>
</div>


        
            <div class="hidden-md-down">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="sony-kdl-52s4100M"
        data-name="Sony Bravia&reg; S-Series 52&quot; LCD High Definition Television"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="dcddf01417e97af9810aa8cbf5"
        aria-label="Remove product Sony Bravia&reg; S-Series 52&quot; LCD High Definition Television">
    <span aria-hidden="true">&times;</span>
</button>
            </div>
        
    </div>

    
</div>

                            
                        
                    
                        
                            
                                <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCard.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCard.isml" -->




<div class="card product-info  uuid-edc6f4190eff8bad68673d69e1">
    
    <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardHeader.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardHeader.isml" -->

<div class="line-item-header">
    <div class="line-item-name">
        Sony Bravia&reg; XBR&reg; 46&quot; LCD High Definition Television
    </div>
    
        <div class="remove-line-item d-lg-none">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="sony-kdl-46xbr8M"
        data-name="Sony Bravia&reg; XBR&reg; 46&quot; LCD High Definition Television"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="edc6f4190eff8bad68673d69e1"
        aria-label="Remove product Sony Bravia&reg; XBR&reg; 46&quot; LCD High Definition Television">
    <span aria-hidden="true">&times;</span>
</button>

        </div>
    
</div>


    <div class="row ">
        <div class="col-lg-5">
            <div class="row">
                <div class="col-lg-12 d-flex flex-row">
                    <div class="item-image">
                        <img class="product-image" src="/on/demandware.static/-/Sites-electronics-m-catalog/default/dwa8750c8f/images/small/sony-kdl-46xbr8.jpg" alt="Sony Bravia&reg; XBR&reg; 46&quot; LCD High Definition Television, , small" title="Sony Bravia&reg; XBR&reg; 46&quot; LCD High Definition Television, ">
                    </div>
                    <div class="item-attributes d-flex flex-column">
                        
                        
                            
                                <div class="lineItem-options-values" data-option-id="tvWarranty" data-value-id="000">
                                    <p class="line-item-attributes">Extended Warranty: None</p>
                                </div>
                            
                        

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardAvailability.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardAvailability.isml" -->
<div class="line-item-availability availability-edc6f4190eff8bad68673d69e1">
    
        <p class="line-item-attributes">Pre-Order</p>
    
    
        <p class="line-item-attributes line-item-instock-date">
            Mon Jun 01 2009
        </p>
    
</div>

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardEdit.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardEdit.isml" -->

<div class="product-edit">
    <a href="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-GetProduct?uuid=edc6f4190eff8bad68673d69e1" class="edit"
       data-toggle="modal" data-target="#editProductModal"
       aria-label="Edit product Sony Bravia&reg; XBR&reg; 46&quot; LCD High Definition Television"
       title="Edit"><!-- dwMarker="link" dwPipelineTitle="Cart-GetProduct (app_storefront_base)" dwIsController="true" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Cart.js&amp;start=GetProduct" -->
           Edit
    </a>
</div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-lg-none"><hr class="line-item-divider"></div>

        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardProductPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardProductPrice.isml" -->
<div class="col-lg-7 product-card-footer">
    
        <div class="row">
            
            <div class="col-4 line-item-price-edc6f4190eff8bad68673d69e1">
                <p class="line-item-price-info">Each</p>
                
                <div class="unit-price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/main.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/main.isml" -->

    <div class="price">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/default.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/default.isml" -->
<span>
    

    

    
    <span class="sales">
        
        
        
            <span class="value" content="3749.99">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/formatted.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/formatted.isml" -->
$3,749.99


        </span>
    </span>
</span>

    </div>


                </div>
            </div>

            
            <div class="col-4 col-lg-3 line-item-quantity">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardQuantitySelector.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardQuantitySelector.isml" -->
<div class="quantity-form">
    <label class="line-item-pricing-info quantity-label" for="quantity-edc6f4190eff8bad68673d69e1">Quantity</label>
    <select class="form-control quantity custom-select"
            data-uuid="edc6f4190eff8bad68673d69e1"
            data-pid="sony-kdl-46xbr8M"
            data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-UpdateQuantity"
            data-pre-select-qty="1.0"
            id="quantity-edc6f4190eff8bad68673d69e1"
            name="quantity-edc6f4190eff8bad68673d69e1"
            aria-label="quantity: 1">
        
            
                <option selected>1</option>
            
        
            
                <option>2</option>
            
        
            
                <option>3</option>
            
        
            
                <option>4</option>
            
        
            
                <option>5</option>
            
        
            
                <option>6</option>
            
        
            
                <option>7</option>
            
        
            
                <option>8</option>
            
        
            
                <option>9</option>
            
        
            
                <option>10</option>
            
        
    </select>
</div>

            </div>

            
            <div class="col-4 line-item-total-price">
                <p class="line-item-price-info">
                    Total
                </p>
                <div class="item-total-edc6f4190eff8bad68673d69e1 price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductTotalPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductTotalPrice.isml" -->
<div class="strike-through
non-adjusted-price"
>
    null
</div>
<div class="pricing line-item-total-price-amount item-total-edc6f4190eff8bad68673d69e1">$3,749.99</div>

                </div>
            </div>

            
            <div class="col-lg-1 hidden-md-down remove-line-item-lg"></div>
        </div>

        
        <div class="line-item-promo item-edc6f4190eff8bad68673d69e1">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductPromotions.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductPromotions.isml" -->


        </div>
    
</div>


        
            <div class="hidden-md-down">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="sony-kdl-46xbr8M"
        data-name="Sony Bravia&reg; XBR&reg; 46&quot; LCD High Definition Television"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="edc6f4190eff8bad68673d69e1"
        aria-label="Remove product Sony Bravia&reg; XBR&reg; 46&quot; LCD High Definition Television">
    <span aria-hidden="true">&times;</span>
</button>

            </div>
        
    </div>

    
</div>

                            
                        
                    
                        
                            
                                <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCard.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCard.isml" -->




<div class="card product-info  uuid-8da2b3e12a7dbbb903dca9d31a">
    
    <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardHeader.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardHeader.isml" -->

<div class="line-item-header">
    <div class="line-item-name">
        Sony Bravia&reg; XBR&reg; 70&quot; LCD High Definition Television
    </div>
    
        <div class="remove-line-item d-lg-none">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="sony-kdl-70xbr7M"
        data-name="Sony Bravia&reg; XBR&reg; 70&quot; LCD High Definition Television"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="8da2b3e12a7dbbb903dca9d31a"
        aria-label="Remove product Sony Bravia&reg; XBR&reg; 70&quot; LCD High Definition Television">
    <span aria-hidden="true">&times;</span>
</button>

        </div>
    
</div>


    <div class="row ">
        <div class="col-lg-5">
            <div class="row">
                <div class="col-lg-12 d-flex flex-row">
                    <div class="item-image">
                        <img class="product-image" src="/on/demandware.static/-/Sites-electronics-m-catalog/default/dw50dc0b2f/images/small/sony-kdl-70xbr7.jpg" alt="Sony Bravia&reg; XBR&reg; 70&quot; LCD High Definition Television, , small" title="Sony Bravia&reg; XBR&reg; 70&quot; LCD High Definition Television, ">
                    </div>
                    <div class="item-attributes d-flex flex-column">
                        
                        
                            
                                <div class="lineItem-options-values" data-option-id="tvWarranty" data-value-id="000">
                                    <p class="line-item-attributes">Extended Warranty: None</p>
                                </div>
                            
                        

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardAvailability.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardAvailability.isml" -->
<div class="line-item-availability availability-8da2b3e12a7dbbb903dca9d31a">
    
        <p class="line-item-attributes">In Stock</p>
    
    
        <p class="line-item-attributes line-item-instock-date">
            Sun May 31 2009
        </p>
    
</div>

                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardEdit.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardEdit.isml" -->

<div class="product-edit">
    <a href="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-GetProduct?uuid=8da2b3e12a7dbbb903dca9d31a" class="edit"
       data-toggle="modal" data-target="#editProductModal"
       aria-label="Edit product Sony Bravia&reg; XBR&reg; 70&quot; LCD High Definition Television"
       title="Edit"><!-- dwMarker="link" dwPipelineTitle="Cart-GetProduct (app_storefront_base)" dwIsController="true" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Cart.js&amp;start=GetProduct" -->
           Edit
    </a>
</div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-lg-none"><hr class="line-item-divider"></div>

        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/productCard/cartProductCardProductPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/productCard/cartProductCardProductPrice.isml" -->
<div class="col-lg-7 product-card-footer">
    
        <div class="row">
            
            <div class="col-4 line-item-price-8da2b3e12a7dbbb903dca9d31a">
                <p class="line-item-price-info">Each</p>
                
                <div class="unit-price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/main.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/main.isml" -->

    <div class="price">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/default.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/default.isml" -->
<span>
    

    

    
    <span class="sales">
        
        
        
            <span class="value" content="14999.99">
        
        <!-- dwMarker="linclude" dwTemplateTitle="/default//product/components/pricing/formatted.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//product/components/pricing/formatted.isml" -->
$14,999.99


        </span>
    </span>
</span>

    </div>


                </div>
            </div>

            
            <div class="col-4 col-lg-3 line-item-quantity">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardQuantitySelector.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardQuantitySelector.isml" -->
<div class="quantity-form">
    <label class="line-item-pricing-info quantity-label" for="quantity-8da2b3e12a7dbbb903dca9d31a">Quantity</label>
    <select class="form-control quantity custom-select"
            data-uuid="8da2b3e12a7dbbb903dca9d31a"
            data-pid="sony-kdl-70xbr7M"
            data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-UpdateQuantity"
            data-pre-select-qty="1.0"
            id="quantity-8da2b3e12a7dbbb903dca9d31a"
            name="quantity-8da2b3e12a7dbbb903dca9d31a"
            aria-label="quantity: 1">
        
            
                <option selected>1</option>
            
        
            
                <option>2</option>
            
        
            
                <option>3</option>
            
        
            
                <option>4</option>
            
        
            
                <option>5</option>
            
        
            
                <option>6</option>
            
        
            
                <option>7</option>
            
        
            
                <option>8</option>
            
        
            
                <option>9</option>
            
        
            
                <option>10</option>
            
        
    </select>
</div>

            </div>

            
            <div class="col-4 line-item-total-price">
                <p class="line-item-price-info">
                    Total
                </p>
                <div class="item-total-8da2b3e12a7dbbb903dca9d31a price">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductTotalPrice.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductTotalPrice.isml" -->
<div class="strike-through
non-adjusted-price"
>
    null
</div>
<div class="pricing line-item-total-price-amount item-total-8da2b3e12a7dbbb903dca9d31a">$14,999.99</div>

                </div>
            </div>

            
            <div class="col-lg-1 hidden-md-down remove-line-item-lg"></div>
        </div>

        
        <div class="line-item-promo item-8da2b3e12a7dbbb903dca9d31a">
            <!-- dwMarker="linclude" dwTemplateTitle="/default/checkout/productCard/productCardProductPromotions.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/checkout/productCard/productCardProductPromotions.isml" -->


        </div>
    
</div>


        
            <div class="hidden-md-down">
                <!-- dwMarker="linclude" dwTemplateTitle="/default/components/deleteButton.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/deleteButton.isml" -->
<button type="button" class="remove-btn-lg remove-product btn btn-light" data-toggle="modal"
        data-target=".cart.cart-page #removeProductModal" data-pid="sony-kdl-70xbr7M"
        data-name="Sony Bravia&reg; XBR&reg; 70&quot; LCD High Definition Television"
        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveProductLineItem"
        data-uuid="8da2b3e12a7dbbb903dca9d31a"
        aria-label="Remove product Sony Bravia&reg; XBR&reg; 70&quot; LCD High Definition Television">
    <span aria-hidden="true">&times;</span>
</button>

            </div>
        
    </div>

    
</div>

                            
                        
                    
                    <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/cartApproachingDiscount.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/cartApproachingDiscount.isml" -->
<div class="approaching-discounts">
    
</div>

                </div>
                
                <div class="col-sm-5 col-md-4 totals">
                    <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/cartPromoCode.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/cartPromoCode.isml" -->
<div class="row">
    <div class="col-12 d-sm-none">
        <p class="optional-promo">Enter promo code (optional)</p>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-AddCoupon" class="promo-code-form" method="GET" name="promo-code-form"><!-- dwMarker="form" dwPipelineTitle="Cart-AddCoupon (app_storefront_base)" dwIsController="true" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Cart.js&amp;start=AddCoupon" -->
            <div class="form-group">
                <label for="couponCode">Enter Promo Code</label>
                <div class="row">
                    <div class="col-7">
                        <input type="text" class="form-control coupon-code-field" id="couponCode" name="couponCode" placeholder="Promo Code">
                        <div class="coupon-error">
                            <span class="coupon-missing-error" id="missingCouponCode" role="alert">No coupon code entered</span>
                            <span class="coupon-error-message" id="invalidCouponCode" role="alert"></span>
                        </div>
                    </div>

                    <input type="hidden" name="csrf_token" value="1HNZWayG5g1QCO5DE0K-9kwnBkEV4mHpVXX_zFgmkGfuqmSJVT9jSWwJ-V73u-GcZyBUraOnyeYWciW0yqsxmMFi3sWNBAOQfKNAfFQVhmrVUSnsBQj_9ALL5uJhB7VYNzQiKLhJdzNofiugf5f1nk_2oUZYJWqfCv8MQXaIXZ8sYUW0ELQ="/>

                    <div class="col-5 promo-code-submit">
                        <button type="submit" class="btn btn-primary btn-block promo-code-btn">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

                    <div class="coupons-and-promos">
                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/cartCouponDisplay.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/cartCouponDisplay.isml" -->


                    </div>
                    <div class="row">
                        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/cartShippingMethodSelection.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/cartShippingMethodSelection.isml" -->
<div class="col-12">
    <div class="form-group">
        <label for="shippingMethods">Shipping</label>
        <select class="custom-select form-control shippingMethods"
                id="shippingMethods" name="shippingMethods"
                data-actionUrl="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-SelectShippingMethod">
            
                
                    <option selected data-shipping-id="001">Ground (7-10 Business Days)</option>
                    
            
                
                    <option data-shipping-id="002">2-Day Express (2 Business Days)</option>
                
            
                
                    <option data-shipping-id="012">Express (2-3 Business Days)</option>
                
            
                
                    <option data-shipping-id="021">USPS (7-10 Business Days)</option>
                
            
                
                    <option data-shipping-id="gajendrashipping">Urgent Delebry (5 hour delebry)</option>
                
            
        </select>
    </div>
</div>

                    </div>
                    <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/cartTotals.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/cartTotals.isml" -->
<div class="row">
    <div class="col-8">
        <p>Shipping cost</p>
    </div>
    <div class="col-4">
        <p class="text-right shipping-cost">$150.99</p>
    </div>
</div>


<div class="row shipping-discount hide-shipping-discount">
    <div class="col-8">
        <p>Shipping Discount</p>
    </div>
    <div class="col-4">
        <p class="text-right shipping-discount-total">- $0.00</p>
    </div>
</div>

<!-- Sales Tax -->
<div class="row">
    <div class="col-8">
        <p>Sales Tax</p>
    </div>
    <div class="col-4">
        <p class="text-right tax-total">$1,343.85</p>
    </div>
</div>


<div class="row order-discount hide-order-discount">
    <div class="col-8">
        <p>Order Discount</p>
    </div>
    <div class="col-4">
        <p class="text-right order-discount-total"> - $0.00</p>
    </div>
</div>

<div class="row">
    <div class="col-8">
        <strong>Estimated Total</strong>
    </div>
    <div class="col-4">
        <p class="text-right grand-total">$28,220.78</p>
    </div>
</div>

                    <div class="row">
                        <div class="col-12 checkout-continue">
                            <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/checkoutButtons.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/checkoutButtons.isml" -->
<div class="mb-sm-3">
    <a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Checkout-Begin"
        class="btn btn-primary btn-block checkout-btn " role="button"><!-- dwMarker="link" dwPipelineTitle="Checkout-Begin (app_storefront_base)" dwIsController="true" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Checkout.js&amp;start=Begin" -->
        Checkout
    </a>
</div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/cartRemoveProductModal.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/cartRemoveProductModal.isml" -->
<div class="modal fade" id="removeProductModal" tabindex="-1" role="dialog" aria-labelledby="removeProductLineItemModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header delete-confirmation-header">
                <h2 class="modal-title" id="removeProductLineItemModal">Remove Product?</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body delete-confirmation-body">
                Are you sure you want to remove the following product from the cart?
                <p class="product-to-remove"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary cart-delete-confirmation-btn"
                        data-dismiss="modal">
                    Yes
                </button>
            </div>
        </div>
    </div>
</div>

        </div>

        <!-- dwMarker="linclude" dwTemplateTitle="/default/cart/cartRemoveCouponModal.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/cartRemoveCouponModal.isml" -->
<div class="modal fade" id="removeCouponModal" tabindex="-1" role="dialog" aria-labelledby="removeCouponLineItemModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header delete-coupon-confirmation-header">
                <h2 class="modal-title" id="removeCouponLineItemModal">Remove Coupon?</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body delete-coupon-confirmation-body">
                Are you sure you want to remove the following coupon from the cart?
                <p class="coupon-to-remove"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary delete-coupon-confirmation-btn"
                        data-dismiss="modal"
                        data-action="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/Cart-RemoveCouponLineItem">
                    Yes
                </button>
            </div>
        </div>
    </div>
</div>

    
    <div class="container">
        <!-- dwMarker="slot" dwContentID="cart-recommendations-m" dwContext="global"-->
	 

	
    </div>

</div>
<!-- dwMarker="linclude" dwTemplateTitle="/default//components/footer/pageFooter.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/footer/pageFooter.isml" -->
<footer id="footercontent">
    <div class="container">
        <div class="footer-container row">
            <div class="footer-item col-sm-3 store">
                <!-- dwMarker="linclude" dwTemplateTitle="/default//components/content/contentAsset.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/content/contentAsset.isml" -->

    
    <!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/content/contentAssetInc.isml&quot;,&quot;IsController&quot;:true,&quot;PipelineURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Include&quot;,&quot;PageProcessingTime&quot;:10,&quot;PageCacheExpires&quot;:&quot;09/20/2022 12:22 pm&quot;,&quot;TemplateTitle&quot;:&quot;/default/components/content/contentAssetInc.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Page-Include (app_storefront_base)&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="Page-Include (app_storefront_base)" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Include" dwIsController="true" dwTemplateTitle="/default/components/content/contentAssetInc.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/content/contentAssetInc.isml" --><div class="content-asset"><!-- dwMarker="content" dwContentID="35772e98cb8271b6c747723aa2" -->
        <a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/s/RefArch-gajendra/stores?lang=en_US&amp;showMap=true&amp;horizontalView=true&amp;isForm=true" class="menu-footer locate-store"><h2>Locate Store</h2></a>
                <span class="content">The Store Locator is designed to help you find the closest store near you.</span>
    </div> <!-- End content-asset -->



            </div>
            <div class="footer-item col-sm-3 collapsible-xs">
                <!-- dwMarker="linclude" dwTemplateTitle="/default//components/content/contentAsset.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/content/contentAsset.isml" -->

    
    <!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/content/contentAssetInc.isml&quot;,&quot;IsController&quot;:true,&quot;PipelineURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Include&quot;,&quot;PageProcessingTime&quot;:6,&quot;PageCacheExpires&quot;:&quot;09/20/2022 12:22 pm&quot;,&quot;TemplateTitle&quot;:&quot;/default/components/content/contentAssetInc.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Page-Include (app_storefront_base)&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="Page-Include (app_storefront_base)" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Include" dwIsController="true" dwTemplateTitle="/default/components/content/contentAssetInc.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/content/contentAssetInc.isml" --><div class="content-asset"><!-- dwMarker="content" dwContentID="816d37c6aebc1615857c8b5e5e" -->
        <div><button class="title btn text-left btn-block d-sm-none" aria-expanded="false" aria-controls="collapsible-account">Account</button><h2 class="title d-none d-sm-block">Account</h2></div>
                <ul id="collapsible-account"class="menu-footer content">
                <li><a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/s/RefArch-gajendra/account?lang=en_US" title="Go to My Account">My Account</a></li>
                <li><a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/s/RefArch-gajendra/orders?lang=en_US" title="Go to Check Order">Check Order</a></li>
                <!-- <li><a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/s/RefArch-gajendra/searchwishlists?lang=en_US" title="Go to Wishlist">Find a Wishlist</a></li> -->
                <!-- <li><a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/GiftRegistry-Landing" title="Go to Gift Registry">Gift Registry</a></li> -->
                </ul><!-- END: footer-account -->
    </div> <!-- End content-asset -->



            </div>
            <div class="footer-item col-sm-3 collapsible-xs">
                <!-- dwMarker="linclude" dwTemplateTitle="/default//components/content/contentAsset.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/content/contentAsset.isml" -->

    
    <!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/content/contentAssetInc.isml&quot;,&quot;IsController&quot;:true,&quot;PipelineURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Include&quot;,&quot;PageProcessingTime&quot;:6,&quot;PageCacheExpires&quot;:&quot;09/20/2022 12:22 pm&quot;,&quot;TemplateTitle&quot;:&quot;/default/components/content/contentAssetInc.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Page-Include (app_storefront_base)&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="Page-Include (app_storefront_base)" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Include" dwIsController="true" dwTemplateTitle="/default/components/content/contentAssetInc.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/content/contentAssetInc.isml" --><div class="content-asset"><!-- dwMarker="content" dwContentID="1a041419d7b34b10428534b0a8" -->
        <div><button class="title btn text-left btn-block d-sm-none" aria-expanded="false" aria-controls="collapsible-customer-service">Customer Service</button><h2 class="title d-none d-sm-block">Customer Service</h2></div>
                <ul id="collapsible-customer-service"class="menu-footer content">
                <li><a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/ContactUs-Landing" title="Go to Contact Us"><!-- dwMarker="link" dwPipelineTitle="ContactUs-Landing (gajendra_cartridge2)" dwIsController="true" dwPipelineURL="http://localhost:60606/target=/gajendra_cartridge2/cartridge/controllers/ContactUs.js&amp;start=Landing" -->Contact Us</a></li>
                <li><a href="#" title="Go to Gift Certificates">Gift Certificates</a></li>
                <li><a href="#" title="Go to Help">Help</a></li>
                <li><a href="#" title="Go to Site Map">Site Map</a></li>
                </ul><!-- END: footer_support -->
    </div> <!-- End content-asset -->



            </div>
            <div class="footer-item col-sm-3 collapsible-xs">
                <!-- dwMarker="linclude" dwTemplateTitle="/default//components/content/contentAsset.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/content/contentAsset.isml" -->

    
    <!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/content/contentAssetInc.isml&quot;,&quot;IsController&quot;:true,&quot;PipelineURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Include&quot;,&quot;PageProcessingTime&quot;:6,&quot;PageCacheExpires&quot;:&quot;09/20/2022 12:22 pm&quot;,&quot;TemplateTitle&quot;:&quot;/default/components/content/contentAssetInc.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Page-Include (app_storefront_base)&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="Page-Include (app_storefront_base)" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Include" dwIsController="true" dwTemplateTitle="/default/components/content/contentAssetInc.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/content/contentAssetInc.isml" --><div class="content-asset"><!-- dwMarker="content" dwContentID="42a1167d2ab455eb8e381e5d1f" -->
        <div><button class="title btn text-left btn-block d-sm-none" aria-expanded="false" aria-controls="collapsible-about">About</button><h2 class="title d-none d-sm-block">About</h2></div>
                <ul id="collapsible-about"class="menu-footer content">
                <li><a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/s/RefArch-gajendra/about%20salesforce/about-us.html?lang=en_US" title="Go to About Us">About Us</a></li>
                <li><a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/s/RefArch-gajendra/customer%20service/privacy%20%26%20security/privacy-policy.html?lang=en_US" title="Go to Privacy">Privacy</a></li>
                <li><a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/s/RefArch-gajendra/customer%20service/terms%20%26%20conditions/terms.html?lang=en_US" title="Go to Terms">Terms</a></li>
                <li><a href="https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/s/RefArch-gajendra/about%20salesforce/join%20us/jobs-landing.html?lang=en_US" title="Go to Jobs">Jobs</a></li>
                </ul><!-- END: footer_about -->
    </div> <!-- End content-asset -->



            </div>
        </div>
        <hr class="hidden-xs-down" />
        <div class="row">
            <div class="col-lg-4 col-sm-5 push-sm-7 push-lg-8 social">
                <!-- dwMarker="slot" dwContentID="footer-column-m" dwContext="global"-->
	 


	
    
        <!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/slots/content/contentAssetBody.isml&quot;,&quot;IsController&quot;:false,&quot;PageProcessingTime&quot;:4,&quot;TemplateTitle&quot;:&quot;/default/slots/content/contentAssetBody.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Internal&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="Internal" dwIsController="false" dwTemplateTitle="/default/slots/content/contentAssetBody.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/slots/content/contentAssetBody.isml" --><ul class="social-links">
                <li><a class="fa fa-linkedin-square fa-3x" aria-label="LinkedIn" href="https://www.linkedin.com/company/demandware" target="_blank"></a></li>
                <li><a class="fa fa-facebook-square fa-3x" aria-label="Facebook" href="https://www.facebook.com/demandware" target="_blank"></a></li>
                <li><a class="fa fa-twitter-square fa-3x" aria-label="Twitter" href="https://twitter.com/demandware" target="_blank"></a></li>
                <li><a class="fa fa-youtube-square fa-3x" aria-label="YouTube" href="https://www.youtube.com/user/demandware" target="_blank"></a></li>
                <li><a class="fa fa-instagram-square fa-3x" aria-label="YouTube" href="https://www.youtube.com/user/demandware" target="_blank"></a></li>

</ul>
    

 
	
                <button class="back-to-top" title="Back to top" aria-label="Back to top">
                    <span class="fa-stack fa-lg" aria-hidden="true">
                        <i class="fa fa-circle fa-inverse fa-stack-2x"></i>
                        <i class="fa fa-arrow-up fa-stack-1x"></i>
                    </span>
                </button>
            </div>
            <div class="col-lg-8 col-sm-7 pull-sm-5 pull-lg-4 copyright-notice">
                <!-- dwMarker="linclude" dwTemplateTitle="/default//components/content/contentAsset.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/content/contentAsset.isml" -->

    
    <!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/content/contentAssetInc.isml&quot;,&quot;IsController&quot;:true,&quot;PipelineURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Include&quot;,&quot;PageProcessingTime&quot;:6,&quot;PageCacheExpires&quot;:&quot;09/20/2022 12:22 pm&quot;,&quot;TemplateTitle&quot;:&quot;/default/components/content/contentAssetInc.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Page-Include (app_storefront_base)&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="Page-Include (app_storefront_base)" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Page.js&amp;start=Include" dwIsController="true" dwTemplateTitle="/default/components/content/contentAssetInc.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/components/content/contentAssetInc.isml" --><div class="content-asset"><!-- dwMarker="content" dwContentID="81e8fdd8befad57a74626eb2f3" -->
        <div class="copyright">&copy; 2004-2019 Salesforce. All Rights Reserved.</div>
                <div class="postscript">This is a demo store only. Orders made will NOT be processed.</div>
		<!-- SFRA 6.1.0 -->
    </div> <!-- End content-asset -->



            </div>
        </div>
    </div>
</footer>

</div>
<div class="error-messaging"></div>
<div class="modal-background"></div>
<!-- dwMarker="linclude" dwTemplateTitle="/default//components/content/contentAsset.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//components/content/contentAsset.isml" -->



<!--[if lt IE 10]>
<script>//common/scripts.isml</script>
<script defer type="text/javascript" src="/on/demandware.static/Sites-RefArch-gajendra-Site/-/en_US/v1663228258630/js/main.js"></script>


<![endif]-->


<!-- dwMarker="dw-object-rinclude" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//common/consent.isml&quot;,&quot;IsController&quot;:true,&quot;PipelineURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/controllers/ConsentTracking.js&amp;start=Check&quot;,&quot;PageProcessingTime&quot;:14,&quot;TemplateTitle&quot;:&quot;/default//common/consent.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;ConsentTracking-Check (app_storefront_base)&quot;}" --><!-- dwMarker="rinclude" dwPipelineTitle="ConsentTracking-Check (app_storefront_base)" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/ConsentTracking.js&amp;start=Check" dwIsController="true" dwTemplateTitle="/default//common/consent.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default//common/consent.isml" --><span class="api-true consented tracking-consent"
    data-caOnline="true"
    data-url="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/ConsentTracking-GetContent?cid=tracking_hint"
    data-reject="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/ConsentTracking-SetConsent?consent=false"
    data-accept="/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/ConsentTracking-SetConsent?consent=true"
    data-acceptText="Yes"
    data-rejectText="No"
    data-heading="Tracking Consent"
    data-tokenName="csrf_token"
    data-token="FYqispbBQSU_V9slsuBqPR5KM4YBXSwWnRW-lKjmQj_0AMirZ6iCuyT0CAlgV6JkCSb9rOWPpbE_l96PAWsHwqD6d-c4p5Q6GJwwFwyFDvBUk9za5buccteGijhz4ORb-gN4atMQgmGh8zHju259v43ManR0--g2vmDTAAUQvuFuhiVDp2Y="
    ></span>

<!-- Demandware Analytics code 1.0 (body_end-analytics-tracking-asynch.js) -->
<script type="text/javascript">//<!--
/* <![CDATA[ */
function trackPage() {
    try{
        var trackingUrl = "https://bjxc-002.sandbox.us01.dx.commercecloud.salesforce.com/on/demandware.store/Sites-RefArch-gajendra-Site/en_US/__Analytics-Start";
        var dwAnalytics = dw.__dwAnalytics.getTracker(trackingUrl);
        if (typeof dw.ac == "undefined") {
            dwAnalytics.trackPageView();
        } else {
            dw.ac.setDWAnalytics(dwAnalytics);
        }
    }catch(err) {};
}
/* ]]> */
// -->
</script>
<script type="text/javascript" src="/on/demandware.static/Sites-RefArch-gajendra-Site/-/en_US/v1663228258630/internal/jscript/dwanalytics-22.2.js" async="async" onload="trackPage()"></script>
<!-- Demandware Active Data (body_end-active_data.js) -->
<script src="/on/demandware.static/Sites-RefArch-gajendra-Site/-/en_US/v1663228258630/internal/jscript/dwac-21.7.js" type="text/javascript" async="async"></script><!-- CQuotient Activity Tracking (body_end-cquotient.js) -->
<script src="https://cdn.cquotient.com/js/v2/gretel.min.js" type="text/javascript" async="async"></script>
</body>
</html>

<!-- dwMarker="dw-object-page" data="{&quot;TemplateURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/cart.isml&quot;,&quot;IsController&quot;:true,&quot;PipelineURL&quot;:&quot;http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Cart.js&amp;start=Show&quot;,&quot;PageProcessingTime&quot;:743,&quot;TemplateTitle&quot;:&quot;/default/cart/cart.isml (app_storefront_base)&quot;,&quot;PipelineTitle&quot;:&quot;Cart-Show (app_storefront_base)&quot;}" --><!-- dwMarker="page" dwPipelineTitle="Cart-Show (app_storefront_base)" dwPipelineURL="http://localhost:60606/target=/app_storefront_base/cartridge/controllers/Cart.js&amp;start=Show" dwIsController="true" dwTemplateTitle="/default/cart/cart.isml (app_storefront_base)" dwTemplateURL="http://localhost:60606/target=/app_storefront_base/cartridge/templates/default/cart/cart.isml" -->