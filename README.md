# Módulo RELATED PRODUCTS con KnockoutJS

Este es un proyecto trabajado por el **Ing. Oscar Rolando Gamboa Acho** con el fin de aportar a otros developers en el desarrollo de sus proyectos por medio de la orientacion en base a lo trabajado y facilitar el desarrollo de nuevos módulos y/o sistemas completos.

Si existen dudas, observaciones, errores encontrados, ir a Issues y hacer el reporte de algun detalle para trabajarlo y poder mejorar el modulo que se encuentra trabajado en este repositorio. :nerd_face:

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
Este proyecto consiste en un módulo para el framework Magento2 para poder mostrar en la sección del PDP (Product Detail Page)  los Productos Relacionados (Related Products), que consiste en mostrar productos que se encuentran relacionados 
con el producto que se puede observar principalmente en la PDP actual.
Este módulo fue desarrollado como una réplica del Related Products del propio framework (Magento2), sólo que la diferencia está en que fue trabajado especialmente con la libreria KnockoutJS.

### Versiones
* Magento 2.4.4 (Open Source).
* Composer: 1.9.3.
* PHP 8.1.
* Librería de KnockoutJS 3.4.2

---

### Instalar
La instalación del proyecto es muy sencillo, lo unico que puedes hacer es clonar este proyecto dentro del app/code en el framework, crea el directorio Devlat (en el mismo app/code) y luego clonas el directorio.
Luego para instalar el proyecto dentro del framework realiza los siguientes pasos:
* ```bin/magento module:status``` (verifica que tu módulo se encuentra dentro de los que no estan instalados que por default esta inactivo o deshabilitado).
* Ejcuta el siguiente comando para habilitar el módulo: ```bin/magento module:enable Devlat_RelatedProducts```.
* Ejecuta ```bin/magento setup:upgrade``` para proceder con la instalacion del módulo.

---

### Funcionamiento
El funcionamiento del este módulo se basa en mostrar los productos relacionados de un producto dentro del PDP (Product Detail Page) en la parte inferior, esta seccion tiene un par de funcionalidades como ser el de 
agregar un producto relacionado al Wishlist o una lista de comparacion con otro producto.
Para el caso de agregar un producto al wishlist como usuario invitado (no logueado) te redirige al loggin antes para que inicies sesión y consecutivamente  el producto es recien agregado al Wishlist.
Para poder ver los productos relacionados (Related Products) simplemente configure desde el admin en Admin > Catalog > Products, seleccione un producto cualquiera, y busque sección Related Products, Up-Sells, and Cross-Sells 
donde ahi mismo podra agregar otros productos como Relacionados del producto donde usted este configurando.

---

## Dudas o Preguntas
Si tienes alguna duda o pregunta para poder ayudarte con el modulo, favor contactame por mis redes sociales, que te puedo responder a la brevedad posible :sunglasses::

  <a href="https://www.linkedin.com/in/oscarrolandogamboa/">
      <img align="left" alt="Oscar Rolando Gamboa Acho | Linkedin" width="30px" src="https://github.com/SatYu26/SatYu26/blob/master/Assets/Linkedin.svg" />
  </a> &nbsp;&nbsp;
  <a href="https://x.com/DevLatBo">
    <img align="left" alt="Oscar Rolando Gamboa Acho | Twitter" width="32px" src="https://user-images.githubusercontent.com/8138585/256154469-3d935a39-9abc-4ba6-94d4-b8e163756c27.svg" />
  </a> &nbsp;&nbsp;
  <a href="https://youtube.com/DevLatBo">
    <img align="left" alt="Oscar Rolando Gamboa Acho | Youtube" width="30px" src="https://user-images.githubusercontent.com/47686437/168548113-b3cd4206-3281-445b-b7c6-bc0a3251293d.png" />
  </a> &nbsp;&nbsp;
