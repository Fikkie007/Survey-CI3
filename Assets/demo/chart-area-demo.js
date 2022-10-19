// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily =
	'-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#292b2c";

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var answer = 1;
var data = [10, 20, 30, 40];
var myLineChart = new Chart(ctx, {
	type: "line",
	data: {
		labels: ["Sangat Puas", "Puas", "Biasa", "Tidak Puas"],
		datasets: [
			{
				label: "Presentase",
				lineTension: 0.3,
				backgroundColor: "rgba(2,117,216,0.2)",
				borderColor: "rgba(2,117,216,1)",
				pointRadius: 5,
				pointBackgroundColor: "rgba(2,117,216,1)",
				pointBorderColor: "rgba(255,255,255,0.8)",
				pointHoverRadius: 5,
				pointHoverBackgroundColor: "rgba(2,117,216,1)",
				pointHitRadius: 50,
				pointBorderWidth: 2,
				data: data,
			},
		],
	},
	options: {
		scales: {
			xAxes: [
				{
					time: {
						unit: "date",
					},
					gridLines: {
						display: false,
					},
					ticks: {
						maxTicksLimit: 7,
					},
				},
			],
			yAxes: [
				{
					ticks: {
						min: 0,
						max: 100,
						maxTicksLimit: 5,
					},
					gridLines: {
						color: "rgba(0, 0, 0, .125)",
					},
				},
			],
		},
		legend: {
			display: false,
		},
	},
});
