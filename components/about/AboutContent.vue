<template>
    <div>
        <div class="section-wrapper with-padding">
            <div>
                <div class="heading-line"><img src="~/assets/icons/twa-icon-headline-circle.png" alt="circle icon"></div>
            </div>
            <div class="section-content">
                <div class="text">
                    <div class="quality">
                        <h2>Quality</h2>
                        <p>
                            Quality Assurance is important to us and we have an entire integrated department dedicated to quality management.
                            <br><br>
                            Transworld Aviation ensures compliance with all requirements stipulated by the regulatory authorities and certifying bodies.
                            <br><br>
                            We adhere to the industry’s best practices for our valued customers by consistently striving to ensure that all products supplied, repaired or overhauled are procured, stored, inspected and handled in accordance with the standards and specifications outlined by the OEM or regulatory authorities, and provide full traceability to the OEM and repair station.
                            <br><br>
                            The Quality Assurance (QA) department monitors all technical and support functions to ensure that they are always in compliance with engineering procedures and regulatory requirements.
                            <br><br>
                            The QA department also supports clients and individuals by providing procedures, systems, guidelines and assistance in relation to quality, regulatory and technical matters.
                        </p>
                    </div>
                </div><!-- .text -->
                <div class="image hide-tablet">
                    <img class="" alt="Private jet" loading="lazy"
                        srcset="
                            ~/assets/images/about/transworld-plane-jet@2x.jpg 2x,
                            ~/assets/images/about/transworld-plane-jet.jpg 1x"
                        src="~/assets/images/about/transworld-plane-jet.jpg">
                </div>
            </div>
        </div>
        <div class="section-wrapper with-padding neutral-bg">
            <div>
                <div class="heading-line"><img src="~/assets/icons/twa-icon-headline-circle.png" alt="circle icon"></div>
            </div>
            <div class="section-content">
                <div class="text">
                    <div class="about">
                        <h2>About</h2>
                        <h4>Staying on Top of the Industry</h4>
                        <p>
                            Transworld is a stockiest, distributor and OEM representative. With a footprint on a global scale. We strive continually to keep pace with the latest innovations. Constantly on the lookout for ways for effective and efficient processes, state of the art infrastructure, fast communication and highly skilled individuals to optimize customer response with minimum lead time. We maintain an ethical and efficient operating discipline.
                            <br><br>
                            One-Stop Shop: We offer a comprehensive array of services to meet our customers' demand through flawless product and service delivery along the entire supply chain. We endeavor to exceed the expectations of our customers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-content full">
                <div class="text">
                    <h4>Infrastructure</h4>
                    <p>Transworld Aviation’s headquarter and warehouse are spread over 200,000 square feet. The logistics facility is a modern, state-of-the-art, purpose-built, environmentally controlled building with special storage facilities. Our facilitites have undergone thorough planning, taking into consideration process flow, ergonomics, safety, security and quality, as well as being conducive to efficient human performance.</p>
                    <div class="lists">
                        <ul>
                            <li><p>Highly qualified and experienced professionals from the aviation and logistics sector staff the premises.</p></li>
                            <li><p>Our efficient and highly competent in-house team ensures timely delivery to meet operational and delivery requirements.</p></li>
                            <li><p>Our storage facility is temperature and humidity controlled, and complies with requirements of International Aerospace Standards.</p></li>
                        </ul>
                        <ul>
                            <li><p>All parts are bar-coded to ensure automation and security.</p></li>
                            <li><p>Inward materials and equipment go through a thorough receipt inspection process to ensure they meet the highest quality and airworthiness standards.</p></li>
                            <li><p>Items are stored in fully air-conditioned and environmentally controlled stock rooms.</p></li>
                            <li><p>High-rise racking is used to ensure efficient storage and retrieval.</p></li>
                        </ul>
                    </div>
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
    .lists{
        display: grid;
        grid-template-columns: 1fr 1fr;
        @media screen and (max-width: $media-mobile) {
            grid-template-columns: 1fr;
            ul:not(:first-child){
                margin-top: 0px;
            }
        }
    }
    .section-content{
        display: grid;
        grid-template-columns: 2fr 1fr;
        column-gap: $elements-spacing/2;
        row-gap: $elements-spacing;
        &.full{
            grid-template-columns: 1fr;
        }
        @media screen and (max-width: $media-desktop) {
            column-gap: $elements-spacing;
            grid-template-columns: 1fr;
        }
        @media screen and (max-width: $media-mobile) {
            
        }
        .quality h2{
            margin-bottom: $elements-spacing;
            @media screen and (max-width: $media-mobile) {
                margin-bottom: $elements-spacing/2;
            }
        }
        h4{
            margin-top: $elements-spacing;
            margin-bottom: $elements-spacing/2;
            @media screen and (max-width: $media-mobile) {
                margin-top: $elements-spacing/2;
            }
        }
        .image{
            @media screen and (max-width: $media-desktop) {
                display: none;
            }
            img{
                position: absolute;
                margin-top: 90px;
            }
        }
    }
</style>
