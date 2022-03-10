<?php include('header.php'); ?>
<?php include('function.php'); ?>

<?php profil_title('Profile', 180, 'gradient'); ?>


<style>
    .profile {
        margin-top: -30%;
        z-index: 9999;
        position: fixed;
        width: 100%;
    }

    .students-pict img {
        max-width: 40%;
    }
</style>


<div class="page light profile">
    <div class="students-pict text-center">
        <img src="./images/asset/Students.png">
        <h5 class="item-title">Status: Active</h5>

    </div>
    <div class="profile-info-list">
        <ul>
            <li>
                <label class="title">Name</label>
                <span class="value">Foltama</span>
            </li>
            <li>
                <label class="title">Student ID</label>
                <span class="value">0123456789</span>
            </li>
            <li>
                <label class="title">Phone Number</label>
                <span class="value">(+62) 813 2345678</span>
            </li>
            <li>
                <label class="title">Email</label>
                <span class="value">info@example.com</span>
            </li>
        </ul>
        <div class="text-center">
            <a href="/" class="button button-large buttonsd">
                <span>Sign Out</span></a>
        </div>
    </div>

    <a href="#" class="btn btn-s mt-2 mb-4 mx-5 btn-full bgsd-pink rounded-m text-uppercase font-900">Sign Out</a>

</div>



<!-- end of page content-->








</div>
<!-- end of page content-->

<?php include('footer.php'); ?>