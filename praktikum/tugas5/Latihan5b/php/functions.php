<?php 
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040016");

    return $conn;
}
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data) {
    $conn = koneksi();
    $nama = htmlspecialchars($data['judul']);
    $sutradara = htmlspecialchars($data['sutradara']);
    $rilis = htmlspecialchars($data['rilis']);
    $genre = htmlspecialchars($data['genre']);
    $harga = htmlspecialchars($data['harga']);
    $gambar = htmlspecialchars($data['gambar']);
    $query = "INSERT INTO films
                VALUES
                ('', '$nama', '$sutradara', '$rilis', '$genre', '$harga', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM films WHERE id = $id");

    return mysqli_affected_rows($conn);
}
function ubah($data) {
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $judul = htmlspecialchars($data['judul']);
    $sutradara = htmlspecialchars($data['sutradara']);
    $rilis = htmlspecialchars($data['rilis']);
    $genre = htmlspecialchars($data['genre']);
    $harga = htmlspecialchars($data['harga']);
    $gambar = htmlspecialchars($data['gambar']);
    $query = "UPDATE `films` SET `judul`='$judul',`sutradara`='$sutradara',`rilis`='$rilis',`genre`='$genre',`harga`='$harga', `gambar`='$gambar' WHERE id = $id
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>