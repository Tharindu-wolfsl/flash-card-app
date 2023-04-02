<!DOCTYPE html>
<html>
  <head>
    <title>OTP Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {
        background-color: #f2f2f2;
      }

      .container {
        height: 500px;
        width: 500px;
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 1px solid #ccc;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
      }

      .image {
        margin-top: 30px;
      }

      .text {
        margin-top: 20px;
        font-size: 18px;
        text-align: center;
      }

      .cancel {
        color: blue;
        text-decoration: underline;
        font-weight: bold;
      }

      .otp-input {
        display: flex;
        justify-content: center;
        margin-top: 20px;
      }

      .otp-input input[type="text"] {
        width: 50px;
        height: 50px;
        margin: 0 5px;
        font-size: 24px;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
        outline: 2px #90EE90 !important;
      }

      .submit {
        display: block;
        margin-top: 20px;
        width: 100%;
        height: 50px;
        border: none;
        border-radius: 25px;
        background-color: blue;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
      }

      @media screen and (max-width: 768px) {
        .container {
          height: auto;
          width: 90%;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="image">
        <img src="https://via.placeholder.com/150" alt="Image">
      </div>
      <div class="text">
        OTP Verification
        <span class="cancel">Cancel</span>
      </div>
      <p>We just sent a 4-digit code to your email: example@example.com</p>
      <div class="otp-input">
        <input type="text" maxlength="1">
        <input type="text" maxlength="1">
        <input type="text" maxlength="1">
        <input type="text" maxlength="1">
      </div>
      <button class="submit">Submit</button>
      <div class="resend-otp">
        <span>If you did not receive the code, <a href="#">click here to resend</a>.</span>
      </div>
    </div>
  </body>
</html>
