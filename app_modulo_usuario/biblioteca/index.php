<?php
include("../../scriptsPHP/manejoSesion.inc");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/biblioteca.css">
    <link rel="stylesheet" type="text/css" href="../../styles/base.css">
    <link rel="stylesheet" type="text/css" href="../../styles/componentes.css">
    <link rel="stylesheet" type="text/css" href="../../styles/modoOscuro.css">
    <title>Kindlen`t</title>
    <link rel="icon" href="../../assets/icono.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body id="body">
<header class="header">
        <div class="header-logo">
            <a href="index.php">
                <svg width="161" height="36" viewBox="0 0 161 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30.279 30L21.897 19.737V30H17.277V6.966H21.897V17.295L30.279 6.966H35.856L26.352 18.384L36.12 30H30.279ZM41.1388 9.54C40.3248 9.54 39.6428 9.287 39.0928 8.781C38.5648 8.253 38.3008 7.604 38.3008 6.834C38.3008 6.064 38.5648 5.426 39.0928 4.92C39.6428 4.392 40.3248 4.128 41.1388 4.128C41.9528 4.128 42.6238 4.392 43.1518 4.92C43.7018 5.426 43.9768 6.064 43.9768 6.834C43.9768 7.604 43.7018 8.253 43.1518 8.781C42.6238 9.287 41.9528 9.54 41.1388 9.54ZM43.4158 11.718V30H38.7958V11.718H43.4158ZM57.7484 11.454C59.9264 11.454 61.6864 12.147 63.0284 13.533C64.3704 14.897 65.0414 16.811 65.0414 19.275V30H60.4214V19.902C60.4214 18.45 60.0584 17.339 59.3324 16.569C58.6064 15.777 57.6164 15.381 56.3624 15.381C55.0864 15.381 54.0744 15.777 53.3264 16.569C52.6004 17.339 52.2374 18.45 52.2374 19.902V30H47.6174V11.718H52.2374V13.995C52.8534 13.203 53.6344 12.587 54.5804 12.147C55.5484 11.685 56.6044 11.454 57.7484 11.454ZM67.8838 20.793C67.8838 18.945 68.2468 17.306 68.9728 15.876C69.7208 14.446 70.7328 13.346 72.0088 12.576C73.2848 11.806 74.7038 11.421 76.2658 11.421C77.4538 11.421 78.5868 11.685 79.6648 12.213C80.7428 12.719 81.6008 13.401 82.2388 14.259V5.58H86.9248V30H82.2388V27.294C81.6668 28.196 80.8638 28.922 79.8298 29.472C78.7958 30.022 77.5968 30.297 76.2328 30.297C74.6928 30.297 73.2848 29.901 72.0088 29.109C70.7328 28.317 69.7208 27.206 68.9728 25.776C68.2468 24.324 67.8838 22.663 67.8838 20.793ZM82.2718 20.859C82.2718 19.737 82.0518 18.78 81.6118 17.988C81.1718 17.174 80.5778 16.558 79.8298 16.14C79.0818 15.7 78.2788 15.48 77.4208 15.48C76.5628 15.48 75.7708 15.689 75.0448 16.107C74.3188 16.525 73.7248 17.141 73.2628 17.955C72.8228 18.747 72.6028 19.693 72.6028 20.793C72.6028 21.893 72.8228 22.861 73.2628 23.697C73.7248 24.511 74.3188 25.138 75.0448 25.578C75.7928 26.018 76.5848 26.238 77.4208 26.238C78.2788 26.238 79.0818 26.029 79.8298 25.611C80.5778 25.171 81.1718 24.555 81.6118 23.763C82.0518 22.949 82.2718 21.981 82.2718 20.859ZM95.694 5.58V30H91.074V5.58H95.694ZM116.891 20.463C116.891 21.123 116.847 21.717 116.759 22.245H103.394C103.504 23.565 103.966 24.599 104.78 25.347C105.594 26.095 106.595 26.469 107.783 26.469C109.499 26.469 110.72 25.732 111.446 24.258H116.429C115.901 26.018 114.889 27.47 113.393 28.614C111.897 29.736 110.06 30.297 107.882 30.297C106.122 30.297 104.538 29.912 103.13 29.142C101.744 28.35 100.655 27.239 99.8626 25.809C99.0926 24.379 98.7076 22.729 98.7076 20.859C98.7076 18.967 99.0926 17.306 99.8626 15.876C100.633 14.446 101.711 13.346 103.097 12.576C104.483 11.806 106.078 11.421 107.882 11.421C109.62 11.421 111.171 11.795 112.535 12.543C113.921 13.291 114.988 14.358 115.736 15.744C116.506 17.108 116.891 18.681 116.891 20.463ZM112.106 19.143C112.084 17.955 111.655 17.009 110.819 16.305C109.983 15.579 108.96 15.216 107.75 15.216C106.606 15.216 105.638 15.568 104.846 16.272C104.076 16.954 103.603 17.911 103.427 19.143H112.106ZM130.031 11.454C132.209 11.454 133.969 12.147 135.311 13.533C136.653 14.897 137.324 16.811 137.324 19.275V30H132.704V19.902C132.704 18.45 132.341 17.339 131.615 16.569C130.889 15.777 129.899 15.381 128.645 15.381C127.369 15.381 126.357 15.777 125.609 16.569C124.883 17.339 124.52 18.45 124.52 19.902V30H119.9V11.718H124.52V13.995C125.136 13.203 125.917 12.587 126.863 12.147C127.831 11.685 128.887 11.454 130.031 11.454ZM142.278 6.966H147.129L143.565 15.282H140.397L142.278 6.966ZM155.458 15.513V24.357C155.458 24.973 155.601 25.424 155.887 25.71C156.195 25.974 156.701 26.106 157.405 26.106H159.55V30H156.646C152.752 30 150.805 28.108 150.805 24.324V15.513H148.627V11.718H150.805V7.197H155.458V11.718H159.55V15.513H155.458Z" fill="#F6F6F6"></path>
                    <path d="M15 33.3H160.606V34.95H15V33.3Z" fill="#F6F6F6"></path>
                    <path d="M19 7H3.75C2.75544 7 1.70326 7.78111 1 8.5C0.296739 9.21889 0 9.81667 0 10.8333V26.1667C0 27.1833 0.395088 28.1584 1.09835 28.8772C1.80161 29.5961 2.75544 30 3.75 30H18.75C19.0815 30 19.3995 29.8654 19.6339 29.6257C19.8683 29.3861 20 29.0611 20 28.7222V8.27778C20 7.93889 19.8683 7.61388 19.6339 7.37425C19.3995 7.13462 19.3315 7 19 7ZM3.75 27.4444C3.41848 27.4444 3.10054 27.3098 2.86612 27.0702C2.6317 26.8306 2.5 26.5056 2.5 26.1667C2.5 25.8278 2.6317 25.5028 2.86612 25.2631C3.10054 25.0235 3.41848 24.8889 3.75 24.8889H17.5V27.4444H3.75Z" fill="#F6F6F6"></path>
                </svg>
            </a>
        </div>
        <aside class="header-buscador">
            <div class="header-buscador-filtro" id="buscador-filtro">
                <ul class="header-buscador-filtro-lista " id="buscador-filtro-lista">
                    <li>
                        <label for="autor">Autor</label>
                        <input type="checkbox" checked="" name="autor" id="autorFiltro">
                    </li>
                    <li>
                        <label for="genero">Genero</label>
                        <input type="checkbox" checked="" name="genero" id="generoFiltro">
                    </li>
                    <li>
                        <label for="titulo">Titulo</label>
                        <input type="checkbox" checked="" name="titulo" id="tituloFiltro">
                    </li>
                    <li>
                        <label for="saga">Saga</label>
                        <input type="checkbox" checked="" name="saga" id="sagaFiltro">
                    </li>
                </ul>
                <button class="header-buscador-filtro-boton" id="boton-filtro">
                    <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.86318e-05 1.80758C-0.00133894 1.57106 0.043993 1.3366 0.133429 1.11764C0.222864 0.898677 0.354643 0.699523 0.521206 0.531596C0.688274 0.363152 0.887041 0.229454 1.10604 0.138214C1.32504 0.0469752 1.55994 1.96046e-07 1.79719 1.93217e-07C2.03443 1.90387e-07 2.26933 0.0469752 2.48833 0.138214C2.70733 0.229454 2.9061 0.363152 3.07317 0.531596L8.98582 6.48019L14.9344 0.765227C15.2711 0.430505 15.7266 0.242627 16.2014 0.242627C16.6762 0.242627 17.1317 0.430505 17.4684 0.765227C17.6368 0.932296 17.7705 1.13106 17.8618 1.35006C17.953 1.56906 18 1.80396 18 2.04121C18 2.27846 17.953 2.51335 17.8618 2.73235C17.7705 2.95135 17.6368 3.15012 17.4684 3.31719L10.2798 10.2542C9.94383 10.5835 9.49217 10.768 9.02176 10.768C8.55135 10.768 8.09969 10.5835 7.76375 10.2542L0.575119 3.06559C0.400917 2.90428 0.260403 2.71005 0.161694 2.49413C0.0629864 2.2782 0.0080395 2.04486 2.86318e-05 1.80758Z" fill="#1A1A1A"></path>
                    </svg>
                </button>
            </div>
            <div class="header-buscador-barra">
                <input type="text" class="header-buscador-barra-input" id="buscador-input">
                <button class="header-buscador-barra-boton" id="buscador-buscar">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.6386 19.9036L17.4844 15.7616C18.8247 14.054 19.552 11.9454 19.5493 9.77463C19.5493 7.84139 18.976 5.95157 17.9019 4.34414C16.8279 2.73671 15.3013 1.48387 13.5152 0.744053C11.7291 0.00423516 9.76379 -0.189335 7.8677 0.187821C5.9716 0.564977 4.22993 1.49592 2.86293 2.86293C1.49592 4.22993 0.564977 5.9716 0.187821 7.8677C-0.189335 9.76379 0.00423516 11.7291 0.744053 13.5152C1.48387 15.3013 2.73671 16.8279 4.34414 17.9019C5.95157 18.976 7.84139 19.5493 9.77463 19.5493C11.9454 19.552 14.054 18.8247 15.7616 17.4844L19.9036 21.6386C20.0172 21.7531 20.1523 21.844 20.3012 21.906C20.4501 21.9681 20.6098 22 20.7711 22C20.9324 22 21.0921 21.9681 21.241 21.906C21.3899 21.844 21.525 21.7531 21.6386 21.6386C21.7531 21.525 21.844 21.3899 21.906 21.241C21.9681 21.0921 22 20.9324 22 20.7711C22 20.6098 21.9681 20.4501 21.906 20.3012C21.844 20.1523 21.7531 20.0172 21.6386 19.9036ZM2.44366 9.77463C2.44366 8.3247 2.87362 6.90733 3.67915 5.70176C4.48469 4.49619 5.62963 3.55656 6.96919 3.0017C8.30875 2.44683 9.78276 2.30166 11.2048 2.58452C12.6269 2.86739 13.9332 3.5656 14.9584 4.59085C15.9837 5.61611 16.6819 6.92236 16.9647 8.34443C17.2476 9.7665 17.1024 11.2405 16.5476 12.5801C15.9927 13.9196 15.0531 15.0646 13.8475 15.8701C12.6419 16.6756 11.2246 17.1056 9.77463 17.1056C7.83034 17.1056 5.96568 16.3332 4.59085 14.9584C3.21603 13.5836 2.44366 11.7189 2.44366 9.77463Z" fill="#1A1A1A"></path>
                    </svg>
                </button>
            </div>
        </aside>
    </header>
    <main class="main" id="main">
        <section class="seccion-biblioteca">
            <h1 class="seccion-biblioteca-titulo">Tus Favoritos</h1>
            <article class="biblioteca-detalle" id="tarjeta-container">

            </article>
        </section>
    </main>


    <script type="module" src="script.js"></script>

</body>

</html>