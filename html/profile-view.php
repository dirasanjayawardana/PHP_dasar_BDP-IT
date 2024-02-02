<html>

<head>
    <title>Website .: Profile</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/css/uikit.min.css" />
</head>

<body>
    <div class="uk-container uk-container-small">
        <form method="post" action="http://localhost/bdpit2/profile.php">
            <h2 class="uk-margin">My Profile
                <?php echo $_SESSION["nama"] ?>
            </h2>
            <fieldset class="uk-fieldset">
                <div class="uk-margin">
                    <input class="uk-input" name="name" type="text" placeholder="Name" aria-label="Input">
                </div>
                <div class="uk-margin">
                    <input class="uk-input" name="password" type="password" placeholder="Change password" aria-label="Input">
                </div>
                <hr />
                <div class="uk-margin">
                    <button type="submit" class="uk-button uk-button-primary">Change Profile</button>
                </div>
            </fieldset>
        </form>
        <a href="http://localhost/bdpit2/logout.php">logout</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/js/uikit-icons.min.js"></script>
</body>

</html>