<!-- JS Implementing Plugins -->


<script src="{{_WEB_ROOT.'/public/admin/js/vendor.min.js'}}"></script>
<script src="{{_WEB_ROOT.'/public/admin/vendor/chart.js\dist\Chart.min.js'}}"></script>
<script src="{{_WEB_ROOT.'/public/admin/vendor/chart.js.extensions\chartjs-extensions.js'}}"></script>
<script src="{{_WEB_ROOT.'/public/admin/vendor/chartjs-plugin-datalabels\dist\chartjs-plugin-datalabels.min.js'}}"></script>



<!-- JS Front -->
<script src="{{_WEB_ROOT.'/public/admin/js/theme.min.js'}}"></script>

<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function() {
    // ONLY DEV
    // =======================================================

    if (window.localStorage.getItem('hs-builder-popover') === null) {
      $('#builderPopover').popover('show')
        .on('shown.bs.popover', function() {
          $('.popover').last().addClass('popover-dark')
        });

      $(document).on('click', '#closeBuilderPopover', function() {
        window.localStorage.setItem('hs-builder-popover', true);
        $('#builderPopover').popover('dispose');
      });
    } else {
      $('#builderPopover').on('show.bs.popover', function() {
        return false
      });
    }

    // END ONLY DEV
    // =======================================================


    // BUILDER TOGGLE INVOKER
    // =======================================================
    $('.js-navbar-vertical-aside-toggle-invoker').click(function() {
      $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
    });


    // INITIALIZATION OF MEGA MENU
    // =======================================================
    var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
      desktop: {
        position: 'left'
      }
    }).init();



    // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
    // =======================================================
    var sidebar = $('.js-navbar-vertical-aside').hsSideNav();


    // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
    // =======================================================
    $('.js-nav-tooltip-link').tooltip({
      boundary: 'window'
    })

    $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
      if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
        return false;
      }
    });


    // INITIALIZATION OF UNFOLD
    // =======================================================
    $('.js-hs-unfold-invoker').each(function() {
      var unfold = new HSUnfold($(this)).init();
    });


    // INITIALIZATION OF FORM SEARCH
    // =======================================================
    $('.js-form-search').each(function() {
      new HSFormSearch($(this)).init()
    });


    // INITIALIZATION OF SELECT2
    // =======================================================
    $('.js-select2-custom').each(function() {
      var select2 = $.HSCore.components.HSSelect2.init($(this));
    });


    // INITIALIZATION OF CHARTJS
    // =======================================================
    Chart.plugins.unregister(ChartDataLabels);

    $('.js-chart').each(function() {
      $.HSCore.components.HSChartJS.init($(this));
    });

    var updatingChart = $.HSCore.components.HSChartJS.init($('#updatingData'));

    // CALL WHEN TAB IS CLICKED
    // =======================================================
    $('[data-toggle="chart-bar"]').click(function(e) {
      let keyDataset = $(e.currentTarget).attr('data-datasets')

      if (keyDataset === 'lastWeek') {
        updatingChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
        updatingChart.data.datasets = [{
            "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
            "backgroundColor": "#377dff",
            "hoverBackgroundColor": "#377dff",
            "borderColor": "#377dff"
          },
          {
            "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
            "backgroundColor": "#e7eaf3",
            "borderColor": "#e7eaf3"
          }
        ];
        updatingChart.update();
      } else {
        updatingChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
        updatingChart.data.datasets = [{
            "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
            "backgroundColor": "#377dff",
            "hoverBackgroundColor": "#377dff",
            "borderColor": "#377dff"
          },
          {
            "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
            "backgroundColor": "#e7eaf3",
            "borderColor": "#e7eaf3"
          }
        ]
        updatingChart.update();
      }
    })


    // INITIALIZATION OF BUBBLE CHARTJS WITH DATALABELS PLUGIN
    // =======================================================
    $('.js-chart-datalabels').each(function() {
      $.HSCore.components.HSChartJS.init($(this), {
        plugins: [ChartDataLabels],
        options: {
          plugins: {
            datalabels: {
              anchor: function(context) {
                var value = context.dataset.data[context.dataIndex];
                return value.r < 20 ? 'end' : 'center';
              },
              align: function(context) {
                var value = context.dataset.data[context.dataIndex];
                return value.r < 20 ? 'end' : 'center';
              },
              color: function(context) {
                var value = context.dataset.data[context.dataIndex];
                return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
              },
              font: function(context) {
                var value = context.dataset.data[context.dataIndex],
                  fontSize = 25;

                if (value.r > 50) {
                  fontSize = 35;
                }

                if (value.r > 70) {
                  fontSize = 55;
                }

                return {
                  weight: 'lighter',
                  size: fontSize
                };
              },
              offset: 2,
              padding: 0
            }
          }
        },
      });
    });
    // Xử lý hiển thị vị trí navbar-vertical
    var fullUrl = window.location.href;
    console.log(fullUrl);
    var originUrl = window.location.origin
    var cutUrl = fullUrl.replace(originUrl, '')
    var newUrl = cutUrl.slice(1); 
    arr = newUrl.split('/')
    mainUrl = arr[1];

    classLinkEffectNavbar = 'active-' + mainUrl;
    console.log(classLinkEffectNavbar);

    var itemLinkEffect = document.querySelector(`.${classLinkEffectNavbar}`)
    console.log(itemLinkEffect);
    if(itemLinkEffect) {
      itemLinkEffect.classList.add('active')

      while (itemLinkEffect.parentElement) {
        if (itemLinkEffect.parentElement.matches(".class-open-effect-top")) {
          classOpenEffectTop = itemLinkEffect.parentElement
          classOpenEffectTop.classList.add('show') 
          break;
        }
        if (itemLinkEffect.parentElement.matches(".class-open-effect")) {
          classOpenEffect = itemLinkEffect.parentElement
          classOpenEffect.classList.add('show') 
        }
        itemLinkEffect = itemLinkEffect.parentElement
      }
    }


    // INITIALIZATION OF DATERANGEPICKER
    // =======================================================
    $('.js-daterangepicker').daterangepicker();

    $('.js-daterangepicker-times').daterangepicker({
      timePicker: true,
      startDate: moment().startOf('hour'),
      endDate: moment().startOf('hour').add(32, 'hour'),
      locale: {
        format: 'M/DD hh:mm A'
      }
    });

    var start = moment();
    var end = moment();

    function cb(start, end) {
      $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
    }

    $('#js-daterangepicker-predefined').daterangepicker({
      startDate: start,
      endDate: end,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      }
    }, cb);

    cb(start, end);



    // INITIALIZATION OF CLIPBOARD
    // =======================================================
    $('.js-clipboard').each(function() {
      var clipboard = $.HSCore.components.HSClipboard.init(this);
    });
  });
</script>

<!-- IE Support -->
<script>
  if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="{{_WEB_ROOT.' / public / admin / vendor / babel - polyfill / polyfill.min.js '}}"><\/script>');
</script>