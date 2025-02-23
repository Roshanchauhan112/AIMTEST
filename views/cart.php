<?php include '../includes/header.php'; ?>

<main>
    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you!</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="https://i.pinimg.com/236x/31/df/0b/31df0b2edf10e16d3d4059dea53678cf.jpg" alt=""></td>
                    <td>Steel TMT Bars Suppliers</td>
                    <td>₹58,900/MT</td>
                    <td><input type="number" value="1"></td>
                    <td>₹58,900</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="https://i.pinimg.com/736x/66/ac/84/66ac842cf8a6fd5beb8f88f6ca2f06e3.jpg" alt=""></td>
                    <td>UltraTech Premium Cement</td>
                    <td>₹380/bag</td>
                    <td><input type="number" value="1"></td>
                    <td>₹380</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="https://i.pinimg.com/736x/b7/e3/65/b7e365fc2bbabf9194d66f2396dc22f4.jpg" alt=""></td>
                    <td>Asian Paints Premium Emulsion</td>
                    <td>₹2,499</td>
                    <td><input type="number" value="1"></td>
                    <td>₹2,499</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>₹343</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>₹333</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>