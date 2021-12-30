<!DOCTYPE html>
<html lang="en">

<head>
    <title>Patient Information</title>
    <link rel="stylesheet" href="..\css\Plasma.css">
</head>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h3><span class="highlight">Plasma Banak Managenmet System</span></h3>
            </div>
            <div id="upperLeft">
                <nav>
                    <ul>
                        <li><a href="..\Home.php" onclick="wsListSalons();" name="signout">Sign Out</a></li>
                    </ul>
                </nav>
            </div>
            <nav>
                <ul>
                    <li><a href="PatientHome.php">Home</a></li>
                    <li class="current"><a href="PatientInfrmation.php"> Patient Infrmation</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section style="  min-height: 100px">
    </section>


    <form action="PatientInformation.php" method="post">
        <table class="center">
            <thead>
                <th>
                    <h2>Patient Name</h2>
                </th>
                <th>
                    <h2>Blood Group</h2>
                </th>
                <th>
                    <h2>Contrac Number</h2>
                </th>
                <th>
                    <h2>NID</h2>
                </th>
                <th>
                    <h2>DOB</h2>
                </th>
                <th>
                    <h2>Address</h2>
                </th>
                <th>
                    <h2>Action</h2>
                </th>

            </thead>
            <tr><br></tr>

            <tr>
                <td>Mr. ABC</td>
                <td>B+</td>
                <td>01717171717</td>
                <td>1234567899</td>
                <td>25/12/2000</td>
                <td>Dhaka</td>
                <td><button style="color: red;" type="submit" name="updateButton"> Contrac </button></td>
            </tr>
            <tr>
                <td>Mr. ABC</td>
                <td>B+</td>
                <td>01717171717</td>
                <td>1234567899</td>
                <td>25/12/2000</td>
                <td>Dhaka</td>
                <td><button style="color: red;" type="submit" name="updateButton"> Contrac </button></td>
            </tr>
        </table>
        <style>
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;

                padding: 2px 5px;
                text-align: center;
            }


            table.center {
                margin-left: auto;
                margin-right: auto;
            }

            table thead {
                background-color: rgb(red, green, blue);
                border: 3px solid black;
            }

            table tr:not(:first-child):hover {
                background-color: #666;
                color: #ffffff
            }
        </style>
    </form>

    </section>
    </div>
</body>

</html>