[![Latest Stable Version](https://poser.pugx.org/rogertm/twenty-em-child/version)](https://packagist.org/packages/rogertm/twenty-em-child)
[![Latest Unstable Version](https://poser.pugx.org/rogertm/twenty-em-child/v/unstable)](//packagist.org/packages/rogertm/twenty-em-child)
[![Total Downloads](https://poser.pugx.org/rogertm/twenty-em-child/downloads)](https://packagist.org/packages/rogertm/twenty-em-child)
[![Build Status](https://travis-ci.org/rogertm/twenty-em-child.svg?branch=master)](https://travis-ci.org/rogertm/twenty-em-child)
[![License](https://poser.pugx.org/rogertm/twenty-em-child/license)](https://packagist.org/packages/rogertm/twenty-em-child)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/rogertm/twenty-em-child/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/rogertm/twenty-em-child/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/rogertm/twenty-em-child/badges/build.png?b=master)](https://scrutinizer-ci.com/g/rogertm/twenty-em-child/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/rogertm/twenty-em-child/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

# Twenty'em Child Theme

## Introducción
Twenty'em Child Theme es un Starter Child Theme para [Twenty'em Framework](https://github.com/rogertm/twenty-em).

Twenty'em Child Theme contiene las funciones mínimas necesarias para trabajar compatiblemente con Twenty'em Framework. Su objetivo es brindar esa compatibilidad mínima requerida, así que recomendamos no usarlo como un Parent Theme, sino como una guía inicial para crear un hermoso Child Theme de Twenty'em Framewrok.

## Requerimientos
* [Twenty'em Framework](https://github.com/rogertm/twenty-em)

## Instalación
### Manual
Twenty'em Child se instala como cualquier otro theme de WordPress. Para ello debes descargar la [última versión](https://github.com/rogertm/twenty-em-child/releases/latest), descompactar el archivo `.zip` y copiar su contenido en el directorio `/wp-content/themes/` de tu instalación de WordPress. O subirlo usando el instalador de themes de WordPress. No sin antes instalar [Twenty'em Framework](https://github.com/rogertm/twenty-em)
### Instalar vía Git
Puedes clonar este repositorio usando `git`
```bash
$ cd /path/to/your/wordpress-site/wp-content/themes/
$ git clone https://github.com/rogertm/twenty-em.git
$ git clone https://github.com/rogertm/twenty-em-child.git
```
### Instalar vía Composer
```bash
$ composer require rogertm/twenty-em-child:^1.0
```
Esto instalará automáticamente [Twenty'em Framework](https://github.com/rogertm/twenty-em)

## Uso
Para usar este Child Theme debes seguir unos simples pasos antes de comenzar:
* Buscar `'t_em_child'` (entre comillas simples) para encontrar el _Text Domain_ y reemplazarlo por `'your-text-domain'`.
* Buscar `t_em_child_` para el prefijo de las funciones y reemplazarlo por `your_prefix_`
* En el archivo `style.css` buscar la etiqueta `Text Domain: t_em_child` y reemplazarlo por `Text Domain: your-text-dimain`.
* Buscar `t_em_child-` para el manejo de los prefijos y reemplazarlo por `your-handle-prefix-`.
* Para finalizar puedes editar completamente la cabecera en `style.css` con tu información, excepto `Template: twenty-em`.

## Licencia
Twenty'em Child Theme es un software de código libre y abierto y se distribuye bajo Licencia GPLv2 (o superior)

## Donar
Hemos trabajado durante varios años en el desarrollo de Twenty'em Framework y ahora lo compartimos contigo. Apreciamos cualquier contribución que nos quieras hacer y así poder mantener nuestro proyecto. Gracias.

[Hacer una Donación](https://paypal.me/themingisprose)
