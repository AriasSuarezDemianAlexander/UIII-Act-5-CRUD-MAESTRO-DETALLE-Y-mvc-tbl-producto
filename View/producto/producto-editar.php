<h1 class="page-header">
    <?php echo $prod->idProducto != null ? $prod->nomprod : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
    <li><a href="?c=producto">Productos</a></li>
    <li class="active"><?php echo $prod->idProducto != null ? $prod->nomprod : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-producto" action="?c=producto&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idProducto" value="<?php echo $prod->idProducto; ?>" />

    <div class="form-group">
        <label>NIT Proveedor</label>
        <input type="text" name="nit" value="<?php echo $prod->nit; ?>" class="form-control" placeholder="Ingrese NIT Proveedor" required />
    </div>

    <div class="form-group">
        <label>Nombre Producto</label>
        <input type="text" name="nomprod" value="<?php echo $prod->nomprod; ?>" class="form-control" placeholder="Ingrese nombre producto" required />
    </div>

    <div class="form-group">
        <label>Precio Unitario</label>
        <input type="text" name="precioU" value="<?php echo $prod->precioU; ?>" class="form-control" placeholder="Ingrese precio unitario" required />
    </div>

    <div class="form-group">
        <label>Descripción del Producto</label>
        <input type="text" name="descrip" value="<?php echo $prod->descrip; ?>" class="form-control" placeholder="Ingrese descripción producto" required />
    </div>

    <!-- Nuevos campos -->
    <div class="form-group">
        <label>Stock Disponible</label>
        <input type="text" name="stockd" value="<?php echo $prod->stockd; ?>" class="form-control" placeholder="Ingrese stock disponible" required />
    </div>

    <div class="form-group">
        <label>Unidad de Medida</label>
        <input type="text" name="unidadm" value="<?php echo $prod->unidadm; ?>" class="form-control" placeholder="Ingrese unidad de medida" required />
    </div>

    <div class="form-group">
        <label>Fecha de Inicio</label>
        <input type="text" name="fechai" value="<?php echo $prod->fechai; ?>" class="form-control" placeholder="Ingrese fecha de inicio" required />
    </div>

    <div class="form-group">
        <label>Marca</label>
        <input type="text" name="marca" value="<?php echo $prod->marca; ?>" class="form-control" placeholder="Ingrese marca" required />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>
