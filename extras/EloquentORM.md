<img src="https://raw.githubusercontent.com/exegeses/laravel-46883/main/extras/imagenes/laravel-eloquent-orm.png">

# Eloquent ORM

>Laravel incluye Eloquent, un ORM (object-relational mapper) que simplifica la interacicón con bases de datos.  
>Al utilizar Eloquent, cada tabla de una base de datos tiene su Modelo correspondiente que se emplea para interactuar con dicha tabla.   
>Además de obtener registros de dicha tabla, los modelos de Eloquent posibilitan simplificaciones de inseción, modificación, y eliminación de registros de la tabla en cuestión.    

## Generación de clases de Modelos

    php artisan make:model Nombre    

## Convenciones de nombres de Modelos

> Los nombres de las tablas utilizan un sistema de plurales, si necesitamos modificarlos, tenemos el atributo $table.

    protected $table = 'mi_tabla';  

