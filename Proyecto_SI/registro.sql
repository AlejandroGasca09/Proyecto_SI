CREATE TABLE `registro`(
    id_registro INTEGER NOT NULL AUTO_INCREMENT,
    nombre1 VARCHAR(50) NOT NULL,
    nombre2 VARCHAR(50) NULL,
    apellido1 VARCHAR(50) NOT NULL,
    apellido2 VARCHAR(50) NOT NULL,
    numero_cuenta VARCHAR(9) NOT NULL,
    mail VARCHAR(100) NOT NULL,
    plan TEXT NOT NULL,
	modalidad TEXT NOT NULL,
    telefono VARCHAR(10) NOT NULL,
    PRIMARY KEY (id_registro)
)engine=Innodb default charset=utf8;

CREATE TABLE `administrador`(
	id_administrador INTEGER NOT NULL AUTO_INCREMENT,
    nombre_usuario VARCHAR(50) NOT NULL,
    password VARCHAR(100),
    PRIMARY KEY (id_administrador)
)engine=Innodb default charset=utf8;