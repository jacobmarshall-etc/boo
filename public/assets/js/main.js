var $media = $('.media').addClass('hidden');
var $document = $(document);
var $window = $(window);

function scroll() {
    var documentBox = $document.height() - 300;
    var windowBox = $window.scrollTop() + $window.height();
    if (windowBox >= documentBox) {
        if ($media.length) {
            next();
        } else {
            $window.off('scroll', scroll);
        }
    }
}

function next() {
    var $medias = $media.slice(0, 12).removeClass('hidden');
    $media = $media.not($medias);
}

$(function () {
    $window.on('scroll', scroll);
});

next();
