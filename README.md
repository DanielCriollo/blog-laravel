
# Blog - Noticiero

Proyecto es un blog/noticiero que utiliza dos APIs externas para obtener información. Se centra en mostrar noticias de diversas categorías utilizando [News API](https://newsapi.org/) y asigna automáticamente un autor de [Random User API](https://randomuser.me/) a cada artículo. La aplicación despliega 10 artículos/noticias por página con paginación al final.


## Requisitos
 Laravel 11
- PHP 8.3.4
- NPM 10.2.4
- Composer 2.6.5
## Instalación

```bash
1. Clona el repositorio: `git clone https://github.com/davidgit2022/blog-noticiero.git`
2. Navega al directorio del proyecto: `cd blog-noticiero`
3. Instala las dependencias de Laravel: `composer install`
4. Instala las dependencias de JavaScript: `npm install`



```
    
## Configuración de API

- Obtén una clave de API de [News API](https://newsapi.org/) y configúrala en tu archivo `.env`. Ejemplo:

    NEWSAPI_KEY=TU_CLAVE_API
- Abre el archivo `config/services.php` y agrega la siguiente configuración:
    ```php
    'newsapi' => [
        'key' => env('NEWSAPI_KEY')
    ]`.


## Uso
- Ejecuta el script de JavaScript: `npm run dev`.
- Ejecuta la aplicación de Laravel: `php artisan serve`.
- Visita `http://localhost:8000` en tu navegador..



## Estructura del Proyecto
- `app/Http/Controllers/BlogController.php`: Controlador principal que gestiona la vista y consume el servicio `NewsService`.
- `app/Services/NewsService.php`: Servicio que realiza la lógica principal del proyecto, con métodos para obtener noticias y autores.
- `app/Utils/ApiUtils.php`: Archivo que contiene funciones para realizar solicitudes a las APIs externas, separando la lógica de API.
- `resources/views/blog/index.blade.php`: Vista Blade que renderiza la lista de noticias.
- `resources/js/paginate.js`: Script de JavaScript para renderizar la vista y gestionar la paginación.
- `tests/Htttp/` y `tests/Utils/`: Carpeta que contiene pruebas unitarias para la aplicación.

## Contacto
    danielcriollo9706@gmail.com