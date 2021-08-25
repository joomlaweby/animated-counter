jQuery(document).ready(function () {
    let gwsCounters = jQuery('.counter');
    let gwsCounterElements = jQuery('.counter .animated-number');
    jQuery(gwsCounters).each(function (index) {
        jQuery(this).one('inview', function () {
            let gwsCounterElement = jQuery(this);
            gwsCounterElement.find('.animated-number').animationCounter({
                start: Number(gwsCounterElement.attr('data-start')),
                delay: Number(gwsCounterElement.attr('data-delay')),
                step: Number(gwsCounterElement.attr('data-step')),
                end: Number(gwsCounterElement.attr('data-end'))
            });
        });
    });
});


