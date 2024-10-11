//Botón Cargar Más
<button id="loadMore">Cargar más</button>
//Script para manejar el botón de cargar más

    // Seleccionamos el botón y las filas ocultas
    const loadMoreBtn = document.getElementById('loadMore');
    const hiddenRows = document.querySelectorAll('.hidden');
    let currentRow = 0;

    // Función que muestra más filas cuando se hace clic en el botón
    loadMoreBtn.addEventListener('click', function () {
        // Muestra 1 fila más cada vez que se hace clic
        for (let i = currentRow; i < currentRow + 1 && i < hiddenRows.length; i++) {
            hiddenRows[i].classList.remove('hidden'); // Muestra la fila
        }
        currentRow += 1;

        // Si ya no quedan más filas ocultas, oculta el botón
        if (currentRow >= hiddenRows.length) {
            loadMoreBtn.style.display = 'none';
        }
    });

