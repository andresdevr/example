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

### Patrones de diseño
_Los links son meras referencias generales de los patrones_
#### [Desarrollo por pruebas(TDD)](https://www.paradigmadigital.com/dev/tdd-como-metodologia-de-diseno-de-software/)
#### [Patrón Repository](https://medium.com/@cesiztel/repository-pattern-en-laravel-f66fcc9ea492)
#### [Patrón Decorator](https://dev.to/ahmedash95/design-patterns-in-php-decorator-with-laravel-5hk6)
#### [Patrón ViewPresenter](https://laraveles.com/vistas-mas-legibles-usando-presenters-en-laravel/)

## License
Por definir