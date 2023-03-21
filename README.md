--- Definicion del proyecto ---
Crud System con distintas operaciones y dependencias que aplique todo lo 
aprendido hasta ahora en Laravel 9
 
--- Explicacion de commit ---
Este commit del proyecto pone en evidencia todo lo aprendido
en la leccion 4 del curso "Laravel 9 Fundamentals" de Mateo Prigl
en Pluralsight, entre estos temas se encuentran:

1. Uso de post routes para recibir inputs de usuarios
2. Uso de directiva @csrf para hacer rutas mas seguras
3. Creacion de eventos en js para asignar id automaticamente y manual a traves de la ventana modal.
4. Validacion de Input del usuario usando el metodo validate.
5. Directiva @error
6. Extraccion de datos para la sesion
7. Uso de @foreach, explode y @php
8. Variable $errors y $message
9. Metodo errors()->any()
10. Uso de funcion old() para el valor de los inputs despues de un error.
11. Creacion de subviews y uso de directiva @includeWhen()

El crud system ya almacena datos en la sesion y envia errores en caso de que campos como
Nombre, Id o Apellido se encuentren vacios en cualquiera de las dos ventanas modal. Eso sin
dejar de lado la modularizacion y la reutilizacion de codigo