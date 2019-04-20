<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

.awesome {
    
    font-family: futura;
    font-style: italic;
    
    width:100%;
    
    margin: 0 auto;
    text-align: center;
    font-weight: bold;
    color:#313131;
    /* font-size:45px;
     */
    /* position: absolute; */
    -webkit-animation:colorchange 20s infinite alternate;
    
    
}

@-webkit-keyframes colorchange {
    0% {
    
    color: #000000;
    }
    
    10% {
    
    color: #DD0F0F;
    }
    
    35% {
    
    color:#FFE066;
    }
    
    50% {
    
    color: #60016b;
    }
    
    65% {
    
    color: #247BA0;
    }
    
    80% {
    
    color:#0F3A5D;
    }
    
    100% {
    
    color:#4f0000;
    }
    
   
}

.carousel-fade .carousel-inner .item {
    opacity: 0;
    transition-property: opacity;
}
.carousel-fade .carousel-inner .active {
    opacity: 1;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    left: 0;
    opacity: 0;
    z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
    opacity: 1;
}
.carousel-fade .carousel-control {
    z-index: 2;
}
@media all and (transform-3d),
(-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}
.item:nth-child(1) {
    background: url('{{asset('image/Times Rec.final-01.png')}}') no-repeat center center fixed;
   
}
.item:nth-child(2) {
    background: url('{{asset('image/Times Rec.final-02.png')}}') no-repeat center center fixed;
 
}
.item:nth-child(3) {
    background:url('{{asset('image/Times Rec.final-01.png')}}') no-repeat center center fixed;
   
}
.carousel {
    z-index: -99;
}
.carousel .item {
    position: relative;
    width: 100%;
    height: 100%;
}
.title {
  text-align: center;
  margin-top: 10px;
  padding: 10px;
  text-shadow: 2px 2px #000;
  color: #FFF;
}
</style>
