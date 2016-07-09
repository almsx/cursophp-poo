## Notas Importantes

Para agregar un campo a una tabla que previamente olvidamos, solamente
debemos teclear la siguiente secuencia:

ALTER TABLE noticias ADD COLUMN fechaPublicacion DATETIME NOT NULL DEFAULT NOW();

Donde...

ALTER TABLE indica a MySQL que se efectuara un cambio en la tabla "noticias". ADD COLUMN permite añadir un nuevo campo llamado fechaPublicacion con las caracteristicas que se mencionan posteriormente.

DROP DATABASE nombredelabase

donde nombredelabase hay que sustituirlo por el nombre asignado a nuestra BD.