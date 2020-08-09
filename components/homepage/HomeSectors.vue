<template>
    <div class="section-wrapper neutral-bg with-padding">
        <div>
            <div class="heading-line hide-tablet"><img src="~/assets/icons/twa-icon-headline-circle.png" alt="circle icon"></div>
        </div>
        <div class="section-content">
            <div class="text">
                <h2>Sectors We Operate In</h2>
                <div class="buttons">
                    <nuxt-link to="/services" class="btn"><p>CIVIL & COMMERCIAL AVIATION</p> <i class="el-icon-caret-right"></i></nuxt-link>
                    <nuxt-link to="/services" class="btn"><p>BUSINESS & CORPORATE AVIATION</p> <i class="el-icon-caret-right"></i></nuxt-link>
                    <nuxt-link to="/services" class="btn"><p>GENERAL AVIATION</p> <i class="el-icon-caret-right"></i></nuxt-link>
                    <nuxt-link to="/services" class="btn"><p>MILITARY AVIATION</p> <i class="el-icon-caret-right"></i></nuxt-link>
                    <nuxt-link to="/services" class="btn"><p>HELICOPTERS & ROTORCRAFTS</p> <i class="el-icon-caret-right"></i></nuxt-link>
                    <nuxt-link to="/services" class="btn"><p>MRO SERVICES</p> <i class="el-icon-caret-right"></i></nuxt-link>
                </div>
            </div>
            <picture>
                <source media="(min-width: 767px)"
                    srcset="~/assets/images/home/transworld-helicopter@2x.png 2x,
                        ~/assets/images/home/transworld-helicopter.png 1x" />
                <source srcset="~/assets/images/home/transworld-helicopter-mob.jpg" />
                <img src="~/assets/images/home/transworld-helicopter.png" class="image" alt="Helicopter" />
            </picture>
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
        grid-template-areas: 'sectors image';
        column-gap: $section-spacing*2;
        @media screen and (max-width: $inner-wrapper) {
            column-gap: $section-spacing/2;
        }
        @media screen and (max-width: $media-tablet-xl) {
            column-gap: $section-spacing/2;
        }
        @media screen and (max-width: $media-tablet) {
            grid-template-columns: 1fr;
            grid-template-areas: 
            'image'
            'sectors';
            padding-bottom: $elements-spacing;
        }
        .image{
            grid-area: image;
            position: relative;
            margin-top: -$section-spacing*2;
            @media screen and (max-width: $media-tablet) {
                z-index: 3;
                margin: -$section-spacing*1.5 auto 0;
            }
            @media screen and (max-width: $media-mobile) {
                z-index: 3;
                margin: -$section-spacing*1 auto 0;
                width: 100%;
            }
        }
        .text{
            grid-area: sectors;
            h2{
                @media screen and (max-width: $media-tablet) {
                    margin-top: $elements-spacing/2;
                }
            }
            .buttons{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                column-gap: $elements-spacing/2;
                margin-top: $section-spacing;
                @media screen and (max-width: $media-tablet) {
                    margin-top: $elements-spacing/2;
                }
                @media screen and (max-width: $media-mobile) {
                    grid-template-columns: repeat(1, 1fr);
                }
                .btn{
                    p{
                        color: $color-text;
                        font-weight: 600;
                        padding-right: 5px;
                        flex: 1;
                    }
                    display: flex;
                    align-items: center;
                    padding: $elements-spacing/2 0;
                    border-bottom: 1px solid $color-text-hint;
                    &:nth-child(-n + 2){
                        padding-top: 0;
                        @media screen and (max-width: $media-mobile) {
                            padding: $elements-spacing/2 0;
                        }
                    }
                    &:nth-child(1){
                        @media screen and (max-width: $media-mobile) {
                            padding-top: 0;
                        }
                    }
                    &:hover{
                        border-bottom: 2px solid $color-brand;
                        padding-bottom: ($elements-spacing/2)-1;
                        i{
                            color: $color-brand;
                        }
                    }
                    i{
                        float: right;
                        color: #B0B0B3;
                        font-size: 12px;
                    }
                }
            }
        }
    }
</style>
