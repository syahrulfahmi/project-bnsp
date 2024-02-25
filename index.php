<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vintage Motorcycle Club</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <div class="row">
        <div class="col-1 border-right">
            <div class="img"></div>
        </div>
        <div class="col-2">
            <p class="text-header">Vintage Motorcycle Club</p>
        </div>
    </div>
    <div class="row border-top-bottom">
        <div class="col-1 border-right padding-left-10">
            <a href="?page=home">Home</a>
        </div>
        <div class="col-1 border-right padding-left-10">
            <a href="?page=experience">Profile</a>
        </div>
        <div class="col-1 border-right padding-left-10">
            <a href="?page=visi-misi">Visi dan Misi</a>
        </div>
        <div class="col-1 border-right padding-left-10">
            <a href="?page=contact">Kontak Kami</a>
        </div>
        <div class=" col-1 padding-left-8">
            <a href="?page=about">About Us</a>
        </div>
    </div>
    </div>
    <div class="row height-100vh">
        <div class="col-1 border-right  padding-left-10 bg-dark-blue">
            <ul class="side-bar">
                <li>
                    <a href="?page=article" class="text-color-white">Artikel</a>
                </li>
                <li>
                    <a href="?page=event" class="text-color-white">Event</a>
                </li>
                <li>
                    <a href="?page=galery" class="text-color-white">Galeri Foto</a>
                </li>
                <li>
                    <a href="?page=client" class="text-color-white">Klien Kami</a>
                </li>
                <li class="text-color-white">
                    Login
                    <ul class="side-bar">
                        <li class="text-color-white">Sign In</li>
                        <li class="text-color-white">Sign Up</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="content">
        </div>
    </div>
</body>
<script>
    loadContent();

    function loadContent(page) {
        let urlParams = new URLSearchParams(window.location.search)
        let pageName = urlParams.get('page') ?? "home"
        if (pageName) {
            let xhr = new XMLHttpRequest();
            xhr.open("GET", `${pageName}.php`, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("content").innerHTML = this.responseText
                };
            };
            xhr.send();
        }
    }
</script>

</html>