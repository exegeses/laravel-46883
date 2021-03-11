#Cómo trabajar con base de datos

> Laravel utiliza PDO
> Primero debemos setear el archivo de configuración general

    .env

> Laravel utiliza dos capas de antracción
> (clases) que nos facilitan el trabajo con SQL y bases de datos
> Estas dos clases son:

      Raw SQL
      Fluent Query Builder

<img src="https://raw.githubusercontent.com/exegeses/laravel-46883/main/extras/capas-rSQL%2BfQB.png">

## Raw SQL

	DB::select('SELECT ...');
	DB::insert('INSERT INTO.....');
	DB::update('UPDATE ....');
	DB::delete('DELETE FROM...');

