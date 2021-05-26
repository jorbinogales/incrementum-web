$(document).ready(function(){
    setTimeout(function(){
        $('#nube1').addClass('cloudAnimationOne');
        $('#nube2').addClass('cloudAnimationTwo');

        $('#nube3').addClass('cloudAnimationThird');
        $('#nube4').addClass('cloudAnimationFour');

        $('#top h1').addClass('showTitle');
        $('#top h2').addClass('showTitle');
    },1000)

    setTimeout(function(){
        $('#nube1').addClass('cloudFloatingLeft');
        $('#nube2').addClass('cloudFloatingRight');

        $('#nube3').addClass('cloudFloatingLeft');
        $('#nube4').addClass('cloudFloatingRight');
    }, 3000);
})