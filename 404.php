
<?php 
  ob_start();
  include("header.php");
  $buffer=ob_get_contents();
  ob_end_clean();

  $title = "Não Encontrado - Consultas e Exames no Centro de Porto Alegre - Clinicentro";

  $description = 'A Clinicentro trabalha com as principais especialidades médicas para cuidar da sua Saúde. Nossa equipe é composta por profissionais graduados e experientes, que garantem um atendimento de qualidade.';
  $keywords = 'Contato Clinicentro, Telefone clínica, Porto Alegre, Contato Clinica em porto alegre, Contato de cônvenios em Porto Alegre, Telefone clinica no centro de Porto Alegre,Telefone Plano de saude porto alegre, Contato Plano de saúde, Telefone Clinico geral porto alegre, Contato Exames porto alegre, Contato Clinica medica, Telefone Clinica medica, Endereço Clinicentro, Endereco clinica';
 
  $buffer = str_replace('name="description"', 'name="description" content="'.$description.'" ', $buffer);
  $buffer = str_replace('name="keywords"', 'name="keywords" content="'.$keywords.'" ', $buffer);
  $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

  echo $buffer;
?>

<?php $alert = $_GET['alert'];?>


<div class="container mb-3">


<!--Section: Content-->
<section class="text-center">

  <style>
    .map-container {
      height: 320px;
      position: relative;
    }

    .map-container iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }
  </style>

  <!--Grid row-->
  <div class="row d-flex justify-content-center mb-4">

  
    <div class="col-md-10 text-center" style="padding: 0;">

        <div class="home-contato">
        <div class="col-sm text-center">
            <h1>Desculpe, página não encontrada!</h1>
            <p class="text-center">Clique a baixo para voltar a página inicial.</p>
        </div>
        </div>

        <div class="col-sm-6 pt-1 text-center" style="margin: 0 auto;">
                <a href="index.php"><button type="button" class="btn btn-lg botaoservico" style="border-radius: 10px;padding: 15px;font-size: 0.9rem;">PÁGINA INICIAL</button></a>
            </div>  


    </div>
   

  </div>
  <!--Grid row-->


</section>
<!--Section: Content-->


</div>  

<?php include 'footer.php';?>
