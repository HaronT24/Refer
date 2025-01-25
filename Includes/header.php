<header>
    <a href="index.php"><img src="logo-placeholder.png" alt="Logo" style="height: 40px;"></a>
    <nav id="desktop-nav">
        <a href="index.php">Dashboard</a>
        <a href="my-team.php">My Team</a>
        <a href="how-it-works.php">How It Works</a>
        <a href="faqs.php">FAQs</a>
        <a href="contact-us.php">Contact Us</a>
    </nav>
    <div class="header-right">
        <i class="fas fa-bars hamburger" onclick="toggleMenu()"></i>
        <i class="fas fa-user-circle profile-icon" onclick="toggleProfileMenu()"></i>
        <div class="profile-menu" id="profile-menu">
            <div class="menu-section">
                <a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
            </div>
            <div class="menu-section">
                <a href="signup.php"><i class="fas fa-user-plus"></i> Sign Up</a>
            </div>
        </div>
    </div>
    <div class="hamburger-menu" id="hamburger-menu">
        <div>
            <i class="fas fa-tachometer-alt"></i><a href="index.php">Dashboard</a>
        </div>
        <div>
            <i class="fas fa-users"></i><a href="my-team.php">My Team</a>
        </div>
        <div>
            <i class="fas fa-cogs"></i><a href="how-it-works.php">How It Works</a>
        </div>
        <div>
            <i class="fas fa-question-circle"></i><a href="faqs.php">FAQs</a>
        </div>
        <div>
            <i class="fas fa-envelope"></i><a href="contact-us.php">Contact Us</a>
        </div>
    </div>
</header>

<script>
        function toggleMenu() {
            const menu = document.getElementById('hamburger-menu');
            menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
        }

        function toggleProfileMenu() {
            const profileMenu = document.getElementById('profile-menu');
            profileMenu.style.display = profileMenu.style.display === 'block' ? 'none' : 'block';
        }

        window.addEventListener('click', function(event) {
            const profileIcon = document.querySelector('.profile-icon');
            const profileMenu = document.getElementById('profile-menu');
            if (!profileIcon.contains(event.target) && !profileMenu.contains(event.target)) {
                profileMenu.style.display = 'none';
            }
        });
    </script>
