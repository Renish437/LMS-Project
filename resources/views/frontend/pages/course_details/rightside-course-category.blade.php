 <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Course Categories</h3>
                            <div class="divider"><span></span></div>
                            <ul class="generic-list-item">
                               @forelse($all_categories as $key => $value)
                                 <li><a href="#">{{$value->name}}</a></li>
                               @empty
                                   <li><a href="#">No categories</a></li>
                                
                               @endforelse
                             
                            </ul>
                        </div>
                    </div><!-- end card -->