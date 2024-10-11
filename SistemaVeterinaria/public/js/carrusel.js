// Selecciona todos los elementos con la clase 'itemCarrousel' y los almacena en una NodeList
const items = document.querySelectorAll('.itemCarrousel');
// Inicializa el índice actual del carrusel en 0
let currentIndex = 0;

// Función para mostrar el elemento del carrusel correspondiente al índice dado
function showItem(index) {
    // Itera sobre cada elemento del carrusel
    items.forEach((item, i) => {
        // Agrega o quita la clase 'active' según si el índice actual coincide con el índice del elemento
        item.classList.toggle('active', i === index);
    });
}

// Función para avanzar al siguiente elemento del carrusel
function nextItem() {
    // Incrementa el índice actual y lo ajusta si supera el número total de elementos
    currentIndex = (currentIndex + 1) % items.length;
    // Muestra el elemento correspondiente al nuevo índice
    showItem(currentIndex);
}

// Función para retroceder al elemento anterior del carrusel
function prevItem() {
    // Decrementa el índice actual y lo ajusta si queda por debajo de 0
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    // Muestra el elemento correspondiente al nuevo índice
    showItem(currentIndex);
}

// Agrega un listener de eventos para el botón de avanzar (flecha derecha)
// Llama a la función nextItem cuando se hace clic en el botón
document.querySelector('.arrow-right').addEventListener('click', nextItem);

// Agrega un listener de eventos para el botón de retroceder (flecha izquierda)
// Llama a la función prevItem cuando se hace clic en el botón
document.querySelector('.arrow-left').addEventListener('click', prevItem);

// Establece un intervalo para cambiar automáticamente a la siguiente imagen cada 2 segundos (2000 ms)
setInterval(nextItem, 2000);

// Muestra el primer elemento del carrusel al cargar la página
showItem(currentIndex);
