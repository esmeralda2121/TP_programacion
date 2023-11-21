<div>
    <br>
    <br>
    <br>
<head>
    <title>Agregar Producto</title>
</head>
<body>
    <h1>Agregar Productos</h1>

    <form action="productos.php" method="post">
        <label for="nombre_producto">Nombre del producto:</label>
        <input type="text" id="nombre_producto" name="nombre_producto" required><br><br>
        
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" min="0" step="0.01" required><br><br>
        
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" min="0" required><br><br>
        
        <input type="submit" value="Agregar Producto">
    </form>

</body>
</div>