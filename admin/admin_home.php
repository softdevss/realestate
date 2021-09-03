<?php include 'includes/header.php'; ?>

        <!--========== NAV ==========-->
            <?php include "includes/navbar.php" ?>

        <main>

        <div class="main-content">
                <div class="info-card">
                    <div class="card">
                   <div class="card-icon">
                       <span><i class="fas fa-layer-group"></i></span>
                   </div> 
                   <div class="card-details">
                       <h4>CLIENTS</h4>
                       <h2>669</h2>
                   </div>
                   <p>Total clients </p> 
                </div>
                <div class="card">
                   <div class="card-icon">
                       <span><i class="fas fa-layer-group"></i></span>
                   </div> 
                   <div class="card-details">
                       <h4>CLIENTS</h4>
                       <h2>669</h2>
                   </div>
                   <p>Total clients </p> 
                </div>
                <div class="card">
                   <div class="card-icon">
                       <span><i class="fas fa-layer-group"></i></span>
                   </div> 
                   <div class="card-details">
                       <h4>CLIENTS</h4>
                       <h2>669</h2>
                   </div>
                   <p>Total clients </p> 
                </div>
            </div>

            </div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ["Element", "Sales", { role: "style" } ],
                ["January", 5, "#f5587b"],
                ["February", 20.49, "#f5587b"],
                ["March", 19.30, "#f5587b"],
                ["April", 21.45, "color: #f5587b"],
                ["May", 12, "#f5587b"],
                ["June", 10.49, "#f5587b"],
                ["July", 22.30, "#f5587b"],
                ["August", 21.45, "color: #f5587b"],
                ["September", 5, "#f5587b"],
                ["October", 10.49, "#f5587b"],
                ["November", 19.30, "#f5587b"],
                ["December", 21.45, "color: #f5587b"]
                
                ]);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                { calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation" },
                2]);

                var options = {
                title: "Sales for the year",
                width: 1200,
                height: 250,
                bar: {groupWidth: "90%"},
                legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                chart.draw(view, options);
                }
                </script>
                <div id="columnchart_values" style="width:100vw; height: 300px; max-width:100%;"></div>
      </script>
            </div> 
        </main>

		</body>
       
        <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
        <script src="./menu.js"></script>
     </html>
