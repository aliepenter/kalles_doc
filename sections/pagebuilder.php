<div class="pagebuilder-sec1 flex">
    <div class="left-sec1">
        <div class="sec1-text">
            <h1 class="">
                Customize <br/>with PageBuilder
            </h1>
            <p>The Blueskytechco PageBuilder custom module provides a lot of functions, making it easier and more convenient to create, manage and edit Magento 2 themes. It helps customers who do not know about programming can also create a website according to their wishes.</p>
            
        </div>
        <div class="create-theme-btn flex" style="cursor:pointer">
            <div class="icon-create" style="width:15%">
                <img src="images/artist.png" alt="" width="100%">
            </div>
            <div class="text-create-theme" style="width:85%">
                <h3>Build a new theme</h3>
                <p>Get started with building Magento 2 themes. You can learn how to create a wonderful theme with only dragging and dropping items with our custom PageBuilder.</p>
            </div>
        </div>
    </div>
    <div class="right-sec1">
        <img src="images/pagebuilder.png" alt="" width="90%">
    </div>
</div>
<script>
    if (typeof createThemeBtn !== 'undefined') {
        createThemeBtn.onclick = function(){
        $('#contentSection').load('./sections/pagebuilder-index.php')
        document.body.scrollTop = bannerImg.offsetHeight
        document.documentElement.scrollTop = bannerImg.offsetHeight
    }
    }else{
    const createThemeBtn = $$('.create-theme-btn')
    createThemeBtn.onclick = function(){
            $('#contentSection').load('./sections/pagebuilder-index.php')
            document.body.scrollTop = bannerImg.offsetHeight
                    document.documentElement.scrollTop = bannerImg.offsetHeight
            }
    }
    
</script>