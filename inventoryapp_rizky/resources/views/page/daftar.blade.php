<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran</title>
  </head>
  <body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
    <form method="post" action="/dashboard">
      {{-- @csrf yaitu protektsi terhindar dari orang lain akses website kita --}}
      @csrf
      <!-- penggunaan method="post" dan action="welcome.html"
      Method "Post" = Hanya saja data tidak terlihat di URL
      Action = Untuk Mengarahkan Ke Halaman Baru -->
      <!-- Jangan dibuka dari live server Kadang method POST tidak berjalan normal. -->
      <label>Full Name:</label> <br />
      <input
        type="text"
        name="fullname"
        required
        placeholder="Masukan Nama Lengkap"
      />
      <!-- Atribut "required" => tanda Wajib Masukan Data jika langsung di Sign Up [!Please fill out this field].
      Atribut "placeholder" => Untuk Masukan Petunjuk didalam kolom. -->
      <br />
      <br />
      <label>Usia:</label> <br />
      <input type="number" name="usia" /> <br />
      <br />
      <label>Email:</label> <br />
      <input type="text" /> <br />
      <br />
      <label>Password:</label> <br />
      <input type="password" name="pass" /> <br />
      <br />
      <label>Gender/Jenis Kelamin:</label> <br />
      <input type="radio" value="1" name="status" />Male <br />
      <input type="radio" value="2" name="status" />Famale <br />
      <input type="radio" value="1" name="status" />Other <br />
      <br />
      <label>Nationality/Kebangsaan:</label> <br />
      <select name="kebangsaan">
        <option value="1">Indonesia</option>
        <option value="1">Jepang</option>
        <option value="1">Australia</option>
        <option value="1">China</option>
        <option value="1">Amerika</option>
      </select>
      <br /><br />
      <label>Language Spoken:</label> <br />
      <input type="checkbox" value="1" name="bahasa" /> Bahasa Indonesia <br />
      <input type="checkbox" value="1" name="bahasa" /> English <br />
      <input type="checkbox" value="1" name="bahasa" /> Other <br />
      <br />
      <label for="">Address/Alamat:</label> <br />
      <textarea name="bio" cols="20" rows="5"></textarea> <br />
      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>
