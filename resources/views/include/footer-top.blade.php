<footer id="top-footer">
  <div class="container">
	<h3>{{ __('frontend.footer.partner') }}</h3>
	<div class="customer-logos">
		
		@foreach ($partners as $partner)
			<div class="slide">
				<a href="{{ $partner->url }}" target="_blanK">
					<img src="/images/partners/{{ $partner->thumbnail }}" alt="{{ $partner->url }}">
				</a>
			</div>
		@endforeach
		
	</div>
  </div>
</footer>