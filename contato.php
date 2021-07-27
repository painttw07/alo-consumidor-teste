
<?php 
  ob_start();
  include("header.php");
  $buffer=ob_get_contents();
  ob_end_clean();

  $title = "Contato - Clinicentro | Clinica Médica | Centro de Porto Alegre";

  $description = 'A Clinicentro trabalha com as principais especialidades médicas para cuidar da sua Saúde. Nossa equipe é composta por profissionais graduados e experientes, que garantem um atendimento de qualidade.';
  $keywords = 'Contato Clinicentro, Telefone clínica, Porto Alegre, Contato Clinica em porto alegre, Contato de cônvenios em Porto Alegre, Telefone clinica no centro de Porto Alegre,Telefone Plano de saude porto alegre, Contato Plano de saúde, Telefone Clinico geral porto alegre, Contato Exames porto alegre, Contato Clinica medica, Telefone Clinica medica, Endereço Clinicentro, Endereco clinica';
 
  $buffer = str_replace('name="description"', 'name="description" content="'.$description.'" ', $buffer);
  $buffer = str_replace('name="keywords"', 'name="keywords" content="'.$keywords.'" ', $buffer);
  $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

  echo $buffer;
?>

<?php
if(isset($_GET['alert'])){
    $alert = $_GET['alert'];
}else{
    $alert = "";
}
?>
<div class="container mb-3">
<!--Section: Content-->
<section class="text-center">
  <style>
    .map-container {
      height: 420px;
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
  <div class="row d-flex justify-content-center mb-4" style="margin-top: 60px">
    <div class="col-md-10 text-center" style="padding: 0;">
        <div class="home-contato">
        <div class="col-sm">
            <h1>Entre em contato</h1>
            <a href="https://api.whatsapp.com/send?phone=5551992239193" target="_blank">
                <button type="button" class="btn btn-lg botao text-center" style="border-radius: 10px;margin-top: 10px;"><i class="fa fa-whatsapp" aria-hidden="true"></i>
                    Contato pelo Whats</button>
            </a>
            <h4 class="mt-4" style="margin-bottom: 0;color:#1d387d ">Caso tenha dúvidas, entre em contato pelo formulário</h4>
            <p class="text-center">Preencha o formulário abaixo, logo entraremos em contato.</p>
        </div>
        </div>
        <?php if($alert == 'enviado'){?> 
            <div class="alert alert-success" role="alert">
                Contato enviado com sucesso! Em breve retornaremos!
            </div>
        <?php }; ?>
        <div class="col-1 col-12">
            <div class="row" style="margin-top: 50px">
                <div class="col-7">
                    <form  id="form1" name="form1" method="post" action="enviarEmail.php">
                        <div class="md-form md-outline mt-2">
                            <input type="text" name="nome" id="nome" class="form-control nome" placeholder="Nome: " required style="background: transparent;border-radius: 0;border: none; border-bottom: black 1px solid;">
                        </div>
                        <div class="md-form md-outline mt-3">
                            <input type="text" name="celular" id="celular" class="form-control celular" placeholder="Telefone: " required style="background: transparent;border-radius: 0;border: none; border-bottom: black 1px solid;">
                        </div>
                        <div class="md-form md-outline mt-3">
                            <input type="email" name="email" id="email" class="form-control email" placeholder="Email: " style="background: transparent;border-radius: 0;border: none; border-bottom: black 1px solid;">
                        </div>
                        <div class="md-form md-outline mb-3 mt-3">
                            <textarea id="mensagem" name="mensagem" class="md-textarea form-control" placeholder="Qual sua dúvida?" rows="5" style="background: transparent;border-radius: 0;border: none; border-bottom: black 1px solid;"></textarea>
                        </div>
                        <div class="col-sm-6 pt-1 text-center" style="margin: 0 auto;">
                            <button type="submit" value="Enviar" class="btn btn-lg botaoservico" style="border-radius: 10px;padding: 15px;font-size: 18px;">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-5">
                    <!--Google map-->
                    <div id="map-container-google-1" class="z-depth-1 map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.236110508452!2d-51.229757384885104!3d-30.030083381887557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519790f419ba57d%3A0x10d639c2fdfa0254!2sAv.%20Borges%20de%20Medeiros%2C%20410%20-%205%C2%BA%20Andar%20-%20Centro%20Hist%C3%B3rico%2C%20Porto%20Alegre%20-%20RS%2C%2090020-022!5e0!3m2!1spt-BR!2sbr!4v1599228084869!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"
                                style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
  </div>
</section>
<!--Section: Content-->
</div>
<?php include 'footer.php';?>
