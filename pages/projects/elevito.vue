<template>
  <div>
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
      pWebsite="SOOM"
      pCategory=""
      pHeading="SOOM for outsourcing Companies"
      pHeadingcolor="color:#FD3E5B;"
      pSubheading="Collaborative Accounting."

    />

    <!-- <ScrollDown /> -->

    <!-- hero image -->
    <div class="p-hero_image">
      <div class="reveal-holder" data-aos="fade-up">
        <div
          class="reveal-block right theme_elevito"
          data-aos="reveal-right"
        ></div>
        <picture>
          <source
            media="(max-width: 600px)"
            srcset="/assets/projects/elevito/elevito-hero-mobile.jpg"
          />
          <img
            src="/assets/projects/elevito/elevito-hero.jpg"
            alt="cool background"
          />
        </picture>
      </div>
    </div>


    <!-- Preface -->
    <pcase
      heading="Preface"
      para=" An integrated and modular production solution, SOOM Accounting  is the solution dedicated to your accounting and social production activities. The Generation Experts API allows you to connect partner solutions.


    "
      theme="theme_elevito"
    />

    <!-- Backstory -->



    <!--       When we work on something that we have to decide on our own about every aspects of a product. It gets more challenging than ever.
      Then we are in constant dilemma of this or that. Iteration seems to never stop. Its get frustrating.
      Though we are not restricted by anything, its also fun and our mind happen to work round the clock to make decisions.

        <br> <br>Making something stand out and gives a feel of creativity and wowness.
        was cool for the moment but that can not be used to used on web.
    <br>3. No copywrite, no information architecture."-->




    <!-- <img
        class="p-image-100"
        src="/assets/projects/elevito/elevito-mockup-web1.jpg"
        alt="Elevito web mockup"
    />-->
    <!-- Ideation and Reasearch -->

    <pcase
      class="elevito-research-sec"
      heading="What's new ?"
      para="Performance + Cloud + Collaboration"
      theme="theme_elevito"
    />
    <!-- <div class="p-image-100-container">
      <picture>
        <source media="(max-width: 600px)" srcset="/assets/projects/elevito/elevito-ideation-1.jpg" />
        <img src="/assets/projects/elevito/elevito-ideation-1.jpg" alt="elevito ideation" />
        <p class="ps">I know my writing is all messed up.</p>
      </picture>
    </div>-->
    <no-ssr>
      <agile>


      </agile>
    </no-ssr>

    <!-- <img
      class="p-image-100"
      src="/assets/projects/elevito/elevito-ideation.jpg"
      alt="Elevito web mockup"
    />-->

    <!-- Art direction Design-->

     <div class="keyfocus">
      <div class="content">
        <div class="contain">
          <h2 class="p-para black50">Specification</h2>

          <div class="pm black70">
            <div class="kf-layout">
              <span>1/-Manage all accounting and social production with simple tools. Become more responsive and bring value to your customers.</span>
              <span>2/-Exchange and store your data securely, and create links with your customers by communicating via online services and social networks.</span>
              <span>3/-Simplify the daily life of the accounting firm. Your clients can access their accounting file online at any time.</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Go beyond -->






    <div class="p-image-100-duo">
      <div class="reveal-holder" data-aos="fade-up" data-aos-once="true">
        <div
          class="reveal-block right"
          data-aos="reveal-right"
          data-aos-once="true"
        ></div>

      </div>
    </div>



    <!-- elevito web  -->



    <div class="live-link_container" style="background-color:#FFFFFF;">
      <LiveLink style="background-color:#FFFFFF;"
                link=" http://localhost:8000/"
                text="Start from here"
      />
    </div>


    <!-- End Line  -->

    <div class="section-divider">
      <hr class="section-divider" />
    </div>


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
import ScrollDown from '~/components/projects/scroll-down'
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
    ScrollDown,
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
