<section class="block-right-side">
	{{-- Facebook Block --}}
	<section id="block-fb-page">
		<div class="fb-page" data-href="https://www.facebook.com/bss.solution.kh/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bss.solution.kh/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bss.solution.kh/">BSS Solution</a></blockquote></div>
	</section>

	
	<section id="block-side-download" class="block-content">
		<div class="title-block">
			<h5 class="title">
				<span class="text">
					Download
					<span class="corner"></span>
				</span>
				
			</h5>
				<a href="#" class="show-all">Show all</a>
			
		</div>
		<div class="content">
			<ul class="doc-list list-unstyled">
				@foreach ($documents as $document)
					<li>
						<a href="{{ route('document.show', $document->id) }}"><i class="fas fa-file-alt"></i>&nbsp; {{ $document->$name }}</a>
					</li>
				@endforeach
			</ul>
		</div>

	</section>
	
</section>