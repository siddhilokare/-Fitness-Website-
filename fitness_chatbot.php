<?php
$servername = "localhost";
$username = "root";
$password = ""; // Leave it empty if you haven't set a password
$database = "fitness_bot";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
if (isset($_POST['user_message'])) {
    $user_message = $_POST['user_message'];

    if (!empty($user_message)) {
        // Check if the user's message is a common greeting
        $user_message = strtolower($user_message);

        if (in_array($user_message, ['hello', 'hey', 'hi'])) {
            // Custom response for common greetings
            $bot_response = "Hello! How can I assist you today?";
        } else {
            // Check predefined answers
            $query = "SELECT answer FROM predefined_answers WHERE keyword = ?";
            if ($stmt = $conn->prepare($query)) {
                $stmt->bind_param("s", $user_message);
                $stmt->execute();
                $stmt->bind_result($predefined_answer);
                $stmt->fetch();
                $stmt->close();
            } else {
                // Log errors to the PHP error log for debugging
                error_log("MySQL Error: " . $conn->error);
                $bot_response = "Error in processing your request. (Database Error)";
            }

            if (!empty($predefined_answer)) {
                // Use predefined answer
                $bot_response = $predefined_answer;
            } else {
                // Default response when no predefined answer is found
                $bot_response = "I'm not sure how to respond to that. Please feel free to ask another question.";
            }
        }

        echo json_encode(['bot_response' => $bot_response]);
    } else {
        echo json_encode(['bot_response' => "Please enter a message."]);
    }
} else {
    echo json_encode(['bot_response' => "Please enter a message."]);
}

// Close the database connection
$conn->close();
?>
