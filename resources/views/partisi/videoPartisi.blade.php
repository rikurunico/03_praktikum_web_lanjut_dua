<div class="row pt-4 pb-5">
    <div class="col-12">
        <h2 class="mb-5 tm-text-primary">Related Videos for You</h2>
        <div class="row tm-catalog-item-list">
            @foreach ($videos as $vid)
            <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                <div class="position-relative tm-thumbnail-container">
                    <img src="{{ asset($vid->gambar)}}" alt="Image" class="img-fluid tm-catalog-item-img">    
                    <a href="video-page" class="position-absolute tm-img-overlay">
                        <i class="fas fa-play tm-overlay-icon"></i>
                    </a>
                </div>    
                <div class="p-3 tm-catalog-item-description">
                    <h3 class="tm-text-gray text-center tm-catalog-item-title">{{ $vid->judul}}</h3>		                                
                </div>
            </div>
            @endforeach
        </div> 
    </div>
</div>
</div>      
<!-- Catalog Paging Buttons -->
<div>
    <ul class="nav tm-paging-links"> 
        <li class="nav-item"><a href="?page=1" class="nav-link tm-paging-link">1</a></li>
        <li class="nav-item"><a href="?page=2" class="nav-link tm-paging-link">2</a></li>
        <li class="nav-item"><a href="#" class="nav-link tm-paging-link">3</a></li>
        <li class="nav-item"><a href="#" class="nav-link tm-paging-link">4</a></li>
        <li class="nav-item"><a href="#" class="nav-link tm-paging-link">></a></li>
    </ul>
</div>