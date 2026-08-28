@props(['content' => ''])
<section class="pb-20 sm:pb-28 lg:pb-32">
    <div class="mx-auto w-full max-w-3xl px-6 lg:px-8">
        {{-- One column at reading measure. The prose rules in site.css carry
             every element the editor can produce, since the body arrives as
             raw HTML and cannot hold utility classes. --}}
        <div class="prose border-t border-line pt-12" data-reveal>{!! $content !!}</div>
    </div>
</section>
