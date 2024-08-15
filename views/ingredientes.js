var init = () => {
    $("#frm_ingredientes").on("submit", (e) => {
      guardaryeditar(e);
    });
  };
  
  $().ready(() => {
    cargaTabla();
  });
  
  var cargaTabla = () => {
    $.get("../controllers/ingredientes.controller.php?op=todos", (listaAlumnos) => {
      var html = "";
      console.log(listaAlumnos);
      listaAlumnos = JSON.parse(listaAlumnos);
      console.log(listaAlumnos);
      $.each(listaAlumnos, (index, alumno) => {
        html += `<tr>
                  <td>${index + 1}</td>
                  <td>${alumno.nombre}</td>
                  <td>${alumno.cantidad}</td>
                  <td>${alumno.unidad}</td> 
                  <td>${alumno.calorias}</td>
                  <td><button class="btn btn-primary" onclick="editar(${alumno.ingrediente_id})">Editar</button>
                  <button class="btn btn-danger" onclick="eliminar(${alumno.ingrediente_id})">Eliminar</button>
  </td>
                  </tr>
                  `;
      });
      $("#cuerpoingredientes").html(html);
    });
  };
  
  
  var guardaryeditar = (e) => {
    e.preventDefault();
    var formData = new FormData($("#frm_ingredientes")[0]);
  
    var ingrediente_id = $("#ingrediente_id").val(); // Asegúrate de tener un campo oculto para receta_id
    var url = ingrediente_id ? "../controllers/ingredientes.controller.php?op=actualizar" : "../controllers/ingredientes.controller.php?op=insertar";
  
    $.ajax({
      url: url,
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        console.log(datos);
        $("#frm_ingredientes")[0].reset();
        $("#modal").modal("hide");
        cargaTabla();
      },
    });
  };
  
  
  
  
  
  var eliminar = (ingrediente_id) => {
    if (confirm("¿Estás seguro de que quieres eliminar este ingrediente?")) {
      $.post("../controllers/ingredientes.controller.php?op=eliminar", { ingrediente_id: ingrediente_id }, (datos) => {
        console.log(datos);
        cargaTabla();
      });
    }
  };
  
  
  var editar = (ingrediente_id) => {
    $.ajax({
      url: "../controllers/ingredientes.controller.php?op=uno",
      type: 'POST',
      data: { ingrediente_id: ingrediente_id },
      success: (datos) => {
        datos = JSON.parse(datos);
  
        // Asigna los datos al formulario
        $("#ingrediente_id").val(datos.ingrediente_id); // Asegúrate de que este campo exista en tu formulario
        $("#nombre").val(datos.nombre);
        $("#cantidad").val(datos.cantidad);
        $("#unidad").val(datos.unidad);
        $("#calorias").val(datos.calorias);
  
        // Muestra el modal
        $("#modal").modal("show");
      },
      error: (xhr, status, error) => {
        console.error("Error al obtener los datos para editar:", error);
      }
    });
  };
  
  
  
  
  
  
  init();
  