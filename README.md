# ERP
Este proyecto busca optimizar el trabajo de cotizar y adminstrar

## Instalación
### Desarrollo
Para realizar la instalación en entorno local es necesario de las siguientes dependencias de desarrollo  
- [Laravel 7.x](https://laravel.com/docs/7.x/)  
- [PHP >= 7.2.5](https://php.net)  
- [Node >= 14.4.0](https://nodejs.org)  
- [NPM >= 6.14.4](https://npmjs.com)  
- [Redis](https://redis.io)  
- [Homestead(Linux)](https://laravel.com/docs/7.x/homestead) o [Valet(MacOs)](https://laravel.com/docs/7.x/valet) o [Laragon(Windows)](https://laragon.org)  

Una vez satisfechas las dependencias es necesario correr los siguientes comandos
```bash
composer install  
composer run post-autoload-dump  
composer run post-root-package-install  
composer run post-root-package-dusk-install
composer run post-create-project-cmd  

```
Una vez se definen las variables de entorno en tu archivo `.env` y las variables de entorno para pruebas en tu archivo `.env.dusk.local` corre lo siguientes comandos

```bash
php artisan migrate
php artisan db:seed
php artisan dusk:install
php artisan cache:clear
php artisan config:clear
php artisan event:clear
php artisan optimize:clear
php artisan routes:clear
php artisan view:clear
php artisan ziggy:generate resources/js/ziggy.js
npm install
npm run dev
```
Y puedes correr los tests con lo siguientes comandos(opcionales)

```bash
php artisan test # pruebas unitarias y de caracteristicas
php artisan dusk # pruebas de navegado3
```
### Produccion

## Actualización

### Desarrollo


### Produccion



## Uso
Para desarrollar el frontend recomiendo mantener un watcher encendido para compilar cambios

```bash
npm run watch
```

## Contribuir al desarrollo

Las pull request son bienvenidas siempre y cuando sigan las reglas de conducta las cuales indican seguir las convenciones y patrones de diseño definidos a continuación

### Convenciones
- Todas las clases e interfaces deben comenzar por mayúsculas  
- Todos los métodos de los test deben seguir [snake_case](https://wikipedia.org/wiki/Snake_case)
- Todas las interfaces deben tener el sufijo `Interface`
- Todos repositorios deben tener el sufijo `Repository`  
- Todos los decoradores deben tener el sufijo `Decorator`
- Todos los viewPresenters deben tener el sufijo `Presenter`
- Todas las interfaces deben ser añadidos en la carpeta `app/Interfaces`
- Todos los repositorios deben ser añadidos en la carpeta `app/Repositories`  
- Todos los decoradores deben ser añadidos en la carpeta `app/Decorators` con la ruta del decorado que hacen, por ejemplo `app/Decorators/Cache/UserDecorator.php`  
- Todos los viewPresenters deben ser añadidos en la carpeta `app/Presenters`
- Todos los traits deben ser añadidos en la carpeta `app/Traits/`  
- Todos los modelos deben ser añadidos en la carpeta `app/Models/`
- Todos los modelos deben tener un método llamado `present` que retorne una instancia del `ViewPresenter` relacionado a este modelo
- Todos los modelos deben definir la propiedad `$fillable` para utilizar el método `create`
- Todos las relaciones de modelos deben contar con un [unit test](https://laravel.com/docs/7.x/testing#creating-and-running-tests)  
- Todos los modelos deben contar con:  
    - Un [Factory](https://laravel.com/docs/7.x/database-testing#writing-factories)
    - Un [ViewPresenter](https://laraveles.com/vistas-mas-legibles-usando-presenters-en-laravel)  
    - Un [recurso API](https://laravel.com/docs/7.x/eloquent-resources) de eloquent  
    - Un [controlador](https://laravel.com/docs/7.x/controllers#restful-partial-resource-routes) de tipo recurso API (opcional)  
    - Un [recurso de colleción](https://laravel.com/docs/7.x/eloquent-resources#pagination) para datos paginados  
    - Un [repositorio](https://medium.com/@cesiztel/repository-pattern-en-laravel-f66fcc9ea492) (Solo en caso de tener un controlador)  
    - Un [decorador](https://dev.to/ahmedash95/design-patterns-in-php-decorator-with-laravel-5hk6) (Solo en caso de tener un controlador)  
- Todos los controladores que interactuen con modelos directamente deben ser creados como [controladores de recursos API](https://laravel.com/docs/7.x/controllers#restful-partial-resource-routes)  
- Todas las acciones que requieran de mas métodos ademas del CRUD deben ser definidos como [controladores de una sola acción](https://laravel.com/docs/7.x/controllers#single-action-controllers)  
- Todas las rutas deben contar con un [request de validación](https://laravel.com/docs/7.x/validation#creating-form-requests)  
- Todos los métodos de los controladores deben contar con un [feature test](https://laravel.com/docs/7.x/http-tests)
- Todos los métodos de los controladores deben contar con un [dusk test](https://laravel.com/docs/7.x/dusk#getting-started)  
- La única función de los métodos de controladores es llamar a repositorios, decoradores, eventos y/o trabajos
- todas las rutas deben devolver un [recurso api](https://laravel.com/docs/7.x/eloquent-resources) en respuestas  200 > 300 (status)
- Las rutas tipo `index` deben devolver un recurso de tipo [colección](https://laravel.com/docs/7.x/eloquent-resources#writing-resources) o un tipo [paginación](https://laravel.com/docs/7.x/eloquent-resources#pagination)
- Las rutas de tipo `store` deben devolver un [recurso API](https://laravel.com/docs/7.x/eloquent-resources#writing-resources) del registro creado en la base de datos
- Las rutas de tipo `update` deben devolver un [recurso API](https://laravel.com/docs/7.x/eloquent-resources#writing-resources) del registro actualizado en la base de datos
- las rutas de tipo `destroy` deben devolver un [recurso API](https://laravel.com/docs/7.x/eloquent-resources#writing-resources) del registro eliminado
- El uso de servicios de terceros como [APIs](https://xataka.com/basics/api-que-sirve) se desarrollan en un [paquete externo](https://laravel.com/docs/7.x/packages) privado al repositorio
- El envio de correos se delega a las [colas](https://laravel.com/docs/7.x/queues)
- El uso de broadcasting se delega a las [colas](https://laravel.com/docs/7.x/queues)  
- Al añadir cualquier paquete de desarrollo para backend o frontend, añadir una pequeña descripción en el apartado de Recursos
- Toda operación de guardar modelos masivamente, debe mandarse al job `SaveModel' pasando la instancia del modelo a guardar


### Patrones de diseño
_Los links son meras referencias generales de los patrones_
#### [Desarrollo por pruebas(TDD)](https://www.paradigmadigital.com/dev/tdd-como-metodologia-de-diseno-de-software)
#### [Patrón Repository](https://medium.com/@cesiztel/repository-pattern-en-laravel-f66fcc9ea492)
#### [Patrón Decorator](https://dev.to/ahmedash95/design-patterns-in-php-decorator-with-laravel-5hk6)
#### [Patrón ViewPresenter](https://laraveles.com/vistas-mas-legibles-usando-presenters-en-laravel)

### Recursos

#### Backend
Entre los distintos paquetes utilizados para agilizar el desarrollo del backend tenemos  
- [barryvdh/laravel-dompdf](https://github.com/barryvdh/laravel-dompdf) Utilizado para generar los archivos pdf  
- [maatwebsite/excel](https://github.com/Maatwebsite/Laravel-Excel) Utilizado para generar resumenes para excel  
- [predis/predis](https://laravel.com/docs/7.x/cache#driver-prerequisites) Utilizado para conectar con  [Redis](https://redis.io/)
- [pusher/pusher-php-server](https://laravel.com/docs/7.x/broadcasting#driver-prerequisites) Utilizado para conectar con [Pusher](https://pusher.com/)  
- [tightenco/ziggy](https://github.com/tighten/ziggy) Utilizado oara obtener las rutas de laravel en js
- [laravel/dusk](https://laravel.com/docs/7.x/dusk) Utilizado para los tests en navegador  
- [askedio/laravel-soft-cascade](https://github.com/Askedio/laravel-soft-cascade) Utilizado para eliminar en soft deletes en cascada

#### Frontend
Entre los distintos modulos y frameworks utilizados para el desarrollo de frontend tenemos  
- [axios](https://github.com/axios/axios) Para peticiones http(disponible de manera global como `axios`) 
- [font-awesome](https://fontawesome.com/) Los iconos a utilizar utilizados mediante componentes de [buefy](https://buefy.org/documentation/icon)
- [vue](https://vuejs.org/) Para manipular las vistas con reactividad  
- [buefy](https://buefy.org/documentation/autocomplete) El framework de diseños principal, todos los componentes se encuentran de manera global
- [bulma](https://bulma.io/) Buefy dispone de todas las clases de este framework, utilizado para añadir nuevos componentes  
- [tailwindcss](https://tailwindcss.com) Para diseño responsivo y agil  
- [vue-apexcharts](https://apexcharts.com/docs/vue-charts/) Para crear gráficos reactivos
- [vue-clipboard2](https://www.npmjs.com/package/vue-clipboard2) Para realizar la operación de copiar de manera rápida
- [vue-meta](https://vue-meta.nuxtjs.org/) Para manipular etiquetas meta como el titulo
- [vue-router](https://router.vuejs.org/) Para la construccion de [SPA](https://es.wikipedia.org/wiki/Single-page_application)
- [vue-cookies](https://github.com/cmp-cc/vue-cookies) Para realizar operaciones con las cookies de manera reactiva
- [vue2-filters](https://github.com/freearhey/vue2-filters) Para aplicar mascaras de filtro a valores  
- [vuex](https://vuex.vuejs.org/) Para almacenar información de manera general  
- [lodash](https://lodash.com/docs/) Para operaciones varias con arrays y objetos
- [validator](https://www.npmjs.com/package/validator) Para validar valores  
- [laravel-echo](https://laravel.com/docs/7.x/broadcasting#installing-laravel-echo) Para escuchar canales de pusher(disponible de manera global como `Echo`)  
- [ziggy](https://www.npmjs.com/package/ziggy-js) Para acceder a las rutas de laravel ([función](https://github.com/tighten/ziggy#usage) disponible de manera global como `route()`)
## License
Por definir