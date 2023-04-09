<!DOCTYPE html>
<html>
<head>
<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>
</head>
<body>

<h2>Signup</h2>

<form action="{{route('register')}}" method="post">
    @csrf
  <label for="name"> Name</label>
  <input type="text" id="fname" name="name">

  <label for="email">Email</label>
  <input type="email" id="email" name="email">

  <label for="password_confirmation">Confirm Password</label>
  <input type="password" id="password" name="password">

  <input type="submit" id="submit">
</form>

</body>
</html>
