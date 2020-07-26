<template>
    <div class="section-wrapper with-padding">
        <div class="section-content">
            <h6 class="big">Corporate Video</h6>
            <iframe class="twavid" src="https://www.youtube.com/embed/h1DPuqCJUcg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped lang="scss">
    .section-wrapper{
        padding-top: 200px;
        padding-bottom: $elements-spacing/2;
        @media screen and (max-width: $media-tablet) {
            padding-top: $section-spacing;
        }
        .section-content{
            h6{
                @media screen and (max-width: $media-mobile) {
                    text-align: center;
                    font-size: 1.375rem;
                    font-family: $font-headlines-alt;
                }
            }
        }
    }
    .twavid{
        margin-top: $elements-spacing/2;
        width: 99%;
        height: 650px;
        @media screen and (max-width: $media-tablet) {
            height: 350px;
        }
        @media screen and (max-width: $media-mobile) {
            height: auto;
            min-height: 200px;
        }
    }
</style>
