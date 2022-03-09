<!DOCTYPE html>
<!-- saved from url=(0090)http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/ -->
<html lang="pt-BR" class=" js flexbox flexboxlegacy canvas canvastext webgl touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				    
				    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
				    <title>Preenchimento automático do endereço a partir do CEP</title>
				    <meta name="viewport" content="width=device-width, initial-scale=1.0">
				    <link rel="profile" href="http://gmpg.org/xfn/11">
				    <link rel="pingback" href="http://matheuspiscioneri.com.br/blog/xmlrpc.php">

				   <!-- Icons font support for IE6-7  -->
				    <!--[if lt IE 8]>
				      <script src="http://matheuspiscioneri.com.br/blog/wp-content/themes/customizr/inc/assets/css/fonts/lte-ie7.js"></script>
				    <![endif]-->
				    <style type="text/css" id="customizr-inline-fonts">@font-face{font-family:genericons;src:url('http://matheuspiscioneri.com.br/blog/wp-content/themes/customizr/inc/assets/css/fonts/fonts/genericons-regular-webfont.eot');src:url('http://matheuspiscioneri.com.br/blog/wp-content/themes/customizr/inc/assets/css/fonts/fonts/genericons-regular-webfont.eot?#iefix') format('embedded-opentype'),url('http://matheuspiscioneri.com.br/blog/wp-content/themes/customizr/inc/assets/css/fonts/fonts/genericons-regular-webfont.woff') format('woff'),url('http://matheuspiscioneri.com.br/blog/wp-content/themes/customizr/inc/assets/css/fonts/fonts/genericons-regular-webfont.ttf') format('truetype'),url('http://matheuspiscioneri.com.br/blog/wp-content/themes/customizr/inc/assets/css/fonts/fonts/genericons-regular-webfont.svg#genericonsregular') format('svg')}@font-face{font-family:entypo;src:url('http://matheuspiscioneri.com.br/blog/wp-content/themes/customizr/inc/assets/css/fonts/fonts/entypo.eot);src:url(http://matheuspiscioneri.com.br/blog/wp-content/themes/customizr/inc/assets/css/fonts/fonts/entypo.eot?#iefix') format('embedded-opentype'),url('http://matheuspiscioneri.com.br/blog/wp-content/themes/customizr/inc/assets/css/fonts/fonts/entypo.woff') format('woff'),url('http://matheuspiscioneri.com.br/blog/wp-content/themes/customizr/inc/assets/css/fonts/fonts/entypo.ttf') format('truetype'),url('http://matheuspiscioneri.com.br/blog/wp-content/themes/customizr/inc/assets/css/fonts/fonts/entypo.svg#genericonsregular') format('svg')}</style><title>Preenchimento automático do endereço a partir do CEP</title>

<!-- This site is optimized with the Yoast SEO plugin v3.1 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="javascript, jquery, php, cep, consulta, jquery, php, consulta cep, preencher endereço, preencher automático, preencher endereço CEP,">
<meta name="robots" content="noodp">
<link rel="canonical" href="http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="javascript, jquery, php, cep, consulta, jquery, php, consulta cep, preencher endereço, preencher automático, preencher endereço CEP,">
<meta name="twitter:title" content="Preenchimento automático do endereço a partir do CEP">
<meta name="twitter:site" content="@mxczpiscioneri">
<meta name="twitter:image" content="http://matheuspiscioneri.com.br/blog/wp-content/uploads/2013/02/php.jpg">
<meta name="twitter:creator" content="@mxczpiscioneri">
<!-- / Yoast SEO plugin. -->

<link rel="dns-prefetch" href="http://connect.facebook.net/">
<link rel="alternate" type="application/rss+xml" title="Feed de Matheus Piscioneri »" href="http://matheuspiscioneri.com.br/blog/feed/">
<link rel="alternate" type="application/rss+xml" title="Matheus Piscioneri »  Feed de comentários" href="http://matheuspiscioneri.com.br/blog/comments/feed/">
<link rel="alternate" type="application/rss+xml" title="Matheus Piscioneri » Preenchimento automático do endereço a partir do CEP  Feed de comentários" href="http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/feed/">
		<script async="" src="./teste_files/saved_resource"></script><script id="facebook-jssdk" src="./teste_files/sdk.js"></script><script src="./teste_files/ca-pub-0657233283655783.js"></script><script async="" src="./teste_files/analytics.js"></script><script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/matheuspiscioneri.com.br\/blog\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.4.2"}};
			!function(a,b,c){function d(a){var c,d=b.createElement("canvas"),e=d.getContext&&d.getContext("2d"),f=String.fromCharCode;return e&&e.fillText?(e.textBaseline="top",e.font="600 32px Arial","flag"===a?(e.fillText(f(55356,56806,55356,56826),0,0),d.toDataURL().length>3e3):"diversity"===a?(e.fillText(f(55356,57221),0,0),c=e.getImageData(16,16,1,1).data.toString(),e.fillText(f(55356,57221,55356,57343),0,0),c!==e.getImageData(16,16,1,1).data.toString()):("simple"===a?e.fillText(f(55357,56835),0,0):e.fillText(f(55356,57135),0,0),0!==e.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag"),unicode8:d("unicode8"),diversity:d("diversity")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag&&c.supports.unicode8&&c.supports.diversity||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="./teste_files/wp-emoji-release.min.js" type="text/javascript"></script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="crayon-css" href="./teste_files/crayon.min.css" type="text/css" media="all">
<link rel="stylesheet" id="crayon-theme-github-css" href="./teste_files/github.css" type="text/css" media="all">
<link rel="stylesheet" id="crayon-font-droid-sans-mono-css" href="./teste_files/droid-sans-mono.css" type="text/css" media="all">
<link rel="stylesheet" id="tc-gfonts-css" href="./teste_files/css" type="text/css" media="all">
<link rel="stylesheet" id="gglcptch-css" href="./teste_files/gglcptch.css" type="text/css" media="all">
<link rel="stylesheet" id="customizr-skin-css" href="./teste_files/blue.min.css" type="text/css" media="all">
<style id="customizr-skin-inline-css" type="text/css">

                .site-title,.site-description,h1,h2,h3 {
                  font-family : 'Fjalla One';
                  font-weight : 400;
                }

                body,.navbar .nav>li>a {
                  font-family : 'Cantarell';
                  font-weight : 400;
                }

.sticky-enabled .tc-shrink-on .site-logo img {
						height:30px!important;width:auto!important
					}

					.sticky-enabled .tc-shrink-on .brand .site-title {
						font-size:0.6em;opacity:0.8;line-height:1.2em
					}

.tc-rectangular-thumb {
            max-height: 250px;
            height :250px
          }

          .single .tc-rectangular-thumb {
            max-height: 250px;
            height :250px
          }


</style>
<link rel="stylesheet" id="customizr-style-css" href="./teste_files/style.css" type="text/css" media="all">
<link rel="stylesheet" id="fancyboxcss-css" href="./teste_files/jquery.fancybox-1.3.4.min.css" type="text/css" media="all">
<link rel="stylesheet" id="genericons-css" href="./teste_files/genericons.css" type="text/css" media="all">
<link rel="stylesheet" id="jetpack_css-css" href="./teste_files/jetpack.css" type="text/css" media="all">
<script type="text/javascript" src="./teste_files/jquery.js"></script>
<script type="text/javascript" src="./teste_files/jquery-migrate.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var related_posts_js_options = {"post_heading":"h4"};
/* ]]> */
</script>
<script type="text/javascript" src="./teste_files/related-posts.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var CrayonSyntaxSettings = {"version":"_2.7.2_beta","is_admin":"0","ajaxurl":"http:\/\/matheuspiscioneri.com.br\/blog\/wp-admin\/admin-ajax.php","prefix":"crayon-","setting":"crayon-setting","selected":"crayon-setting-selected","changed":"crayon-setting-changed","special":"crayon-setting-special","orig_value":"data-orig-value","debug":""};
var CrayonSyntaxStrings = {"copy":"Pressione %s para Copiar, %s para Colar","minimize":"Click To Expand Code"};
/* ]]> */
</script>
<script type="text/javascript" src="./teste_files/crayon.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var TCParams = {"FancyBoxState":"1","FancyBoxAutoscale":"1","SliderName":"","SliderDelay":"","SliderHover":"1","SmoothScroll":"easeOutExpo","ReorderBlocks":"1","CenterSlides":"1","HasComments":"1","LeftSidebarClass":".span3.left.tc-sidebar","RightSidebarClass":".span3.right.tc-sidebar","LoadModernizr":"1","stickyCustomOffset":"0","stickyHeader":"1","dropdowntoViewport":"0","timerOnScrollAllBrowsers":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="./teste_files/tc-scripts.min.js"></script>
<link rel="https://api.w.org/" href="http://matheuspiscioneri.com.br/blog/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://matheuspiscioneri.com.br/blog/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://matheuspiscioneri.com.br/blog/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.4.2">
<link rel="shortlink" href="http://wp.me/p3e5DB-gf">
<link rel="alternate" type="application/json+oembed" href="http://matheuspiscioneri.com.br/blog/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fmatheuspiscioneri.com.br%2Fblog%2Fpreenchimento-automatico-do-endereco-a-partir-do-cep%2F">
<link rel="alternate" type="text/xml+oembed" href="http://matheuspiscioneri.com.br/blog/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fmatheuspiscioneri.com.br%2Fblog%2Fpreenchimento-automatico-do-endereco-a-partir-do-cep%2F&amp;format=xml">
<meta property="og:site_name" content="Matheus Piscioneri">
<meta property="og:type" content="article">
<meta property="og:locale" content="pt_BR">
<meta property="fb:app_id" content="119365834914569">
<meta property="og:url" content="http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/">
<meta property="og:title" content="Preenchimento automático do endereço a partir do CEP">
<meta property="og:description" content="Como criar uma funcionalidade para um formulário de cadastro onde o usuário informa o CEP do seu endereço e os campos rua, bairro, cidade e estado são preenchidos automaticamente. Essa técnica é bastante utilizada hoje em dia em diversos sites da web e traz ótimos resultados uma vez que você garante a integridade e padronização das informações que…">
<meta property="article:published_time" content="2013-05-07T20:56:02+00:00">
<meta property="article:modified_time" content="2013-05-20T17:25:05+00:00">
<meta property="article:author" content="http://matheuspiscioneri.com.br/blog/author/matheuspis1/">
<meta property="article:section" content="Ajax">
<meta property="article:tag" content="Html">
<meta property="article:tag" content="Javascript">
<meta property="article:tag" content="JQuery">
<meta property="article:tag" content="XML">
<meta property="fb:profile_id" content="100002445240415">

<!-- BEGIN GADWP v4.9.2 Universal Tracking - https://deconf.com/google-analytics-dashboard-wordpress/ -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-33163619-1', 'auto');
  ga('send', 'pageview');
</script>

<!-- END GADWP Universal Tracking -->

				    <!--Icons size hack for IE8 and less -->
				    <!--[if lt IE 9]>
				      <link href="http://matheuspiscioneri.com.br/blog/wp-content/themes/customizr/inc/assets/css/fonts/ie8-hacks.css" rel="stylesheet" type="text/css"/>
				    <![endif]-->
				<script type="text/javascript" async="" src="./teste_files/embed.js"></script><script async="" type="text/javascript" src="./teste_files/count.js"></script><link rel="stylesheet" type="text/css" id="gravatar-card-css" href="./teste_files/hovercard.css"><link rel="stylesheet" type="text/css" id="gravatar-card-services-css" href="./teste_files/services.css"><style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_close_icon:active{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_loader{background-color:#f6f7f8;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #3a5795;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{width:auto;height:auto;min-height:initial;min-width:initial;background:none}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{color:#fff;display:block;padding-top:20px;clear:both;font-size:18px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;bottom:0;left:0;right:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #2f477a;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f8;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/yD/r/t-wz8gw1xG1.png);background-repeat:no-repeat;background-position:50% 50%;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://fbstatic-a.akamaihd.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}</style><script src="./teste_files/alfie.f51946af45e0b561c60f768335c9eb79.js" async="" charset="UTF-8"></script></head>
				
	<body class="single single-post postid-1007 single-format-standard tc-fade-hover-links tc-sticky-header tc-transparent-on-scroll chrome sticky-enabled" itemscope="" itemtype="http://schema.org/WebPage">
		
		
	   	<header class="tc-header clearfix row-fluid tc-tagline-off tc-title-logo-on  tc-shrink-on tc-menu-on logo-centered" role="banner" style="height: auto; top: 0px;">
			      <div class="brand span3 pull-left ">

        <h1><a class="site-title" href="http://matheuspiscioneri.com.br/blog/" title="Matheus Piscioneri | Blog com dicas e tutoriais de programação e desenvolvimento">Matheus Piscioneri</a></h1>
      </div> <!-- brand span3 pull-left -->
            	<div class="navbar-wrapper clearfix span9 tc-submenu-fade tc-submenu-move tc-open-on-click pull-menu-right">
        	<div class="navbar resp">
          		<div class="navbar-inner" role="navigation">
            		<div class="row-fluid">
              		<div class="social-block span5"><a class="social-icon icon-feed" href="http://matheuspiscioneri.com.br/blog/feed/rss/" title="Assine nosso canal rss"></a><a class="social-icon icon-twitter" href="https://twitter.com/mxczpiscioneri" title="Siga-me no Twitter" target="_blank"></a><a class="social-icon icon-facebook" href="https://www.facebook.com/mxczpiscioneri" title="Siga-me no Facebook" target="_blank"></a><a class="social-icon icon-google" href="https://plus.google.com/u/0/+MatheusPiscioneri" title="Siga-me no Google+" target="_blank"></a><a class="social-icon icon-linkedin" href="http://br.linkedin.com/pub/matheus-piscioneri/14/67a/191" title="Siga-me no LinkedIn" target="_blank"></a></div><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><div class="nav-collapse collapse"><div class="menu-menu_portifolio-container"><ul id="menu-menu_portifolio-2" class="nav"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1822"><a href="http://matheuspiscioneri.com.br/">Portfolio</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1845"><a href="http://matheuspiscioneri.com.br/blog">Blog</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-1844"><a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="http://matheuspiscioneri.com.br/blog/categorias/">Categorias <b class="caret"></b></a>
<ul class="dropdown-menu">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1825"><a href="http://matheuspiscioneri.com.br/blog/android-2/">Android</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children dropdown-submenu menu-item-1826"><a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="http://matheuspiscioneri.com.br/blog/banco-de-dados-2/">Banco de Dados</a>
<ul class="dropdown-menu">
		<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1827"><a href="http://matheuspiscioneri.com.br/blog/banco-de-dados-2/mysql/">MySQL</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1828"><a href="http://matheuspiscioneri.com.br/blog/banco-de-dados-2/postgresql/">PostgreSQL</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1829"><a href="http://matheuspiscioneri.com.br/blog/css/">Css</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1830"><a href="http://matheuspiscioneri.com.br/blog/cursos/">Cursos</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1831"><a href="http://matheuspiscioneri.com.br/blog/diversos/">Diversos</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1832"><a href="http://matheuspiscioneri.com.br/blog/download/">Download</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-1833"><a href="http://matheuspiscioneri.com.br/blog/html/">Html</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1834"><a href="http://matheuspiscioneri.com.br/blog/java/">Java</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-has-children dropdown-submenu menu-item-1835"><a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="http://matheuspiscioneri.com.br/blog/javascript/">Javascript</a>
<ul class="dropdown-menu">
		<li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-1836"><a href="http://matheuspiscioneri.com.br/blog/javascript/ajax/">Ajax</a></li>
		<li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-1837"><a href="http://matheuspiscioneri.com.br/blog/javascript/jquery/">JQuery</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1838"><a href="http://matheuspiscioneri.com.br/blog/linux/">Linux</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children dropdown-submenu menu-item-1839"><a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="http://matheuspiscioneri.com.br/blog/php/">Php</a>
<ul class="dropdown-menu">
		<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1840"><a href="http://matheuspiscioneri.com.br/blog/php/cakephp/">Cakephp</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1841"><a href="http://matheuspiscioneri.com.br/blog/seo/">SEO</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1842"><a href="http://matheuspiscioneri.com.br/blog/wordpress/">WordPress</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-1843"><a href="http://matheuspiscioneri.com.br/blog/xml/">XML</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1823"><a href="http://matheuspiscioneri.com.br/perfil/">Perfil</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1824"><a href="http://matheuspiscioneri.com.br/contato/">Contato</a></li>
</ul></div></div>          			</div>
          		</div><!-- /.navbar-inner -->
        	</div><!-- /.navbar resp -->
      	</div><!-- /.navbar-wrapper -->
    			</header>
		<div id="tc-reset-margin-top" class="container-fluid" style="display: block; margin-top: 58px;"></div><div id="main-wrapper" class="container">

    <div class="tc-hot-crumble container" role="navigation"><div class="row"><div class="span12"><div class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb"><span class="trail-begin"><a href="http://matheuspiscioneri.com.br/blog" title="Matheus Piscioneri" rel="home" class="trail-begin">Inicio</a></span> <span class="sep">»</span> <a href="http://matheuspiscioneri.com.br/blog/javascript/" title="Javascript">Javascript</a> <span class="sep">»</span> <a href="http://matheuspiscioneri.com.br/blog/javascript/ajax/" title="Ajax">Ajax</a> <span class="sep">»</span> <span class="trail-end">Preenchimento automático do endereço a partir do CEP</span></div></div></div></div>    
    <div class="container" role="main">
        <div class="row column-content-wrapper">

                     
        <div class="span3 left tc-sidebar">
           <div id="left" class="widget-area" role="complementary">
                                                      <aside id="categories-5" class="widget widget_categories"><h3 class="widget-title">Categorias</h3>		<ul>
	<li class="cat-item cat-item-270"><a href="http://matheuspiscioneri.com.br/blog/javascript/ajax/">Ajax</a>
</li>
	<li class="cat-item cat-item-478"><a href="http://matheuspiscioneri.com.br/blog/android-2/">Android</a>
</li>
	<li class="cat-item cat-item-485"><a href="http://matheuspiscioneri.com.br/blog/asp/">ASP</a>
</li>
	<li class="cat-item cat-item-477"><a href="http://matheuspiscioneri.com.br/blog/banco-de-dados-2/">Banco de Dados</a>
</li>
	<li class="cat-item cat-item-7"><a href="http://matheuspiscioneri.com.br/blog/php/cakephp/">Cakephp</a>
</li>
	<li class="cat-item cat-item-179"><a href="http://matheuspiscioneri.com.br/blog/css/">Css</a>
</li>
	<li class="cat-item cat-item-343"><a href="http://matheuspiscioneri.com.br/blog/cursos/">Cursos</a>
</li>
	<li class="cat-item cat-item-451"><a href="http://matheuspiscioneri.com.br/blog/diversos/">Diversos</a>
</li>
	<li class="cat-item cat-item-94"><a href="http://matheuspiscioneri.com.br/blog/download/">Download</a>
</li>
	<li class="cat-item cat-item-8"><a href="http://matheuspiscioneri.com.br/blog/html/">Html</a>
</li>
	<li class="cat-item cat-item-3"><a href="http://matheuspiscioneri.com.br/blog/java/">Java</a>
</li>
	<li class="cat-item cat-item-5"><a href="http://matheuspiscioneri.com.br/blog/javascript/">Javascript</a>
</li>
	<li class="cat-item cat-item-222"><a href="http://matheuspiscioneri.com.br/blog/javascript/jquery/">JQuery</a>
</li>
	<li class="cat-item cat-item-267"><a href="http://matheuspiscioneri.com.br/blog/linux/">Linux</a>
</li>
	<li class="cat-item cat-item-9"><a href="http://matheuspiscioneri.com.br/blog/banco-de-dados-2/mysql/">MySQL</a>
</li>
	<li class="cat-item cat-item-4"><a href="http://matheuspiscioneri.com.br/blog/php/">Php</a>
</li>
	<li class="cat-item cat-item-165"><a href="http://matheuspiscioneri.com.br/blog/banco-de-dados-2/postgresql/">PostgreSQL</a>
</li>
	<li class="cat-item cat-item-479"><a href="http://matheuspiscioneri.com.br/blog/seo/">SEO</a>
</li>
	<li class="cat-item cat-item-6"><a href="http://matheuspiscioneri.com.br/blog/wordpress/">Wordpress</a>
</li>
	<li class="cat-item cat-item-115"><a href="http://matheuspiscioneri.com.br/blog/xml/">XML</a>
</li>
		</ul>
</aside><aside id="text-7" class="widget widget_text">			<div class="textwidget"><div style="text-align: center; margin-top: 50px;"><script async="" src="./teste_files/adsbygoogle.js"></script>
<!-- Anuncio1 -->
<ins class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-0657233283655783" data-ad-slot="3329139388" data-adsbygoogle-status="done"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"><ins id="aswift_0_anchor" style="display:block;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"><iframe width="160" height="600" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;"></iframe></ins></ins></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div></div>
		</aside>                                              </div><!-- #left or #right-->
        </div><!--.tc-sidebar -->

                        
                <div id="content" class="span9 article-container">
                    
                    
                        
                                                                                    
                                                                    <article id="post-1007" class="row-fluid post-1007 post type-post status-publish format-standard hentry category-ajax category-html category-javascript category-jquery category-xml">
                                                <header class="entry-header">
          <h1 class="entry-title format-icon">Preenchimento automático do endereço a partir do CEP <span class="comments-link"><a href="http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/#tc-comment-title" title="Comentário(s) em Preenchimento automático do endereço a partir do CEP"><span class="tc-comment-bubble fs1 icon-bubble"></span><span class="inner">4</span></a></span></h1>            <div class="entry-meta">
                This entry was posted in <a class="btn btn-mini" href="http://matheuspiscioneri.com.br/blog/javascript/ajax/" title="Ver todos os posts em Ajax"> Ajax </a><a class="btn btn-mini" href="http://matheuspiscioneri.com.br/blog/html/" title="Ver todos os posts em Html"> Html </a><a class="btn btn-mini" href="http://matheuspiscioneri.com.br/blog/javascript/" title="Ver todos os posts em Javascript"> Javascript </a><a class="btn btn-mini" href="http://matheuspiscioneri.com.br/blog/javascript/jquery/" title="Ver todos os posts em JQuery"> JQuery </a><a class="btn btn-mini" href="http://matheuspiscioneri.com.br/blog/xml/" title="Ver todos os posts em XML"> XML </a> on <a href="http://matheuspiscioneri.com.br/blog/2013/05/07/" title="20:56" rel="bookmark"><time class="entry-date updated" datetime="2013-05-07T20:56:02+00:00">07/05/2013</time></a> <span class="by-author">by <span class="author vcard"><a class="url fn n" href="http://matheuspiscioneri.com.br/blog/author/matheuspis1/" title="Ver todas as mensagens de Matheus Piscioneri" rel="author">Matheus Piscioneri</a></span></span>             </div><!-- .entry-meta -->
            <hr class="featurette-divider __before_content">        </header>
            

          <section class="entry-content ">
              <p>Como criar uma funcionalidade para um formulário de cadastro onde o usuário informa o&nbsp;<strong>CEP</strong>&nbsp;do seu endereço e os campos rua, bairro, cidade e estado são<strong>&nbsp;preenchidos automaticamente.</strong></p>
<p>Essa técnica é bastante utilizada hoje em dia em diversos sites da web e traz ótimos resultados uma vez que você garante a integridade e padronização das informações que estão sendo salvas, além de facilitar bastante a vida do usuário.Para auxiliar esse processo, o site&nbsp;<a title="Visite o site da República Virtual" href="http://cep.republicavirtual.com.br/" target="_blank"><strong>http://cep.republicavirtual.com.br</strong></a>&nbsp;disponibiliza uma base de dados(<a title="Download da base de dados com todos os CEPs do Brasil" href="http://www.republicavirtual.com.br/cep/download/cep.sql.bz2" target="_blank">Clique aqui para baixar</a>) com todos os CEPs do Brasil para você fazer o<strong>download</strong>&nbsp;e acoplar ao seu projeto e também um&nbsp;<strong>webservice&nbsp;</strong>caso deseje fazer uma requisição. O webservice está configurado para responder em&nbsp;<strong>XML, QueryString&nbsp;</strong>e<strong>JavaScript.</strong></p>
<p>No nosso exemplo, utilizaremos a segunda opção. Criaremos nosso formulário e faremos uma requisição AJAX com o webservice da República Virtual para solicitar os dados no formato XML. Para facilitar a utilização de AJAX, usarei o&nbsp;<strong>JQuery.</strong></p>
<p>Antes de começarmos a implementação, organize os seus arquivos da seguinte maneira:</p>
<ul>
<li><strong>index.php :&nbsp;</strong>página principal (onde vai o formulário);</li>
<li><strong>jquery.js</strong><strong>:&nbsp;</strong>plugin javascript para auxiliar;</li>
<li><strong>cep.js :&nbsp;</strong>arquivo javascript onde será configurado a requisição AJAX;</li>
<li><strong>consultar_cep.php</strong> : Arquivo que fará a requisição com o WebService.</li>
</ul>
<p>Primeiramente, vamos implementar o arquivo&nbsp;<strong>index.php&nbsp;</strong>com o formulário de cadastro:</p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->

		<div id="crayon-56d79e8a29445322072492" class="crayon-syntax crayon-theme-github crayon-font-droid-sans-mono crayon-os-pc print-yes notranslate crayon-wrapped" data-settings=" minimize scroll-mouseover wrap" style="margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important; height: auto;">
		
			<div class="crayon-toolbar" data-settings=" show" style="font-size: 12px !important;height: 18px !important; line-height: 18px !important;"><span class="crayon-title"></span>
			<div class="crayon-tools" style="font-size: 12px !important;height: 18px !important; line-height: 18px !important;"><span class="crayon-mixed-highlight" title="Contem Várias Linguagens"></span><div class="crayon-button crayon-nums-button crayon-pressed" title="Alternar números de linha"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-plain-button" title="Exibir código simples"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-wrap-button crayon-pressed" title="Alternar quebras de linha"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-expand-button" title="Expand Code" style="display: none;"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-copy-button" title="Copy"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-popup-button" title="Abrir código em nova janela"><div class="crayon-button-icon"></div></div></div></div>
			<div class="crayon-info" style="min-height: 16.8px !important; line-height: 16.8px !important;"></div>
			<div class="crayon-plain-wrap"><textarea class="crayon-plain print-no" data-settings="dblclick" readonly="" style="tab-size: 4; font-size: 12px !important; line-height: 15px !important; z-index: 0; opacity: 0; overflow: hidden;">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Consulta de CEP - Matheus Piscioneri&lt;/title&gt;
        &lt;meta http-equiv="Content-Type" content="text/html; charset=UTF-8"&gt;
        &lt;script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'&gt;&lt;/script&gt;
        &lt;script type='text/javascript' src='cep.js'&gt;&lt;/script&gt;

    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Preenchimento automático com consulta de CEP&lt;/h1&gt;
        &lt;form id="form1" class="form1" method="post"&gt;
            &lt;label&gt;CEP (Somente números):&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" name="cep" id="cep" maxlength="8" /&gt;
            &lt;br /&gt;&lt;br /&gt;

            &lt;label&gt;Rua:&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" name="rua" id="rua" size="45" /&gt;
            &lt;br /&gt;&lt;br /&gt;

            &lt;label&gt;Número:&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" name="numero" id="numero" size="5" /&gt;
            &lt;br /&gt;&lt;br /&gt;

            &lt;label&gt;Bairro:&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" name="bairro" id="bairro" size="25" /&gt;
            &lt;br /&gt;&lt;br /&gt;

            &lt;label&gt;Cidade:&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" name="cidade" id="cidade" size="25" /&gt;
            &lt;br /&gt;&lt;br /&gt;

            &lt;label&gt;Estado:&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" name="estado" id="estado" size="2" /&gt;
            &lt;br /&gt;&lt;br /&gt;

            &lt;input type="submit" value="Salvar Dados" /&gt;
        &lt;/form&gt;
    &lt;/body&gt;
&lt;/html&gt;</textarea></div>
			<div class="crayon-main" style="position: relative; z-index: 1; overflow: hidden;">
				<table class="crayon-table">
					<tbody><tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-1" style="height: 15px;">1</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-2" style="height: 15px;">2</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-3" style="height: 15px;">3</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-4" style="height: 15px;">4</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-5" style="height: 15px;">5</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-6" style="height: 15px;">6</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-7" style="height: 15px;">7</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-8" style="height: 15px;">8</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-9" style="height: 15px;">9</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-10" style="height: 15px;">10</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-11" style="height: 15px;">11</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-12" style="height: 15px;">12</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-13" style="height: 15px;">13</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-14" style="height: 15px;">14</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-15" style="height: 15px;">15</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-16" style="height: 15px;">16</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-17" style="height: 15px;">17</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-18" style="height: 15px;">18</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-19" style="height: 15px;">19</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-20" style="height: 15px;">20</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-21" style="height: 15px;">21</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-22" style="height: 15px;">22</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-23" style="height: 15px;">23</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-24" style="height: 15px;">24</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-25" style="height: 15px;">25</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-26" style="height: 15px;">26</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-27" style="height: 15px;">27</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-28" style="height: 15px;">28</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-29" style="height: 15px;">29</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-30" style="height: 15px;">30</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-31" style="height: 15px;">31</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-32" style="height: 15px;">32</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-33" style="height: 15px;">33</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-34" style="height: 15px;">34</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-35" style="height: 15px;">35</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-36" style="height: 15px;">36</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-37" style="height: 15px;">37</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-38" style="height: 15px;">38</div><div class="crayon-num" data-line="crayon-56d79e8a29445322072492-39" style="height: 15px;">39</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29445322072492-40" style="height: 15px;">40</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-56d79e8a29445322072492-1"><span class="crayon-o">&lt;</span><span class="crayon-o">!</span><span class="crayon-e">DOCTYPE </span><span class="crayon-v">html</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-2"><span class="crayon-o">&lt;</span><span class="crayon-v">html</span><span class="crayon-o">&gt;</span></div><div class="crayon-line" id="crayon-56d79e8a29445322072492-3"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">head</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-4"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">title</span><span class="crayon-o">&gt;</span><span class="crayon-e">Consulta </span><span class="crayon-e">de </span><span class="crayon-v">CEP</span><span class="crayon-h"> </span><span class="crayon-o">-</span><span class="crayon-h"> </span><span class="crayon-e">Matheus </span><span class="crayon-v">Piscioneri</span><span class="crayon-o">&lt;</span><span class="crayon-o">/</span><span class="crayon-v">title</span><span class="crayon-o">&gt;</span></div><div class="crayon-line" id="crayon-56d79e8a29445322072492-5"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-e">meta </span><span class="crayon-v">http</span><span class="crayon-o">-</span><span class="crayon-v">equiv</span><span class="crayon-o">=</span><span class="crayon-s">"Content-Type"</span><span class="crayon-h"> </span><span class="crayon-v">content</span><span class="crayon-o">=</span><span class="crayon-s">"text/html; charset=UTF-8"</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-6"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-ta">&lt;script </span><span class="crayon-e ">type</span><span class="crayon-o">=</span><span class="crayon-s">'text/javascript'</span><span class="crayon-h"> </span><span class="crayon-e ">src</span><span class="crayon-o">=</span><span class="crayon-s">'//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'</span><span class="crayon-o">&gt;</span><span class="crayon-ta">&lt;/script&gt;</span></div><div class="crayon-line" id="crayon-56d79e8a29445322072492-7"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-ta">&lt;script </span><span class="crayon-e ">type</span><span class="crayon-o">=</span><span class="crayon-s">'text/javascript'</span><span class="crayon-h"> </span><span class="crayon-e ">src</span><span class="crayon-o">=</span><span class="crayon-s">'cep.js'</span><span class="crayon-o">&gt;</span><span class="crayon-ta">&lt;/script&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-8">&nbsp;</div><div class="crayon-line" id="crayon-56d79e8a29445322072492-9"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-o">/</span><span class="crayon-v">head</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-10"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">body</span><span class="crayon-o">&gt;</span></div><div class="crayon-line" id="crayon-56d79e8a29445322072492-11"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">h1</span><span class="crayon-o">&gt;</span><span class="crayon-e">Preenchimento </span><span class="crayon-i">autom</span>á<span class="crayon-e">tico </span><span class="crayon-e">com </span><span class="crayon-e">consulta </span><span class="crayon-e">de </span><span class="crayon-v">CEP</span><span class="crayon-o">&lt;</span><span class="crayon-o">/</span><span class="crayon-v">h1</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-12"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-e">form </span><span class="crayon-v">id</span><span class="crayon-o">=</span><span class="crayon-s">"form1"</span><span class="crayon-h"> </span><span class="crayon-t">class</span><span class="crayon-o">=</span><span class="crayon-s">"form1"</span><span class="crayon-h"> </span><span class="crayon-v">method</span><span class="crayon-o">=</span><span class="crayon-s">"post"</span><span class="crayon-o">&gt;</span></div><div class="crayon-line" id="crayon-56d79e8a29445322072492-13"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">label</span><span class="crayon-o">&gt;</span><span class="crayon-e">CEP</span><span class="crayon-h"> </span><span class="crayon-sy">(</span><span class="crayon-i">Somente</span><span class="crayon-h"> </span><span class="crayon-i">n</span>ú<span class="crayon-v">meros</span><span class="crayon-sy">)</span><span class="crayon-o">:</span><span class="crayon-o">&lt;</span><span class="crayon-o">/</span><span class="crayon-v">label</span><span class="crayon-o">&gt;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-14"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-e">input </span><span class="crayon-v">type</span><span class="crayon-o">=</span><span class="crayon-s">"text"</span><span class="crayon-h"> </span><span class="crayon-v">name</span><span class="crayon-o">=</span><span class="crayon-s">"cep"</span><span class="crayon-h"> </span><span class="crayon-v">id</span><span class="crayon-o">=</span><span class="crayon-s">"cep"</span><span class="crayon-h"> </span><span class="crayon-v">maxlength</span><span class="crayon-o">=</span><span class="crayon-s">"8"</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line" id="crayon-56d79e8a29445322072492-15"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-16">&nbsp;</div><div class="crayon-line" id="crayon-56d79e8a29445322072492-17"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">label</span><span class="crayon-o">&gt;</span><span class="crayon-v">Rua</span><span class="crayon-o">:</span><span class="crayon-o">&lt;</span><span class="crayon-o">/</span><span class="crayon-v">label</span><span class="crayon-o">&gt;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-18"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-e">input </span><span class="crayon-v">type</span><span class="crayon-o">=</span><span class="crayon-s">"text"</span><span class="crayon-h"> </span><span class="crayon-v">name</span><span class="crayon-o">=</span><span class="crayon-s">"rua"</span><span class="crayon-h"> </span><span class="crayon-v">id</span><span class="crayon-o">=</span><span class="crayon-s">"rua"</span><span class="crayon-h"> </span><span class="crayon-v">size</span><span class="crayon-o">=</span><span class="crayon-s">"45"</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line" id="crayon-56d79e8a29445322072492-19"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-20">&nbsp;</div><div class="crayon-line" id="crayon-56d79e8a29445322072492-21"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">label</span><span class="crayon-o">&gt;</span><span class="crayon-i">N</span>ú<span class="crayon-v">mero</span><span class="crayon-o">:</span><span class="crayon-o">&lt;</span><span class="crayon-o">/</span><span class="crayon-v">label</span><span class="crayon-o">&gt;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-22"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-e">input </span><span class="crayon-v">type</span><span class="crayon-o">=</span><span class="crayon-s">"text"</span><span class="crayon-h"> </span><span class="crayon-v">name</span><span class="crayon-o">=</span><span class="crayon-s">"numero"</span><span class="crayon-h"> </span><span class="crayon-v">id</span><span class="crayon-o">=</span><span class="crayon-s">"numero"</span><span class="crayon-h"> </span><span class="crayon-v">size</span><span class="crayon-o">=</span><span class="crayon-s">"5"</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line" id="crayon-56d79e8a29445322072492-23"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-24">&nbsp;</div><div class="crayon-line" id="crayon-56d79e8a29445322072492-25"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">label</span><span class="crayon-o">&gt;</span><span class="crayon-v">Bairro</span><span class="crayon-o">:</span><span class="crayon-o">&lt;</span><span class="crayon-o">/</span><span class="crayon-v">label</span><span class="crayon-o">&gt;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-26"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-e">input </span><span class="crayon-v">type</span><span class="crayon-o">=</span><span class="crayon-s">"text"</span><span class="crayon-h"> </span><span class="crayon-v">name</span><span class="crayon-o">=</span><span class="crayon-s">"bairro"</span><span class="crayon-h"> </span><span class="crayon-v">id</span><span class="crayon-o">=</span><span class="crayon-s">"bairro"</span><span class="crayon-h"> </span><span class="crayon-v">size</span><span class="crayon-o">=</span><span class="crayon-s">"25"</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line" id="crayon-56d79e8a29445322072492-27"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-28">&nbsp;</div><div class="crayon-line" id="crayon-56d79e8a29445322072492-29"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">label</span><span class="crayon-o">&gt;</span><span class="crayon-v">Cidade</span><span class="crayon-o">:</span><span class="crayon-o">&lt;</span><span class="crayon-o">/</span><span class="crayon-v">label</span><span class="crayon-o">&gt;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-30"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-e">input </span><span class="crayon-v">type</span><span class="crayon-o">=</span><span class="crayon-s">"text"</span><span class="crayon-h"> </span><span class="crayon-v">name</span><span class="crayon-o">=</span><span class="crayon-s">"cidade"</span><span class="crayon-h"> </span><span class="crayon-v">id</span><span class="crayon-o">=</span><span class="crayon-s">"cidade"</span><span class="crayon-h"> </span><span class="crayon-v">size</span><span class="crayon-o">=</span><span class="crayon-s">"25"</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line" id="crayon-56d79e8a29445322072492-31"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-32">&nbsp;</div><div class="crayon-line" id="crayon-56d79e8a29445322072492-33"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">label</span><span class="crayon-o">&gt;</span><span class="crayon-v">Estado</span><span class="crayon-o">:</span><span class="crayon-o">&lt;</span><span class="crayon-o">/</span><span class="crayon-v">label</span><span class="crayon-o">&gt;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-34"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-e">input </span><span class="crayon-v">type</span><span class="crayon-o">=</span><span class="crayon-s">"text"</span><span class="crayon-h"> </span><span class="crayon-v">name</span><span class="crayon-o">=</span><span class="crayon-s">"estado"</span><span class="crayon-h"> </span><span class="crayon-v">id</span><span class="crayon-o">=</span><span class="crayon-s">"estado"</span><span class="crayon-h"> </span><span class="crayon-v">size</span><span class="crayon-o">=</span><span class="crayon-s">"2"</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line" id="crayon-56d79e8a29445322072492-35"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span><span class="crayon-o">&lt;</span><span class="crayon-v">br</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-36">&nbsp;</div><div class="crayon-line" id="crayon-56d79e8a29445322072492-37"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-e">input </span><span class="crayon-v">type</span><span class="crayon-o">=</span><span class="crayon-s">"submit"</span><span class="crayon-h"> </span><span class="crayon-v">value</span><span class="crayon-o">=</span><span class="crayon-s">"Salvar Dados"</span><span class="crayon-h"> </span><span class="crayon-o">/</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-38"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-o">/</span><span class="crayon-v">form</span><span class="crayon-o">&gt;</span></div><div class="crayon-line" id="crayon-56d79e8a29445322072492-39"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-o">&lt;</span><span class="crayon-o">/</span><span class="crayon-v">body</span><span class="crayon-o">&gt;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29445322072492-40"><span class="crayon-o">&lt;</span><span class="crayon-o">/</span><span class="crayon-v">html</span><span class="crayon-o">&gt;</span></div></div></td>
					</tr>
				</tbody></table>
			</div>
		</div>
<!-- [Format Time: 0.0188 seconds] -->
<p>&nbsp;</p>
<p>Note que é importante darmos&nbsp;<strong>nome</strong>&nbsp;e&nbsp;<strong>id</strong>&nbsp;para todos os campos de texto do formulário pois isso facilita a manipulação de seus valores por meio do&nbsp;<strong>js/jquery.</strong></p>
<p>Agora vamos configurar a requisição AJAX dentro do arquivo&nbsp;<strong>cep.js :</strong></p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->

		<div id="crayon-56d79e8a29470541874587" class="crayon-syntax crayon-theme-github crayon-font-droid-sans-mono crayon-os-pc print-yes notranslate crayon-wrapped" data-settings=" minimize scroll-mouseover wrap" style="margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important; height: auto;">
		
			<div class="crayon-toolbar" data-settings=" show" style="font-size: 12px !important;height: 18px !important; line-height: 18px !important;"><span class="crayon-title"></span>
			<div class="crayon-tools" style="font-size: 12px !important;height: 18px !important; line-height: 18px !important;"><div class="crayon-button crayon-nums-button crayon-pressed" title="Alternar números de linha"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-plain-button" title="Exibir código simples"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-wrap-button crayon-pressed" title="Alternar quebras de linha"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-expand-button" title="Expand Code" style="display: none;"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-copy-button" title="Copy"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-popup-button" title="Abrir código em nova janela"><div class="crayon-button-icon"></div></div><span class="crayon-language">JavaScript</span></div></div>
			<div class="crayon-info" style="min-height: 16.8px !important; line-height: 16.8px !important; margin-top: -17px; display: none;"></div>
			<div class="crayon-plain-wrap"><textarea class="crayon-plain print-no" data-settings="dblclick" readonly="" style="tab-size: 4; font-size: 12px !important; line-height: 15px !important; z-index: 0; opacity: 0; overflow: hidden;">$(document).ready( function() {
   /* Executa a requisição quando o campo CEP perder o foco */
   $('#cep').blur(function(){
           /* Configura a requisição AJAX */
           $.ajax({
                url : 'consultar_cep.php', /* URL que será chamada */ 
                type : 'POST', /* Tipo da requisição */ 
                data: 'cep=' + $('#cep').val(), /* dado que será enviado via POST */
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                    if(data.sucesso == 1){
                        $('#rua').val(data.rua);
                        $('#bairro').val(data.bairro);
                        $('#cidade').val(data.cidade);
                        $('#estado').val(data.estado);

                        $('#numero').focus();
                    }
                }
           });   
   return false;    
   })
});</textarea></div>
			<div class="crayon-main" style="position: relative; z-index: 1; overflow: hidden;">
				<table class="crayon-table">
					<tbody><tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-56d79e8a29470541874587-1" style="height: 15px;">1</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29470541874587-2" style="height: 15px;">2</div><div class="crayon-num" data-line="crayon-56d79e8a29470541874587-3" style="height: 15px;">3</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29470541874587-4" style="height: 15px;">4</div><div class="crayon-num" data-line="crayon-56d79e8a29470541874587-5" style="height: 15px;">5</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29470541874587-6" style="height: 15px;">6</div><div class="crayon-num" data-line="crayon-56d79e8a29470541874587-7" style="height: 15px;">7</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29470541874587-8" style="height: 15px;">8</div><div class="crayon-num" data-line="crayon-56d79e8a29470541874587-9" style="height: 15px;">9</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29470541874587-10" style="height: 15px;">10</div><div class="crayon-num" data-line="crayon-56d79e8a29470541874587-11" style="height: 15px;">11</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29470541874587-12" style="height: 15px;">12</div><div class="crayon-num" data-line="crayon-56d79e8a29470541874587-13" style="height: 15px;">13</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29470541874587-14" style="height: 15px;">14</div><div class="crayon-num" data-line="crayon-56d79e8a29470541874587-15" style="height: 15px;">15</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29470541874587-16" style="height: 15px;">16</div><div class="crayon-num" data-line="crayon-56d79e8a29470541874587-17" style="height: 15px;">17</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29470541874587-18" style="height: 15px;">18</div><div class="crayon-num" data-line="crayon-56d79e8a29470541874587-19" style="height: 15px;">19</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29470541874587-20" style="height: 15px;">20</div><div class="crayon-num" data-line="crayon-56d79e8a29470541874587-21" style="height: 15px;">21</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a29470541874587-22" style="height: 15px;">22</div><div class="crayon-num" data-line="crayon-56d79e8a29470541874587-23" style="height: 15px;">23</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-56d79e8a29470541874587-1"><span class="crayon-sy">$</span><span class="crayon-sy">(</span><span class="crayon-r">document</span><span class="crayon-sy">)</span><span class="crayon-sy">.</span><span class="crayon-e">ready</span><span class="crayon-sy">(</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29470541874587-2"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-c">/* Executa a requisição quando o campo CEP perder o foco */</span></div><div class="crayon-line" id="crayon-56d79e8a29470541874587-3"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-sy">$</span><span class="crayon-sy">(</span><span class="crayon-s">'#cep'</span><span class="crayon-sy">)</span><span class="crayon-sy">.</span><span class="crayon-e">blur</span><span class="crayon-sy">(</span><span class="crayon-t">function</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29470541874587-4"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="crayon-c">/* Configura a requisição AJAX */</span></div><div class="crayon-line" id="crayon-56d79e8a29470541874587-5"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="crayon-sy">$</span><span class="crayon-sy">.</span><span class="crayon-e">ajax</span><span class="crayon-sy">(</span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29470541874587-6"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">url</span><span class="crayon-h"> </span><span class="crayon-o">:</span><span class="crayon-h"> </span><span class="crayon-s">'consultar_cep.php'</span><span class="crayon-sy">,</span><span class="crayon-h"> </span><span class="crayon-c">/* URL que será chamada */</span><span class="crayon-h"> </span></div><div class="crayon-line" id="crayon-56d79e8a29470541874587-7"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">type</span><span class="crayon-h"> </span><span class="crayon-o">:</span><span class="crayon-h"> </span><span class="crayon-s">'POST'</span><span class="crayon-sy">,</span><span class="crayon-h"> </span><span class="crayon-c">/* Tipo da requisição */</span><span class="crayon-h"> </span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29470541874587-8"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">data</span><span class="crayon-o">:</span><span class="crayon-h"> </span><span class="crayon-s">'cep='</span><span class="crayon-h"> </span><span class="crayon-o">+</span><span class="crayon-h"> </span><span class="crayon-sy">$</span><span class="crayon-sy">(</span><span class="crayon-s">'#cep'</span><span class="crayon-sy">)</span><span class="crayon-sy">.</span><span class="crayon-e">val</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">,</span><span class="crayon-h"> </span><span class="crayon-c">/* dado que será enviado via POST */</span></div><div class="crayon-line" id="crayon-56d79e8a29470541874587-9"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">dataType</span><span class="crayon-o">:</span><span class="crayon-h"> </span><span class="crayon-s">'json'</span><span class="crayon-sy">,</span><span class="crayon-h"> </span><span class="crayon-c">/* Tipo de transmissão */</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29470541874587-10"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-v">success</span><span class="crayon-o">:</span><span class="crayon-h"> </span><span class="crayon-t">function</span><span class="crayon-sy">(</span><span class="crayon-v">data</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span></div><div class="crayon-line" id="crayon-56d79e8a29470541874587-11"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-st">if</span><span class="crayon-sy">(</span><span class="crayon-v">data</span><span class="crayon-sy">.</span><span class="crayon-v">sucesso</span><span class="crayon-h"> </span><span class="crayon-o">==</span><span class="crayon-h"> </span><span class="crayon-cn">1</span><span class="crayon-sy">)</span><span class="crayon-sy">{</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29470541874587-12"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">$</span><span class="crayon-sy">(</span><span class="crayon-s">'#rua'</span><span class="crayon-sy">)</span><span class="crayon-sy">.</span><span class="crayon-e">val</span><span class="crayon-sy">(</span><span class="crayon-v">data</span><span class="crayon-sy">.</span><span class="crayon-v">rua</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-56d79e8a29470541874587-13"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">$</span><span class="crayon-sy">(</span><span class="crayon-s">'#bairro'</span><span class="crayon-sy">)</span><span class="crayon-sy">.</span><span class="crayon-e">val</span><span class="crayon-sy">(</span><span class="crayon-v">data</span><span class="crayon-sy">.</span><span class="crayon-v">bairro</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29470541874587-14"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">$</span><span class="crayon-sy">(</span><span class="crayon-s">'#cidade'</span><span class="crayon-sy">)</span><span class="crayon-sy">.</span><span class="crayon-e">val</span><span class="crayon-sy">(</span><span class="crayon-v">data</span><span class="crayon-sy">.</span><span class="crayon-v">cidade</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-56d79e8a29470541874587-15"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">$</span><span class="crayon-sy">(</span><span class="crayon-s">'#estado'</span><span class="crayon-sy">)</span><span class="crayon-sy">.</span><span class="crayon-e">val</span><span class="crayon-sy">(</span><span class="crayon-v">data</span><span class="crayon-sy">.</span><span class="crayon-v">estado</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29470541874587-16">&nbsp;</div><div class="crayon-line" id="crayon-56d79e8a29470541874587-17"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">$</span><span class="crayon-sy">(</span><span class="crayon-s">'#numero'</span><span class="crayon-sy">)</span><span class="crayon-sy">.</span><span class="crayon-e">focus</span><span class="crayon-sy">(</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29470541874587-18"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">}</span></div><div class="crayon-line" id="crayon-56d79e8a29470541874587-19"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="crayon-sy">}</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29470541874587-20"><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="crayon-sy">}</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span><span class="crayon-h">&nbsp;&nbsp; </span></div><div class="crayon-line" id="crayon-56d79e8a29470541874587-21"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-st">return</span><span class="crayon-h"> </span><span class="crayon-t">false</span><span class="crayon-sy">;</span><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a29470541874587-22"><span class="crayon-h">&nbsp;&nbsp; </span><span class="crayon-sy">}</span><span class="crayon-sy">)</span></div><div class="crayon-line" id="crayon-56d79e8a29470541874587-23"><span class="crayon-sy">}</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div></div></td>
					</tr>
				</tbody></table>
			</div>
		</div>
<!-- [Format Time: 0.0158 seconds] -->
<p>&nbsp;</p>
<p>A função está configurada para ser executada quando o foco sair do campo&nbsp;<strong>CEP.&nbsp;</strong>A requisição é feita via método POST com o arquivo&nbsp;<strong>consultar_cep.php&nbsp;</strong>e o tipo de transmissão que vamos utilizar é o JSON. Em caso de sucesso, os dados do endereço serão inseridos em seus campos correspondentes no formulário e o foco irá para o campo Número.</p>
<p>Bom, agora falta apenas o arquivo&nbsp;<strong>consultar_cep.php :</strong></p><!-- Crayon Syntax Highlighter v_2.7.2_beta -->

		<div id="crayon-56d79e8a2947a609326228" class="crayon-syntax crayon-theme-github crayon-font-droid-sans-mono crayon-os-pc print-yes notranslate crayon-wrapped" data-settings=" minimize scroll-mouseover wrap" style="margin-top: 12px; margin-bottom: 12px; font-size: 12px !important; line-height: 15px !important; height: auto;">
		
			<div class="crayon-toolbar" data-settings=" show" style="font-size: 12px !important;height: 18px !important; line-height: 18px !important;"><span class="crayon-title"></span>
			<div class="crayon-tools" style="font-size: 12px !important;height: 18px !important; line-height: 18px !important;"><span class="crayon-mixed-highlight" title="Contem Várias Linguagens"></span><div class="crayon-button crayon-nums-button crayon-pressed" title="Alternar números de linha"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-plain-button" title="Exibir código simples"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-wrap-button crayon-pressed" title="Alternar quebras de linha"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-expand-button" title="Expand Code" style="display: none;"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-copy-button" title="Copy"><div class="crayon-button-icon"></div></div><div class="crayon-button crayon-popup-button" title="Abrir código em nova janela"><div class="crayon-button-icon"></div></div></div></div>
			<div class="crayon-info" style="min-height: 16.8px !important; line-height: 16.8px !important;"></div>
			<div class="crayon-plain-wrap"><textarea class="crayon-plain print-no" data-settings="dblclick" readonly="" style="tab-size: 4; font-size: 12px !important; line-height: 15px !important; z-index: 0; opacity: 0; overflow: hidden;">&lt;?php

$cep = $_POST['cep'];

$reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&amp;cep=" . $cep);

$dados['sucesso'] = (string) $reg-&gt;resultado;
$dados['rua']     = (string) $reg-&gt;tipo_logradouro . ' ' . $reg-&gt;logradouro;
$dados['bairro']  = (string) $reg-&gt;bairro;
$dados['cidade']  = (string) $reg-&gt;cidade;
$dados['estado']  = (string) $reg-&gt;uf;

echo json_encode($dados);

?&gt;</textarea></div>
			<div class="crayon-main" style="position: relative; z-index: 1; overflow: hidden;">
				<table class="crayon-table">
					<tbody><tr class="crayon-row">
				<td class="crayon-nums " data-settings="show">
					<div class="crayon-nums-content" style="font-size: 12px !important; line-height: 15px !important;"><div class="crayon-num" data-line="crayon-56d79e8a2947a609326228-1" style="height: 15px;">1</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a2947a609326228-2" style="height: 15px;">2</div><div class="crayon-num" data-line="crayon-56d79e8a2947a609326228-3" style="height: 15px;">3</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a2947a609326228-4" style="height: 15px;">4</div><div class="crayon-num" data-line="crayon-56d79e8a2947a609326228-5" style="height: 15px;">5</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a2947a609326228-6" style="height: 15px;">6</div><div class="crayon-num" data-line="crayon-56d79e8a2947a609326228-7" style="height: 15px;">7</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a2947a609326228-8" style="height: 15px;">8</div><div class="crayon-num" data-line="crayon-56d79e8a2947a609326228-9" style="height: 15px;">9</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a2947a609326228-10" style="height: 15px;">10</div><div class="crayon-num" data-line="crayon-56d79e8a2947a609326228-11" style="height: 15px;">11</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a2947a609326228-12" style="height: 15px;">12</div><div class="crayon-num" data-line="crayon-56d79e8a2947a609326228-13" style="height: 15px;">13</div><div class="crayon-num crayon-striped-num" data-line="crayon-56d79e8a2947a609326228-14" style="height: 15px;">14</div><div class="crayon-num" data-line="crayon-56d79e8a2947a609326228-15" style="height: 15px;">15</div></div>
				</td>
						<td class="crayon-code"><div class="crayon-pre" style="font-size: 12px !important; line-height: 15px !important; -moz-tab-size:4; -o-tab-size:4; -webkit-tab-size:4; tab-size:4;"><div class="crayon-line" id="crayon-56d79e8a2947a609326228-1"><span class="crayon-ta">&lt;?php</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a2947a609326228-2">&nbsp;</div><div class="crayon-line" id="crayon-56d79e8a2947a609326228-3"><span class="crayon-v">$cep</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-v">$_POST</span><span class="crayon-sy">[</span><span class="crayon-s">'cep'</span><span class="crayon-sy">]</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a2947a609326228-4">&nbsp;</div><div class="crayon-line" id="crayon-56d79e8a2947a609326228-5"><span class="crayon-v">$reg</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-e">simplexml_load_file</span><span class="crayon-sy">(</span><span class="crayon-s">"http://cep.republicavirtual.com.br/web_cep.php?formato=xml&amp;cep="</span><span class="crayon-h"> </span><span class="crayon-sy">.</span><span class="crayon-h"> </span><span class="crayon-v">$cep</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a2947a609326228-6">&nbsp;</div><div class="crayon-line" id="crayon-56d79e8a2947a609326228-7"><span class="crayon-v">$dados</span><span class="crayon-sy">[</span><span class="crayon-s">'sucesso'</span><span class="crayon-sy">]</span><span class="crayon-h"> </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-sy">(</span><span class="crayon-t">string</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-v">$reg</span><span class="crayon-o">-&gt;</span><span class="crayon-i">resultado</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a2947a609326228-8"><span class="crayon-v">$dados</span><span class="crayon-sy">[</span><span class="crayon-s">'rua'</span><span class="crayon-sy">]</span><span class="crayon-h">&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-sy">(</span><span class="crayon-t">string</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-v">$reg</span><span class="crayon-o">-&gt;</span><span class="crayon-i">tipo_logradouro</span><span class="crayon-h"> </span><span class="crayon-sy">.</span><span class="crayon-h"> </span><span class="crayon-s">' '</span><span class="crayon-h"> </span><span class="crayon-sy">.</span><span class="crayon-h"> </span><span class="crayon-v">$reg</span><span class="crayon-o">-&gt;</span><span class="crayon-i">logradouro</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-56d79e8a2947a609326228-9"><span class="crayon-v">$dados</span><span class="crayon-sy">[</span><span class="crayon-s">'bairro'</span><span class="crayon-sy">]</span><span class="crayon-h">&nbsp;&nbsp;</span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-sy">(</span><span class="crayon-t">string</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-v">$reg</span><span class="crayon-o">-&gt;</span><span class="crayon-i">bairro</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a2947a609326228-10"><span class="crayon-v">$dados</span><span class="crayon-sy">[</span><span class="crayon-s">'cidade'</span><span class="crayon-sy">]</span><span class="crayon-h">&nbsp;&nbsp;</span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-sy">(</span><span class="crayon-t">string</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-v">$reg</span><span class="crayon-o">-&gt;</span><span class="crayon-i">cidade</span><span class="crayon-sy">;</span></div><div class="crayon-line" id="crayon-56d79e8a2947a609326228-11"><span class="crayon-v">$dados</span><span class="crayon-sy">[</span><span class="crayon-s">'estado'</span><span class="crayon-sy">]</span><span class="crayon-h">&nbsp;&nbsp;</span><span class="crayon-o">=</span><span class="crayon-h"> </span><span class="crayon-sy">(</span><span class="crayon-t">string</span><span class="crayon-sy">)</span><span class="crayon-h"> </span><span class="crayon-v">$reg</span><span class="crayon-o">-&gt;</span><span class="crayon-i">uf</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a2947a609326228-12">&nbsp;</div><div class="crayon-line" id="crayon-56d79e8a2947a609326228-13"><span class="crayon-k ">echo</span><span class="crayon-h"> </span><span class="crayon-e">json_encode</span><span class="crayon-sy">(</span><span class="crayon-v">$dados</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div><div class="crayon-line crayon-striped-line" id="crayon-56d79e8a2947a609326228-14">&nbsp;</div><div class="crayon-line" id="crayon-56d79e8a2947a609326228-15"><span class="crayon-ta">?&gt;</span></div></div></td>
					</tr>
				</tbody></table>
			</div>
		</div>
<!-- [Format Time: 0.0103 seconds] -->
<p>&nbsp;</p>
<p>Para buscar as informações utilizo a função&nbsp;<strong>simplexml_load_file</strong>.</p>
<p>Note que para executarmos uma requisição no WebService, devemos especificar na&nbsp;URL&nbsp;o formato que desejamos (no nosso caso,&nbsp;<strong>XML</strong>) e o CEP&nbsp;a ser consultado (Linha 5).</p>
<p>Feito isso basta jogar as informações dentro de um&nbsp;<strong>array</strong>&nbsp;(Importante a conversão para&nbsp;<strong>string&nbsp;</strong>porque a função&nbsp;<strong>simplexml_load_file</strong>&nbsp;retorna Objetos XML) e depois codificar para o formato JSON.</p>
<p><a href="./teste_files/php.jpg" class="grouped_elements" rel="tc-fancybox-group1007" title="php"><img class="aligncenter size-full wp-image-462" alt="php" src="./teste_files/php.jpg" width="190" height="226"></a></p>
<p>Fonte:&nbsp;<a href="http://www.rafaelwendel.com/2012/08/preenchimento-automatico-do-endereco-a-partir-do-cep/">www.rafaelwendel.com</a></p>
<div class="sharedaddy sd-sharing-enabled"><div class="robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing"><h3 class="sd-title">Compartilhe isso:</h3><div class="sd-content"><ul><li class="share-email share-service-visible"><a rel="nofollow" data-shared="" class="share-email sd-button share-icon" href="http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/?share=email&amp;nb=1" target="_blank" title="Clique para enviar por email a um amigo"><span>Email</span></a></li><li class="share-facebook"><a rel="nofollow" data-shared="sharing-facebook-1007" class="share-facebook sd-button share-icon" href="http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/?share=facebook&amp;nb=1" target="_blank" title="Clique para compartilhar no Facebook"><span>Facebook<span class="share-count">11</span></span></a></li><li class="share-google-plus-1"><a rel="nofollow" data-shared="sharing-google-1007" class="share-google-plus-1 sd-button share-icon" href="http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/?share=google-plus-1&amp;nb=1" target="_blank" title="Compartilhe no Google+"><span>Google</span></a></li><li class="share-twitter"><a rel="nofollow" data-shared="sharing-twitter-1007" class="share-twitter sd-button share-icon" href="http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/?share=twitter&amp;nb=1" target="_blank" title="Clique para compartilhar no Twitter"><span>Twitter</span></a></li><li class="share-linkedin"><a rel="nofollow" data-shared="sharing-linkedin-1007" class="share-linkedin sd-button share-icon" href="http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/?share=linkedin&amp;nb=1" target="_blank" title="Clique para compartilhar no LinkedIn"><span>LinkedIn</span></a></li><li class="share-end"></li></ul></div></div></div>
<div id="jp-relatedposts" class="jp-relatedposts" style="display: block;">
	<h3 class="jp-relatedposts-headline"><em>Relacionado</em></h3>
<div class="jp-relatedposts-items jp-relatedposts-items-minimal"><p class="jp-relatedposts-post jp-relatedposts-post0" data-post-id="1728" data-post-format="false"><span class="jp-relatedposts-post-title"><a class="jp-relatedposts-post-a" href="http://matheuspiscioneri.com.br/blog/requisicoes-ajax-com-jquery/" title="Requisições AJAX Com jQuery

Além de design profissional a web 2.0 também é feita de requisições AJAX. Popularizadas no início dos anos 2000, carregar apenas as informações requisitadas ao invés da página inteira já é um padrão no desenvolvimento. Os frameworks javascript facilitaram o nosso trabalho disponibilizando funções que fazem a parte complicada e…" rel="nofollow" data-origin="1007" data-position="0">Requisições AJAX Com jQuery</a></span><span class="jp-relatedposts-post-date">13/03/2014</span><span class="jp-relatedposts-post-context">Em "Ajax"</span></p><p class="jp-relatedposts-post jp-relatedposts-post1" data-post-id="581" data-post-format="false"><span class="jp-relatedposts-post-title"><a class="jp-relatedposts-post-a" href="http://matheuspiscioneri.com.br/blog/busca-de-cep-com-ajax/" title="Busca de CEP com Ajax

Para este exemplo de busca de CEP com Ajax, vamos utilizar somente a lib jQuery. Vou usar um formulário simples para exemplo, com somente os campos que preciso, a única coisa diferente é o atributo “onBlur” no campo “cep” o onBlur executa um comando javascript assim que o campo perde o fóco,…" rel="nofollow" data-origin="1007" data-position="1">Busca de CEP com Ajax</a></span><span class="jp-relatedposts-post-date">05/03/2013</span><span class="jp-relatedposts-post-context">Em "Ajax"</span></p><p class="jp-relatedposts-post jp-relatedposts-post2" data-post-id="518" data-post-format="false"><span class="jp-relatedposts-post-title"><a class="jp-relatedposts-post-a" href="http://matheuspiscioneri.com.br/blog/definicoes-de-termos-da-web/" title="Definições de termos da Web

Se a cada dia você fica perdido com novos termos que aparece na internet, com esse guia, não vai acontecer mais esse tipo de coisa, agora você vai entender perfeitamente essa língua. Linguagens de marcação e apresentação CSS: Cascading Style Sheets – CSS é uma linguagem utilizada para modificar o aspecto…" rel="nofollow" data-origin="1007" data-position="2">Definições de termos da Web</a></span><span class="jp-relatedposts-post-date">02/03/2013</span><span class="jp-relatedposts-post-context">Em "Ajax"</span></p></div></div>                        </section><!-- .entry-content -->

                                            </article>
                                
                            
                        
                    
<div id="disqus_thread"><iframe id="dsq-app2" name="dsq-app2" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" title="Disqus" width="100%" src="./teste_files/saved_resource.html" style="width: 1px !important; min-width: 100% !important; border: none !important; overflow: hidden !important; height: 698px !important;" horizontalscrolling="no" verticalscrolling="no"></iframe><iframe id="indicator-north" name="indicator-north" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" title="Disqus" style="width: 870px !important; border: none !important; overflow: hidden !important; top: 0px !important; min-width: 870px !important; max-width: 870px !important; position: fixed !important; z-index: 2147483646 !important; height: 29px !important; min-height: 29px !important; max-height: 29px !important; display: none !important;"></iframe><iframe id="indicator-south" name="indicator-south" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" title="Disqus" style="width: 870px !important; border: none !important; overflow: hidden !important; bottom: 0px !important; min-width: 870px !important; max-width: 870px !important; position: fixed !important; z-index: 2147483646 !important; height: 29px !important; min-height: 29px !important; max-height: 29px !important; display: none !important;"></iframe></div>


        
          <hr class="featurette-divider __after_loop">
          <nav id="nav-below" class="navigation" role="navigation">

              <h3 class="assistive-text">
                Veja Mais              </h3>

              <ul class="pager">
                                  <li class="previous">
                    <span class="nav-previous">
                      <a href="http://matheuspiscioneri.com.br/blog/importar-dados-de-arquivo-xml/" rel="prev"><span class="meta-nav">←</span> Importar dados de arquivo XML</a>                    </span>
                  </li>
                                                  <li class="next">
                    <span class="nav-next">
                        <a href="http://matheuspiscioneri.com.br/blog/problema-com-acentuacao-no-php/" rel="next">Problema com acentuação no PHP <span class="meta-nav">→</span></a>                    </span>
                  </li>
                              </ul>

          </nav><!-- #nav-below .navigation -->

        
        
                </div><!--.article-container -->

           
        </div><!--.row -->
    </div><!-- .container role: main -->

    
</div><!--#main-wrapper"-->

		<!-- FOOTER -->
		<footer id="footer" class="">
		 					<div class="container footer-widgets ">
					<div class="row widget-area" role="complementary">
												
							<div id="footer_one" class="span4">
																
										<aside id="text-11" class="widget widget_text">			<div class="textwidget"><a href="http://www.hostgator.com.br/8405-4-1-23.html" target="_blank"><img style="border:0px" src="./teste_files/banner_300x250.gif" width="300" height="250" alt=""></a></div>
		</aside>
																							</div><!-- .{$key}_widget_class -->

						
							<div id="footer_two" class="span4">
																
										<aside id="search-4" class="widget widget_search"><form role="search" method="get" id="searchform" class="searchform" action="http://matheuspiscioneri.com.br/blog/">
				<div>
					<label class="screen-reader-text" for="s">Pesquisar por:</label>
					<input type="text" value="" name="s" id="s">
					<input type="submit" id="searchsubmit" value="Pesquisar">
				</div>
			</form></aside><aside id="facebook-likebox-5" class="widget widget_facebook_likebox">		<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./teste_files/xd_arbiter.html" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./teste_files/xd_arbiter(1).html" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
		<div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/matheuspiscioneriblog" data-width="350" data-height="180" data-hide-cover="false" data-show-facepile="true" data-show-posts="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=249643311490&amp;container_width=370&amp;height=180&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fmatheuspiscioneriblog&amp;locale=pt_BR&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;width=350"><span style="vertical-align: bottom; width: 350px; height: 180px;"><iframe name="f314ff8115f7cb" width="350px" height="180px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="./teste_files/page.html" style="border: none; visibility: visible; width: 350px; height: 180px;" class=""></iframe></span></div>
		<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = '//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=249643311490&version=v2.3'; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
		</aside>
																							</div><!-- .{$key}_widget_class -->

						
							<div id="footer_three" class="span4">
																
										<aside id="text-10" class="widget widget_text">			<div class="textwidget"><script async="" src="./teste_files/adsbygoogle.js"></script>
<ins class="adsbygoogle" style="display: block; height: 280px;" data-ad-client="ca-pub-0657233283655783" data-ad-slot="9056400989" data-ad-format="auto" data-adsbygoogle-status="done"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:370px;background-color:transparent"><ins id="aswift_1_anchor" style="display:block;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:370px;background-color:transparent"><iframe width="370" height="280" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;"></iframe></ins></ins></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
		</aside>
																							</div><!-- .{$key}_widget_class -->

																	</div><!-- .row.widget-area -->
				</div><!--.footer-widgets -->
				    				 <div class="colophon">
			 	<div class="container">
			 		<div class="row-fluid">
					    <div class="span4 social-block pull-left"><span class="tc-footer-social-links-wrapper"><a class="social-icon icon-feed" href="http://matheuspiscioneri.com.br/blog/feed/rss/" title="Assine nosso canal rss"></a><a class="social-icon icon-twitter" href="https://twitter.com/mxczpiscioneri" title="Siga-me no Twitter" target="_blank"></a><a class="social-icon icon-facebook" href="https://www.facebook.com/mxczpiscioneri" title="Siga-me no Facebook" target="_blank"></a><a class="social-icon icon-google" href="https://plus.google.com/u/0/+MatheusPiscioneri" title="Siga-me no Google+" target="_blank"></a><a class="social-icon icon-linkedin" href="http://br.linkedin.com/pub/matheus-piscioneri/14/67a/191" title="Siga-me no LinkedIn" target="_blank"></a></span></div><div class="span4 credits"><p>· © 2016 <a href="http://matheuspiscioneri.com.br/blog" title="Matheus Piscioneri" rel="bookmark">Matheus Piscioneri</a> · Designed by <a href="http://themesandco.com/">Themes &amp; Co</a> ·</p></div><div class="span4 backtop"><p class="pull-right"><a class="back-to-top" href="http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/#">Voltar ao topo</a></p></div>	      			</div><!-- .row-fluid -->
	      		</div><!-- .container -->
	      	</div><!-- .colophon -->
	    			</footer>
			<div style="display:none">
	</div>

	<script type="text/javascript">
		window.WPCOM_sharing_counts = {"http:\/\/matheuspiscioneri.com.br\/blog\/preenchimento-automatico-do-endereco-a-partir-do-cep\/":1007};
	</script>
	
		<script type="text/javascript">
			var windowOpen;
		jQuery(document).on( 'ready post-load', function(){
			jQuery( 'a.share-facebook' ).on( 'click', function() {
				if ( 'undefined' !== typeof windowOpen ){ // If there's another sharing window open, close it.
					windowOpen.close();
				}
				windowOpen = window.open( jQuery(this).attr( 'href' ), 'wpcomfacebook', 'menubar=1,resizable=1,width=600,height=400' );
				return false;
			});
		});
		</script>
				<script type="text/javascript">
			var windowOpen;
		jQuery(document).on( 'ready post-load', function(){
			jQuery( 'a.share-google-plus-1' ).on( 'click', function() {
				if ( 'undefined' !== typeof windowOpen ){ // If there's another sharing window open, close it.
					windowOpen.close();
				}
				windowOpen = window.open( jQuery(this).attr( 'href' ), 'wpcomgoogle-plus-1', 'menubar=1,resizable=1,width=480,height=550' );
				return false;
			});
		});
		</script>
				<script type="text/javascript">
			var windowOpen;
		jQuery(document).on( 'ready post-load', function(){
			jQuery( 'a.share-twitter' ).on( 'click', function() {
				if ( 'undefined' !== typeof windowOpen ){ // If there's another sharing window open, close it.
					windowOpen.close();
				}
				windowOpen = window.open( jQuery(this).attr( 'href' ), 'wpcomtwitter', 'menubar=1,resizable=1,width=600,height=350' );
				return false;
			});
		});
		</script>
				<script type="text/javascript">
			var windowOpen;
		jQuery(document).on( 'ready post-load', function(){
			jQuery( 'a.share-linkedin' ).on( 'click', function() {
				if ( 'undefined' !== typeof windowOpen ){ // If there's another sharing window open, close it.
					windowOpen.close();
				}
				windowOpen = window.open( jQuery(this).attr( 'href' ), 'wpcomlinkedin', 'menubar=1,resizable=1,width=580,height=450' );
				return false;
			});
		});
		</script>
		<!-- Inline jetpack_facebook_likebox -->
<style id="jetpack_facebook_likebox-inline-css" type="text/css">
.widget_facebook_likebox {
	overflow: hidden;
}

</style>
<script type="text/javascript">
/* <![CDATA[ */
var viewsCacheL10n = {"admin_ajax_url":"http:\/\/matheuspiscioneri.com.br\/blog\/wp-admin\/admin-ajax.php","post_id":"1007"};
/* ]]> */
</script>
<script type="text/javascript" src="./teste_files/postviews-cache.js"></script>
<script type="text/javascript" src="./teste_files/devicepx-jetpack.js"></script>
<script type="text/javascript" src="./teste_files/gprofiles.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var WPGroHo = {"my_hash":""};
/* ]]> */
</script>
<script type="text/javascript" src="./teste_files/wpgroho.js"></script>
<script type="text/javascript" src="./teste_files/core.min.js"></script>
<script type="text/javascript" src="./teste_files/modernizr.min.js"></script>
<script type="text/javascript" src="./teste_files/effect.min.js"></script>
<script type="text/javascript" src="./teste_files/holder.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var FB_WP=FB_WP||{};FB_WP.queue={_methods:[],flushed:false,add:function(fn){FB_WP.queue.flushed?fn():FB_WP.queue._methods.push(fn)},flush:function(){for(var fn;fn=FB_WP.queue._methods.shift();){fn()}FB_WP.queue.flushed=true}};window.fbAsyncInit=function(){FB.init({"xfbml":true,"appId":"119365834914569"});if(FB_WP && FB_WP.queue && FB_WP.queue.flush){FB_WP.queue.flush()}}
/* ]]> */
</script>
<script type="text/javascript">(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="http:\/\/connect.facebook.net\/pt_BR\/all.js";fjs.parentNode.insertBefore(js,fjs)}(document,"script","facebook-jssdk"));</script>
<script type="text/javascript" src="./teste_files/wp-embed.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var embedVars = {"disqusConfig":{"platform":"wordpress@4.4.2","language":""},"disqusIdentifier":"1007 http:\/\/matheuspiscioneri.com.br\/blog\/?p=1007","disqusShortname":"matheuspiscioneri","disqusTitle":"Preenchimento autom\u00e1tico do endere\u00e7o a partir do CEP","disqusUrl":"http:\/\/matheuspiscioneri.com.br\/blog\/preenchimento-automatico-do-endereco-a-partir-do-cep\/","options":{"manualSync":false},"postId":"1007"};
/* ]]> */
</script>
<script type="text/javascript" src="./teste_files/disqus.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var countVars = {"disqusShortname":"matheuspiscioneri"};
/* ]]> */
</script>
<script type="text/javascript" src="./teste_files/count(1).js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var sharing_js_options = {"lang":"en","counts":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="./teste_files/sharing.js"></script>
<script type="text/javascript" src="./teste_files/e-201609.js" async="" defer=""></script>
<script type="text/javascript">
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:3.9.2',blog:'47687275',post:'1007',tz:'-2',srv:'matheuspiscioneri.com.br'} ]);
	_stq.push([ 'clickTrackerInit', '47687275', '1007' ]);
</script>
<div id="fb-root"></div><div class="tc-btt-wrapper show"><i class="btt-arrow" style="color:#08c"></i></div>	
	
<!-- Dynamic page generated in 1.254 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2016-03-03 00:16:42 -->

<!-- Compression = gzip --><div id="fancybox-tmp"></div><div id="fancybox-loading"><div></div></div><div id="fancybox-overlay"></div><div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div><div id="fancybox-content"></div><a id="fancybox-close"></a><div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a></div></div><div id="sharing_email" style="display: none;">
		<form action="http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/" method="post">
			<label for="target_email">Enviar para o Endereço de Email</label>
			<input type="email" name="target_email" id="target_email" value="">

			
				<label for="source_name">Seu Nome</label>
				<input type="text" name="source_name" id="source_name" value="">

				<label for="source_email">Seu Endereço de Email</label>
				<input type="email" name="source_email" id="source_email" value="">

						<input type="text" id="jetpack-source_f_name" name="source_f_name" class="input" value="" size="25" autocomplete="off">
			<script> document.getElementById('jetpack-source_f_name').value = ''; </script>
			
			<img style="float: right; display: none" class="loading" src="./teste_files/loading.gif" alt="loading" width="16" height="16">
			<input type="submit" value="Enviar Email" class="sharing_send">
			<a rel="nofollow" href="http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/#cancel" class="sharing_cancel">Cancelar</a>

			<div class="errors errors-1" style="display: none;">
				Post não foi enviado - verifique os seus endereços de email!			</div>

			<div class="errors errors-2" style="display: none;">
				Verificação de email falhou, por favor, tente novamente			</div>

			<div class="errors errors-3" style="display: none;">
				Desculpe, seu blog não pode compartilhar posts por email.			</div>
		</form>
	</div><img src="./teste_files/g.gif" id="wpstats"></body></html>