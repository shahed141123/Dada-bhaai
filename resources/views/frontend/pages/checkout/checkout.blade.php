@extends('frontend.frontend_dashboard')
@section('frontend')
    <!-- CONTENT + SIDEBAR -->
    <div class="main-wrapper clearfix">

        {{-- <div class="site-pagetitle jumbotron">
            <div class="container text-center">
                <h3>Dada <span class="thm-clr">Vaai</span>
                </h3>
                <!-- Breadcrumbs -->
                <div class="breadcrumbs">
                    <div class="breadcrumbs text-center">
                        <i class="fa fa-home"></i>
                        <span>
                            <a href="{{ route('index') }}">Home</a>
                        </span>
                        <i class="fa fa-arrow-circle-right"></i>
                        <span class="current">Checkout</span>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="container theme-container">
            <main id="main-content" class="main-container" itemprop="mainContentOfPage" itemscope="itemscope"
                itemtype="http://schema.org/Blog">
                <article itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
                    <!-- Main Content of the Post -->
                    <div class="entry-content" itemprop="articleBody">

                        <div class="woocommerce checkout">
                            <form class="col-md-12" id="myForm" novalidate>

                                <div class="row">
                                    <div class="fancy-heading text-center">
                                        <h3>Address</h3>
                                        <h5 class="funky-font-2"> Add Billing Address <span class="thm-clr">Or</span>
                                            Shipping Address </h5>
                                    </div>
                                </div>

                                <div class="col-2-set clearfix" id="customer_details">
                                    <div class="col-1 col-lg-6 col-sm-6 border">
                                        <!-- Billing Info  Start -->
                                        <h4 class="cart-title-highlight title-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="billingCheckbox" name="checkboxName"
                                                        value="checkboxValue" checked /> Set Billing & Shipping Details
                                                </label>
                                            </div>
                                        </h4>
                                        <div class="row">
                                            <!-- Billing Info Area Start -->
                                            <div id="billingInfoArea">
                                                <div class="contact-form">
                                                    <div class="row">
                                                        <div class="form-group col-sm-4">
                                                            <label for="user_id">User Name
                                                            </label>
                                                            <input type="text" class="form-control" value="Mr. Hove"
                                                                name="user_id" readonly />
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="phone">Phone
                                                            </label>
                                                            <input type="text" class="form-control" value=""
                                                                name="phone" readonly />
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="email">Email
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                value="Hove@gmail.com" name="email" readonly />
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="city">City
                                                            </label>
                                                            <input type="text" class="form-control" value="Dhaka"
                                                                name="city" readonly />
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="state">State
                                                            </label>
                                                            <input type="text" class="form-control" value="Dhaka"
                                                                name="state" readonly />
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="postal_code">Postal Code
                                                            </label>
                                                            <input type="text" class="form-control" value="1260"
                                                                name="postal_code" readonly />
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="country">Country
                                                            </label>
                                                            <input type="text" class="form-control" value="Bangladesh"
                                                                name="country" readonly />
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="address_line1">Address 1
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                value="Mirpur Shewrapara" name="address_line1" readonly />
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="address_line2">Address 2
                                                            </label>
                                                            <input type="text" class="form-control" value="Agargaon"
                                                                name="address_line2" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Billing Info Area End -->
                                        </div>
                                    </div>

                                    {{-- <div class="col-1 col-lg-6 col-sm-6 border">

                                        <!-- Shipping Info  Start -->
                                        <h4 class="cart-title-highlight title-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="shippingCheckbox" name="checkboxName"
                                                        value="checkboxValue" />Update Billing & Shipping Details </label>
                                            </div>
                                        </h4>
                                        <div class="row">
                                            <!-- Shipping Info Area Start -->
                                            <div id="shippingInfoArea">
                                                <div class="contact-form">
                                                    <div class="row">
                                                        <div class="form-group col-sm-4">
                                                            <label for="user_id">User Name <span class="red-clr">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="user_id"
                                                                placeholder="User Name" name="user_id" required />
                                                            <div class="error-message" id="user_id-error"></div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="phone">Phone <span class="red-clr">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="phone"
                                                                placeholder="Enter Phone" name="phone" required />
                                                            <div class="error-message" id="phone-error"></div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="email">Email <span class="red-clr">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="email"
                                                                placeholder="Enter email" name="email" required />
                                                            <div class="error-message" id="email-error"></div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="city">City <span class="red-clr">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="city"
                                                                placeholder="Inter City" name="city" required />
                                                            <div class="error-message" id="city-error"></div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="state">State <span class="red-clr">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="state"
                                                                placeholder="Enter State" name="state" required />
                                                            <div class="error-message" id="state-error"></div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="postal_code">Postal Code <span
                                                                    class="red-clr">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="postal_code"
                                                                placeholder="Enter Postal Code" name="postal_code"
                                                                required />
                                                            <div class="error-message" id="postal_code-error"></div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <div class="form-group selectpicker-wrapper">
                                                                <label for="country">Country <span
                                                                        class="red-clr">*</span>
                                                                    <select class="selectpicker input-price"
                                                                        data-live-search="true" data-width="100%"
                                                                        data-toggle="tooltip" title="Country" required>
                                                                        <option>Åland Islands</option>
                                                                        <option>Afghanistan</option>
                                                                        <option>Albania</option>
                                                                    </select>
                                                                    <div class="error-message" id="country-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="address_line1">Address 1 <span
                                                                    class="red-clr">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="address_line1"
                                                                placeholder="Inter Address One" name="address_line1"
                                                                required />
                                                            <div class="error-message" id="address_line1-error"></div>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="address_line2">Address 2 <span
                                                                    class="red-clr">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="address_line2"
                                                                placeholder="Inter Address Two" name="address_line2"
                                                                required />
                                                            <div class="error-message" id="address_line2-error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Billing Info Area End -->
                                        </div>
                                    </div> --}}

                                </div>

                                <div id="order_review" class="woocommerce-checkout-review-order">


                                    <div id="payment" class="col-lg-6 col-sm-6 border woocommerce-checkout-payment">
                                        <h4 class="cart-title-highlight title-3">Your Payment</h4>
                                        <div class="woocommerce-checkout-payment-inner">
                                            <ul class="payment_methods methods list-unstyled">
                                                <li class="payment_method_bacs">
                                                    <div class="form-group">
                                                        <label class="radio-inline">
                                                            <input type="radio" value="" name="payment_method" />
                                                            <span> Direct Bank Transfer </span>
                                                        </label>
                                                    </div>
                                                    <div class="payment_box payment_method_bacs">
                                                        <p>
                                                            <strong> Make your payment directly into our bank account.
                                                                Please use your Order ID as the payment reference. Your
                                                                order won&#8217;t be shipped until the funds have cleared in
                                                                our account. </strong>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="payment_method_cod">
                                                    <div class="form-group">
                                                        <label class="radio-inline">
                                                            <input type="radio" value="" name="payment_method" />
                                                            <span> Cash on Delivery </span>
                                                        </label>
                                                    </div>
                                                    <div class="payment_box payment_method_cod">
                                                        <p>
                                                            <strong> Pay with cash upon delivery. </strong>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="payment_method_paypal">
                                                    <div class="form-group">
                                                        <label class="radio-inline">
                                                            <input type="radio" value="" name="payment_method" />
                                                            <span> PayPal </span>
                                                        </label>
                                                    </div>
                                                    <div class="payment_box payment_method_paypal">
                                                        <p>
                                                            <strong> Pay via PayPal; you can pay with your credit card if
                                                                you don&#8217;t have a PayPal account. </strong>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    {{-- Product Shipping Information  --}}
                                    <div class="col-lg-6 col-sm-6 border">
                                        <div class="chck-ttl">
                                            <h4 id="order_review_heading" class="cart-title-highlight title-3"> Your order
                                            </h4>
                                            <table class="shop_table woocommerce-checkout-review-order-table">

                                                <thead>
                                                    <tr>
                                                        <th class="product-name">Product</th>
                                                        <th class="product-total">Total</th>
                                                    </tr>
                                                </thead>

                                                <tbody>

                                                    @foreach ($carts as $item)
                                                        <tr class="cart_item">
                                                            <td class="product-name"> {{ $item->name }} <strong
                                                                    class="product-quantity">&times;
                                                                    {{ $item->qty }}</strong>
                                                            </td>
                                                            <td class="product-total">
                                                                <b class="amount">Tk {{ $item->price }}</b>
                                                            </td>

                                                        </tr>
                                                    @endforeach

                                                </tbody>

                                                <tfoot>


                                                    <tr>
                                                        <th>Sub Total:</th>
                                                        <td>
                                                            <span class="drk-gry">Tk {{ $cartTotal }}</span>
                                                        </td>
                                                    </tr>


                                                    <tr class="cart-discount">
                                                        <th>Shipping Charge :</th>
                                                        <td>
                                                            <b class="drk-gry">Free Shipping</b>
                                                        </td>
                                                    </tr>
                                                    <tr class="shipping">
                                                        <th>Promo Discount :</th>
                                                        <td>
                                                            <b class="drk-gry">50%</b>
                                                        </td>
                                                    </tr>

                                                    <tr class="order-total">
                                                        <th>Grand Total:</th>
                                                        <td>
                                                            <b class="amount">Tk {{ $cartTotal }}</b>
                                                        </td>
                                                    </tr>

                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                                <!-- Title Here -->



                                <div class="col-md-12 col-sm-12 text-center" style="padding: 40px;">
                                    <button class="alt fancy-button" type="submit" id="submit-btn">
                                        <i class="fa fa-check-circle"></i> Proceed to Checkout </button>
                                </div>

                            </form>
                        </div>
                    </div>

                </article>
            </main>
        </div>

        {{-- <div class="light-bg gst-row">
            <div class="fancy-heading text-center">
                <h3>RELATED PRODUCTS</h3>
                <h5 class="funky-font-2"> Customers who viewed this item also viewed </h5>
            </div>
            <!-- Portfolio items -->
            <div class="related-product nav-2 text-center">
                <div class="product">
                    <div class="rel-prod-media">
                        <img src="assets/img/products/rel-prod-1.png" alt="" />
                    </div>
                    <div class="product-content">
                        <h3>
                            <a href="#" class="title-3 fsz-16"> CICLYSMO JACKET </a>
                        </h3>
                        <p class="font-3"> Price: <span class="thm-clr"> $299.00 </span>
                        </p>
                    </div>
                </div>
                <div class="product">
                    <div class="rel-prod-media">
                        <img src="assets/img/products/rel-prod-2.png" alt="" />
                    </div>
                    <div class="product-content">
                        <h3>
                            <a href="#" class="title-3 fsz-16"> LYCRA BITZ MEN CLOTHING </a>
                        </h3>
                        <p class="font-3"> Price: <span class="thm-clr"> $299.00 </span>
                        </p>
                    </div>
                </div>
                <div class="product">
                    <div class="rel-prod-media">
                        <img src="assets/img/products/rel-prod-3.png" alt="" />
                    </div>
                    <div class="product-content">
                        <h3>
                            <a href="#" class="title-3 fsz-16"> CICLYSMO JACKET </a>
                        </h3>
                        <p class="font-3"> Price: <span class="thm-clr"> $299.00 </span>
                        </p>
                    </div>
                </div>
                <div class="product">
                    <div class="rel-prod-media">
                        <img src="assets/img/products/rel-prod-4.png" alt="" />
                    </div>
                    <div class="product-content">
                        <h3>
                            <a href="#" class="title-3 fsz-16"> LYCRA BITZ MEN CLOTHING </a>
                        </h3>
                        <p class="font-3"> Price: <span class="thm-clr"> $299.00 </span>
                        </p>
                    </div>
                </div>
                <div class="product">
                    <div class="rel-prod-media">
                        <img src="assets/img/products/rel-prod-5.png" alt="" />
                    </div>
                    <div class="product-content">
                        <h3>
                            <a href="#" class="title-3 fsz-16"> CICLYSMO JACKET </a>
                        </h3>
                        <p class="font-3"> Price: <span class="thm-clr"> $299.00 </span>
                        </p>
                    </div>
                </div>
                <div class="product">
                    <div class="rel-prod-media">
                        <img src="assets/img/products/rel-prod-6.png" alt="" />
                    </div>
                    <div class="product-content">
                        <h3>
                            <a href="#" class="title-3 fsz-16"> LYCRA BITZ MEN CLOTHING </a>
                        </h3>
                        <p class="font-3"> Price: <span class="thm-clr"> $299.00 </span>
                        </p>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="clear"></div>
    </div>
@endsection
