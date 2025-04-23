<?php
session_start();
include("../Functions/db_connection.php");

// Check if employer is logged in
if (!isset($_SESSION['employerID'])) {
    header('location:login.php');
    exit();
}

// Get employer details
$employer_id = $_SESSION['employerID'];
$select_employer = "SELECT * FROM employers WHERE employerID = '$employer_id'";
$result_employer = mysqli_query($conn, $select_employer);
$employer = mysqli_fetch_assoc($result_employer);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Dashboard</title>
    <link rel="stylesheet" href="../For_design/empdash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
    <div class="sidebar">
        <h2><i class="fas fa-briefcase"></i> Employer Dashboard</h2>
        <ul>
            <li><i class="fas fa-chart-line"></i> Dashboard</li>
            <li><i class="fas fa-users"></i> Recruitment</li>
            <li><i class="fas fa-comments"></i> Interview</li>
            <li><i class="fas fa-user-plus"></i> Onboarding</li>
            <li><i class="fas fa-tasks"></i> Interview Task</li>
            <li><i class="fas fa-calendar-check"></i> Appointments</li>
            <li><i class="fas fa-chalkboard-teacher"></i> Training</li>
        </ul>
        <form action="logout.php" method="post">
            <button class="logout"><i class="fas fa-sign-out-alt"></i> Logout</button>
        </form>
    </div>

    <div class="main">
        <header>
            <input type="text" placeholder="Search something...">
            <button class="add-new">Add New</button>
        </header>
        <div class="job-modal" id="jobModal">
    <div class="job-modal-content">
        <span class="close-btn" id="closeJobModal">&times;</span>
        <h3><i class="fas fa-briefcase"></i> Post a New Job</h3>

        <form id="jobForm" action="post_job.php" method="POST">
            <input type="hidden" name="employerID" value="<?php echo htmlspecialchars($employer['employerID']); ?>">

            <label for="jobTitle"><i class="fas fa-heading"></i> Job Title</label>
            <input type="text" id="jobTitle" name="jobTitle" placeholder="e.g. Frontend Developer" required>

            <label for="description"><i class="fas fa-align-left"></i> Job Description</label>
            <textarea id="description" name="description" rows="4" placeholder="Describe the role in detail..." required></textarea>

            <label for="salary"><i class="fas fa-dollar-sign"></i> Salary</label>
            <input type="text" id="salary" name="salary" placeholder="e.g. $60,000 - $80,000" pattern="^\$\d{1,3}(,\d{3})*(\s*-\s*\$\d{1,3}(,\d{3})*)?$" required>

            <label for="benefits"><i class="fas fa-gift"></i> Benefits</label>
            <textarea id="benefits" name="benefits" rows="2" placeholder="e.g. Health insurance, Paid leave" required></textarea>

            <label for="schedule"><i class="fas fa-calendar-alt"></i> Schedule</label>
            <textarea id="schedule" name="schedule" rows="2" placeholder="e.g. Full-time, Mon–Fri" required></textarea>

            <label for="requirements"><i class="fas fa-check-circle"></i> Requirements</label>
            <textarea id="requirements" name="requirements" rows="3" placeholder="Minimum qualifications..." required></textarea>

            <label for="skills"><i class="fas fa-tools"></i> Skills</label>
            <textarea id="skills" name="skills" rows="3" placeholder="e.g. React, Problem-solving" required></textarea>

            <label for="posted_date"><i class="fas fa-calendar-day"></i> Posted Date</label>
            <input type="date" id="posted_date" name="posted_date" required>

            <label for="status"><i class="fas fa-toggle-on"></i> Status</label>
            <select id="status" name="status" required>
                <option value="">-- Select Status --</option>
                <option value="Open">Open</option>
                <option value="Closed">Closed</option>
            </select>

            <button type="submit" class="submit-job"><i class="fas fa-paper-plane"></i> Post Job</button>
        </form>
    </div>
</div>

        <section class="welcome">
            <h3>Good Morning <?php echo htmlspecialchars($employer['Emp_email']); ?></h3>
            <p>You have 75+ new applications. A lot of work for today!</p>
            <button>Explore</button>
        </section>

        <section class="hire-needs">
            <h4>You Need to hire</h4>
            <div class="cards">
                <?php
                $roles = ["Content Developer", "Full Developer", "UI/UX Designer", "iOS Developer", "Android Developer"];
                foreach ($roles as $role) {
                    echo "<div class='card'>$role</div>";
                }
                ?>


            </div>
        </section>

        <section class="recruitment-progress">
            <h4>Recruitment Progress</h4>
            <table>
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Description</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $candidates = [
                        ["John Doe", "UI/UX Designer", "Tech Interview"],
                        ["Sam Emmanuel", "UI/UX Designer", "Resume Review"],
                        ["John Samuel", "Content Developer", "Final Interview"]
                    ];
                    foreach ($candidates as $index => $c) {
                        $class = $index === 1 ? 'class="highlight"' : '';
                        echo "<tr $class><td>{$c[0]}</td><td>{$c[1]}</td><td>{$c[2]}</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>

    <div class="sidebar-right">
        <div class="profile">
            <p><?php echo htmlspecialchars($employer['Emp_email']); ?></p>
        </div>
        <div class="calendar">
            <h4>Schedule Calendar</h4>
            <div class="dates">
                <?php foreach ([24, 25, 26, 27, 28] as $day) echo "<span>$day</span>"; ?>
            </div>
        </div>

        <div class="new-applicants">
            <h4>New Applicants</h4>
            <ul>
                <?php
                $applicants = ["Mike Tyson", "Zann Thomas", "Neeru Abraham", "John Samuel"];
                foreach ($applicants as $name) echo "<li>$name</li>";
                ?>
            </ul>
        </div>

        <div class="training">
            <h4>Ready For Training</h4>
            <div class="trainees">
                <?php
                $trainees = ["Alex", "Sam", "Maria"];
                foreach ($trainees as $trainee) echo "<div>$trainee</div>";
                ?>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="../For_design/dashboard.js"></script>
</body>

</html>