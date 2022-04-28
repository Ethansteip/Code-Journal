let data = {
    dataPoints: {
        "1426744959": 20,
        "1463673055": 113,
        "1476892421": 57,
        // ...
    },
    start: startDate, // a JS date object
    end: endDate
}

let chart = new Chart("#heatmap", {
    type: 'heatmap',
    data: data,
})