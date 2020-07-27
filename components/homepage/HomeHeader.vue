<template>
    <div class="bg-wrapper fullscreen-bg">
        <div class="outer-wrapper">
            <div class="content">
                <h3 class="white">Transworld Aviation is the leading distributor and stockiest in the aviation sector.</h3>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped lang="scss">
    .fullscreen-bg{
        background-image: url('~@/assets/images/home/transworld-hero.png');
        background-image: 
            image-set(
                url('~@/assets/images/home/transworld-hero.png') 1x,
                url('~@/assets/images/home/transworld-hero@2x.png') 2x,
            );
        @media screen and (max-width: $media-mobile) {
            background-image: url('~@/assets/images/home/transworld-hero-mob.jpg');
        }
    }
    .outer-wrapper{
        height: 100%;
        .content{
            padding: $elements-spacing $elements-spacing $elements-spacing 250px;
            background-color: rgba(51, 116, 175, 0.24);
            max-width: 900px;
            position: relative;
            top: 240px;
            @media screen and (max-width: $media-mobile) {
                padding: $elements-spacing/2;
                max-width: 345px;
                top: 180px;
            }
            h3{
                max-width: 600px;
            }
        }
    }
</style>
