
<style>
    .input_container{
        display: flex;
        justify-content: center;
        width: 100%;
        margin: auto;
    }
    .input_container > input {
        width:100%;
        height: 50px;
        font-size: 18px;
        margin: 10px;
        padding: 10px;
    }
</style>
<div id="promotion" class="promotion menu-overlay bg-2 ps-fi tr-1">
    <div class="toggle-close-promotion ai-c ds-fl jc-fe mg-at ps-re wc">
        <a href="javascript:void(0)" onclick="closeDialog()" style="color: white;"><i class="fas fa-times"></i></a>
    </div>
    <div class="promotion-container jc-c pd-1">
        <div class="promotion-header">
            <h2 class="banner-header fc-2 fw-3 ls-n1 mg-b1"><b>Join our newsletter</b></h2>
        </div>
        <div class="promotion-amount" style="padding: 20px 30px;">
                <span class="ai-c ds-fl fc-wh fs-xs fw-5 ic-p">Sign up today and receive a 5% discount on your purchase, up to $50.00. Discount will be applied automatically upon checkout. Offer does not apply to software purchases. </span>
                <br>
        </div>
        <form class="promotion-content" action="subscribe.php" method="post">
            <div class="input_container">
                <input type="text" placeholder="First Name" name="newsletterFirstName" id="newsletterFirstName">
                <input type="text" placeholder="Last Name" name="newsletterLastName" id="newsletterLastName">
            </div>
            <div class="input_container">
                <input type="email" placeholder="Email" name="newsletterEmail" id="newsletterEmail">
            </div>
            <!-- <div class="promotion-buttons"><a class="btn bd-3 bg-3 fc-wh td-no" href="https://www.icpdas-usa.com/login/register.php" style="font-size: 23px;">Sign Up</a></div> -->
            <div class="promotion-buttons"><button type="submit" class="btn bd-3 bg-3 fc-wh td-no" style="font-size: 23px;">Sign Up</button></div>
        </form>
    </div>
</div>