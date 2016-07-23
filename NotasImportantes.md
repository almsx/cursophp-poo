## Notas Importantes

Para agregar un campo a una tabla que previamente olvidamos, solamente
debemos teclear la siguiente secuencia:

ALTER TABLE noticias ADD COLUMN fechaPublicacion DATETIME NOT NULL DEFAULT NOW();

Donde...

ALTER TABLE indica a MySQL que se efectuara un cambio en la tabla "noticias". ADD COLUMN permite añadir un nuevo campo llamado fechaPublicacion con las caracteristicas que se mencionan posteriormente.

DROP DATABASE nombredelabase

donde nombredelabase hay que sustituirlo por el nombre asignado a nuestra BD.

#Ingresar a MYSQL desde Consola

cd /Applications/XAMPP/bin

y ejecutamos el siguiente comando

./mysql -u root -p

donde -u es el usuario
donde -p es la password

damos enter y nos solicitara la contraseña. En caso de existir, asignarla.

Mostramos todas las base de datos existentes
SHOW DATABASES;

entramos a la base de datos deseada

USE Clase3POO;

Mostrar las tablas existentes en una BD

show tables;

revisamos la estructura de una tabla

DESC Autores;

//TAREA. Eliminar a partir de un parametro de palabras de busqueda.

//Eliminar una llave foranea y agregarla nuevamente
para la eliminación o actualziación en Cascada

Primero revisamos como fue creada la base de datos con
el comando:


SHOW CREATE TABLE course;


Para el caso practico eliminamos la Llave foranea que existe con la tabla de Categorias

CONSTRAINT `noticias_ibfk_1`

eliminamos la llave foranea de la siguiente forma:

ALTER TABLE Noticias DROP FOREIGN KEY noticias_ibfk_1;

Ya habiendo sido eliminada, agregamos nuevamente la llave foranea pero con soporte para eliminación o actualización en Cascada con el comando:

ALTER TABLE Noticias ADD FOREIGN KEY (idCategoria) REFERENCES Categorias (idCategoria) ON DELETE CASCADE ON UPDATE CASCADE;
