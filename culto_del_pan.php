<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "./assets/css/plot.css"> 
    <link rel = "stylesheet" type = "text/css" href = "./assets/css/colors.css">
    <link rel = "stylesheet" type = "text/css" href = "./assets/css/pan.css">
    <title>Document</title>
</head>
<body>
<div class="bg_1 h_aba df fs0"><div class="br3 df mw_abt aic pl10 pt2 fg1 pto03 ns"><span class="f13 ml7">Naoki OnNet</span></div><div class="df fs0 aic"><div class="dfac p0 bg_2 br mt5 mb5 ml1 mr1 nb_if_nh cp ns"><div class="w11 h11 br2 b2s co_4 df pr m3"><div class="df pa t-1 l-1 r-1 b-1"><div class="fg1 bgcc co_4 br2s"></div><div class="fg1 pl4"></div></div></div></div><div class="dfac p0 bg_2 br mt5 mb5 ml1 mr1 nb_if_nh cp ns"><div class="w11 h11 br2 b2s co_4 df pr m3"><div class="df pa t-1 l-1 r-1 b-1"><div class="fg1 pr4"></div><div class="fg1 bgcc co_4 bl2s"></div></div></div></div><div class="h16 bgcc co_4 w2 br2 ml5 mr5"></div><div class="dfac p0 bg_2 br mt5 mb5 ml1 mr1 nb_if_nh cp ns"><div class="w15 h15 br2 df pr gg2 m3"><div class="fg1 dfc"><div class="fg1 b2s co_4 br2"></div></div><div class="fg1 dfc gg2"><div class="fg1 b2s co_4 br2"></div><div class="fg1 b2s co_4 br2"></div></div></div></div></div><div class="hba01 df fs0 ml20"><div class="dfac fg1 pto02" id="botonMinimizarVentana"><svg width="29" height="30" version="1.1" viewBox="0 0 7.9375 7.9375"><rect x="2.3812" y="3.8365" width="3.075" height=".26458" fill="currentColor" stroke-width=".2581"></rect></svg></div><div class="dfac fg1 pto02" id="botonMaximizarVentana"><svg width="28" height="28" version="1.1" viewBox="0 0 7.9375 7.9375"><g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width=".22388px"><path d="m2.6255 5.312h2.2388v-2.2388h-2.2388z"></path><path d="m5.312 4.7523v-2.1268h-2.1268"></path></g></svg></div><div class="dfac fg1 pto01" id="botonCerrarVentana"><svg width="23" height="23" version="1.1" viewBox="0 0 7.9375 7.9375"><path d="m2.3812 5.5562 3.175-3.175m-3.175 0 3.175 3.175" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width=".42917"></path></svg></div></div></div>

<main class="">
</main>

<div class="maincontainer">
    <h1 style="padding-left:7rem;font-family: 'Inconsolata', monospace;">El Culto del Pan</h1>
    <h2 style="padding-left:7rem;">Que es esto?</h2>
    <p style="padding-left:7rem;">El culto del pan es un lugar en donde alabamos y adoramos el pan.</p>
    <h2 style="padding-left:7rem;">Que hacer aqui?</h2>
    <p style="padding-left:7rem;">Alabar el pan.</p>
</div>

<div class="test">
    <a href="./main"><h1 style="font-size:20px;padding-left:10px"><i style="color:#85898f;" class="fa-solid fa-house"></i></h1></a>
    <a href="https://discord.gg/YvFGRAw2wx"><h1 style="font-size:20px;padding-left:10px"><i style="color:#85898f;" class="fa-brands fa-discord"></i></h1></a>
    <a href="./main_developers"><img style="width:40px;background-color:#21252b" src="gdevtrans.png"></a>
    <a href="./culto_del_pan"><img style="width:40px;background-color:#21252b" src="bread.png"></a>
</div>

<div class="test2">
<h4 style="padding-left:20px;"><i class="fa-solid fa-hashtag"></i> <a style="color:#85898f;" href="./cdp-general">general</a></h4>
<h4 style="padding-left:20px;"><i class="fa-solid fa-hashtag"></i> <a style="color:#85898f;">imagenes</a></h4>
</div>

<div class="debug">

<h4 style="padding-left:10px;"><i class="fa-solid fa-user"></i> Personas Conectadas</h4>

</div>

<script src="https://kit.fontawesome.com/c27ee28938.js" crossorigin="anonymous"></script>
<script>
    (function() {
    const sendBtn = document.querySelector('#send');
    const messages = document.querySelector('#messages');
    const messageBox = document.querySelector('#messageBox');

    let ws;

    function showMessage(message) {
      messages.textContent += `\n\n${message}`;
      messages.scrollTop = messages.scrollHeight;
      messageBox.value = '';
    }

    function init() {
      if (ws) {
        ws.onerror = ws.onopen = ws.onclose = null;
        ws.close();
      }

      ws = new WebSocket('ws://localhost:6969');
      ws.onopen = () => {
        console.log('Connection opened!');
      }
      ws.onmessage = ({ data }) => showMessage(data);
      ws.onclose = function() {
        ws = null;
      }
    }

    sendBtn.onclick = function() {
      if (!ws) {
        showMessage("No WebSocket connection :(");
        return ;
      }

      ws.send(messageBox.value);
      showMessage(messageBox.value);
    }

    init();
  })();
</script>

</body>
</html>