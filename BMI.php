
<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/bca19b6e15.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>BMI Calculator</h1>
    <div class="content">
        <form>
            <label for="weight">Enter your weight in kilograms:</label>
            <input type="text" id="weight" name="weight" required oninput="calculateBMI()"><br>

            <label for="height">Enter your height in meters:</label>
            <input type="text" id="height" name="height" step="0.01" required oninput="calculateBMI()"><br>

            <input type="button" value="Calculate BMI" onclick="calculateBMI()"><br><br>

            <label for="result">Your BMI:</label>
            <input type="number" id="result" name="result" readonly>
            <div id="status"></div>
        </form>
        <div class="homepage-link">
            <a href="fitness.php"><i class="fas fa-home"></i></a>
        </div>
        <canvas id="bmi-chart"></canvas>
    </div>
    <script>
        var status = "";
        var chart; // Define chart outside of the function.

        function calculateBMI() {
            var weight = parseFloat(document.getElementById("weight").value);
            var height = parseFloat(document.getElementById("height").value);
            var bmi = weight / (height * height);

            if (bmi < 18.5) {
                status = "Underweight";
            } else if (bmi < 25) {
                status = "Normal";
            } else if (bmi < 30) {
                status = "Overweight";
            } else {
                status = "Obese";
            }

            document.getElementById("result").value = bmi.toFixed(2);
            document.getElementById("status").innerHTML = status;

            if (chart) {
                chart.destroy(); // Destroy the existing chart before creating a new one.
            }

            chart = new Chart(document.getElementById("bmi-chart").getContext("2d"), {
                type: "doughnut",
                data: {
                    labels: ["Underweight", "Normal", "Overweight", "Obese"],
                    datasets: [{
                        data: [
                            getBMIStatusCount("Underweight"),
                            getBMIStatusCount("Normal"),
                            getBMIStatusCount("Overweight"),
                            getBMIStatusCount("Obese")
                        ],
                        backgroundColor: [
                            "#3e95cd",
                            "#8e5ea2",
                            "#3cba9f",
                            "#e8c3b9"
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    legend: {
                        position: "bottom"
                    },
                    title: {
                        display: true,
                        text: "BMI Status Chart"
                    }
                }
            });
        }

        function getBMIStatusCount(status) {
            var bmi = parseFloat(document.getElementById("result").value);
            if (status === "Underweight" && bmi < 18.5) {
                return 1;
            } else if (status === "Normal" && bmi >= 18.5 && bmi < 25) {
                return 1;
            } else if (status === "Overweight" && bmi >= 25 && bmi < 30) {
                return 1;
            } else if (status === "Obese" && bmi >= 30) {
                return 1;
            } else {
                return 0;
            }
        }
    </script>
    </script>
<style>
form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
    }

    .content {
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(4px);
        border-radius: 10px;
        text-align: center;
        width: 65%;
        height: 65%;
        margin: 0 auto; /* Center the container horizontally */
        padding: 20px; /* Add some padding to the container */
    }

    label {
        margin-top: 20px;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    input[type="text"] {
        padding: 8px;
        font-size: 16px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    input[type="button"] {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        font-size: 16px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        margin-top: 20px;
    }

    input[type="button"]:hover {
        background-color: #3e8e41;
    }

    input[type="number"][readonly] {
        background-color: #f2f2f2;
        cursor: not-allowed;
    }

    h1 {
        margin: 50px auto; /* Center the h1 element horizontally */
        margin-left : 580px;
    }

    .homepage-link {
        margin-top: -470px;
        float: right;
        margin-right: 80px;
        font-size: 1.5rem;
    }

    .homepage-link a {
        color: indianred;
    }

    .homepage-link a:hover {
        font-size: 1.8rem;
    }

    body {
        background-image: url("bmi.jpg");
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
    }

    @media (max-width: 768px) {
        form {
            margin-top: 20px;
        }

        label {
            margin-top: 10px;
        }

        input[type="text"] {
            font-size: 13px;
        }

        input[type="button"] {
            padding: 8px 16px;
            font-size: 14px;
            margin-top: 10px;
        }

        .homepage-link {
            margin-top: -350px;
        }

        .homepage-link a {
            font-size: 1.3rem;
        }

        h1 {
            margin: 50px auto;
        }
    }

    @media (max-width: 480px) {
        h1 {
            font-size: 24px;
            margin: 50px auto;
        }

        .homepage-link {
            margin-top: -550px;
            margin-right: 3px;
        }

        .homepage-link a {
            font-size: 1rem;
        }

        form {
            margin-top: 10px;
        }

        label {
            margin-top: 8px;
        }

        input[type="text"] {
            font-size: 14px;
            padding: 6px;
        }

        input[type="button"] {
            padding: 6px 12px;
            font-size: 14px;
            margin-top: 10px;
        }
    }
</style>


</body>
</html>
