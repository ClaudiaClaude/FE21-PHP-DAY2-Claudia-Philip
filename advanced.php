<?php 
    function formatted_dump($obj) {
        if (isset($obj)) {
            echo "<pre>";
            var_dump($obj);
            echo "</pre>";
            return TRUE;
        }
        return FALSE;
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Celcius to Fahrenheit</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    
        <form method ="POST">
            <div class="d-flex flex-row align-items-end my-2 mx-auto p-3">
                <div class="form-group col-6">
                    <input type ="number" value="20" name="degree" class="form-control" id="degree" placeholder="Degrees" />
                </div>
                <div class="form-group col-6">
                <select class="form-control" name="unit" id="unit">
                        <option>Celsius</option>
                        <option>Fahrenheit</option>
                    </select>                
                </div>
            </div> 
            <div class="my-2 text-center">
            <input type="submit" name="submit" class="btn btn-primary" />
            </div>
        </form>

    
    <div class="cloud-bg-cold"></div>
    <?php
        function ToCelsius($d) {
            return ((int)$d - 32) / 1.8;
        }
        function ToFahrenheit($d) {
            return ((int)$d * 9/5) + 32;
        }

        function InRange($x, $lo, $hi) {
            return ($x >= $lo) && ($x <= $hi);
        }

        function ConvertUnits() {
            if (!$_POST["degree"] ) {
                echo "Please enter degrees in number";
                return FALSE;
            }
            $form_unit = $_POST["unit"];
            $new_degree = ($form_unit == "Celsius") ? ToFahrenheit($_POST["degree"]) : ToCelsius($_POST["degree"]);
            $new_letter = ($form_unit == "Celsius") ? "F" : "C";
            return array(round($new_degree,2), $new_letter);
        }

        function CreateWeatherLayout($string, $class = NULL) {
            //empty($class);
            // $ns = "";
            // if (!empty($class)) $ns .= "<div class='$class'>";
            // $ns .= $string;
            // if (!empty($class)) $ns .= "</div>";
            return "<div class='{$class}'>{$string}</div>";
        }

        if (isset($_POST["submit"])) {
            $converted_unit = ConvertUnits();
            $output_string = "";
            if (is_array($converted_unit)) $output_string = "It's $converted_unit[0]&deg;$converted_unit[1]";
            // make sure the degree unit we check again is ALWAYS celsius
            $checker_degree = ($converted_unit[1] == "F") ? ToCelsius($converted_unit[0]) : $converted_unit[0];
            echo "<h1 class='text-center'>$output_string</h1>";

            if (InRange($checker_degree, 0, 5)) { echo CreateWeatherLayout("Very cold", "cloud-bg-very-cold"); }
            elseif (InRange($checker_degree, 6, 10)) { echo CreateWeatherLayout("Cold", "cloud-bg-cold"); }
            elseif (InRange($checker_degree, 11, 15)) { echo CreateWeatherLayout("Pleasant", "cloud-bg-pleasant"); }
            elseif (InRange($checker_degree, 16, 20)) { echo CreateWeatherLayout("Warm", "cloud-bg-warm"); }
            elseif ($checker_degree > 21) { echo CreateWeatherLayout("Hot", "cloud-bg-very-hot"); }
            else { echo CreateWeatherLayout("IT'S FREEZING IN HERE!", "cloud-bg-very-freeze"); }


            $_POST = array();
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>