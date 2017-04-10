<template>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
         
        <div class="well">
            <div id="myCarousel" class="carousel slide">
                
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <!--/item-->
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/Kartumizvazduha20082005.jpg" alt="Image" class="img-responsive"></a>
                            <p class="active">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi</p>
                            </div>
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/Kartumizvazduha20082005.jpg" alt="Image" class="img-responsive"></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi</p>
                            </div>
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/Kartumizvazduha20082005.jpg" alt="Image" class="img-responsive"></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi</p>
                            </div>
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/Kartumizvazduha20082005.jpg" alt="Image" class="img-responsive"></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi</p>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/Kartumizvazduha20082005.jpg" alt="Image" class="img-responsive"></a>
                            <p class="active">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi</p>
                            </div>
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/Kartumizvazduha20082005.jpg" alt="Image" class="img-responsive"></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi</p>
                            </div>
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/Kartumizvazduha20082005.jpg" alt="Image" class="img-responsive"></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi</p>
                            </div>
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="img/Kartumizvazduha20082005.jpg" alt="Image" class="img-responsive"></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi</p>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                </div>
                <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            <!--/myCarousel-->
        </div>
        <!--/well-->
    </div>         
    </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style lang="sass" scoped>
    .well 
        background: none
        margin-top: 28px
        border: none
    

    #myCarousel
    .thumbnail 
        border: none
        margin-bottom: 15px
        background: none
    p 
        margin-bottom: 30px 
        text-align: center
        &:hover 
            cursor: pointer
    .carousel-control 
        background: none
        i 
           margin-top: 50%
         

  

</style>
