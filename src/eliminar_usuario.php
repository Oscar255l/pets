<?php
// Verificar si se ha proporcionado el parámetro 'id' en la URL
if(isset($_GET['id'])) {
    // Obtener el id del usuario a eliminar
    $id_usuario = $_GET['id'];

    // Conectar a la base de datos
    require('../config/database.php');

    // Query para eliminar al usuario
    $query_eliminar_usuario = "DELETE FROM users WHERE id = $id_usuario";

    // Ejecutar la consulta
    $result_eliminar = pg_query($conn, $query_eliminar_usuario);

    // Verificar si la eliminación fue exitosa
    if($result_eliminar) {
        echo "Usuario eliminado correctamente.";
    } else {
        echo "Error al eliminar usuario.";
    }
} else {
    echo "No se proporcionó el parámetro 'id' en la URL.";
}
?>