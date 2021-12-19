 <!DOCTYPE html>
 <html>

 <head>
     <title>Plasma Bank</title>
     <link rel="stylesheet" href="./css/Plasma.css">
 </head>

 <body>
     <header>
         <div class="container">
             <div id="branding">
                 <h1><span class="highlight">Plasma Bank Management System</span></h1>
             </div>
             <nav>
                 <ul>
                     <li><a href="Home.php">Home</a></li>
                     <li><a href="ChooseHospital.php">Choose Hospital</a></li>
                 </ul>
             </nav>
         </div>
     </header>



     <section id="LoginSignupbar">
         <div class="container">
             <aside id="Signupbar">
                 <div class="HireNowBack1">
                     <h2> <span class="highlight">Sign up</span> Here!</h2>
                 </div>
                 <div class="HireNowBack2">
                     <form class="contact" method="post" action="LoginSignup.php">
                         <div>
                             <label for="register">Register as a </label>
                             <select name="register" id="register">
                                 <option value="doner">Doner</option>
                                 <option value="Patient">Patient</option>
                             </select>
                         </div>
                         <div>
                             <label>User Name: </label>
                             <input type="text" name="userName" placeholder="Type here.." required>
                         </div>
                         <div>
                             <label>Password: </label>
                             <input type="password" name="password" placeholder="Type here.." required>
                         </div>
                         <div>
                             <label>Confirm Password: </label>
                             <input type="password" name="confirmPassword" placeholder="Type here.." required>
                         </div>
                         <div>
                             <label>First Name: </label>
                             <input type="text" name="firstName" placeholder="Type here..">
                         </div>
                         <div>
                             <label>Last Name: </label>
                             <input type="text" name="lastName" placeholder="Type here..">
                         </div>
                         <div>
                             <label>Phone number: </label>
                             <input type="Phone" name="phone" placeholder="Type here..">
                         </div>
                         <div>
                             <label for="blood">Blood Group </label>
                             <select name="blood" id="blood">
                                 <option value="a+">A+</option>
                                 <option value="a-">A-</option>
                                 <option value="b+">B+</option>
                                 <option value="b-">B-</option>
                                 <option value="ab+">AB+</option>
                                 <option value="ab-">AB-</option>
                                 <option value="o+">O+</option>
                                 <option value="o-">O-</option>
                             </select>
                         </div>
                         <div>
                             <label>Email: </label>
                             <input type="Email" name="email" placeholder="Type here..">
                         </div>
                         <div>
                             <label>Date Of Birth: </label>
                             <input type="Date" name="DOB" placeholder="Type here..">
                         </div>
                         <div>
                             <label>National ID card: </label>
                             <input type="number" name="NID" placeholder="Type here..">
                         </div>
                         <div class="Add">
                             <label>Address: </label>
                             <input type="text" name="address" placeholder="Type here.." align=" ">
                         </div>
                         <div>
                             <button type="submit" class="Signup" name="signupButton">Sign Up</button><br>
                             <span style="color:red"></span>
                         </div>
                     </form>
                 </div>
             </aside>


             <aside id="Loginbar">
                 <div class="HireNowBack1">
                     <h2> <span class="highlight">Login</span> Here!</h2>
                 </div>
                 <div class="HireNowBack2">
                     <form class="contact" action="LoginSignup.php" method="post">
                         <div>
                             <input type="text" name="userName" placeholder="User name or Phone" required>
                         </div>
                         <div>
                             <input type="password" name="password" placeholder="Password" required>
                         </div>
                 </div>
                 <button type="submit" class="Login" name="loginButton">Log In</button>
                 <span style="color:red"></span>
         </div>
         </form>
         </div>
         </aside>
         </div>
     </section>




     <footer>
         <div class="container">
             <div class="Footer">
                 <div id="FooterAboutUs">
                     <h3>FAQ</h3>
                     <er>
                         <nav>
                             <ul>
                                 <li><a href="">Terms of use</a></li>
                                 <li><a href="">Privacy policy</a></li>
                             </ul>
                         </nav>
                 </div>
             </div>
         </div>
         <p>Plasma Bank, Copyright &copy; 2021</p>
     </footer>
 </body>

 </html>