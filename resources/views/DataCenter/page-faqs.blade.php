@php
    $faqPath = trim(request()->path(), '/') ?: '/';
    $pageFaqs = \App\Models\PageFaq::where('page_path', $faqPath)->where('is_active', true)->orderBy('position')->orderBy('id')->get();
@endphp
@if($pageFaqs->isNotEmpty())
<section class="py-5 bg-white" aria-labelledby="page-faq-heading"><div class="container"><div class="row g-4"><div class="col-lg-4"><h2 id="page-faq-heading" style="font-size:28px">Frequently asked questions</h2></div><div class="col-lg-8"><div class="accordion" id="page-faq-accordion">
@foreach($pageFaqs as $faq)
<div class="accordion-item"><h3 class="accordion-header" id="faq-heading-{{ $faq->id }}"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-answer-{{ $faq->id }}" aria-expanded="false" aria-controls="faq-answer-{{ $faq->id }}">{{ $faq->question }}</button></h3><div id="faq-answer-{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="faq-heading-{{ $faq->id }}" data-bs-parent="#page-faq-accordion"><div class="accordion-body" style="white-space:pre-line;overflow-wrap:anywhere">{{ $faq->answer }}</div></div></div>
@endforeach
</div></div></div></div></section>
@endif
