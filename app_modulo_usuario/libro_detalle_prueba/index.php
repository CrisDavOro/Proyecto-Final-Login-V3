<?php
    include("../scriptsPHP/manejoSesion.inc");

    echo '';
?>

<!DOCTYPE html>
    <html lang="es">
        
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Kindlen`t</title>
        <link rel="icon" href="../assets/icono.svg"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet"> 
    </head>
    
    <body id="body">
        <header class="header" id="home">
            <div class="header-logo">
                <a href="../menu/index.php"><img src="../assets/logo.svg" alt=""></a>
            </div>
            <aside class="header-buscador" id="buscador-contenedor">
                <div class="header-buscador-filtro" id="buscador-filtro">
                    
                    <ul class="header-buscador-filtro-lista " id="buscador-filtro-lista">
                        <li>
                            <label for="autor">Autor</label>
                            <input type="checkbox" name="autor" id="autor">
                        </li>
                        <li>
                            <label for="genero">Genero</label>
                            <input type="checkbox" name="genero" id="genero">
                        </li>
                        <li>
                            <label for="titulo">Titulo</label>
                            <input type="checkbox" name="titulo" id="titulo">
                        </li>
                        <li>
                            <label for="gratis">Gratuito</label>
                            <input type="checkbox" name="gratis" id="gratis">
                        </li>
                    </ul>
                    <button class="header-buscador-filtro-boton" id="buscador-filtro-boton">
                        <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.86318e-05 1.80758C-0.00133894 1.57106 0.043993 1.3366 0.133429 1.11764C0.222864 0.898677 0.354643 0.699523 0.521206 0.531596C0.688274 0.363152 0.887041 0.229454 1.10604 0.138214C1.32504 0.0469752 1.55994 1.96046e-07 1.79719 1.93217e-07C2.03443 1.90387e-07 2.26933 0.0469752 2.48833 0.138214C2.70733 0.229454 2.9061 0.363152 3.07317 0.531596L8.98582 6.48019L14.9344 0.765227C15.2711 0.430505 15.7266 0.242627 16.2014 0.242627C16.6762 0.242627 17.1317 0.430505 17.4684 0.765227C17.6368 0.932296 17.7705 1.13106 17.8618 1.35006C17.953 1.56906 18 1.80396 18 2.04121C18 2.27846 17.953 2.51335 17.8618 2.73235C17.7705 2.95135 17.6368 3.15012 17.4684 3.31719L10.2798 10.2542C9.94383 10.5835 9.49217 10.768 9.02176 10.768C8.55135 10.768 8.09969 10.5835 7.76375 10.2542L0.575119 3.06559C0.400917 2.90428 0.260403 2.71005 0.161694 2.49413C0.0629864 2.2782 0.0080395 2.04486 2.86318e-05 1.80758Z" fill="#1A1A1A"/>
                        </svg>
                    </button>
                </div>
                <div class="header-buscador-barra">
                    <input type="text" class="header-buscador-barra-input" id="buscador-input">
                    <button class="header-buscador-barra-boton">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.6386 19.9036L17.4844 15.7616C18.8247 14.054 19.552 11.9454 19.5493 9.77463C19.5493 7.84139 18.976 5.95157 17.9019 4.34414C16.8279 2.73671 15.3013 1.48387 13.5152 0.744053C11.7291 0.00423516 9.76379 -0.189335 7.8677 0.187821C5.9716 0.564977 4.22993 1.49592 2.86293 2.86293C1.49592 4.22993 0.564977 5.9716 0.187821 7.8677C-0.189335 9.76379 0.00423516 11.7291 0.744053 13.5152C1.48387 15.3013 2.73671 16.8279 4.34414 17.9019C5.95157 18.976 7.84139 19.5493 9.77463 19.5493C11.9454 19.552 14.054 18.8247 15.7616 17.4844L19.9036 21.6386C20.0172 21.7531 20.1523 21.844 20.3012 21.906C20.4501 21.9681 20.6098 22 20.7711 22C20.9324 22 21.0921 21.9681 21.241 21.906C21.3899 21.844 21.525 21.7531 21.6386 21.6386C21.7531 21.525 21.844 21.3899 21.906 21.241C21.9681 21.0921 22 20.9324 22 20.7711C22 20.6098 21.9681 20.4501 21.906 20.3012C21.844 20.1523 21.7531 20.0172 21.6386 19.9036ZM2.44366 9.77463C2.44366 8.3247 2.87362 6.90733 3.67915 5.70176C4.48469 4.49619 5.62963 3.55656 6.96919 3.0017C8.30875 2.44683 9.78276 2.30166 11.2048 2.58452C12.6269 2.86739 13.9332 3.5656 14.9584 4.59085C15.9837 5.61611 16.6819 6.92236 16.9647 8.34443C17.2476 9.7665 17.1024 11.2405 16.5476 12.5801C15.9927 13.9196 15.0531 15.0646 13.8475 15.8701C12.6419 16.6756 11.2246 17.1056 9.77463 17.1056C7.83034 17.1056 5.96568 16.3332 4.59085 14.9584C3.21603 13.5836 2.44366 11.7189 2.44366 9.77463Z" fill="#1A1A1A"/>
                            </svg>
                    </button>
                </div>
            </aside>
        </header>
    
        <nav class="navegador" id="navegador">
            <button class="navegador-boton" id="navegador-boton">
                <svg width="15" height="24" viewBox="0 0 15 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.4101 24C2.09475 24.0018 1.78213 23.9413 1.49018 23.8221C1.19824 23.7028 0.932697 23.5271 0.708795 23.3051C0.484202 23.0823 0.305938 22.8173 0.184286 22.5253C0.0626333 22.2333 0 21.9201 0 21.6038C0 21.2874 0.0626333 20.9742 0.184286 20.6822C0.305938 20.3902 0.484202 20.1252 0.708795 19.9024L8.64025 12.0189L1.0203 4.08745C0.574006 3.63849 0.323503 3.03117 0.323503 2.39812C0.323503 1.76508 0.574006 1.15775 1.0203 0.708795C1.24306 0.484202 1.50808 0.305937 1.80009 0.184285C2.09209 0.0626322 2.40528 0 2.72161 0C3.03794 0 3.35114 0.0626322 3.64314 0.184285C3.93514 0.305937 4.20016 0.484202 4.42292 0.708795L13.6723 10.2936C14.1113 10.7416 14.3573 11.3438 14.3573 11.971C14.3573 12.5982 14.1113 13.2004 13.6723 13.6483L4.08745 23.2332C3.87237 23.4654 3.6134 23.6528 3.3255 23.7844C3.0376 23.916 2.72648 23.9893 2.4101 24Z" />
                    </svg>
            </button>
            <ul class="navegador-lista">
                <li>
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 0L32 17.0667H28V32H20V21.3333H12V32H4V17.0667H0L16 0Z" fill="#1A1A1A"/>
                        </svg>
                    <label for="">Inicio</label>
                </li>
                <li>
                    <svg width="25" height="32" viewBox="0 0 25 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.4444 14.2222C13.8509 14.2222 15.2257 13.8052 16.3952 13.0238C17.5646 12.2424 18.476 11.1318 19.0143 9.83242C19.5525 8.53303 19.6933 7.10322 19.4189 5.7238C19.1445 4.34438 18.4673 3.07731 17.4728 2.0828C16.4783 1.08829 15.2112 0.411025 13.8318 0.136641C12.4523 -0.137743 11.0225 0.00308114 9.72314 0.541304C8.42375 1.07953 7.31315 1.99098 6.53177 3.16039C5.75039 4.32981 5.33333 5.70467 5.33333 7.11111C5.33333 8.9971 6.08254 10.8058 7.41613 12.1394C8.74972 13.473 10.5585 14.2222 12.4444 14.2222ZM23.1111 32C23.5826 32 24.0348 31.8127 24.3682 31.4793C24.7016 31.1459 24.8889 30.6937 24.8889 30.2222C24.8889 26.9217 23.5778 23.7565 21.244 21.4227C18.9102 19.0889 15.7449 17.7778 12.4444 17.7778C9.14397 17.7778 5.97868 19.0889 3.64489 21.4227C1.31111 23.7565 4.91809e-08 26.9217 0 30.2222C0 30.6937 0.187301 31.1459 0.520699 31.4793C0.854097 31.8127 1.30628 32 1.77778 32H23.1111Z" fill="#1A1A1A"/>
                        </svg>
                        <label for="">Perfil</label>
                </li>
                <li>
                    <svg width="20" height="28" viewBox="0 0 20 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0H20V28L10 22L0 28V0Z" fill="#1A1A1A"/>
                        </svg>
                        <label for="">Favoritos</label>
                </li>
            </ul>
            <button class="navegador-salir" id="cerrar-sesion">
                <svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4 0H28.7999C30.5648 0 32 1.4352 32 3.2V25.6C32 27.3648 30.5648 28.8 28.7999 28.8H14.4C12.6352 28.8 11.2 27.3648 11.2 25.6V19.2H14.4V25.6H28.7999V3.2H14.4V9.6H11.2V3.2C11.2 1.4352 12.6352 0 14.4 0ZM8 12.8H22.4V16H8V20.8L0 14.4L8 8V12.8Z" fill="black"/>
                    </svg>
                    <label for="">Cerrar Sesion</label>
            </button>
        </nav>
    
        <main class="main">
            <h1 class="seccion-libro-detalle-titulo">El camino de los reyes</h1>    
            <section class="seccion-libro-detalle">
                <article class="libro-detalle">
                    <div class="libro-detalle-contenedor">
                        <img class="libro-detalle-imagen" src="../assets/portada-ejemplo.png" alt="portada de ejemplo">
                        
                        <div class="libro-detalle-contenido">
                            <h2 class="libro-detalle-titulo">El camino de los reyes (El archivo de las tormenteas 1)</h2>
                            <h3 class="libro-detalle-autor">Brandon Sanderson</h3>
                            <p class="libro-detalle-descripcion">En Roshar, un mundo de piedra y tormentas, extrañas tempestades de increíble potencia barren el rocoso territorio de tal manera que han dado forma a una nueva civilización escondida. Han pasado siglos desde la caída de las diez órdenes consagradas conocidas como los Caballeros Radiantes, pero sus espadas y armaduras aún permanecen.
                                En las Llanuras Quebradas se libra una guerra sin sentido. Kaladin ha sido sometido a la esclavitud, mientras diez ejércitos luchan por separado contra un solo enemigo. El comandante de uno de los otros ejércitos, el señor Dalinar, se siente fascinado por un antiguo texto llamado El camino de los reyes. Mientras tanto, al otro lado del océano, su eminente y hereje sobrina, Jasnah Kholin, forma a su discípula, la joven Shallan, quien investigará los secretos de los Caballeros Radiantes y la verdadera causa de la guerra.</p>
                                <button class="libro-detalle-leer-boton" id="comenzar-leer">Comenzar a leer <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.0144 20C1.75082 20.0015 1.48953 19.9511 1.24552 19.8517C1.0015 19.7524 0.779561 19.606 0.592421 19.4209C0.404703 19.2352 0.255707 19.0144 0.154029 18.7711C0.0523498 18.5277 0 18.2667 0 18.0031C0 17.7395 0.0523498 17.4785 0.154029 17.2352C0.255707 16.9919 0.404703 16.771 0.592421 16.5854L7.22164 10.0158L0.852783 3.40621C0.479762 3.03208 0.270388 2.52597 0.270388 1.99844C0.270388 1.4709 0.479762 0.964796 0.852783 0.590662C1.03897 0.403502 1.26048 0.254948 1.50454 0.15357C1.74859 0.0521935 2.01037 0 2.27476 0C2.53915 0 2.80093 0.0521935 3.04499 0.15357C3.28904 0.254948 3.51055 0.403502 3.69674 0.590662L11.4275 8.57803C11.7945 8.9513 12 9.45314 12 9.97582C12 10.4985 11.7945 11.0003 11.4275 11.3736L3.41635 19.361C3.23658 19.5545 3.02013 19.7107 2.7795 19.8203C2.53887 19.93 2.27883 19.9911 2.0144 20Z" fill="#1A1A1A"/>
                                    </svg>
                                </button>
                        </div>
                    </div> 
                </article>
            </section>
            
        </main>
    
        <footer class="footer">
        </footer>
    
        <script src="script.js"></script>
    </body>
    
    </html>