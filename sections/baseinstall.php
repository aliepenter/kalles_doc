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
               <span>Bluesky Team</span>
           </p>
        </div>
    </div>
</div>
<div class="overview" id="installationpg-overview">
<div class="base-packege">
    <h2 class="title">Base Package</h2>
    <div class="prepare-install">
        <h3 style="padding-top: 10px">1. Prepare Installation</h3>
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
        <h3 style="padding-top: 10px">2. Install</h3>
        <ol>
            <li>
                <p style="padding-botton: 5px"> Download  our theme package files from themesforest. </p>
                <p style="padding-botton: 5px">1.1. Extract this package, upload folders in bs_kalles_base: app, lib, pub to the root directory ( www, public_html) of your magento folder. You can use a FTP software, such as FileZilla, then login to your hosting to do it. </p>
                <p style="padding-botton: 5px">1.2. For 2.3.x version, upload and overwrite files  in the bs_kalles_v.2.3.x folder.</p>
                <p style="padding-botton: 5px">1.3. For 2.4.0_2.4.1 version, upload and overwrite files  in the bs_kalles_v.2.4.0_2.4.1 folder.</p>
                <p style="padding-botton: 5px">1.4. For 2.4.2 version, upload and overwrite files  in the bs_kalles_v.2.4.2 folder.</p>
                <p style="padding-botton: 5px">1.5. For 2.4.3 or higher version, continue upload and overwrite files in the bs_kalles_v.2.4.x folder </p>
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
        <h3 style="padding-top: 10px">3. Active theme</h3>
        <p>Our theme and module come with a license key, a license which you will find in your account Purchase History. <a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code">Click here</a> if you don't know how to get purchase code.</p>
        <p>To activate the license key for your theme/plugin, follow these steps:</p>
        <ul class="normal" style="padding-botton: 5px">
            <li>
                1. Login to admin.
            </li>
            <li>
                2. Navigate to <code class=""><span class="pre">BLUESKYTECHCO</span> <span class="pre">&gt;</span> <span class="pre">Activation Purchase Code</span></code>
                <img src="images/activekey.png" alt="" width="90%">
            </li>
            <li>
                3. Insert the license key into the field and click <strong>Save Config</strong>.
                <img src="images/activekeysave.png" width="90%">
            </li>
        </ul>
        <p> 
    </div>
    <div class="importconent">
        <h3 style="padding-top: 10px">4. Import Slider Revolution</h3>
        <p>After install our theme, You need <strong>Import a Slider Revolution</strong>. Please choose a zip file in: <strong>Themes_Files/Base_package/revslider_sample-data/</strong> </p>
        <img src="images/revsliderlist.png" width="90%">
        <p>Please follow this video: <a class="linkinpage" href="https://youtu.be/IkMHKNRUbpE">https://youtu.be/IkMHKNRUbpE</a> or link: <a href="https://www.sliderrevolution.com/documentation/new-module-creation/" target="_bank">https://www.sliderrevolution.com/documentation/new-module-creation/</a> scroll down to <strong>Import a Module packaged with your Theme</strong> section to see how to import</p>
    </div>
    <div class="importconent">
        <h3>5. One Click Demo Import</h3>
        <p>After install our theme, you can easy select the demo that you want by <strong>One Click Demo Import.</strong></p>
        <p>Armania provides extremely easy - <strong>One click demo installation</strong>. With One click, you can import: Cms page, cms block and all setting for the demo that you are want to use. </p>
        <p>
            Please follow this steps:
        </p>
        <ul class="normal">
            <li>
                1. Login to admin.
            </li>
            <li>
                2. Navigate to <span class="pre">BLUESKYTECHCO</span> <span class="pre">&gt;</span> <span class="pre">Demo Importer</span></code>
                <img src="images/demoimporterpath.png" alt="" width="90%">
            </li>
            <li>
                3. Choose demo that you want to use and click button <strong>Active</strong>.
                <img src="images/demoimporteractive.png" width="90%" alt="">
            </li>
            <li>
                4. A Success message popup will show to inform you about the active. Click button <strong>Ok</strong>
                <img src="images/demoimportsuccess.png" width="90%" alt="">
            </li>
            <li>
                5. After loading page done, click button <strong>Save Config</strong>
            </li>
            <li>
                6. Reload your site, you will see the result.
            </li>
        </ul>
    </div>
    <p>Please follow this video for more information: </p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/9dx4FMF-mT8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>