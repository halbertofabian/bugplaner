
console.log("cargado");
cargadft("DIARIO")
cargausr("DIARIO")

$("#dft_tipo").on("change", function () {
    var tiempo = $(this).val();
    cargadft(tiempo)
    cargausr(tiempo)


});


function cargadft(dft_tipo) {
    var dato = new FormData();
    dato.append("dft_tipo", dft_tipo);
    dato.append("btnselect", true);
    $("#contenedor").html("")
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

function cargausr(dft_tipo) {
    var dato = new FormData();
    dato.append("dft_tipo", dft_tipo);
    dato.append("btnselectUsr", true);
    $("#contenedor-usr").html("")

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


                $("#contenedor-usr").html(res)


            }
        }
    })
}

$("#editarMiHistoria").on("click", function () {
    $("#miHistoria").addClass("d-none")
    $("#contenedorHistoria").removeClass("d-none")
    $("#editarMiHistoria").addClass("d-none")
    $("#guardarMiHistoria").removeClass("d-none")

})


$("#guardarMiHistoria").on("click", function () {
    var miHistoria = $("#contenedorHistoria").val();

    var dato = new FormData();
    dato.append("hst_text", miHistoria);
    dato.append("btnguardarMiHistoria", true);


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

                toastr.success("Historia", "Actualizo");

                $("#miHistoria").removeClass("d-none")
                $("#miHistoria").html(miHistoria)
                $("#editarMiHistoria").removeClass("d-none")
                $("#guardarMiHistoria").addClass("d-none")
                $("#contenedorHistoria").addClass("d-none")

            }
        }
    })

})