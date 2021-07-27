<?php 
  ob_start();
  include("header.php");
  $buffer=ob_get_contents();
  ob_end_clean();
  $title = "Quem somos - Clinicentro | Clinica Médica | Centro de Porto Alegre";
  $description = 'Clinicentro, há 10 Anos fazendo de Centro de Porto mais Alegre e Saudável. A Clinicentro foi fundada em 2010 com a missão de oferecer soluções em saúde, aliando qualidade e conforto a partir de um atendimento profissional, ético e humanizado.';
  $keywords = 'Clinicentro, Clínica, Porto Alegre, Clinica em porto alegre, Cônvenios em Porto Alegre, Clinica no centro de Porto Alegre,
  Plano de saude porto alegre, Plano de saúde, Clinico geral porto alegre, Exames porto alegre, Clinica medica';
  $buffer = str_replace('name="description"', 'name="description" content="'.$description.'" ', $buffer);
  $buffer = str_replace('name="keywords"', 'name="keywords" content="'.$keywords.'" ', $buffer);
  $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
  echo $buffer;
?>
<section class="sec-quem-somos slider-home">
    <div class="slider-bg-2 slider-img-2">
        <div class="img-opacity"></div>
        <div class="container home-quem-somos">
            <div class="row row-header">
                    <div class="col-1 col-12">
                        <div id="texto-descrip">
                            <div class="col-1 col-6 col-itens" id="col-itens-texto">
                                <h1 style="font-weight: 800; margin: 0px 0px 16px 0px;">Quem Somos</h1>
                                <p style="text-align: justify">A <b>Alô Consumidor</b> é uma associação voltada para a proteção e garantia dos direitosdos consumidores brasileiros. Desde 2020 conta com profissionais experientes, qualificados e compromissados com o direito e o exercício da advocacia, bem como, com seus clientes.
                                    Prezamos pela clareza e celeridade nas nossas movimentações. Estamos em constante atualização. Nos colocamos à disposição de você para atuação de forma consultiva e também contenciosa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php';?>