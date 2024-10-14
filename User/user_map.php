<?php
class Index
{
    private $username = 'root';
    private $password = '';
    private $pdo = null;
    private $crime;
    private $date;
    private $location;
    private $latitude;
    private $longitude;

    public function __construct($crime = null, $date = null, $location = null, $latitude = null, $longitude = null)
    {
        $this->crime = $crime;
        $this->date = $date;
        $this->location = $location;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    private function connect()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=chart_db', $this->username, $this->password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $this->pdo;
    }

    public function getMarkers()
    {
        $con = $this->connect();
        $sql = "SELECT crime, location, latitude, longitude FROM piechart_tbl";
        $data = $con->prepare($sql);
        $data->execute();
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertCrime()
    {
        $con = $this->connect();
        $sql = "INSERT INTO piechart_tbl (crime, date, location, latitude, longitude) VALUES (:crime, :date, :location, :latitude, :longitude)";
        $data = $con->prepare($sql);
        $data->bindParam(':crime', $this->crime);
        $data->bindParam(':date', $this->date);
        $data->bindParam(':location', $this->location);
        $data->bindParam(':latitude', $this->latitude);
        $data->bindParam(':longitude', $this->longitude);
        return $data->execute();
    }

    public function getCrimeDropdown()
    {
        $con = $this->connect();
        $sql = "SELECT crime_name FROM crimes";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $row) {
            echo "<option>" . htmlspecialchars($row["crime_name"]) . "</option>";
        }

        if (empty($result)) {
            echo "<option value=''>No Items Found</option>";
        }
    }

    public function getCityDropdown()
    {
        $con = $this->connect();
        $sql = "SELECT city FROM tbl_city";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $row) {
            echo "<option>" . htmlspecialchars($row["city"]) . "</option>";
        }

        if (empty($result)) {
            echo "<option value=''>No Items Found</option>";
        }
    }

    public function viewChart()
    {
        $con = $this->connect();
        $sql = "SELECT crime, COUNT(*) AS CrimeCount FROM piechart_tbl GROUP BY crime";
        $data = $con->prepare($sql);
        $data->execute();

        $total_count = 0;
        $data_array = array();

        while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
            $total_count += $row["CrimeCount"];
        }

        $data->execute();

        while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
            $percentage = ($row["CrimeCount"] / $total_count) * 100;
            $data_array[] = array($row["crime"], round($percentage, 2));
        }

        return json_encode($data_array);
    }

    public function insertCrimes()
    {
        if (!empty($_GET['crime']) && !empty($_GET['date']) && !empty($_GET['location']) && !empty($_GET['lat']) && !empty($_GET['lng'])) {
            $this->crime = $_GET['crime'];
            $this->date = $_GET['date'];
            $this->location = $_GET['location'];
            $this->latitude = $_GET['lat'];
            $this->longitude = $_GET['lng'];

            if ($this->insertCrime()) {
                echo "Saved Successfully";
                header("Location: index.php");
                exit();
            } else {
                echo "Failed!";
            }
        }
    }
}

$index = new Index();

if ($_SERVER["REQUEST_METHOD"] === 'GET') {
    $index->insertCrimes();
}

$data_json = $index->viewChart();
$markers = $index->getMarkers();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chart_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



<?php
include('../header.php');
include('user_navbar.php');
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="../images/fevicon.png" type="image/x-icon">
    <title>Rapide.ph</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="../text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../css\style3.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../css/responsive.css" rel="stylesheet" />



    <!-- Map -->
    <script src="https://cdn.maptiler.com/maptiler-sdk-js/v2.2.2/maptiler-sdk.umd.min.js"></script>
    <link href="https://cdn.maptiler.com/maptiler-sdk-js/v2.2.2/maptiler-sdk.css" rel="stylesheet" />




    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.maptiler.com/maptiler-sdk-js/v2.0.3/maptiler-sdk.umd.js"></script>
    <link href="https://cdn.maptiler.com/maptiler-sdk-js/v2.0.3/maptiler-sdk.css" rel="stylesheet" />
    <script src="https://cdn.maptiler.com/leaflet-maptilersdk/v2.0.0/leaflet-maptilersdk.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.maptiler.com/maptiler-sdk-js/v2.0.3/maptiler-sdk.umd.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
    google.charts.load('current', {
        'packages': ['corechart', 'bar']
    });

    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Crimes', 'Count'],
            <?php
                if (isset($data_json)) {
                    $data_array = json_decode($data_json, true);
                    foreach ($data_array as $crime) {
                        echo "['" . $crime[0] . "', " . $crime[1] . "],";
                    }
                }
                ?>
        ]);
        var options = {
            title: 'Crime Reports'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawBarChart);

    function drawBarChart() {
        var data = google.visualization.arrayToDataTable([
            ['Crime', 'Percentage'],
            <?php
                if (isset($data_json)) {
                    $data_array = json_decode($data_json, true);
                    foreach ($data_array as $crime) {
                        echo "['" . $crime[0] . "', " . $crime[1] . "],";
                    }
                }
                ?>
        ]);
        var options = {
            title: 'Crime Reports',
            width: 900,
            legend: {
                position: 'none'
            },
            chart: {
                title: 'Bar Graph Crime Reports',
                subtitle: 'crime by percentage'
            },
            bars: 'horizontal',
            axes: {
                x: {
                    0: {
                        side: 'top',
                        label: 'Percentage'
                    }
                }
            },
            bar: {
                groupWidth: "40%"
            }
        };
        var chart = new google.visualization.BarChart(document.getElementById('dual_x_div'));
        chart.draw(data, options);
    }
    </script>
    <style>
    #dual_x_div>div>div:nth-child(1)>div>svg>rect {
        width: 100px;
    }
    </style>


</head>

<body class="sub_page">

    <nav class="navbar navbar-dark bg-dark shadow">
        <span class="navbar-brand mb-0 h1 ms-3">Chart and Graph</span>
        <a href="data_table.php" style="text-decoration: none; color: white;" class="me-3">Data Table</a>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-3">
                <form action="" method="GET">
                    <div class="form-group">
                        <label for="crime">Insert Crime:</label>
                        <select class="form-control mt-0" name="crime" id="crime">
                            <?php $index->getCrimeDropdown(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Insert Date:</label>
                        <input type="date" name="date" class="form-control mt-0" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Insert Location:</label>
                        <select class="form-control mt-0" name="location" id="location">
                            <?php $index->getCityDropdown(); ?>
                        </select>
                        <input type="hidden" name="lat" id="lat">
                        <input type="hidden" name="lng" id="lng">
                    </div>
                    <input type="submit" class="btn btn-success form-control mt-2" value="Add Crime">
                    <a href="data_table.php" class="btn btn-primary form-control mt-2">Data Table</a>
                </form>

            </div>
            <div class="col-md-6">
                <div id="map" class="form-control mb-1" style="height: 570px; width: 870px"></div>
                <div id="piechart" class="form-control mb-1" style="height: 500px; width: 870px"></div>
                <div id="dual_x_div" class="form-control" style="height: 500px; width: 870px"></div>
            </div>

        </div>
    </div>
    <script>
    const key = 'sdMXTvTD6NiZI2F6n4sf';
    const map = L.map('map').setView([14.4791, 120.8970], 10);
    const mtLayer = L.maptilerLayer({
        apiKey: key,
        style: "basic-v2"
    }).addTo(map);

    <?php foreach ($markers as $marker) : ?>
    L.marker([<?= $marker['latitude'] ?>, <?= $marker['longitude'] ?>]).addTo(map).bindPopup(
        "<div style='text-align: center;'><b><?= htmlspecialchars($marker['crime']) ?></b><br><b><?= htmlspecialchars($marker['location']) ?>, Cavite</b></div>"
    );
    <?php endforeach; ?>

    async function getCoordinates(address) {
        const apiKey = 'sdMXTvTD6NiZI2F6n4sf';
        const url =
            `https://api.maptiler.com/geocoding/${encodeURIComponent(address + ", Cavite")}.json?key=${apiKey}`;
        try {
            const response = await fetch(url);
            if (!response.ok) throw new Error(`Error: ${response.status} ${response.statusText}`);
            const data = await response.json();
            if (data.features && data.features.length > 0) {
                const [longitude, latitude] = data.features[0].geometry.coordinates;
                return {
                    latitude,
                    longitude
                };
            } else {
                throw new Error('No results found');
            }
        } catch (error) {
            console.error(error);
            alert(error.message);
            return null;
        }
    }

    document.getElementById('location').addEventListener('change', async (event) => {
        const address = event.target.value;
        if (address) {
            const coords = await getCoordinates(address);
            if (coords) {
                document.getElementById('lat').value = coords.latitude;
                document.getElementById('lng').value = coords.longitude;
            } else {
                document.getElementById('lat').value = 'N/A';
                document.getElementById('lng').value = 'N/A';
            }
        } else {
            document.getElementById('lat').value = '';
            document.getElementById('lng').value = '';
        }
    });
    </script>

    <!-- end info_section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="">Rapide.ph</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="../s/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script src="../js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76A7a9Hr8lFztXXwjbK6g3Kbt1Lz6Y3auD8r5c6EwHgjV4ldtJgROZXB6ZGdvep" crossorigin="anonymous">
    </script>
</body>

</html>