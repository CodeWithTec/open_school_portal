<?php 
require 'views/partials/head.php';
require 'views/partials/footer.php';
require 'controller/login.php';
?>
<section class="login-section">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-6">
                <div class="login">
                <h1>Login</h1>
                <form method="post">
                    <input class="form-control" name="username" placeholder="Username" required><br>
                    <input class="form-control" name="password" type="password" placeholder="Password" required><br>
                    <button class="btn btn" type="submit">Login</button>
                </form>
            </div>
            </div>
            <div class="col-lg-6">
                <div class="login-text">
                <img src="" alt="">
                <h1>The Open School management System</h1>
                <p>This school portal is here to make all your High school Work Very easy and help you manage all your School Activities in one Tab</p>
            </div>
            </div>
        </div>
    </div>
</div>
</section>