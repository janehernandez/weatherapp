

<?php include 'includes/header.php'; ?>
<div class="main">	
    <h1>Japan Weather Update</h1>
    
    <div class="main_grids">

        <select class="txtbox form-control text-right" id="search-city" style="margin-bottom:10px;" >
            <?php 
                $jsonData = file_get_contents("jpcities.json");
                $jpcitiesData = json_decode($jsonData);
                foreach ($jpcitiesData as $key) {
            ?>
                <option value="<?=$key -> id?>"><?=$key -> name?></option>

            <?php } ?>
            
        </select>

        <div class="main_grid">
            <div class="main_grid_left">
                <h2 id="city" name="city"></h2>
                <p id="condition" name="condition"></p>
                <h3>Now</h3>
                <h4 id="temperature" name="temperature"><span>°c</span></h4>
            </div>
            <div class="main_grid_right">
                <canvas id="sleet" width="70" height="70"> </canvas>
                <div id="w3time"></div>
                <div class="w3layouts_date_year">
                    <!-- date -->
                        <script type="text/javascript">
                        var mydate=new Date()
                        var year=mydate.getYear()
                        if(year<1000)
                            year+=1900
                            var day=mydate.getDay()
                            var month=mydate.getMonth()
                            var daym=mydate.getDate()
                        if(daym<10)
                            daym="0"+daym
                            var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
                            var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
                            document.write(""+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"")
                        </script>
                    <!-- //date -->
                </div>
            </div>
            <div class="clear"> </div>
        </div>
			
        <div class="agileits_w3layouts_main_grid">
            <div class="agile_main_grid_left">
                <div class="wthree_main_grid_left_grid">
                    
                    <div class="w3ls_main_grid_left_grid1">
                        <div class="w3l_main_grid_left_grid1_left">
                            <h3>Cloud</h3>
                            <p>38 <span>%</span></p>
                        </div>
                        <div class="w3l_main_grid_left_grid1_right">
                            <canvas id="cloudy" width="45" height="45"></canvas>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="w3ls_main_grid_left_grid1">
                        <div class="w3l_main_grid_left_grid1_left">
                            <h3>Wind</h3>
                            <p>14 <span>Km/h</span></p>
                        </div>
                        <div class="w3l_main_grid_left_grid1_right">
                            <canvas id="wind" width="45" height="45"></canvas>
                        </div>
                        <div class="clear"> </div>
                    </div>
                </div>
            </div>
            <div class="w3_agileits_main_grid_right">

            </div>
            <div class="clear"> </div>
        </div>
    </div>


</div>


<?php include 'includes/footer.php'; ?>