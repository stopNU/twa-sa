<template>
  <div class="container">
    <ServicesHeader />
    <LazyServicesSectors class="services-sectors" />
  </div>
</template>

<script>
export default {

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
