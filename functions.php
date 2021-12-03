<?php 
$db = mysqli_connect("localhost", "root", "", "phpdasar");

function query ($query) { 
    global $db; 
    
    $result = mysqli_query($db, $query); 
    
    $rows = []; 
    
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] =$row; 
    }
    return $rows; 
}	

function tambah ($data){
    global $db;

    $nama = htmlspecialchars($data["nama"]); 
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    //Upload foto
    $gambar = upload();
    if(!$gambar) {

        return false;
    }


    $query = "INSERT INTO mahasiswa VALUES
    ('','$nama','$nim','$jurusan','$gambar')";

    mysqli_query($db,$query); 

    return mysqli_affected_rows($db);
}


function upload() {
        
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah gambar di upload apa belum
    if ($error === 4) {
        echo "<script>
            alert('Pilih file dulu!'); 
        </scrip>
        "; 
        return false;
        
    }

    $ekstensiGambarValid = ['jpg','png','jpeg'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('Yang anda Upload Bukan Gambar'); 
        </scrip>
        "; 
        return false;
    }

    //cek jika ukurannya terlalu besar
    if ($ukuranFile>1000000) {
        echo "<script>
            alert('Ukuran gambar terlalu besar!'); 
        </scrip>
        "; 
        return false;
    }

    //lolos pengecekan gambar siap di upload
    //membuat agar nama gambarnya menjadi random

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    

    move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
    return $namaFileBaru;

}


function hapus ($id) {
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id=$id");
    return mysqli_affected_rows($db);
}

function ubah ($data) {

    global $db;
    $id = $data["id"];

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);


    //cek apakah user menekan tombol upload atau tidak
    if ($_FILES['gambar']['error'] === 4) {

        $gambar = $gambarLama;
    
    } else {
    
        $gambar = upload();
    
    }

    // query insert data
    $query = "UPDATE mahasiswa SET
    nama = '$nama',
    nim = '$nim',
    jurusan = '$jurusan',
    gambar = '$gambar'
    WHERE id =$id;
    ";

    mysqli_query($db,$query); 

    return mysqli_affected_rows($db);


}
function cari($keyword) {
    $query = "SELECT * FROM mahasiswa WHERE
            nama LIKE '%$keyword%' OR
            nim LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
";

    return query($query);
}

function register($data){
    global $db;
    $nama = stripslashes($data["nama_user"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]); 
    $password2 = mysqli_real_escape_string($db, $data["password2"]);

    $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)) {
            
            echo "<script>
                alert('Username sudah pernah digunakan!');
            </script>"; 
            return false;

        } 

    if ($password !== $password2) {
        echo "
            <script>
                alert('Password tidak sesuai!');
            </script>
        ";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_query($db, "INSERT INTO user VALUES ('', '$username','$password','$nama')");

    return mysqli_affected_rows($db);


}

function updateuser($data){
    global $db;

    $nama = htmlspecialchars($data["nama"]); 
    $nip = htmlspecialchars($data["nip"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $idlogin = htmlspecialchars($data["idlogin"]);
    $datauser = $db->query("SELECT id as num_rows from dosen where id_user=$idlogin");
    $ktm_login = $datauser->num_rows;


    if($ktm_login>=1){
        if ($_FILES['gambar']['error'] === 4) {
            $gambar = $gambar;
        } else {
            $gambar = upload();
        }
    
        // query insert data
        $query = mysqli_query($db,"UPDATE dosen SET
            nama = '$nama',
            nip = '$nip',
            email = '$email',
            gambar = '$gambar'
            WHERE id_user =$idlogin;
        ");
    }else{
        //Upload foto
        $gambar = upload();
        if(!$gambar) {

            return false;
        }

        
        $query = mysqli_query($db, "INSERT INTO dosen VALUES
        ('','$idlogin','$nama','$nip','$gambar','$email')");
        // echo "<script>
        //     alert('update');
        //     </script>
        // ";
    }
}

?>