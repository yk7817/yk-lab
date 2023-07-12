// サブメニュー展開
const navLink = document.querySelectorAll('.p-header__nav > nav > ul > li');

// ナビ内項目にそれぞれクラス付与
for( let i = 0; i < navLink.length; i++ ) {
    navLink[i].classList.add('js-accordionTriger');
}

// クラス付与後の項目を取得
const triger = document.querySelectorAll('.js-accordionTriger');

// 項目内にサブメニューがある場合、サブメニューを展開
for( let i = 0; i < navLink.length; i++ ) {
    navLink[i].classList.add('js-accordionTriger');
    navLink[i].addEventListener('mouseenter', (e)=>{
        if( navLink[i].querySelector('ul') != null ){
            navLink[i].querySelector('ul').classList.add('is-active');
            const subMenuHeight = navLink[i].querySelector('ul').offsetHeight;
            navLink[i].querySelector('.p-submenu').animate(
                {
                    display: "block",
                    height: ["0px", subMenuHeight + "px"],
                },
                {
                    fill: "forwards",
                    duration: 200,
                }
            )
        }
    });
    // サブメニューからカーソルが外れたらアコーディオンを閉じる
    navLink[i].addEventListener('mouseleave', (e)=>{
        if( navLink[i].querySelector('ul') != null )
        navLink[i].querySelector('ul').classList.remove('is-active');
    });
};



// ハンバーガーメニュー
const menuIcon = document.getElementById('p-header__menuIcon');
// メインナビ
const mainMenu = document.querySelector(".p-header__nav > nav");
// メインナビheightアニメ用カウント
var mainNavHeightCount = 1;
var mainNavDeleteHeightCount = 284;
//ハンバーガーメニュー開閉処理
menuIcon.addEventListener('click', () =>{
    menuIcon.classList.toggle('is-active');
})

menuIcon.addEventListener('click', ()=>{
    if( mainMenu.classList.contains('is-close') ){
        mainMenu.classList.add('is-active');
        mainMenu.classList.remove('is-close');
        mainMenu.style.display = 'block';
        // mainMenu.style.height = '0px';
        console.log('is-activeです')
        // is-close animation
        var mainNavHeightCount = 1;
        var accordionActive = setInterval(()=>{
            var mainMenuHeight = mainMenu.offsetHeight;
            mainMenu.style.height = mainNavHeightCount * 6 + 'px';
            mainNavHeightCount ++;
            if( mainMenuHeight > 284 ) {
                console.log("284以上です")
                clearInterval( accordionActive );
            }
        },1)
        setTimeout(() => {
            mainMenu.style.height = 'auto';
        }, 220)
}
    else if( mainMenu.classList.contains('is-active') ){
        mainMenu.classList.remove('is-active');
        mainMenu.classList.add('is-close');
        mainMenu.style.display = 'block';
        console.log('is-closeです')
        var mainMenuHeight = mainMenu.offsetHeight;
        // is-active animation
        var accordionDelete = setInterval(()=>{
            console.log(mainMenuHeight)
            mainMenu.style.height = mainMenuHeight + 'px';
            mainMenuHeight -= 6;
            if( mainMenuHeight < 0 ){
                clearInterval( accordionDelete )
            }
        },1)
        setTimeout(()=>{
            mainMenu.style.display = 'none';
            mainMenu.style.height = '100%';
        },220)
}
    else {
        mainMenu.classList.add('is-active');
        mainMenu.style.display = 'block';
        var mainNavHeightCount = 1;
        var accordionActive = setInterval(()=>{
            var mainNavHeight = mainMenu.offsetHeight;
            mainMenu.style.height = mainNavHeightCount * 6 + 'px';
            mainNavHeightCount ++ ;
            if( mainNavHeight > 284 ){
                clearInterval( accordionActive )
            }
        },1)
        setTimeout(() => {
            mainMenu.style.height = 'auto';
        }, 220);
    }
});

// ブラウザ幅が1200以上になったらnavのcssを切り替え
function resizeWindow(){
    if( 1200 < window.innerWidth ){
        mainMenu.style.height = '100%';
        mainMenu.style.display = 'block';
    }
    else if( 1200 > window.innerWidth ){
        mainMenu.style.display = 'none';
    }
}

window.addEventListener('resize', resizeWindow)

// menuIcon.addEventListener('click', ()=>{
//     if ( mainMenu.classList.contains('is-close') ){
//         mainMenu.classList.add('is-active');
//         mainMenu.classList.remove('is-close');
//     }
//     if ( mainMenu.classList.contains('is-active') ){
//         mainMenu.classList.add('is-close');
//         mainMenu.classList.remove('is-active');
//     };
//     menuIcon.classList.toggle('is-active');
// });
//     menuIcon.classList.add('is-active');
//     mainMenu.classList.add('is-active');
//     // サブメニューアコーディオン
//     // レスポンシブナビを取得
//     if( mainMenu.classList.contains('is-close') == false ){
//     // if( document.querySelector('.p-header__nav > nav.is-active') != null ){
//         mainMenu.classList.remove('is-close');
//         mainMenu.style.display = 'block';
//         var mainMenuHeight = mainMenu.querySelector('ul').offsetHeight;
//         mainMenu.animate(
//             {
//                 height: ['0', mainMenuHeight + 'px'],
//             },
//             {
//                 duration: 200,
//             }
//         );
//         mainMenu.style.height = 'auto';
//     };
//     if( mainMenu.classList.contains('is-active') == true){
//         mainMenu.classList.add('is-close');
//         mainMenu.classList.remove('is-active');
//     };
// });

// menuIcon.addEventListener('click', (e) =>{
//     if( mainMenu.classList.contains('is-close') ){
//         mainMenu.classList.add('is-active');
//         mainMenu.classList.remove('is-close');
//     }
// });

// menuIcon.addEventListener('click', (e) =>{
//     if( mainMenu.classList.contains('is-actieve') ){
//         mainMenu.classList.add('is-close');
//         mainMenu.classList.remove('is-active');
//     }
// });

// menuIcon.addEventListener('click', (e) =>{
//     var mainMenu = document.querySelector(".p-header__nav > nav");
//     // メインメニューにクラス.is-activeが付いていたら
//     if( mainMenu.classList.contains('is-active') ) {
//         mainMenu.classList.remove('is-active');
//         mainMenu.classList.add('is-close');
//         var mainMenuHeight = mainMenu.querySelector('ul').offsetHeight;
//         mainMenu.animate(
//             {
//                 height: [mainMenuHeight + 'px', '0'],
//             },
//             {
//                 duration: 200,
//             }
//         )
//         mainMenu.style.display = 'none';
//     }
// })