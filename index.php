<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <link rel="icon" type="image/x-icon" href="ico.png">
     <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
     <title>My love</title>
 </head>
 <body>
 	<div class="form">
     <form action="proses.php" method="POST" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td>
                    <input type="text" name="nama" id="nama" placeholder="Masukkan nama..." autocomplete="off">
                    <button type="submit" name="submit" id="submit" value="submit">Kirim</button>
                </td>
            </tr>
        </table>
     </form>
    </div>
 </body>
 </html>
