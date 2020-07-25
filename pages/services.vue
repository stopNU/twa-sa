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
  }
</style>
