# Ejemplo de integración de FPDF con Codeigniter

Este es un proyecto base de una integración de fpdf con codeigniter.

La configuración mostrada es el uso de la librería FPDF convertida en una para codeigniter. 

Esta es una de las muchas formas que se puede integrar con codeigniter pero esta es especial porque lo cree la librería para que pueda ser estandarizada para proyectos grandes creando como intermediario el archivo pdfCI.php dentro la carpeta de libreries.

Ejemplo: http://integrar_fpdf_codeigniter.gumiel.net/index.php/PruebaPdf

# Requisitos

- Utilizar Codeigniter 3.X 

- PHP 5.6 o superior tener instalado 

- Libreria fpdf http://www.fpdf.org/es/dl.php?v=181&f=zip

Se realizaron pruebas con bajo estas condiciones. Puede que con otras versiones funcionen pero no fueron probadas.

# Instalación

Se tiene que copiar el contenido de la carpeta controlllers en la carpeta controllers de tu proyecto y tambien las carpetas libraries y third_party en las carpetas correspondientes de tu proyecto.

Esto te mostrara la creacion de un pdf como ejemplo. si descargas el ejemplo esta completo y puedes hacerlo correr directamente. Por ejemplo de la siguiente forma tendrias que llamar.

http://localhost/fpdf_ci/index.php/PruebaPdf/crearPdfPropuestaAvanzada ,

http://localhost/fpdf_ci/index.php/PruebaPdf/crearPdfPropuestABasica Ó

http://localhost/fpdf_ci/index.php/PruebaPdf/crearPdfFormaDirecta
