<?php
require '../../model/config.php';
require '../../model/conexion.php';
$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset( $_GET['token']) ? $_GET['token'] : '';

if($id == '' || $token == ''){
  echo 'Error al procesar la peticion';
  exit;
} else {

  $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

if($token == $token_tmp){

  $sql = $con->prepare("SELECT count(id) FROM productos WHERE id=? AND activo=1");
$sql->execute([$id]);
if($sql->fetchColumn() > 0) {


  $sql = $con->prepare("SELECT nombre, descripcion, precio, descuento FROM productos WHERE id=? AND activo=1");
$sql->execute([$id]);
$row = $sql->fetch(PDO::FETCH_ASSOC);
$nombre = $row ['nombre'];
$precio = $row ['precio'];
$descripcion = $row ['descripcion'];
$descuento = $row ['descuento'];
$precio_desc = $precio - (($precio*$descuento)/100);
$dir_images = 'images/productos/'. $id .'/';

$rutaimg = $dir_images . 'r.jpg';

if(!file_exists($rutaimg)){
  $rutaimg = 'images/no-photo.jpg';
}

$imagenes = array();
if(file_exists($dir_images)){
$dir = dir($dir_images);

while(($archivo = $dir->read())!= false){
    if($archivo != 'r.jpg' && (strpos($archivo, 'jpg')|| strpos($archivo, 'jpg'))){
      $imagenes[] = $dir_images . $archivo;
    }
}
  $dir ->close();
}
}
} else {

  echo '';
  exit;

}

}

$sql = $con->prepare("SELECT id,nombre,precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
  
<main>
  <div class="container">
    <div class="row">
      <div class= "col-md-6 order-md-1">

      <div id="carouselimages" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $rutaimg ;?>" alt="image" height="500" width="500" class="d-block w-100">
    </div>
    <?php foreach($imagenes as $img) { ?>
    <div class="carousel-item">
    <img src="<?php echo $img ;?>" alt="image" height="500" width="500" class="d-block w-100">
    </div>
 <?php }?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselimages" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselimages" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

      </div>
        <div class= "col-md-6 order-md-2">
          <h2><?php echo $nombre;?></h2>

          <?php if($descuento >0) {?>
            <p><del><?php echo MONEDA . number_format($precio, 2, '.', ',');?></del></p>
            <h2>
              <?php echo MONEDA . number_format($precio_desc, 2, '.', ',');?>
            <small class="text-success"><?php echo $descuento; ?> % descuento</small>
            </h2>

            <?php } else { ?>


         <p><del><?php echo MONEDA . number_format($precio, 2, '.', ',');?></del></p>

         <?php } ?>
         
          <P class="lead">
            <?php echo $descripcion; ?>

          </P>

          <div class="d-grid gap-3 col-10 mx-auto">
            <button class="btn btn-primary" type="button">Comprar ahora</button>
            <button class="btn btn-outline-primary" type="button" onclick="addProducto(<?php echo $id;  ?>, <?php echo $token_tmp ?>)">Agregar al carrito</button>

            
          </div>

        </div>
    </div>
  </div>
</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous">
</script>
<script>
  function addProducto(id, token){
    let url = 'clases/carrito.php'
    let formData = new FormData()
    formData.append('id', $id)
    formData.append('token', $token)

    fetch(url,{
      method: 'POST',
      body: formData,
      mode: 'cors'
    }).then(response => response.json())
    .then(data =>{
      if(data.ok){
        let elemento = document.getElementById("num_cart")
        elemto.innerHTML = data.numero
      }
    })
  }
</script>
 
</body>

</html>

