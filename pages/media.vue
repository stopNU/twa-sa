<template>
  <div class="container">
    <MediaHeader />
    <LazyMediaBrochure />
  </div>
</template>

<script>
import headerImage from '~/assets/images/twa-preview.jpg'

export default {
  head() {
    return {
      title: 'Coorporate Video | Transworld Aviation Africa',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { hid: 'description', name: 'description', property: 'description', content: 'We at Transworld Aviation provide customised technical solutions, parts distribution, MRO services, supply chain management and consultancy services for our military and commercial customers, minimising their investments in assets and maximising their operational readiness. Together we work to exceed customers’ expectations.' },
        { hid: 'sitename', name: 'og:site_name', property: 'og:site_name', content: 'Transworld Aviation' },
        { hid: 'url', name: 'og:url', property: 'og:url', content: 'https://www.twa-sa.com/media' },
        { hid: 'twitter-url', name: 'twitter:url', content: 'https://www.twa-sa.com/media' },
        { hid: 'twitter-title', name: 'twitter:title', content: 'Coorporate Video | Transworld Aviation Africa' },
        { hid: 'image', name: 'og:image', property: 'og:image', content: headerImage },
      ]
    }
  }
}
</script>

<style scoped lang="scss">

</style>
