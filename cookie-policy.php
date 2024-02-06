<?php
include 'header.php';
$Query = "SELECT * FROM `policy`";
$query = mysqli_query($conn, $Query);
$rows = mysqli_fetch_array($query);
?>
<style>
    .title-section p {
    font-size: 1.7rem;
}
</style>

        <main class="main">
            <div class="page-header">
                <div class="container-fluid" style="padding:0">
                    <img src="<?= '././admin/src/front-store/uploads/' . $rows['img'] ?>" style="width:100%; height: 180px;">
              
                </div>
            </div>
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="./">Home</a></li>
                        <li><a href="privacy_policy.php">Cookies Policy</a></li>
                    </ul>
                </div>
            </nav>
            <div class="page-content mb-10 pb-2">
                <div class="container">
                    <section class="title-section mb-8 show-code-action">
                        <p>It is not necessary to accept cookies to access the Site. However, the Site's "basket" functionality and order are only made possible with the activation of cookies, as we would like to point you out. When you access specific pages on the Site, your Internet browser saves a little text file called a cookie to your computer's hard drive. Cookies allow our server to recognize your computer as a unique user.  </p>
                                 <p> By recognizing your Internet Protocol address, cookies can help you save time while on the Site or when you want to enter it. We don't collect or use other information about you, such as targeted advertising. We only use cookies for convenience when using the Site (such as remembering who you are when you wish to change your shopping cart without entering your email address again). Of course, you can configure your browser not to accept cookies, but doing so will limit how you can use the website.</p>
                                        <p>Please take our word that our cookies are virus-free and do not include any personal or private information. Visit https://www.allaboutcookies.org to learn more about cookies, or visit https://www.allaboutcookies.org/manage-cookies/index.html to learn how to delete them from your browser. </p>
                                               <p>Google Analytics is a web analytics service offered by Google, Inc. ("Google") used on this website. To better understand how users interact with the website, Google Analytics uses cookies and text files downloaded to your computer. Google will receive and store the data produced by the cookie about how you use the website (including your IP address) on servers located in the United States. Google will use this data to assess how you use the website, create reports on website activity for website owners, and perform other functions related to website activity and internet usage. </p>
                                                      <p> When required to do so by law or when such third parties process the information on Google's behalf, Google may also disclose this information to third parties. Your IP address won't be linked to any other information that Google stores. By choosing the right options in your browser, you can reject the usage of cookies, but keep in mind that you might not be able to access this website's full functionality if you do so. By using this website, you agree that Google may process data about you in the ways described above and for the specified purposes.</p>
                                                      
                        
                    </section>
                </div>
            </div>
        </main>
<?php @include('footer.php'); ?>