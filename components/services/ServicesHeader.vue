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
                <ul>
                    <li><p>Inventory Management</p></li>
                    <li><p>Supply Chain Management</p></li>
                    <li><p>Maintenance, Repair & Overhaul Management</p></li>
                    <li><p>Upgrades and Enhancements</p></li>
                    <li><p>Refurbishment</p></li>
                    <li><p>Depot Services</p></li>
                    <li><p>Obsolescence Management</p></li>
                    <li><p>System Management</p></li>
                    <li><p>Airport and Ground Handling Services</p></li>
                    <li><p>Life Support Systems</p></li>
                    <li><p>Electronics and Communication Integration</p></li>
                </ul>
            </div>
        </div>
        <div class="section-content image">
            <div class="image-wrapper with-arrow">
                <div class="arrow"><i class="el-icon-caret-bottom"></i></div>
                <img class="" alt="Commercial airplane in the air"
                    srcset="
                        ~/assets/images/sectors/transworld-jet-helicopter.jpg 2x,
                        ~/assets/images/sectors/transworld-jet-helicopter.jpg 1x"
                    src="~/assets/images/sectors/transworld-jet-helicopter.jpg">
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
        grid-template-columns: 1fr $inner-wrapper/2 $inner-wrapper/2 1fr;
    }
    .section-content{
        &.image{
            grid-column: 3 / span 2;
        }
        &.text{
            grid-column: 2;
            padding-right: 120px;
        }
        .heading{
            margin-bottom: $elements-spacing;
        }
        .image-wrapper{
            img{
                width: 100%;
            }
        }
        .info{
            >p{
                margin: 0 0 $elements-spacing/2;
            }
        }
    }
</style>
