<div>
    <canvas id="rasio"></canvas>
</div>
<script>
    $(document).ready(function() {
        $.ajax({
            url: "chart_data",
            method: "GET",
            success: function(data) {
                console.log(data);
                var label = [];
                var value = [];
                for (var i in data) {
                    label.push(data[i].kelompok);
                    value.push(data[i].jumlah);
                }
                var ctx = document.getElementById('rasio').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: 'Rasio Usia',
                            backgroundColor: 'rgb(252, 116, 101)',
                            borderColor: 'rgb(255, 255, 255)',
                            data: value
                        }]
                    },
                    options: {

                    }
                });
            }
        });
    });
</script>