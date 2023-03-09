DROP TABLE IF EXISTS `inventario_usuario`;
DROP TABLE IF EXISTS `items`;
DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE inventario_usuario (
  id INT NOT NULL AUTO_INCREMENT,
  id_usuario INT NOT NULL,
  id_articulo INT NOT NULL,
  cantidad INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
  FOREIGN KEY (id_articulo) REFERENCES articulos(id)
);

CREATE TABLE items (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  cantidad INT NOT NULL,
  rareza VARCHAR(255),
  tamaño_en_inventario VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE usuarios (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);
