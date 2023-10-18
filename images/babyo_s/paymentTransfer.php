<?php

include('admin/connect.php');
require_once('admin/fns.php');


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Aledoy Solutions" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Baby Yo!</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./styles.css" />
    <script src="https://unpclientaos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </head>
  <body>
    <div class="payment-info">
      <div class="row payment-row">
        <div class="left col-md-6">
          <div class="logo">
            <a href="./index.php">
              <img src="./images/logo.svg" alt="logo" />
            </a>
          </div>
          <div class="info-steps">
            <span>Cart</span>
            <span>></span>
            <span>Information</span>
            <span>></span>
            <span>Shipping</span>
            <span>></span>
            <span style="font-weight: 700">Payment</span>
          </div>
          <div class="transfer-details">
            <p style="font-weight: 700">Bank Transfer</p>
            <p>
              To make your payment, make your transfer to the account details
              below:
            </p>
            <p style="font-weight: 700">Account Number: 001-00-0000-0000</p>
            <p style="font-weight: 700">Bank Name: BANK OF THE PHILIPPINES</p>
            <p style="font-weight: 700">Account Name: Baby Yo!</p>

            <div class="transfer-note">
              <p>
                Kindly send the screenshot of your payment to this WhatsApp
                Number: <span>+234 803 951 5871,</span> then click continue
              </p>
            </div>

            <div class="row back-cont-btn">
              <a href="" class="col-md-6 back-btn">< Back</a>
              <a
                href="./thankYou.html"
                class="add-to-cart-btn col-md-6"
                style="display: block"
                >Continue</a
              >
            </div>
          </div>
        </div>
        <!-- RIGHT -->
        <div class="right col-md-6">
          <div
            class="checkout-details"
            style="display: flex; align-items: center; max-width: 395px"
          >
            <div id="unit-img">
              <p id="unit">1</p>
              <img src="./images/Skill Way2.png" alt="" />
            </div>
            <div>
              <p style="margin-bottom: 0; margin-left: 0.5rem">
                Skillful Ways of Sailing
              </p>
              <p style="margin-left: 0.5rem; font-weight: 700">
                <input
                  type="radio"
                  name=""
                  id="check-color"
                  style="accent-color: #131311"
                />
                /M
              </p>
            </div>
            <div style="text-align: end; margin-left: 3rem">
              <p style="margin-bottom: 0; margin-left: 0.5rem">N 10,000</p>
              <p style="margin-left: 0.5rem; color: #e31e24">X2</p>
            </div>
          </div>
          <div
            class="checkout-details"
            style="display: flex; align-items: center; max-width: 395px"
          >
            <div id="unit-img">
              <p id="unit">2</p>
              <img src="./images/Skill Way12.png" alt="" />
            </div>
            <div>
              <p style="margin-bottom: 0; margin-left: 0.5rem">
                Skillful Ways of Sailing
              </p>
              <p style="margin-left: 0.5rem; font-weight: 700">
                <input
                  type="radio"
                  name=""
                  id="check-color"
                  style="accent-color: #131311"
                />
                /M
              </p>
            </div>
            <div style="text-align: end; margin-left: 3rem">
              <p style="margin-bottom: 0; margin-left: 0.5rem">N 10,000</p>
              <p style="margin-left: 0.5rem; color: #e31e24">X2</p>
            </div>
          </div>
          <div
            class="checkout-details"
            style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              max-width: 395px;
            "
          >
            <p>Subtotal</p>
            <p style="margin-right: 1rem">N40, 000</p>
          </div>
          <div
            class="checkout-details"
            style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              max-width: 395px;
            "
          >
            <p>Total</p>
            <p style="margin-right: 1rem; font-size: 30px; font-weight: 700">
              N40, 000
            </p>
          </div>
          <a href="./index.php" class="back-to-shop"> < Return to cart</a>
        </div>
      </div>
    </div>
  </body>
</html>
