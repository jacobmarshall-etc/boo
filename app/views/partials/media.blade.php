<article class="media" data-id="{{ $media->id }}">
    <figure class="media-preview">
        <img src="{{ $media->image_standard }}" srcset="{{ $media->image_retina }} 2x" class="media-image">
        <figcaption class="media-caption">{{ $media->caption }}</figcaption>
    </figure>
</article>
