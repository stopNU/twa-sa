<template>
<div class="menu-mobile-wrapper">
    <div class="menu-mobile">
        <p class="" @click="drawer = true"><img class="menu-icon" src="~/assets/icons/menu.svg"></p>
    </div>
    <el-drawer
        size="100%"
        :modal-append-to-body="false"
        :append-to-body="true"
        class="mobile-menu-dropdown"
        :visible.sync="drawer"
        :direction="direction"
        :before-close="handleClose">
        <div class="logo">
            <nuxt-link :to="{ path: '/' }" v-on:click.native="closeMenu(false)"><img src="~/assets/logos/transworld-logo-dark.png"></nuxt-link>
        </div>

        <div class="menu-list-wrapper">
            <MenuList mode="vertical" class="show-mobile" @menuItemClicked="handleMenuItemClicked" />
        </div>
    </el-drawer>
</div>
    
</template>

<script>
  export default {
    props:{
        menu: Object
    },
    data() {
      return {
        drawer: false,
        direction: 'ttb',
      };
    },
    computed: {
      onRoutes() {
        return this.$route.path;
      },
    },
    methods: {
      handleClose(done) {
        done();
      },
      closeMenu(hasSubmenu){
          if(!hasSubmenu){
              this.drawer = false;
          }
      },
      handleMenuItemClicked(){
          this.drawer = false
      }
    }
  }
</script>

<style scoped lang="scss">
    .menu-list{
        .menu-list-item{
            margin-bottom: $elements-spacing/2;
            .main-menu{
                display: grid;
                grid-template-columns: 1fr 20px;
                align-items: center;
                cursor: pointer;
            }
            .submenu{
                ul{
                    margin-top: $elements-spacing/2;
                    li{
                        list-style: none;
                        &:not(:last-child){
                            margin-bottom: 15px;
                        }
                    }
                    a{
                        font-weight: 400;
                    }
                }
            }
            .icon{
                color: $color-white;
            }
            a, h5{
                font-size: 1rem;
                text-transform: uppercase;
                font-weight: 700;
                color: $color-white;
                text-decoration: none;
                border: 0px;
            }
        }
    }
    .mobile-menu-dropdown{
        background-color: $color-headlines;
    }
    .logo{
        position: absolute;
        top: 20px;
        left: $side-padding-mobile;
        img{
            max-width: 100px;
        }
    }
    .menu-mobile{
        .menu-icon{
            vertical-align: middle;
        }
        &:hover{
            cursor: pointer;
        }
    }
</style>