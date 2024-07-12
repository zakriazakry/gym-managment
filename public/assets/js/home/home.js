const xValues = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
const yValues = [55, 49, 44, 24, 35,45,35,24,20,35,12,45];
const barColors = ["black", "grey", "#123", "black", "#332","black", "grey", "#123", "black", "#332","black", "#332",];

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
