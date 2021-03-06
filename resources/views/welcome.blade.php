<!doctype html>
<html lang="pt-br">

  <head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


   <title>Avalie-me Softcom</title>

   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">


   <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon" />


    <!--[if lt IE 9]>
      <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

      <!-- TOPO DA PAGINA -->
      <nav id="topo" class="navbar  navbar-inverse bg-inverse " style="background: white;">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
              <img alt="brand" src="img/logo1.png" width="200px">
            </a>
          </div>
        </div>
      </nav>



<h1 class="cabecalho">Avalie o meu atendimento!</h1>

      <!--=======  CORPO ========-->
<!-- action="mail_send.php" method="post" -->
<form action="/enviar" method="post">
 {{ csrf_field() }} 
      <div class="container container-custom"> <!--=======  container ========-->

          <div class="row"> <!--=======  row principal ========-->

            <div class="col-md-6 f"> 
                <div class="container questionario"><!--=======  container filho a ========-->



                        <div class="row">
							<div class="form-group">
								  <fieldset>
									<legend>Cortesia: Demonstra educação e cordialidade</legend>
									  <label class="radio-inline"><input type="radio" name="cortesia" value="Pessimo" required="required">Pessimo</label>
									  <label class="radio-inline"><input type="radio" name="cortesia" value="Regular" required="required">Regular</label>
									  <label class="radio-inline"><input type="radio" name="cortesia" value="Bom" required="required">Bom</label>
									  <label class="radio-inline"><input type="radio" name="cortesia" value="Excelente" required="required">Excelente</label>     
								  </fieldset>
							</div>
                        </div>

                       <div class="row">
							<div class="form-group">
								  <fieldset>
									<legend>Eficacia: Técnico com Conhecimento e capacitação</legend>
									  <label class="radio-inline"><input type="radio" name="eficacia" value="Pessimo" required="required">Pessimo</label>
									  <label class="radio-inline"><input type="radio" name="eficacia" value="Regular" required="required">Regular</label>
									  <label class="radio-inline"><input type="radio" name="eficacia" value="Bom" required="required">Bom</label>
									  <label class="radio-inline"><input type="radio" name="eficacia" value="Excelente" required="required">Excelente</label>     
								  </fieldset>
							</div>
                        </div>

                        <div class="row">
							<div class="form-group">
								  <fieldset>
									<legend>Suporte Técnico: Os problemas são resolvidos com rapidez</legend>
									  <label class="radio-inline"><input type="radio" name="suporte" value="Pessimo" required="required">Pessimo</label>
									  <label class="radio-inline"><input type="radio" name="suporte" value="Regular" required="required">Regular</label>
									  <label class="radio-inline"><input type="radio" name="suporte" value="Bom" required="required">Bom</label>
									  <label class="radio-inline"><input type="radio" name="suporte" value="Excelente" required="required">Excelente</label>     
								  </fieldset>
							</div>
                        </div>

                        <div class="row">
							<div class="form-group">
								  <fieldset class="indicar">
									<legend>Indicaria a Softcom</legend>
									  <label class="radio-inline"><input type="radio" name="indicaria" value="1" required="required">1</label>
									  <label class="radio-inline"><input type="radio" name="indicaria" value="2" required="required">2</label>
									  <label class="radio-inline"><input type="radio" name="indicaria" value="3" required="required">3</label>
									  <label class="radio-inline"><input type="radio" name="indicaria" value="4" required="required">4</label> 
									  <label class="radio-inline"><input type="radio" name="indicaria" value="5" required="required">5</label>    
								  </fieldset>
							</div>
                        </div>


                </div><!--=======  fim container filho a ========-->
            </div>

            <div class="col-md-6 infos"> 
                <div class="container email-dados"><!--=======  container filho b ========-->


                  <div class="row "> <!-- ROW DENTO DA CONTAINER FILHO B -->


                    <div class="col-md-12  formularios "> <!-- DIVIDINDO AS INFOS NA METADE DA TELA -->

                      <div class="row ">

                        <div class="form-group col-md-12" >
                             <label for="tecnico">Tecnico:</label>
                             <input type="text" name="tecnico" class="form-control texto" id="tecnico" required>
                        </div>

                      </div>

                      <div class="row">

                        <div class="form-group col-md-12" >
                             <label for="registro">Registro:</label>
                             <input type="text" name="registro" class="form-control texto" id="registro"  required>
                        </div>

                      </div>

                      <div class="row">

                        <div class="form-group col-md-12" >
                             <label for="email">Nome ou Email:</label>
                             <input type="text" name="email" class="form-control texto" id="email" required>
                        </div>

                      </div>


                    </div><!-- DIVIDINDO AS INFOS NA METADE DA TELA -->



                 <!--  <div class="col-md-6 col-xs-12 col-sm-12 img"> <!-- DIVIDINDO AS INFOS NA METADE DA TELA B -->
                 <!--        <img src="img/suporte.jpg" class="img-responsive">
                  <!--   </div><!-- / DIVIDINDO AS INFOS NA METADE DA TELA B--> 


                  </div><!-- FIM DO ROW --> 

				  <div class="row ">
                    <div class="col-md-12">
                      <div class="row botao form-actions" >
					   <label for="registro">Deixe um elogio ou sugestão: </label>
                       <textarea name="elogio"  id="elogio" cols="40" rows="3" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>

				  
                  <div class="row ">
                    <div class="col-md-12">
                      <div class="row botao form-actions" >
                       <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enviar">
                      </div>
                    </div>
                  </div>

             </div><!--=======  fim container filho b ========-->

             
           </div>

          </div> <!--=======  fim row principal ========-->






      </div> <!--=======  fim container ========-->
 </form>


























    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
