<?php
//koneksi databases
$conn = mysqli_connect("localhost","root","","pnielsikumana_db");

session_start();



// funcion login
function login($data)
{
    global $conn;
    $username = $data["username"];
    $password = $data["password"];

    $query = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '$username'");

    if(mysqli_num_rows($query) === 1)
    {
        $row = mysqli_fetch_assoc($query);
        $pass = $row['password'];
        if($password == $pass)
        {
            $_SESSION['login'] = true;
            header('Location: ../Admin/dashboard.php');
            return 1;
        }

        echo "<script>
        allert('password salah');
    </script>";

    };
    echo "<script>
        allert('username salah');
    </script>";
}

// menampilkan data dari database
function select($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    
    return $rows;
}



   