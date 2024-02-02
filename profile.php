<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    // import config.php dan class yg ada di sql.php
    require("config.php");
    require("sql.php");

    // update data dengan membuat objek
    $sql = new SQL($database);
    $sql->setQueryParameter($_SESSION["username"], $_POST["password"], $_POST["name"]);

    // get data baru yang sudah di update dengan membuat objek dan disimpan ke session
    $sql1 = new SQL($database);
    $sql1->setQueryParameter($_SESSION["username"], $_POST["password"]);
    $data = $sql1->getQueryFetch();

    $_SESSION["nama"] = $data["nama"];

    header("Location: http://localhost/bdpit2/profile.php");
} else {
    session_start();
    include("html/profile-view.php");
}
