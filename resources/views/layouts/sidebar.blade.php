<div class="col-sm-3 offset-sm-1  blog-sidebar">

    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p> It is the purpose of <em>The Computer Security Blog</em> to provide guidance in recognizing threats, eliminating
            them where possible and, if not, then reducing any losses attributable to them.</p>
    </div>
                
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            @foreach ($archives as $archive)
                <li>
                    <a href="/?month={{ $archive['month'] }}&year={{ $archive['year'] }}">
                        {{ $archive['month'].' '.$archive['year'] }}
                    </a>
                </li>
            @endforeach
           
        </ol>
    </div>

    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">Github</a> </li>
            <li><a href="#">Twitter</a> </li>
            <li><a href="#">Facebook</a> </li>
        </ol>
    </div>

</div> <!-- .blog-sidebar  -->