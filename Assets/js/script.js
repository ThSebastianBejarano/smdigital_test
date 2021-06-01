//alert('FUNCIONANDO');
  


$(document).ready(function(){
  
  $('.botondelete').on('click', function(){

    $('#deletemodal').modal('show')

    $tr = $(this).closest('tr')

    var data = $tr.children('td').map(function(){
      return $(this).text()
    }).get()

    console.log(data)

    $('#delete_id').val(data[0])

  })

})

$(document).ready(function(){
  
  $('.botonedit').on('click', function(){

    $('#editmodal').modal('show')

    $tr = $(this).closest('tr')

    var data = $tr.children('td').map(function(){
      return $(this).text()
    }).get()

    console.log(data)

    $('#up_id').val(data[0])
    $('#up_name').val(data[1])
    $('#up_email').val(data[2])
    $('#up_direccion').val(data[3])
    $('#up_ciudad').val(data[4])

  })

})

function buscar_datos(link,consulta) {
  $.ajax({
    url: link + 'Home/buscar/',
    type: 'POST',
    dataType: 'html',
    data: {consulta: consulta},
  })
  .done(function(respuesta) {
    $('#datos').html(respuesta);
  })
  .fail(function(){
    console.log("error");
  })
}

$(document).on('keyup', '#caja', function () {
  var valor = $(this).val()
    var link = 'https://test-doctores.herokuapp.com/';
    buscar_datos(link,valor);
})


//localstorage

const form = document.getElementById('login_form')
const name = document.getElementById('login_name')
const pass = document.getElementById('login_pass')


