<?php 

class tabla {
    public static function mostrarTabla() {
        $conn = Aplicacion::getInstance()->getConexionBd();
        $sql = "consulta";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            echo "<table>";
            echo    "<thead>";
            echo        "<tr>";
            echo            "<th>Item</th>";
            echo            "<th>Rareza</th>";
            echo            "<th>Tamaño</th>";
            echo            "<th>Cantidad</th>";
            echo        "</tr>";
            echo    "</thead>";
            echo    "<tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo    "<td>" . $row["item"] . "</td>";
                echo    "<td>" . $row["rareza"] . "</td>";
                echo    "<td>" . $row["tamaño"] . "</td>";
                echo    "<td>" . $row["cantidad"] . "</td>";
                echo "</tr>";
            }
            echo    "</tbody>";
            echo "</table>";
        }
        else echo "Sin objetos en inventario";
    }
}

?>