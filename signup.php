<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <style>
      * {
        padding: 0;
        margin: 0;
      }

      body {
        background-color: black;
        overflow: hidden;
      }

      .background {
        width: 430px;
        height: 520px;
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
      }

      .background .shape {
        height: 200px;
        width: 200px;
        position: absolute;
        border-radius: 50%;
      }

      .shape:first-child {
        background: linear-gradient(#1845ad, #23a2f6);
        left: 90%;
        top: -100px;
      }

      .shape:last-child {
        background: linear-gradient(to right, #ff512f, #f09819);
        right: 90%;
        bottom: -110px;
      }

      form {
        height: auto;
        width: 40%;
        background-color: rgba(255, 255, 255, 0.01);
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
          0 6px 20px 0 rgba(255, 255, 255, 0.15);
        padding: 50px 35px;
      }

      form * {
        font-family: "Poppins", sans-serif;
        color: #ffffff;
        letter-spacing: 0.5px;
        outline: none;
        border: none;
      }

      form h3 {
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
      }

      label {
        display: block;
        margin-top: 30px;
        font-size: 16px;
        font-weight: 500;
      }

      input {
        display: block;
        height: 50px;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.07);
        border-radius: 3px;
        padding: 0 10px;
        margin-top: 8px;
        font-size: 14px;
        font-weight: 300;
      }

      ::placeholder {
        color: #e5e5e5;
      }

      button {
        margin-top: 50px;
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
      }
      @media only screen and (max-width: 1024px) {
        form {
          width: 60%;
        }
      }
    </style>
  </head>

  <body>
    <div class="background">
      <div class="shape"></div>
      <div class="shape"></div>
    </div>
    <form action="#" method="POST">
      <h3>Sign-up</h3>
      <label for="name">Name</label>
      <input type="text" placeholder="Your name" id="username" name="name">
      <label for="name">Email</label>
      <input type="text" placeholder="Email" id="email" name="email">
      <label for="name">Phone</label>
      <input type="text" placeholder="Phone" id="username" name="phone">
      <label for="password">Password</label>
      <input type="password" placeholder="Password" id="password" name="password">
      <button type="submit">Sign-up</button>
    </form>
    <?php
    $con=new mysqli("localhost","root","","sports_academy");
    extract($_POST);
    $qry="insert into login (name, email, phone, password) values ('$name','$email','$phone','$password')";
    $result=$con->query($qry);
    ?>
  </body>
</html>
