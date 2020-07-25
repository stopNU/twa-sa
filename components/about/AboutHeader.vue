<template>
    <div class="section-wrapper with-padding">
        <div class="section-content">
            <h6 class="title">At Transworld Aviation we are committed to quality.</h6>
            <div class="image-wrapper with-arrow">
                <div class="arrow"><i class="el-icon-caret-bottom"></i></div>
                <img class="" alt="Commercial airplane in the air"
                    srcset="
                        ~/assets/images/about/transworld-plane-clouds.jpg 2x,
                        ~/assets/images/about/transworld-plane-clouds.jpg 1x"
                    src="~/assets/images/about/transworld-plane-clouds.jpg">
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped lang="scss">
    .section-wrapper{
        padding-bottom: 0;
        .section-content{
            grid-column: 2 / span 2;
        }
    }
    .title{
        font-size: 2.25rem;
        margin: $section-spacing 0 $elements-spacing/2;
    }
    .image-wrapper{
        img{
            width: 100%;
        }
    }
</style>
