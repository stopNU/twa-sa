<template>
    <div class="section-wrapper with-padding">
        <div class="section-content media">
            <el-tabs v-model="activeName" @tab-click="handleClick">
                <el-tab-pane label="English" name="en">
                    <div class="brochure">
                        <h6 class="big">Company Brochure</h6>
                        <img src="~/assets/images/media/brochures/transworld-company-brochure.png" alt="Brochure">
                        <div class="btn outline">
                            <a target="blank" href="/twabrochure.pdf">SEE BROCHURE</a>
                        </div>
                    </div>
                </el-tab-pane>
                <el-tab-pane label="Arabic" name="ar">
                    <div class="brochure">
                        <h6 class="big">Company Brochure</h6>
                        <img src="~/assets/images/media/brochures/transworld-company-brochure.png" alt="Brochure">
                        <div class="btn outline">
                            <a href="">Not french?</a>
                        </div>
                    </div>
                </el-tab-pane>
                <el-tab-pane label="French" name="fr">
                    <div class="brochure">
                        <h6 class="big">Company Brochure</h6>
                        <img src="~/assets/images/media/brochures/transworld-company-brochure.png" alt="Brochure">
                        <div class="btn outline">
                            <a href="">Not french?</a>
                        </div>
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
    methods: {
      handleClick(tab, event) {
        //console.log(tab, event);
      }
    }
}
</script>

<style scoped lang="scss">
    .section-wrapper{
        padding-top: 0px;
    }
    .brochure{
        img{
            margin: 20px 0 50px;
        }
    }
</style>
