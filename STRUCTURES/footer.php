
        </main>
        <!--end of component-->
            <div class="right">
                <div class="top">
                    <button id="menu-btn">
                        <span class="material-icons-sharp">
                            menu
                        </span>
                    </button>
                    <div class="profile">
                        <div class="info">
                            <p>Hello, <b> <?php echo $_SESSION['email']; ?></b></p>
                            <small class="text-muted">User</small>
                        </div>
                    </div>
                    <div class="profile-photo">
                        <img src="/profile-1.jpg" alt="profile">
                    </div>
                </div>
            <!--End of top-->
                <div class="recent-updates">
                    <h2>Messages</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="/profile-2.jpg" alt="user-profile">
                            </div>
                            <div class="message">
                                <p>
                                    <b>Elon Rodgers</b>
                                    Received an order of <i>Hp Pavilon</i>
                                </p>
                                <small class="text-muted">2 min ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="/profile-3.jpg" alt="user-profile">
                            </div>
                            <div class="message">
                                <p>
                                    <b>Joyce Ayoub</b>
                                    Received an order of <i>NVIDIA graphics card</i>
                                </p>
                                <small class="text-muted">2 min ago</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="/profile-4.jpg" alt="user-profile">
                            </div>
                            <div class="message">
                                <p>
                                    <b>Kenzy Allen</b>
                                    Received an order of <i>Hp Spectre</i>
                                </p>
                                <small class="text-muted">2 min ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            <!--end of recent-updates-->
                <div class="sales-analytics">
                    <h2>Order analytics</h2>
                    <div class="item online">
                        <div class="icon">
                            <span class="material-icons-sharp">
                                shopping_cart
                            </span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>Received packages</h3>
                                <small class="text-muted">last 24 hours</small>
                            </div>
                            <h5 class="success">+45%</h5>
                            <h3>$3024</h3>
                        </div>
                    </div>
                    <div class="item offline">
                        <div class="icon">
                            <span class="material-icons-sharp">
                                shopping_bag
                            </span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>enroute packages</h3>
                                <small class="text-muted">last 24 hours</small>
                            </div>
                            <h5 class="danger">-20%</h5>
                            <h3>$500</h3>
                        </div>
                    </div>
                    <div class="item customers">
                        <div class="icon">
                            <span class="material-icons-sharp">
                                people
                            </span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>Total packages</h3>
                                <small class="text-muted">last 24 hours</small>
                            </div>
                            <h5 class="success">+100</h5>
                            <h3>1000</h3>
                        </div>
                    </div>
                    <div class="item add-product">
                            <span class="material-icons-sharp">
                                add
                            </span>
                            <h3><a href="users_packages.php">Add New Packages</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>