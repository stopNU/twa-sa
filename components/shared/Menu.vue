<template>
    <div class="menu-wrapper">
        <div class="inner-wrapper">
              <div class="logo">
                <nuxt-link :to="{ path: '/' }"><img src="~/assets/logos/transworld-logo-dark.png"></nuxt-link>
              </div>
              <MenuList mode="horizontal" class="hide-mobile" />
              <LazyMenuMobile class="show-mobile" />
        </div>
    </div>
</template>

<script>
  export default {}
</script>

<style scoped lang="scss">
    .menu-wrapper{
        background-color:#FFFFFF;
        position: fixed;
        width: 100%;
        z-index: 10;
        padding: 0 $side-padding;
        @media screen and (max-width: $media-mobile) {
          padding: $elements-spacing/4 $side-padding/2;
        }
        &.inner-wrapper{
            height: $menu-height;
            @media screen and (max-width: $media-mobile) {
              height: $menu-height-mobile;
            }
        }
        .inner-wrapper{
            display: flex;
            align-items: center;
            .logo{
              flex: 1;
              @media screen and (max-width: $media-mobile) {
                img{
                  width: 160px;
                }
              }
            }
        }
    }
    
</style>