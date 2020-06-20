let disableLoader = true;
let delayLoader = 500;

if( disableLoader ) $('.loader-wrapper').css('display','none');

$(document).ready(()=>{
    setTimeout(()=>{
        $('.loader-wrapper').hide();
    },delayLoader);
})