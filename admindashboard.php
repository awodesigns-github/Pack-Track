<?php 
    session_start();
    include('STRUCTURES/header_admin.php');
?>
<!--dynamic content-->
        <h1>Admin Dashboard</h1>

            <div class="date">
                <input type="date" name="" id="">
            </div>


            <div class="insights">
                <div class="sales">
                    <span class="material-icons-sharp">
                        analytics
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>ROI</h3>
                            <h1>500%</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>70%</p>
                            </div>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                    </div>
                </div>
<!--End of sales-->
                <div class="expenses">
                    <span class="material-icons-sharp">
                        bar_chart
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Expenditure</h3>
                            <h1>$10,000,000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>68%</p>
                            </div>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                    </div>
                </div>
<!--end of expenses-->
                <div class="income">
                    <span class="material-icons-sharp">
                        trending_up
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total income</h3>
                            <h1>$50,000,000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>47%</p>
                            </div>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                    </div>
                </div>
<!--end of income-->
            </div>
            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Payment Name</th>
                            <th>Payment Number</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hp Spectre</td>
                            <td>5241</td>
                            <td>$1000</td>
                            <td class="success">Success</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Mini Foldable drone</td>
                            <td>5200</td>
                            <td>$150</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Hp Pavillon</td>
                            <td>5230</td>
                            <td>$800</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Hp Spectre SE</td>
                            <td>4967</td>
                            <td>$1300</td>
                            <td class="warning">Pending</td>
                            <td class="primary">Details</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show all</a>
            </div>

<?php 
    include('STRUCTURES/footer_admin.php');
?>