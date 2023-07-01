<section class="section new" id="new">
                <h2 class="section__title">New Blog Posts</h2>

  <div class="new__container container">
      <div class="swiper new-swiper">
        <div class="swiper-wrapper">
       @foreach ($blogPosts as $post)
          <div class="new__content swiper-slide">
            <div class="new__tag">New</div>
            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="new__img">
            <h3 class="new__title">
              <a href="/blog/{{ $post->slug }}">{{ $post -> title }}</a></h3>
            <span class="new__subtitle">{{ $post -> description }}</span>
            <div class="new__info">
            <span><i class='bx bxs-user'></i>{{ $post->author }}</span>
                        <span><i class="bx bxs-calendar">{{ $post->updated_at }}</i></span>
                       </div>
                       
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            
            
  