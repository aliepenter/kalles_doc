<div class="titleSection flex">
    <div class="iconTitle">
    <img src="images/documents.png" alt="" width="70%">
    </div>
    <div class="inforTitle">
        <div class="tit">
            <h1 class="">
                Installation
                <a href="#" class="hyperlink"></a>
            </h1>
        </div>
        <div class="reaction">
           <p>
               <i class="fa fa-eye"></i>
               <span>100 views</span>
               <i class="fas fa-thumbs-up"></i>
               <span>100</span>
               <i class="far fa-calendar-alt"></i>
               <span>February 15, 2022</span>
               <i class="far fa-calendar-plus"></i>
               <span>Updated on February 17, 2022</span>
               <i class="fas fa-user"></i>
               <span>TuanDat</span>
           </p>
        </div>
    </div>
</div>
<div class="overview" id="installationpg-overview">
    <div class="base-packege">
        <h2 class="title">Quick-Start Package</h2>	
        <p>Quick-start package is included Magento 2.4.3 and Shopbuy Themes. Supposing that you've just started building a Magento store, you can choose this solution to install demo store with all the sample data (similar to live demo of Shopbuy) and follow the instruction below.</p>		
        <ol>
            <li>Download package theme (zip file) from themesforset and upload <strong>Shopbuy.zip</strong> in folder Quickstart packeage(Included database) to your website folder. You can use a FTP software such as FileZilla or Cpanel to upload</li>
            <li>Extract file: <strong>Shopbuy.zip</strong> in folder Quickstart packeage(Included database) to your website folder where Magento is installed.</li>      
            <li>Create new database and import database sample. You can use database management tool such as phpMyAdmin to do this step</li>   
            <ul>
                <li>Open your Browser and go to your phpmyadmin or database management tool.</li>
                <li>Creat database: 
                    <p><br/><img class="img" src="../pub/documentation/images/createdb.jpg" alt=""></p>
                </li>
                <li>
                    Import database: Click database you have created. Press <strong>Import</strong> button. Choose and open file Shopbuy.sql from folder <strong>Database</strong>. File may be compressed (gzip, bzip2, zip) or uncompressed. 
                    <p><img class="img" src="../pub/documentation/images/importdb.jpg" alt=""></p>                              
                </li>
                <li>Change site url:
                    <p>After imported database, please access to core_config_data table, In this table you can see two value: web/unsecure/base_url and web/secure/base_url.</p>
                        <p>Go to table core_config_data => <strong>Click search</strong></p> <br/>
                        
                        <p><img class="img" src="../pub/documentation/images/core-config.png" alt="change site url"></p><br/>
                        <p>Scroll down then you will see "Value" Field you enter text: %http% after that you click "Go"</p><br/>
                        <p><br/><img class="img" src="../pub/documentation/images/core-config_search.png" alt="change site url"></p><br/>
                        <p>You will see the tables need to change url : </p><br/>
                        <p><br/><img class="img" src="../pub/documentation/images/change_url.png" alt="change site url"></p>
                </li>
                <li>Open file "app/etc/env.php" in your server and change database connect.</li>
                <li>Run commandline. You need login to ssh then "cd" to root magento and run commandlines below:</li>
                <ul>
                    <li>php bin/magento indexer:reindex</li>
                    <li>php bin/magento setup:upgrade</li>
                    <li>php bin/magento setup:static-content:deploy -f</li>
                    <li>php bin/magento cache:flush</li>
                    <li>chmod 777 -R pub var generated</li>
                </ul>
                <li>Finsish install. Open a web browser and enter your domain.</li>
            </ul>               
        </ol>	
        <p>Now you can go to admin page, follow this link: http://your-site.com/admin. Using account information bellow to login.</p>
            <ul>
                <li>User name: admin_demo</li>
                <li>Password: WeLoveMagento123!@</li>
            </ul>  
        <p>You can see video install: <a href="https://www.youtube.com/watch?v=9BWgmushiHg" target="_blank">https://www.youtube.com/watch?v=9BWgmushiHg</a></p>                  
    </div>
</div>