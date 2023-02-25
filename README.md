--- Definicion del proyecto ---
Crud System con distintas operaciones y dependencias que aplique todo lo 
aprendido hasta ahora en Laravel 9
 
--- Explicacion de commit ---
Este commit del proyecto pone en evidencia todo lo aprendido
en la leccion 1-3 del curso "Laravel 9 Fundamentals" de Mateo Prigl
en Pluralsight, entre estos temas se encuentran:

1. Uso de yield, extends, y section para crear  template que sea reutilizable para
varias vistas (vease routes/web.php y resources/views)
2. Creacion de assets estaticos para conectar vista con css y hacer el codigo reutilizable
si necesito apuntar a otros host para obtener los estilos (Como AWS) (vease resources/views/layout)
3. Routing con names (variables) para evitar bugs si se cambian las rutas
4. Uso de request() object para comprobar la ruta y retornar clase de css (nav-focus) en caso de que
esten en la pagina a la que hace referencia el link