<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Activity 6</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <h2>Registration Form</h2>
  
  <form action="Activity6-preview.php" method="POST">
    <table>
      <tr>
        <td><label for="name">Name:</label></td>
        <td><input type="text" id="name" name="name"></td>
      </tr>
      <tr>
        <td><label for="username">Username:</label></td>
        <td><input type="text" id="username" name="username"></td>
      </tr>
      <tr>
        <td><label for="password">Password:</label></td>
        <td><input type="password" id="password" name="password"></td>
      </tr>
      <tr>
        <td><label for="address">Address:</label></td>
        <td><input type="text" id="address" name="address"></td>
      </tr>
      <tr>
        <td><label for="country">Country:</label></td>
        <td>
          <select id="country" name="country">
            <option value="">(Please select a country)</option>
            <option value="America">America</option>
            <option value="Turkey">Turkey</option>
            <option value="Germany">Germany</option>
            <option value="France">France</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="zip">ZIP Code:</label></td>
        <td><input type="text" id="zip" name="zip"></td>
      </tr>
      <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="email" id="email" name="email"></td>
      </tr>
      <tr>
        <td>Sex:</td>
        <td>
          <input type="radio" id="male" name="sex" value="Male">
          <label for="male">Male</label>
          <input type="radio" id="female" name="sex" value="Female">
          <label for="female">Female</label>
        </td>
      </tr>
      <tr>
        <td>Language:</td>
        <td>
          <input type="checkbox" id="english" name="language[]" value="English">
          <label for="english">English</label>
          <input type="checkbox" id="french" name="language[]" value="French">
          <label for="french">French</label>
          <input type="checkbox" id="german" name="language[]" value="German">
          <label for="german">German</label>
          <input type="checkbox" id="turkish" name="language[]" value="Turkish">
          <label for="turkish">Turkish</label>
        </td>
      </tr>
      <tr>
        <td><label for="about">About:</label></td>
        <td><textarea id="about" name="about"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" value="submit">
        </td>
      </tr>
    </table>
  </form>

</body>
</html>
