


$('.carousel').carousel({
   interval: 3000,
   keyboard: false,
   pause: false,
   ride: 'carousel',
   wrap: true
 });



  // C O U N T E R
(function ($) {
      $.fn.countTo = function (options) {
          options = options || {};

          return $(this).each(function () {
              var settings = $.extend({}, $.fn.countTo.defaults, {
                  from:            $(this).data('from'),
                  to:              $(this).data('to'),
                  speed:           $(this).data('speed'),
                  refreshInterval: $(this).data('refresh-interval'),
                  decimals:        $(this).data('decimals')
              }, options);

              var loops = Math.ceil(settings.speed / settings.refreshInterval),
                  increment = (settings.to - settings.from) / loops;

              var self = this,
                  $self = $(this),
                  loopCount = 0,
                  value = settings.from,
                  data = $self.data('countTo') || {};

              $self.data('countTo', data);
              if (data.interval) {
                  clearInterval(data.interval);
              }
              data.interval = setInterval(updateTimer, settings.refreshInterval);
              render(value);
              function updateTimer() {
                  value += increment;
                  loopCount++;
                  render(value);
                  if (typeof(settings.onUpdate) == 'function') {
                      settings.onUpdate.call(self, value);
                  }
                  if (loopCount >= loops) {
                      // remove the interval
                      $self.removeData('countTo');
                      clearInterval(data.interval);
                      value = settings.to;

                      if (typeof(settings.onComplete) == 'function') {
                          settings.onComplete.call(self, value);
                      }
                  }
              }
              function render(value) {
                  var formattedValue = settings.formatter.call(self, value, settings);
                  $self.html(formattedValue);
              }
          });
      };
      $.fn.countTo.defaults = {
          from: 0,
          to: 0,
          speed: 2000,
          refreshInterval: 100,
          decimals: 0,
          formatter: formatter,
          onUpdate: null,
          onComplete: null
      };
      function formatter(value, settings) {
          return value.toFixed(settings.decimals);
      }
  }(jQuery));

  jQuery(function ($) {
    // custom formatting example
    $('.count-number').data('countToOptions', {
      formatter: function (value, options) {
        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
      }
    });
    $('.timer').each(count);
    function count(options) {
      var $this = $(this);
      options = $.extend({}, options || {}, $this.data('countToOptions') || {});
      $this.countTo(options);
    }
  });



        /* Portfolio Filter */

 initWorkFilter = function() {
   var filter, filterBlock, isotope_mode, itemSelector;
   filter = 0;
   filterBlock = $('.work-container');
   itemSelector = '.work-item';
   isotope_mode = 'masonry';
   filterBlock.imagesLoaded(function() {
     filterBlock.isotope({
       itemSelector: itemSelector,
       layoutMode: isotope_mode,
       filter: filter
     });
   });
   $('.filter li a').on('click', function() {
     $('.filter li').removeClass('active');
     $(this).parent().addClass('active');
     filter = $(this).attr('data-filter');
     filterBlock.isotope({
       itemSelector: itemSelector,
       layoutMode: isotope_mode,
       filter: filter
     });
     return false;
   });
 };

 initWorkFilter();
