<div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <img src="" alt="">
        <div class="carousel-item active" style="background-image: url('{{ asset('images/back1.jpg') }}')">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="">First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
        </div>
        <div class="carousel-item " style="background-image: url('{{ asset('images/back2.jpg') }}')">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>

        </div>
        
        <div class="carousel-item " id="gaming" style="background-image: url('{{ asset('images/gaming1.png') }}')">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
        </div>

        
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
