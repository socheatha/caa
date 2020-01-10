
<footer id="bottom-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="email"><i class="fa fa-envelope"></i> &nbsp; info@thecmdf.org</div>
        <div class="phone"><i class="fas fa-phone"></i> &nbsp; {!! $web_config->$phone !!}</div>
        <div class="address"><i class="fa fa-home"></i> &nbsp; {!! $web_config->$address !!}</div>
      </div>
      <div class="col-sm-6 text-right">
        <ul class="list-inline footer-menu mb-0">
          @foreach ($menus as $menu)
            <li class="list-inline-item">
                <a href="{{ $menu->url }}">{{ $menu->$name }}</a>
            </li>
          @endforeach
        </ul>
        <div class="footer-copyright mb-0">{!! $web_config->$copyright !!}</div>
        <div class="dev-by mb-0">Website Develope by <a href="#">BSS Solution</a></div>
      </div>
    </div>
  </div>
</footer>