<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TallyPrime Pricing</title>
    <style>
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f4f4f4;
    padding: 20px;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

.product-section {
    margin-bottom: 40px;
}

.product-section h2 {
    margin-bottom: 20px;
}

.product-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.product-card {
    border: 1px solid #e1e1e1;
    background-color: #f9f9f9;
    padding: 20px;
    flex: 1;
    min-width: 200px;
    text-align: center;
    /*box-shadow: 0 0 10px rgba(0,0,0,0.1);*/
    
}

.border-hd {
    margin: 0 auto;
    border: 2px solid #ABD3EF;
    width: 12%;
}

.product-card h3 {
    margin-bottom: 10px;
    font-size: 1.3rem !important;
}

.product-card p {
    margin-bottom: 10px;
    font-size: .8rem !important;
    font-weight: 600;
    padding-top: 1.5rem !important;
}

.months {
    margin-bottom: 10px;
}

.months label {
    margin-right: 10px;
}

button {
    background-color: #fcb414;
    border: none;
    color: white;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #e89c12;
}

@media (max-width: 768px) {
    .product-grid {
        flex-direction: column;
    }

    .product-card {
        min-width: 100%;
    }
}
.price-main {
    color: #191919;
    font-size: 20px;
    font-weight: 700;
}
.months span {
    font-weight: bold;
    margin-right: 10px;
}

.product-section img {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
    
}

.odd-card {width: 50%;}

@media only screen and (max-width: 768px) { 
    .odd-card {
        width: 100%;
    }
    .product-section img {
        width: 12rem;
    }
    .product-section {
        text-align: center !important;
    }
}
    </style>
</head>
<body style="background: #fff;">
    <div class="container">
        <section class="product-section">
            <img src="https://izoe.in/landing/img/TallyPrime-logo-download-page.svg">
            <div class="product-grid">
                <div class="product-card">
                    <h3>SILVER RENTAL</h3>
                    <div class="border-hd"></div>
                    <p>Single user edition<br>For Standalone PCs</p>
                    <div class="months">
                        <span>Months:</span>
                        <label><input type="radio" name="silver-rental-months" value="1" data-price="750" checked> 1</label>
                        <label><input type="radio" name="silver-rental-months" value="3" data-price="2250"> 3</label>
                        <label><input type="radio" name="silver-rental-months" value="12" data-price="9000" > 12</label>
                    </div>
                    <p class="price" id="silver-rental-price"><text class="price-main">INR 750</text><br>+18% GST (INR 135)</p>
                    <button>Buy Now</button>
                </div>
                <div class="product-card">
                    <h3>SILVER</h3>
                    <div class="border-hd"></div>
                    <p>Single user edition<br>For Standalone PCs</p>
                    (Perpetual)<br>
                    <p><text class="price-main">INR 22,500</text><br>+18% GST (INR 4,050)</p>
                    <button>Buy Now</button>
                </div>
                <div class="product-card">
                    <h3>GOLD RENTAL</h3>
                    <div class="border-hd"></div>
                    <p>Unlimited multi-user edition<br>For multiple PCs on LAN environment</p>
                    <div class="months">
                        <span>Months:</span>
                        <label><input type="radio" name="gold-rental-months" value="1" data-price="2250" checked> 1</label>
                        <label><input type="radio" name="gold-rental-months" value="3" data-price="6750"> 3</label>
                        <label><input type="radio" name="gold-rental-months" value="12" data-price="27000"> 12</label>
                    </div>
                    <p class="price" id="silver-rental-price"><text class="price-main">INR 2,250</text><br>+18% GST (INR 405)</p>
                    <button>Buy Now</button>
                </div>
                <div class="product-card">
                    <h3>GOLD</h3>
                    <div class="border-hd"></div>
                    <p>Unlimited multi-user edition<br>For multiple PCs on LAN environment</p>
                    (Perpetual)<br>
                    <p><text class="price-main">INR 67,500</text><br>+18% GST (INR 12,150)</p>
                    <button>Buy Now</button>
                </div>
            </div>
        </section>
        
        <section class="product-section">
            <img src="https://izoe.in/landing/img/tallyprime-developer.svg">
            <div class="product-grid">
                <div class="product-card">
                    <h3>SILVER</h3>
                    <div class="border-hd"></div>
                    <p>Development environment<br>designed for Tally Definition Language</p>
                    <p><text class="price-main">INR 11,250/year</text><br>+18% GST (INR 2,025)</p>
                    <button>Buy Now</button>
                </div>
                <div class="product-card">
                    <h3>GOLD</h3>
                    <div class="border-hd"></div>
                    <p>Development environment<br>designed for Tally Definition Language</p>
                    <p><text class="price-main">INR 33,750/year</text><br>+18% GST (INR 6,075)</p>
                    <button>Buy Now</button>
                </div>
            </div>
        </section>

        <section class="product-section">
             <img src="https://izoe.in/landing/img/shoper9-logo-1.svg">
            <div class="product-grid">
                <div class="product-card">
                    <h3>SILVER</h3>
                    <div class="border-hd"></div>
                    <p>Best retail point-of-sale (POS)<br>business management software</p>
                    <div class="months">
                        <span>Months:</span>
                        <label><input type="radio" name="shoper9-silver-months" value="1" data-price="600" checked> 1</label>
                        <label><input type="radio" name="shoper9-silver-months" value="3" data-price="NAN"> 3</label>
                        <label><input type="radio" name="shoper9-silver-months" value="12" data-price="NAN" > 12</label>
                    </div>
                    <p class="price" id="silver-rental-price"><text class="price-main">INR 600</text><br>+18% GST (INR 108)</p>
                    <button>Buy Now</button>
                </div>
                <div class="product-card">
                    <h3>GOLD</h3>
                    <div class="border-hd"></div>
                    <p>Best retail point-of-sale (POS)<br>business management software</p>
                    <div class="months">
                        <span>Months:</span>
                        <label><input type="radio" name="shoper9-gold-months" value="1" data-price="1800" checked> 1</label>
                        <label><input type="radio" name="shoper9-gold-months" value="3" data-price="NAN"> 3</label>
                        <label><input type="radio" name="shoper9-gold-months" value="12" data-price="NAN"> 12</label>
                    </div>
                    <p class="price" id="silver-rental-price"><text class="price-main">INR 1,800</text><br>+18% GST (INR 324)</p>
                    <button>Buy Now</button>
                </div>
                <div class="product-card">
                    <h3>DIAMOND</h3>
                    <div class="border-hd"></div>
                    <p>Best retail point-of-sale (POS)<br>business management software</p>
                    <div class="months">
                        <span>Months:</span>
                        <label><input type="radio" name="shoper9-diamond-months" value="1" data-price="12000" checked> 1</label>
                        <label><input type="radio" name="shoper9-diamond-months" value="3" data-price="1800"> 3</label>
                        <label><input type="radio" name="shoper9-diamond-months" value="12" data-price="7200"> 12</label>
                    </div>
                    <p class="price" id="silver-rental-price"><text class="price-main">INR 12,000</text><br>+18% GST (INR 2,160)</p>
                    <button>Buy Now</button>
                </div>
            </div>
        </section>
        <section class="product-section">
             <img src="https://izoe.in/landing/img/tallyprime-server.svg">
            <div class="product-grid odd-card">
                <div class="product-card">
                    <!--<h3>SILVER</h3>-->
                    <!--<div class="border-hd"></div>-->
                    <p>For medium and large enterprises (TallyPrime Server works with TallyPrime Gold license)</p>
                    <p><text class="price-main">INR 2,70,000</text><br>+18% GST (INR 48,600)</p>
                    <button>Buy Now</button>
                </div>
            </div>
        </section>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const radioButtons = document.querySelectorAll('input[type="radio"]');
    
    radioButtons.forEach(radio => {
        radio.addEventListener('change', (event) => {
            const selectedRadio = event.target;
            const price = parseInt(selectedRadio.getAttribute('data-price'));
            const gst = (price * 0.18).toFixed(2);
            const priceElement = selectedRadio.closest('.product-card').querySelector('.price');
            priceElement.innerHTML = `<text class="price-main">INR ${price}</text><br>+18% GST (INR ${gst})`;
        });
    });
});

    </script>
</body>
</html>
