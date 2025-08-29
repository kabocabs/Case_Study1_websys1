<?php
$name        = "Arjay Cabiles";
$title       = "Software Engineer";
$phone       = "0917 123 4567";
$email       = "arjay.cabiles@email.com";
$linkedin    = "linkedin.com/in/arjay-cabiles";
$gitlab      = "gitlab.com/arjay-cabiles";
$address     = "Binalonan, Pangasinan, Philippines";
$dob         = "15 Dec 2000";
$gender      = "Male";
$nationality = "Filipino";

// About
$about = "Driven software engineer with 1 years of experience in developing and testing mobile and web applications. Skilled in PHP, MySQL, and Flutter.";

// Education
$education = [
    [
        "year" => "2014–2019",
        "degree" => "High School Diploma",
        "school" => "Pangasinan National High School",
        "score" => "80%",
        "activities" => ["Sports Commission", "ICT Room Mentanance"]
    ],
    [
        "year" => "2022–2026",
        "degree" => "Bachelor of Science in Information Technology",
        "school" => "Pangasinan State University",
        "score" => "CGPA: 1.75",
        "specialization" => "Web and Mobile Application Development"
    ]
];


$experience = [
    [
        "year" => "Sept  2025 – Present",
        "title" => "Software Engineer",
        "company" => "Wills Fargo.",
        "tasks" => [
            "Developed and maintained web applications using PHP and MySQL.",
            "Designed and deployed REST APIs for mobile integration.",
            "Led a team project to create an inventory management system."
        ]
    ]
];


$skills = ["PHP", "MySQL", "HTML, CSS, JS", "Flutter", "Git/GitHub", "C++"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resume - <?php echo $name; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .header { display: flex; align-items: center; }
        .header img { width: 120px; height: 120px; border-radius: 50%; margin-right: 20px; }
        .info { background: #1E90FF; color: white; padding: 15px; border-radius: 10px; }
        .section { margin-top: 20px; }
        .section h2 { border-bottom: 2px solid #1E90FF; padding-bottom: 5px; }
        ul { margin: 0; padding-left: 20px; }
    </style>
</head>
<body>

<div class="header">
    <img src="profile.jpg" alt=" "> <!-- Use your own picture -->
    <div>
        <h1><?php echo $name ?: "NA"; ?></h1>
        <h3><?php echo $title ?: "NA"; ?></h3>
    </div>
</div>

<div class="info">
    <p><b>Phone:</b> <?php echo $phone ?: "NA"; ?></p>
    <p><b>Email:</b> <?php echo $email ?: "NA"; ?></p>
    <p><b>LinkedIn:</b> <?php echo $linkedin ?: "NA"; ?></p>
    <p><b>GitLab:</b> <?php echo $gitlab ?: "NA"; ?></p>
    <p><b>Address:</b> <?php echo $address ?: "NA"; ?></p>
    <p><b>Date of Birth:</b> <?php echo $dob ?: "NA"; ?></p>
    <p><b>Gender:</b> <?php echo $gender ?: "NA"; ?></p>
    <p><b>Nationality:</b> <?php echo $nationality ?: "NA"; ?></p>
</div>

<div class="section">
    <h2>About</h2>
    <p><?php echo $about ?: "NA"; ?></p>
</div>

<div class="section">
    <h2>Education</h2>
    <?php foreach ($education as $edu): ?>
        <p><b><?php echo $edu["year"]; ?></b> - <?php echo $edu["degree"]; ?>, <?php echo $edu["school"]; ?> (<?php echo $edu["score"]; ?>)</p>
        <?php if (!empty($edu["activities"])): ?>
            <ul>
                <?php foreach ($edu["activities"] as $act): ?>
                    <li><?php echo $act; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <?php if (!empty($edu["specialization"])): ?>
            <p><i>Specialization:</i> <?php echo $edu["specialization"]; ?></p>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<div class="section">
    <h2>Experience</h2>
    <?php foreach ($experience as $exp): ?>
        <p><b><?php echo $exp["year"]; ?></b> - <?php echo $exp["title"]; ?>, <?php echo $exp["company"]; ?></p>
        <ul>
            <?php foreach ($exp["tasks"] as $task): ?>
                <li><?php echo $task; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</div>

<div class="section">
    <h2>Skills</h2>
    <ul>
        <?php foreach ($skills as $skill): ?>
            <li><?php echo $skill; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>
