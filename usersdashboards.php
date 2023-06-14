<?php 
    session_start();
    include('STRUCTURES/header.php')
?>
    <!--dynamic content-->
    <?php 
    if(isset($_SESSION['email'], $_SESSION['pwd'])){ ?>
        <h1>User Dashboard</h1>
        
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
                            <h3>Completed Deliveries</h3>
                            <h1>100%</h1>
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
                            <h3>Pending Deliveries</h3>
                            <h1>0</h1>
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
                            <h3>Succesful Deliveries</h3>
                            <h1>10</h1>
                        </div>
                    </div>
                </div>
<!--end of income-->
            </div><!--Order by payment id-->
            <div class="recent-orders">
                <h2>Package Summary</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Package Name</th>
                            <th>Package ID</th>
                            <th>Package Destination</th>
                            <th>Package Status</th>
                            <th>Payment Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hp Spectre</td>
                            <td>5241</td>
                            <td>Arusha</td>
                            <td class="success">Delivered</td>
                            <td class="success">Paid</td>
                        </tr>
                        <tr>
                            <td>Mini Foldable drone</td>
                            <td>5200</td>
                            <td>Tanga</td>
                            <td class="warning">Pending</td>
                            <td class="success">Paid</td>
                        </tr>
                        <tr>
                            <td>Hp Pavillon</td>
                            <td>5230</td>
                            <td>Kilimanjaro</td>
                            <td class="success">Delivered</td>
                            <td class="success">Paid</td>
                        </tr>
                        <tr>
                            <td>Hp Spectre SE</td>
                            <td>4967</td>
                            <td>Arusha</td>
                            <td class="warning">Pending</td>
                            <td class="success">Paid</td>
                        </tr>
                        <tr>
                            <td>Google Pixel 6</td>
                            <td>4967</td>
                            <td>Dar es salaam</td>
                            <td class="warning">Pending</td>
                            <td class="success">Paid</td>
                        </tr>
                    </tbody>
                </table>
                <a href="users_packages.php">Show all</a>
            </div>
            <?php
    } else {
        header("location:login.php");
    }
    ?>        

<?php 
    include('STRUCTURES/footer.php');
?>