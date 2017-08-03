{!! Theme::asset()->usePath()->add('billing-css','/css/billing.css') !!}
    <div class="row">
        <div class="col-md-12" id="grid" style="display:none">
           <div class="container-grid">
               <ul>
                   <li>
                       <div class="box-service">
                           lorem ipsum
                           <br>
                           (20)
                       </div>
                   </li>
                   <li>
                       <div class="box-service">
                           lorem ipsum
                           <br>
                           (20)
                       </div>
                   </li>
                   <li>
                       <div class="box-service">
                           lorem ipsum
                           <br>
                           (20)
                       </div>
                   </li>
                   <li>
                       <div class="box-service">
                           lorem ipsum
                           <br>
                           (20)
                       </div>
                   </li>
                   <li>
                       <div class="box-service">
                           lorem ipsum
                           <br>
                           (20)
                       </div>
                   </li>
               </ul>
           </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-6 col-sm-12">
            <div class="card">
                <div class="form-container">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Product name">
                      <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button" id="viewGrid">VIEW GRID</button>
                      </span>
                    </div>
                </div>
            </div>
            <div class="card">
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
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="form-container">
                    <div class="remove-customer">
                        x
                    </div>
                    <div class="customer-badge">
                        <div class="avatar">
                            <img src="https://demo.phppointofsale.com/assets/img/user.png" alt="">
                        </div>
                        <div class="details">
                            <a href="https://demo.phppointofsale.com/index.php/sales/customer_recent_sales/13" data-toggle="modal" data-target="#myModal" class="name">LOREM IMPSUM</a>
                            <div class="text-success sales_until_discount">Contact: 09186246166</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="form-container">
                    <div class="input-group input-group-md">
                        <span class="input-group-addon" id="sizing-addon1">+</span>
                        <input type="text" class="form-control" placeholder="Search for customer..." aria-describedby="sizing-addon1">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="form-container">
                    <div class="tier-group">

                        Sales person:  <span class="selected-sales-person">Joao Couves</span>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="key">20.000% VAT:</span>
                                <span class="value pull-right">$3.50</span>
                            </li>
                            <li class="list-group-item">
                                <span class="key">20.000% VAT:</span>
                                <span class="value pull-right">$3.50</span>
                            </li>
                        </ul>
                        <div class="amount-block">
                            <div class="total amount">
                                <div class="side-heading">
                                    Total			</div>
                                <div class="amount total-amount" data-speed="1000" data-currency="$" data-decimals="2">
                                    P258.97
                                </div>
                            </div>
                            <div class="total amount-due">
                                <div class="side-heading">
                                    Amount Due				</div>
                                <div class="amount">
                                    0
                                </div>
                            </div>
                        </div>
                        <div class="add-coupon">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="key">Cash</span>
                                    <span class="value pull-right">$200</span>
                                </li>
                            </ul>
                        </div>
                        <div class="add-coupon inpt-comp-btn">
                            <div class="input-group">
                                <input type="text" class="form-control">
                                  <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Complete Purchase</button>
                                  </span>
                            </div>
                        </div>
                        <div class="add-coupon">
                            <div class="input-group inpt-comp-btn">
                                 <button class="btn comp-btn" type="button">Complete Purchase</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    $('document').ready(function(){
        $('#viewGrid').on('click',function(){
            $('#grid').slideToggle('fast');
        })
    })
</script>