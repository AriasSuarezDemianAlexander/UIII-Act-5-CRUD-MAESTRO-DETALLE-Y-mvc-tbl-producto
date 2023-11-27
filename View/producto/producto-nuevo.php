<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
    <li><a href="?c=producto">Productos</a></li>
    <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-producto" action="?c=producto&a=Guardar" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>NIT Proveedor</label>
        <input type="text" name="nit" class="form-control" placeholder="Ingrese NIT Proveedor" required />
    </div>

    <div class="form-group">
        <label>Nombre Producto</label>
        <input type="text" name="nomprod" class="form-control" placeholder="Ingrese nombre producto" required />
    </div>

    <div class="form-group">
        <label>Precio Unitario</label>
        <input type="text" name="precioU" class="form-control" placeholder="Ingrese precio unitario" required />
    </div>

    <div class="form-group">
        <label>Descripción del Producto</label>
        <input type="text" name="descrip" class="form-control" placeholder="Ingrese descripción producto" required />
    </div>

    <!-- Nuevos campos -->
    <div class="form-group">
        <label>Stock Disponible</label>
        <input type="text" name="stockd" class="form-control" placeholder="Ingrese stock disponible" required />
    </div>

    <div class="form-group">
        <label>Unidad de Medida</label>
        <input type="text" name="unidadm" class="form-control" placeholder="Ingrese unidad de medida" required />
    </div>

    <div class="form-group">
        <label>Fecha de Inicio</label>
        <input type="text" name="fechai" class="form-control" placeholder="Ingrese fecha de inicio" required />
    </div>

    <div class="form-group">
        <label>Marca</label>
        <input type="text" name="marca" class="form-control" placeholder="Ingrese marca" required />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>
