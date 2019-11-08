
<p>
Participar en la planeación de la movilidad urbana es, al mismo tiempo, un derecho y una responsabilidad para la ciudadania. La visión de movilidad urbana sustentable que se concibe para Mérida requiere su integralidad como sistema a fin de facilitar el acceso a los beneficios de la ciudad. Alcanzar ese fin requiere objetivos, estrategias y medios para lograrlo. La propuesta que se somete a consulta trata de eso.
</p>
<hr>

<form  enctype="multipart/form-data" id="formuploadajax" method="post" >

 <div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label">NOMBRE</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="NOMBRE">
    </div>
  </div>

  <div class="form-group row">
    <label for="edad" class="col-sm-2 col-form-label">EDAD</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad">
    </div>
  </div>


 <div class="form-group row">
    <label for="propuesta" class="col-sm-2 col-form-label">PROPUESTA</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="archivo" name="archivo" placeholder="Propuesta">
    </div>
  </div>


 <div class="form-group row">
    <label for="clasifiacion" class="col-sm-2 col-form-label">CLASIFICADOR</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="clasificacion"  name="clasificacion" placeholder="Clasificacion">
    </div>
  </div>



    <input type="submit" class="btn btn-primary mb-2" value="Guardar"/>

</form>

  <div id="mensaje"></div>

 <script src="//code.jquery.com/jquery-3.4.1.min.js" ></script> 

  <script>
  $(function(){
        $("#formuploadajax").on("submit", function(e){
            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("formuploadajax"));
            formData.append("dato", "valor");
            //formData.append(f.attr("name"), $(this)[0].files[0]);
            $.ajax({
                url: "GuardaParticipacion.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
       processData: false
            })
                .done(function(res){
                    $("#mensaje").html("Respuesta: " + res);
                });
        });
    });

</script>

