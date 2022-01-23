const registrar=document.getElementById('registrar');
registrar.addEventListener('click',()=>{
    fetch("registrar.php",{
        method:"POST",
        body: new FormData(frm)
    }).then(respuesta=>respuesta.text()).then(respuesta=>{
        if(respuesta=="ok"){
            Swal.fire({
                icon: 'success',
                title: 'Producto Registrado con Exito!',
                showConfirmButton: false,
                timer: 1500
              })
              frm.reset();
        }
    })
});