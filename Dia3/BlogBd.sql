CREATE TABLE Categorias(
	idCategoria INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	tituloCategoria VARCHAR(100) NOT NULL DEFAULT 'General'
);

CREATE TABLE Autores(
	idAutor INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(30) NOT NULL,
	apellido VARCHAR(30) NOT NULL,
	usuario VARCHAR(30) NOT NULL,
	password VARCHAR(30) NOT NULL
);

CREATE TABLE Noticias(
   idNoticia INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   tituloNoticia VARCHAR(500) NOT NULL,
   contenidoNoticia TEXT NOT NULL,
   idCategoria INT(11) NOT NULL,
   fechaPublicacion DATETIME NOT NULL DEFAULT NOW(),
   idAutor INT(11) NOT NULL,
   FOREIGN KEY (idCategoria) REFERENCES Categorias(idCategoria),
   FOREIGN KEY (idAutor) REFERENCES Autores(idAutor)
);

CREATE TABLE Albums(
	idAlbum INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombreAlbum VARCHAR(100) NOT NULL
);

CREATE TABLE Encuestas(
	idEncuesta INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	pregunta TEXT NOT NULL
);

CREATE TABLE Respuestas(
	idRespuesta INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombreRespuesta TEXT NOT NULL,
	idEncuesta INT (11) NOT NULL,
	FOREIGN KEY (idEncuesta) REFERENCES Encuestas(idEncuesta) 
);

CREATE TABLE Visitantes(
	idVisitante INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombreVisitante VARCHAR(100) NOT NULL,
	apellidoVisitante VARCHAR(100) NOT NULL,
	usuarioVisitante VARCHAR(30) NOT NULL,
	passwordVisitante VARCHAR(30) NOT NULL
);

CREATE TABLE Comentarios(
	idComentario INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fechaComentario DATE NOT NULL,
	comentario TEXT NOT NULL,
	moderacion VARCHAR(1) NOT NULL DEFAULT '0',
	idNoticia INT(11) NOT NULL,
	idVisitante INT(11) NOT NULL,
	FOREIGN KEY(idNoticia) REFERENCES Noticias(idNoticia),
	FOREIGN KEY(idVisitante) REFERENCES Visitantes(idVisitante)
);

CREATE TABLE Fotografias(
	idFotografia INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	url TEXT NOT NULL,
	idAlbum INT(11) NOT NULL,
	idAutor INT(11) NOT NULL,
	FOREIGN KEY(idAlbum) REFERENCES Albums(idAlbum),
	FOREIGN KEY(idAutor) REFERENCES Autores(idAutor)
);