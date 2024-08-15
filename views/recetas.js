var init = () => {
  $("#frm_recetas").on("submit", (e) => {
    guardaryeditar(e);
  });
};

$().ready(() => {
  cargaTabla();
});

var cargaTabla = () => {
  $.get("../controllers/recetas.controller.php?op=todos", (listaAlumnos) => {
    var html = "";
    console.log(listaAlumnos);
    listaAlumnos = JSON.parse(listaAlumnos);
    console.log(listaAlumnos);
    $.each(listaAlumnos, (index, alumno) => {
      html += `<tr>
                <td>${index + 1}</td>
                <td>${alumno.nombre}</td>
                <td>${alumno.descripcion}</td>
                <td>${alumno.tiempo_preparacion}</td> 
                <td>${alumno.dificultad}</td>
                <td><button class="btn btn-primary" onclick="editar(${alumno.receta_id})">Editar</button>
                <button class="btn btn-danger" onclick="eliminar(${alumno.receta_id})">Eliminar</button>
</td>
                </tr>
                `;
    });
    $("#cuerporecetas").html(html);
  });
};


var guardaryeditar = (e) => {
  e.preventDefault();
  var formData = new FormData($("#frm_recetas")[0]);

  var receta_id = $("#receta_id").val(); // Asegúrate de tener un campo oculto para receta_id
  var url = receta_id ? "../controllers/recetas.controller.php?op=actualizar" : "../controllers/recetas.controller.php?op=insertar";

  $.ajax({
    url: url,
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (datos) {
      console.log(datos);
      $("#frm_recetas")[0].reset();
      $("#modal").modal("hide");
      cargaTabla();
    },
  });
};





var eliminar = (receta_id) => {
  if (confirm("¿Estás seguro de que quieres eliminar esta receta?")) {
    $.post("../controllers/recetas.controller.php?op=eliminar", { receta_id: receta_id }, (datos) => {
      console.log(datos);
      cargaTabla();
    });
  }
};


var editar = (receta_id) => {
  $.ajax({
    url: "../controllers/recetas.controller.php?op=uno",
    type: 'POST',
    data: { receta_id: receta_id },
    success: (datos) => {
      datos = JSON.parse(datos);

      // Asigna los datos al formulario
      $("#receta_id").val(datos.receta_id); // Asegúrate de que este campo exista en tu formulario
      $("#nombre").val(datos.nombre);
      $("#descripcion").val(datos.descripcion);
      $("#tiempo_preparacion").val(datos.tiempo_preparacion);
      $("#dificultad").val(datos.dificultad);

      // Muestra el modal
      $("#modal").modal("show");
    },
    error: (xhr, status, error) => {
      console.error("Error al obtener los datos para editar:", error);
    }
  });
};






init();
