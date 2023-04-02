<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <style>
    body {
      background-image: url(background.jpg);
      background-size: cover;
      background-position: center;
    }

    .reset-box {
      width: 500px;
      height: 400px;
      background-color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
      margin: auto; /* to horizontally center the box */
      margin-top: 20vh; /* to vertically center the box */
    }

    .password-boxes input {
      width: 100%;
      margin-bottom: 10px;
      padding: 5px;
      font-size: 16px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    .save-button, .signin-button {
      width: 100%;
      padding: 10px;
      font-size: 18px;
      border-radius: 3px;
      border: none;
      cursor: pointer;
      color: white;
      background-color: #007bff;
    }

    .save-button:hover, .signin-button:hover {
      background-color: #0062cc;
    }

    h2 {
      display: flex;
      align-items: center;
      margin-bottom: 50px;
    }

    
  </style>
</head>
<body>
  <div class="reset-box">
    <h2>Reset Password</h2>
    <div class="password-boxes">
      <input type="password" placeholder="New Password">
      <input type="password" placeholder="Confirm Password">
    </div>
    <button class="save-button">Save and signin</button>
  </div>
</body>
</html>
