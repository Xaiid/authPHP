const statistics = function () {
    const statisticsModule = document.querySelector('.statistics-module');
    if (!statisticsModule) return;
    
    function generateBarChart() {

        const chartContainer = document.querySelector('.chart-container');
        const data = JSON.parse(chartContainer.dataset.chart);

        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data['labels'],
                datasets: [{
                    label: 'Data',
                    data: data['data'],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    function generateDoughnutChart() {


        const chartContainer = document.querySelector('.chart-container');
        console.log(chartContainer.dataset)
        const data = JSON.parse(chartContainer.dataset.chart);

        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data['labels'],
                datasets: [{
                    label: 'Data',
                    data: data['data'],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    generateBarChart();

}

export default statistics;