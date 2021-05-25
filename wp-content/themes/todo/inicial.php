<?php
/*
Template Name: INITIALPAGE
*/ 
get_header(); 
?>
<div class="home-hero">
  <div class="container">
    <div class="hero-text-wrapper">
      <h1>Servir o que te faz bem</h1>
      <p>A To Do é o jeito mais prático de criar hábitos saudáveis.</p>
      <?php get_template_part('links', 'stores'); ?>
    </div>
    <div class="circle-alignment">
      <div class="circle-wrapper">
        <img src="<?php bloginfo('template_directory');?>/images/hero.gif" />
      </div>
    </div>
  </div>
</div>

<section class="conheca" id="conheca-a-todo">
  <div class="container">
    <h2>Conheça a To Do</h2>
    <div class="list-activities-wrapper">
      <ul class="list-activities">
        <li class="is-active">
          <button>
            <div class="icon-wrapper">
              <img src="<?php bloginfo('template_directory') ?>/images/activities/delivery.svg" alt="Delivery" />
            </div>
            <div class="title-wrapper">Delivery</div>
          </button>
        </li>
        <li>
          <button>
            <div class="soon-wrapper"><span>em breve</span></div>
            <div class="icon-wrapper">
              <img src="<?php bloginfo('template_directory') ?>/images/activities/assinaturas.svg" alt="Assinaturas" />
            </div>
            <div class="title-wrapper">Assinaturas</div>
          </button>
        </li>
        <li>
          <button>
            <div class="soon-wrapper"><span>em breve</span></div>
            <div class="icon-wrapper">
              <img src="<?php bloginfo('template_directory') ?>/images/activities/rede-social.svg" alt="Rede social" />
            </div>
            <div class="title-wrapper">Rede social</div>
          </button>
        </li>
        <li>
          <button>
            <div class="soon-wrapper"><span>em breve</span></div>
            <div class="icon-wrapper">
              <img src="<?php bloginfo('template_directory') ?>/images/activities/servicos.svg" alt="Serviços" />
            </div>
            <div class="title-wrapper">Serviços</div>
          </button>
        </li>
        <li>
          <button>
            <div class="soon-wrapper"><span>em breve</span></div>
            <div class="icon-wrapper">
              <img src="<?php bloginfo('template_directory') ?>/images/activities/ebooks.svg" alt="E-books" />
            </div>
            <div class="title-wrapper">E-books</div>
          </button>
        </li>
        <li>
          <button>
            <div class="soon-wrapper"><span>em breve</span></div>
            <div class="icon-wrapper">
              <img src="<?php bloginfo('template_directory') ?>/images/activities/grife.svg" alt="Grife" />
            </div>
            <div class="title-wrapper">Grife</div>
          </button>
        </li>
      </ul>
    </div>
    <div class="activity-content">
      <div>
        <h3>Delivery</h3>
      </div>
      <div>
        <h4>Restaurantes</h4>
        <p>Tudo de saudável, tudo de gostoso: a To Do tem tudo o que você precisa para comer bem. Seja para o lanche da tarde ou para aquele jantar especial, aqui você encontra variedade, qualidade e muita saúde.</p>
        <h4>Farmácias</h4>
        <p>A falta de conveniência te dá dor de cabeça? A To Do resolve os dois problemas. Aqui, você tem delivery de farmácias e, em poucos passos, recebe em casa com toda a segurança.</p>
      </div>
      <div>
        <h4>Mercados</h4>
        <p>Acabou a granola? Faltou aquele ingrediente importante no meio da receita? Pede To Do! Temos uma seleção especial de mercados e um sistema de delivery que vai levar seu pedido até você rapidinho e com cuidado.</p>
        <h4>Pet shots</h4>
        <p>A To Do tem pet shops porque sabe que seu pet faz parte da família e a saúde dele importa tanto quanto a sua. Nosso app é o jeito mais prático de fazer não só a sua alegria, mas a do seu amigo de quatro patas também.</p>
      </div>
    </div>
  </div>
</section>

<div class="phones-interlude">
  <picture>
      <source srcset="<?php bloginfo('template_directory'); ?>/images/phones.avif" type="image/avif">
      <img src="<?php bloginfo('template_directory'); ?>/images/phones.jpg" alt="App">
  </picture>
</div>

<section class="quem-servimos" id="quem-servimos">
  <div class="container text-container">
    <div>
      <h4>Quem Servimos</h4>
      <h5>Chegamos para entregar saúde</h5>
      <ul class="list">
        <li>
          <img src="<?php bloginfo('template_directory') ?>/images/icon1.svg" />
        </li>
        <li>
          <img src="<?php bloginfo('template_directory') ?>/images/icon2.svg" />
        </li>
        <li>
          <img src="<?php bloginfo('template_directory') ?>/images/icon3.svg" />
        </li>
        <li>
          <img src="<?php bloginfo('template_directory') ?>/images/icon4.svg" />
        </li>
      </ul>
    </div>
    <div>
      <div class="box-wrapper">
        <div class="text-wrapper">
          <p>E, quando falamos isso, não estamos nos referindo apenas ao seu lanchinho saudável, mas a todo o nosso ecossistema: usuário final, restaurante e lojista parceiro, colaborador e sociedade.</p>
          <p>Queremos que as pessoas ao nosso redor cresçam junto com a gente e sejam impactadas positivamente por tudo que fazemos.</p>
          <p>Isso porque acreditamos que não dá para pensar em saúde sem considerar o contexto social e que, ressignificando a experiência de delivery, é possível construir um mundo mais saudável para todos.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div id="tabs" class="tabs-wrapper">
      <ul class="tabs-links">
        <li>
          <a class="is-active" href="#green-user">
            Green <span class="mobile-only"><br /></span> User
          </a>
        </li>
        <li>
          <a href="#green-partner">
            Green <span class="mobile-only"><br /></span> Partner
          </a>
        </li>
        <li>
          <a href="#green-team">
            Green <span class="mobile-only"><br /></span> Team
          </a>
        </li>
      </ul>
      <div class="tabs-contents">
        <div class="tab is-visible" id="green-user">
          <div class="default-tab-content">
            <div class="tab-text-wrapper">
              <p>Se você usa nosso app, você é um green user e faz parte da nossa comunidade. São pessoas como você que nos ajudam a fomentar nossos projetos e a ampliar o impacto que causamos no mundo. </p>
              <p>Nosso objetivo é tornar a To Do um super app de wellness, onde nossos green users poderão encontrar tudo o que é necessário para criar um estilo de vida saudável.</p>
              <p>Investimos na curadoria de restaurantes e demais parceiros e em uma logística cuidadosa para que você tenha acesso a maior conveniência, qualidade e variedade possível.</p>
              <?php get_template_part('links', 'stores'); ?>
            </div>
            <div class="tab-image-wrapper">
              <picture>
                  <source srcset="<?php bloginfo('template_directory'); ?>/images/green-user.avif" type="image/avif">
                  <img src="<?php bloginfo('template_directory'); ?>/images/green-user.jpg" alt="Green User">
              </picture>
            </div>
          </div>
        </div>
        <div class="tab" id="green-partner">
          <div class="default-tab-content">
            <div class="tab-text-wrapper">
              <p>Nossos green partners são as pessoas por trás das empresas presentes no nosso aplicativo. Se você tem um negócio, se identificou com nosso propósito e acredita que o que sua empresa oferece combina com nossos green users, vem pra To Do!</p>
              <p>Temos um market place sob medida para você oferecer o delivery de seus produtos sem taxas abusivas, com logística adequada e para públicos segmentados. Você ganha novos clientes, mais pedidos e todas as vantagens de fazer parte de uma comunidade unida e engajada em fazer o bem.</p>
              <a class="button" href="https://docs.google.com/forms/d/e/1FAIpQLSfgFT1QspNZY1whCRTT8p8Tobd8n_4lEpuqQU88RvjQX68wAg/viewform" target="_blank">Seja um green partner</a>
            </div>
            <div class="tab-image-wrapper">
              <picture>
                  <source srcset="<?php bloginfo('template_directory'); ?>/images/green-partner.avif" type="image/avif">
                  <img src="<?php bloginfo('template_directory'); ?>/images/green-partner.jpg" alt="Green Partner">
              </picture>
            </div>
          </div>
        </div>
        <div class="tab" id="green-team">
          <div class="default-tab-content">
            <div class="tab-text-wrapper">
              <p>A era do delivery e da conveniência vem com um preço alto principalmente para quem é responsável pelas entregas. A To Do chegou para repensar e ressignificar tudo isso. Nossos entregadores fazem parte do nosso green team. Isso significa que todos são registrados em CLT e recebem todos os direitos e benefícios atrelados.</p>
              <p>Fazemos questão de trabalhar com jovens em situação de vulnerabilidade, que estão entrando no mercado de trabalho. Além da oportunidade do primeiro emprego, oferecemos também mentorias e treinamentos, para que eles possam continuar se desenvolvendo pessoal e profissionalmente.</p>
              <a class="button" href="<?php bloginfo('home') ?>/#fale-conosco">Faça parte do green team</a>
            </div>
            <div class="tab-image-wrapper">
              <picture>
                  <source srcset="<?php bloginfo('template_directory'); ?>/images/green-team.avif" type="image/avif">
                  <img src="<?php bloginfo('template_directory'); ?>/images/green-team.jpg" alt="Green Team">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="tudo-isso-e-todo" id="tudo-isso-e-todo">
  <div class="container container-tudo-isso">
    <div class="title-wrapper">
      <h5>Tudo isso é To Do</h5>
    </div>
    <div class="text-wrapper">
      <p>Até quando a busca por uma vida saudável será dificultada pela correria cotidiana? Até quando essa mudança de hábitos será pouco prática e dispendiosa em tempo e dinheiro? Até quando a conveniência de aplicativos de delivery irá custar caro para entregadores e restaurantes? Até quando pensaremos em saudabilidade sem considerar o contexto social? </p>
      <p>Em um cenário em que todas essas questões ganham cada vez mais relevância, nós chegamos para solucioná-las.</p>
      <p>Somos um super app que oferece tudo o que é necessário para quem busca um estilo de vida saudável, com conveniência, variedade e qualidade.</p>
      <p>Somos um espaço para parceiros selecionados oferecerem o delivery de seus produtos sem taxas abusivas e com logística adequada para os públicos certos.</p>
      <p>Somos uma empresa que oferece mentoria, segurança e oportunidades de crescimento para seus colaboradores.</p>
      <p>Somos tudo isso. E estamos aqui porque acreditamos que um mundo mais saudável é possível.</p>
    </div>
    <div class="image-wrapper">
      <picture>
          <source srcset="<?php bloginfo('template_directory'); ?>/images/isso-e-todo.avif" type="image/avif">
          <img src="<?php bloginfo('template_directory'); ?>/images/isso-e-todo.jpg" alt="Tudo isso é To Do">
      </picture>
    </div>
  </div>
</section>

<?php get_footer(); ?>