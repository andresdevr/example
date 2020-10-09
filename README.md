# ERP
Este proyecto busca optimizar el trabajo de cotizar y adminstrar

## Instalación
### Desarrollo
Para realizar la instalación en entorno local es necesario de las siguientes dependencias de desarrollo
- [Laravel 7.x](laravel.com/docs/7.x/)  
- [PHP >= 7.2.5](php.net)
- [Node >= 14.4.0](nodejs.org)
- [NPM >= 6.14.4](npmjs.com)
- [Redis](redis.io)
- [Homestead(Linux)](laravel.com/docs/7.x/homestead) o [Valet(MacOs)](laravel.com/docs/7.x/valet) o [Laragon(Windows)](laragon.org)

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
php artisan ziggy:generate
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

```python
import foobar

foobar.pluralize('word') # returns 'words'
foobar.pluralize('goose') # returns 'geese'
foobar.singularize('phenomena') # returns 'phenomenon'
```

## Contribuir al desarrollo

Las pull request son bienvenidas siempre y cuando sigan las reglas de conducta las cuales indican seguir las convenciones y patrones de diseño definidos a continuación

### Convenciones
- Todas las clases deben comenzar por mayúsculas  
- Todos los métodos de los test deben seguir [snake_case](wikipedia.org/wiki/Snake_case)
- Todas las interfaces deben tener el sufijo `Interface`
- Todos repositorios deben tener el sufijo `Repository`  
- Todos los decoradores deben tener el sufijo `Decorator`
- Todos los viewPresenters deben tener el sufijo `ViewPresenter`
- Todas las interfaces deben ser añadidos en la carpeta `app/Interfaces`
- Todos los repositorios deben ser añadidos en la carpeta `app/Repositories`  
- Todos los decoradores deben ser añadidos en la carpeta `app/Decorators` con la ruta del decorado que hacen, por ejemplo `app/Decorators/Cache/UserDecorator.php`  
- Todos los viewPresenters deben ser añadidos en la carpeta `app/ViewPresenters`
- Todos los traits deben ser añadidos en la carpeta `app/Traits/`  
- Todos los modelos deben ser añadidos en la carpeta `app/Models/`
- Todos los modelos deben tener un método llamado `presenter` que retorne una instancia del `ViewPresenter` relacionado a este modelo
- Todos los modelos deben definir la propiedad `$fillable` para utilizar el método `create`
- Todos las relaciones de modelos deben contar con un [feature test](laravel.com/docs/7.x/testing#creating-and-running-tests)  
- Todos los modelos deben contar con:  
    - Un [ViewPresenter](laraveles.com/vistas-mas-legibles-usando-presenters-en-laravel)  
    - Un [recurso](laravel.com/docs/7.x/eloquent-resources) de eloquent  
    - Un [controlador](laravel.com/docs/7.x/controllers#restful-partial-resource-routes) de tipo recurso API (opcional)  
    - Un [recurso de colleción](laravel.com/docs/7.x/eloquent-resources#pagination) para datos paginados  
    - Un [repositorio](medium.com/@cesiztel/repository-pattern-en-laravel-f66fcc9ea492) (Solo en caso de tener un controlador)  
    - Un [decorador](dev.to/ahmedash95/design-patterns-in-php-decorator-with-laravel-5hk6) (Solo en caso de tener un controlador)  
- Todos los controladores que interactuen con modelos directamente deben ser creados como [controladores de recursos API](laravel.com/docs/7.x/controllers#restful-partial-resource-routes)  
- Todas las acciones que requieran de mas métodos ademas del CRUD deben ser definidos como [controladores de una sola acción](laravel.com/docs/7.x/controllers#single-action-controllers)  
- Todas las rutas deben contar con un [request de validación](laravel.com/docs/7.x/validation#creating-form-requests)  
- Todos los métodos de los controladores deben contar con un [unit test](laravel.com/docs/7.x/http-tests)
- Todos los métodos de los controladores deben contar con un [dusk test](laravel.com/docs/7.x/dusk#getting-started)  
- La única función de los métodos de controladores es llamar a repositorios, decoradores, eventos y/o trabajos
- todas las rutas deben devolver un [recurso api](laravel.com/docs/7.x/eloquent-resources) en respuestas  200 > 300 (status)
- Las rutas tipo `index` deben devolver un recurso de tipo [colección](laravel.com/docs/7.x/eloquent-resources#writing-resources) o un tipo [paginación](laravel.com/docs/7.x/eloquent-resources#pagination)
- Las rutas de tipo `store` deben devolver un [recurso API](laravel.com/docs/7.x/eloquent-resources#writing-resources) del registro creado en la base de datos
- Las rutas de tipo `update` deben devolver un [recurso API](laravel.com/docs/7.x/eloquent-resources#writing-resources) del registro actualizado en la base de datos
- las rutas de tipo `destroy` deben devolver un [recurso API](laravel.com/docs/7.x/eloquent-resources#writing-resources) del registro eliminado
- El uso de servicios de terceros como [APIs](xataka.com/basics/api-que-sirve) de desarrollan en un [paquete externo](laravel.com/docs/7.x/packages) privado al repositorio
- El envio de correos se delega a las [colas](laravel.com/docs/7.x/queues)
- El uso de broadcasting se delega a las [colas](laravel.com/docs/7.x/queues)  


### Patrones de diseño
_Los links son meras referencias generales de los patrones_
#### [Desarrollo por pruebas(TDD)](www.paradigmadigital.com/dev/tdd-como-metodologia-de-diseno-de-software)
#### [Patrón Repository](medium.com/@cesiztel/repository-pattern-en-laravel-f66fcc9ea492)
#### [Patrón Decorator](dev.to/ahmedash95/design-patterns-in-php-decorator-with-laravel-5hk6)
#### [Patrón ViewPresenter](laraveles.com/vistas-mas-legibles-usando-presenters-en-laravel)

## License
Por definir