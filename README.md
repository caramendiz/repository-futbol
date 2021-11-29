## Comenzamos 

_Este repositoria esta creado en laravel 8_

Desarrollador por Aramendiz Carlos @caramendiz

### Pre-requisitos

_Necesitas tener instaldo php 7.4_

### Instalación

_Necesitamos prepara la base de datos de MySql en el archivo " .env "  _
_Acontinuación instalaremos la carpeta vendor _

```
composer install 
```

_Creamos las migraciones_

```
php artisan migrate
```

_Acontinuación generamos el seeder para generar los datos por defecto <abbr title="Para un buen funcionamiento es necesario este paso">IMPORTATE</abbr>_

```
php artisan db:seed
```

### Ejecución 

_Todo esta listo para iniciar el servidor_

```
php artisan serve 
```

###Url()

>`<link>` : http://127.0.0.1:8000/futbol

## Construido con


* [Laravel](https://laravel.com/) - El framework web usado
* [bootstrap](https://getbootstrap.com) - bootstrap



---
