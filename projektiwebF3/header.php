<nav class="navbar">
        <h1 class="logo">HEALTHY LIVES</h1>
        <ul class="nav-links">
            <li class="active"><a href="http://localhost:8081/Projektiweb22/index1.php">Home</a></li>
            <li ><a href="http://localhost:8081/Projektiweb22/index.php">About us</a></li>
            <li ><a href="http://localhost:8081/Projektiweb22/products.php">Products</a></li>
            <li ><a href="http://localhost:8081/Projektiweb22/loginpage.php ">Log in</a></li>
            <li class="ctn"><a href="http://localhost:8081/Projektiweb22/contactUs.php">Contact us</a></li>
        </ul>
        <!-- <img src="./img/menu-btn.png" alt="" class="menu-btn">
        <script>
        const menuBtn= document.querySelector('.menu-btn')
        const navlinks=document.querySelector('.nav-links')

        menuBtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-menu')
        })
        </script> 
     
            require_once('dbFunction.php');
            if(isset($_SESSION['role']) && $_SESSION['role']==1) {
            ?>
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                <a href="logout.php">Logout</a>
                </li>
            
            else if (isset($_SESSION['role']) && $_SESSION['role']==0){
                ?>
                <li>
                <a href="logout.php">Logout</a>
            </li>
                
            }
            
            else{
                
            }
            ?> */
        </nav> -->
        </nav>