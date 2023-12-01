<?php 
require_once("./includes/head.php")
?>
<body>

    <section id="swup" class="transtion-fade">
    <div class="logo">
            <img src="./images/qclogo.jpg" alt="">
            <div class="title">
            <p>Quezon City Public Library</p>
            <p>Quezon City Government</p>
            </div>
            <img src="./images/qcplLogo.png" alt="">
        </div>
        <div class="container">
            <div class="promotext">
                <h3>E-Government</h3>
                <h3>Services</h3>
                <p>Offers free assistance to all individuals <br>
                 who wish to access the online government services <br>
                 offered by different department agencies of the Philippines.</p>
            </div>
            <div class="login">
                <h4>Log in</h4>
                <p>to your account</p>
                <div class="logbox">
                    <div class="inputbox">
                        <input type="text" name="username" id="username">
                        <span>User name</span>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="pass" id="pass">
                        <span>Password</span>
                    </div>
                </div>
               <a href="portal.php" class="button">Log in</a>
            </div>
            <div class="bcgimage"></div>
        </div>
    </section>
    <script src="https://unpkg.com/swup@4"></script>
    <script src="script.js"></script>
</body>
</html>