<?php
function display() {
    $name = '';
    if(isset($_GET['btn-search'])) {
        $name = $_GET['search'];
        $arr = explode(' ', $name);
        $app = '';

        for($i=0; $i<count($arr); $i++) {
            $print = $arr[$i].'%20';
            $app .= $print;
        }

        $trim = rtrim($app, '%20');

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'http://www.omdbapi.com/?apikey=dca61bcc&s='.$trim);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($result, true);

        if($result['Response'] === 'True') {
            foreach($result['Search'] as $i) {
                $img = $i['Poster'];
                $title = $i['Title'];
                echo "<div class='card'>";
                echo "<div class='image'>
                    <img src='$img'>
                </div>";
                echo "<p class='title'>
                    $title
                </p>";
                echo "<div class='view'><a href=''>View</a></div>";
                echo "</div>";
            }
        }

        else {
            echo "<h2>Not Found</h2>";
        }
    }

    else {
        echo "<p>empty</p>";
    }
}
?>