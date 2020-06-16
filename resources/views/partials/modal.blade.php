<!-- Modal -->
    <div class="modal fade" id="accountPopup" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
             <img src="{{asset('/images/contact.png')}}" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  
<!-- Favorites -->
    <div class="modal fade" id="favoritesPopup" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
             @isset($favorites)
             <div class="row">
               <div class="col-md-6 col-lg-12">
              <ul class="list-group">
              @forelse($favorites as $listing)
                <li class="list-group-item">
                  <a href="tel:{{ $listing->phone }}">{{ $listing->title }}</a>
                  <p><a href="tel:{{ $listing->phone }}"><i class="fa fa-phone"></i> {{ $listing->phone }}</a></p>
                </li>
              @empty
              <p>No favorites. Heart something and refresh!</p>
              @endforelse
              </ul>
              </div>
              </div>
              
              @endisset
          </div>
        </div>
      </div>
    </div>