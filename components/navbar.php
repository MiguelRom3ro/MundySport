<link rel="stylesheet" type="text/css" href="../recourses/css/estilos.css">

<nav class='navbar navbar-expand-lg colorNav d-flex ps-2'>
    <div class='container-fluid'>
        <a class='navbar-brand' href='#'>
            <img src='../recourses/img/logoNav.png' alt='logo' height='40rem'>
        </a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent'
            aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                <li class='nav-item'>
                    <a class='nav-link active' aria-current='page' href='#'>Inicio</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='catalogo.php'>Catalogo</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='inventario.php'>Inventario</a>
                </li>
            </ul>
            <form class='d-flex' role='search'>
                <input id="searchInput" class='form-control me-2' type='search' placeholder='Buscar'
                    aria-label='Search'>
                <button id="searchButton" class='btn btn-outline-secondary' type='submit'>
                    <img src='../recourses/img/buscar.png' alt='buscar' class='img-fluid'>
                </button>
            </form>
        </div>
    </div>
</nav>

<script>
document.getElementById("searchButton").addEventListener("click", function(event) {
    event.preventDefault(); // Evita el envío del formulario

    // Obtén el valor del campo de entrada
    var search = document.getElementById("searchInput").value;

    if (search.trim() === "") {
            alert("Por favor, ingresa algo en el campo de búsqueda.");
            return; // Detiene la ejecución si el campo está vacío
        }

    // Redirige a la página de búsqueda con el valor de búsqueda
    window.location.href = "busqueda.php?search=" + encodeURIComponent(search);
});
</script>