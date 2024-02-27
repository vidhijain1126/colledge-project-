<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        aside {
            color: #fff;
            display: grid;
            width: 30%;
            padding-left: 20px;
            height: 100vh;
            background-image: linear-gradient(360deg, #5D5E66, #3D3F47);
            border-top-right-radius: 80px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.15);
        }

        aside a {
            font-size: 13px;
            font-weight: bold;
            color: #fff;
            display: block;
            padding: 12px;
            padding-left: 10%;
            text-decoration: none;
        }

        aside a:hover {
            color: #3D3F47;
            background: #fff;
            outline: none;
            position: relative;
            background-color: #fff;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            font-weight: bold;
        }

        aside a.clicked {
            background-color: #fff;
            color: #3D3F47;
            outline: none;
            position: relative;
            background-color: #fff;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            font-weight: bold;
        }

        aside a:active {
            background-color: #fff;
            color: #3D3F47;
            outline: none;
            position: relative;
            background-color: #fff;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            font-weight: bold;
        }

        aside p {
            margin: 0;
            padding: 40px 0;
        }

        body {
            font-family: 'Roboto';
            width: 100%;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: row;
        }

        .main_contaner {
            margin-top: 40px;
            display: flex;
            width: 100%;
            flex-wrap: wrap;
        }

        .contaner {
            display: flex;
            flex-wrap: wrap;
            width: 22%;
            height: 150px;
            margin: 10px;
            line-height: 150px;
            background-color: #3D3F47;
            border-radius: 10px;
            color: #fff;
            font-weight: 500;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.15);
        }

        .big {
            width: 100%;
            height: 150px;
            background-color: #3D3F47;
            display: flex;
            line-height: 150px;
            border-radius: 10px;
            font-weight: 500;
            color: #fff;
            margin: 0px 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.15);
        }

        .big a {
            width: 100%;
            text-decoration: none;
            color: #fff;
            text-align: center;
        }

        .contaner a {
            width: 100%;
            text-decoration: none;
            color: #fff;
            text-align: center;
        }

        .spacee {
            height: 320px;
        }

        .modal {
            display: none;
            position: absolute;
            position: fixed;
            z-index: 1;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            margin: 0 auto;
            padding: 20px;
            width: 70%;
            max-width: 600px;
            border-radius: 8px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        #close {
            color: white;
            float: left;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            display: none;
        }

        #close:hover,
        #close:focus {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.15);
            width: 70%;
            max-width: 600px;
        }

        input,
        select,
        textarea {
            display: block;
            margin-bottom: 20px;
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 50%;
            margin: 0 auto;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-color: #3D3F47;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #3D3F47;
        }

        input[type="checkbox"] {
            display: inline;
            width: 5%;
        }

        fieldset {
            margin-bottom: 20px;
            padding-top: 10px;
        }

        label {
            margin-bottom: 10px;
        }

        @media only screen and (max-width: 850px) {
            aside {
                display: none;
                position: absolute;
                width: 30%;
            }

        }

        #sidebarToggle {
            display: none;
            background: none;
            color: #fff;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }

        @media only screen and (max-width: 850px) {
            #sidebarToggle {
                display: block;
                position: absolute;
            }

            .contaner {
                width: 28.5%;
            }
        }

        h1 {
            text-align: center;
            padding: 10px;
            margin-bottom: 30px;
            margin-top: 0px;
            color: #fff;
            background-color: #3D3F47;
            width: 100%;
        }

        .achievements-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 10px;
            margin: 0px 10px 10px 0;
        }

        .achievement {
            width: 310px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease-in-out;
            margin: 3px;
            text-align: center;
        }

        .achievement:hover {
            transform: translateY(-5px);
        }

        .achievement h2 {
            font-size: 20px;
            margin-bottom: 10px;
            padding: 10px 20px;
        }

        .achievement p {
            font-size: 16px;
            line-height: 1.6;
            padding: 0px 20px 20px 20px;
        }

        img {
            width: 100%;
            height: 150px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function addStuForm() {
            document.getElementById("studentForm").style.display = "block";
        }

        function closeStuForm() {
            document.getElementById("studentForm").style.display = "none";
        }

        function addCoachForm() {
            document.getElementById("coachForm").style.display = "block";
        }

        function closeCoachForm() {
            document.getElementById("coachForm").style.display = "none";
        }

        function displaySidebar() {
            document.getElementById("sidebar").style.display = "block";
            document.getElementById("sidebarToggle").style.display = "none";
            document.getElementById("close").style.display = "block";
            document.getElementById("close").style.zIndex = '1';
        }

        function closeAside() {
            document.getElementById("sidebar").style.display = "none";
            document.getElementById("sidebarToggle").style.display = "block";
            document.getElementById("close").style.display = "none";
        }
        
        $(document).ready(function () {
    $('#sports').change(function () {
        var sports = $(this).val();

        if (sports !== 'default') {
            $.ajax({
                url: 'getCoach.php',
                method: 'POST',
                data: { sports: sports },
                success: function (response) {
                    $('#coach').val(response); 
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });

            $.ajax({
                url: 'getFees.php', 
                method: 'POST',
                data: { sports: sports },
                success: function (feesResponse) {
                    $('#fees').val(feesResponse);
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        }
    });

    $('#sports').change(function () {
        var selectedSport = $(this).val();
        if (selectedSport !== 'default') {
            $.ajax({
                url: 'fetchstudetails.php',
                method: 'POST',
                data: { sports: selectedSport },
                success: function (response) {
                    var slotData = JSON.parse(response);
                    if (slotData.hasOwnProperty('slots')) {
                        slotData.slots.forEach(function (slot) {
                            if (slot.count >= 15) {
                                $('#slot option[value="' + slot.slot + '"]').prop('disabled', true);
                            } else {
                                $('#slot option[value="' + slot.slot + '"]').prop('disabled', false);
                            }
                        });
                    }
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        }
    });
});

  function validateNumber(input) {
    var numericValue = parseFloat(input.value);
    if (isNaN(numericValue) || numericValue < 0) {
      alert("Please enter a valid non-negative number.");
      input.value = ''; 
    }
  }

  document.getElementById("myForm").addEventListener("submit", function(event) {
    var numericField = document.getElementById("fees").value;
    var textField = document.getElementById("name").value;

    var numericValue = parseFloat(numericField);

    if (isNaN(numericValue) || numericValue < 0) {
      alert("Please enter a valid non-negative number.");
      event.preventDefault(); 
    }

    if (textField.trim() === '') {
      alert("Please enter some text.");
      event.preventDefault();
    }
  });
    </script>
</head>

<body>
    <button id="sidebarToggle" onclick="displaySidebar()">☰</button>
    <span id="close" onclick="closeAside()">&times;</span>
    <aside id="sidebar">
        <p><i class="fa fa-long-arrow-left"></i> &nbsp;Admin Dashboard</p>
        <a href="view_slot.php">View Slot</a>
        <a href="fetch_stu_details.php">Player Info</a>
        <a href="fetch_coach_details.php">Couch Info</a>
        <a href="#" onclick="addStuForm()">Add new player</a>
        <a href="#" onclick="addCoachForm()">Add new couch</a>
        <a href="fees.php">Fees Records</a>
        <a href="logout.php">Log-out</a>
        <div class="spacee"></div>
    </aside>

    <div class="achievements-container">
        <h1>Sports Academy Achievements</h1>
        <div class="achievement">
            <img src="immages/basketball.webp "></img>
            <h2>Championship Trophy</h2>
            <p>Our academy's team won the regional championship trophy in basketball for the third consecutive year.</p>
        </div>
        <div class="achievement">
            <img src="immages/cricket.webp"></img>
            <h2>Championship Trophy</h2>
            <p>Our academy's team won the state championship trophy in Cricket for the two consecutive year.</p>
        </div>
        <div class="achievement">
            <img src="immages/champions.jpg"></img>
            <h2>Player of the Year</h2>
            <p>One of our athletes received the prestigious "Player of the Year" award in athletics at the national
                level.</p>
        </div>
        <div class="achievement">
            <img src="immages/badminton.jpg"></img>
            <h2>Player of the Year</h2>
            <p>One of our athletes received the "Player of the Year" award in Badminton at the national level.</p>
        </div>
        <div class="achievement">
            <img src="immages/playeroftheyear.webp"></img>
            <h2>Player of the Year</h2>
            <p>One of our athletes received the "Player of the Year" award in karate in state level.</p>
        </div>
        <div class="achievement">
            <img src="immages/playeroftheyear3.webp"></img>
            <h2>Best Player</h2>
            <p>One of our athletes received the "Best Player" award in karate in state level.</p>
        </div>
        <div class="achievement">
            <img src="immages/coach.webp"></img>
            <h2>Best Coach Award</h2>
            <p>Our academy's head coach received the "Best Coach" award at the state level for outstanding coaching.</p>
        </div>
        <div class="achievement">
            <img src="immages/playeroftheyear2.jpg"></img>
            <h2>Best Coach Award</h2>
            <p>Our academy's head coach received the "Best Coach" award at the district level for outstanding coaching.
            </p>
        </div>
    </div>

    <div id="coachForm" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeCoachForm()">&times;</span>
            <form action="coach_form.php" method="post">
                <label for="tname1">Name:</label>
                <input type="text" id="tname1" name="tname" required>
                <label for="sport">Sports:</label>
                <select id="sport" name="sports" required>
                    <option value="default">Select Sports</option>
                    <option value="Basketball">Basketball</option>
                    <option value="Cricket">Cricket</option>
                    <option value="Running">Running</option>
                    <option value="Badminton">Badminton</option>
                    <option value="Karate">Karate</option>
                </select>
                <label for="mail">Mail:</label> <input type="email" id="email" name="email" required>
                <label for="phone_no">Phone No.:</label> <input type="tel" id="tphone" name="tphone" required>
                <label for="exprience">Exprience:</label> <input type="number" id="experience" name="experience"
                    required>
                <label for="address">Address:</label><textarea id="taddress" name="taddress" required></textarea>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

    <div id="studentForm" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeStuForm()">&times;</span>
            <form action="stu_form.php" method="post">
                <label for="tname">Name:</label> <input type="text" id="name" name="name" required>
                <label for="sports">Sports:</label>
                <select id="sports" name="sports" required>
                    <option value="default">Select Sports</option>
                    <option value="Basketball">Basketball</option>
                    <option value="Cricket">Cricket</option>
                    <option value="Running">Running</option>
                    <option value="Badminton">Badminton</option>
                    <option value="Karate">Karate</option>
                </select>
                <label for="slot">slot :</label>
                <select id="slot" name="slot" required>
                    <option value="default">Select Slot</option>
                    <option value="4PM - 5PM">4PM - 5PM</option>
                    <option value="5PM -6PM">5PM -6PM</option>
                </select>
                <label for="coach">Coach :</label> <input type="text" id="coach" name="coach" required>
                <label for="parents">Parents :</label> <input type="text" id="parents" name="parents" required>
                <label for="phone_no">Phone No.:</label> <input type="tel" id="phone" name="phone" required>
                <label for="dob">Date of Birth:</label> <input type="date" id="dob" name="dob" required>
                <label for="address">Address:</label><input type="text" id="address" name="address" required>
                <label for="fees">Fees:</label><input type="number" id="fees" name="fees" required>

                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>