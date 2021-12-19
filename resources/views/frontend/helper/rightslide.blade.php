     <div class="moduletable">
    
          <h3>Category</span> </h3>
          
          <div class="module-body">
            <div class="custom">
              <ul>

                 <?php 
                        $category =DB::table('categories')->
                    get();
                        foreach ($category as $v_category){?>
                    <li><a href="{{ route('blog_by_category', $v_category->id) }}">{{$v_category->name}}</a></li>  
                   
                  <?php }?>
                           
              </ul>
            </div>
          </div>
          
        </div>
        <div class="moduletable">
    
          <h3>Archives</span> </h3>
          
          <div class="module-body">
            <div class="custom">
              <ul>
                <li><a href=""> January </a></li>
                <li><a href=""> February </a></li>
                <li><a href=""> March </a></li>
                <li><a href=""> April </a></li>
                <li><a href=""> May </a></li>
                <li><a href=""> June </a></li>
                <li><a href=""> July </a></li>
                <li><a href=""> September </a></li>
                <li><a href=""> October </a></li>
                <li><a href=""> November </a></li>
                <li><a href=""> December </a></li>
              </ul>
            </div>
          </div>
          
        </div>