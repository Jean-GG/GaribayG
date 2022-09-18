# Propiedades de Flexbox
## Eje principal

|flex-direction           |                                                                                                               |
| :---                    |    :----:                                                                                                     |
| row - row reverse       | El eje principal correrá a lo largo de la fila según la dirección de la línea.                                |
| column - column reverse | el eje principal correrá desde el borde superior de la página hasta el final — según la dirección del bloque. |

## Eje cruzado
- El eje cruzado va perpendicular al eje principal, y por lo tanto si flex-direction (del eje principal) es row o row-reverse el eje cruzado irá por las columnas.
- Si el eje principal es column o column-reverse entonces el eje cruzado corre a lo largo de las filas.
- Entender cuál eje es cuál es importante cuando empezamos a mirar la alineación y justificación flexible de los ítems; flexbox posee propiedades que permiten alinear y justificar el contenido sobre un eje o el otro.

## Lineas de inicio y de fin
- Si flex-direction es row y estoy trabajando en español, entonces el margen inicial del eje principal quedará a la izquierda, y el margen final a la derecha.
- Si fuera a trabajar en árabe, entonces el margen inicial de mi eje principal quedaría a la derecha y el margen final a la izquierda.

## Contenedor Flex
Un área del documento que contiene un flexbox es llamada contendedor flex. Para crear un contenedor flex, establecemos la propiedad del área del contenedor display como flex o inline-flex.

- Los ítems se despliegan sobre una fila (la propiedad flex-direction por defecto es row).
- Los ítems empiezan desde el margen inicial sobre el eje principal.
- Los ítems no se ajustan en la dimensión principal, pero se pueden contraer.
- Los ítems se ajustarán para llenar el tamaño del eje cruzado.
- La propiedad flex-basis es definida como auto.
- La propiedad flex-wrap es definida como nowrap.

## Propiedades aplicadas a los ítems flex
Para obtener más control sobre los ítems flex podemos apuntarlos directamente. Hacemos esto a través de tres propiedades:

- flex-grow
- flex-shrink
- flex-basis

|Propiedades              |                                                                                                       |
| :---                    |    :----:                                                                                             |
|flex-basis               |   Con flex-basis se define el tamaño de un ítem en términos del espacio que deja como espacio disponible. El valor inicial de esta propiedad es auto — en este caso el navegador revisa si los ítems definen un tamaño. En el ejemplo de arriba, todos los ítems tienen un ancho de 100 pixeles así que este es usado como flex-basis.                                                                                                    |
|flex-grow                | Con la propiedad flex-grow definida como un entero positivo, los ítems flex pueden crecer en el eje principal a partir de flex-basis. Esto hará que el ítem se ajuste y tome todo el espacio disponible del eje, o una proporción del espacio disponible si otro ítem también puede crecer.|
|flex-shrink              | Así como la propiedad flex-grow se encarga de añadir espacio sobre el eje principal, la propiedad flex-shrink controla como se contrae. Si no contamos con suficiente espacio en el contenedor para colocar los ítems y flex-shrink posee un valor entero positivo, el ítem puede contraerse a partir de flex-basis. Así como podemos asignar diferentes valores de flex-grow con el fin que un ítem se expanda más rápido que otros — un ítem con un valor más alto de flex-shrink se contraerá más rápido que sus hermanos que poseen valores menores.|

## Alineación, justificación y distribución del espacio libre entre ítems
Una característica clave de flexbox es la capacidad de alinear y justificar ítems sobre los ejes principal y cruzado, y distribuir el espacio entre los ítems flex.
La propiedad *align-items* alineará los ítems sobre el eje cruzado.
Tipos de align.items
- stretch
- flex-start
- flex-end
- center

## Valores dejustify-content:
- space-evenly
- flex-start
- flex-end
- center
- space-around
- space-between