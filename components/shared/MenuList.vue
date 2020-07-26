<template>
    <el-menu
        class="el-menu"
        :mode="mode"
        text-color="#363636"
        background-color="#FFFFFF"
        >
        <template>
        <el-menu-item index="/home" :class="{'is-active': onRoutes === '/'}" @click="handleClicked">
            <nuxt-link :to="{ path: '/' }">Home</nuxt-link>
        </el-menu-item>
        <el-menu-item index="/about" :class="{'is-active': onRoutes === '/about'}" @click="handleClicked">
            <nuxt-link :to="{ path: '/about' }">About</nuxt-link>
        </el-menu-item>
        <el-menu-item index="/services" :class="{'is-active': onRoutes === '/services'}" @click="handleClicked">
            <nuxt-link :to="{ path: '/services' }">Services</nuxt-link>
        </el-menu-item>
        <el-menu-item index="/media" :class="{'is-active': onRoutes === '/media'}" @click="handleClicked">
            <nuxt-link :to="{ path: '/media' }">Media</nuxt-link>
        </el-menu-item>
        <el-menu-item index="/contact" :class="{'is-active': onRoutes === '/contact'}" @click="handleClicked">
            <nuxt-link :to="{ path: '/contact' }">Contact</nuxt-link>
        </el-menu-item>
        </template>
    </el-menu>
</template>

<script>
  export default {
    props:{
        mode: String
    },
    computed: {
      onRoutes() {
        return this.$route.path;
      },
    },
    methods: {
      handleClicked() {
          console.log('cleck chil')
        this.$emit('menuItemClicked');
      },
    }
  }
</script>

<style scoped lang="scss">
.el-menu{
    @media screen and (max-width: $media-mobile) {
    display: none;
    }
}
.el-menu.el-menu--horizontal{
    border: none;
}
.el-menu>.el-menu-item,.el-menu--horizontal>.el-submenu{
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
    width: 100%;
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

.el-menu.show-mobile{
    .el-menu-item{
        a{
            display: block;
            width: 100%;
            color: $color-text;
        }
    }
}
</style>