# Módulo Magento2 RELATED PRODUCTS - SLIDER

Este es un proyecto trabajado por el **Ing. Oscar Rolando Gamboa Acho** con el fin de aportar a otros developers en el desarrollo de sus proyectos y facilitar el desarrollo de nuevos módulos y/o sistemas completos.

Si existen dudas, observaciones, errores encontrados, reportar en Issues para mejorar el modulo que se encuentra trabajado en este repositorio. :nerd_face:

---

## CONTENIDO
* [Sobre Magento](#sobre-magento)
* [Sobre KnockoutJS](#sobre-knockoutjs)
* [Proyecto](#proyecto)
  * [Versiones](#versiones)
  * [Instalar](#instalar)
  * [Funcionamiento](#funcionamiento)
* [Dudas o Preguntas](#dudas-o-preguntas)
---

## Sobre Magento
Es una plataforma de comercio electrónico open source o código liberado mediante el que se pueden gestionar todo tipo de e-Commerce, tambien existe el enterprise, pero este ultimo tiene un costo y mas caracteristicas.

Magento permite construir una tienda online a medida. Es una herramienta que cuenta con determinadas funcionalidades y de código abierto.

En un principio, surgió en 2007, y se lanzó al mercado como solución de comercio electrónico. Ahora cuenta con más funcionalidades, y varias versiones en función de las necesidades o el volumen de cada comercio online.
Puede descargarla en la página oficial de [Adobe Commerce](https://business.adobe.com/la/products/magento/open-source.html).

---

## Sobre KnockoutJS
Implementación de Javascript que sigue el patrón MVVM (Modelo Vista - Vista Modelo), se caracteriza por asociarse fácilmente, los elementos DOM con los datos del modelo con una sintaxis legible y concisa y  
cambiar el estado del modelo de datos lo cual hace que se actualice la interfaz de usuario de forma automática.

---

## Proyecto
Este proyecto consiste en un módulo para el framework Magento2 para customizar en la sección del PDP (Product Detail Page) los Productos Relacionados (Related Products) 
implementando un carousel y el agregado de una imagen placeholder para productos que no tienen imagen. 
En este modulo se busca tener una muestra de productos relacionados de un producto en la PDP de una manera diferente e interactiva para el usuario siempre 
y cuando la configuracion desde el admin lo permita.
---

### Versiones
* Magento 2.4.4 (Open Source).
* Composer: 1.9.3.
* PHP 8.1.
* Librería de KnockoutJS 3.4.2
* Slick Carousel 1.9.0
---

### Instalar
La instalación del proyecto es muy sencillo, lo unico que puedes hacer es clonar este proyecto dentro del app/code en el framework, crea el directorio Devlat (en el mismo app/code) y luego clonas el directorio.
Luego para instalar el proyecto dentro del framework realiza los siguientes pasos:
* ```bin/magento module:status``` (verifica que tu módulo se encuentra dentro de los que no estan instalados que por default esta inactivo o deshabilitado).
* Ejcuta el siguiente comando para habilitar el módulo: ```bin/magento module:enable Devlat_RelatedProducts```.
* Ejecuta ```bin/magento setup:upgrade``` para proceder con la instalacion del módulo.

---

### Funcionamiento
El funcionamiento de este modulo no presenta ninguna alteracion en ningun aspecto como ser el 
de agregar un producto al wishlist o agregar al carrito. La customizacion se basa en hacer que la seccion de 
productos relacionados sea mas interactivo implementando un carousel con la libreria Slick Carousel 
y agregando una imagen placeholder para productos que no tienen una propia imagen subida, pero tanto el carousel 
como el placeholder image funcionaran si es que esta habilitado en su configuracion, en el cual se lo puede 
encontrar en Admin > Store > Settings > Configuration > DEVLAT > Related Products.

Para tomar en cuenta la libreria Slick Carousel minificado puede descargarlo desde este link: [Slick Carousel](https://cdnjs.com/libraries/slick-carousel/1.9.0) y 
la guia de uso: [Slick Page](https://kenwheeler.github.io/slick/).

---

## Dudas o Preguntas
Si tienes alguna duda o pregunta para poder ayudarte con el modulo, favor contactame por mis redes sociales, que te puedo responder a la brevedad posible :sunglasses::

  <a href="https://www.linkedin.com/in/oscarrolandogamboa/">
      <img align="left" alt="Oscar Rolando Gamboa Acho | Linkedin" width="30px" src="https://raw.githubusercontent.com/CLorant/readme-social-icons/main/large/filled/linkedin.svg" />
  </a>
  <a href="https://x.com/DevLatBo">
    <img align="left" alt="Oscar Rolando Gamboa Acho | X-Twitter" width="32px" src="https://raw.githubusercontent.com/CLorant/readme-social-icons/main/large/filled/twitter-x.svg" />
  </a> &nbsp;&nbsp;
  <a href="https://youtube.com/DevLatBo">
    <img align="left" alt="Oscar Rolando Gamboa Acho | Youtube" width="30px" src="https://raw.githubusercontent.com/CLorant/readme-social-icons/main/large/filled/youtube.svg" />
  </a> &nbsp;&nbsp;
