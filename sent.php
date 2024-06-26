<!DOCTYPE html>
<html>
  <head>
    <style>
      .button-area {
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center;
        margin-top: 20px; /* Add some space between the image and button */
      }
      .button-area button {
        color: #fff;
        display: block;
        width: 160px !important;
        height: 45px;
        outline: none;
        font-size: 18px;
        font-weight: 500;
        border-radius: 6px;
        cursor: pointer;
        flex-wrap: nowrap;
        background: rgb(18, 60, 228);
        border: 2px solid rgb(18, 60, 228);
        transition: all 0.3s ease;
      }
      .button-area button:hover {
        color: rgb(18, 60, 228);
        background: none;
      }
    </style>
  </head>
  <body>
    <img
      src="https://assets.materialup.com/uploads/378d2c84-810d-477a-802b-d495646b9c4e/preview.jpg"
      style="
        width: 450px;
        height: 450px;
        text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
      "
    />
    <h1
      style="
        text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
      "
    >
      Thanks for visiting !
    </h1>
    <div class="button-area">
      <a href="/Portfolio_Generator"><button type="submit">Go Back</button></a>
    </div>
  </body>
</html>
