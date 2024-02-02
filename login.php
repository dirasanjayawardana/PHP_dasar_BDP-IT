<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // import config.php dan class yg ada di sql.php
    require("config.php");
    require("sql.php");

    // buat objek
    $sql = new SQL($database);
    $sql->setQueryParameter($_POST["username"], $_POST["password"]);
    $data = $sql->getQueryFetch();

    if (isset($data["username"])) {
        session_start();
        $_SESSION["username"] = $data["username"];
        $_SESSION["name"] = $data["name"];

        header("Location: http://localhost/bdpit2/profile.php");
    } else {
        echo "Login $_POST[username] salah, cek kembali username dan password";
    }
} else {
    include("html/login-view.php");
}
