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
        background-image: url('~@/assets/images/home/transworld-hero.jpg');
    }
    .outer-wrapper{
        height: 100%;
        .content{
            padding: $elements-spacing $elements-spacing $elements-spacing 250px;
            background-color: rgba(51, 116, 175, 0.24);
            max-width: 900px;
            position: relative;
            top: 240px;
            h3{
                max-width: 600px;
            }
        }
    }
</style>
