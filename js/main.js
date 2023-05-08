$(document).ready(function(){

    //Alert con informacion de la obra
    $(".paint").on("click", function() {
        let name = $(this).find(".title").text()
        let author = $(this).find(".author").text()

        alert('Nombre: ' + name + '\nAutor: ' + author);
        
    })

    $("button").on("click", function() {
      let images =  $("body").find("img")
      let total = images.length
      alert(`Obras disponibles: ${total}`)
    })


});


