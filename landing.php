<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/sklogo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/landing.css">
    <script src="js/nav.js"></script>
    <title>Landing page</title>
</head>
<body>
    <?php include 'component/landing_header.php'; ?>

    <section id="Home">
        <h3 style="font-size: x-large; color: #f2f2f2;">WELCOME TO THE</h3>
        <h1 style="font-size: xx-large; color: #f2f2f2;">SANGGUNIANG KABATAAAN NG TUNASAN <br> ONLINE EVENT REGISTRATION AND MANAGEMENT SYSTEM</h1>
        <a href="view/login_form.php"><button>Get Started</button></a>
    </section>

    <section id="Features">
        <h1>Features</h1>
        <div class="keyfeatures">
            <div class="card">
                <div class="image">📅</div>
                <div class="feature"> Event Registration </div>
                <div class="description"> Register for community events with ease. </div>
            </div>

            <div class="card">
                <div class="image">📄</div>
                <div class="feature"> Document Upload </div>
                <div class="description"> Upload required documents like ID and proof of residency. </div>
            </div>

            <div class="card">
                <div class="image">📊</div>
                <div class="feature"> Admin Dashboard </div>
                <div class="description"> Admins can manage events, users, and updates. </div>
            </div>

            <div class="card">
                <div class="image">👤</div>
                <div class="feature"> Profile Management </div>
                <div class="description"> Manage your personal profile information. </div>
            </div>
        </div>
    </section>

    <section id="About">
        <h3>About Us</h3>
        <p>Our Barangay Events & Registration Portal is designed to serve as a centralized platform for community engagement. We aim to bring together youths and administrators to participate in, manage, and stay informed about local events, scholarship programs, and news updates within the barangay. Our mission is to foster community spirit, simplify event registration, and keep everyone updated about essential happenings in the neighborhood.</p>
        <p>With easy-to-use features and a focus on accessibility, our portal supports the barangay's efforts to build a more connected and engaged community. We welcome all members to explore and make the most out of the resources available on this platform!</p>
    </section>

    <?php include './component/footer.php'; ?>
</body>
</html>