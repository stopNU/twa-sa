<template>
  <div class="container">
    <HomeHeader />
    <LazyHomeQuote />
    <LazyHomeSectors />
    <LazyHomeGlobalPresence />
    <LazyHomePartners />
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: 'Transworld Aviation | Spare Parts & Consumables South Africa',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { hid: 'description', name: 'description', content: 'Transworld Aviation SA is a full service spare parts and consumables company located in Johannesburg, South Africa. We are committed to providing reliable service to our clients as well as helping Africa fulfil its enormous economic potential through quality and responsibility in everything we do.' }
      ]
    }
  }
}
</script>

<style scoped lang="scss">

</style>
