<?php
session_start();
if(empty($_SESSION['logged_in'])){
    echo "You are not logged in. <a href='login.php'>Click here</a> to login";
    exit(1);
}
?>
<html>
    <head>
    <title>Profile Page</title>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> 
    <link rel="stylesheet" href="profile.css">

<script type="text/javascript">

window.onload = function () {
    
	var chart1 = new CanvasJS.Chart("chartContainer1", { 
		title: {
			text: "Team Performance"
		},
		data: [
		{
			labels:["10","20","30","40"],
			type: "spline",
			dataPoints: [
                { label:"2010",y: 10 },
				{ label:"2012",y:  4 },
				{ label:"2014",y: 18 },
				{ label:"2016",y:  8 },	
				{ label:"2018",y:  10 }	
			]
		}
		]
	}
);
var chart2 = new CanvasJS.Chart("chartContainer2", { 
		title: {
			text: "Individual Performance"
		},
		data: [
		{
			labels:["10","20","30","40"],
			type: "spline",
			dataPoints: [
				{ label:"2010",y: 10 },
				{ label:"2012",y:  4 },
				{ label:"2014",y: 18 },
				{ label:"2016",y:  8 },	
				{ label:"2018",y:  10 }	
			]
		}
		]
	}
);
var chart3 = new CanvasJS.Chart("chartContainer3", { 
		title: {
			text: "Overall Project Growth"
		},
		data: [
		{
			labels:["10","20","30","40"],
			type: "spline",
			dataPoints: [
				{ label:"2010",y: 10 },
				{ label:"2012",y:  4 },
				{ label:"2014",y: 18 },
				{ label:"2016",y:  8 },	
				{ label:"2018",y:  10 }	
			]
		}
		]
	}
);

chart1.render();
chart2.render();
chart3.render();

	$("#addDataPoint1").click(function () {
    var x = document.getElementById("inp1").value;
    x = (parseInt(x));
    // alert(typeof(x));
	var length = chart1.options.data[0].dataPoints.length;
	chart1.options.title.text = "New DataPoint Added at the end";
	chart1.options.data[0].dataPoints.push({ y: x});
	chart1.render();

	});
    $("#addDataPoint2").click(function () {
    var xx = document.getElementById("inp2").value;
    xx = (parseInt(xx));
    // alert(typeof(x));
	var length2 = chart2.options.data[0].dataPoints.length;
	chart2.options.title.text = "New DataPoint Added at the end";
	chart2.options.data[0].dataPoints.push({ y: xx});
	chart2.render();

	});
    $("#addDataPoint3").click(function () {
    var xxy = document.getElementById("inp3").value;
    xxy = (parseInt(xxy));
    // alert(typeof(x));
	var length3 = chart3.options.data[0].dataPoints.length;
	chart3.options.title.text = "New DataPoint Added at the end";
	chart3.options.data[0].dataPoints.push({ y: xxy});
	chart3.render();

	});
}

$("#btn-download").click(function () {
    
    var canvas = $("#chartContainer .canvasjs-chart-canvas").get(0);
    var dataURL = canvas.toDataURL('image/jpeg');
    console.log(dataURL);

    $("#btn-download").attr("href", dataURL);

});

</script>


    </head>
    <body>
        <div class="logout">
            <button id="log" type="submit"><a href="logout.php">Logout</a></button>
        </div>

        <div class="left">
            <?php
                 echo "<h2>Welcome ",$_SESSION['name'],"</h2>"; 
            ?>
        </div>

        <div class="right">
        <?php
                    echo "<h3 style='text-align:left'>Age: ",$_SESSION['age'],"</h3>";
                    echo "<h3 style='text-align:left'>Post: <u>",$_SESSION['posting'],"</u></h3>";
                    echo "<h3 style='text-align:left'>Salary: ",$_SESSION['salary'],"</h3>";
                ?>
                <div class="holidays">
                    <ul style="padding-left:0px;margin-left:0px;list-style:none;text-align:left;">
                        <label><h4>Holidays due in this month:</h4></label>
                        <li><i>1 May: Mayday</i></li>
                        <li><i>7 May: Buddha Purnima</i></li>
                        <li><i>16 May: State Day</i></li>
                        <li><i>19 May: Shab-e-Qadr</i></li>
                        <li><i>25 May: Maharana Pratap Jayanti</i></li>
                    </ul>
        </div>
        </div>
        
        
        <div class="left2">
            
            <div id="chartContainer1" style="margin-left:100px; width:50%; height:280px"></div>  
            <input type="text" id="inp1" style="margin-left:100px">
            <button id="addDataPoint1" >Add Data Point</button>   
            <a href="#" id="btn-download" download="chart.jpg" target="_blank">Download</a>

            <br>
            
            <div id="chartContainer2" style="margin-left:100px; width:50%; height:280px"></div>  
            <input type="text" id="inp2" style="margin-left:100px">
            <button id="addDataPoint2" >Add Data Point</button>   
            <br>
            
            <div id="chartContainer3" style="margin-left:100px; width:50%; height:280px"></div>  
            <input type="text" id="inp3" style="margin-left:100px">
            <button id="addDataPoint3" >Add Data Point</button>  

        </div>
    </body>
</html>