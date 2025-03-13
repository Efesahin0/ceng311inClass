<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $labels = [
        "name"     => "Name",
        "username" => "Username",
        "password" => "Password",
        "address"  => "Address",
        "country"  => "Country",
        "zip"      => "ZIP Code",
        "email"    => "Email",
        "sex"      => "Sex",
        "language" => "Language",
        "about"    => "About"
    ];

    $fields = array_keys($labels);
    echo "<h2>Preview</h2>";

    foreach ($fields as $field) {
        if ($field === "language") {
            if (isset($_POST[$field]) && !empty($_POST[$field])) {
                echo htmlspecialchars(implode(", ", $_POST[$field])) . "<br>";
            } else {
                echo $labels[$field] . ": not provided<br>";
            }
        } else {
            $value = isset($_POST[$field]) ? trim($_POST[$field]) : "";
            if ($value === "") {
                echo $labels[$field] . ": not provided<br>";
            } else {
                echo htmlspecialchars($value) . "<br>";
            }
        }
    }
} else {
    echo "No form data submitted.";
}
?>
