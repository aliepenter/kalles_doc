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
    <h2 class="title">BASE PACKAGE</h2>
    <div class="prepare-install">
        <h3>1. Prepare Installation</h3>
        <p>In this guide, We assume that you already have Magento installed, so to prepare installation, you need to do the following steps:</p>
        <ol>
            <li>
                Backup your Magento source files and your store database
                <p class="note">Creating a backup is very imporant before installing theme, especially when you are working on a live site. Please don't ignore this step.</p>
            </li>
            <li>Disable all cache on your Magento site include:
                <ul>
                    <li>Magento Cache (System > Cache Management)</li>
                    <li>Any additional cache on your server, for instance PHP cache engines, APC, ...</li>
                </ul>
            </li>
            <li>Enable Maintenance mode for your store before uploading theme source.</li>
        </ol>
    </div>
    <div class="Install">
        <h3>2. Install</h3>
        <ol>
            <li>
                <p> Download  our theme package files from themesforest. </p>
                <p>1.1. Extract this package, upload folders in bs_shopbuy_base: app, lib, pub to the root directory ( www, public_html) of your magento folder. You can use a FTP software, such as FileZilla, then login to your hosting to do it. </p>
                <p>1.2. For 2.3.x version, upload and overwrite files  in the bs_shopbuy_v.2.3.x folder.</p>
                <p>1.3. For 2.4.0_2.4.1 version, upload and overwrite files  in the bs_shopbuy_v.2.4.0_2.4.1 folder.</p>
                <p>1.4. For 2.4.2 version, upload and overwrite files  in the bs_shopbuy_v.2.4.2 folder.</p>
                <p>1.5. For 2.4.3 or higher version, continue upload and overwrite files in the bs_shopbuy_v.2.4.x folder </p>
            </li>
            <li>Make sure that you upload all theme folders and files successfully. You disable Maintenance Mode for your store.</li>
            <li>Go to SSH on server and cd to root magento and run commandlines below:</li>
            <ul>
                <li>php bin/magento indexer:reindex</li>
                <li>php bin/magento setup:upgrade</li>
                <li>php bin/magento setup:static-content:deploy -f</li>
                <li>php bin/magento cache:flush</li>
                <li>sudo chmod -R 777 var pub generated</li>
            </ul>
        </ol>
    </div>
    <div class="activetheme">
        <h3>3. Active theme</h3>
        <p>Our theme and module come with a license key, a license which you will find in your account Purchase History. <a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code">Click here</a> if you don't know how to get purchase code.</p>
        <p>To activate the license key for your theme/plugin, follow these steps:</p>
        <ul style="list-style: none;">
            <li style="list-style: none;">
                1. Login to admin.
            </li>
            <li style="list-style: none;">
                2. Navigate to <strong>Rokanthemes => Rokanthemes Theme => Activation Purchase Code.</strong>
                <p><img class="img" src="../pub/documentation/images/activetheme.jpeg" alt=""></p>
            </li>
            <li style="list-style: none;">
                3. Insert the license key into the field and click <strong>Save Config</strong>.
                <p><img class="img" src="../pub/documentation/images/insertpurchased_code.jpeg"/></p>
            </li>
        </ul>
        <p> 
    </div>
    <div class="importconent">
        <h3>4. Import Slider Revolution</h3>
        <p>After install our theme, You need <strong>Import a Slider Revolution</strong>. Please choose a zip file in: <strong>Themes_Files/Base_package/revslider_sample-data/</strong> </p>
        <p><img class="img" src="../pub/documentation/images/slide-import-file.png"/></p>
        <p>Please follow this video: <a href="https://youtu.be/IkMHKNRUbpE">https://youtu.be/IkMHKNRUbpE</a> or link: <a href="https://www.sliderrevolution.com/documentation/new-module-creation/" target="_bank">https://www.sliderrevolution.com/documentation/new-module-creation/</a> scroll down to <strong>Import a Module packaged with your Theme</strong> section to see how to import</p>
    </div>
    <div class="importconent">
        <h3>5. One Click Demo Import</h3>
        <p>After install our theme, you can easy select the demo that you want by <strong>One Click Demo Import.</strong></p>
        <p>Armania provides extremely easy - <strong>One click demo installation</strong>. With One click, you can import: Cms page, cms block and all setting for the demo that you are want to use. </p>
        <p>
            Please follow this steps:
        </p>
        <ul style="list-style: none;">
            <li style="list-style: none;">
                1. Login to admin.
            </li>
            <li style="list-style: none;">
                2. Navigate to <strong>Rokanthemes -> Rokanthemes Theme -> Demo importer.</strong>
                <p><img class="img" src="../pub/documentation/images/demo-import1n.jpeg"/></p>
            </li>
            <li style="list-style: none;">
                3. Choose demo that you want to use and click button <strong>Active</strong>.
                <p><img class="img" src="../pub/documentation/images/import-1.png"/></p>
            </li>
            <li style="list-style: none;">
                4. A Success message popup will show to inform you about the active. Click button <strong>Ok</strong>
                <p><img class="img" src="../pub/documentation/images/import-2.png"/></p>
            </li>
            <li style="list-style: none;">
                5. After loading page done, click button <strong>Save Config</strong>
                <p><img class="img" src="../pub/documentation/images/import-3.png"/></p>
            </li>
            <li style="list-style: none;">
                6. Reload your site, you will see the result.
            </li>
        </ul>
    </div> 
</div>
</div>