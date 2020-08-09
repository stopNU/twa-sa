<template>
  <div class="container">
    <HomeHeader />
    <LazyHomeQuote id="quote" />
    <LazyHomeSectors />
    <LazyHomeGlobalPresence />
    <LazyHomePartners />
  </div>
</template>

<script>
import headerImage from '~/assets/images/twa-preview.jpg'

export default {
  head() {
    return {
      title: 'Transworld Aviation | Spare Parts & Consumables South Africa',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { hid: 'description', name: 'description', content: 'Transworld Aviation SA is a full service spare parts and consumables company located in Johannesburg, South Africa. We are committed to providing reliable service to our clients as well as helping Africa fulfil its enormous economic potential through quality and responsibility in everything we do.' },
        { hid: 'sitename', name: 'og:site_name', property: 'og:site_name', content: 'Transworld Aviation' },
        { hid: 'url', name: 'og:url', property: 'og:url', content: 'https://www.twa-sa.com' },
        { hid: 'twitter-url', name: 'twitter:url', content: 'https://www.twa-sa.com' },
        { hid: 'twitter-title', name: 'twitter:title', content: 'Transworld Aviation | Spare Parts & Consumables South Africa' },
        { hid: 'image', name: 'og:image', property: 'og:image', content: headerImage },
      ]
    }
  }
}
</script>

<style scoped lang="scss">

</style>
