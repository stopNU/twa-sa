<template>
  <div class="container">
    <AboutHeader />
    <LazyAboutContent />
  </div>
</template>

<script>
import headerImage from '~/assets/images/twa-preview.jpg'

export default {
  head() {
    return {
      title: 'About TWA Africa',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { hid: 'description', name: 'description', property: 'description', content: 'Transworld Aviation to be the leading distributor and stockiest in the aviation sector through strategic positioning in the supply chain.' },
        { hid: 'sitename', name: 'og:site_name', property: 'og:site_name', content: 'Transworld Aviation' },
        { hid: 'url', name: 'og:url', property: 'og:url', content: 'https://www.twa-sa.com/about' },
        { hid: 'twitter-url', name: 'twitter:url', content: 'https://www.twa-sa.com/about' },
        { hid: 'twitter-title', name: 'twitter:title', content: 'About TWA Africa' },
        { hid: 'image', name: 'og:image', property: 'og:image', content: headerImage },
      ]
    }
  }
}
</script>

<style scoped lang="scss">

</style>
