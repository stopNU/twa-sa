<template>
    <div class="section-wrapper with-padding">
        <div>
            <div class="heading-line"><i class="el-icon-help"></i></div>
        </div>
        <div class="section-content">
            <div class="info">
                <h2>Our Services Include</h2>
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
            <div class="image">
                Image
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
    }
    .section-content{
        display: grid;
        grid-template-columns: 1fr 1fr;
        column-gap: 150px;
        .info{
            >p{
                margin: $elements-spacing 0 $elements-spacing/2;
            }
        }
    }
</style>
