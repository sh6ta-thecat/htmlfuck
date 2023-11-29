// Obtenemos todos los elementos de anclaje en el contenedor de URL
const links = document.querySelectorAll('.url-container a');

// Agregamos un event listener a cada enlace
links.forEach(link => {
    link.addEventListener('click', function (event) {
        // Evitamos que el enlace se abra en una nueva pestaña
        event.preventDefault();
        
        // Obtenemos la URL del enlace
        const url = this.getAttribute('href');
        
        // Actualizamos la fuente del iframe para cargar la URL
        document.getElementById('iframe-container').src = url;
    });
});
