<!DOCTYPE html>
<html>
<head>
    <title>Form Data Mahasiswa</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1d2671, #c33764);
        }

        .container {
            width: 400px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .gender {
            display: flex;
            gap: 20px;
            align-items: center;
            margin: 10px 0;
        }

        .gender label {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        input[type="radio"] {
            transform: scale(1.2);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #1d2671;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #c33764;
        }

        .hasil {
            margin-top: 20px;
            padding: 15px;
            background: #f4f4f4;
            border-left: 5px solid #1d2671;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Data Mahasiswa</h2>

    <form method="POST">
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="nim" placeholder="NIM" required>
        <input type="text" name="kelas" placeholder="Kelas" required>
        <input type="text" name="matakuliah" placeholder="Matakuliah" required>

        <select name="jurusan">
            <option value="SI">Sistem Informasi</option>
            <option value="TI">Teknik Informatika</option>
        </select>

        <div class="gender">
            <label>
                <input type="radio" name="jk" value="Laki-laki" checked>
                Laki-laki
            </label>

            <label>
                <input type="radio" name="jk" value="Perempuan">
                Perempuan
            </label>
        </div>

        <button type="submit" name="submit">Simpan</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        echo "<div class='hasil'>";
        echo "<h3>Hasil Input</h3>";
        echo "Nama: " . $_POST['nama'] . "<br>";
        echo "NIM: " . $_POST['nim'] . "<br>";
        echo "Kelas: " . $_POST['kelas'] . "<br>";
        echo "Matakuliah: " . $_POST['matakuliah'] . "<br>";
        echo "Jurusan: " . $_POST['jurusan'] . "<br>";
        echo "Jenis Kelamin: " . $_POST['jk'] . "<br>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
