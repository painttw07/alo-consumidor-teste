<?php
  ob_start();
  include("header.php");
  $buffer=ob_get_contents();
  ob_end_clean();

  $title = "Alô Consumidor";

  $description = '';
  $keywords = '';

  $buffer = str_replace('name="description"', 'name="description" content="'.$description.'" ', $buffer);
  $buffer = str_replace('name="keywords"', 'name="keywords" content="'.$keywords.'" ', $buffer);
  $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

  echo $buffer;
?>
    <style>
        .accordion .card-header:after {
            height:15px;
            width:15px;
            float: right;
            display:block;
            color:#000;
            font-weight: 400;
            content: url(img/angle-up.svg);
        }
        .accordion .card-header.collapsed:after {
            /* symbol for "collapsed" panels */
            content: url(img/angle-down.svg);
            display:block;
        }
        .card-header{
            background-color:#fff;
        }
        .card-body{
            font-weight: 400;
        }
        .card-header{
            font-weight: 500;
            cursor: pointer;
            margin-bottom:0!important;
        }
        .card-header:hover{
            background:#49D6CA;
        }
    </style>
    <section class="slider-home">
        <div class="img-fluid slider-bg img">
            <div class="img-opacity"></div>
            <div class="container home-quem-somos text-center">
                <div class="row title-quem-somos-inicio row-header">
                        <div class="col col-sm-6 descricao-quem-somos-inicio">
                                <div class="text-quem-somos-inicio text-center" style="font-size: 22px; margin: 50px 10px;">
                                    <p>A <span><b>Alô Consumidor</b></span> é uma associação voltada para a proteção e garantia dos direitosdos consumidores brasileiros. Prezamos pela clareza e celeridade nas nossas movimentações.</p>
                                    <!--<a href="quem-somos.php"><button class="btn-1">Veja mais</button></a><-->
                                </div>
                        </div>
                            <div class="col-1 col-12">
                                <div id="texto-descrip">
                                    <div class="col-2 col-4 mb-5 col-itens" id="content">
                                        <div class="texto-box">
                                            <h5 style="margin-bottom: 10px"><i class="fa fa-gavel" aria-hidden="true"></i> Missão</h5>
                                            <p>A missão da Alô Consumidor é trazer transparência e conhecimento aos consumidores brasileiros de seus direitos para que não venham a ser lesados por grandes instituições.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1 col-12 text-center">
                                    <div class="col-2 col-4 mb-5 col-itens" id="content">
                                        <div class="texto-box">
                                            <h5 style="margin-bottom: 10px"><i class="fa fa-balance-scale" aria-hidden="true"></i> Visão</h5>
                                            <p>Consolidarmos como Instituição de referência nacional em direito do consumidor e direito previdenciário.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1 col-12 text-center">
                                    <div class="col-2 col-4 mb-5 col-itens" id="content">
                                        <div class="texto-box">
                                            <h5 style="margin-bottom: 10px"><i class="fa fa-handshake-o" aria-hidden="true"></i> Valores</h5>
                                            <p>Ética, comprometimento, comunicação eficaz, agilidade e transparência.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <!-- <-->
                            <!-- <-->
    </section>
    <section class="frente">
        <div class="container" style="margin-top:50px;">
            <div class="row">
                <div class="col-1 col-12 text-center" style="color: #012b96;">
                    <h2>Frentes de Atuação</h2>
                    <h5>Trabalhamos com foco em Direito do Consumidor e Previdenciário.</h5>
                </div>
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <b>Direito do Consumidor</b>
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"  data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>A relação de consumo é verificada e identificada em diversos negócios jurídicos de modo que merece proteção, principalmente a parte mais vulnerável dessa relação.</p>
                                            <ul>A <b>Alô Consumidor </b>possui qualificação para melhor lhe atender, nas situações abaixo listadas:
                                                <li>Juros Abusivos</li>
                                                <li>Empréstimos não solicitados</li>
                                                <li>Descontos indevidos realizados por associações brasileiras</li>
                                                <li>Descontos de Seguros</li>
                                                <li>Cartão de crédito e Descontos de RMC</li>
                                                <li>Ações indenizatórias</li>
                                            </ul>
                                            <p>Realizamos consultoria e orientação, revisão e análise de documentos para o melhor procedimento, na esfera administrativa e judicial.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <b>Direito Previdenciário</b>
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Possuímos advogados especialistas para realizar revisão de aposentadorias e ações previdenciárias contra o INSS.</p>
                                            <p>Realizamos os cálculos para a aposentadoria e encaminhamento de pensão para cônjuge e/ou filhos. Também, trabalhamos com as assistências sociais, para requerer o Benefício de Prestação Continuada da Assistência Social (BPC).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="col-2"></div>
                </div>
            </div>
    </section>
    <section class="nossos-clientes">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center title-depo">
                    <h2>Nossos Clientes</h2>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row" style="margin-bottom:40px;">
                                <div class="col-2"></div>
                                <div class="col-2 depo-itens">
                                    <div class="foto-depo">
                                        <img src="img/pessoa.png" style="width: 150px;margin-left: -20px"/>
                                        <p class="title-name-depo">Nome do cliente</p>
                                    </div>
                                </div>
                                <div class="col-7 depo-itens">
                                    <p class="depo-description">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row" style="margin-bottom:40px;">
                                <div class="col-2"></div>
                                <div class="col-2 depo-itens">
                                    <div class="foto-depo">
                                        <img src="img/pessoa.png" style="width: 150px;margin-left: -20px"/>
                                        <p class="title-name-depo">Nome do cliente</p>
                                    </div>
                                </div>
                                <div class="col-7 depo-itens">
                                    <p class="depo-description">
                                       KODKOSDKOKDOSKDKDOKDKSOKDODKSOKODOKOSKDODKOSDK KojifjsidushunsdundusndndsdnjdsnsjdnsndnsdnsdndsjsdnjsdnA AAAAAA hKSFODSKODP
                                    </p>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row" style="margin-bottom:40px;">
                                <div class="col-2"></div>
                                <div class="col-2 depo-itens">
                                    <div class="foto-depo">
                                        <img src="img/pessoa.png" style="width: 150px;margin-left: -20px"/>
                                        <p class="title-name-depo">Nome do cliente</p>
                                    </div>
                                </div>
                                <div class="col-7 depo-itens">
                                    <p class="depo-description">
                                    TESTE
                                      </p>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        </div>
</section>
<?php include 'footer.php';?>