<section class="block-right-side">
	{{-- Facebook Block --}}
	<section id="block-fb-page">
		<div class="fb-page" data-href="https://www.facebook.com/bss.solution.kh/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bss.solution.kh/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bss.solution.kh/">BSS Solution</a></blockquote></div>
	</section>

	@if (count($documents) > 0)
			
		<section id="block-side-download" class="block-content">
			<div class="title-block">
				<h5 class="title">
					<div>
						<div class="text">
							<span>
								{{ __('frontend.sidebar_right.download') }}
							</span>
						</div>
					</div>
					
				</h5>			
			</div>
			<div class="content">
				<ul class="doc-list list-unstyled">
					@foreach ($documents as $document)
						<li>
							<a href="{{ route('document.show', $document->id) }}" target="_blank"><i class="fas fa-file-alt"></i>&nbsp; {{ $document->$name }}</a>
						</li>
					@endforeach
				</ul>
			</div>
		</section>
	@endif

	<section class="block-sidebar-right">
		{!! $web_config->sidebar_right !!}
	</section>
	
</section>