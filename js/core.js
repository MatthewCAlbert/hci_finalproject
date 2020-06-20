'use strict'

//core function
var Strings = {
    create : (function() {
            var regexp = /{([^{]+)}/g;

            return function(str, o) {
                 return str.replace(regexp, function(ignore, key){
                       return (key = o[key]) == null ? '' : key;
                 });
            }
    })()
};
String.prototype.create = function(o) {
    return Strings.create(this, o);
}

class Carousel{
    data = [
        {
            "name":"",
            "text":"",
            "img_url":"",
            "url":""
        }
    ]
    variable = {
        gallery: ".carousel-gallery",
        content: ".carousel-content",
        nav_wrapper: ".carousel-navigation-wrapper",
        navigator_prev: ".navigator.left",
        navigator_next: ".navigator.right",
        selector_wrapper: ".selector",
    }
    option = {
        per_page: 1,
        loop: false, //useless
        autoplay: false,
        increment: 1,
        slideDuration: 10000,
    }
    constructor(targetid, data){
        this.target = targetid;
        this.data = data;
    }
    currentPage = 0;
    init(){
        //append initial image
        this.loadSlide(0);

        //event trigger
        $(this.target+" "+this.variable.navigator_next).on("click",()=>{
            this.nextSlide();
        });
        $(this.target+" "+this.variable.navigator_prev).on("click",()=>{
            this.prevSlide();
        });

        //start loop
        if( this.option.autoplay ){
            this.loop();
        }
    }
    loop(){
        this.evtloop = setInterval(()=>{
            //next slide
            this.nextSlide();
        },this.option.slideDuration);
    }
    loadSlide(start){
        let res = '';
        let datalen = this.data.length;
        for( let i = 0 ; i < this.option.per_page ; i++ ){
            let c = this.data[(start+i)%datalen];
            res += c.name;
            $(this.target+" "+this.variable.gallery).css('background-image','url('+c.img_url+')');
            $(this.target+" "+this.variable.content).html(c.text);
            $(this.target+" "+this.variable.content).html(c.text);
        }
    }
    nextSlide(){
        this.currentPage = (this.currentPage + 1)%(Math.ceil(this.data.length/this.option.per_page));
        let start = this.currentPage*this.option.per_page;
        this.loadSlide(start);
    }
    prevSlide(){
        this.currentPage = this.currentPage - 1 < 0 ? (Math.ceil(this.data.length/this.option.per_page))-1 : this.currentPage - 1;
        let start = this.currentPage*this.option.per_page;
        this.loadSlide(start);
    }
}