<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Krimonet

**Proyecto en construcción (Guía de instalación de un nuevo proyecto):**

- $composer create-project laravel/laravel miweb --prefer-dist
- $php composer dump-autoload
- .env editar la parte de MySql y añadir tus credenciales a BBDD
- $php artisan migrate
- Nuevo metodo de Auth (Ya no vale "php artisan make:auth") "Laravel 6+"
- $composer require laravel/ui (Creamos con composer ui)
- $php artisan ui "bootstrap/vue/react" (Instalamos libreria de estilos)
- $npm install && npm run dev (Compilamos las librerias de "bootstrap/vue/react")
- $php artisan ui (Creamos las views y si existen las remplaza)

**Instalación Krimonet**

- $git clone https://github.com/jaamito/Krimonet.git
- $composer update
- $cp .env.example .env
- $composer dump-autoload
- Crear BBDD en local
- $php artisan migrate

## Idea
Crear un proyecto donde se cubra la necesidad de gestionar la agenda de empresas de servicio de proximidad 
(peluquerías, estilistas, fisios, masajes, dentistas, etc).

Servicios Modulares:
- Gestor de clientes
- Gestor de recursos (empleados / máquinas / Boxes)
- Gestor de agenda por recursos
- Gestor de sedes
- Gestor de productos / Servicios
- Web corporativa

Plugins:
- Facturación

Dispositivos:
- Tablet de gestión - Terminal
- Terminal de ticket de turno

## Documentación
### Section :: Registro
En el proceso de registro se realiza en dos pasos, el primero se da de alta el establecimiento, dicho establecimiento internamente (Base de datos) se desglosará 
como franquicia (Entidad: franchises) y como establecimiento como tal (Entidad: stores), los datos que se pedirán son: Nombre Comercial, Dirección completa, 
posicionamiento en google maps (automática), imagen (ésta se guardará como franquicia, dejando el campo imagen de la entidad store a nulo.

El segundo paso daremos de alta el usuario, dicho usuario, que será en calidad de cliente (user_type: client) lo daremos de alta como Administrador 
(system_user_relation_types: administrator) de la franquicia (user_franchise), esto prebalecerá sobre el establecimiento, los datos que pediremos serán:
Nombre, email (único y obligatorio), verificación de email, contraseña y verificación de contraseña (deben ser fuerte y pondremos un medidor de fuerza, 
[minúsculas, mayúsculas, números y una longitud mínima de 8 carácteres]

#### Permisos por tipología
- **BRAND**
	- *Gestor de sedes*:
		- [system_user_relation_types = administrator]
			- Podrá crear franquicias
			- Podrá crear establecimientos y grupos (stores)
			- Podrá asignar/modificar establecimientos de grupos y franquicias
			- Podrá ver/modificar cualquier dato de los establecimientos que están en su ámbito (franquicia/s, grupo/s)
		- [system_user_relation_types = manager]
			- Podrá asignar/modificar establecimientos de grupos y franquicias
			- Podrá ver/modificar cualquier dato de los establecimientos que están en su ámbito (franquicia/s, grupo/s)
		- [system_user_relation_types = user]
			- Podrá ver cualquier dato de los establecimientos que están en su ámbito (franquicia/s, grupo/s)
- **FRANCHISE**
	- *Gestor de sedes*:
		- [system_user_relation_types = administrator]
			- Podrá crear establecimientos y grupos (stores)
			- Podrá asignar/modificar establecimiento de grupos dentro de una misma franquicia/s asignadas al usuario.
			- Podrá ver/modificar cualquier dato de los establecimientos que están en su ámbito (franquicia/s, grupo/s)
		- [system_user_relation_types = manager]
			- Podrá asignar/modificar establecimiento de grupos dentro de una misma franquicia/s asignadas al usuario.
			- Podrá ver/modificar cualquier dato de los establecimientos que están en su ámbito (franquicia/s, grupo/s)
		- [system_user_relation_types = user]
			- Podrá ver cualquier dato de los establecimientos que están en su ámbito (franquicia/s, grupo/s)
- **STORE**
	- *Gestor de sedes*:
		- [system_user_relation_types = administrator]
			- Podrá crear establecimientos y grupos (stores)
			- Podrá ver/modificar cualquier dato de los establecimientos que están en su ámbito (grupo/s)
		- [system_user_relation_types = manager]
			- Podrá ver/modificar cualquier dato de los establecimientos que están en su ámbito (grupo/s)
		- [system_user_relation_types = user]
			- No tienen acceso a esta sección.

### Section :: Gestor de sedes

## Krimonet Sponsors


## Contributing


## Code of Conduct


## Security Vulnerabilities


## Licencia
