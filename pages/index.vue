<template>

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
    <div class='a-hero_container'>

      <!----------------------------------****----------------------------------------------->

      <div data-aos='fade-up' data-aos-duration='1000' data-aos-delay='800'>
        <img src='assets/svg/circle.svg' alt='circle'/>
      </div>
      <div data-aos='fade-up' data-aos-duration='1000' data-aos-delay='1000'>
        <img class='hero-svg' src='assets/svg/s.svg' alt='w' v-rellax='{ speed: -2, center: 0.5 }'/>
      </div>

      <div class='nametag-container contain'>
        <div class='h-name' data-aos='fade-up' data-aos-duration='900'>
          <nuxt-link to='/' style='text-decoration: none;'>
            <span class='underline-magical'>Mohamed Amine Melliti</span>
          </nuxt-link>
        </div>
        <div
          class='h-j-title'
          data-aos='fade-up'
          data-aos-duration='900'
          data-aos-delay='200'
        >Accounting App
        </div>
      </div>


      <div
        class='contain h-hero-title'
        data-aos='fade-up'
        data-aos-duration='900'
        data-aos-delay='400'
      >


        <h1>
          <span>Accounting software to do your to-do</span>
          <br/>
          <span class='outlined' style="background-image: url('/header.jpg') ">Soom.io</span>
          <br/>
          <a href='horizon-data.com' target='_blank' rel='noopener' title='horizon-data.com'>
            <span class='underline-magical-hero'>Horizon-Data</span>
          </a>
        </h1>
      </div>
      <div class='contain'>
        <p data-aos='fade-up' data-aos-duration='900' data-aos-delay='600'>
          Try accounting software for everyday business
          <span>
            <nuxt-link to='/projects'>
                            <span class='underline-magical'>Claim expenses.</span>
            </nuxt-link>,
            <a
              href='https://github.com/SAURABHRAI110'
              target='_blank'
              rel='noopener'
              title='Github(new tab)'
            >
              <span class='underline-magical'>Pay bills</span>
            </a> and
            <nuxt-link to='/blog'>
                            <span class='underline-magical'>Reporting</span>
            </nuxt-link>
          </span>
        </p>
      </div>
    </div>

    <!-- home Grid pics section 2 -->

    <section class='h-sec2-container'>
      <div class='h-sec2-grid'>
        <div
          class='bottom-fit'
          data-aos='fade-up'
          data-aos-duration='600'
          data-aos-delay='1000'
          data-aos-anchor-placement='top-bottom'
        >
          <img id='zoom-default' src='assets/img/home/1.jpg?webp' type='image/webp'/>
        </div>
        <div
          class='bottom-fit'
          data-aos='fade-up'
          data-aos-duration='600'
          data-aos-delay='1200'
          data-aos-anchor-placement='top-bottom'
        >
          <img id='zoom-default' src='assets/img/home/2.gif' type='image/webp'/>
        </div>
        <div
          class='bottom-fit'
          data-aos='fade-up'
          data-aos-duratio='600'
          data-aos-delay='1300'
          data-aos-anchor-placement='top-bottom'
          data-aos-offset='-200'
        >
          <img id='zoom-default' src='assets/img/home/3.jpg?webp' type='image/webp'/>
        </div>
        <div
          class='bottom-fit'
          data-aos='fade-up'
          data-aos-duration='600'
          data-aos-delay='1400'
          data-aos-anchor-placement='top-bottom'
        >
          <img id='zoom-default' src='assets/img/home/4.gif' type='image/webp'/>
        </div>
        <div
          class='middle-fit'
          data-aos='zoom-out-up'
          data-aos-duration='600'
          data-aos-anchor-placement='top-bottom'
        >
          <img id='zoom-default' src='assets/img/home/5.jpg?webp' type='image/webp'/>
        </div>
        <div
          class='middle-fit'
          data-aos='zoom-out-up'
          data-aos-duration='600'
          data-aos-delay='100'
          data-aos-anchor-placement='top-bottom'
        >
          <img id='zoom-default' src='assets/img/home/6.jpg?webp' type='image/webp'/>
        </div>
        <div
          class='middle-fit'
          data-aos='zoom-out-up'
          data-aos-duration='600'
          data-aos-delay='200'
          data-aos-anchor-placement='top-bottom'
        >
          <img id='zoom-default' src='assets/img/home/7.jpg?webp' type='image/webp'/>
        </div>
        <div
          class='middle-fit'
          data-aos='zoom-out-up'
          data-aos-duration='600'
          data-aos-delay='300'
          data-aos-anchor-placement='top-bottom'
        >
          <img id='zoom-default' src='assets/img/home/8.jpg?webp' type='image/webp'/>
        </div>
        <div
          class='up-fit'
          data-aos='zoom-out-up'
          data-aos-duration='600'
          data-aos-anchor-placement='top-bottom'
        >
          <img id='zoom-default' src='assets/img/home/9.jpg?webp' type='image/webp'/>
        </div>
        <div
          class='up-fit'
          data-aos='zoom-out-up'
          data-aos-duration='600'
          data-aos-delay='100'
          data-aos-anchor-placement='top-bottom'
        >
          <img id='zoom-default' src='assets/img/home/10.jpg?webp' type='image/webp'/>
        </div>
        <div
          class='up-fit'
          data-aos='zoom-out-up'
          data-aos-duration='600'
          data-aos-delay='200'
          data-aos-anchor-placement='top-bottom'
        >
          <img id='zoom-default' src='assets/img/home/11.jpg?webp' type='image/webp'/>
        </div>
        <div
          class='up-fit'
          data-aos='zoom-out-up'
          data-aos-duration='600'
          data-aos-delay='300'
          data-aos-anchor-placement='top-bottom'
        >
          <img id='zoom-default' src='assets/img/home/12b.jpg?webp' type='image/webp'/>
        </div>
      </div>
    </section>

    <!-- get to know me -->

    <div class='more-about-me'>
      <div class='center-h-v'>
        <nuxt-link to='/aboaut'>
          <discovermore class='hover-target' button-text='Get to know Us'/>
        </nuxt-link>
      </div>
    </div>


    <!-- Work Heading -->
    <div class='h-work_heading contain'>
      <h1>
        For accountants & bookkeepers
        <br/>
        <span class='outlined'>Join</span>
        Us
      </h1>
      <p>
        You can start from here
        <nuxt-link to='/projects' class='underline-magical'>Either you're Business owner or Outsourcing Company
        </nuxt-link>
      </p>
    </div>

    <!-- Work Thumbnails -->

    <div class='showcase-container-home'>
      <div class='showcase-container-grid'>
        <div class='p-thumbnail-ad'>
          <nuxt-link to='/projects/cricbuzz-app-redesign'>
            <thumbnail
              thumbnailName='Business Owner'
              thumbnailDescription='Manage your business throw CRM'
              thumbnail='/business.jpg'
              data-aos='zoom-out-up'
              data-aos-duration='400'
              data-aos-delay='800'
              data-aos-once='true'
              data-aos-anchor-placement='top-bottom'
            />
          </nuxt-link>
        </div>

        <div class='p-thumbnail-ad'>
          <nuxt-link to='/projects/elevito'>
            <thumbnail
              thumbnailName='Outsourcing Company'
              thumbnailDescription='Consulting , Accounting , Coaching'
              thumbnail='/cc.jpg'
              data-aos='zoom-out-up'
              data-aos-duration='400'
              data-aos-delay='1000'
              data-aos-once='true'
              data-aos-anchor-placement='top-bottom'
            />
          </nuxt-link>
        </div>

        <div class='p-thumbnail-ad'>
          <nuxt-link to='/projects/feeding-trends'>
            <thumbnail
              thumbnailName='Manage Your Invoices'
              thumbnailDescription='Paperless Invoicing'
              thumbnail='/invoice.jpg'
              data-aos='zoom-out-up'
              data-aos-duration='400'
              data-aos-delay='100'
              data-aos-once='true'
              data-aos-anchor-placement='top-bottom'
            />
          </nuxt-link>
        </div>
      </div>
    </div>
    <!-- <div class="applause-button_container">
      <applause-button style="width: 58px; height: 58px;" color="red" multiclap="true"/>
    </div>-->

    <!-- blog Heading -->

    <div class='h-blog_heading contain'>
      <h1 class='no-white-space'>
        Everything in one place
        <br/>
        <span class='outlined'>Solve</span>
        powerful online
        <br/>accounting software solution
      </h1>
      <p>Anywhere, Any time</p>
    </div>


    <!-- <ArticleList :isPaginated="false" :postsPerPage="4" /> -->

  </div>
</template>

<script>
import Thumbnail from '~/components/thumbnail'
import Parallax from 'vue-parallaxy'
import Discovermore from '~/components/discovermore'
import Homepeople from '~/components/homepeople'
import BlogSection from '~/components/Sections/BlogSection'
import blogsEn from '~/contents/en/blogsEn.js'
import VideoShowcase from '~/components/Modal'
import playbutton from '~/components/playbutton'

export default {
  components: {
    Thumbnail,
    Discovermore,
    Homepeople,
    BlogSection,
    Parallax,
    VideoShowcase,
    playbutton
  },

  async asyncData({app}) {
    const blogs = app.i18n.locale === 'en' ? blogsEn : blogsEs

    async function asyncImport(blogName) {
      const wholeMD = await import(
        `~/contents/${app.i18n.locale}/blog/${blogName}.md`
        )
      return wholeMD.attributes
    }

    return Promise.all(blogs.map(blog => asyncImport(blog))).then(res => {
      return {
        blogs: res
      }
    })
  },
  mounted() {
    let themejs = document.createElement('script')
    themejs.setAttribute('src', "https://rawgit.com/kswedberg/jquery-smooth-scroll/master/jquery.smooth-scroll.js")
    document.head.appendChild(themejs)
  },

  data() {
    return {
      modalOpen: false
    }
  },
  methods: {
    openModal() {
      this.modalOpen = !this.modalOpen
    }
  }
  // data() {
  //   return {
  //     card: [
  //       {
  //         thumbnailName: 'Filming Eye',
  //         thumbnailDescription: 'Web, Identity',
  //         thumbnailImage: require('~/assets/img/thumbnail/showcase9.jpg')
  //       },
  //       {
  //         thumbnailName: 'Art',
  //         thumbnailDescription: 'Web, Identity',
  //         thumbnailImage: require('~/assets/img/thumbnail/showcase7.jpg')
  //       },
  //       {
  //         thumbnailName: 'Art',
  //         thumbnailDescription: 'Web, Identity',
  //         thumbnailImage: require('~/assets/img/thumbnail/showcase8.jpg')
  //       },
  //       {
  //         thumbnailName: 'Art',
  //         thumbnailDescription: 'Web, Identity',
  //         thumbnailImage: require('~/assets/img/thumbnail/showcase9.jpg')
  //       },
  //       {
  //         thumbnailName: 'Art',
  //         thumbnailDescription: 'Web, Identity',
  //         thumbnailImage: require('~/assets/img/thumbnail/showcase1.jpg')
  //       },
  //       {
  //         thumbnailName: 'Art',
  //         thumbnailDescription: 'Web, Identity',
  //         thumbnailImage: require('~/assets/img/thumbnail/showcase10.jpg')
  //       }
  //     ]
  //   }
  // }
}
</script>

<style scoped>

vue-particles {
  position : absolute;
  width:100%;
  height:100%;
  z-index:-1;
}

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

/******************************************************/
.h-hero-title {
  white-space: wrap;
  margin-top: 12%;
}

.nametag-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  font-family: circular-book;
  font-size: 16px;
  grid-gap: 10px;
  white-space: nowrap;
  padding-top: 30px;
  overflow: hidden;
  padding-bottom: 2px;
}

.h-sec2-container {
  display: flex;
  width: 70%;
  align-items: center;
  align-content: center;
  margin-left: calc(16% - 45px);
  position: relative;
  margin-top: 100px;
}

.h-sec2-grid {
  display: grid;
  grid-gap: 15px;
  grid-template-columns: repeat(auto-fit, minmax(235px, 1fr));
  grid-auto-rows: auto;
  grid-auto-flow: dense;
  height: auto;
  width: 100%;
}

.h-sec2-grid > .bottom-fit {
  align-items: flex-end;
  font-size: 2em;
  color: #ffeead;
  display: flex;
}

.h-sec2-grid > .middle-fit {
  align-items: center;
  font-size: 2em;
  color: #ffeead;
  display: flex;
}

.h-sec2-grid > .up-fit {
  align-items: baseline;
  font-size: 2em;
  color: #ffeead;
  display: flex;
}

.h-sec2-grid > div > img {
  width: 100%;
  height: auto;
  object-fit: cover;
}

@media screen and (max-width: 1200px) {
  .h-hero-title {
    margin-top: 15%;
  }

  .h-sec2-container {
    width: 70%;
  }

  .h-sec2-grid {
    grid-gap: 15px;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  }
}

@media screen and (max-width: 999px) {
  .h-sec2-container {
    width: 77%;
  }

  .h-sec2-grid {
    grid-gap: 12px;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  }
}

@media screen and (max-width: 800px) {
  .h-sec2-container {
    width: 83%;
    margin-left: 10%;
  }

  .h-sec2-grid {
    grid-gap: 12px;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  }
}

@media screen and (max-width: 600px) {
  .h-sec2-container {
    width: 83%;
  }

  .h-sec2-grid {
    grid-gap: 12px;
    grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
  }
}

@media screen and (max-width: 500px) {
  .h-hero-title {
    margin-top: 100px;
  }

  .h-sec2-container {
    width: 88%;
    margin-left: 7%;
  }

  .h-sec2-grid {
    grid-gap: 12px;
    grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
  }
}

@media screen and (max-width: 350px) {
  .h-sec2-container {
    width: 86%;
  }

  .h-sec2-grid {
    grid-gap: 12px;
    grid-template-columns: repeat(auto-fit, minmax(110px, 1fr));
  }
}

.h-work_heading {
  padding: 120px 0px 40px 0px;
  /* white-space: nowrap; */
}

.h-work_heading p {
  padding: 0px 32% 0px 0px;
  /* white-space: nowrap; */
}

/* showreel */

.video-showreel-modal {
  position: fixed;
  z-index: 1000;
}

.h-showreel_container {
  width: 100%;
  height: 90vh;
}

.h-showreel_container > img {
  width: 100%;
  object-fit: cover;
}

.h-showreel {
  position: relative;
  width: 100%;
  height: 90vh;
  z-index: 2;
  overflow: hidden;
}

.showreel-overlay {
  width: 100%;
  height: 100%;
  background-color: black;
  opacity: 0.5;
  position: absolute;
  top: 0%;
}

.showreel-button {
  position: relative;
  left: 42%;
}

.showreel-heading {
  position: relative;
  color: white;
  font-size: 90px;
  text-align: center;
  margin-bottom: 0px;
  margin-top: 0px;
  letter-spacing: 4px;
}

.pulse {
  -webkit-animation-name: pulse;
  animation-name: pulse;
  animation-iteration-count: infinite;
  animation-duration: 1.5s;
}

.showreel-sub-heading {
  font-size: 26px;
  position: relative;
  color: white;
  text-align: center;
}

.showreel-bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
}

@media screen and (max-width: 999px) {
  .showreel-heading {
    font-size: 70px;
    line-height: 70px;
  }
}

@media screen and (max-width: 800px) {
  .showreel-heading {
    font-size: 60px;
    line-height: 60px;
  }

  .showreel-button {
    left: 39%;
  }
}

@media screen and (max-width: 500px) {
  .showreel-heading {
    font-size: 52px;
    line-height: 52px;
  }

  .showreel-button {
    left: 35%;
  }
}

/* applause-button_container */
/* https://www.cssscript.com/medium-claps-applause-button/ */

.applause-button_container {
  width: 100%;
  height: 30vh;
  position: relative;
}

/* blog */
.h-blog_heading {
  padding: 40px 0px 40px 0px;
}
</style>
