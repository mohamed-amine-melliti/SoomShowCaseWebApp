<template>
  <!-- Feeding Trends -->
  <div>


    <!-------------------------------BANNER-------------------------------------------------->
    <div class="banner">
      <div class="banner__content">
        <div class="banner__text">
          <strong> </strong>
        </div>
        <button class="banner__close" type="button">
        <span class="material-icons">
        </span>
        </button>
      </div>
    </div>

    <!--------------------------------------******------------------------------------------>



    <projecthero
      pDate="2022 "
      pWebsite="Business Owner"
      pCategory=""
      pHeading="Business Owner"
      pHeadingcolor="color:#0088FF;"
      pSubheading="Manage your Business , relation with Outsourcing Company throw CRM."
    />


    <!-- hero image -->
    <div class="p-dz-hero_image">
      <div class="reveal-holder" data-aos="fade-up">
        <div
          class="reveal-block right theme_cricbuzz"
          data-aos="reveal-right"
        ></div>

        <picture>
          <source
            media="(max-width: 600px)"
            srcset="/assets/projects/cricbuzz/cricbuzz-hero-mobile.jpg"
          />
          <img
            src="/assets/projects/cricbuzz/cricbuzz-hero.jpg"
            alt="woman t-shirt, woman t-shirt mockup"
            align
          />
        </picture>
      </div>
    </div>


    <!-- Preface -->


    <pcase
      heading="About"
      para="SOOM CRM  offers a full-featured and customized CRM software development solution.

      <br>
      <br>
Our goal is to serve you in a better manner and also provide you with a custom CRM solution, which will organize the entire volume of data and then convert it into a profitable business.

      <br>
      <br>
     "
      theme="theme_cricbuzz"
    />

    <!-- get to know me -->

    <!-- Desighn -->

    <!-- key Focus Area -->

    <div class="keyfocus">
      <div class="content">
        <div class="contain">
          <h2 class="p-para black50">Soom CRM Solution includes</h2>

          <div class="pm black70">
            <div class="kf-layout">
              <span> 1. Activities Managament </span>
              <span> 2. Contact Management</span>
              <span> 3. Team and workers management</span>
              <span> 4. Product management</span>
              <span> 5. Mail Managment</span>
              <span> 6. Interactive Dashboard</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- conclusion -->

    <div class="a-c_bg_text outlined" v-rellax="{ speed: -1, center: 0.5 }">
      <span>New ?</span>
    </div>


    <div class="live-link_container" style="background-color:#FFFFFF;">
      <LiveLink style="background-color:#FFFFFF;"
                link=" http://localhost:8001/"
                text="Sign up If you're new ! "
      />
    </div>


    <div class="a-c_bg_text outlined" v-rellax="{ speed: -1, center: 0.5 }">
      <span>Already a customer</span>
    </div>

    <div class="live-link_container" style="background-color:#FFFFFF;">
      <LiveLink style="background-color:#FFFFFF;"
                link=" http://localhost:8001/"
                text="Start from here if you a1ready have an account"
      />
    </div>
    <!-- End Line  -->

    <div class="section-divider">
      <hr class="section-divider" />
    </div>

    <!-- appreciate button -->
    <!-- Project Footer Navigatrion -->

  </div>
</template>

<script>
import Projecthero from '~/components/projects/projecthero'
import Preface from '~/components/projects/preface'
import Projectfooter from '~/components/projects/projectfooter'
import Pcase from '~/components/projects/pcase'
import Appreciate from '~/components/projects/appreciate'
import Next from '~/components/projects/next'
import Previous from '~/components/projects/previous'
import Pfootern from '~/components/projects/pfootern'
import Pfooterp from '~/components/projects/pfooterp'
import Allprojectsnav from '~/components/projects/allprojectsnav'
import LiveLink from '~/components/projects/live-link'

export default {
  layout: 'projects',
  components: {
    Projectfooter,
    Preface,
    Appreciate,
    Pcase,
    Projecthero,
    Next,
    Previous,
    Pfooterp,
    Pfootern,
    Allprojectsnav,
    LiveLink
  }
}
</script>

<style>

.banner {
  background-image: url("/header.JPG");
}

.banner__content {
  padding: 16px;
  max-width: 500px;
  margin: 0 auto;
  display: flex;
  align-items: center;
}

.banner__text {
  flex-grow: 1;
  line-height: 1.4;
  font-family: "Quicksand", sans-serif;
}

.banner__close {
  background: none;
  border: none;
  cursor: pointer;
}

.banner__text,
.banner__close > span {
  color: #ffffff;
}

/****************************************************/
.project-footer {
  bottom: 0%;
}

.cricbuzz-ux-image {
  filter: hue-rotate(45deg);
}
.cricbuzz-ux-image img {
  filter: saturate(1.4);
}

.vimeo {
  /* height: 100%; */
  width: 300px;
  margin: 20px;
}
</style>
