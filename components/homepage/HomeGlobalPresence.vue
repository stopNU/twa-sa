<template>
    <div class="section-wrapper">
        <div class="section-content">
            <div class="image-wrapper">
                <div class="image">
                    <img alt="Helicopter"
                        srcset="
                            ~/assets/images/home/transworld-plane@2x.png 2x,
                            ~/assets/images/home/transworld-plane.png 1x"
                        src="~/assets/images/home/transworld-plane.png">
                </div>
                <h6>Transworld Aviation – We achieve lasting, long-term relationships through quality, world-class service, accuracy and ethics.</h6>
            </div>
                
            <div class="content-wrapper">
                <div class="heading-line"><img src="~/assets/icons/twa-icon-headline-circle.png" alt="circle icon"></div>
                <div class="content">
                    <h2>Sectors We Operate In</h2>
                    <p>TWA has established a presence in key international and regional aviation hubs through a network of liaison offices that are manned by highly qualified personnel in supply chain management. This allows us to support our customers where they operate, provide them with on time deliveries and cost effective options to meet their operational objectives, and create value to enhance their operational excellence.</p>
                    <img alt="Helicopter"
                        srcset="
                            ~/assets/images/home/transworld-map@2x.png 2x,
                            ~/assets/images/home/transworld-map.png 1x"
                        src="~/assets/images/home/transworld-map.png">
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
        .section-content{
            display: grid;
            grid-template-columns: 580px 1fr;
        }
    }
    .content-wrapper{
        padding-top: $section-spacing*2;
        display: grid;
        grid-template-columns: 150px 1fr;
        .heading-line{
            width: 80%;
        }
        .content{
            p{
                margin: $elements-spacing 0 90px;
            }
        }
    }
    .image-wrapper{
        h6{
            font-size: 2.25rem; //36px
            line-height: 1.38;
            margin-top: $section-spacing;
        }
        .image{
            margin-top: -$section-spacing;
        }
    }
</style>
