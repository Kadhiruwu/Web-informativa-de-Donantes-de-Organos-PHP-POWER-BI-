(function(){
    const enlaceingresar = document.querySelector("#ingresar");

    if(enlaceingresar){
        enlaceingresar.addEventListener("click", function(event){
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace

            Swal.fire({
                position: "center",
                icon: "success",
                title: "Ingresaste",
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = enlaceingresar.href; // Redirige después de la alerta
            });
        });
    }   
})();