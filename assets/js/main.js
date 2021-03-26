
console.log("cargado");
inicio("DIARIO")

$("#dft_tipo").on("change", function () {
    var tiempo = $(this).val();
inicio(tiempo)

});


  function inicio(dft_tipo){
    var dato = new FormData();
   dato.append("dft_tipo", dft_tipo);
    dato.append("btnselect", true);
    $.ajax({
        url: "./ajax/ajax.registro.php",
        method: "POST",
        data: dato,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "html",
        success: function (res) {
            if (res) {


                $("#contenedor").html(res)


            }
        }
    })
 }