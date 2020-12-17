<!DOCTYPE html>
<html lang="es-es">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Thiago, Rodrigo, Vinícius, Vitor">
  <meta name="description" content="ETEC Jornalista Roberto Marinho">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keyword" content="ETEC, Roberto Marinho, Jornalista Roberto Marinho">

  <title>ETEC Jornalista Roberto Marinho</title>

  <link rel="icon" href="../../recursos/svg/etec.svg">
  <link rel="stylesheet" href="../../css/espacoAluno.css">
  <link rel="manifest" href="../../manifest.webmanifest" />
  <link rel="apple-touch-icon" href="../../recursos/images/favicon/etecFavicon-128px.png" />
  <link rel="apple-touch-icon" href="../../recursos/images/favicon/etecFavicon-192px.png" />
  <link rel="apple-touch-icon" href="../../recursos/images/favicon/etecFavicon-384px.png" />
  <link rel="apple-touch-icon" href="../../recursos/images/favicon/etecFavicon-512px.png" />
  <meta name="apple-mobile-web-app-status-bar" content="#f68b37">
  <meta name="theme-color" content="#820024">

  <script src="../../js/index.js" defer></script>
  <script src="../../js/themeSwitcher.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" type="text/javascript"></script>
</head>

<body>
  <div class="context">
    <ul class="context-options">
      <li onclick="setLight()" class="context-option light">Tema Claro</li>
      <li onclick="setDark()" class="context-option dark">Tema Oscuro</li>
      <li onclick="setContrast()" class="context-option contrast">Tema de Contraste</li>
    </ul>
  </div>

  <header>
  <nav>
      <div id="separador" class="primeiro"></div>
      <div class="menu">
        <a href="../" rel="noopener">COMIENZO</a>
        <a href="./proposito.php" rel="noopener">PROPÓSITO</a>
        <a href="./espacoAluno.php" rel="noopener" class="active">ESPACIO ESTUDIANTIL</a>
        <a href="./cursosTecnicos.php" rel="noopener">CURSOS TÉCNICOS</a>
        <a href="#" rel="noopener">CALENDARIO</a>
        <a href="./faleConosco.php" rel="noopener">HABLE CON NOSOTROS</a>
      </div>
      <div id="separador" class="segundo"></div>
    </nav>

    <div id="menu">
      <div id="separador" class="terceiro"></div>

      <svg class="logoEtec"
        version="1.0" 
        xmlns="http://www.w3.org/2000/svg" 
        width="80px" 
        height="80px" 
        viewBox="0 0 1000 1000" 
        preserveAspectRatio="xMidYMid meet">
        <g 
          id="layer101" 
          fill="#f68933" 
          stroke="none">
          <path 
            d="M477 965 c-9 -19 -19 -63 -23 -98 l-6 -64 -97 -17 c-116 -20 -114 -20 -173 -18 -41 2 -48 5 -48 22 0 25 44 125 59 134 17 11 13 26 -7 26 -38 0 -90 -49 -124 -117 -29 -59 -33 -77 -32 -141 1 -76 9 -92 47 -92 9 0 22 11 28 24 7 15 17 22 28 19 9 -2 77 -10 151 -17 l135 -12 -120 -8 c-119 -7 -244 -21 -277 -32 -24 -7 -23 -49 1 -60 17 -8 146 -163 334 -403 26 -33 47 -69 47 -81 0 -46 45 -4 55 52 7 36 9 38 45 38 36 0 38 -2 45 -37 10 -58 55 -99 55 -52 0 26 353 471 382 481 14 6 18 15 16 35 -3 27 -6 28 -83 40 -44 6 -136 15 -205 19 l-125 8 135 12 c74 7 143 15 153 18 12 3 21 -3 28 -20 7 -20 15 -25 36 -22 24 3 29 9 36 48 11 63 1 119 -34 190 -31 61 -85 110 -121 110 -20 0 -24 -15 -8 -25 16 -10 48 -77 55 -118 l7 -37 -48 -2 c-61 -2 -59 -2 -175 18 l-96 17 -6 56 c-7 63 -29 133 -43 138 -6 2 -18 -12 -27 -32z m-15 -236 c7 -50 69 -49 76 0 3 22 6 22 110 16 150 -8 212 -15 212 -24 0 -16 -60 -33 -204 -58 l-151 -25 -135 21 c-179 28 -246 48 -227 67 4 4 57 10 119 14 201 12 196 13 200 -11z m-350 -241 c8 -7 41 -51 73 -98 32 -47 72 -105 90 -130 37 -52 53 -80 38 -65 -9 9 -139 177 -207 268 -28 36 -25 49 6 25z m801 0 c-6 -7 -60 -79 -122 -160 -62 -82 -114 -148 -117 -148 -2 0 17 30 43 68 25 37 71 103 101 147 55 80 78 105 95 105 6 0 6 -5 0 -12z m-718 -30 c28 -39 165 -273 165 -281 0 -5 -45 60 -100 143 -55 82 -100 153 -100 155 0 13 21 3 35 -17z m560 -117 c-48 -72 -89 -131 -92 -131 -3 0 5 17 17 38 13 20 45 76 72 125 44 76 75 113 86 102 2 -1 -36 -62 -83 -134z m-428 102 l82 -17 21 -48 c20 -46 20 -49 4 -148 -10 -55 -21 -100 -26 -100 -4 0 -8 5 -8 12 0 6 -38 78 -85 160 -47 82 -85 151 -85 154 0 6 9 5 97 -13z m443 11 c0 -7 -156 -284 -174 -309 -12 -16 -14 -10 -25 59 -15 104 -14 149 5 189 15 31 23 35 88 49 80 18 106 21 106 12z m-240 -29 c0 -11 -24 -55 -31 -55 -4 0 -12 14 -18 30 -10 29 -9 30 20 30 16 0 29 -2 29 -5z m-11 -195 c6 -28 11 -53 11 -55 0 -7 -45 -6 -52 0 -7 8 13 105 22 105 5 0 13 -23 19 -50z"
          />
        </g>

        <g 
          id="layer102" 
          fill="#f68933" 
          stroke="none">
          <path 
            d="M235 604 c-92 -9 -206 -25 -220 -30 -22 -9 -18 -49 4 -60 17 -8 146 -163 334 -403 26 -33 47 -69 47 -81 0 -46 45 -4 55 53 7 35 9 37 45 37 36 0 38 -2 45 -37 10 -58 55 -99 55 -52 0 26 353 471 382 481 14 6 18 15 16 35 -3 27 -7 29 -83 41 -77 12 -597 24 -680 16z m-123 -116 c8 -7 41 -51 73 -98 32 -47 72 -105 90 -130 37 -52 53 -80 38 -65 -9 9 -139 177 -207 268 -28 36 -25 49 6 25z m801 0 c-6 -7 -60 -79 -122 -160 -62 -82 -114 -148 -117 -148 -2 0 17 30 43 68 25 37 71 103 101 147 55 80 78 105 95 105 6 0 6 -5 0 -12z m-718 -30 c28 -39 165 -273 165 -281 0 -5 -45 60 -100 143 -55 82 -100 153 -100 155 0 13 21 3 35 -17z m560 -117 c-48 -72 -89 -131 -92 -131 -3 0 5 17 17 38 13 20 45 76 72 125 44 76 75 113 86 102 2 -1 -36 -62 -83 -134z m-428 102 l82 -17 21 -48 c20 -46 20 -49 4 -148 -10 -55 -21 -100 -26 -100 -4 0 -8 5 -8 12 0 6 -38 78 -85 160 -47 82 -85 151 -85 154 0 6 9 5 97 -13z m443 11 c0 -7 -156 -284 -174 -309 -12 -16 -14 -10 -25 59 -15 104 -14 149 5 189 15 31 23 35 88 49 80 18 106 21 106 12z m-240 -29 c0 -11 -24 -55 -31 -55 -4 0 -12 14 -18 30 -10 29 -9 30 20 30 16 0 29 -2 29 -5z m-11 -195 c6 -28 11 -53 11 -55 0 -7 -45 -6 -52 0 -7 8 13 105 22 105 5 0 13 -23 19 -50z"
          />
        </g>

      </svg>

      <h1 class="nomeEtec">ETEC JORNALISTA ROBERTO MARINHO</h1>
      <h2 class="fraseEtec">A TRAVÉS DEL CONOCIMIENTO, EL MUNDO ES CONQUISTADO</h2>

      <div class="icones">
        <a href="https://www.youtube.com/user/etecjrm253" rel="noopener" target="_blank">
          <svg class="youtube"
            xmlns="http://www.w3.org/2000/svg" 
            width="40"
            height="40"
            viewBox="0 0 576 512"
            fill="none"
            stroke="black"
            stroke-width="40"
            stroke-linecap="round"
            stroke-linejoin="round">
            <path 
            d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" class="">
            </path>
          </svg>
        </a>
        
        <a class="twitter" href="https://twitter.com/etecjrm253" rel="noopener" target="_blank">
          <svg class="twitter"
            xmlns="http://www.w3.org/2000/svg" 
            width="40" 
            height="40" 
            viewBox="0 0 24 24" 
            fill="none" 
            stroke="currentColor" 
            stroke-width="1.5" 
            stroke-linecap="round" 
            stroke-linejoin="round">
            <path 
              d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
            </path>
          </svg>
        </a>
  
        <a href="https://www.instagram.com/etecjrm253/" rel="noopener" target="_blank">
          <svg class="instagram"
            xmlns="http://www.w3.org/2000/svg" 
            width="40" 
            height="40" 
            viewBox="0 0 24 24" 
            fill="none" 
            stroke="currentColor" 
            stroke-width="1.5" 
            stroke-linecap="round" 
            stroke-linejoin="round" >
            <rect
              x="2" 
              y="2" 
              width="20" 
              height="20" 
              rx="5" 
              ry="5">
            </rect>
            <path 
              fill="transparent"
              d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z">
            </path>
            <line 
              x1="17.5" 
              y1="6.5" 
              x2="17.51" 
              y2="6.5">
            </line>
  
            <radialGradient id="rg" r="150%" cx="30%" cy="107%">
              <stop stop-color="#fdf497" offset="0" />
              <stop stop-color="#fdf497" offset="0.05" />
              <stop stop-color="#fd5949" offset="0.45" />
              <stop stop-color="#d6249f" offset="0.6" />
              <stop stop-color="#285AEB" offset="0.9" />
            </radialGradient>
          </svg>
        </a>
  
        <a href="https://www.facebook.com/etecjrm" rel="noopener" target="_blank">
          <svg class="facebook"
            xmlns="http://www.w3.org/2000/svg" 
            width="40" 
            height="40" 
            viewBox="0 0 24 24" 
            fill="none" 
            stroke="currentColor" 
            stroke-width="1.5" 
            stroke-linecap="round" 
            stroke-linejoin="round">
            <path 
              d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
            </path>
          </svg>
        </a>
      </div>
      
      <div id="separador" class="quarto"></div>
    </div>
  </header>

  <main id="section">
    <div class="nomeSection">
      <h1>ESPACIO ESTUDIANTIL</h1>
    </div>

    <section>
      <div class="previnir-widget">
        <div class="top">
          <svg class="virus-escudo"
            xmlns="http://www.w3.org/2000/svg" 
            width="75" 
            height="75" 
            fill="#fff"
            viewBox="0 0 24 24">
            <path 
              d="M10.382 15.188c-.347.26-.769.401-1.202.401-.803 0-1.207-.981-.641-1.547.307-.307.702-.505 1.133-.566.811-.117 1.167-1.122.57-1.718-.596-.597-1.601-.24-1.718.571-.062.429-.261.827-.566 1.133-.569.568-1.548.164-1.548-.642 0-.435.141-.854.4-1.202.493-.656.032-1.618-.81-1.618s-1.303.961-.811 1.618c.259.347.4.769.4 1.202 0 .805-.979 1.21-1.548.641-.308-.307-.505-.702-.566-1.133-.117-.811-1.122-1.167-1.718-.571-.597.596-.24 1.601.57 1.718.428.062.826.26 1.133.566.569.569.165 1.547-.641 1.547-.435 0-.854-.14-1.202-.401-.655-.49-1.617-.029-1.617.813 0 .841.962 1.303 1.618.812.347-.26.769-.401 1.202-.401.805 0 1.21.978.641 1.547-.307.307-.702.505-1.133.566-.811.117-1.167 1.122-.57 1.718.596.597 1.601.24 1.718-.571.062-.429.261-.827.566-1.133.569-.568 1.548-.164 1.548.642 0 .435-.141.854-.4 1.202-.492.655-.034 1.618.81 1.618.839 0 1.306-.96.811-1.62-.26-.344-.4-.764-.4-1.195 0-.807.979-1.216 1.548-.647.308.308.505.703.566 1.134.117.811 1.122 1.167 1.718.571.596-.595.242-1.603-.572-1.718-.426-.061-.822-.258-1.127-.562-.572-.571-.169-1.551.637-1.551.435 0 .854.14 1.202.401.654.489 1.617.031 1.617-.813 0-.843-.963-1.303-1.618-.812zm-5.364 2.148c-.273 0-.495-.221-.495-.495 0-.273.222-.495.495-.495s.495.222.495.495c0 .274-.222.495-.495.495zm.63-1.571c-.429 0-.775-.348-.775-.776 0-.429.347-.777.775-.777s.777.348.777.777c.001.428-.348.776-.777.776zm1.464 1.484c-.363 0-.657-.294-.657-.657s.294-.658.657-.658.657.295.657.658-.293.657-.657.657zm16.888-14.249v11.535c0 4.603-3.203 5.804-9 9.465-1.318-.833-2.496-1.535-3.539-2.183.575-.481.894-1.055 1.021-1.726.731.456 1.564.962 2.519 1.551 5.313-3.281 7-4.065 7-7.107v-9.575c-2.446-.124-4.5-.611-7-2.416-2.5 1.805-4.554 2.292-7 2.416v3.806c-.541-.484-1.244-.766-2.001-.766v-5c3.516 0 5.629-.134 9-3 3.371 2.866 5.484 3 9 3zm-4 11.535c0 1.606-.415 1.935-5 4.76v-14.353c1.827 1.105 3.474 1.6 5 1.833v7.76z"/>
          </svg>
          <h1>Mantente a salvo <br> Quédate en casa. <br> Ponte una máscara.</h1>   
        </div>
      </div>

      <hr id="separador">

      <div class="teams-widget">
        <div class="top">
          <svg class="teams-shadow"
            viewBox="-0.12979372698077785 0 32.42343730730004 32" 
            xmlns="http://www.w3.org/2000/svg" 
            width="75" 
            height="75">
            <circle 
              cx="17" 
              cy="6" 
              fill="#7b83eb" 
              r="4.667"/>
            <path 
              d="M16.667 7H12.44l.021.093.002.008.022.086A4.671 4.671 0 0 0 18 10.559V8.333A1.337 1.337 0 0 0 16.667 7z" 
              opacity=".1"/>
            <path 
              d="M15.667 8h-2.884A4.667 4.667 0 0 0 17 10.667V9.333A1.337 1.337 0 0 0 15.667 8z" 
              opacity=".2"/>
            <circle 
              cx="27.5" 
              cy="7.5" 
              fill="#5059c9" 
              r="3.5"/>
            <path 
              d="M30.5 12h-7.861a.64.64 0 0 0-.64.64v8.11a5.121 5.121 0 0 0 3.967 5.084A5.006 5.006 0 0 0 32 20.938V13.5a1.5 1.5 0 0 0-1.5-1.5z" 
              fill="#5059c9"/>
            <path 
              d="M25 13.5V23a7.995 7.995 0 0 1-14.92 4 7.173 7.173 0 0 1-.5-1 8.367 8.367 0 0 1-.33-1A8.24 8.24 0 0 1 9 23v-9.5a1.498 1.498 0 0 1 1.5-1.5h13a1.498 1.498 0 0 1 1.5 1.5z" 
              fill="#7b83eb"/>
            <path 
              d="M15.667 8h-2.884A4.667 4.667 0 0 0 17 10.667V9.333A1.337 1.337 0 0 0 15.667 8z" 
              opacity=".2"/>
            <path 
              d="M18 12v12.67a1.32 1.32 0 0 1-1.04 1.29.966.966 0 0 1-.29.04H9.58a8.367 8.367 0 0 1-.33-1A8.24 8.24 0 0 1 9 23v-9.5a1.498 1.498 0 0 1 1.5-1.5z" 
              opacity=".1"/>
            <path 
              d="M17 12v13.67a.967.967 0 0 1-.04.29A1.32 1.32 0 0 1 15.67 27h-5.59a7.173 7.173 0 0 1-.5-1 8.367 8.367 0 0 1-.33-1A8.24 8.24 0 0 1 9 23v-9.5a1.498 1.498 0 0 1 1.5-1.5z" 
              opacity=".2"/>
            <path 
              d="M17 12v11.67A1.336 1.336 0 0 1 15.67 25H9.25A8.24 8.24 0 0 1 9 23v-9.5a1.498 1.498 0 0 1 1.5-1.5z" 
              opacity=".2"/>
            <path 
              d="M10.5 12A1.498 1.498 0 0 0 9 13.5V23a8.24 8.24 0 0 0 .25 2h5.42A1.336 1.336 0 0 0 16 23.67V12z" 
              opacity=".2"/>
            <path 
              d="M1.333 8h13.334A1.333 1.333 0 0 1 16 9.333v13.334A1.333 1.333 0 0 1 14.667 24H1.333A1.333 1.333 0 0 1 0 22.667V9.333A1.333 1.333 0 0 1 1.333 8z" 
              fill="#4b53bc"/>
            <path 
              d="M11.98 12.975H8.99v8.02H7.028v-8.02H4.02v-1.97h7.96z" 
              fill="#fff"/>
            <path 
              d="M0 0h32v32H0z" 
              fill="none"/>
          </svg>
          <h1>Entrar en el canal de <a href="https://www.microsoft.com/pt-br/microsoft-365/microsoft-teams/download-app" target="_blank" rel="noopener" class="yellow">Teams</a> da ETEC JRM</h1>        
        </div>
      </div>

      <div class="email-institucional">
        <form action="../../paginas/emailInstitucional.php" method="post">
          <h2>Si aún no tiene su correo institucional, obtenga el suyo ahora</h2>

          <div class="input" id="nome">
            <input required type="text" name="nome">
            <label>Nombre</label>
          </div>

          <div class="input" id="sobrenome">
            <input required type="text" name="sobrenome">
            <label>Apellido</label>
          </div>

          <div class="input">
            <input required type="email" name="email">
            <label>Correo Electrónico</label>
          </div>

          <div class="input">
            <input id="rg" required type="text" name="rg">
            <label>Documento de Identidad</label>
          </div>

          <button type="submit">Obtenga su correo electrónico institucional</button>
        </form>
      </div>
    </section>
  </main>

  <footer>
    <section>
      <div class="contato">
        <header>
          <svg class="iconeContato"
          xmlns="http://www.w3.org/2000/svg" 
          viewBox="0 0 576 512" 
          width="40px"
          height="40px">
          <path 
            fill="var(--orange)" 
            d="M512 160h-96V64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64v160c0 35.3 28.7 64 64 64h32v52c0 7.1 5.8 12 12 12 2.4 0 4.9-.7 7.1-2.4l76.9-43.5V384c0 35.3 28.7 64 64 64h96l108.9 61.6c2.2 1.6 4.7 2.4 7.1 2.4 6.2 0 12-4.9 12-12v-52h32c35.3 0 64-28.7 64-64V224c0-35.3-28.7-64-64-64zM64 256c-17.6 0-32-14.4-32-32V64c0-17.6 14.4-32 32-32h288c17.6 0 32 14.4 32 32v160c0 17.6-14.4 32-32 32H215.6l-7.3 4.2-80.3 45.4V256zm480 128c0 17.6-14.4 32-32 32h-64v49.6l-80.2-45.4-7.3-4.2H256c-17.6 0-32-14.4-32-32v-96h128c35.3 0 64-28.7 64-64v-32h96c17.6 0 32 14.4 32 32z"
          >
          </path>
          </svg>
          
          <h1>CONTACTO</h1>
        </header>

        <p><strong>Correo Electrónico:</strong> <a href="mailto:e253dir@cps.sp.gov.br" rel="noopener">enviar correo electrónico</a></p>
        <p><strong>Teléfono:</strong> 5103-2085</p>
      </div>

      <div class="endereco">
        <header>
          <svg class="iconeEndereco"
          xmlns="http://www.w3.org/2000/svg" 
          viewBox="0 0 576 512" 
          height="40"
          width="40">
          <path
            fill="var(--orange)" 
            d="M541 229.16l-61-49.83v-77.4a6 6 0 0 0-6-6h-20a6 6 0 0 0-6 6v51.33L308.19 39.14a32.16 32.16 0 0 0-40.38 0L35 229.16a8 8 0 0 0-1.16 11.24l10.1 12.41a8 8 0 0 0 11.2 1.19L96 220.62v243a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16v-128l64 .3V464a16 16 0 0 0 16 16l128-.33a16 16 0 0 0 16-16V220.62L520.86 254a8 8 0 0 0 11.25-1.16l10.1-12.41a8 8 0 0 0-1.21-11.27zm-93.11 218.59h.1l-96 .3V319.88a16.05 16.05 0 0 0-15.95-16l-96-.27a16 16 0 0 0-16.05 16v128.14H128V194.51L288 63.94l160 130.57z"
          >
          </path>
          </svg>

          <h1>DIRECCIÓN</h1>
        </header>
        <p>ETEC Jornalista Roberto Marinho</p>
        <p>Avenida Chucri Zaidan, 40</p>
        <p>Brooklin Novo</p>
        <p>São Paulo / SP</p>
        <p><strong>Código postal:</strong> 04583-110</p>
      </div>

      <div class="social">
        <header>
          <svg class="iconeSocial"
          xmlns="http://www.w3.org/2000/svg" 
          viewBox="0 0 448 512"
          height="40"
          width="40">
          <path 
            fill="var(--orange)" 
            d="M352 320c-28.6 0-54.2 12.5-71.8 32.3l-95.5-59.7c9.6-23.4 9.7-49.8 0-73.2l95.5-59.7c17.6 19.8 43.2 32.3 71.8 32.3 53 0 96-43 96-96S405 0 352 0s-96 43-96 96c0 13 2.6 25.3 7.2 36.6l-95.5 59.7C150.2 172.5 124.6 160 96 160c-53 0-96 43-96 96s43 96 96 96c28.6 0 54.2-12.5 71.8-32.3l95.5 59.7c-4.7 11.3-7.2 23.6-7.2 36.6 0 53 43 96 96 96s96-43 96-96c-.1-53-43.1-96-96.1-96zm0-288c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM96 320c-35.3 0-64-28.7-64-64s28.7-64 64-64 64 28.7 64 64-28.7 64-64 64zm256 160c-35.3 0-64-28.7-64-64s28.7-64 64-64 64 28.7 64 64-28.7 64-64 64z" 
          >
          </path>
          </svg>
          <h1>REDES SOCIALES</h1>
        </header>

        <div class="icones">
          <a href="https://www.youtube.com/user/etecjrm253" rel="noopener" target="_blank">
            <svg class="youtube"
              xmlns="http://www.w3.org/2000/svg" 
              width="36"
              height="36"
              viewBox="0 0 576 512"
              fill="none"
              stroke="black"
              stroke-width="40"
              stroke-linecap="round"
              stroke-linejoin="round">
              <path 
              d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" class="">
              </path>
            </svg>
          </a>
          
          <a href="https://twitter.com/etecjrm253" rel="noopener" target="_blank">
            <svg class="twitter"
              xmlns="http://www.w3.org/2000/svg" 
              width="36" 
              height="36" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="1.5" 
              stroke-linecap="round" 
              stroke-linejoin="round">
              <path 
                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
              </path>
            </svg>
          </a>
    
          <a href="https://www.instagram.com/etecjrm253/" rel="noopener" target="_blank">
            <svg class="instagram"
              xmlns="http://www.w3.org/2000/svg" 
              width="36" 
              height="36" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="1.5" 
              stroke-linecap="round" 
              stroke-linejoin="round" >
              <rect
                x="2" 
                y="2" 
                width="20" 
                height="20" 
                rx="5" 
                ry="5">
              </rect>
              <path 
                fill="transparent"
                d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z">
              </path>
              <line 
                x1="17.5" 
                y1="6.5" 
                x2="17.51" 
                y2="6.5">
              </line>
    
              <radialGradient id="rg" r="150%" cx="30%" cy="107%">
                <stop stop-color="#fdf497" offset="0" />
                <stop stop-color="#fdf497" offset="0.05" />
                <stop stop-color="#fd5949" offset="0.45" />
                <stop stop-color="#d6249f" offset="0.6" />
                <stop stop-color="#285AEB" offset="0.9" />
              </radialGradient>
            </svg>
          </a>
    
          <a href="https://www.facebook.com/etecjrm" rel="noopener" target="_blank">
            <svg class="facebook"
              xmlns="http://www.w3.org/2000/svg" 
              width="36" 
              height="36" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="1.5" 
              stroke-linecap="round" 
              stroke-linejoin="round">
              <path 
                d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
              </path>
            </svg>
          </a>
        </div>
      </div>

    </section>

    <div class="direitosAutorais">
      <div id="separador" class="quinto"></div>
      <h1>&copy;2020 ETEC JORNALISTA ROBERTO MARINHO. TODOS LOS DERECHOS RESERVADOS</h1>
    </div>
  </footer>

  <script>
    jQuery(document).ready(function($) {
      $(".input #rg").mask("99.999.999-9");  
      $(".input #rg").mask("99.999.999-9",{autoclear: false});
    });
  </script>
</body>

</html>