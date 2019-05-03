var ctx = document.getElementById("myChart").getContext('2d');
	var data_tanggal = [];
	var data_suhu = [];,
	$.post("url: ../../../",
	function (data){
		var obj = JSON.parse(data);
		$.each(obj, function (test, item) {
			data_tanggal.push(item.created_at);
			data_suhu.push(item.field2);
		});

var myChart = new Chart(ctx, {
	type: 'line',
	data: {
			labels: data_tanggal,
			datasets: [{
					label: 'Besar Suhu',
					data: data_suhu,
					backgroundColor:"pink",
					borderColor:"red",
					fill:false,
					lineTension:0,
					pointRadius:5,
					borderWidth: 1
			}]
	},
	options: {
			scales: {
					yAxes: [{
							ticks: {
									beginAtZero:true
							}
					}]
			}
	}
});
});
