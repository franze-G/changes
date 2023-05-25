<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="addrec.css" />

  <!----===== Iconscout CSS ===== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

  <title>Responsive Regisration Form</title>
</head>

<body>
  <!-- navigation bar -->
  <nav class="nav">
    <a href="#" class="brand-name">Barangay 48, Pasay City</a>
    <ul class="nav-links">
      <li><a href="userdashboard.php">Dashboard</a></li>
      <li><a href="useraddrec.php">Application</a></li>
      <li><a href="indexuser.php">List</a></li>
    </ul>
    <img class="logo-png" src="48.png" alt="PasayLogo" id="brngyPic" />
  </nav>

  <div class="container">
    <header>Registration</header>

    <form action="#">
      <div class="form first">
        <div class="details personal">
          <span class="title">Personal Details</span>

          <div class="fields">
            <div class="input-field">
              <label>First Name</label>
              <input type="text" placeholder="Enter your first name" required value="<?php if (isset($_GET['FirstName']))
                                                                                        echo ($_GET['FirstName']); ?>" />
            </div>

            <div class="input-field">
              <label>Middle Name</label>
              <input type="text" placeholder="Enter middle name" required value="<?php if (isset($_GET['MiddleName']))
                                                                                    echo ($_GET['MiddleName']); ?>" />
            </div>

            <div class="input-field">
              <label>Last Name</label>
              <input type="text" placeholder="Enter your last name" required value="<?php if (isset($_GET['LastName']))
                                                                                      echo ($_GET['LastName']); ?>" />
            </div>

            <div class="input-field">
              <label>Age</label>
              <input type="number" placeholder="Enter mobile number" required value="<?php if (isset($_GET['MobileNum']))
                                                                                        echo ($_GET['MobileNum']); ?>" />
            </div>

            <div class="input-field">
              <label>Gender</label>
              <select>
                <option disabled selected>Select gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
              </select>
            </div>

            <div class="input-field">
              <label>Birth Date</label>
              <input type="date" required value="<?php if (isset($_GET['BirthDatee']))
                                                    echo ($_GET['BirthDatee']); ?>" />
            </div>
          </div>
        </div>
        <!-- di ko lang sure dito sa mga id so di ko muna nilagay yung php thingy -->
        <!-- part 2 -->
        <div class="details ID">
          <span class="title">Identity Details</span>

          <div class="fields">
            <div class="input-field">
              <label>ID Type</label>
              <input type="text" placeholder="Enter ID type" />
            </div>

            <div class="input-field">
              <label>ID Number</label>
              <input type="text" placeholder="Enter ID number" />
            </div>

            <div class="input-field">
              <label>Issued Name</label>
              <input type="text" placeholder="Enter issued name" />
            </div>

            <div class="input-field">
              <label>Issued State</label>
              <input type="text" placeholder="Enter issued state" />
            </div>

            <div class="input-field">
              <label>Issued Date</label>
              <input type="date" />
            </div>

            <div class="input-field">
              <label>Expiry Date</label>
              <input type="date" />
            </div>
          </div>

          <button class="nextBtn">
            <span class="btnText">Next</span>
            <i class="uil uil-navigator"></i>
          </button>
        </div>
      </div>
      <!-- dito sa address i think need i seperate yung province,city,house no.  etc etc -->
      <div class="form second">
        <div class="details address">
          <span class="title">Address Details</span>

          <div class="fields">
            <div class="input-field">
              <label>Address</label>
              <input type="text" placeholder="Permanent or Temporary" value="<?php
                                                                              if (isset($_GET['AddressType']))
                                                                                echo ($_GET['AddressType']); ?>" />
            </div>

            <div class="input-field">
              <label>Nationality</label>
              <input type="text" placeholder="Enter nationality" value="<?php
                                                                        if (isset($_GET['Nationality']))
                                                                          echo ($_GET['Nationality']); ?>" />
            </div>

            <div class="input-field">
              <label>Province</label>
              <input type="text" placeholder="Enter your province" value="<?php
                                                                          if (isset($_GET['Province']))
                                                                            echo ($_GET['Province']); ?>" />
            </div>

            <div class="input-field">
              <label>City</label>
              <input type="text" placeholder="Enter your city" value="<?php
                                                                      if (isset($_GET['City']))
                                                                        echo ($_GET['City']); ?>" />
            </div>

            <div class="input-field">
              <label>Street</label>
              <input type="number" placeholder="Enter block street name" value="<?php
                                                                                if (isset($_GET['StreetName']))
                                                                                  echo ($_GET['StreetName']); ?>" />
            </div>

            <div class="input-field">
              <label>House Number</label>
              <input type="number" placeholder="Enter house number" value="<?php
                                                                            if (isset($_GET['HouseNum']))
                                                                              echo ($_GET['HouseNum']); ?>" />
            </div>
          </div>
        </div>

        <div class="details family">
          <span class="title">Family Details</span>

          <div class="fields">
            <div class="input-field">
              <label>Father Name</label>
              <input type="text" placeholder="Enter father name" value="<?php
                                                                        if (isset($_GET['FatherName']))
                                                                          echo ($_GET['FatherName']); ?>" />
            </div>

            <div class="input-field">
              <label>Mother Name</label>
              <input type="text" placeholder="Enter mother name" value="<?php
                                                                        if (isset($_GET['MotherName']))
                                                                          echo ($_GET['MotherName']); ?>" />
            </div>

            <div class="input-field">
              <label>Grandfather</label>
              <input type="text" placeholder="Enter grandfther name" value="<?php
                                                                            if (isset($_GET['Grandpapi']))
                                                                              echo ($_GET['Grandpapi']); ?>" />
            </div>

            <div class="input-field">
              <label>Spouse Name</label>
              <input type="text" placeholder="Enter spouse name" value="<?php
                                                                        if (isset($_GET['SpouseName']))
                                                                          echo ($_GET['SpouseName']); ?>" />
            </div>

            <div class="input-field">
              <label>Father in Law</label>
              <input type="text" placeholder="Father in law name" value="<?php
                                                                          if (isset($_GET['FatherinLaw']))
                                                                            echo ($_GET['FatherinLaw']); ?>" />
            </div>

            <div class="input-field">
              <label>Mother in Law</label>
              <input type="text" placeholder="Mother in law name" value="<?php
                                                                          if (isset($_GET['MotherinLaw']))
                                                                            echo ($_GET['MotherinLaw']); ?>" />
            </div>
          </div>

          <div class="buttons">
            <div class="backBtn">
              <i class="uil uil-navigator"></i>
              <span class="btnText">Back</span>
            </div>

            <button class="sumbit">
              <span class="btnText">Submit</span>
              <i class="uil uil-navigator"></i>
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <script src="btnOnClick.js"></script>
</body>

</html>