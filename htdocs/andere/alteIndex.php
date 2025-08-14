<head>
<link rel="stylesheet" href="style.css">
<style>
        .gradient-text {
            background: linear-gradient(45deg, #ff0000, #ff9900, #ffff00, #00ff00, #00ffff, #0000ff, #ff00ff);
            background-size: 200% 200%;
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            animation: gradient-animation 3s ease infinite;

        }

        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>
<body class="bodyessential">


<?php
$url = "https://swapi.info/api/people";
$response = file_get_contents($url);
$people = json_decode($response, true);
$responseText = $people[2]['name'];
// echo $responseText;




echo "<table border='1'>
    <thead>
        <tr>
            <th>Name</th>
            <th>Größe</th>
        </tr>
    </thead>
<tbody>";

foreach ($people as $person) {
    echo "<tr class='gradient-border'>";
    echo "<td class='gradient-text'>" . $person['name'] . "</td>";
    echo "<td class='gradient-text'>" . $person['height'] . "</td>";
    echo "</tr>";
}
?>
</body>