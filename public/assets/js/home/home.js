const xValues = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
const yValues = [55, 49, 44, 24, 35,45,35,24,20,35,12,45];
// const barColors = ["black", "grey", "#123", "black", "#332","black", "grey", "#123", "black", "#332","black", "#332",];
const barColors = ["#3498db", "#2ecc71", "#e74c3c", "#9b59b6", "#f1c40f", "#1abc9c", "#e67e22", "#34495e", "#95a5a6", "#16a085", "#27ae60", "#2980b9"];


new Chart("myChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
});


const data = {
    labels: [
      'الأعضاء',
      'المشتركين',
      'المدربين',
     
    ],
    datasets: [{
      label: 'Digram GYM',
      data: [234, 180, 12,],
      backgroundColor: [
        '#ffa500',
        '#252524',
        '#f4cd7a',
   
      ]
    }]
  };
new Chart("myChart2", {
    type: 'doughnut',
    data:data
});
