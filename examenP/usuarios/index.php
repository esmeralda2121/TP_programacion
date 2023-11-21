
<br>
<br>
<div>
    <br>
    <br>
    <h2>Usuarios</h2>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>contraseña</th>
            </tr>
        </thead>
        <tbody>
            <?php
        $scon = mysqli_connect('localhost', 'root', '', 'login_register_bd');

        if (!$scon) {
            die("Connection failed: " . mysqli_connect_error());
        }
  
        $sql = "SELECT id, nombre_completo, correo, usuario, contrasena FROM usuarios";
  
        $result = mysqli_query($scon, $sql);
  
       
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              
                echo "<tr>";
                  echo "<td>" . $row["id"] . "</td>";
                  echo "<td>" . $row["nombre_completo"] . "</td>";
                  echo "<td>" . $row["correo"] . "</td>";
                  echo "<td>" . $row["usuario"] . "</td>";
                  echo "<td>" . $row["contrasena"] . "</td>";
                  echo '<td><button class="btn btn-primary btn-sm">Editar</button></td>';
                  echo '<td><button class="btn btn-danger btn-sm">Eliminar</button></td>';
                echo "</tr>";
           
            }
        } else {
            echo "<tr><td colspan='3'>No hay contactos disponibles.</td></tr>";
        }
  
        mysqli_close($scon);
        ?>
           
        </tbody>
    </table>
    <button class="btn btn-success">Agregar Usuario</button>
</div>