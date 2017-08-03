<style>
    .chart-statistic-box{
        float: left;
        width: 100%;
        height: 340px;
        padding: 15px 20px;
        background: #2196f3;
        color: #fff;
        position: relative;
        z-index: 5;
        margin: 10px auto;
    }
    .chart-txt-top {
        text-align: center;
        margin: 0 0 10px;
    }
    .tbl-data {
        width: 100%;
        position: absolute;
        bottom: 15px;
    }
    span.amount.number {
        font-size: 35px;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card">
                <div class="col-md-4">
                   <div class="chart-statistic-box">
                       <div class="chart-txt-top">
                           <p><span class="amount number">50</span></p>
                           <hr>
                           <p class="caption">Total Customer for Today</p>
                       </div>
                       <table class="tbl-data">
                           <tbody><tr>
                               <td class="amount">P 0.00</td>
                               <td>Income Today</td>
                           </tr>
                           <tr>
                               <td class="amount">P 0.00</td>
                               <td>Expense Today</td>
                           </tr>
                           </tbody></table>
                   </div>
                </div>
                <div class="col-md-8">
                    <div class="chart-container" style="position: relative;width: 50vw;">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
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
</script>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="container-title">
                <h4><b>Lorem</b></h4>
            </div>
            <div class="form-container">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>