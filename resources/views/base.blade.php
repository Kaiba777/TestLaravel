<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <style>
:root {
    ---color1: white;
    ---color2: #162938; 
}
body {
    background: #00d4ff;
}
header .nav {
   margin: 20px;
   display: flex;
   justify-content: space-between;
}
.nav h1 {
    text-transform: capitalize;
}
.nav ul {
    list-style: none;
    display: flex;
    justify-content: space-between;
}
ul li {
    text-transform: capitalize;
    margin-top: 10px;
    margin-right: 20px;
    font-weight: bold;
}
.nav #btn {
    border: 2px solid;
    border-radius: 5px;
    padding: 10px 30px;
    transform: translateY(-10px);
}
ul li:hover {
    cursor: pointer;
}
#after1, #after2 {
    position: relative;
}
#after3, #after4 {
    position: relative;
}
#after1::after, #after2::after {
    content: "";
    position: absolute;
    background: var(---color1);
    height: 2px;
    width: 100%;
    left: 0;
    top: 18px;
    transform: scaleX(0);
    transform-origin: right;
    transition: transform 0.5s;
}
#after3::after, #after4::after {
    content: "";
    position: absolute;
    background: var(---color1);
    height: 2px;
    width: 100%;
    left: 0;
    top: 18px;
    transform: scale(0);
    transform-origin: right;
    transition: transform 0.5s;
}
#after1:hover::after, #after2:hover::after {
    transform: scale(1);
    transform-origin: left;
}
#after3:hover::after, #after4:hover::after {
    transform: scale(1);
    transform-origin: left;
}
#btn:hover {
    background: var(---color1);
    color: var(---color2);
    border-color: var(---color1);
    transition: 0.5s;
}

/* Indique si un article a été enregistré */
.success {
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fcb045;
}
    </style>
</head>
<body>
    <header>
        <div class="nav">
            <h1>test laravel</h1>
            <ul>
                <li id="after1"><a href="{{ route('welcome') }}">home</a></li>
                <li id="after2"><a href="{{ route('edit.form') }}">sauvegarder</a></li>
                <li id="after3"><a href="">services</a></li>
                <li id="after4"><a href="">contact</a></li>
                <li id="btn"><a href="">login</a></li>
            </ul>
        </div>
    </header>

    <section class="success">
        <div class="success-message">
            @if (session('success'))
                {{ session('success') }}
            @endif
        </div>
    </section>

    <div class="article-container">
        @yield('container')
    </div>
    
</body>
</html>