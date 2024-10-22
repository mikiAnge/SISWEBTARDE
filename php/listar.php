<?php
include '../data/conexion.php';
                if ($result->num_rows > 0) {
                
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["titulo"] . "</td>";
                        echo "<td>" . $row["genero"] . "</td>";
                        echo "<td>" . $row["canal"] . "</td>";
                        echo "<td>" . $row["fecha_estreno"] . "</td>";
                        echo "<td>" . $row["duracion"] . "</td>";
                        echo "<td>" . $row["descripcion"] . "</td>";
                        echo "<td>";
                        echo "<a class='button button2' href='../data/editar.php?id=" . $row["id"] . "' class='btn btn-primary'>Editar</a> ";
                        echo "<a class='button button3' href='../data/eliminar.php?id=" . $row["id"] . "' class='btn btn-danger' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este registro?\");'>Eliminar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay datos disponibles</td></tr>";
                }
            
                $conn->close();
                ?>