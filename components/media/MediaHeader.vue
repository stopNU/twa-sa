<template>
    <div class="section-wrapper with-padding">
        <div class="section-content media">
            <el-tabs v-model="activeName" tab-position="bottom">
                <el-tab-pane label="English" name="en">
                    <div class="video">
                        <h6 class="big">Corporate Video</h6>
                        <iframe class="twavid" src="https://www.youtube.com/embed/h1DPuqCJUcg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                </el-tab-pane>
                <el-tab-pane label="Arabic" name="ar">
                    <div class="video">
                        <h6 class="big">Corporate Video</h6>
                        <iframe class="twavid" src="https://www.youtube.com/embed/0O_zgPfAFUM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                </el-tab-pane>
                <el-tab-pane label="French" name="fr">
                    <div class="video">
                        <h6 class="big">Corporate Video</h6>
                        <iframe class="twavid" src="https://www.youtube.com/embed/73qvW2J44yU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                </el-tab-pane>
            </el-tabs>
        </div>
    </div>
</template>

<script>
export default {
    data() {
      return {
        activeName: 'en'
      };
    },
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
