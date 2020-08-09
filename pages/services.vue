<template>
  <div class="container">
    <ServicesHeader />
    <LazyServicesSectors class="services-sectors" />
  </div>
</template>

<script>
import headerImage from '~/assets/images/twa-preview.jpg'

export default {
  head() {
    return {
      title: 'Services at TWA Africa',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { hid: 'description', name: 'description', property: 'description', content: 'At Transworld Aviation FZE, we offer a wide array of services for corporate, commercial and military aviation. We support all major fixed wing and rotary platforms, ground support equipment and maintenance organizations.' },
        { hid: 'sitename', name: 'og:site_name', property: 'og:site_name', content: 'Transworld Aviation' },
        { hid: 'url', name: 'og:url', property: 'og:url', content: 'https://www.twa-sa.com/services' },
        { hid: 'twitter-url', name: 'twitter:url', content: 'https://www.twa-sa.com/services' },
        { hid: 'twitter-title', name: 'twitter:title', content: 'Services at TWA Africa' },
        { hid: 'image', name: 'og:image', property: 'og:image', content: headerImage },
      ]
    }
  }
}
</script>

<style scoped lang="scss">
  .services-sectors{
    margin-top: -$section-spacing*2;
    @media screen and (max-width: $inner-wrapper) {
      margin-top: -$section-spacing;
    }
    @media screen and (max-width: $media-tablet) {
      margin-top: -60px;
    }
  }
</style>
