<footer id="top-footer">
  <div class="container">
	<h3>Our Partner</h3>
	<div class="customer-logos">
		
		@foreach (Auth::user()->partners() as $partner)
			<div class="slide">
				<a href="{{ $partner->url }}">
					<img src="/images/partners/{{ $partner->thumbnail }}" alt="{{ $partner->url }}">
				</a>
			</div>
		@endforeach
		
	</div>
  </div>
</footer>