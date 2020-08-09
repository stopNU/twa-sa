<template>
    <div class="section-wrapper with-padding">
        <div class="heading-line"><img src="~/assets/icons/twa-icon-headline-circle.png" alt="circle icon"></div>
        <div class="section-content">
            <div class="heading">
                <h2>Our Services Include</h2>
            </div>
        </div>
        <div class="section-content text">
            <div class="content">
                <p>At Transworld Aviation, we offer a wide array of services for civil, commercial and military aviation. We support all major fixed wing and rotary platforms, ground support equipment and maintenance organizations. Transworld Aviation is the leading aviation industry distributor in the region offering entire range of equipment and services, including but not limited to major assemblies, sub-assemblies, spares, consumables, engines, POL, repair/mod kits, chemicals and flying clothing. Our offices are open 24/7 to handle AOG requirements. Transworld aviation in the last two decades has become the preferred supplier to majority of aviation organizations because of:</p>
                <div class="lists">
                    <ul>
                        <li><p>Inventory Management</p></li>
                        <li><p>Supply Chain Management</p></li>
                        <li><p>Maintenance, Repair & Overhaul Management</p></li>
                        <li><p>Upgrades and Enhancements</p></li>
                        <li><p>Refurbishment</p></li>
                        <li><p>Depot Services</p></li>
                    </ul>
                       
                    <ul>
                        <li><p>Obsolescence Management</p></li>
                        <li><p>System Management</p></li>
                        <li><p>Airport and Ground Handling Services</p></li>
                        <li><p>Life Support Systems</p></li>
                        <li><p>Electronics and Communication Integration</p></li>
                    </ul>
                </div>
                <div class="bulletpoints">
                    <ul>
                        <li><p>Highly professional approach</p></li>
                        <li><p>One stop solution</p></li>
                        <li><p>Cost effective solution</p></li>
                        <li><p>Minimum or no lead time</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-content image">
            <div class="image-wrapper">
                <picture>
                    <source media="(min-width: 767px)"
                        srcset="
                            ~/assets/images/sectors/transworld-jet-helicopter.png 2x,
                            ~/assets/images/sectors/transworld-jet-helicopter.png 1x" />
                    <source srcset="~/assets/images/sectors/transworld-jet-helicopter-mob.jpg" />
                    <img src="~/assets/images/sectors/transworld-jet-helicopter.png" alt="Commercial airplane in the air" />
                </picture>
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
        padding-top: 215px;
        padding-bottom: 120px;
        grid-template-columns: 1fr $inner-wrapper/2 $inner-wrapper/2 1fr;
        @media screen and (max-width: $inner-wrapper+$side-padding*2) {
            grid-template-columns: $side-padding 1fr 1fr $side-padding;
        }
        @media screen and (max-width: $media-tablet) {
            row-gap: $elements-spacing/2;
            padding-top: $section-spacing*2;
        }
        @media screen and (max-width: $media-mobile) {
            grid-template-columns: $side-padding/2 1fr $side-padding/2;
            padding-top: $section-spacing;
        }
    }
    .section-content{
        &.image{
            grid-column: 3 / span 2;
            @media screen and (max-width: $media-tablet) {
                grid-column: 1 / span 4;
                grid-row: 3;
            }
        }
        &.text{
            grid-column: 2;
            padding-right: 120px;
            @media screen and (max-width: $media-desktop) {
                padding-right: 60px;
            }
            @media screen and (max-width: $media-tablet) {
                grid-column: 2 / span 2;
                padding-right: $side-padding;
            }
            @media screen and (max-width: $media-mobile) {
                padding-right: $side-padding/2;
            }
        }
        .heading{
            margin-bottom: $elements-spacing;
            @media screen and (max-width: $media-mobile) {
                margin-bottom: 0;
            }
        }
        .image-wrapper{
            margin-left: 15px;
            img{
                width: 100%;
                @media screen and (max-width: $media-mobile) {
                    max-height: 300px;
                }
            }
        }
        .info{
            >p{
                margin: 0 0 $elements-spacing/2;
            }
        }
        .lists{
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: $elements-spacing/2;
            @media screen and (max-width: $media-mobile) {
                grid-template-columns: 1fr;
            }
            ul{
                padding-bottom: $elements-spacing/2;
                list-style: none;
                padding-left: 0;
                @media screen and (max-width: $media-mobile) {
                    padding-bottom: 0;
                    &:not(:first-child){
                        margin-top: 0px;
                        li:first-child{
                            border-top: 0px solid #99B9D7;
                        }
                    }
                }
                li{
                    border-top: 1px solid #99B9D7;
                    height: 60px;
                    display: flex;
                    align-items: center;
                    &:last-child{
                        border-bottom: 1px solid #99B9D7;
                    }
                    @media screen and (max-width: $media-desktop) {
                        height: 80px;
                    }
                    @media screen and (max-width: $media-tablet) {
                        height: 60px;
                    }
                }
            }
        }
        .bulletpoints{
            ul{
                margin-top: 0;
                @media screen and (max-width: $media-mobile) {
                    margin-top: $elements-spacing/2;
                }
            }
        }
    }
</style>
