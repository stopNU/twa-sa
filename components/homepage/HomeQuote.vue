<template>
    <div class="section-wrapper neutral-bg">
        <div class="white-container"></div>
        <div class="section-content quote-section">
            <div class="quote-wrapper">
                <img class="icon" alt="Quote"
                    srcset="
                        ~/assets/icons/twa-icon-quote@2x.png 2x,
                        ~/assets/icons/twa-icon-quote.png 1x"
                    src="~/assets/icons/twa-icon-quote.png">
                <div>
                    <p class="quote">We at Transworld Aviation provide customised technical solutions, parts distribution, MRO services, supply chain management and consultancy services for our military and commercial customers, minimising their investments in assets and maximising their operational readiness. Together we work to exceed customers’ expectations.</p>
                    <nuxt-link to="/about" class="btn">About Us <i class="el-icon-caret-right"></i></nuxt-link>
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
        column-gap: 0px;   
        @media screen and (max-width: $media-tablet) {
            background-color: $color-white;
        }
        .white-container{
            background-color: $color-white;
        }
    }
    .quote-section{
        
        .quote-wrapper{
            width: fit-content;
            background-color: $color-white;
            padding: $section-spacing $section-spacing*2 $section-spacing 0;
            display: flex;
            align-items: flex-start;
            position: relative;
            z-index: 2;
            @media screen and (max-width: $media-tablet) {
                padding: $section-spacing 0;
            }
            .quote{
                max-width: 750px;
                margin-bottom: 50px;
                @media screen and (max-width: $media-tablet) {
                    max-width: none;
                }
            }
            .btn{
                text-decoration: none;
                text-transform: uppercase;
                font-family: 'Open Sans';
                color: $color-headlines;
                i{
                    font-size: 12px;
                    vertical-align: middle;
                }
            }
            .icon{
                padding-right: $elements-spacing/2;
            }
        }
    }
</style>
