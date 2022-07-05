<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous">
</script>
<script>
  function addProducto(id, token){
    let url = 'clases/carrito.php'
    let formData = new FormData()
    formData.append('id', id)
    formData.append('token', token)

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