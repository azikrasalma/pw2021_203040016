<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040016");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    $conn = koneksi();

    $nama_movie = htmlspecialchars($data['judul']);
    $sutradara_movie = htmlspecialchars($data['sutradara']);
    $rilis_movie = htmlspecialchars($data['rilis']);
    $genre_movie = htmlspecialchars($data['genre']);
    $harga_movie = htmlspecialchars($data['harga']);
    $Gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO films
                            VALUES
                            ('', '$nama_movie', '$sutradara_movie', '$rilis_movie', '$genre_movie', '$harga_movie', '$Gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM films WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = ($data['id']);
    $nama_movie = htmlspecialchars($data['judul']);
    $sutradara_movie = htmlspecialchars($data['sutradara']);
    $rilis_movie = htmlspecialchars($data['rilis']);
    $genre_movie = htmlspecialchars($data['genre']);
    $harga_movie = htmlspecialchars($data['harga']);
    $Gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE films SET
    judul = '$nama_movie',
    sutradara = '$sutradara_movie',
    rilis = '$rilis_movie',
    genre = '$genre_movie',
    harga = '$harga_movie',
    gambar = '$Gambar'
    WHERE id = $id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM films
    WHERE
    judul LIKE '%$keyword%' OR
    sutradara LIKE '%$keyword%' OR
    rilis LIKE '%$keyword%' OR
    genre LIKE '%$keyword%' OR
    harga LIKE '%$keyword%'
    ";
    return query($query);
}
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('Username sudah di gunakan');
        </script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query_tambah = "INSERT INTO user VALUES ('','$username','$password')";
    mysqli_query($conn, $query_tambah);
    return mysqli_affected_rows($conn);
}
