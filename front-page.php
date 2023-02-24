<?php get_header(); ?>

<?php $hero = get_field('hero'); ?>
<main>
  <!-- HOME SECTION -->
  <section class="home">
    <picture>
      <source media="(max-width: 768px)" srcset="
                https://images.unsplash.com/photo-1512521743077-a42eeaaa963c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80
              " />
      <source media="(min-width: 769px)" srcset="
                https://images.unsplash.com/photo-1512521743077-a42eeaaa963c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80
              " />
      <img src="<?php bloginfo('template_directory'); ?>/images/mobile/image-header.jpg" alt="home banner image" class="home-banner" loading="lazy" />
    </picture>

    <div class="home-absolute-content">
      <h1 class="main-heading"><?php echo $hero['main_title']; ?></h1>
      <a href="#about">
        <img src="<?php bloginfo('template_directory'); ?>/images/icon-arrow-down.svg" alt="icon arrow-down" class="arrow-down" loading="lazy" />
      </a>
    </div>
  </section>

  <!-- ABOUT SECTION -->
  <?php $info = get_field('left_side_information'); ?>

  <section class="about" id="about">
    <div class="about-img-box grid-pos-lg">
      <picture>
        <source media="(max-width: 768px)" srcset="
                 <?php echo $info['right_image']; ?>
                " />
        <source media="(min-width: 769px)" srcset="
                 <?php echo $info['right_image']; ?>
                " />
        <img src="<?php echo $info['right_image']; ?>" alt="about image" class="about-img" loading="lazy" />
      </picture>
    </div>
    <div class="about-content">
      <h2 class="about-h2">Transform your brand</h2>
      <div class="about-p">
        <?php echo $info['left_side']; ?>
      </div>
      <a href="#" class="about-link yellow">Learn more</a>
    </div>
    <div class="about-img-box">
      <picture>
        <source media="(max-width: 768px)" srcset="
                  https://images.unsplash.com/photo-1529717730488-7a2492983b2c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80
                " />
        <source media="(min-width: 769px)" srcset="
                  https://images.unsplash.com/photo-1529717730488-7a2492983b2c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80
                " />
        <img src="https://images.unsplash.com/photo-1529717730488-7a2492983b2c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="about image" class="about-img" loading="lazy" />
      </picture>
    </div>
    <div class="about-content">
      <h2 class="about-h2">Stand out to the right audience</h2>
      <p class="about-p">
        Using a collaborative formula of designers, researchers, photographers, videographers, and copywriters, we’ll build and extend
        your brand in digital places.
      </p>
      <a href="#" class="about-link pink">Learn more</a>
    </div>
  </section>

  <!-- SERVICES SECTION -->
  <section class="services" id="services">
    <div class="service-box">
      <div class="img-box">
        <picture>
          <source media="(max-width: 768px)" srcset="
                    https://images.unsplash.com/photo-1472566316349-bce77aa2a778?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80
                  " />
          <source media="(min-width: 769px)" srcset="
                    https://images.unsplash.com/photo-1472566316349-bce77aa2a778?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80
                  " />

          <img src="https://images.unsplash.com/photo-1472566316349-bce77aa2a778?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="graphic design image" class="service-img" loading="lazy" />
        </picture>
      </div>

      <div class="service-absolute-content">
        <h3 class="service-h3 cyan">Graphic design</h3>
        <p class="service-p cyan">
          Great design makes you memorable. We deliver artwork that underscores your brand message and captures potential clients’
          attention.
        </p>
      </div>
    </div>

    <div class="service-box">
      <div class="img-box">
        <picture>
          <source media="(max-width: 768px)" srcset="
                    https://images.unsplash.com/photo-1526907379376-20c930b9f5d8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80
                  " />
          <source media="(min-width: 769px)" srcset="
                    https://images.unsplash.com/photo-1526907379376-20c930b9f5d8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80
                  " />

          <img src="https://images.unsplash.com/photo-1526907379376-20c930b9f5d8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="photography image" class="service-img" loading="lazy" />
        </picture>
      </div>

      <div class="service-absolute-content">
        <h3 class="service-h3 blue">Photography</h3>
        <p class="service-p blue">
          Increase your credibility by getting the most stunning, high-quality photos that improve your business image.
        </p>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS SECTION -->
  <section class="testimonials">
    <h2 class="testimonials-h2">Client testimonials</h2>

    <div class="testimonials-grid">
      <div class="testimonials-client">
        <div class="client-img-box">
          <img src="<?php bloginfo('template_directory'); ?>/images/image-emily.jpg" alt="client emily image" class="client-img" loading="lazy" />
        </div>

        <p class="client-text">
          We put our trust in Photora and they delivered, making sure our needs were met and deadlines were always hit.
        </p>

        <h4 class="client-name">Emily R.</h4>

        <p class="client-title">Restaurateur</p>
      </div>

      <div class="testimonials-client">
        <div class="client-img-box">
          <img src="<?php bloginfo('template_directory'); ?>/images/image-thomas.jpg" alt="client thomas image" class="client-img" loading="lazy" />
        </div>

        <p class="client-text">
          Photora’s enthusiasm coupled with their keen interest in our brand’s success made it a satisfying and enjoyable experience.
        </p>

        <h4 class="client-name">Thomas S.</h4>

        <p class="client-title">Realtor</p>
      </div>

      <div class="testimonials-client">
        <div class="client-img-box">
          <img src="<?php bloginfo('template_directory'); ?>/images/image-jennie.jpg" alt="client jennie image" class="client-img" loading="lazy" />
        </div>

        <p class="client-text">
          Incredible end result! Our sales increased over 400% when we worked with Photora. Highly recommended!
        </p>

        <h4 class="client-name">Jennie F.</h4>

        <p class="client-title">Business Owner</p>
      </div>
    </div>
  </section>

  <!-- PROJECTS SECTION -->
  <section class="projects" id="projects">
    <div class="project-img-box">
      <a href="#">
        <picture>
          <img src="https://images.unsplash.com/photo-1589287707312-213624549c88?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="milk bottles" class="project-img" />
        </picture>
      </a>
    </div>

    <div class="project-img-box">
      <a href="#">
        <picture>
          <img src="https://images.unsplash.com/photo-1464423163665-75e82891f301?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="orange fruit" class="project-img" />
        </picture>
      </a>
    </div>

    <div class="project-img-box">
      <a href="#">
        <picture>
          <img src="https://images.unsplash.com/photo-1529432337323-223e988a90fb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=725&q=80" alt="cone ice-cream" class="project-img" />
        </picture>
      </a>
    </div>

    <div class="project-img-box">
      <a href="#">
        <picture>
          <img src="https://images.unsplash.com/photo-1576854305946-f67baef382af?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="sugar cubes" class="project-img" />
        </picture>
      </a>
    </div>
  </section>
</main>
<?php get_footer(); ?>