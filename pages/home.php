<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/home_style.css"/>
    <link rel="stylesheet" href="assets/css/header_style.css"/>
    <link rel="stylesheet" href="assets/css/footer_style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Lagos Construtora</title>
</head>
<body>
    <?php require_once('layout/header.html'); ?>
    
    <section class="section_banner">
        <div class="oppacity_banner">
            <div class="slider">
                <div class="slide">
                    <div class="area_slide">
                        <div class="area_slide_left">
                            <h1>Qualidade, Saúde e Segurança no Trabalho</h1>
                            <h2>Prezamos pela qualidade e Segurança de nosso funcionários e serviços</h2>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="area_slide">
                        <div class="area_slide_left">
                            <h1>Área de Sustentabilidade</h1>
                            <h2>Prezamos pela sustentabilidade em nossos serviços</h2>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="area_slide">
                        <div class="area_slide_left">
                            <h1>Política de Privacidade</h1>
                            <h2>Prezamos pela privacidade de nossos clientes</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide_pointers">
                <div data_key="0" class="pointer ativado" onclick="fristSlide(this)"></div>
                <div data_key="1" class="pointer" onclick="secondSlide(this)"></div>
                <div data_key="2" class="pointer" onclick="thirdSlide(this)"></div>
            </div>
        </div>
    </section>

    <section id="section_sobre" class="section_sobre">
        <div class="container sobre">
            <h1>Sobre Nós</h1>
            <div class="sobre_body">
                <div class="sobre_texts">
                    <p>A Lagos Construtora é a marca que ao longo
                    da data tem assinado em sua maior parte manutenção e
                    reforma residenciais. Em 2020, com a chegada da nova
                    direção, uma nova filosofia está sendo implantada, estamos
                    em busca em entender o que é importante para você e
                    oferecer além da manutenção e reforma, construção de
                    imóveis que surpreendam, tanto residenciais, quanto
                    comerciais. O desejo pela Isa Construção e Manutenção se
                    traduz no cuidado com cada detalhe, afinal, são espaços
                    para quem deseja investimento, qualidade e sofisticação
                    para quem deseja trabalhar/morar ou investir com
                    qualidade, acessibilidade e encantamento.</p>

                    <h2>Nossa História</h2>

                    <p>Fundada em 2013 a Isa Construção 
                    e Manutenção é uma empresa cuja 
                    finalidade é a prestação de 
                    serviços nos segmentos da 
                    construção civil, manutenção e 
                    reformas em geral.</p>

                    <h2>Política da Empresa</h2>

                    <p>A nossa política busca a contínua 
                    satisfação dos clientes internos e 
                    externos, através da aquisição de 
                    novos conhecimentos aplicados ao 
                    trabalho, execução de produtos 
                    qualificados a custos competitivos, 
                    promovendo a redução de 
                    impactos ambientais e 
                    proporcionando através do 
                    comprometimento e participação 
                    de todos, um ambiente seguro e 
                    saudável, cumprindo as leis e 
                    normas.
                    </p>
                </div>
                <div class="sobre_img"><img src="assets/images/office.jpg"/></div>
            </div>
    </section>

    <section id="section_proposito" class="section_proposito">
        <div class="container proposito">
            <h1>Propósito</h1>
            <div class="proposito_body">
                <div class="proposito_item">
                    <div class="item_img"><img src="assets/images/alvo.png"/></div>
                    <h2>Missão</h2>
                    <p>Ser uma 
                    construtora que 
                    priorizando a ética e a 
                    preservação do meio 
                    ambiente</p>
                </div>
                <div class="proposito_item">
                    <div class="item_img"><img src="assets/images/visao.png"/></div>
                    <h2>Visão</h2>
                    <p>Tornar-se referência na 
                    construção civil, manutenção e 
                    reformas, acompanhando o 
                    desenvolvimento do setor e 
                    adaptando-se às suas demandas 
                    e inovações</p>
                </div>
                <div class="proposito_item">
                    <div class="item_img"><img src="assets/images/checked.png"/></div>
                    <h2>Valores</h2>
                    <p>Respeito a pessoas e ao
                    meio ambiente
                    </p>
                </div>
            </div>
    </section>

    <section id="section_noticias" class="section_noticias">
        <div class="container noticias">
            <h1>Últimas Notícias</h1>
            <div class="noticias_body">
                <div class="noticia">
                    <div class="noticia_img"><img src="db_images/teste.jpg"/></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis tincidunt sem, in interdum arcu. Suspendisse dignissim non magna eu lacinia. Sed vestibulum risus ac enim vestibulum finibus. Proin laoreet orci pulvinar diam dapibus molestie ut vitae metus.</p>
                    <a href="noticia/3">Ler mais</a>
                </div>

                <div class="noticia">
                    <div class="noticia_img"><img src="db_images/teste.jpg"/></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis tincidunt sem, in interdum arcu. Suspendisse dignissim non magna eu lacinia. Sed vestibulum risus ac enim vestibulum finibus. Proin laoreet orci pulvinar diam dapibus molestie ut vitae metus.</p>
                    <a href="noticia/2">Ler mais</a>
                </div>

                <div class="noticia">
                    <div class="noticia_img"><img src="db_images/teste.jpg"/></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis tincidunt sem, in interdum arcu. Suspendisse dignissim non magna eu lacinia. Sed vestibulum risus ac enim vestibulum finibus. Proin laoreet orci pulvinar diam dapibus molestie ut vitae metus.</p>
                    <a href="noticia/1">Ler mais</a>
                </div>
            </div>
            <a href="noticias">Todas as notícias</a>
        </div>
    </section>

    <section id="section_contatos" class="section_contatos">
        <div class="oppacity_contatos">
            <div class="container contatos">
                <h1>Contatos</h1>
                <div class="contatos_body">
                    <div class="media">
                        <div class="media_img"><img src="assets/images/whatsapp.png"/></div>
                        <p>+55 21 97984 - 2680</p>
                    </div>

                    <div class="media">
                        <div class="media_img"><img src="assets/images/telegram.png"/></div>
                        <p>+55 21 97984 - 2680</p>
                    </div>

                    <div class="media">
                        <div class="media_img"><img src="assets/images/instagram.png"/></div>
                        <p>@lagoscontrutora_</p>
                    </div>

                    <div class="media">
                        <div class="media_img"><img src="assets/images/email.png"/></div>
                        <p>lagosconstrutora@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once('layout/footer.html'); ?>

    <script src="assets/js/home_script.js"></script>
</body>
</html>