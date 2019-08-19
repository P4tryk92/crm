console.log(allLeadsLength);

document.getElementById("all-leads").innerHTML=allLeadsLength
document.getElementById("active-leads").innerHTML=activeLeadsLength
var d = new Date();

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Year', 'Sales'],
    [d.getFullYear(),  allLeadsLength],
    ['2007',  1030]
  ]);

  var options = {
    title: 'Company Performance',
    curveType: 'function',
    legend: { position: 'bottom' }
  };

  var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

  chart.draw(data, options);
}