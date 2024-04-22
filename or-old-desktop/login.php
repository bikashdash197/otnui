<?php include_once 'includes/header.php'; ?>
<style type="text/css">
 h1.main-heading-login {
    padding: 0;
    margin: 20px 0;
    text-transform: capitalize;
    font-size: 38px;
    font-weight: 500;
    line-height: 44px;
}
span.main-heading-login-2nd {
    font-weight: 400;
}
p.login-para {
    margin: 20px 0px;
    padding: 0;
    color: #2e2e2e;
    font-weight: 300;
    font-size: 20px;
    line-height: 26px;
}
.submit-btn {
    display: block;
    width: 100%;
    background-color: #f05127;
    outline: none;
    border: none;
    line-height: 15px;
    padding: 10px;
    border-radius: 5px;
}
.form-group {
    margin-bottom: 15px;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
}
.login-form {
    background-color: #000;
    padding: 40px;
    box-shadow: 4px 5px 11px -2px rgb(0 0 0 / 56%);
    -webkit-box-shadow: 4px 5px 11px -2px rgb(0 0 0 / 56%);
    -moz-box-shadow: 4px 5px 11px -2px rgba(0,0,0,0.56);
    -moz-box-shadow: 4px 5px 11px -2px rgba(0,0,0,0.56);
    margin: 20px 0px;
    border-radius: 5px;
}
.login-form h2 {
    padding: 0;
    margin: 0px 0 20px 0;
    color: #fff;
    font-weight: 400;
    line-height: 24px;
    font-size: 32px;
}
p.contact-line {
    margin: 10px 0;
    color: #c6c2c2;
    line-height: 22px;
    font-size: 16px;
    padding: 0;
}
a.cat-more-news-btn {
    outline: 0;
    line-height: 18px;
    padding: 0px 23px 0px 0;
    width: fit-content;
    border: none;
    color: #ffffff;
    text-transform: capitalize;
    font-size: 12px;
    border-radius: 2px;
    float: left;
    font-weight: 700;
    transition-duration: .5s;
    display: block;
    position: relative;
    margin-bottom: 10px;
}
a.cat-more-news-btn:after {
    content: "";
    background-image: url(images/svg/long-arrow.svg);
    margin-left: 8px;
    display: block;
    width: 13px;
    height: 5px;
    background-repeat: no-repeat;
    position: absolute;
    right: 0;
    top: 7px;
}
.create-btn {
    display: block;
    width: 100%;
    background-color: #d0cfcf;
    outline: none;
    border: none;
    line-height: 12px;
    padding: 10px;
    border-radius: 0px;
    color: #000;
    font-size: 16px;
    margin: 10px 0px;
}
h4.new-to-or {
    margin: 0 auto;
    padding: 0;
    text-align: center;
    font-size: 16px;
    position: relative;
    line-height: 18px;
    font-weight: 400;
}
h4.new-to-or:before {
    content: "";
    display: block;
    width: 157px;
    height: 1%;
    background-color: #cecdcd;
    position: absolute;
    left: 0px;
    top: 10px;
}
h4.new-to-or:after {
    content: "";
    display: block;
    width: 157px;
    height: 1%;
    background-color: #cecdcd;
    position: absolute;
    right: 0px;
    top: 10px;
}
section.or-login {
    float: left;
    width: 100%;
    margin: 30px 0px;
    padding: 0;
}
</style>
<?php include 'includes/bredcum.php';?>
<section class="or-login">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
            <img src="images/logo.svg" class="main-top-img" alt="OdishaTV" title="OdishaTV" width="" height="65">
            <h1 class="main-heading-login">Welcome <span class="main-heading-login-2nd">to Odisha Reporter</span></h1>
            <p class="login-para">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
         </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12"> 
            <div class="login-form">
                <h2>Sign in</h2>
                <form method="post" class="contactus">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
                    </div>
                    <button type="submit" class="btn btn-lg btn-danger submit-btn">Continue</button>
                    <p class="contact-line">By Clicking On SUBMIT,you acknowledge having read our <a href="">Privacy Notice</a></p>
                </form>
                <a href="https://odishatv.in/miscellaneous" class="cat-more-news-btn">Need Help?</a>
            </div>
            <h4 class="new-to-or">New to OR?</h4>
            <button type="submit" class="create-btn">Create your reporter account</button>
        </div>
    </div>
</div>
</section>
<?php include_once 'includes/footer.php'; ?>