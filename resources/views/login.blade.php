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

<h2>Login</h2>

<form action="{{ route('login-post')}}" method="post">

    @csrf
  <label for="email">Email</label>
  <input type="email" id="email" name="email">

  <label for="password">Enter Password</label>
  <input type="password" id="password" name="password">

  <input type="submit" id="submit">
</form>

</body>
</html>
