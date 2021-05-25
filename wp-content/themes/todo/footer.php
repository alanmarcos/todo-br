  <div class="fale-conosco" id="fale-conosco">
    <div class="container">
      <div class="logo-wrapper">
        <svg width="75" height="84" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67 76">
          <path d="M33.2125 55.7488c-1.6314 9.3833 4.5449 18.3302 13.793 19.9854 9.2482 1.6552 18.0663-4.6113 19.6976-13.9946 1.6314-9.3833-4.5448-18.3302-13.793-19.9854-9.2481-1.6536-18.0679 4.6129-19.6976 13.9946zM49.956 40.0481c9.3902 0 17.0024-7.7234 17.0024-17.2508 0-9.5274-7.6122-17.251-17.0024-17.251-9.3902 0-17.0024 7.7236-17.0024 17.251s7.6122 17.2508 17.0024 17.2508zM13.03 17.8036l2.9345 11.1107 2.9329 11.1091 10.9491-2.9774-2.9329-11.1091-2.9345-11.109L13.03 17.8036zM18.8974 41.4604l-8.8019 33.3273c9.0703 2.4656 18.3944-2.9955 20.8245-12.1983 2.4301-9.2029-2.9523-18.6634-12.0226-21.129zM24.2942 13.3237l11.1641-1.9981L33.489 0 22.3266 1.9964l-11.1641 1.998L0 5.991 1.9677 17.318l11.1641-1.998 11.1624-1.9964z" fill="#14733C"/>
        </svg>
      </div>
      <div class="contacts-wrapper">
        <p>
          <strong>(11) 3164.7817 (ramal 3020)</strong>
          <a href="mailto:atendimento@todogreen.com.br">atendimento@todogreen.com.br</a>
        </p>
      </div>
      <div class="socials-wrapper">
        <ul>
          <li>
            <a href="https://www.facebook.com/todogreenbr/" target="_blank">
              <img src="<?php bloginfo('template_directory') ?>/images/icon-facebook.svg" width="41" height="41" alt="Facebook" />
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/todogreen_br/" target="_blank">
              <img src="<?php bloginfo('template_directory') ?>/images/icon-instagram.svg" width="41" height="41" alt="Instagram" />
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/company/todogreen/" target="_blank">
              <img src="<?php bloginfo('template_directory') ?>/images/icon-linkedin.svg" width="41" height="41" alt="LinkedIn" />
            </a>
          </li>
        </ul>
      </div>
      <div class="stores-wrapper">
        <?php get_template_part('links', 'stores'); ?>
      </div>
    </div>
  </div>
  <footer>
    <p>© Copyright To Do Tecnologia Ltda</p>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>

</body>
</html>