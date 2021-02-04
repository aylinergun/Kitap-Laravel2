<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Sayfası</title>
  </head>
  <body>
    <form method="post" action='{{route('login.post')}}'>
      <label>Kullanıcı Adı:</label>
      <input type="text" name='kullaniciadi'><br>
      <label>Şifre:</label>
      <input type="password" name='sifre'><br>
      <button type="submit">Giriş Yap</button>
    </form>
  </body>
</html>
