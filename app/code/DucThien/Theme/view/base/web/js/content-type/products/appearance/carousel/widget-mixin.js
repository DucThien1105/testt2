define([
    'mage/utils/wrapper'
], function (wrapper) {
    'use strict';

    return function (widgetFunction) {
        return wrapper.wrap(widgetFunction, function (originalWidgetFunction, config, element) {
            config.breakpoints.desktop.options.products.default.slidesToShow = element.data('slides-show');
            config.breakpoints.mobile.options.products.default.slidesToShow = element.data('slides-show-m');
            config.breakpoints['mobile-small'].options.products.default.slidesToShow = element.data('slides-show-sm');
            config.breakpoints.tablet.options.products.default.slidesToShow = element.data('slides-show-tab');
            originalWidgetFunction(config, element);
        });
    };
});
