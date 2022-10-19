export function cargarSelect(element,tabla, columna) {
    const datos = new FormData();
    datos.append("tabla", tabla);
    datos.append("columna", columna);

    fetch("../scriptsPHP/selectColumna.php", {
        method: 'POST',
        body: datos
    }) 
        .then(res => res.json() )
        .then(json => {
            json.forEach(e => {
                let $option = document.createElement("option");
                $option.id = e.id;
                $option.value = e.valor;
                $option.innerHTML = e.valor;
                element.appendChild($option);
            });
        })
        .catch(error => console.error('Error: ', error))
}