
<nav class="nav navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo-left-15 pull-left">
                    <div class="h4" id="logo"><a href="index.php">Blood Donation Management</a></div>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="pull-right">
                    <ul class="nav nav-pills">
                        <li class="<?php if (isset($setHomeActive)) { echo $setHomeActive; } else { echo '';}?>"><a href="home.php">Home</a></li>
                        <li class="<?php if (isset($setEmployeeActive)) { echo $setEmployeeActive; } else { echo '';}?>"><a href="employee.php">Employees</a></li>
                        <li class="<?php if(isset($setAvailabilityActive)) {echo $setAvailabilityActive;} else {echo '';} ?>">
                            <a href="availability.php">Check Availability</a>
                        </li>
                        <li class="<?php if(isset($setMemberActive)){ echo $setMemberActive; } else { echo ''; } ?>">
                            <a href="members.php">Our Members</a>
                        </li>
                        <li class="<?php if(isset($setDonorsActive)){ echo $setDonorsActive; } else { echo ''; } ?>">
                            <a href="donors.php">Donors</a>
                        </li>
                        <li class="<?php if(isset($setAddNewsActive)){ echo $setDonorsActive; } else { echo ''; } ?>">
                            <a href="newsadd.php">Add News</a>
                        </li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</nav>
        

