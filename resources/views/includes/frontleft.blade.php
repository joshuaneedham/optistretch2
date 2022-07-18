<div class="col-md-3 fp-left">
	<div id="fp-purchase-book-wrap" class="fp-left-item">
		{{--<div id="fp-purchase-book-img">
			<a href="/purchase" id="fp-purchase-book-top">Purchase Our Book</a>
			<a href="/purchase" id="fp-purchase-book-bottom">Purchase Our Book</a>
		</div>--}}
		@if (!Auth::guest())
		<a href="/book" id="fp-purchase-book-lnk"><img src="/assets/images/fp-book-access.jpg" alt="Read the Book Online" /></a>
		@else
		<a href="/purchase" id="fp-purchase-book-lnk"><img src="/assets/images/fp-purchase.jpg" alt="Purchase our Book" /></a>
		@endif
	</div>
	<div id="fp-common-back-pain-wrap" class="fp-left-item">
		<div id="fp-common-back-pain-img">
			<span id="span1" class="ttip" title="Trapezius Muscle Area"></span>
			<span id="span2" class="ttip" title="Rhomboid Muscle Area"></span>
			<span id="span3" class="ttip" title="Low Back Near midline - Erector Spine Muscle"></span>
			<span id="span4" class="ttip" title="Belt Line"></span>
			<span id="span5" class="ttip" title="Sacroiliac Joint Area - The most common area for Recurrent Low Back Pain"></span>
			<span id="span6" class="ttip" title="Major Hip Flexor Area"></span>
			<div class="fp-common-instruct">
				Hover your mouse, or tap the locations on the picture above
				for the most common location of back pain occurrences.
			</div>
		</div>
	</div>
</div>
