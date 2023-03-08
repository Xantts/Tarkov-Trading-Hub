CREATE TABLE inventario_usuario (
  id INT NOT NULL AUTO_INCREMENT,
  id_usuario INT NOT NULL,
  id_articulo INT NOT NULL,
  cantidad INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
  FOREIGN KEY (id_articulo) REFERENCES articulos(id)
);