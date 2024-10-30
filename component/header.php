<header style="border-bottom: #2B4893 5px solid;">
    <nav>
        <div class="logo">
            <img src="../../image/sklogo.png" alt="logo of sk tunasan" style="width: 50px; height: 50px;">
            <a href="">Sangguniang Kabataan <br> Ng Tunasan</a>
        </div>
        <input type="checkbox" class="burger" id="burger">
        <label for="burger" class="menu-toggle">&#9776;</label>
        <ul class="nav-links">
            <li><a href="/views/homepage.php">Home</a></li>
            <li><a href="/views/my-blog.php">Events</a></li>
            <li><a href="/views/my-profile.php">My Profile</a></li>
            <li><a href="../../controller/logout.php" style="color:red;">Logout</a></li>
        </ul>
    </nav>
</header>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

* {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    scroll-behavior: smooth;
    padding: 0;
    margin: 0;
}

.logo {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo a {
    text-align: center;
    font-weight: bold;
    color: #111827; 
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    background-color: #F0AB46;
}

.nav-links {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav-links li {
    margin-left: 1rem;
}

.nav-links li a {
    color: #111827;
    text-decoration: none;
    font-weight: bold;
}

.nav-links li a:hover{
    color: #2B4893;
}

/* RESPONSIVE BURGER MENU */
.burger {
    display: none;
    cursor: pointer;
}

.menu-toggle {
    display: none;
    position: absolute;
    top: 0;
    right: 0;
    padding: 1rem;
    cursor: pointer;
    z-index: 10;
    font-size: 1.5rem;
}

@media screen and (max-width: 768px) {
    nav {
        width: 100%;
    }

    .nav-links {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 4.5rem;
        left: 0;
        width: 100%;
        padding: 1rem;
        background-color: #2B4893;
    }

    .nav-links li {
        margin: 1rem 0;
    }

    .nav-links li a {
    color: #f2f2f2;
}

    .nav-links li a:hover{
        color: #F0AB46;
    }

    .burger:checked~.nav-links {
        display: flex;
    }

    .menu-toggle {
        display: block;
    }
}
</style>