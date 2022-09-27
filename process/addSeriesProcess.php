<?php
if(isset($_POST['addSeries'])){
    include('../db.php');
    $nameSeries = $_POST['addSeriesName'];
    $addGenre = implode(",", $_POST['addGenre']);
    $addRealease = $_POST['addRealease'];
    $addEpisode = $_POST['addEpisode'];
    $addSeason = $_POST['addSeason'];
    $addSynopsis = $_POST['addSynopsis'];
    $query = mysqli_query($con, 

    "INSERT INTO `series`(`name`, `genre`, `realease`, `episode`, `season`, `synopsis`) VALUES ('$nameSeries', '$addGenre', '$addRealease', '$addEpisode', '$addSeason', '$addSynopsis')") or die(mysqli_error($con));

    if ($query) {
        echo
            '<script>
            alert("Add Series Success");
            window.location = "../page/listSeriesPage.php"
            </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>