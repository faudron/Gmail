
<!DOCTYPE html>
<html lang="es" amp>
  <head>
    
    <meta charset="utf-8">
    
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="preload" as="style">

    
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <title>Gmail Extractor</title>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <meta name="theme-color" content="#01b19d"/>
    
    <link rel="canonical" href="" />
        
    <meta name="msapplication-TileColor" content="#01b19d">
    
    <style amp-boilerplate>
            </style>
    <noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom="">
:root{
    --color1:#4285f4;
    --color2:#ea4335;
    --color3:#35a853;
    --color4:#fbbc04;
}
/* Small screens plus */
body .cf:after, body .cf:before, body .rf:after, body .rf:before, body .rr:after, body .rr:before, body .rw:after, body .rw:before{display:block;content:" ";}*, *:before, *:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}.b{font-weight:bold}.i{font-style:italic}.u{text-decoration:underline}.s{font-size:80%}.tl{text-transform:lowercase}.tu{text-transform:uppercase}.tc{text-transform:capitalize}p,ul,ol,h1,h2,h3,h4,pre,amp-img,figure,.bd,.bp,table,hr,iframe{margin-bottom:20px;word-wrap:break-word}li{margin-left:25px}body{width:auto;margin:0;padding:0;}.rf,.rw{margin-right:auto;margin-left:auto;padding-left:20px;padding-right:20px}.rr{margin-left:-20px;margin-right:-20px}[class^=rc]{position:relative;min-height:1px;padding-left:10px;padding-right:10px;float:left}.rcx12{width:100%}.rcx11{width:91.66666667%}.rcx10{width:83.33333333%}.rcx9{width:75%}.rcx8{width:66.66666667%}.rcx7{width:58.33333333%}.rcx6{width:50%}.rcx5{width:41.66666667%}.rcx4{width:33.33333333%}.rcx3{width:25%}.rcx2{width:16.66666667%}.rcx1{width:8.33333333%}.rox11{margin-left:91.66666667%}.rox10{margin-left:83.33333333%}.rox9{margin-left:75%}.rox8{margin-left:66.66666667%}.rox7{margin-left:58.33333333%}.rox6{margin-left:50%}.rox5{margin-left:41.66666667%}.rox4{margin-left:33.33333333%}.rox3{margin-left:25%}.rox2{margin-left:16.66666667%}.rox1{margin-left:8.33333333%}.rox0{margin-left:0}.rtxl{text-align:left}.rtxr{text-align:right}.rtxc{text-align:center}.rtxj{text-align:justify}.rpxn{padding-top:0;padding-bottom:0}.rpxs{padding-top:20px;padding-bottom:20px}.rpxm{padding-top:40px;padding-bottom:40px}.rpxl{padding-top:60px;padding-bottom:60px}.rmxn{margin-bottom:0}.rmxs{margin-bottom:20px}.rmxm{margin-bottom:40px}.rmxl{margin-bottom:60px}.cf:after,.cf:before,.rf:after,.rf:before,.rr:after,.rr:before,.rw:after,.rw:before{content:" ";display:table}.cf:after,.rf:after,.rr:after,.rw:after{clear:both}
/* Typeography */
body{font-family:Roboto, sans-serif;line-height:1.4;background:#DBDBDB;}
h1, .h1{font-family:Roboto, sans-serif;font-size:2em;line-height:1.25;font-weight:normal}
h2, .h2{font-family:Roboto, sans-serif;font-size:1.8em;line-height:1.15;font-weight:normal}
h3, .h3{font-family:Roboto, sans-serif;font-size:1.5em;line-height:1.14;font-weight:normal}
h4, .h4{font-family:Roboto, sans-serif;font-size:1.1em;line-height:1.11;font-weight:normal}
/* Buttons */
.bd{text-align:center;display:inline-block;padding:10px 20px;color:#555;border:solid 2px #555;text-decoration:none;}
.bd:hover, .bd:focus{background-color:#555;color:#fff}
.bp{text-align:center;display:inline-block;padding:10px 20px;background-color:#555;color:#fff;border:solid 2px #555;text-decoration:none;}
.bp:hover, .bp:focus{background-color:#fff;color:#555}
.bf{display:block;width:100%}

/* Navigation */
#nav{background-color:#fff;width:100%}
.no,.nc{font-weight:bold;color:#660080;font-size:36px; display:inline-block;position:absolute;top:15px;right:20px;cursor:pointer}
.ni{display:none}
.ns{margin:70px 40px 0 40px;padding:0;font-size:22px}
.nt{margin:0 0 0 20px;padding:0}
.ns > li, .nt > li{list-style:none;margin-left:0}
.ns a{text-decoration:none;color:#555}
.nl{padding:20px;display:inline-block}
.nl amp-img{margin-bottom:0}

/* Navigation Breakpoint */
@media all and (min-width: 900px){
    .ni{display:inline-block;float:right;}
    .ni a{display:inline-block;padding:25px;line-height:40px;font-size:18px;text-decoration:none;color:#555;}
    .ni a:hover, .ni a:focus {color:#999;}
    .nd{display:none;}
    .no{display:none;}
}

/*custom*/
header{ background: var(--color1); margin-bottom: 40px; }
.smbr{-webkit-box-shadow: 0px 0px 10px -2px rgba(0,0,0,0.40);-moz-box-shadow: 0px 0px 10px -2px rgba(0,0,0,0.40);box-shadow: 0px 0px 10px -2px rgba(0,0,0,0.40);position:relative;z-index:10;}
.logo h1{ color:white; font-size: 1.5em; font-weight: 700; font-style: italic; line-height: 22px; margin: 20px 0px;}
.nc{ position: absolute; top:0px; right: 0px; }
.ttp{ padding-top:6px;text-align:center;background:var(--color4); color:#333; font-size: 24px; position: fixed; z-index: 9999; bottom: 20px; right: 20px; width: 50px; height: 50px; border-radius: 50px; }
.contenedor{ background: white; margin-bottom: 20px; overflow-y: auto;}
.contenedor h2{ font-size: 1.1em;line-height: 1em;padding: 0.5em 1em; color:white; margin-bottom: 0px; vertical-align: middle;height: 55px; line-height: 40px;}
.contenedor.new h2{ background: var(--color2);}
.contenedor.old h2{ background: var(--color3); }
.contenedor h2 button{background: white; border:none; color:var(--color1); font-weight: 700; padding: 10px 20px; position: relative; float: right; outline: none; cursor: pointer;}
.contenedor ul{ list-style-type: none; margin-left: 0px; }
.contenedor ul li{ border-top: #dbdbdb solid 1px; margin-left: 0px; padding: 8px; position:relative; height:auto;min-height: 40px; font-size: 0.8em;}
.contenedor ul li:first-child{ border-top: none; }
.contenedor ul li .fecha{ font-weight: 700; font-size: 0.7em; font-style: italic; color:var(--color3);}
.contenedor ul li .titulo{ font-weight: 700; font-size: 1em; line-height: 1.2em; font-style: italic; color:#666;}
.contenedor ul li .subtitulo{ font-weight: 700; font-size: 0.8em; line-height:1em; font-style: italic; color:#999;}
.contenedor ul li button{ background:var(--color3); color: white; border:none; padding: 4px 8px; cursor: pointer; position:relative; right: 0px; position: absolute;right: 8px;bottom: 8px; } 
.contenedor ul li button:hover{ opacity: 0.8;}
.contenedor ul li.hasbutton{ padding-bottom: 40px; }
.contenedor ul li amp-img{ float: left; margin-right:10px;}
.contenedor ul.doble li{  }

/* Extra small screens only */
@media (max-width:599px){.hx{display:none}

}

/* Small screens only */
@media (min-width:600px) and (max-width:898px){.hs{display:none}

}

/* Small screens plus */
@media all and (min-width: 600px){.rw{width:560px}.rcs12{width:100%}.rcs11{width:91.66666667%}.rcs10{width:83.33333333%}.rcs9{width:75%}.rcs8{width:66.66666667%}.rcs7{width:58.33333333%}.rcs6{width:50%}.rcs5{width:41.66666667%}.rcs4{width:33.33333333%}.rcs3{width:25%}.rcs2{width:16.66666667%}.rcs1{width:8.33333333%}.ros11{margin-left:91.66666667%}.ros10{margin-left:83.33333333%}.ros9{margin-left:75%}.ros8{margin-left:66.66666667%}.ros7{margin-left:58.33333333%}.ros6{margin-left:50%}.ros5{margin-left:41.66666667%}.ros4{margin-left:33.33333333%}.ros3{margin-left:25%}.ros2{margin-left:16.66666667%}.ros1{margin-left:8.33333333%}.ros0{margin-left:0}.rtsl{text-align:left}.rtsr{text-align:right}.rtsc{text-align:center}.rtsj{text-align:justify}.rpsn{padding-top:0;padding-bottom:0}.rpss{padding-top:20px;padding-bottom:20px}.rpsm{padding-top:40px;padding-bottom:40px}.rpsl{padding-top:60px;padding-bottom:60px}.rmsn{margin-bottom:0}.rmss{margin-bottom:20px}.rmsm{margin-bottom:40px}.rmsl{margin-bottom:60px}
body{line-height:1.6;font-size:16px}
h1, .h1{font-size:40px;line-height:1.125}
h2, .h2{font-size:32px;line-height:1.25}
h3, .h3{font-size:24px;line-height:1.25}
h4, .h4{font-size:18px;line-height:1.22}

}

/* Medium screens only */
@media (min-width:900px) and (max-width:1199px){.hm{display:none}

}

/* Medium screens plus*/
@media all and (min-width: 900px){.rw{width:860px}.rcm12{width:100%}.rcm11{width:91.66666667%}.rcm10{width:83.33333333%}.rcm9{width:75%}.rcm8{width:66.66666667%}.rcm7{width:58.33333333%}.rcm6{width:50%}.rcm5{width:41.66666667%}.rcm4{width:33.33333333%}.rcm3{width:25%}.rcm2{width:16.66666667%}.rcm1{width:8.33333333%}.rom11{margin-left:91.66666667%}.rom10{margin-left:83.33333333%}.rom9{margin-left:75%}.rom8{margin-left:66.66666667%}.rom7{margin-left:58.33333333%}.rom6{margin-left:50%}.rom5{margin-left:41.66666667%}.rom4{margin-left:33.33333333%}.rom3{margin-left:25%}.rom2{margin-left:16.66666667%}.rom1{margin-left:8.33333333%}.rom0{margin-left:0}.rtml{text-align:left}.rtmr{text-align:right}.rtmc{text-align:center}.rtmj{text-align:justify}.rpmn{padding-top:0;padding-bottom:0}.rpms{padding-top:20px;padding-bottom:20px}.rpmm{padding-top:40px;padding-bottom:40px}.rpml{padding-top:60px;padding-bottom:60px}.rmmn{margin-bottom:0}.rmms{margin-bottom:20px}.rmmm{margin-bottom:40px}.rmml{margin-bottom:60px}
h1, .h1{font-size:48px;line-height:1.05}
h2, .h2{font-size:36px;line-height:1.25}
h3, .h3{font-size:28px;line-height:1.25}
}

/* Large screens only */
@media all and (min-width: 1200px){.hl{display:none}.rw{width:1160px}.rcl12{width:100%}.rcl11{width:91.66666667%}.rcl10{width:83.33333333%}.rcl9{width:75%}.rcl8{width:66.66666667%}.rcl7{width:58.33333333%}.rcl6{width:50%}.rcl5{width:41.66666667%}.rcl4{width:33.33333333%}.rcl3{width:25%}.rcl2{width:16.66666667%}.rcl1{width:8.33333333%}.rol11{margin-left:91.66666667%}.rol10{margin-left:83.33333333%}.rol9{margin-left:75%}.rol8{margin-left:66.66666667%}.rol7{margin-left:58.33333333%}.rol6{margin-left:50%}.rol5{margin-left:41.66666667%}.rol4{margin-left:33.33333333%}.rol3{margin-left:25%}.rol2{margin-left:16.66666667%}.rol1{margin-left:8.33333333%}.rol0{margin-left:0}.rtll{text-align:left}.rtlr{text-align:right}.rtlc{text-align:center}.rtlj{text-align:justify}.rpln{padding-top:0;padding-bottom:0}.rpls{padding-top:20px;padding-bottom:20px}.rplm{padding-top:40px;padding-bottom:40px}.rpll{padding-top:60px;padding-bottom:60px}.rmln{margin-bottom:0}.rmls{margin-bottom:20px}.rmlm{margin-bottom:40px}.rmll{margin-bottom:60px}

}
    </style>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>  <body>
<header class="head smbr" id="hdr">
    
    <div class="rw">
        <div class="rr">
            <div class="rcx12">
                <div class="logo rtxc">
                    <h1><i class="fa fa-envelope" aria-hidden="true"></i>   Gmail Extractor</h1>
                </div>
            </div>
        </div>
    </div>
</header>

           
<div class="rf">
    <div class="rw">
        <section class="rr">
            <div class="rcx12 rcm12">
                <div class="smbr contenedor new vertical">
                    <h2><i class="fa fa-envelope" aria-hidden="true"></i> Nuevos Mails</h2>
                    <ul id="gmnew">
                        <li>
                            <div class="rcx4 rtxc b">FROM</div>
                            <div class="rcx6 rtxc b">SUBJECT</div>
                            <div class="rcx2 rtxc b">DATE</div>
                        </li>
                        @forelse($mails_new as $mail)
                            <li>
                                <div class="rcx4">{{ $mail->from }}</div>
                                <div class="rcx6">{{ $mail->subject }}</div>
                                <div class="rcx2 rtxr">{{ $mail->date }}</div>
                            </li>
                        @empty
                            <li>
                                <div class="rcx12 rtxc b">No hay mails nuevos</div>
                            </li>
                        @endforelse
                        
                    </ul>
                </div>
            </div>
            <div class="rcx12 rcm12">
                <div class="smbr contenedor old vertical">
                    <h2><i class="fa fa-envelope" aria-hidden="true"></i> Mails guardados en Base de Datos</h2>
                    <ul id="gmold">
                        <li>
                            <div class="rcx4 rtxc b">FROM</div>
                            <div class="rcx6 rtxc b">SUBJECT</div>
                            <div class="rcx2 rtxc b">DATE</div>
                        </li>
                        @forelse($mails_old as $mail)
                            <li>
                                <div class="rcx4">{{ $mail->from }}</div>
                                <div class="rcx6">{{ $mail->subject }}</div>
                                <div class="rcx2 rtxr">{{ $mail->date }}</div>
                            </li>
                        @empty
                            <li>
                                <div class="rcx12 rtxc b">No hay mails guardados en db</div>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>

<a class="ttp" href="#hdr"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>  
  </body>
</html>