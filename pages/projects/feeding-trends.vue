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
      pDate=" 2022 "
      pWebsite="E-invoicing"
      pCategory=""
      pHeading="E-invoicing."
      pHeadingcolor="color:#1D98B6;"
      pSubheading="Manage your invoicing online with SOOM invoicing software "
    />

    <!-- hero image -->
    <div class="p-ft-hero_image">
      <div class="reveal-holder" data-aos="fade-up">
        <div class="reveal-block right theme_ft" data-aos="reveal-right"></div>

        <img
          src="/assets/projects/ft/ft-hero-mockup-3.png"
          alt="floating mockup, web mockup, pad, mobile, mockup"
        />
        <!-- <img class="fe-hero2" src="/assets/projects/fe/fe1.png" alt> -->

        <!-- <img src="/assets/projects/fe/fe1.png" alt> -->
      </div>
    </div>


    <!-- Preface -->
    <pcase
      heading="Preface"
      para=" Invoicing software saves you time when issuing invoices, initiating payments and managing cash. By automating these tasks, you have more time to focus on growing your business.
"
      theme="theme_ft"
    />
    <!-- Problem -->

    <!-- team pic -->


    <!-- Problems -->
    <pcase
      heading="Problems to be Solved and Considerations"
      para="
      1.Create custom invoices <br>
      2.Your suppliers will thank you <br>
      3.Run your business with confidence <br>
      4.Improve your work-life balance <br>
     "
      theme="theme_ft"
    />
    <!-- Design -->

    <div class="ft-responsive-gif">
      <div class="contain">
        <div class="reveal-holder" data-aos="fade-up" data-aos-once="true">
          <div
            class="reveal-block right"
            data-aos="reveal-right"
            data-aos-once="true"
          ></div>

          <img
            src="/assets/projects/ft/ft-responsive-p.gif"
            alt="responsive layout, responsive web, prototype"
          />
        </div>
      </div>
    </div>
    <!-- Desighn -->


    <div class="p-image-100-duo">
      <div class="reveal-holder" data-aos="fade-up" data-aos-once="true">
        <div
          class="reveal-block right"
          data-aos="reveal-right"
          data-aos-once="true"
        ></div>

      </div>
    </div>

    <!-- Problems -->


    <div class="p-image-100-duo">
      <div class="reveal-holder" data-aos="fade-up" data-aos-once="true">
        <div
          class="reveal-block right"
          data-aos="reveal-right"
          data-aos-once="true"
        ></div>

      </div>
    </div>

    <div class="p-image-100-duo">
      <div class="reveal-holder" data-aos="fade-up" data-aos-once="true">
        <div
          class="reveal-block right"
          data-aos="reveal-right"
          data-aos-once="true"
        ></div>

      </div>
    </div>


    <div class="p-image-100-duo">
      <div class="reveal-holder" data-aos="fade-up" data-aos-once="true">
        <div
          class="reveal-block right"
          data-aos="reveal-right"
          data-aos-once="true"
        ></div>

      </div>
    </div>

    <div class="p-image-100-duo">
      <div class="reveal-holder" data-aos="fade-up" data-aos-once="true">
        <div
          class="reveal-block right"
          data-aos="reveal-right"
          data-aos-once="true"
        ></div>

      </div>
    </div>



    <!-- Problems -->


    <!-- cup -->

    <div class="p-image-100-duo">
      <div class="reveal-holder" data-aos="fade-up" data-aos-once="true">
        <div
          class="reveal-block right"
          data-aos="reveal-right"
          data-aos-once="true"
        ></div>

      </div>
    </div>

    <div class="p-image-100-duo">
      <div class="reveal-holder" data-aos="fade-up" data-aos-once="true">
        <div
          class="reveal-block right"
          data-aos="reveal-right"
          data-aos-once="true"
        ></div>

      </div>
    </div>

    <div class="p-image-100-duo">
      <div class="reveal-holder" data-aos="fade-up" data-aos-once="true">
        <div
          class="reveal-block right"
          data-aos="reveal-right"
          data-aos-once="true"
        ></div>

      </div>
    </div>

    <div class="p-image-100-duo">
      <div class="reveal-holder" data-aos="fade-up" data-aos-once="true">
        <div
          class="reveal-block right"
          data-aos="reveal-right"
          data-aos-once="true"
        ></div>

      </div>
    </div>

    <liveLink
      link="http://localhost:8080/"
      text="You can Try it from here"
    />

    <!-- key Focus Area -->




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
.project-footer {
  bottom: 0%;
}
</style>
