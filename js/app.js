const $$ = document.querySelector.bind(document)
const $$$ = document.querySelectorAll.bind(document)
const chevronDownClick = $$$('.menu-block');
const linkMenuClick = $$$('.link-menu-parent')
const childLink = $$$('.link-menu-children')
const section = $$$('section')
const menuLeft = $$('.left-column')
const content = $$('.right-column')
const scrtotopbtn = $$('.scrtotopbtn')
const hasSub = $$$('.hasSubmenu')
const breadcrumb = $$('.breadcrumb')
const home = $$$('.home')
const cateLink = $$$('.content a')
const parentLi = $$$('.parentLi')
const knowledgeBase = $$$('#knowledgeBase .parentLi')
const themeInstallation = $$$('#themeInstallation .parentLi')
const themeCustomize = $$$('#themeCustomize .parentLi')
const extension = $$$('#extension .parentLi')
const kb = $$('.knowledge-base')
const ug = $$('.user-guide')
const bpb = $$('.page-builder')
const om = $$$('.our_module')
const sectionIndex = $$('#indexSection')
const optionMenu = $$('.optionMenu')
const textLogo = $$('.text-logo')
const imgLogo = $$('.image-logo')
const contentMenu = $$('.left-column .content')
const linkMenu =  $$$('.link-menu')
const iconSmallMenu =  $$$('.iconSmallMenu')
const subMenuA = $$$('.sub-menu li a')
const groupMenuA = $$$('.group-menu')
const video = $$('.wrap-video')
const bannerImg = $$('.banner-img')
const leftco = $$('.body-content .left-column')
const rightco = $$('.body-content .right-column')
let flag = 0;
let remenber = [];

const common = {
    // dropdown: function(_this) {
    //     let aChild;
    //     if (_this.classList.contains('indexMenu') != true) {
    //         aChild = _this.closest('li').querySelector('a')
    //         if (aChild !== null) {
    //             $(_this).closest('li').find('> .level').slideDown(500)
    //             aChild.classList.add('rotate')
    //         }
    //     }else{
    //         linkMenuClick.forEach(menu => {
    //             if (menu.id === _this.id) {
    //                 aChild = menu.closest('li').querySelector('a')
    //                 if (aChild !== null) {
    //                     $(menu).closest('li').find('> .level').slideDown(500)
    //                     aChild.classList.add('rotate')
    //                 }
    //             }
    //         })
    //     }
    // },
    // applyMenuBlock: function(){
    //     parentLi.forEach(ele => {
    //         if (ele.classList.contains('menuActive') == true) {
    //             ele.querySelectorAll('.menu-block').forEach(el => {
    //                 el.style.display = "block"
    //             })
    //         }else{
    //             ele.querySelectorAll('.menu-block').forEach(el => {
    //                 el.style.display = "none"
    //             })
    //         }
            
            
    //     })
    // },
    hideMenu: function(){
        if(sectionIndex.classList.contains('active')){
            leftco.classList.toggle('d_none')
            rightco.classList.toggle('index_des')
        }
    },
    scrToTop: function() {
        console.log(bannerImg.offsetHeight)
        document.body.scrollTop = bannerImg.offsetHeight
        document.documentElement.scrollTop = bannerImg.offsetHeight
    },
    scrToTop2: function() {
        document.body.scrollTop = 0
        document.documentElement.scrollTop = 0
    },
    addLinkActive: function(link, _this){
        link.forEach(element => {
            if (element.classList.contains('linkActive')) {
                element.classList.remove('linkActive')
            }
        })
        _this.classList.add('linkActive')
    },
    // setBgSection: ()=>{
    //     if (sectionIndex.classList.contains('active')) {
    //         sectionIndex.closest('.right-column').style.background = '#f5f5f5'
    //     }else{
    //         sectionIndex.closest('.right-column').style.background = '#FFFFFF'
    //     }
    // },
    parentLink: function(className){
        const __this = this;
        if (className != null) {
            className.forEach(element => {
                element.onclick = function(e) {
                    __this.hideMenu();
                    const id = this.id;
                    __this.removeVideo()
                    const sectionId = id.replace('Btn', '')
                    $('#contentSection').load('./sections/'+sectionId+'.php')
                    if (content.querySelector('section.active') !== null) {
                        content.querySelector('section.active').classList.remove('active')
                        $$('#contentSection' ).classList.add('active')
                        // if (flag == 0) {
                        // __this.dropdown(this)
                        // }
                        __this.scrToTop()
                    } else {
                        $$('#contentSection').classList.add('active')
                        // if (flag == 0) {
                        // __this.dropdown(this)
                        // }
                    }
                        __this.scrToTop()
                    __this.addLinkActive(cateLink, this)
                    // __this.setBgSection()
                    parentLi.forEach(el => {
                        if (el.classList.contains('menuActive') && el.querySelector('#'+element.id) === null) {
                            el.classList.remove('menuActive')
                            $(el).find('>.level').slideUp(500)
                            el.querySelector('.link-menu-parent').classList.remove('rotate')
                        }
                    })
                    if (element.closest('.parentLi') != null) {
                        element.closest('.parentLi').classList.add('menuActive') 
                    }else{
                        linkMenuClick.forEach(menu => {
                            if (menu.id === element.id) {
                                menu.closest('.parentLi').classList.add('menuActive')
                            }
                        })
                    }
                    // __this.applyMenuBlock()
                };
            })
        }
    },
    callMenuContent: function(menu, parent){
        let contentMenu = ''
        menu.forEach(element => {
            const el = element.querySelector('.link-menu-parent')
            contentMenu += `<li class="indexMenuLi"><a href="${el.hash}" id="${el.id}" class="indexMenu">${el.innerText}</a></li>`
        })
        parent.innerHTML = contentMenu;
    },
    callMenuContentExtension: function(menu, parent){
        parent.forEach(function(e,index) {
            let contentMenu = ''
            switch (index) {
                case 0:
                    contentMenu = ''
                    for (let i = index+1; i < menu.length+1; i++) {
                        const el = menu[i-1].querySelector('.link-menu-parent')
                        contentMenu += `<li class="indexMenuLi"><a href="${el.hash}" id="${el.id}" class="indexMenu">${el.innerText}</a></li>`
                        if (i%4==0) break;
                    }
                    e.innerHTML = contentMenu;
                    break;
                case 1:
                    contentMenu = ''
                    for (let i = 5; i < menu.length+1; i++) {
                        const el = menu[i-1].querySelector('.link-menu-parent')
                        contentMenu += `<li class="indexMenuLi"><a href="${el.hash}" id="${el.id}" class="indexMenu">${el.innerText}</a></li>`
                        if (i%4==0) break;
                    }
                    e.innerHTML = contentMenu;
                    break;
                case 2:
                    contentMenu = ''
                    for (let i = 9; i < menu.length+1; i++) {
                        const el = menu[i-1].querySelector('.link-menu-parent')
                        contentMenu += `<li class="indexMenuLi"><a href="${el.hash}" id="${el.id}" class="indexMenu">${el.innerText}</a></li>`
                    }
                    e.innerHTML = contentMenu;
                    break;
                default:
                    break;
            }
            if (index == 0) {
                
            }
        })
    },
    removeVideo: function(){
        video.classList.add('disnone')
    }
}
const app = {
    callMenu: function(){
        // Xu ly lay menu do ra ngoai trang index
        common.callMenuContent(themeInstallation,ug)
        common.callMenuContent(knowledgeBase,kb)
        common.callMenuContent(themeCustomize,bpb)
        common.callMenuContentExtension(extension,om)
        const indexLink = $$$('.indexMenu')
        common.parentLink(indexLink)
    },
    handleEvents: function() {
        // Xu ly dropdown menu
        // chevronDownClick.forEach(element => {
        //     element.addEventListener('click', function() {
        //         const aChild = this.closest('li').querySelector('a')
        //         $(this).closest('li').find('> .level').slideToggle(500)
        //         aChild.classList.toggle('rotate')

        //     });
        // })

        // Xu ly click menu show page
        common.parentLink(linkMenuClick, childLink);

        

        // Xu ly show scroll to top button
        window.onscroll = function() {
            if (window.pageYOffset > 1) {
                scrtotopbtn.classList.add('fade')
            } else {
                scrtotopbtn.classList.remove('fade')
            }
        }
        // Xu ly scroll to top
        scrtotopbtn.onclick = function() {
            common.scrToTop2()
        }
        
        // Xu ly thu nho menu
        // const defaultMenuWidth = menuLeft.offsetWidth
        // optionMenu.onclick = function(){
        //     menuLeft.classList.toggle('smallMenu')
        //     if (menuLeft.classList.contains('smallMenu')) {
        //         flag = 1
        //         parentLi.forEach(ele =>{
        //             $(ele).find('.level').slideUp(500)
        //             ele.querySelectorAll('a').forEach(aTag => {
        //                 aTag.classList.remove('rotate')
        //             })
        //         })
        //     }else{
        //         flag = 0
        //         parentLi.forEach(element => {
        //             if (element.classList.contains('menuActive')) {
        //                 $(element).find('>.level').slideDown(500);
        //                 element.querySelector('a').classList.add('rotate')
        //             }
        //         })
        //     }
        //     content.classList.toggle('defaultPadding')
        //     optionMenu.classList.toggle('rotate')
        //     $$$('.big').forEach(element => {
        //         element.classList.toggle('display-none')
        //     })
        //     textLogo.classList.toggle('smallL')
        //     contentMenu.classList.toggle('contentSmallMenu')
        //     $$('#knowledgeBase').querySelector('span').classList.toggle('spanFontSize')
        //     $$('#themeInstallation').querySelector('span').classList.toggle('spanFontSize')
        //     $$('#blueskytechcoPageBuilder').querySelector('span').classList.toggle('spanFontSize')
        //     subMenuA.forEach(element => {
        //         element.classList.toggle('padding')
        //     })
        //     groupMenuA.forEach(element => {
        //         element.classList.toggle('padding')
        //     })
        // }

        // Xu ly menu active

    },

    start: function() {
        this.handleEvents();
        this.callMenu();
        common.hideMenu();
    },
};
app.start();
