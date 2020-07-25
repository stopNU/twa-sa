<template>
    <div class="section-wrapper neutral-bg with-padding">
        <div>
            <div class="heading-line"><img src="~/assets/icons/twa-icon-headline-circle.png" alt="circle icon"></div>
        </div>
        <div class="section-content">
            <div class="text">
                <h2>Sectors We Operate In</h2>
                <div class="buttons">
                    <nuxt-link to="/services" class="btn">CIVIL & COMMERCIAL AVIATION <span>🢒</span></nuxt-link>
                    <nuxt-link to="/services" class="btn">BUSINESS & CORPORATE AVIATION <span>🢒</span></nuxt-link>
                    <nuxt-link to="/services" class="btn">GENERAL AVIATION <span>🢒</span></nuxt-link>
                    <nuxt-link to="/services" class="btn">MILITARY AVIATION <span>🢒</span></nuxt-link>
                    <nuxt-link to="/services" class="btn">HELICOPTERS & ROTORCRAFTS <span>🢒</span></nuxt-link>
                    <nuxt-link to="/services" class="btn">MRO SERVICES <span>🢒</span></nuxt-link>
                </div>
            </div>
            <img class="image" alt="Helicopter"
                    srcset="
                        ~/assets/images/home/transworld-helicopter@2x.png 2x,
                        ~/assets/images/home/transworld-helicopter.png 1x"
                    src="~/assets/images/home/transworld-helicopter.png">
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
    }
    .section-content{
        display: grid;
        grid-template-columns: 1fr 1fr;
        column-gap: $section-spacing*2;
        .image{
            position: relative;
            margin-top: -$section-spacing*2;
        }
        .text{
            .buttons{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                column-gap: $elements-spacing/2;
                margin-top: $section-spacing;
                .btn{
                    color: $color-text;
                    font-weight: 600;
                    padding: $elements-spacing/2 0;
                    border-bottom: 1px solid $color-text-hint;
                    &:nth-child(-n + 2){
                        padding-top: 0;
                    }
                    &:hover{
                        border-bottom: 2px solid #E82E25;
                        padding-bottom: ($elements-spacing/2)-1;
                    }
                    span{
                        float: right;
                        color: #E82E25;
                    }
                }
            }
        }
    }
</style>
