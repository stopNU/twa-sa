<template>
    <div class="menu-wrapper">
        <div class="inner-wrapper">
              <div class="logo">
                <nuxt-link :to="{ path: '/' }"><img src="~/assets/logos/transworld-logo-dark.png"></nuxt-link>
              </div>
              <el-menu
                  class="el-menu"
                  mode="horizontal"
                  text-color="#363636"
                  background-color="#FFFFFF"
                  >
                  <template>
                    <el-menu-item index="/home" :class="{'is-active': onRoutes === '/'}">
                      <nuxt-link :to="{ path: '/' }">Home</nuxt-link>
                    </el-menu-item>
                    <el-menu-item index="/about" :class="{'is-active': onRoutes === '/about'}">
                      <nuxt-link :to="{ path: '/about' }">About</nuxt-link>
                    </el-menu-item>
                    <el-menu-item index="/services" :class="{'is-active': onRoutes === '/services'}">
                      <nuxt-link :to="{ path: '/services' }">Services</nuxt-link>
                    </el-menu-item>
                    <el-menu-item index="/media" :class="{'is-active': onRoutes === '/media'}">
                      <nuxt-link :to="{ path: '/media' }">Media</nuxt-link>
                    </el-menu-item>
                    <el-menu-item index="/contact" :class="{'is-active': onRoutes === '/contact'}">
                      <nuxt-link :to="{ path: '/contact' }">Contact</nuxt-link>
                    </el-menu-item>
                  </template>
              </el-menu>
        </div>
    </div>
</template>

<script>
  export default {
    computed: {
      onRoutes() {
        return this.$route.path;
      },
    },
  }
</script>

<style scoped lang="scss">
    .menu-wrapper{
        background-color:#FFFFFF;
        position: fixed;
        width: 100%;
        z-index: 10;
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
                  width: 70px;
                }
              }
            }
        }
    }
    .el-menu{
      @media screen and (max-width: $media-mobile) {
        display: none;
      }
    }
    .el-menu.el-menu--horizontal{
      border: none;
    }
    .el-menu--horizontal>.el-menu-item,.el-menu--horizontal>.el-submenu{
      height: $menu-height;
      line-height: $menu-height;
      font-size: 0.9375rem; //15px
      font-family: $font-headlines;
      font-weight: 400;
      padding: 0px 15px;
      margin: 0;
      text-transform: uppercase;
      a{
        text-decoration: none;
        display: block;
        height: $menu-height;
        &:hover{
          color: $color-brand;
        }
      }
    }
    .el-menu--horizontal .el-menu-item:not(.is-disabled):hover{
        background-color: transparent !important;
    }   
    .el-menu--horizontal .el-menu-item:not(.is-disabled):focus{
      background-color: transparent !important;
    }
    .el-menu-item * {
      vertical-align: unset;
    }
</style>