CREATE TABLE items (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  cantidad INT NOT NULL,
  rareza VARCHAR(255),
  tamaño_en_inventario VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);