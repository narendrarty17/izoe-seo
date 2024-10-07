<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get in Touch for Tally Solutions and Support - iZoe Solutions</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WTSE8H21ZX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-WTSE8H21ZX');
    </script>
    <meta name="description" content="Get in touch with us for expert Tally solutions and support. We're here to assist you with your financial automation needs. Reach out today!" />
    <?php include 'header-css-js.php'; ?>
    <link rel="stylesheet" href="./css/contact_us.css" type="text/css">

</head>

<body class="parallax floating_button">
    <!-- ENQUIRE NOW FLOATING BUTTON  -->
    <div class="floating_demo">
        <a id="openModalBtn" href="#">Enquire Now</a>
    </div>

    <div id="app">
        <?php include 'header.php'; ?>
        <main class="">

            <div class="wrapper">
                <section class="solutions_banner about_us_banner">
                    <div class="banner_content">
                        <h1>Contact Us</h1>
                    </div>
                </section>

                <section class="careers">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                             <iframe class="ier-contact" src="https://izoe.akountercrm.com/forms/wtl/dbd65fb25ca1cce77dc026905d9ca5f8" frameborder="0" allowfullscreen></iframe>
                            </div>
                             <div class="col-lg-6">
                                <p style="margin-top: 175px;">📍 22B, Tower B2, Spaze IT Park, Sohna Road, Gurgaon, Haryana <br />
                                  <span id="phone-no" style="cursor:pointer;">☎ +91-729-005-3570</span> <br />
                                <span id="email" style="cursor:pointer;">✉️ sales@izoe.in</span></p>
                            </div>
                        </div>
                    </div>
                </section>


        </main>
    </div>

    <?php
    include 'footer.php';
    ?>
    <?php include 'footer-js.php'; ?>
    <script>
        document.getElementById("phone-no").addEventListener("click", () => {
            window.location.href="tel:+917290053570";
        })
        document.getElementById("email").addEventListener("click", () => {
            window.location.href="mailto:sales@izoe.in";
        })
    </script>
</body>

</html>