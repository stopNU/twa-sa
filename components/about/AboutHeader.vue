<template>
    <div class="section-wrapper with-padding">
        <div class="section-content">
            <h6 class="title">At Transworld Aviation we are committed to quality.</h6>
            <div class="image-wrapper">
                <picture>
                    <source media="(min-width: 767px)"
                        srcset="~/assets/images/about/transworld-plane-clouds@2x.png 2x,
                                ~/assets/images/about/transworld-plane-clouds.png 1x" />
                    <source srcset="~/assets/images/about/transworld-plane-clouds-mob.jpg" />
                    <img src="~/assets/images/about/transworld-plane-clouds.png" alt="Commercial airplane in the air" />
                </picture>
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
        @media screen and (max-width: $media-tablet) {
            margin: $section-spacing/2 0 $elements-spacing/2;
        }
        @media screen and (max-width: $media-mobile) {
            font-size: 1.25rem;
            margin: $section-spacing/4 0 $elements-spacing/4;
        }
    }
    .image-wrapper{ 
        img{
            width: 100%;
        }
    }
</style>
