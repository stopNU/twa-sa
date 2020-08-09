<template>
    <div class="bg-wrapper fullscreen-bg">
        <div class="outer-wrapper">
            <div class="content">
                <div class="border"></div>
                <h3 class="white">Transworld Aviation is the leading distributor and stockiest in the aviation sector.</h3>
            </div>
            <i class="el-icon-arrow-down icon white" v-scroll-to="'#quote'"></i>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped lang="scss">
    .fullscreen-bg{
        background-image: url('~@/assets/images/home/transworld-hero.jpg');
        background-image: 
            image-set(
                url('~@/assets/images/home/transworld-hero.jpg') 1x,
                url('~@/assets/images/home/transworld-hero@2x.jpg') 2x,
            );
        @media screen and (max-width: $media-mobile) {
            background-image: url('~@/assets/images/home/mobile-transworld-hero.jpg');
            background-image: 
            image-set(
                url('~@/assets/images/home/mobile-transworld-hero.jpg') 1x,
                url('~@/assets/images/home/mobile-transworld-hero@2x.jpg') 2x,
            );
        }
    }
    .icon{
        position: absolute;
        bottom: 20px;
        font-size: 28px;
        margin: 0 auto;
        left: 0;
        right: 0;
        text-align: center;
        cursor: pointer;
    }
    .outer-wrapper{
        height: 100%;
        .content{
            padding: $elements-spacing $elements-spacing $elements-spacing 230px;
            //background-color: rgba(51, 116, 175, 0.24);
            max-width: 950px;
            position: relative;
            top: 240px;
            display: flex;
            @media screen and (max-width: $media-mobile) {
                padding: $elements-spacing/2;
                max-width: 345px;
                top: 180px;
            }
            .border{
                width: 4px;
                margin: 3px $elements-spacing/2 7px 0;
                height: inherit;
                background-color: #99B9D7;
            }
            h3{
                max-width: 600px;
            }
        }
    }
</style>
