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



## Krimonet Sponsors


## Contributing


## Code of Conduct


## Security Vulnerabilities


## Licencia
