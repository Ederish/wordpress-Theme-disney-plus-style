<?php
$apiKey = "a6304e3aeae5ada05e23b5e4bbbb9eff"; 
$baseUrl = "https://api.themoviedb.org/3";
$page = 1; // Página actual
$pageSize = 11; // Número de películas por página
$requestUrl = "{$baseUrl}/discover/movie?api_key={$apiKey}&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page={$page}&page_size={$pageSize}";

// Realizar la solicitud a la API
$response = file_get_contents($requestUrl);
// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Verificar si la solicitud fue exitosa
if (isset($data['status_code']) && $data['status_code'] == 34) {
    echo "Error: Película no encontrada";
} elseif ($data) {
    // Acceder a la clave 'results' que contiene la información de la película
    $results = $data['results'];

    foreach ($results as $movie) {
        echo '<div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 251px;">
                <div>
                    <div class="movieCard">
                        <a href="'. get_template_directory_uri() .'/includes/DetailPage.php">
                            <div class="movieCard__container">
                                <img class="movieCard__poster" src="https://image.tmdb.org/t/p/w500/' . $movie['backdrop_path'] . '" alt="' . $movie['original_title'] . '">
                            </div>
                        </a>
                    </div>
                </div>
            </div>';
    }
}
?>
