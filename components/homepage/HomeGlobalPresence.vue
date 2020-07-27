<template>
    <div class="section-wrapper">
        <div class="section-content">
            <div class="image-wrapper">
                <div class="image">
                    <picture>
                        <source media="(min-width: 767px)"
                            srcset="~/assets/images/home/transworld-plane@2x.png 2x,
                            ~/assets/images/home/transworld-plane.png 1x" />
                        <source srcset="~/assets/images/home/transworld-plane-mob.jpg" />
                        <img src="~/assets/images/home/transworld-plane.png" alt="Plane" />
                    </picture>
                </div>
                <h6>Transworld Aviation – We achieve lasting, long-term relationships through quality, world-class service, accuracy and ethics.</h6>
            </div>
                
            <div class="content-wrapper">
                <div class="heading-line"><img src="~/assets/icons/twa-icon-headline-circle.png" alt="circle icon"></div>
                <div class="content">
                    <h2>Global Presence</h2>
                    <p>TWA has established a presence in key international and regional aviation hubs through a network of liaison offices that are manned by highly qualified personnel in supply chain management. This allows us to support our customers where they operate, provide them with on time deliveries and cost effective options to meet their operational objectives, and create value to enhance their operational excellence.</p>
                    <picture>
                        <source media="(min-width: 767px)"
                            srcset="~/assets/images/home/transworld-map@2x.png 2x,
                                ~/assets/images/home/transworld-map.png 1x" />
                        <source srcset="~/assets/images/home/transworld-map-mob.png" />
                        <img src="~/assets/images/home/transworld-map.png" alt="Map of TransWorld locations" />
                    </picture>
                </div>
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
        margin-top: -$section-spacing;
        background-color: $color-white;
        padding-bottom: $section-spacing;
        @media screen and (max-width: $media-tablet) {
            margin-top: 0;
        }
        .section-content{
            display: grid;
            grid-template-columns: 580px 1fr;
            @media screen and (max-width: $media-tablet) {
                grid-template-columns: 1fr;
            }
            .content{
                img{
                    width: 100%;
                }
            }
        }
    }
    .content-wrapper{
        padding-top: $section-spacing*2;
        display: grid;
        grid-template-columns: 150px 1fr;
        @media screen and (max-width: $media-tablet-xl) {
            grid-template-columns: 100px 1fr;
        }
        @media screen and (max-width: $media-tablet) {
            padding-top: $section-spacing;
            grid-template-columns: 1fr;
        }
        @media screen and (max-width: $media-mobile) {
            padding-top: $section-spacing/2;
        }
        .heading-line{
            width: 80%;
            @media screen and (max-width: $media-tablet) {
                display: none;
            }
        }
        .content{
            p{
                margin: $elements-spacing 0 90px;
                @media screen and (max-width: $media-mobile) {
                    margin: $elements-spacing/2 0;
                }
            }
        }
    }
    .image-wrapper{
        h6{
            font-size: 2.25rem; //36px
            line-height: 1.38;
            margin-top: $section-spacing;
            @media screen and (max-width: $media-mobile) {
                font-size: 1.25rem;
                line-height: 1.5;
                margin-top: $section-spacing/2;
            }
        }
        .image{
            margin-top: -$section-spacing;
            img{
                @media screen and (max-width: $media-tablet) {
                    margin-top: $elements-spacing;
                }
                @media screen and (max-width: $media-mobile) {
                    width: 100%;
                }
            }
            @media screen and (max-width: $media-tablet) {
                margin: 0 auto;
                text-align: center;
            }
        }
    }
</style>
