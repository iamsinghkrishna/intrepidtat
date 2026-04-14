<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
   <main>


      <!-- tour-checkout-area-start -->
      <div class="tour-checkout-area pt-100 pb-120">
         <div class="container container-1350">
            <div class="row">
               <div class="col-lg-7">
                  <div class="tour-checkout-form-wrap">
                     <div class="tour-checkout-form-single mb-30">
                        <h4 class="tour-checkout-form-title">Contact details</h4>
                        <p>We’ll use this information to send booking confirmations and updates.</p>
                        <div class="tp-tour-review-form">
                           <form action="#">
                              <div class="row">
                                 <div class="col-lg-6 col-md-6">
                                    <div class="tp-review-input mb-25">
                                       <label class="tp-label mb-5" for="f-name">First name <span>*</span></label>
                                       <input class="tp-input" type="text" id="f-name" placeholder="First name">
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="tp-review-input mb-25">
                                       <label class="tp-label mb-5" for="l-name">Last name <span>*</span></label>
                                       <input class="tp-input" type="text" id="l-name" placeholder="Last name">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="tp-review-input mb-25">
                                       <label class="tp-label mb-5" for="phone">Country / Region <span>*</span></label>
                                       <div class="tp-review-select">
                                          <select class="tp-select tp-input">
                                             <option>Georgia</option>
                                             <option>Canada</option>
                                             <option>Malaysia</option>
                                             <option>Germany</option>
                                             <option>Belize</option>
                                             <option>United States</option>
                                             <option>China</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="tp-review-input mb-25">
                                       <label class="tp-label mb-5" for="phone">Phone<span>*</span></label>
                                       <input class="tp-input" type="text" id="phone" placeholder="Phone">
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="tp-review-input mb-25">
                                       <label class="tp-label mb-5" for="email">Email address <span>*</span></label>
                                       <input class="tp-input" type="email" id="email" placeholder="Email address *">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="tp-review-input mb-30 d-flex align-items-start mb-25">
                                       <input class="tp-checkbox" type="checkbox" id="agree">
                                       <label class="tp-agree" for="agree">Save card details</label>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="tour-checkout-form-single mb-30">
                        <h4 class="tour-checkout-form-title">Additional information</h4>
                        <p>If you have any special needs, please enter them here.</p>
                        <p>Order notes (optional)</p>
                        <div class="tp-tour-review-form">
                           <form action="#">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="tp-review-input mb-15">
                                       <textarea class="tp-input tp-textarea" id="textarea"  placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="tour-checkout-form-single mb-30">
                        <h4 class="tour-checkout-form-title">Payment details</h4>
                        <p>We’ll use this information to send booking confirmations and updates.</p>
                        <div class="tp-checkout-payment">
                           <div class="tp-checkout-payment-item direct-bank-transfer">
                              <input class="tp-payment-input" type="radio" id="back_transfer" name="payment">
                              <label class="tp-payment-label" for="back_transfer">Direct Bank Transfer</label>
                              <div class="tp-checkout-payment-desc" id="#direct-bank-transfer">
                                 <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                              </div>
                           </div>
                           <div class="tp-checkout-payment-item">
                              <input class="tp-payment-input" type="radio" id="cheque_payment" name="payment">
                              <label class="tp-payment-label" for="cheque_payment">Cheque Payment</label>
                              <div class="tp-checkout-payment-desc cheque-payment">
                                 <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                              </div>
                           </div>
                           <div class="tp-checkout-payment-item">
                              <input class="tp-payment-input" type="radio" id="cod" name="payment">
                              <label class="tp-payment-label" for="cod">Cash on Delivery</label>
                              <div class="tp-checkout-payment-desc cash-on-delivery">
                                 <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                              </div>
                           </div>
                           <div class="tp-checkout-payment-item paypal-payment">
                              <input class="tp-payment-input" type="radio" id="paypal" name="payment">
                              <label class="tp-payment-label" for="paypal">PayPal <img src="assets/img/login/payment-option.png" alt=""> <a href="#">What is PayPal?</a></label>
                              <div class="tp-checkout-payment-form tp-checkout-payment-desc tp-return-customer">
                                 <form action="#">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="tp-return-customer-input">
                                             <span>Card number</span>
                                             <input type="text" placeholder="4840 6100 2247 1256">
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="tp-return-customer-input">
                                             <span>Expiration date</span>
                                             <input type="text" placeholder="MM / YY">
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="tp-return-customer-input">
                                             <span>Security code</span>
                                             <input type="text" placeholder="CVC">
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="tp-checkout-agree">
                              <div class="tp-checkout-option">
                                 <input id="read_all" type="checkbox">
                                 <label for="read_all">I have read and agree to the website.</label>
                              </div>
                        </div>
                        <div class="tp-checkout-btn-wrapper">
                              <a href="#" class="tp-checkout-btn w-100">Place Order</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="tour-checkout-sidebar-wrap">
                     <div class="tour-checkout-product tour-checkout-border d-flex">
                        <div class="tour-checkout-product-thumb">
                           <img  src="assets/img/tour/checkout/product.jpg" alt="">
                        </div>
                        <div class="tour-checkout-product-content">
                           <h4 class="tour-checkout-product-title fw-600 mb-5"><a href="#">Grand Palace Emerald Buddha Half Day Walking.</a></h4>
                           <span class="tour-checkout-product-btn">Only 1 shot left</span>
                        </div>
                     </div>
                     <div class="tour-checkout-reservation tour-checkout-border">
                        <div class="item d-flex">
                           <span class="icon mr-10">
                              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.47656 6.99813H10.4502M10.4502 6.99813H13.766M10.4502 6.99813V5.47363M16.5292 6.99813H13.766M13.766 6.99813C13.183 9.08298 11.9621 11.0538 10.5686 12.7858M10.5686 12.7858C9.41472 14.22 8.14251 15.4904 7.01604 16.5263M10.5686 12.7858C9.85816 11.9528 8.86342 10.6049 8.57919 9.99515M10.5686 12.7858L12.7002 15.0018" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M0.5 11C0.5 6.05026 0.5 3.57538 2.03769 2.03769C3.57538 0.5 6.05026 0.5 11 0.5C15.9497 0.5 18.4246 0.5 19.9624 2.03769C21.5 3.57538 21.5 6.05026 21.5 11C21.5 15.9497 21.5 18.4246 19.9624 19.9624C18.4246 21.5 15.9497 21.5 11 21.5C6.05026 21.5 3.57538 21.5 2.03769 19.9624C0.5 18.4246 0.5 15.9497 0.5 11Z" stroke="currentColor" />
                              </svg>
                           </span>
                           <span class="value">English. Spanish</span>
                        </div>
                        <div class="item d-flex">
                           <span class="icon mr-10">
                              <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.15 0.5V4.69998M5.75 0.5V4.69998" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M11 2.6001H8.9C4.9402 2.6001 2.96031 2.6001 1.73015 3.83024C0.5 5.06039 0.5 7.04027 0.5 11.0001V13.1C0.5 17.0598 0.5 19.0398 1.73015 20.2698C2.96031 21.5 4.9402 21.5 8.9 21.5H11C14.9598 21.5 16.9397 21.5 18.1698 20.2698C19.4 19.0398 19.4 17.0598 19.4 13.1V11.0001C19.4 7.04027 19.4 5.06039 18.1698 3.83024C16.9397 2.6001 14.9598 2.6001 11 2.6001Z" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M0.5 8.8999H19.4" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M8.9 13.1H14.15M5.75 13.1H5.75943M11 17.3H5.75M14.15 17.3H14.1405" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </span>
                           <span class="value">Tuesday, November 11,2025</span>
                        </div>
                        <div class="item d-flex">
                           <span class="icon mr-10">
                              <svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M15.3256 6.6765C15.3256 3.26532 12.5603 0.5 9.14915 0.5C5.73797 0.5 2.97266 3.26532 2.97266 6.6765C2.97266 10.0877 5.73797 12.853 9.14915 12.853C12.5603 12.853 15.3256 10.0877 15.3256 6.6765Z" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M17.7942 21.5C17.7942 16.7243 13.9227 12.8529 9.14709 12.8529C4.37144 12.8529 0.5 16.7243 0.5 21.5" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </span>
                           <span class="value">1 adult (Age 4-99)</span>
                        </div>
                        <div class="item d-flex">
                           <span class="icon mr-10">
                              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.1597 2.00836C10.7559 1.36246 11.054 1.03952 11.3707 0.851144C12.135 0.396608 13.0762 0.382472 13.8533 0.813856C14.1753 0.99264 14.4826 1.3065 15.0971 1.93421C15.7116 2.56192 16.0189 2.87577 16.1939 3.20474C16.6163 3.99849 16.6024 4.95983 16.1574 5.74056C15.973 6.06413 15.6568 6.36862 15.0245 6.9776L7.50101 14.2234C6.30274 15.3775 5.70359 15.9546 4.95478 16.247C4.20598 16.5394 3.38278 16.5179 1.73638 16.4749L1.51238 16.469C1.01117 16.4559 0.760557 16.4494 0.614882 16.284C0.469199 16.1187 0.489088 15.8634 0.528867 15.353L0.550469 15.0758C0.662421 13.6388 0.718393 12.9204 0.999006 12.2746C1.27961 11.6287 1.76365 11.1044 2.73171 10.0556L10.1597 2.00836Z" stroke="#141B34" stroke-linejoin="round" />
                                 <path d="M9.29688 2.09998L14.8973 7.69997" stroke="#141B34" stroke-linejoin="round" />
                                 <path d="M10.1016 16.5H16.502" stroke="#141B34" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </span>
                           <span class="value">Change date or participans</span>
                        </div>
                     </div>
                     <div class="tour-checkout-reservation tour-checkout-price tour-checkout-border">
                        <div class="item d-flex justify-content-between">
                           <span class="value">$60 x 1 Adult</span>
                           <span class="price">$60</span>
                        </div>
                     </div>
                     <div class="tour-checkout-reservation tour-checkout-price tour-checkout-border">
                        <div class="item d-flex justify-content-between">
                           <span class="value">Price</span>
                           <span class="price">$60.00</span>
                        </div>
                     </div>
                     <div class="tour-checkout-promo tp-checkout-verify-item">
                        <p class="tp-checkout-verify-reveal">Have a Promo Code? <button type="button" class="tp-checkout-login-form-reveal-btn"> Click here to enter your code</button></p>
                        <div id="tpReturnCustomerLoginForm" class="tp-return-customer">
                           <form action="#">
                              <div class="tp-return-customer-input">
                                 <input type="text" placeholder="Enter your coupon">
                              </div>
                              <button type="submit" class="tp-return-customer-btn tp-checkout-btn">Apply</button>
                           </form>
                        </div>
                     </div>
                     <div class="tour-checkout-reservation tour-checkout-subtotal mb-10">
                        <div class="item d-flex justify-content-between">
                           <span class="value">Subtotal</span>
                           <span class="price">$60.00</span>
                        </div>
                     </div>
                     <div class="tour-checkout-reservation tour-checkout-subtotal total">
                        <div class="item d-flex justify-content-between">
                           <span class="value">Total</span>
                           <span class="price">$60.00</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tour-checkout-area-end -->

   </main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
