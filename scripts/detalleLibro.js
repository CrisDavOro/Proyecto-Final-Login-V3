export function detalleLibro(json) {
    let $main = document.getElementById("main"),
        $tarjetaContainer = document.getElementById("tarjeta-container"),
        portada = json['portada'],
        titulo = json['titulo'].replace(/_/g, " "),
        autor = json['autor'],
        descripcion = json['descripcion'],
        pdf = json['pdf'],

        $section = document.createElement("seccion"),
        $article = document.createElement("article"),
        $contenedor = document.createElement("div"),
        $detalle = document.createElement("div"),
        $buttonAbrir = document.createElement("button"),
        $buttonVolver = document.createElement("button"),
        $buttonFavorito = document.createElement("button");

    $buttonVolver.classList.add("libro-detalle-volver-boton");
    $buttonVolver.innerHTML = `<svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org 2000/svg"><path d="M2.0144 20C1.75082 20.0015 1.48953 19.9511 1.24552 19.8517C1.0015 19.7524 0.779561 19.606 0.592421 19.4209C0.404703 19.2352 0.255707 19.0144 0.154029 18.7711C0.0523498 18.5277 0 18.2667 0 18.0031C0 17.7395 0.0523498 17.4785 0.154029 17.2352C0.255707 16.9919 0.404703 16.771 0.592421 16.5854L7.22164 10.0158L0.852783 3.40621C0.479762 3.03208 0.270388 2.52597 0.270388 1.99844C0.270388 1.4709 0.479762 0.964796 0.852783 0.590662C1.03897 0.403502 1.26048 0.254948 1.50454 0.15357C1.74859 0.0521935 2.01037 0 2.27476 0C2.53915 0 2.80093 0.0521935 3.04499 0.15357C3.28904 0.254948 3.51055 0.403502 3.69674 0.590662L11.4275 8.57803C11.7945 8.9513 12 9.45314 12 9.97582C12 10.4985 11.7945 11.0003 11.4275 11.3736L3.41635 19.361C3.23658 19.5545 3.02013 19.7107 2.7795 19.8203C2.53887 19.93 2.27883 19.9911 2.0144 20Z" fill="#1A1A1A"/>
    </svg>Volver`;
    $buttonVolver.onclick = () => volver($section);

    $buttonAbrir.classList.add("libro-detalle-leer-boton");
    $buttonAbrir.innerHTML = `Comenzar a leer 
    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org 2000/svg"><path d="M2.0144 20C1.75082 20.0015 1.48953 19.9511 1.24552 19.8517C1.0015 19.7524 0.779561 19.606 0.592421 19.4209C0.404703 19.2352 0.255707 19.0144 0.154029 18.7711C0.0523498 18.5277 0 18.2667 0 18.0031C0 17.7395 0.0523498 17.4785 0.154029 17.2352C0.255707 16.9919 0.404703 16.771 0.592421 16.5854L7.22164 10.0158L0.852783 3.40621C0.479762 3.03208 0.270388 2.52597 0.270388 1.99844C0.270388 1.4709 0.479762 0.964796 0.852783 0.590662C1.03897 0.403502 1.26048 0.254948 1.50454 0.15357C1.74859 0.0521935 2.01037 0 2.27476 0C2.53915 0 2.80093 0.0521935 3.04499 0.15357C3.28904 0.254948 3.51055 0.403502 3.69674 0.590662L11.4275 8.57803C11.7945 8.9513 12 9.45314 12 9.97582C12 10.4985 11.7945 11.0003 11.4275 11.3736L3.41635 19.361C3.23658 19.5545 3.02013 19.7107 2.7795 19.8203C2.53887 19.93 2.27883 19.9911 2.0144 20Z" fill="#1A1A1A"/>
    </svg>`;
    $buttonAbrir.onclick = () => {
        location.replace(`../lecturaPDF/index.php${window.location.hash}`);
    };

    $buttonFavorito.classList.add("libro-detalle-favorito-boton");
    $buttonFavorito.onclick = () => {
        //ACA VA EL FETCH PARA AGREGARLO O ELIMINARLO DE FAVORITOS
    }

    $detalle.classList.add("libro-detalle-contenido");
    $detalle.innerHTML = `<h2 class="libro-detalle-titulo">${titulo.toUpperCase()}</h2>
    <h3 class="libro-detalle-autor">${autor}</h3>
    <p class="libro-detalle-descripcion">${descripcion}</p>`
    $detalle.appendChild($buttonAbrir);

    $contenedor.classList.add("libro-detalle-contenedor");
    $contenedor.innerHTML = `<img class="tarjeta-libro-portada" src="${portada}" alt="portada de ejemplo">`
    $contenedor.appendChild($detalle);

    $article.appendChild($buttonVolver);
    $article.classList.add("libro-detalle");
    $article.appendChild($contenedor);


    $section.classList.add("seccion-libro-detalle");
    $section.appendChild($article);

    $tarjetaContainer.classList.add("none");
    $main.appendChild($section);
}


function volver(e) {
    let $main = document.getElementById("main"),
        $tarjetaContainer = document.getElementById("tarjeta-container");
    $main.removeChild(e);
    $tarjetaContainer.classList.remove("none");
}