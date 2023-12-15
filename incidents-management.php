<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=R, initial-scale=1.0">
    <title>Incidents Management</title>
    <link rel="stylesheet" href="incidents-management.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            <img src="Logo.png" alt="Logo">
        </div>
        <ul class="menu">
            <li>
                <a href="incidents-management.php">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <span>Fire Incidents</span>
            </li>
            <li>
                <a href="predictiveanalysis.php">
                    <i class="fa-solid fa-computer"></i>
                    <span>Predictive Analysis</span>
            </li>
            <li>
                <a href="profile.php">
                    <i class="fa-regular fa-user"></i>
                    <span>Profile</span>
            </li>
            <li>
                <a href="aboutus.php">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>About Us</span>
            </li>
            <li class="logout">
                <a href="#">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header-title">
                <H2>Incidents Management</H2>
            </div>
            <div class="search-edit">
                <div class="search--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
                <div class="edit--button">
                    <button>
                        <i class="fa-regular fa-pen-to-square"></i>
                        Edit
                    </button>
                </div>
            </div>
        </div>

        <div class="table-wrapper">
            <div class="table-container">
                <table>
                    <thead>
                        <th>Check</th>
                        <th>Image</th>
                        <th>Incident ID</th>
                        <th>Date</th>
                        <th>Address</th>
                        <th>Type of Occupancy</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>null</td>
                            <td>3021</td>
                            <td>02/29/2023</td>
                            <td>Regency National High School</td>
                            <td>Security Guard</td>
                            <td>
                                <div class="circle"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>null</td>
                            <td>3021</td>
                            <td>02/29/2023</td>
                            <td>Iponan National High School</td>
                            <td>Teacher</td>
                            <td>
                                <div class="circle"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>null</td>
                            <td>3021</td>
                            <td>02/29/2023</td>
                            <td>Cagayan National High School</td>
                            <td>Janitor</td>
                            <td>
                                <div class="circle"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>null</td>
                            <td>3021</td>
                            <td>02/29/2023</td>
                            <td>Initao Comprehensive High School</td>
                            <td>Principal</td>
                            <td>
                                <div class="circle"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>null</td>
                            <td>3021</td>
                            <td>02/29/2023</td>
                            <td>Bulua National High School</td>
                            <td>Security Guard</td>
                            <td>
                                <div class="circle"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>null</td>
                            <td>3021</td>
                            <td>02/29/2023</td>
                            <td>MSU Naawan</td>
                            <td>Teachers</td>
                            <td>
                                <div class="circle"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>null</td>
                            <td>3021</td>
                            <td>02/29/2023</td>
                            <td>Bugo National High School</td>
                            <td>Teacher</td>
                            <td>
                                <div class="circle"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>null</td>
                            <td>3021</td>
                            <td>02/29/2023</td>
                            <td>Initao Central School</td>
                            <td>Assitant Director</td>
                            <td>
                                <div class="circle"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>null</td>
                            <td>3021</td>
                            <td>02/29/2023</td>
                            <td>USTP</td>
                            <td>Tanod</td>
                            <td>
                                <div class="circle"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>null</td>
                            <td>3021</td>
                            <td>02/29/2023</td>
                            <td>Xavier Academy</td>
                            <td>Tanod</td>
                            <td>
                                <div class="circle"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="update-incidents">
            <div class="form-header">
                <div class="form-title">
                    <h2>Update Incidents</h2>
                </div>
                <div class="button-wrapper">
                    <button class="update-button" type="submit">Update</button>
                    <button class="cancel-button" type="submit">Cancel</button>
                </div>
            </div>

            <div class="form-container">
                <div class="flex-wrapper">
                    <div class="left">
                        <label class="title">Responder Information</label>
                        <div class="responder-information">
                            <div class="form-group">
                                <label>Ground Commander: </label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Time/Date Reported: </label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Responding Team: </label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Involved: </label>
                                <input type="text">
                            </div>
                        </div>
                        <label class="title">Incident Information</label>
                        <div class="incident-information">
                            <div class="form-group">
                                <label>Name of Owner: </label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Fatality: </label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Estimated Damages: </label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Injured: </label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Number of House/Establishments: </label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Number of Families Affected: </label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Number of Trucks Responded: </label>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <label class="title">Alarm Status</label>
                        <div class="alarm-status">
                            <div class="form-group">
                                <label>Time of Arrival: </label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Fire Out: </label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Update Status: </label>
                                <select class="form-select">
                                    <option>done</option>
                                    <option>not done</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="file">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var editButtons = document.querySelectorAll(".edit--button");
            var tableWrapper = document.querySelector(".table-wrapper");
            var updateIncidents = document.querySelector(".update-incidents");
            var cancelButton = document.querySelector(".cancel-button");

            editButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    tableWrapper.style.display = "none";
                    updateIncidents.style.display = "block";
                });
            });

            cancelButton.addEventListener("click", function () {
                updateIncidents.style.display = "none";
                tableWrapper.style.display = "block";
            });
        });
    </script>
</body>

</html>