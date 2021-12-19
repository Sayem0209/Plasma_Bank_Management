<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Hospital</title>
    <link rel="stylesheet" href="./css/Plasma.css">
</head>

<body>

    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Plasma Bank Management System</span></h1>
            </div>
            <div id="upperLeft">
                <form>
                    <nav>
                        <ul>
                            <li id="login"><a href="LoginSignup.php">Sign Up or Login</a></li>
                        </ul>
                    </nav>
            </div>
            </form>
            <nav>
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li class="current"><a href="ChooseHospital.php">Choose Hospital</a></li>
                </ul>
            </nav>
        </div>
    </header>



    <section id="showcase">
        <div class="container">
            <aside id="Signupbar">
                <form class="contact" method="post" action="ChooseHospital.php">
                    <div>
                        <div class="HireNowBack1">
                            <h2> <span class="highlight">Choose Hospital</span> Here</h2>
                        </div>
                        <select name="hospital" id="hospital">
                            <option value="lab">Lab Aid</option>
                            <option value="square">Square</option>
                        </select>
                        <div class="HireNowBack1">
                            <h2> <span class="highlight">Choose specialist </span> Here</h2>
                        </div>
                        <select name="specialist" id="specialist">
                            <option value="medicine">Medicine</option>
                            <option value="cardiology">Cardiology</option>
                        </select>
                    </div>
                    <div>
                    </div>
            </aside>

    </section>



    <footer>
        <div class="container">
            <div class="Footer">
                <div id="FooterAboutUs">
                    <h3>FAQ</h3>
                    <er>
                        <nav>
                            <ul>
                                <li><a href="Terms.php">Terms of use</a></li>
                                <li><a href="Privacy.php">Privacy policy</a></li>
                            </ul>
                        </nav>
                </div>
            </div>
        </div>
        <p>Plasma Bank, Copyright &copy; 2021</p>
    </footer>
</body>

</html>