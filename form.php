<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulir Pendaftaran</title>
</head>
<body>
   <h2>Formulir Pendaftaran</h2>
   <form action="proses_pendaftaran.php" method="post">
      <label for="nama">Nama Lengkap:</label><br>
          <input type="text" id="nama" name="nama"><br>

      <label for="email">Alamat Email:</label><br>
          <input type="email" id="email" name="email"><br>

      <label for="password">Password:</label><br>
          <input type="password" id="password" name="password"><br><br>

      <input type="submit" value="Daftar">
   </form>
</body>
</html>